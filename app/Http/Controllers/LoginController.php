<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Model\ArchiveManagement;
use App\Model\admin;
use App\Model\rite;
use App\Model\poll;
use Illuminate\Support\Facades\Storage;

class LoginController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about_us()
    {
        return view('about_us');
    }

    public function login()
    {
        //-----------------------------
        // create a new admin:
        // $new = [
        //     'user' => 'ali' ,
        //     'pass' => 123
        // ];
        // $new = admin::create($new);
        //-----------------------------
        session(['login'=>547]);
        return view('AdminPanel/admin_login');
    }

    public function dologin(Request $request)
    {
        $admin = admin::first();
        $user = $admin->user;
        $pass = $admin->pass;
        $userin = $request->input('userName');
        $passin = $request->input('Password');

        try {
            $this->validate($request, [
                'userName' => 'required',
                'Password' => 'required',
            ], []);
        } catch (ValidationException $e) {
            return redirect()->back()->with('loginError','Error');
        }
        if ($user == $userin &&
            $pass == $passin ){
            session(['login'=>420]);
            return redirect('Admin/show');
        }
        return redirect()->back()->with('loginError','You are not admin!');
    }

    public function show(Request $request)
    {
        if ($request->session()->get('login') == 420) {
            return view('AdminPanel/admin_show');
        }
        else
            return view('404_not_found');
    }

    public function archive_manage(Request $request)
    {
        if ($request->session()->get('login') == 420) {
            return view('AdminPanel/admin_show_archive');
        }
        else
            return view('404_not_found');
    }

    public function upload(Request $request)
    {
        if ($request->session()->get('login') == 420) {
            return view('AdminPanel/archive_upload');
        }
        else
            return view('404_not_found');
    }

    public function doupload(Request $request)
    {
        $this->validate(request(),[
            'title' => 'required',
            'sub' => 'required',
            'year' => 'required',
            'daytime' => 'required',
            'type' => 'required',
            'media_type' => 'required',
            'fileItem' => 'required'
        ],[
            'sub.required' => 'موضوع مراسم را وارد کنید',
            'fileItem.required' => 'فایل مورد نظر را وارد کنید'
        ]);
        $new_data = [
            'title' => request()->input('title') ,
            'sub' => request()->input('sub') ,
            'year' => request()->input('year') ,
            'daytime' => request()->input('daytime') ,
            'type' => request()->input('type') ,
            'media_type' => request()->input('media_type')
        ];
        // dd($request->file('fileItem')->getName());

        if( $new_data['type'] == "عکس" )
        {
            $file_format = ( explode( "/",( $request->file('fileItem')->getMimeType() ) )[1] );
            $filegam = str_random(5);
            $file_name = $new_data['title'] . "-" . $new_data['year'] . "-" . $new_data['daytime'] . "-" . $filegam . "." .$file_format;

            // dd($file_name);

            $new_data = [
                'title' => request()->input('title') ,
                'sub' => request()->input('sub') ,
                'year' => request()->input('year') ,
                'daytime' => request()->input('daytime') ,
                'type' => request()->input('type') ,
                'media_type' => request()->input('media_type') ,
                'media_url' => $file_name
            ];
            $request->file('fileItem')->move(public_path('image'),$file_name);
        }
        else
        {

            $file_format = 'mp3';
            $filegam = $new_data['media_type'];
            $file_name = $new_data['title'] . "-" . $new_data['year'] . "-" . $new_data['daytime'] . "-" . $filegam . "." .$file_format;

            // dd($file_name);

            $new_data = [
                'title' => request()->input('title') ,
                'sub' => request()->input('sub') ,
                'year' => request()->input('year') ,
                'daytime' => request()->input('daytime') ,
                'type' => request()->input('type') ,
                'media_type' => request()->input('media_type') ,
                'media_url' => $file_name
            ];
            $request->file('fileItem')->move(public_path('voice'),$file_name);
        }

        $new_object = ArchiveManagement::create($new_data);
        if ($new_object instanceof ArchiveManagement){
            return redirect()->route('archive.upload')->with('success', 'آرشیو جدید با موفقیت ثبت گردید.');
        }
    }

    public function getLink($id)
    {
        $file= public_path(). "/voice" ."/" . $id;
        // dd($file);
        return response()->download($file);
        // return Storage::download($file);
    }

    public function delete($id)
    {
        $id = intval($id);
        $Item = ArchiveManagement::find($id);
        
        $file = 'image/' . $Item->media_url;
        if( $Item->type == "صوت" )
            $file = 'voice/' . $Item->media_url;

        Storage::delete($file);

        if($Item && $Item instanceof ArchiveManagement){
            $Item->delete();
            return redirect()->back();
        }
    }


    public function add_rite(Request $request)
    {
        if ($request->session()->get('login') == 420) {
            return view('AdminPanel/rite');
        }
        else
            return view('404_not_found');
    }

    public function do_add_rite(Request $request)
    {
        if( request()->input('sub')==null ||
            request()->input('startdate')==null ||
            request()->input('enddate')==null ||
            request()->input('startTime')==null ||
            request()->input('orator')==null ||
            request()->input('singer')==null
          ){
            return redirect()->back()->with('success', ' همه ی فیلد ها را پر کنید. ');
        }
        $rites = rite::where('status',0)->first();
        if( $rites != null ){
            return redirect()->back()->with('success', ' مراسمی در حال برگزاری می باشد ');
        }
        $new_data = [
            'title' => request()->input('title') ,
            'year' => request()->input('year') ,
            'sub' => request()->input('sub') ,
            'startdate' => request()->input('startdate') ,
            'enddate' => request()->input('enddate') ,
            'startTime' => request()->input('startTime') ,
            'orator' => request()->input('orator') ,
            'singer' => request()->input('singer') ,
        ];
        $new_object = rite::create($new_data);
        if ($new_object instanceof rite){
            return redirect()->back()->with('success', 'مراسم جدید با موفقیت ثبت گردید.');
        }
    }





    public function add_poll(Request $request)
    {
        if ($request->session()->get('login') == 420) {

            $rites = rite::all();
            $polls = DB::table('poll')
                      ->select(DB::raw('rite_id , sum(orator)/count(*) as orator , sum(singer)/count(*) as singer , sum(sound)/count(*) as sound , sum(educational)/count(*) as educational , sum(reception)/count(*) as reception'))
                      ->groupBy('rite_id')
                      ->get();

            $single_rites = array();

            for($i=0 ; $i<count($rites) ; $i++){
                if( $rites[$i]->status == 0 ){

                     array_push($single_rites,$rites[$i]);

                     unset($rites[$i]);
                     $tmp = current($rites);

                     $rites[0] = current($tmp);
                     for($a=1; $a<count($tmp); $a++){
                         $rites[$a] = next($tmp);
                     }
                     $rites[count($tmp)] = null;
                     unset($rites[count($rites)-1]);
                     $i--;
                     // $rites = $rites[0];
                }
            }
            // $new_rites = array();
            // for($i=0 ; $i<count($rites) ; $i++){
            //     if($rites[$i] != null){
            //         array_push($new_rites,$rites[$i]);
            //     }
            // }
            return view('AdminPanel/poll_mng',compact('single_rites','rites','polls'));
        }
        else
            return view('404_not_found');
    }

    public function do_add_poll($id)
    {
        $id = intval($id);
        $Item = rite::find($id);
        $rites = rite::all();
        foreach ($rites as $rite) {
            if( $rite->status == 1 ){
                return redirect()->back()->with('success', ' نظرسنجی دیگری درحال انجام شدن است ');
            }
        }

        $updated_data = $Item->update(
            [
                'title' => $Item->title,
                'year' => $Item->year,
                'startdate' => $Item->startdate,
                'enddate' => $Item->enddate,
                'startTime' => $Item->startTime,
                'orator' => $Item->orator,
                'singer' => $Item->singer,
                'status' => 1
            ]
        );
        $new_data = [
                'rite_id' => $id,
                'orator' => 0,
                'singer' => 0,
                'sound' => 0,
                'educational' => 0,
                'reception' => 0
        ];
        $new_data = poll::create($new_data);

        return redirect()->back()->with('success', ' نظرسنجی مورد نظر افزوده شد ');
    }

    public function end_poll($id)
    {
          $id = intval($id);
          $Item = rite::find($id);
          $updated_data = $Item->update(
              [
                  'title' => $Item->title,
                  'year' => $Item->year,
                  'startdate' => $Item->startdate,
                  'enddate' => $Item->enddate,
                  'startTime' => $Item->startTime,
                  'orator' => $Item->orator,
                  'singer' => $Item->singer,
                  'status' => 2
              ]
          );
          return redirect()->back()->with('success', ' نظرسنجی موردنظر پایان یافت ');
    }

    public function ignore_poll($id)
    {
        $id = intval($id);
        $Item = rite::find($id);
        $updated_data = $Item->update(
            [
                'title' => $Item->title,
                'year' => $Item->year,
                'startdate' => $Item->startdate,
                'enddate' => $Item->enddate,
                'startTime' => $Item->startTime,
                'orator' => $Item->orator,
                'singer' => $Item->singer,
                'status' => 2
            ]
        );
        $new_data = [
                'rite_id' => $id,
                'orator' => 0,
                'singer' => 0,
                'sound' => 0,
                'educational' => 0,
                'reception' => 0
        ];
        $new_data = poll::create($new_data);

        return redirect()->back()->with('success', ' نظرسنجی مورد نظر بیخیالیده شد ');
    }



    public function see_rite()
    {
        $rite = rite::where('status',0)->first();
        return view('see_rite',compact('rite'));
    }



}
