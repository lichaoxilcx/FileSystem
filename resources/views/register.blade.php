<!DOCTYPE html>
<html>
<head>
    <title>用户登陆</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">
        body {
            background-color: gray;
        }
        .container, .container-fluid{
            max-width: 1200px;
            margin: auto;
        }

        .container{
            margin-top: 50px;
        }

        .content{
            width: 100%; 
            max-width: 350px;       
            margin: 0px auto;
            position: relative;
        }
        .login-area{
            margin: auto;
            margin-top: 100px;
            background-color: white;
            border-radius: 10px;
            padding: 20px;
        }
        .login-area-title{
            margin: 30px 0px;
            text-align: center;
        }

        .captche{
            height: 34px;
            padding: 2px;
        }

        .my-checkbox{
            min-height: 20px;
            margin-bottom: 0px;
            font-weight: 400;
        }

        h3{
            font-weight: 700;
        }

        .btn-black{
            background-color: black;
            border-color: black;
            color: white;
        }

        .btn-black:hover{
            color: white;
        }
    </style>

</head>
<body>
    <div class="content">
        <div class="login-area">
            <div class="login-area-title">
                <h3>用户注册</h3>
            </div>
            <form action="{{url('register')}}" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="请输入用户名" autocomplete="off" required="" value="{{old('name')}}">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="请输入邮箱" autocomplete="off" required="" value="{{old('email')}}">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="请输入密码" autocomplete="off" required="" value="{{old('password')}}">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="请确认密码" autocomplete="off" required="" value="{{old('password_confirmation')}}">
                </div>
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <button type="submit" class="btn btn-black btn-block">注册</button>
                </div>
                <div class="form-group">
                    <span class="pull-left"><a href="#">站点说明</a></span>
                    <span class="pull-right"><a href="{{url('login')}}">用户登陆</a></span>
                </div>
                <br>
            </form>
        </div>
    </div>
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>