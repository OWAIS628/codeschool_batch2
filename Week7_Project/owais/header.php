<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
         body{
            background-image:url('background_of_bank.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
         }
         #pix{
            color: aliceblue;
         }
         .row{
            color: white;
         }
    </style>

</head>
<body>
<header>
        <div  class="container-fluid" id="header">
            <div class="row">
                <div class="col-sm-1">
                     <img src="pix_logo.jfif" width="30">
                </div>

                <div class="col-sm-3" id="pix"> 
                    <h2>PIXEL BANK</h2>
                </div>
            </div>
            
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <div class="row" >
                            <div class="col-sm-2">
                                 <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="false">Home</button>
                            </div>
    
                            <div class="col-sm-2">
                                 <button class="nav-link" id="nav-netBanking-tab" data-bs-toggle="tab" data-bs-target="#nav-netBanking" type="button" role="tab" aria-controls="nav-netBanking" aria-selected="false">Net Banking</button>
                            </div>
    
                            <div class="col-sm-2">
                                 <button class="nav-link" id="nav-services-tab" data-bs-toggle="tab" data-bs-target="#nav-services" type="button" role="tab" aria-controls="nav-services" aria-selected="false">services</button>
                            </div>
    
                            <div class="col-sm-2">
                                 <button class="nav-link" id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about" type="button" role="tab" aria-controls="nav-about" aria-selected="false">About</button>
                            </div>

                            <div class="col-sm-2">
                                 <button class="nav-link" id="nav-others-tab" data-bs-toggle="tab" data-bs-target="#nav-others" type="button" role="tab" aria-controls="nav-others" aria-selected="false">Others</button>
                            </div>

                            <!-- <div class="col-sm-2">
                                 <button class="nav-link" id="nav--tab" data-bs-toggle="tab" data-bs-target="#nav-" type="button" role="tab" aria-controls="nav-" aria-selected="false"></button>
                            </div> -->
                     </div> 
                </div>
            </nav>
    </header>
    <main id='main'>