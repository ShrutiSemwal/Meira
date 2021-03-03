@extends('layout')

@section('title')
Register
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
        background-image: url('images/8.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }

      .blockquote-wrapper {
   display: flex;
   position:relative;
   left:-10%;
   height: 100vh;
   padding: 0 20px;
}

/* Blockquote main style */
.blockquote {
    position: relative;
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


    </style>
</head>
<body>

<div class="blockquote-wrapper">
  <div class="blockquote">
    <h1>
    "A good laugh <span style="color:#ffffff">and a long sleep</span> 
    are the best cures <span style="color:#ffffff">in the doctor’s book."</span>
     </h1>
    <h4>&mdash;Irish proverb<br></h4>
  </div>
</div>


</body>
</html>
@endsection