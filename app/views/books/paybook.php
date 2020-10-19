
<?php
    

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Books List</h2>
  <p>Total Books:</p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Academic year</th>
        <th>Orientation</th>
         <th>Book Name</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>  
      <tr>
         <td>
           
           <select name="name" class="form-control " id="name">   
               <option value="">select</option>  
              
              
              <option value=""><?php  ?></option>

             
          </select> 
          </td>
        <td>
         <select name="ac_year" class="form-control " id="ac_year"  onChange="getAc();">   
               <option value="">select</option>  
               <option value="">2016-2017</option>
               <option value="">2017-2018</option>
                <option value="">2018-2019</option>
                <option value="">2019-2020</option>
                <option value="">2020-2021</option>
          </select>
        </td>
        <td>
         <select name="orientation" class="form-control" id="orientation" >
              <option value="">select</option>
             
         <option value="<?php  ?>"><?php  ?></option>
       
        </select>
        </td>
        <td>
        <select name="books" class="form-control " id="books"  onChange="getAc();">     
              <option value="">select</option>    
         
         <option value="<?php  ?>"><?php  ?></option>
      
        </select>
        </td>
        </td>
        <td> <select name="price" class="form-control " id="price"  onChange="getAc();">     
              <option value="">select</option> 
             
            </select>
        </td>
      </tr>
 
    </tbody>

  </table>
</div>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">

 $(document).ready(function(){

    $('#orientation').on('change', function(){
        var orientationID = $(this).val();
        if(orientationID){
            $.ajax({
                type:'POST',
                url:'/app/web/books/paybook',,
                data:'orientation_id='+orientationID,
                datatype:"text",
                success:function(html){
                    $('#books').html(html);
                    
                }
            }); 
        }
    });
    $('#books').on('change', function(){
        var bookID = $(this).val();
        if(bookID){
            $.ajax({
                type:'POST',
                url:'/app/web/books/paybook',
                data:'book_id='+bookID,
                datatype:"text",
                success:function(html){
                    $('#price').html(html);
                }
            }); 
        }
    });
     });

</script>
