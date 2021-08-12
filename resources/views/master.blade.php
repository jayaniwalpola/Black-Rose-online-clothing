<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-clothing Shop</title>

    {{-- w3 --}}
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    {{-- <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}


</body>
<style>
    .w3-bar a{
        text-decoration: none;
        color: white;
    }
    .width-cart{
        width: 7%;
    }
    .login-card{
        padding: 3% ;
        margin-left: 0;

        width: 30%;
        height: 50%;
        margin-top: -190px;
        margin-right: 300px;
        float: right;
        z-index: -2;
    }




    .img img{

        width: 600px;
        height: 400px;
        padding-left: 5%;
        padding-top: 5%;
        margin-top: 3%;

        margin-bottom: -100px;
    }


    .footer{
        text-align: center;
        text-transform: uppercase;
        background-color: black;
        color: white;
        margin-top: 100px;
    }
    .footer a{
        color:white;
    }
    img.slider-img{
        height: 400px !important;
    }
    .slider-text{
        background-color: rgba(0, 0, 0, 0.432) !important;
    }
    .custom-product{
        height: 600px;
    }
    .trending-image{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .trending-wrapper{
        margin: 30px;
    }
    .detail-img{
        height: 300px;
    }


</style>


</html>
