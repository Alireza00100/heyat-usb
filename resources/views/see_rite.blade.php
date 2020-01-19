<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style=" background-image: linear-gradient(to right, #000000 , #7e0808,#000000);">




    <div class="content" style="position:fixed;right:auto; top:10px; z-index: 10">
        <ul>
            <!-- <li><a href="#"></a></li> -->
            <li><a href="{{ route('index') }}">خانه</a></li>
            <li><a href="{{ route('poll') }}">نظرسنجی</a></li>
            <li><a href="{{ route('archive.list') }}">آرشیو</a></li>
            <li><a href="{{ route('about_us') }}">درباره ما</a></li>
        </ul>
    </div>



    <div style="margin:100px;">
        <h1 style="color:white">{{ $rite->title }} {{ $rite->year }}</h1>
        <h2 style="color:white">تاریخ شروع: {{ $rite->startdate }}</h2>
        <h2 style="color:white">تاریخ پایان: {{ $rite->enddate }}</h2>
        <h2 style="color:white">ساعت شروع: {{ $rite->startTime }}</h2>
        <h2 style="color:white">سخنران: {{ $rite->orator }}</h2>
        <h2 style="color:white">مداح: {{ $rite->singer }}</h2>
    </div>





</body>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  /* background-color: #333; */
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  color: #111;
  transition: 100ms;
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
