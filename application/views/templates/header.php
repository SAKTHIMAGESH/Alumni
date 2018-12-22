<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/form.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style type="text/css">
  body
  {
    margin-top:15px; 
    width: 100%;
  }
  #button {
  display: inline-block;
background-color: #3498db;
  width: 50px;
  height: 50px;
  text-align: center;
  border-radius: 4px;
  position: fixed;
  bottom: 30px;
  right: 30px;
  transition: background-color .3s, 
    opacity .5s, visibility .5s;
  opacity: 0;
  visibility: hidden;
  z-index: 1000;
}
#button::after {
  content: "\f077";
  font-family: FontAwesome;
  font-weight: normal;
  font-style: normal;
  font-size: 2em;
  line-height: 50px;
  color: #fff;
}
#button:hover {
  cursor: pointer;
  background-color: #333;
}
#button:active {
  background-color: #555;
}
#button.show {
  opacity: 1;
  visibility: visible;
}

</style>



</style>
<body>
  <a id="button" class=""></a>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
  
    <div class="container">


  <a class="navbar-brand" href="home"  ">&nbsp;Anjac Alumni</a>
  
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" href="#">Group Photos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Connect</a>
      </li>
        <li class="nav-item">

              <a  href="" class="nav-link" data-toggle="modal" data-target="#myModal">
Login
</a>
      </li>
      <li class="nav-item">
        <div class="dropdown">
  <a  href="register" class="nav-link  dropdown-toggle" data-toggle="dropdown">More </a>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="#">Alumni Needs</a>
    <a class="dropdown-item" href="#">Gallery</a>
    <a class="dropdown-item" href="#">FAQ</a>
  </div>
</div>
     
      </li>
    </ul>
  </div>
  </div>
</nav>
  <div class="myloginmodal">
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
           <h4 style="color:red;" align="center">Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="home/register">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
    </div>
  </div> 
</div>




  </div>
 


<!-- <ol class="breadcrumb" id="bc">
  <li class="breadcrumb-item"><a href="#">Home</a></li>
  <li class="breadcrumb-item"><a href="#">Library</a></li>
  <li class="breadcrumb-item active">Data</li>
</ol> -->

<script type="text/javascript" src="https://bootswatch.com/_vendor/jquery/dist/jquery.min.js" crossorigin="anonymous"></script>
<script  type="text/javascript" src="https://bootswatch.com/_vendor/popper.js/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script  type="text/javascript" src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
  
var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});






</script>