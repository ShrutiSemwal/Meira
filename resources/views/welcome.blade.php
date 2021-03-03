@extends('layout')

@section('title')
Meira-Your Wellbeing
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>


.fullscreen-bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    z-index: -100;
}

.fullscreen-bg__video {
    position: absolute;
    top: 50%;
    left: 50%;
    width: auto;
    height: auto;
    min-width: 100%;
    min-height: 100%;
    -webkit-transform: translate(-50%, -50%);
       -moz-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
	    transform: translate(-50%, -50%);
}
@media (min-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    width: 100%;
    height: auto;
  }
}

@media (max-aspect-ratio: 16/9) {
  .fullscreen-bg__video {
    width: auto;
    height: 100%;
  }
}

@media (max-width: 767px) {
  .fullscreen-bg {
    background: url('../img/videoframe.jpg') center center / cover no-repeat;
  }

  .fullscreen-bg__video {
    display: none;
  }
}
body{
    position:relative;
}

.button {
 
  text-align: center;
  text-transform: uppercase;
  
  cursor: pointer;
  font-size: 20px;
  letter-spacing: 4px;
  
  position:absolute;
    bottom:0;  
    background-color: black;
  border: none;
  color: #fff;
  padding: 20px;
  width: 200px;
  text-align: center;
  transition-duration: 0.4s;
  overflow: hidden;
  box-shadow: 0 5px 15px #193047;
  border-radius: 4px;
}

button:last-child{
    left:480px;
}

.button:hover {
  background: #fff;
  box-shadow: 0px 2px 10px 5px #1abc9c;
  color: #000;
}

.button:after {
  content: "";
  background: #1abc9c;
  display: block;
  position: absolute;
  padding-top: 300%;
  padding-left: 350%;
  margin-left: -20px !important;
  margin-top: -120%;
  opacity: 0;
  transition: all 0.8s
}

.button:active:after {
  padding: 0;
  margin: 0;
  opacity: 1;
  transition: 0s
}

.button:focus { outline:0; }

    </style>
    
</head>
<body>

<div class="fullscreen-bg">
    <video  muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video">
        
        <source src="images/3.mp4" type="video/mp4">
        
    </video>
</div>
<!--<button class="button">Login</button> </br>
<button class="button">Register</button>-->
</body>
</html>

@endsection