@extends('layout')

@section('title')
Login
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
        background-image: url('images/10.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
      }

     /* form animation starts */
.form {
  background: transparent;
  box-shadow: 0 30px 60px 0 rgba(90, 116, 148, 0.4);
  border-radius: 5px;
  max-width: 480px;
  margin-left: auto;
  margin-right: auto;
  padding-top: 10px;
  padding-bottom: 5px;
  left: 0;
  right: 0;
  position: absolute;
  top:60px;
  border-top: 5px solid black;
/*   z-index: 1; */
  animation: bounce 1.5s infinite;
}
::-webkit-input-placeholder {
  font-size: 1.3em;
}

.title{
  display: block;
  font-family: sans-serif;
  margin: 10px auto 5px;
  width: 300px;
}
.termsConditions{
  margin: 0 auto 5px 80px;
}

.pageTitle{
  font-size: 2em;
  font-weight: bold;
}
.secondaryTitle{
  color: white;
}

.name {
  background-color: #ebebeb;
  color: black;
}
.name:hover {
  border-bottom: 5px solid black;
  height: 30px;
  width: 380px;
  transition: ease 0.5s;
}

.email {
  background-color: #ebebeb;
  height: 2em;
}

.email:hover {
  border-bottom: 5px solid black;
  height: 30px;
  width: 380px;
  transition: ease 0.5s;
}

.message {
  background-color: #ebebeb;
  overflow: hidden;
  height: 10rem;
}

.message:hover {
  border-bottom: 5px solid black;
  height: 12em;
  width: 380px;
  transition: ease 0.5s;
}

.formEntry {
  display: block;
  margin: 30px auto;
  min-width: 300px;
  padding: 10px;
  border-radius: 2px;
  border: none;
  transition: all 0.5s ease 0s;
}

.submit {
  width: 200px;
  color: white;
  background-color: black;
  font-size: 20px;
}

.submit:hover {
  box-shadow: 15px 15px 15px 5px rgba(78, 72, 77, 0.219);
  transform: translateY(-3px);
  width: 300px;
  border-top: 5px solid white;
  border-radius: 0%;
}

@keyframes bounce {
  0% {
    tranform: translate(0, 4px);
  }
  50% {
    transform: translate(0, 8px);
  }
} 

    </style>
</head>

<body>

<div class="wrapper">

    <form class="form" action="/contactUs" method="post">
    @csrf
      <div class="pageTitle title">Welcome Back! </div>
      <div class="secondaryTitle title">Please login to continue.</div>
      <input type="text" class="name formEntry" placeholder="Name" name="name" />
      @if($errors->has('name'))
    <div class="error">{{ $errors->first('name') }}</div>
     @endif
      <input type="text" class="email formEntry" placeholder="Password" name="password"/>
      @if($errors->has('password'))
    <div class="error">{{ $errors->first('password') }}</div>
     @endif
      <button class="submit formEntry" onclick="thanks()">Submit</button>
      <button class="submit formEntry" ><a href="/register"> New here? Register here!</a></button>
    </form>
  </div>
  <script src="app.js"></script>


</body>
</html>
@endsection