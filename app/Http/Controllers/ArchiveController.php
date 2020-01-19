<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Model\ArchiveManagement;
use App\Model\poll;
use App\Model\rite;
use Illuminate\Routing\Controller;


class ArchiveController extends Controller
{
    public function list()
    {
        return view('archive_list');
    }

    public function year_list($title)
    {

        $archives = DB::table('archivemanagement')
                    ->select('title','year')
                    ->where('title',$title)
                    ->distinct('year')
                    ->get();

        return view('archive_year_list',compact('archives'));
    }

    public function daytime_list($tityear)
    {
        $title_and_year = (explode(",",$tityear));
        $title = $title_and_year[0];
        $year = $title_and_year[1];

        $archives = DB::table('archivemanagement')
                    ->select('title','year','daytime')
                    ->where('title',$title)
                    ->where('year',$year)
                    ->distinct('daytime')
                    ->get();

        return view('archive_daytime_list',compact('archives','title','year'));
    }

    public function show($obj)
    {
        $title_and_year = (explode("_",$obj));
        $title = $title_and_year[0];
        $year = $title_and_year[1];
        $daytime = $title_and_year[2];

        $archives = DB::table('archivemanagement')
        ->select('*')
        ->where('title',$title)
        ->where('year',$year)
        ->where('daytime',$daytime)
        ->get();

        // dd($archives);
        return view('archive_page',compact('archives','obj'));
    }

    public function poll()
    {
        $rite = rite::where('status',1)->first();
        return view('poll',compact('rite'));
    }

    public function doPoll(Request $request)
    {

        // $this->validate(request(),[
        //     'orator' => 'required',
        //     'singer' => 'required',
        //     'educational' => 'required',
        //     'reception' => 'required',
        //     'sound' => 'required'
        // ],[
        //     'orator.required' => 'سخنران مراسم را وارد کنید',
        //     'singer.required' => 'مداح مراسم را وارد کنید',
        //     'educational.required' => 'محتوای فرهنگی مراسم را وارد کنید',
        //     'reception.required' => 'پذیرایی مراسم را وارد کنید',
        //     'sound.required' => 'صوت مراسم را وارد کنید',
        // ]);

        if( request()->input('orator')==null ||
            request()->input('singer')==null ||
            request()->input('educational')==null ||
            request()->input('reception')==null ||
            request()->input('sound')==null
          ){
            return redirect()->back()->with('success', ' همه ی فیلد ها را پر کنید. ');
        }

        $rite = rite::where('status',1)->first();
        $new_data = [
            'rite_id' => $rite->id,
            'orator' => request()->input('orator') ,
            'singer' => request()->input('singer') ,
            'educational' => request()->input('educational') ,
            'reception' => request()->input('reception') ,
            'sound' => request()->input('sound')
        ];
        $new_object = poll::create($new_data);
        if ($new_object instanceof poll){
            return redirect()->back()->with('success', 'نظر شما با موفقیت ثبت گردید.');
        }
    }

}
