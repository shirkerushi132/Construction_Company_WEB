<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Company</title>

    <style>
        .alll{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .bdy{
            background-color: #e5e5e5;
            font-family: 'Poppins', sans-serif;
        }
        .main-bar{
            background-color: #22272b !important;
            display: flow-root;
            padding: 0 10%;
        }
        #check{
            display: none;
        }
        .logo-header{
            display: table;
            float: left;
            vertical-align: middle;
            padding: 0;
            color: #efbb20;
            margin-top: 0;
            margin-bottom: 0;
            margin-left: 0;
            margin-right: 0;
            width: 180px;
            height: 68px;
            position: relative;
            z-index: 9;
            transition: all 0.5s;
            -moz-transition: all 0.5s;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
        }
        .logo-header:before{
            content: "";
            position: absolute;
            bottom: 0;
            height: 100%;
            z-index: -1;
            right: -50px;
            width: 80%;
            transform: skew(30deg);
            background-color: #ffe10a;
        }
        .logo-header:after{
            content: "";
            position: absolute;
            bottom: 0;
            height: 100%;
            z-index: -1;
            right: 10%;
            width: 2000px;
            background-color: #ffe10a;
        }
        .logo-header a{
            color: #22272b;
            font-size: 33px;
            font-weight: 600;
            line-height: 70px;
            text-decoration: none;
        }
        ul{
            float: right;
        }
        nav ul li{
            display: inline-block;
            line-height: 38px;
            border-radius: 14px;
        }
        nav li.active a{
            color: #020101;
            background-color: #fddb0d;
            border-radius: 14px;
            font-weight: bold;
        }
        nav li a{
            padding: 15px 25px;
            border: 0;
            margin-bottom: 8px;
            font-size: 16px;
            font-weight: 500;
            color: #fff;
            opacity: 1;
            text-decoration: none;
            transition: all 0.5s;
            border-radius: 14px;
        }
        
        nav li:hover a{
            color: #020101;
            background-color: #fddb0d;
            border-radius: 14px;
            font-weight: bold;
        }

        @media(max-width: 1250px){
            .main-bar{
                padding: 0 2%;
            }
            nav li a{
                padding: 15px 20px;
            }
        }
        .checkbtn{
            float: right;
            width: 20px;
            height: 18px;
            position: relative;
            transform: rotate(0);
            transition: 0.5s ease-in-out;
            cursor: pointer;
            top: 25px;
            display: none;
        }

        .checkbtn span{
            background-color: #fff;
            display: block;
            position: absolute;
            height: 2px;
            width: 100%;
            border-radius: 1px;
            opacity: 1;
            left: 0;
            transform: rotate(0);
            transition: 0.25s ease-in-out;
        }
        .checkbtn span:nth-child(1) {
            top: 0;
        }
        .checkbtn span:nth-child(2) {
            top: 7px;
        }
        .checkbtn span:nth-child(3) {
            top: 14px;
        }

        @media(max-width: 992px){
            .main-bar{
                padding: 0 10%;
            }
            .checkbtn{
                display: block;
                margin-right: 40px;
            }
            nav ul{
                position: fixed;
                width: 350px;
                height: 100vh;
                background: #22272b;
                top: 68px;
                left: -100%;
                text-align: center;
                transition: all 0.5s;
            }
            nav ul li{
                display: block;
                margin: 50px 0;
                line-height: 30px;
            }
            #check:checked ~ ul{
                left: 0;
            }
        }

        @media(max-width: 560px){
            nav ul{
                display: block;
                width: 85%;
            }
        }


    </style>
</head>
<body class="bdy alll">

    <div class="main-bar">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <span></span>
                <span></span>
                <span></span>
            </label>

            <div class="logo-header">
                <a href="#">Logo</a>
            </div>

            <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Contact Us</a></li>

            </ul>
        </nav>
    </div>
    
</body>
</html>