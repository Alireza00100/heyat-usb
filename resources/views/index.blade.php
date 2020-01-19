<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Heyat</title>
</head>

<body>
<div class='wrapper' id='wrapper'>
    <div class='wrapper-3d'>
        <div class='carousel-wrapper center-3d'>
            <div class='carousel-container' id='center'>
                <div class='slide first'></div>
                <div class='slide second'></div>
                <div class='slide third'></div>
            </div>
            <div class='first image' id='img'></div>
        </div>
        <div class='carousel-wrapper left-3d center-3d'>
            <div class='carousel-container' id='left'>
                <div class='slide first'></div>
                <div class='slide second'></div>
                <div class='slide third'></div>
            </div>
        </div>
        <div class='carousel-wrapper right-3d center-3d'>
            <div class='carousel-container' id='right'>
                <div class='slide first'></div>
                <div class='slide second'></div>
                <div class='slide third'></div>
            </div>
        </div>
    </div>
</div>
<div class="content" style="position:fixed;right:auto; top:10px; z-index: 10">
    <ul>
        <!-- <li><a href="#"></a></li> -->
        <li><a href="{{ route('about_us') }}">درباره ما</a></li>
        <li><a href="{{ route('poll') }}">نظرسنجی</a></li>
        <li><a href="http://idpay.ir/heyatusb">نذورات</a></li>
        <li><a href="{{ route('see_rite') }}">برنامه بعدی</a></li>
        <li><a href="{{ route('archive.list') }}">آرشیو</a></li>
    </ul>
</div>
</body>

<style>
    @import url(https://fonts.googleapis.com/css?family=Lato);
    body {
        display: flex;
        height: 100vh;
        justify-content: center;
        align-items: center;
        text-align: center;
        font-family: "B Yekan";
        background: #222;
        background: rgba(61,61,61,1);
        background: -moz-linear-gradient(left, rgba(61,61,61,1) 0%, rgba(71,71,71,1) 12%, rgba(82,82,82,1) 51%, rgba(204,0,0,1) 100%);
        background: -webkit-gradient(left top, right top, color-stop(0%, rgba(61,61,61,1)), color-stop(12%, rgba(71,71,71,1)), color-stop(51%, rgba(82,82,82,1)), color-stop(100%, rgba(204,0,0,1)));
        background: -webkit-linear-gradient(left, rgba(61,61,61,1) 0%, rgba(71,71,71,1) 12%, rgba(82,82,82,1) 51%, rgba(204,0,0,1) 100%);
        background: -o-linear-gradient(left, rgba(61,61,61,1) 0%, rgba(71,71,71,1) 12%, rgba(82,82,82,1) 51%, rgba(204,0,0,1) 100%);
        background: -ms-linear-gradient(left, rgba(61,61,61,1) 0%, rgba(71,71,71,1) 12%, rgba(82,82,82,1) 51%, rgba(204,0,0,1) 100%);
        background: linear-gradient(to right, rgba(61,61,61,1) 0%, rgba(71,71,71,1) 12%, rgba(82,82,82,1) 51%, rgba(204,0,0,1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3d3d3d', endColorstr='#cc0000', GradientType=1 );
    }

     .navbar ul {
        /*display: flex;*/
        /*flex-direction: column;*/
        align-items: start;
        list-style-type: none;
    }
    .navbar ul li {
        margin-left: 14px;
        padding: 6px 0;
        display: inline-block;
        padding: 6px 0;
    }
    .navbar ul li a {
        position: relative;
        display: block;
        text-decoration: none;
        font-family: "b yekan";
        color: #ecf0f1;
        text-transform: uppercase;
        padding: 4px 0;
        transition: 0.5s;
        font-size: 22px;
    }
     .navbar ul li a::after {
        position: absolute;
        content: "";
        width: 100%;
        height: 3px;
        top: 100%;
        left: 0;
        background: #3498db;
        transition: transform 0.5s;
        transform: scaleX(0);
        transform-origin: right;
    }
    .navbar ul li a:hover {
        color: #95a5a6;
    }
    .navbar ul li a:hover::after {
        transform: scaleX(1);
        transform-origin: left;
    }

    body,
    html {
        width: 100%;
        height: 100%;
        padding: 0;
        margin: 0;
        background-image: linear-gradient(to right, #000000 , #3f0404,#000000);
        /*overflow: hidden;*/
    }

    .wrapper {
        position: absolute;
        top: 0;
        left: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
    }

    .wrapper-3d {
        position: relative;
        perspective: 250px;
        transform-style: preserve-3d;
    }

    .image {
        height: 175px;
        width: 300px;
    }

    .carousel-wrapper {
        overflow: hidden;
        width: 60vw;
        height: 80vh;
    }

    .carousel-container {
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 100%;
        transition: all 0.5s ease-out;
    }

    .slide {
        flex-shrink: 0;
        width: 100%;
        height: 100%;
    }

    /* The trick is to position them on their respective side
       Then set transform-origin to that siede
       And put desired angle
    */
    .left-3d {
        position: absolute;
        transform-origin: right center;
        transform: rotateY(100deg);
        top: 0;
        bottom: 0;
        right: calc(100%);
    }

    #left {
        transform: translateX(0%);
    }

    #center {
        transform: translateX(-100%);
    }

    .right-3d {
        position: absolute;
        transform-origin: left center;
        transform: rotateY(-100deg);
        top: 0;
        bottom: 0;
        left: calc(100%);
    }

    #right {
        transform: translateX(-200%);
    }

    .first,
    .second,
    .third {
        background-size: cover;
    }

    .first {
        background-image:url("2.jpg");

        /*background-image: url("https://images.unsplash.com/photo-1492970471430-bc6bd7eb2b13?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=9893bc89e46e2b77a5d8c091fbba04e9&auto=format&fit=crop&w=1355&q=80");*/
    }

    .second {
        background-image:url("3.jpg");
        /*background-image: url("https://images.unsplash.com/photo-1501707305551-9b2adda5e527?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0cf5887247e17503ce4e542d00d86b9d&auto=format&fit=crop&w=1335&q=80");*/
        background-position-y: 50%;
    }

    .third {
        background-image:url("4.jpg");
        /*background-image: url("https://images.unsplash.com/photo-1496749843252-699a989877a1?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fe5da9650707e5a93c8c3cf164c2e74b&auto=format&fit=crop&w=1375&q=80");*/
        background-position-y: 50%;
    }

    .debug {
        position: absolute;
        text-align: center;
        width: 100%;
        font-size: 1.1em;
        font-family: sans-serif;
        letter-spacing: 0.1em;
        font-weight: 200;
        margin: 0;
        margin-top: 10px;
        color: #fafafaee;
    }
    .debug-top {
        top: 2vh;
    }
    .debug-bot {
        bottom: 2vh;
    }

    .fa {
        font-size: 15rem;
        color: #fafafa99;
        line-height: 20px;
    }

    @media only screen and (min-width: 1600px) {
        .right-3d {
            transform: none;
            transform: rotateY(-120deg);
        }

        .left-3d {
            transform: none;
            transform: rotateY(120deg);
        }
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

.active {
  background-color: #6f0000;
}
</style>

<script>
    /*
  3d Carousel with set-width carousel.
 It's just 3 different views of the carousel.
 The side items have rotation with transition-origin on their respective edge
 And everything is wrapped by a perspective wrapper
  For set-width images with auto-width carousel check:
  **link**
*/
    // width - padding = min
    // padding = max
    const padding = 200;
    const slidesCount = 3 - 1;
    function map(x, in_min, in_max, out_min, out_max)
    {
        return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
    }
    document.addEventListener('mousemove', (e)=>{
        // Change to bodywidth
        const wrapper = document.getElementById('wrapper')
        const rect = wrapper.getBoundingClientRect();
    // Mouse position in between padding
    const mouseX = Math.min(Math.max(e.clientX - padding,0),rect.width - padding * 2);
    const rawPercent = map(mouseX, 0, rect.width - padding * 2, 100 - 100 * slidesCount, 100);
    const percent = Math.round(rawPercent)
    const left = document.getElementById('left');
    const center = document.getElementById('center');
    const right = document.getElementById('right');
    left.style.transform = `translateX(${percent}%)`;
    center.style.transform = `translateX(${percent - 100}%)`;
    right.style.transform = `translateX(${percent - 200}%)`;
    //debug
    const paragraph = document.getElementById('t');
    paragraph.innerHTML = percent;
    })
</script>
</html>
