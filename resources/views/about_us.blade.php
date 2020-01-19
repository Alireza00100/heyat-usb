<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    body {
        /*height: 100vh;*/
        justify-content: center;
        align-items: center;
        /*text-align: center;*/
        font-family: "B Yekan";
        /* background: rgba(61, 61, 61, 1);
        background: -moz-linear-gradient(left, rgba(61, 61, 61, 1) 0%, rgba(71, 71, 71, 1) 12%, rgba(82, 82, 82, 1) 46%, rgba(204, 0, 0, 1) 100%);
        background: -webkit-gradient(left top, right top, color-stop(0%, rgba(61, 61, 61, 1)), color-stop(12%, rgba(71, 71, 71, 1)), color-stop(46%, rgba(82, 82, 82, 1)), color-stop(100%, rgba(204, 0, 0, 1)));
        background: -webkit-linear-gradient(left, rgba(61, 61, 61, 1) 0%, rgba(71, 71, 71, 1) 12%, rgba(82, 82, 82, 1) 46%, rgba(204, 0, 0, 1) 100%);
        background: -o-linear-gradient(left, rgba(61, 61, 61, 1) 0%, rgba(71, 71, 71, 1) 12%, rgba(82, 82, 82, 1) 46%, rgba(204, 0, 0, 1) 100%);
        background: -ms-linear-gradient(left, rgba(61, 61, 61, 1) 0%, rgba(71, 71, 71, 1) 12%, rgba(82, 82, 82, 1) 46%, rgba(204, 0, 0, 1) 100%);
        background: linear-gradient(to right, rgba(61, 61, 61, 1) 0%, rgba(71, 71, 71, 1) 12%, rgba(82, 82, 82, 1) 46%, rgba(204, 0, 0, 1) 100%); */
        background-image: linear-gradient(to right, #000000 , #3f0404,#000000);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3d3d3d', endColorstr='#cc0000', GradientType=1);
    }
    .container {
        width: 94%;
        height: auto;
        padding: 3% 3%;
        background-color: black;
        padding-bottom: 7%;
        /* opacity: .3; */
        border-radius: 30px;
        /* margin-top: 9%; */
    }
    .b-color{
        width: 100%;
        height: 300px;
        /*padding: 3% 3%;*/
        background-color: black;
        opacity: .3;
    }
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

</style>
<body style="padding: 0% 13%; color: white; direction: rtl">
  <div class="content" style="position:fixed;right:auto; top:10px; z-index: 10">
      <ul>
          <!-- <li><a href="#"></a></li> -->
          <li><a href="{{ route('index') }}">خانه</a></li>
          <li><a href="{{ route('poll') }}">نظرسنجی</a></li>
          <li><a href="{{ route('see_rite') }}">برنامه بعدی</a></li>
          <li><a href="{{ route('archive.list') }}">آرشیو</a></li>
      </ul>
  </div>
<h1 style="margin-top: 14%;">درباره ما</h1>
    <div class="container" >
        <!--<div class="b-color"></div>-->

        <p style="color:white;">
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
        </p>

    </div>
</body>
</html>
