<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <script src="bootstrap/js/bootstrap.min.js">
    </script>
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style media="screen">
    @media only screen and (max-width:1200px){
      .quotes{
        display: none;
      }
      .img_size{
        position: absolute;
        width: 100%;
        height:100%;
        z-index: -1;
        filter: brightness(40%);
      }
    }
    *{
      padding: 0px;
      margin:0px;
    }
    .img_size{
      position: absolute;
      width: 100%;
      height:100%;
      z-index: -1;
      filter: brightness(40%);
    }
    .des{
      z-index: 1;
    }
    .card_custom{
      /*position: absolute;*/
      width: 380px;
      top: 70px;
      padding: 20px;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);

    }
    label{
      color: #586069;
      font-family:"calibri", sans-serif;
      font-size: 1.5em;
    }
    input{
      padding: 10px;
      border-radius:5px;
    }
    .btn_format{
      position: relative;
      width: 130px;
      margin-left: 110px;
      font-size: 1.25em;
      box-shadow: 0px 0px 2px rgba(0, 0, 0, 0.2);
    }
    .quotes{
      font-family:"aerial", sans-serif;
      color: white;
      text-align: center;
      margin-top: 200px;

      /* font-style: oblique; */
      /* font-weight: bold; */
    }
    .pass_def{
      padding-left: 3px;
      margin-left: 5px;
      margin-bottom: 5px;
      color: #586069;
      font-family:"calibri", serif;
      font-size: .8em;
    }
    </style>
  </head>
  <body>

<img src="<?php echo base_url();?>assets/register.jpg" alt="" class="img-fluid img_size">

<div class="container des">

    <div class="row">
      <div class="col-lg-7">
        <h2 class="quotes">"College is something you complete,<br>life is something you experience"</h2>
      </div>
      <div class="col-lg-5 col-md-12 col-sm-12">
        <br>
        <div class="card card_custom">
          <form class="form-group" method="post">
            <div class="row">
              <div class="col-lg-6">
                <label class="col-form-label" for="">First name</label>
                <input type="text" class="form-control" placeholder="john" >
              </div>
              <div class="col-lg-6">
                <label class="col-form-label" for="">Last name</label>
                <input type="text" class="form-control" placeholder="Doe">
              </div>
            </div>
            <label class="col-form-label" for="">Email</label>
            <input type="email" class="form-control" placeholder="johndoe@gmail.com">
            <label class="col-form-label" for="">Password</label>
            <input type="password" class="form-control" placeholder="Create a password">
            <p class="pass_def">Make sure it's 8 characers long.</p>
            <label class="col-form-label" for="">Confirm Password</label>
            <input type="password" class="form-control" placeholder="Re-enter your password">
            <label class="col-form-label" for="">Phone</label>
            <input type="tel" class="form-control" placeholder=""><br>
            <button type="button" class="btn btn-success btn_format">Proceed</button>
          </form>

        </div>
        <br>
          

      </div>
    </div>

    </div>
  </body>
</html>
