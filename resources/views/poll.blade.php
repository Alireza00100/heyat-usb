<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<style>
    .form-group{
        margin: 29px 19px;
    border: 3px solid white;
    margin-bottom: 14px;
    padding: 12px;
    color: white;
    border-radius: 10px;
    }
    body{
        direction: rtl;
        font-family: b yekan;
        width: 40%;
    margin: auto;
    }
    #singlebutton{
        padding: 11px;
    background: #ffffff;
    font-size: 16px;
    color: black;
    font-family: b yekan;
    border-radius: 10px;
    cursor: pointer;
    float: left;
    margin-bottom: 9px;
    }
    #singlebutton:hover{
        transform: translateX(0.5rem);
    color: #108c15;
    transition: .3s;
    opacity: 1;
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




<body style=" background-image: linear-gradient(to right, #000000 , #7e0808,#000000);">
  <div class="content" style="position:fixed;right:auto; top:10px; z-index: 10;">
      <ul>
          <!-- <li><a href="#"></a></li> -->
          <li><a href="{{ route('index') }}">خانه</a></li>
          <li><a href="{{ route('about_us') }}">درباره ما</a></li>
          <li><a href="{{ route('archive.list') }}">آرشیو</a></li>
      </ul>
  </div>
@if( $rite )
    @include('notifications')
    <form class="form-horizontal" method="post" style="padding-top: 60px;">
      {{ csrf_field() }}
        <fieldset>

            <!-- Form Name -->
            <legend style="font-size: 25px; color: white;">فرم نظرسنجی - {{ $rite->title }} - {{ $rite->year }}</legend>


            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">نظر شما در رابطه با <span style="font-weight:bold ; color: ">سخنران</span> مراسم</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="orator" id="radios-0" value="1">
                        عالی
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="orator" id="radios-1" value="2">
                        خوب
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="orator" id="radios-2" value="3">
                        متوسط
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="orator" id="radios-3" value="4">
                        بد
                    </label>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">نظر شما در رابطه با <span style="font-weight:bold">مداح</span> مراسم</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="singer" id="radios-0" value="1">
                        عالی
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="singer" id="radios-1" value="2">
                        خوب
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="singer" id="radios-2" value="3">
                        متوسط
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="singer" id="radios-3" value="4">
                        بد
                    </label>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">نظر شما در رابطه با <span style="font-weight:bold">پذیرایی</span></label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="reception" id="radios-0" value="1">
                        عالی
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="reception" id="radios-1" value="2">
                        خوب
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="reception" id="radios-2" value="3">
                        متوسط
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="reception" id="radios-3" value="4">
                        بد
                    </label>
                </div>
            </div>

            <!-- Multiple Radios (inline) -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">نظر شما در رابطه با محتوای <span style="font-weight:bold">محتوای فرهنگی</span> مراسم</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="educational" id="radios-0" value="1">
                        عالی
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="educational" id="radios-1" value="2">
                        خوب
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="educational" id="radios-2" value="3">
                        متوسط
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="educational" id="radios-3" value="4">
                        بد
                    </label>

                </div>
            </div>


            <div class="form-group">
                <label class="col-md-4 control-label" for="radios">نظر شما در رابطه با <span style="font-weight:bold">صوت</span> مراسم</label>
                <div class="col-md-4">
                    <label class="radio-inline" for="radios-0">
                        <input type="radio" name="sound" id="radios-0" value="1">
                        عالی
                    </label>
                    <label class="radio-inline" for="radios-1">
                        <input type="radio" name="sound" id="radios-1" value="2">
                        خوب
                    </label>
                    <label class="radio-inline" for="radios-2">
                        <input type="radio" name="sound" id="radios-2" value="3">
                        متوسط
                    </label>
                    <label class="radio-inline" for="radios-3">
                        <input type="radio" name="sound" id="radios-3" value="4">
                        بد
                    </label>

                </div>
            </div>

            <!-- Button -->
            <div class="form-group" style="border: 0; border: 0;
            margin: 0px;">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" class="btn btn-primary" type="submit">ارسال فرم</button>
                </div>
            </div>

        </fieldset>
    </form>
@else
    <div style="color:white;">موردی یافت نشد</div>
@endif


</body>
</html>
