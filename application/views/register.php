<!DOCTYPE html>
<html>
  <head>
    
    <title>Registration</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
            media="screen" title="no title">
      <style>
      
      body{
            text-align: center;
            padding-top: 150px;
        }
        </style>
  </head>
  <body style="background-color: black;">

<span style="background-color:red;">
  <div class="container ">
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h2 class="panel-title"><b>PLEASE </b> <br><br><b><u> Registration HERE</u></b></h2>
                  </div>
                  <div class="panel-body">


                      <form role="form" method="post" action="<?php echo base_url('reg'); ?>">
                          <fieldset>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter Name" name="name" type="text" autofocus>
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter E-mail" name="email" type="email" autofocus>
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Password" name="pass" type="password">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter Age" name="age" type="number">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Enter 10 diMobile No" name="mobileno" type="number">
                              </div>

                              <input class="btn btn-lg btn-success btn-block" type="submit"  name="register" >

                          </fieldset>
                      </form>
                      <div text-align: center; ><br><b>If you have Already registered ?</b> <br></b><a href="<?= base_url('adm_login'); ?>"> 
                                                 <br><u> Please Login</u></a></div>
                  </div>
              </div>
          </div>
      </div>
  </div>

 </span>

  </body>
</html>