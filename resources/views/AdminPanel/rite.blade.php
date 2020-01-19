<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="css/persianDatepicker.css" />
    <script type="text/javascript" src="js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="js/persianDatepicker.min.js"></script>
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
            <input type="text" id="lname" name="sub">

            <label for="type" style="color:white;"> سال</label>
            <input type="text" id="lname" name="year">

            <label for="type" style="color:white;">تاریخ شروع</label>
            <input style="margin:25px;" type="date" id="lname" name="startdate">
            <br>

            <label for="type" style="color:white;">تاریخ پایان</label>
            <input style="margin:25px;" type="date" id="lname" name="enddate">
            <br>

            <label for="type" style="color:white;">ساعت شروع</label>
            <input type="text" id="lname" name="startTime">

            <label for="type" style="color:white;"> سخنران</label>
            <input type="text" id="lname" name="orator">

            <label for="type" style="color:white;"> مداح</label>
            <input type="text" id="lname" name="singer">
            <div class="form-group">


            <div class="frame">
                <div class="center">
                    <button type="submit" class="btn">ایجاد</button>
                </div>
            </div>


        </form>
    </div>


</body>
</html>
<script type="text/javascript">
    $(function() {
        $("#input1").persianDatepicker();
    });
</script>









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
	top: 80%;

	width: 400px;
	height: 400px;
	padding-top: 3px;
	left: 37%;
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
	top: 25%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 300px;
	height: 260px;
	border-radius: 3px;
	box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
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
