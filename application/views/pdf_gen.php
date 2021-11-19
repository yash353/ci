<!DOCTYPE html>
        <html >
            <head>
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
                      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

                 <title>form to create pdf</title>
            </head>


        <body style=" padding-left:100px">
                      <br>
                    <h1 style="text-align:center">CREATE YOUR PDF FILE</h1><br><br>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" 
                            integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

                            <form class="row g-3" action="login/pdf_gen/" method="post">
                <div class="col-md-4">
                    <label for="validationDefault01" class="form-label">First name</label>
                    <input type="text" class="form-control" id="validationDefault01"name="name"  required>
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02"name="lname" required>
                </div>
              
                <div class="col-md-6">

                    <label for="validationDefault03" class="form-label">city</label>
                    <input type="text" class="form-control" id="validationDefault03"name="city"required>
                </div>
                
                <div class="col-md-8">
                    <label for="validationDefault05" class="form-label">message</label>
                    <textarea class="form-control" placeholder="Leave a message here"name="msg"id="floatingTextarea"></textarea>
                </div>
                
                <div class="col-12"style="text-align:center">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
                </form>




           </body>
     </html>