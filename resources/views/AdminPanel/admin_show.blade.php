<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Panel</title>
</head>
<body>
    <div class="container">
        <p> پنل مدیریت </p>
        <div class="test">
            <a href="{{ route('admin.login') }}" class="btn" > خروج</a>
            <a href="{{ route('archive.manage') }}" class="btn" >مدیریت آرشیو</a>
            <a href="{{ route('add_rite') }}" class="btn" >ایجاد مراسم جدید</a>
            <a href="{{ route('add_poll') }}" class="btn" > مدیریت نظر سنجی</a>
            <a href="http://idpay.ir/user/auth?destination=user/login" class="btn" > مدیریت نذورات </a>
        </div>
    </div>
</body>
</html>
<style>
    body {
        /* background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), */
        /* url(6.jpg) */
        background-image: linear-gradient(to right, #000000 , #3f0404,#000000);
        no-repeat: center center/cover;
        font-family: Arial, Helvetica, sans-serif;
    }
    .test{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    a{
        font-size: 1.5rem;
        padding: 1rem 3rem;
        color: #f4f4f4;
        text-transform: uppercase;
    }
    p {
        font-size: 1.5rem;
        padding: 1rem 3rem;
        color: #f4f4f4;
        text-transform: uppercase;
    }
    .btn {
        text-decoration: none;
        border: 1px solid rgb(146, 148, 248);
        position: relative;
        overflow: hidden;
    }

    .btn:hover {
        box-shadow: 1px 1px 25px 10px rgba(146, 148, 248, 0.4);
    }

    .btn:before {
        content: "";
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(
                120deg,
                transparent,
                rgba(146, 148, 248, 0.4),
                transparent
        );
        transition: all 650ms;
    }

    .btn:hover:before {
        left: 100%;
    }
</style>
