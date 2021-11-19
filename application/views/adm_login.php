<!DOCTYPE html>
<html>
  <head>
    
    <title>Login form</title>

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
                      <h2 class="panel-title"><b>PLEASE </b><br><br><u> <b>LOGIN HERE</b></u></h2>
                  </div>
                  <div class="panel-body">


                      <form role="form" method="post" action="<?php echo base_url('Login/adm_login');?>" >
                          <fieldset>
                            

                              <div class="form-group">
                                  <input class="form-control" placeholder="Please enter E-mail" name="email" type="email" autofocus >
                              </div>
                              <div class="form-group" >
                                  <input class="form-control" placeholder="Enter Password" name="pass" type="password">
                              </div>


                              <input class="btn btn-lg btn-success btn-block" type="submit" name="login" >

                          </fieldset>
                      </form>
                      <!-- <div text-align: center;><br><b>If you are not registered ?</b> <br><br></b><a href=""><u>Register here</u></a></div> -->
                  </div>
              </div>
          </div>
      </div>
  </div>

 </span>

  </body>
</html>