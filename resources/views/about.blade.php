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

      .blockquote-wrapper {
   
   position:relative;
   display:flex;
   justify-content:center;
   height: 100vh;
   padding: 0 20px;
}

/* Blockquote main style */
.blockquote {
    position: relative;
    right:-20%;
    font-family: 'Barlow Condensed', sans-serif;
    max-width: 620px;
    margin: 80px auto;
    align-self: center;
}

/* Blockquote header */
.blockquote h1 {
    font-family: 'Abril Fatface', cursive;
    position: relative; /* for pseudos */
    color: black;
    font-size: 2.8rem;
    font-weight: normal;
    line-height: 1;
    margin: 0;
    border: 2px solid #fff;
    border: solid 2px;
    border-radius:20px;
    padding: 25px;
}

/* Blockquote right double quotes */
.blockquote h1:after {
    content:"";
    position: absolute;
    border: 2px solid #e74848;
    border-radius: 0 50px 0 0;
    width: 60px;
    height: 60px;
    bottom: -62px;
    left: 50px;
    border-bottom: none;
    border-left: none;
    z-index: 3; 
}

.blockquote h1:before {
    content:"";
    position: absolute;
    width: 80px;
    border: 6px solid #292a2b;
    bottom: -3px;
    left: 50px;
    z-index: 2;
}

/* increase header size after 600px */
@media all and (min-width: 600px) {
    .blockquote h1 {
        font-size: 3rem;
        line-height: 1.2;
   }

}

/* Blockquote subheader */
.blockquote h4 {
    position: relative;
    color: #ffffff;
    font-size: 1.3rem;
    font-weight: 400;
    line-height: 1.2;
    margin: 0;
    padding-top: 15px;
    z-index: 1;
    margin-left:150px;
    padding-left:12px;
}

 
.blockquote h4:first-letter {
  margin-left:-12px;
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


<div class="blockquote-wrapper">
  <div class="blockquote">
    <h1>
    "He who has health  <span style="color:#ffffff">has hope; </span> 
    and he who has hope <span style="color:#ffffff">has everything."</span>
     </h1>
    <h4>&mdash;Arabian proverb<br></h4>
  </div>

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

</div>
       
</body>
</html>
@endsection