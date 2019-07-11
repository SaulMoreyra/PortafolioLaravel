<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Practica 01 DSOS</title>
    

    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        
    <style>
        body {
            background-color: #dcdcdc;
        }

        .jumbotron {
            text-align: center;
            width: 30rem;
            height: 40rem;
            border-radius: 0.5rem;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            position: absolute;
            margin: 4rem auto;
            background-color: #fff;
            padding: 2rem;
        }

        .container .glyphicon-user {
            font-size: 10rem;
            margin-top: 3rem;
            color: #f96145;
        }

        input {
            width: 100%;
            margin-bottom: 1.4rem;
            padding: 1rem;
            background-color: #ecf2f4;
            border-radius: 0.2rem;
            border: none;
        }
        h2 {
            margin-bottom: 3rem;
            font-weight: bold;
            color: #ababab;
        }
        .btn {
            border-radius: 0.2rem;
        }
        .btn .glyphicon {
            font-size: 3rem;
            color: #fff;
        }
        .full-width {
            background-color: #8eb5e2;
            width: 100%;
            -webkit-border-top-right-radius: 0;
            -webkit-border-bottom-right-radius: 0;
            -moz-border-radius-topright: 0;
            -moz-border-radius-bottomright: 0;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .box {
            position: absolute;
            bottom: 0;
            left: 0;
            margin-bottom: 3rem;
            margin-left: 3rem;
            margin-right: 3rem;
        }
    </style>

</head>
<body>
<div class="jumbotron">
  <div class="container">
    <div class="box">
        <span class="glyphicon glyphicon-user"></span>
        <h2>Login</h2>
        <input type="text" placeholder="username">
	    <input type="password" placeholder="password">
	    <button class="btn btn-default full-width"><span class="glyphicon glyphicon-ok"></span></button>
    </div>
  </div>
</div>
</body>
</html>