<!DOCTYPE html>
  <html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
        <title>check mail</title>

        <style>
                div{
                            margin:auto;
                            width: fit-content;
                            height:fit-content;
                            border: 5px solid green;
                            padding-left: 100px;
                            padding-right: 100px;
                }

        </style>
   </head>
    <body style="padding-top: 10px;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        
        <div>
    <form method = "post" action ="login/mailsend/"enctype="multipart/form-data">   
    <br><br>
        EMAIL :<br> <input name ="email" type ="text" /><br>

        PASSWORD :<br> <input name ="pas" type ="password" /><br>

        TO : <br><input name ="to" type ="text" /><br>

        SUBJECT : <br><input name ="sub" type ="text" /><br>

        MESSAGE : <br>
                <textarea name ="mes" rows="15" cols="40"> </textarea> <br><br>
                
                <input name ="submit" type ="submit" /><br><br><br>
         </form>
        </div>
    </body>
  </html>
