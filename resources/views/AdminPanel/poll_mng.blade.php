

<body>
    <section>
      <h1>مراسمات و نظرات</h1>
      @include('notifications')
      <div class="tbl-header">
        <table cellpadding="0" cellspacing="0">
          <thead>
            <tr>
              <th>عملیات</th>
              <th>صوت</th>
              <th>محتوای فرهنگی</th>
              <th>پذیرایی</th>
              <th>مداح</th>
              <th>سخنران</th>
              <th>سال</th>
              <th>عنوان مراسم</th>

            </tr>
          </thead>
        </table>
      </div>
      <div class="tbl-content">
        <table cellpadding="0" cellspacing="0">
          <tbody>
              @if( $rites && count($rites)>0 )
                  <?php $len = count($rites); ?>
                  @for( $i=0 ; $i<$len ; $i++ )
                      <tr>
                        @if( $rites[$i]->status == 1 )
                            <td> <a href="{{route('end_poll',$rites[$i]->id)}}" method="post" class="button button2">اتمام</a> </td>
                        @else
                            <td>-</td>
                        @endif
                        <td>{{ intval($polls[$i]->sound) }}</td>
                        <td>{{ intval($polls[$i]->educational) }}</td>
                        <td>{{ intval($polls[$i]->reception) }}</td>
                        <td>{{ intval($polls[$i]->singer) }}</td>
                        <td>{{ intval($polls[$i]->orator) }}</td>
                        <td>{{ $rites[$i]->year }}</td>
                        <td>{{ $rites[$i]->title }}</td>
                      </tr>
                  @endfor
              @endif
              @if( $single_rites && count($single_rites)>0 )
                  @foreach( $single_rites as $single_rite )
                      <tr>
                        <td> <a href="{{route('do_add_poll',$single_rite->id)}}" class="button button1">افزودن</a>
                             <a href="{{route('ignore_poll',$single_rite->id)}}" method="post" class="button button2">بیخیال</a> </td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>{{ $single_rite->year }}</td>
                        <td>{{ $single_rite->title }}</td>
                      </tr>
                  @endforeach
              @endif
          </tbody>
        </table>
      </div>
    </section>

    </body>


    <style>

    .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  padding: 5px 7px;
  background-color: transparent;
  color: white;
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  padding: 5px 7px;
  background-color: transparent;
  color: white;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}


h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background-image: linear-gradient(to right, #000000 , #3f0404,#000000);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}

.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


::-webkit-scrollbar {
    width: 6px;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
}


    </style>
