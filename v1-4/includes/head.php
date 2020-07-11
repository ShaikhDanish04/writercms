<?php
    $connect = mysqli_connect("localhost","root","","hindi_utsav");
    if(!$connect){
        echo "<script>alert('SQL SERVER Connection Failed')</script>";
    }
    if(!mysqli_select_db($connect,'hindi_utsav')){
        echo "<script>alert('Database Connection Failed')</script>";
    }
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Writer Theme | Writer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
   
    <style>
        td{ vertical-align: middle !important; }

        div.star{display:inline;}
        input.star { display: none; }

        label.star {
        float: right;
        padding:0.5rem;
        color: #444;
        transition: all .2s;
        margin:0;
        }

        input.star:checked ~ label.star:before {
        content: '\f005';
        color: #444;
        transition: all;
        }

        input.star-5:checked ~ label.star:before {
        color: #444;
        text-shadow: 0 0 5px #444;
        }

        input.star-1:checked ~ label.star:before { color: #F62; }

        label.star:hover { cursor: pointer; }

        label.star:before {
        content: '\f006';
        font-family: FontAwesome;
        }
        a.like-button.mt-5 {
            border: none;
            outline: none;
            font-size: large;   
        }
        a.like-button.mt-5.active{
            color: #4761e2;
        }
        form input[type=button]{
            margin: 30px 0;
            border: solid 2px #ccc;
            border-radius: 0;
            padding: 10px 25px;
            float: left;
            font-family: "Source Sans Pro", Helvetica, Arial, sans-serif;
            transition: all 0.3s;
            text-transform: uppercase;
            font-weight: 700;
        }
    </style>
</head>