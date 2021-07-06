<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnapCamp</title>
    <link rel="icon" type="image/png" href="<?= BASEURL; ?>/img/icon.jpg">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .a {
            z-index: -1;
            position: absolute;
            top: 70px;
            height: 100px;
        }
        
        .text-content {
            position: absolute;
            top: 170px;
            left: 30px;
            width: 380px;
            font-family: Century Gothic;
        }
        
        .text-content h3,
        .text-content p {
            display: inline;
        }
        
        .text-content p {
            font-size: 17px;
            font-weight: 500;
        }
        
        .text-content h3 {
            font-weight: bold;
        }
        
        #button_home {
            position: absolute;
            top: 360px;
            left: 30px;
        }
        
        #button1 {
            border-radius: 20px;
            font-weight: bold;
            background-color: #959595ff;
            width: 120px;
        }
        
        #button2 {
            border-radius: 20px;
            font-weight: bold;
            width: 120px;
            background-color: #ffd713ff;
        }
        
        .images {
            z-index: 1;
            position: absolute;
            top: 240px;
            left: 655px;
        }
        
        .images1 {
            width: 100%;
            /* height: 98vh; */
        }
        
        #text-link {
            color: black;
            font-family: Century Gothic;
            font-weight: bold;
        }
        
        .asas {
            width: 900px;
            background-color: blue;
        }
        
        #text-inactive {
            opacity: 0.5;
            font-family: Century Gothic;
            font-weight: bold;
        }
        
        .corner {
            z-index: -1;
            position: absolute;
            top: 0;
        }
    </style>
</head>