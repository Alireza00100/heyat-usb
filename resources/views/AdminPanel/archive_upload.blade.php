<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="frame2">
        @include('notifications')
        <form method="post" enctype="multipart/form-data">
            {{ csrf_field()  }}

            <label for="type" style="color:white;">مناسبت</label>
            <select id="type" name="title">
                    <option value="محرم">محرم</option>
                    <option value="فاطمیه">فاطمیه</option>
                    <option value="هفتگی">هفتگی</option>
                    <option value="قدر">قدر</option>
                    <option value="اربعین">اربعین</option>
            </select>


            <label for="type" style="color:white;">موضوع</label>
            <input type="text" id="lname" name="sub" placeholder="موضوع برنامه">


            <label for="year" style="color:white;">سال</label>
            <select id="year" name="year">
                    <option value="1395">1395</option>
                    <option value="1396">1396</option>
                    <option value="1397">1397</option>
                    <option value="1398">1398</option>
                    <option value="1399">1399</option>
                    <option value="1400">1400</option>
            </select>

            <label for="month" style="color:white;">زمان</label>
            <select id="time" name="daytime">
                    <option value="شب اول">شب اول</option>
                    <option value="شب دوم">شب دوم</option>
                    <option value="شب سوم">شب سوم</option>
                    <option value="شب چهارم">شب چهارم</option>
                    <option value="شب پنجم">شب پنجم</option>
                    <option value="شب ششم">شب ششم</option>
                    <option value="شب هفتم">شب هفتم</option>
                    <option value="شب هشتم">شب هشتم</option>
                    <option value="شب نهم">شب نهم</option>
                    <option value="شب دهم">شب دهم</option>
                    <option value="شام غریبان">شام غریبان</option>
                    <option value="ظهر اربعین">ظهر اربعین</option>
            </select>

            <label for="type" style="color:white;">نوع فایل</label>
            <select id="type" name="type">
                    <option value="صوت">صوت</option>
                    <option value="عکس">عکس</option>
            </select>

            <label for="type" style="color:white;"><br></label>
            <select id="type" name="media_type">
                    <option value="سخنرانی">سخنرانی</option>
                    <option value="روضه">روضه</option>
                    <option value="زمینه">زمینه</option>
                    <option value="واحد سنگین">واحد سنگین</option>
                    <option value="واحد سبک">واحد سبک</option>
                    <option value="تک">تک</option>
                    <option value="شور">شور</option>
                    <option value="شور پایانی">شور پایانی</option>

                    <option value="مدح">مدح</option>
                    <option value="سرود">سرود</option>
            </select>


            <div class="frame">

                <div class="center">
                    <div class="title">
                        <h1>Drop file to upload</h1>
                    </div>
                    <!-- <input type="file" name="fileItem" > -->

                    <div class="dropzone">
                        <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                        <input type="file" name="fileItem" class="upload-input" />
                    </div>

                    <button type="submit" class="btn">Upload file</button>

                </div>
            </div>


        </form>
    </div>


</body>
</html>

<style>


input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

@import url(https://fonts.googleapis.com/css?family=Open+Sans:700,300);
body{
    background-image: linear-gradient(to right, #000000 , #3f0404,#000000);
    display: flex;
  flex-direction: column;
}
select {
  width: 100%;
  padding: 16px 20px;
  border: none;
  border-radius: 4px;
  background-color: #f1f1f1;
}
.frame2{
    text-align: center;
    padding-right: 40%;
    padding-left: 40%;
    /* position: absolute;
    top: 0%;
    left: 30%;
    width:auto;
    height: auto;
    border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
    background: transparent;
	color: #333;
	font-family: "Open Sans", Helvetica, sans-serif; */
}
.frame {

	position: absolute;
	top: 75%;

	width: 400px;
	height: 400px;
	padding-top: 3px;
	left: 36%;
	border-radius: 2px;
	box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
	overflow: hidden;
	/* background: linear-gradient(to top right, #0c002b, #008000); */
    background: transparent;
	color: #333;
	font-family: "Open Sans", Helvetica, sans-serif;
}

.center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 300px;
	height: 260px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
	background: #fff;
	display: flex;
	align-items: center;
	justify-content: space-evenly;
	flex-direction: column;
}

.title {
	width: 100%;
	height: 50px;
	border-bottom: 1px solid #999;
	text-align: center;
}

h1 {
	font-size: 16px;
	font-weight: 300;
	color: #666;
}

.dropzone {
	width: 100px;
	height: 80px;
	border: 1px dashed #999;
	border-radius: 3px;
	text-align: center;
}

.upload-icon {
	margin: 25px 2px 2px 2px;
}

.upload-input {
	position: relative;
	top: -62px;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
}

.btn {
	display: block;
	width: 140px;
	height: 40px;
	background: linear-gradient(to top right, #0c002b, #008000);
	color: #fff;
	border-radius: 3px;
	border: 0;
	box-shadow: 0 3px 0 0 #0c002b;
	transition: all 0.3s ease-in-out;
	font-size: 14px;
}

.btn:hover {
	background: rebeccapurple;
	box-shadow: 0 3px 0 0 #0c002b;
}

</style>
