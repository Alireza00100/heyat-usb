<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/main.css') }}" />

</head>
<body style=" background-image: linear-gradient(to right, #000000 , #3f0404,#000000);">

<div class="content-archive">
    <p style="font-size: 20px; margin-right: 1%; color: white;">{{ $obj }}</p>
    <div class="container">
        @if($archives && count($archives) > 0)
            @foreach($archives as $archive)
                @if( $archive->type == "عکس" )
                    <div class="">
                        <img class="single" src="/image/{{$archive->media_url }}" alt="" >
                        @if( session()->get('login') == 420 )
                            <a href="{{ route('archive.delete',$archive->id) }}" style="color: white"><li class="child">حذف</li></a>
                        @endif
                    </div>
                @endif
            @endforeach
        @else
            <li style="color: white;">موردی یافت نشد</li>
        @endif

    </div>
    <div class="con-ul" style="margin-top: 2%">
        @if($archives && count($archives) > 0)
            @foreach($archives as $archive)
                @if( $archive->type == "صوت" )
                <div class="ul-first1">
                    <ul>
                        <li class="child" style="background: transparent;" >{{ $archive->media_type }}</li>
                        @if( session()->get('login') == 420 )
                            <a href="{{ route('archive.delete',$archive->id) }}" style="color: white"><li class="child">حذف</li></a>
                        @else
                        <a href="{{ route('archive.download',$archive->media_url) }}" style="color: white"><li class="child">دانلود</li></a>
                        @endif
                    </ul>
                </div>
                @endif
            @endforeach
        @else
            <li style="color: white;">موردی یافت نشد</li>
        @endif
    </div>
    <a href="{{ route('archive.list') }}" class="btn green">بازگشت</a>
</div>
</body>

<style>
    body {
        justify-content: center;
        align-items: center;
        font-family: "B Yekan";
        background-image: linear-gradient(to right, #000000 , #3f0404,#000000);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#6d0019', GradientType=1 );
        direction: rtl;
        padding: 0px 2%;
    }
    .single{
        border-radius: 72%;
        width: 1;
        height: 162px;
        width: 162px;
        justify-content: space-between;
    }
    .content-archive{
        background-color: #95a5a6;
        padding: 4%;
        background: transparent;
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#ffffff', GradientType=1 );
        border-radius: 50px;
        padding-bottom: 2%;
    }
    .container{
        display: flex;
        justify-content: space-around;
        border: 5px solid #3A222A;
        padding: 2% 1%;
        border-radius: 8px;
        overflow: hidden;
    }
    table.purpleHorizon {
        width: 350px;
        text-align: center;
    }
    table.purpleHorizon td, table.purpleHorizon th {
        padding: 5px 2px;
    }
    table.purpleHorizon tbody td {
        font-size: 13px;
        font-weight: bold;
        color: #FFFFFF;
    }
    table.purpleHorizon tr:nth-child(even) {
        /*background: #CC3BFC;*/
    }
    table.purpleHorizon thead {
        background: #792396;
        border-bottom: 4px solid #792396;
    }
    table.purpleHorizon thead th {
        font-size: 19px;
        font-weight: bold;
        color: #FFFFFF;
        text-align: left;
        border-left: 2px solid #792396;
    }
    table.purpleHorizon thead th:first-child {
        border-left: none;
    }

    table.purpleHorizon tfoot {
        font-size: 13px;
        font-weight: bold;
        color: #FFFFFF;
        background: #CE3CFF;
        background: -moz-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
        background: -webkit-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
        background: linear-gradient(to bottom, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
        border-top: 5px solid #792396;
    }
    table.purpleHorizon tfoot td {
        font-size: 13px;
    }
    table.purpleHorizon tfoot .links {
        text-align: right;
    }
    table.purpleHorizon tfoot .links a{
        display: inline-block;
        background: #792396;
        color: #FFFFFF;
        padding: 2px 8px;
        border-radius: 5px;
    }
    .tdclss{
        background: rgba(0,0,0,1);
        background: -moz-linear-gradient(left, rgba(0,0,0,1) 0%, rgba(231,56,39,1) 100%);
        background: -webkit-gradient(left top, right top, color-stop(0%, rgba(0,0,0,1)), color-stop(100%, rgba(231,56,39,1)));
        background: -webkit-linear-gradient(left, rgba(0,0,0,1) 0%, rgba(231,56,39,1) 100%);
        background: -o-linear-gradient(left, rgba(0,0,0,1) 0%, rgba(231,56,39,1) 100%);
        background: -ms-linear-gradient(left, rgba(0,0,0,1) 0%, rgba(231,56,39,1) 100%);
        background: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(231,56,39,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#e73827', GradientType=1 );
    }
    div.purpleHorizon {
        border: 4px solid #792396;
        background-color: #555555;
        width: 350px;
        height: 198%;
        text-align: center;
        border-collapse: collapse;
    }
    .divTable.purpleHorizon .divTableCell, .divTable.purpleHorizon .divTableHead {
        border: 1px solid #555555;
        padding: 5px 1px;
    }
    .divTable.purpleHorizon .divTableBody .divTableCell {
        font-size: 13px;
        font-weight: bold;
        color: #FFFFFF;
    }
    .divTable.purpleHorizon .divTableRow:nth-child(even) {
        background: #CC3BFC;
    }
    .divTable.purpleHorizon .divTableHeading {
        background: #792396;
        border-bottom: 4px solid #792396;
    }
    .divTable.purpleHorizon .divTableHeading .divTableHead {
        font-size: 19px;
        font-weight: bold;
        color: #FFFFFF;
        text-align: left;
        border-left: 2px solid #792396;
    }
    .divTable.purpleHorizon .divTableHeading .divTableHead:first-child {
        border-left: none;
    }

    .purpleHorizon .tableFootStyle {
        font-size: 13px;
        font-weight: bold;
        color: #FFFFFF;
        background: #CE3CFF;
        background: -moz-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
        background: -webkit-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
        background: linear-gradient(to bottom, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
        border-top: 5px solid #792396;
    }
    .purpleHorizon .tableFootStyle {
        font-size: 13px;
    }
    .purpleHorizon .tableFootStyle .links {
        text-align: right;
    }
    .purpleHorizon .tableFootStyle .links a{
        display: inline-block;
        background: #792396;
        color: #FFFFFF;
        padding: 2px 8px;
        border-radius: 5px;
    }
    .purpleHorizon.outerTableFooter {
        border-top: none;
    }
    .purpleHorizon.outerTableFooter .tableFootStyle {
        padding: 3px 5px;
    }
    /* DivTable.com */
    .divTable{ display: table; }
    .divTableRow { display: table-row; }
    .divTableHeading { display: table-header-group;}
    .divTableCell, .divTableHead { display: table-cell;}
    .divTableHeading { display: table-header-group;}
    .divTableFoot { display: table-footer-group;}
    .divTableBody { display: table-row-group;}
    ul{
        list-style-type: none  ;
    }
    .child{
        display: inline-block;
        margin-left: 40px;
        text-align: center;
        background-color: #8A1339;
        width: 108px;
        padding: 6px;
        border-radius: 8px;
        color: white;
    }
    .btn{
        padding: 2% 1%;
        background-color: white;
        display: block;
        width: 15%;
        text-align: center;
        align-items: center;
        /* display: flex; */
        /* flex-wrap: wrap; */
        margin: auto;
        border-radius: 60px;
        margin-top: 3%;
        color: white;
        background-color: #880E4F;
    }
    .btn a{
        color: white;
        text-decoration: none;
    }
    .btn {
        border-radius: 4px;
        text-transform: uppercase;
        position: relative;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        /* border: 1.5px solid black; */
        padding: 1% 2%;
        font-size: 3rem;
        border-radius: 12px;
        background-size: 300%;
        transition: all 0.9s;
    }

    .green {
        color: black;
        background-image: linear-gradient(-120deg, #e8e8e8 50%, white 50%);
        font-size: 27px;
    }

    .black {
        color: black;
        background-image: linear-gradient(90deg, white 50%, black 50%);
    }

    .orange {
        color: orange;
        background-image: linear-gradient(120deg, white 50%, orange 50%);
    }

    .blue{
        color: blue;
        background-image: linear-gradient(160deg, white 50%, blue 50%);
    }

    .pink{
        color: pink;
        background-image: linear-gradient(20deg, white 50%, pink 50%);
    }

    .btn:hover {
        color: #6f0f2e;
        background-position: 100%;
        transform: translateX(0.5rem);
    }

    .btn:active {
        transform: translate(0.5rem, 0.5rem);
        box-shadow: 0px 10px 20px -15px rgba(0, 0, 0, 0.75);
    }
    body { margin: 0; background:#222; overflow: hidden; }
    .ul-first1 ul a:hover{opacity: .5}
    ul a:hover{opacity: .5}
    .container .single img:hover{opacity: .5}

</style>

<script type="text/javascript">
    $(document).ready(function() {
        $("#single_1").fancybox({
            helpers: {
                title : {
                    type : 'float'
                }
            }
        });

        $("#single_2").fancybox({
            openEffect	: 'elastic',
            closeEffect	: 'elastic',

            helpers : {
                title : {
                    type : 'inside'
                }
            }
        });

        $("#single_3").fancybox({
            openEffect : 'none',
            closeEffect	: 'none',
            helpers : {
                title : {
                    type : 'outside'
                }
            }
        });

        $("#single_4").fancybox({
            helpers : {
                title : {
                    type : 'over'
                }
            }
        });
    });

</script>

</html>
