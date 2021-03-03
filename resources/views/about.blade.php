@extends('layout')

@section('title')
About Us
@endsection

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
      body {
        background-image: url('images/4.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }
     
.container {
  position: relative;
  width: 1100px;
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  flex-wrap: wrap;
  padding: 30px;
}

.container .card {
  position: relative;
  max-width: 320px;
  height: 215px;
  background-color: #D8BFD8;
  margin: 30px 10px;
  padding: 20px 15px;
  display: flex;
  flex-direction: column;
  
  box-shadow: 0 5px 202px rgba(0, 0, 0, 0.5);
  transition: 0.5s ease-in-out;
}

.container .card:hover {
  height: 550px;
}

.container .card .imgBx {
  position: relative;
  width: 290px;
  height: 290px;
  top: -60px;
  left: 20px;
  z-index: 1;
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
}
.container .card .imgBx img {
  max-width: 100%;
  border-radius: 4px;
}

.container .card .content {
  position: relative;
  margin-top: -140px;
  padding: 10px 15px;
  text-align: center;
  color: #3f012c;
  visibility: hidden;
  opacity: 0;
  transition: 0.3s ease-in-out;
}

.container .card:hover .content {
  visibility: visible;
  opacity: 1;
  margin-top: -40px;
  transition-delay: 0.3s;
}
     
    </style>
</head>
<body>
<div class="container">
      <div class="card">
        <div class="imgBx">
          <img src="images/9.png" />
        </div>
        <div class="content">
          <h2><u>OUR PROFILE</u></h2>
          <p>
          Established in 2002, <em><b>Meira</b></em> aims for your wellbeing, giving you light as the name itself suggests. 
          We are always here to help you. <em><b>Meira</b></em> has emerged as the integrated healthcare services provider 
          and has a strong presence across healthcare atmosphere. <em><b>Meira</b></em> hospitals have embraced the responsibility of 
          keeping everyone healthy and happy.
          <pre> <b> ╰─────────────────╯</b></pre>
          </p>
        </div>
      </div>
</div>
       
</body>
</html>
@endsection