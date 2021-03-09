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
   display:flex;
   justify-content:center;
   
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

input {
  border: none;
}

button:focus {
  outline: none;
}

::-webkit-input-placeholder {
  color: rgba(255, 255, 255, 0.65);
}

::-webkit-input-placeholder .input-line:focus +::input-placeholder {
  color: #fff;
}



.input-line:focus {
  outline: none;
  border-color: black;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.ghost-round {
  cursor: pointer;
  background: none;
  border: 1px solid rgba(255, 255, 255, 0.65);
  border-radius: 25px;
  color: rgba(255, 255, 255, 0.65);
  -webkit-align-self: flex-end;
  -ms-flex-item-align: end;
  align-self: flex-end;
  font-size: 19px;
  font-size: 1.2rem;
  font-family: roboto;
  font-weight: 300;
  line-height: 2.5em;
  margin-top: auto;
  margin-bottom: 25px;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.ghost-round:hover {
  background: rgba(255, 255, 255, 0.15);
  color: black;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.input-line {
  background: none;
  margin-bottom: 10px;
  line-height: 2.4em;
  color: #fff;
  font-family: roboto;
  font-weight: 300;
  letter-spacing: 0px;
  letter-spacing: 0.02rem;
  font-size: 19px;
  font-size: 1.2rem;
  border-bottom: 1px solid rgba(255, 255, 255, 0.65);
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}

.full-width {
  width: 100%;
}

.input-fields {
  margin-top: 25px;
}

.container {
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  -webkit-box-align: center;
  -webkit-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
  -ms-flex-pack: center;
  position:relative;
  right:-48%;
  top:60px;
  background: black;
  height: 80%;
}

.content {
  padding-left: 25px;
  padding-right: 25px;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: column;
  -ms-flex-flow: column;
  flex-flow: column;
  z-index: 5;
}

.welcome {
  font-weight: 200;
  margin-top: 75px;
  text-align: center;
  font-size: 40px;
  font-size: 2.5rem;
  letter-spacing: 0px;
  letter-spacing: 0.05rem;
}

.subtitle {
  text-align: center;
  line-height: 1em;
  font-weight: 100;
  letter-spacing: 0px;
  letter-spacing: 0.02rem;
}



.window {
  z-index: 100;
  color: black;
  font-family: roboto;
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-flex-flow: column;
  -ms-flex-flow: column;
  flex-flow: column;
  box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
  box-sizing: border-box;
  height: 560px;
  width: 360px;
  background: #fff;
  
}

.overlay {
  background: -webkit-linear-gradient(#8CA6DB, #B993D6);
  background: linear-gradient(#8CA6DB, #B993D6);
  opacity: 0.85;
  filter: alpha(opacity=85);
  height: 560px;
  position: absolute;
  width: 360px;
  z-index: 1;
}

.bold-line {
  background: #e7e7e7;
  position: absolute;
  top: 0px;
  bottom: 0px;
  margin: auto;
  width: 100%;
  height: 360px;
  z-index: 1;
  opacity:0.1;
    background: url('https://pexels.imgix.net/photos/27718/pexels-photo-27718.jpg?fit=crop&w=1280&h=823') left no-repeat;
  background-size:cover;
}

@media (max-width: 500px) {
  .window {
    width: 100%;
    height: 100%;
  }
  .overlay {
    width: 100%;
    height: 100%;
  }
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
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="/signup" method="POST">
  @csrf
  <div class='bold-line'></div>
<div class='container'>
  <div class='window'>
    <div class='overlay'></div>
    <div class='content'>
      <div class='welcome'>Hello There!</div>
      <div class='subtitle'><b>We're almost done. Before using our services please create an account.</b></div>
      <div class='input-fields'>
        <input type='text' placeholder='Username' class='input-line full-width' name='username'></input>
        <input type='text' placeholder='Contact no.' class='input-line full-width' name='contact'></input>
        <input type='email' placeholder='Email' class='input-line full-width' name='email'></input>
        <input type='password' placeholder='Set Password' class='input-line full-width' name='password'></input>
        <input type='password' placeholder='Confirm Password' class='input-line full-width' name='cpassword'></input>

      </div>
      <!--<div class='spacing'>or continue with <span class='highlight'>Facebook</span></div>-->
      <div><button class='ghost-round full-width'>Create Account</button></div>
    </div>
  </div>
</div>
</form>

</div>


</body>
</html>
@endsection