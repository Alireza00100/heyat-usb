<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body style="padding: 0% 1%; color: white; direction: rtl">
<!--<h1 style="margin-top: 14%;">درباره ما</h1>-->
<div class="container">
    <!--<div class="b-color"></div>-->
    <div class="content">
        <ul>
            @if($archives && count($archives) > 0)
                @foreach($archives as $archive)
                    <?php $obj = ($archive->title) . "_" . ($archive->year) . "_" . ($archive->daytime) ; ?>
                    <li><a class="links" href="{{route('archive.show',$obj)}}">{{ $archive->daytime }}</a> </li>
                @endforeach
            @else
                <li style="color: white;">موردی یافت نشد</li>
            @endif
        </ul>
    </div>

</div>
</body>
</html>
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
        padding: 0% 1%;
        color: white;
        direction: rtl;
    }
    .container {
        width: 56%;
        height: 80%;
        padding: 0% 3%;
        padding-top: 9%;
        /* padding-top: 5%; */
        background-color: black;
        padding-bottom: 19%;
        /* opacity: .3; */
        border-radius: 30px;
        /* margin-top: 9%; */
        margin-top: 4%;
        float: right;
    }

    .b-color{
        width: 100%;
        height: 300px;
        /*padding: 3% 3%;*/
        background-color: black;
        opacity: .3;
    }
    .links{
        color: white;
        font-size: larger;
    }
    .links:hover{
        color: #c8cbcf;
        transition: 300ms;
    }
</style>