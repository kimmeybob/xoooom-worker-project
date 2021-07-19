<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="assets/css/timedropper.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

    <title>Login</title>

</head>

<style type="text/css">

body {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
}

img.logo {
  width: 100%;
  height: auto;
  margin-bottom: -5%;
  /* Recommended - Limit maximum width */
  max-width: 150px;
}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}
a
label {
  display: block;
  padding-bottom: 10px;
  font-size: 1.25em;
}

input{
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

label{
  font-family: 'roboto';
}
input{
  font-family: 'roboto';
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: black
  border: none;
  color: white;
  font-size: 1.25em;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}

@media screen and (max-width: 767px) {
 body #logo {
   max-width: 90%;
   display: block;
 }
}

</style>

<body>
    <div style="width: 100%; height: 7%; background: white;overflow:hidden;">
    <!-- NAV: Logo  ---->
    <h4 style="text-align:center;padding-top: 5%;background: white;">
        <img class="logo" src="images/logo.png" alt="XoooomAutospaLogo"> <br/> 
         Xoooom Autospa</h4>
        <p style="text-align: center;color: #868686;background: white;">Welcome to Xoooom Autospa Ozamiz Branch</p>
    
    </div>
    <div style="width: 100%; height: 0.1vh; background: #DCDCDC;overflow:hidden;margin-bottom: 10%;">
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <form action="login" method="POST">
      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="username">Username</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="text" id="username" name="username" placeholder="JohnDoe" pattern=[A-Z\sa-z]{3,20} required>
        </div>
      </div>

      <div class="form-group">
        <div style="width: 100%;display: inline-block;border: 1px solid #D3D3D3;padding-bottom: 1%;padding-top: 1%;padding-right: 2%;padding-left: 2%;border-radius: 15px;">
        <label style="color: #868686;font-size: 12px;" for="password">Password</label>
        <input style="border-radius: 10px;border-color: none; border-style: none;font-size: 14px" class="form-control" type="password" id="password" name="password" placeholder="********" required>
        </div>
      </div>
    
      <button  class="btn btn-primary btn-lg btn-block" style="background-color:black;border-color:black;font-size:18px;border-radius: 10px;" type="submit">Login</button>

    </form>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2020-2021 Xoooom Autospa</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>


</body>

</html>