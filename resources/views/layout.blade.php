
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    
    <title>@yield('title','Current Page')</title>

    
</head>

<!--Fixed layout -->
<body>
<input id="hamburger" class="hamburger" type="checkbox" />
<label for="hamburger" class="hamburger">
    <i></i>
  <text>
      <close>close</close>
      <open>menu</open>
    </text>
  </label>
  <nav class="primnav">
    <ul>
      <li>
        <a href="">
          <svg class="icon"><use xlink:href="#icon-th-large"></use></svg> Dashboard
        </a>
      </li>
      <li>
        <a href="">
          <svg class="icon"><use xlink:href="#icon-mail_outline"></use></svg> Doctors' Profile
          <!--<div class="tag">0</div>-->
        </a>
        <ul class="secnav">
        <li>
            <a href="">Speciality</a>
          </li>
          </ul>
      </li>
      <li>
        <a href="">
        
          <svg class="icon"><use xlink:href="#icon-bell2"></use></svg> Appointment Scheduling
          <!--<div class="tag">0</div>-->
        </a>
        <ul class="secnav">
          
          <li>
            <a href=""> See Calendar</a>
          </li>
        </ul>
      </li>
      <li>
        <a href="">
          <svg class="icon"><use xlink:href="#icon-equalizer"></use></svg> System Administration
        </a>
        <ul class="secnav">
          <li>
            <a href="">Doctors</a>
          </li>
          <li>
            <a href="">Patients</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>

<!--<user id="user">
  <section>
    <img src="" />
    <section>
      <name>Shruti Semwal</name>
      <actions><a href="#settings">settings</a> | <a href="#logout">logout</a></actions>
    </section>
  </section>
</user> -->

<content>
  <nav class="tabs">
    <ul>
      <li><a class="tab" href="/">Home</a></li>
      <li><a class="tab" href="/register">Register</a></li>
      <li><a class="tab" href="/login">Login</a></li>
      <li><a class="tab" href="/contactUs">Contact Us</a></li>
      <li><a class="tab" href="/aboutUs">About Us</a></li>
      
    </ul>
  </nav>
  <!--Variable Content-->
  @yield('content')

</content>




<svg style="position: absolute; width:0; height:0;" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<defs>

    
  <symbol id="icon-bell2" viewBox="0 0 32 32">
<title>bell2</title>
<path class="path1" d="M32.047 25c0-9-8-7-8-14 0-0.58-0.056-1.076-0.158-1.498-0.526-3.532-2.88-6.366-5.93-7.23 0.027-0.123 0.041-0.251 0.041-0.382 0-1.040-0.9-1.891-2-1.891s-2 0.851-2 1.891c0 0.131 0.014 0.258 0.041 0.382-3.421 0.969-5.966 4.416-6.039 8.545-0.001 0.060-0.002 0.121-0.002 0.183 0 7-8 5-8 14 0 2.382 5.331 4.375 12.468 4.878 0.673 1.263 2.002 2.122 3.532 2.122s2.86-0.86 3.532-2.122c7.137-0.503 12.468-2.495 12.468-4.878 0-0.007-0.001-0.014-0.001-0.021l0.048 0.021zM25.82 26.691c-1.695 0.452-3.692 0.777-5.837 0.958-0.178-2.044-1.893-3.648-3.984-3.648s-3.805 1.604-3.984 3.648c-2.144-0.18-4.142-0.506-5.837-0.958-2.332-0.622-3.447-1.318-3.855-1.691 0.408-0.372 1.523-1.068 3.855-1.691 2.712-0.724 6.199-1.122 9.82-1.122s7.109 0.398 9.82 1.122c2.332 0.622 3.447 1.318 3.855 1.691-0.408 0.372-1.523 1.068-3.855 1.691z"></path>
</symbol>
  <symbol id="icon-equalizer" viewBox="0 0 32 32">
<title>equalizer</title>
<path class="path1" d="M14 4v-0.5c0-0.825-0.675-1.5-1.5-1.5h-5c-0.825 0-1.5 0.675-1.5 1.5v0.5h-6v4h6v0.5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-0.5h18v-4h-18zM8 8v-4h4v4h-4zM26 13.5c0-0.825-0.675-1.5-1.5-1.5h-5c-0.825 0-1.5 0.675-1.5 1.5v0.5h-18v4h18v0.5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-0.5h6v-4h-6v-0.5zM20 18v-4h4v4h-4zM14 23.5c0-0.825-0.675-1.5-1.5-1.5h-5c-0.825 0-1.5 0.675-1.5 1.5v0.5h-6v4h6v0.5c0 0.825 0.675 1.5 1.5 1.5h5c0.825 0 1.5-0.675 1.5-1.5v-0.5h18v-4h-18v-0.5zM8 28v-4h4v4h-4z"></path>
</symbol>
  <symbol id="icon-mail_outline" viewBox="0 0 32 32">
<title>mail_outline</title>
<path class="path1" d="M16 14.688l10.688-6.688h-21.375zM26.688 24v-13.313l-10.688 6.625-10.688-6.625v13.313h21.375zM26.688 5.313c1.438 0 2.625 1.25 2.625 2.688v16c0 1.438-1.188 2.688-2.625 2.688h-21.375c-1.438 0-2.625-1.25-2.625-2.688v-16c0-1.438 1.188-2.688 2.625-2.688h21.375z"></path>
</symbol> 
  <symbol id="icon-th-large" viewBox="0 0 30 32">
<title>th-large</title>
<path class="path1" d="M13.714 18.286v6.857c0 1.25-1.036 2.286-2.286 2.286h-9.143c-1.25 0-2.286-1.036-2.286-2.286v-6.857c0-1.25 1.036-2.286 2.286-2.286h9.143c1.25 0 2.286 1.036 2.286 2.286zM13.714 4.571v6.857c0 1.25-1.036 2.286-2.286 2.286h-9.143c-1.25 0-2.286-1.036-2.286-2.286v-6.857c0-1.25 1.036-2.286 2.286-2.286h9.143c1.25 0 2.286 1.036 2.286 2.286zM29.714 18.286v6.857c0 1.25-1.036 2.286-2.286 2.286h-9.143c-1.25 0-2.286-1.036-2.286-2.286v-6.857c0-1.25 1.036-2.286 2.286-2.286h9.143c1.25 0 2.286 1.036 2.286 2.286zM29.714 4.571v6.857c0 1.25-1.036 2.286-2.286 2.286h-9.143c-1.25 0-2.286-1.036-2.286-2.286v-6.857c0-1.25 1.036-2.286 2.286-2.286h9.143c1.25 0 2.286 1.036 2.286 2.286z"></path>
</symbol>
</defs>
</svg>
<!--Fixed layout-->


</body>
</html>