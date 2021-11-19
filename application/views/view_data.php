<!DOCTYPE html>
      
    <html lang="en">
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        </head>
        <body>
        <table  class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">S.NO.</th>
      <th scope="col">NAME</th>
      <th scope="col">MOBILE-NO.</th>
      <th scope="col">EMAIL</th>
      <th scope="col">AGE</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPERATION</th>

    </tr>
    </thead>
    
    
    <?php
        print_r($fetch);
        if($fetch)
        {
            foreach($fetch as $row)
            {
            ?> 

     <tbody>
     <tr>
       
        <td> <?php echo $row->sno; ?> </td>
        <td> <?php echo $row->name; ?> </td>
        <td> <?php echo $row->mobileno; ?> </td>
        <td> <?php echo $row->email; ?> </td>
        <td> <?php echo $row->age; ?> </td>
        <td> <?php echo $row->pass; ?> </td>
        

        </tr> 
        </tbody>
        
        <?php
            }
        }
        else{
             
            echo "data not found";
        }
        ?>
        
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        </body>
        </html>
         <!-- <td>
              <a href="<?php echo base_url(); ?>login/edit <?php echo $row['name']; ?>">EDIT </a>
            <a href="<?php echo base_url(); ?>login/delete <?php echo $row['name']; ?>">DELETE </a> 
        </td>-->