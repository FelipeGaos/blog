  <?php
  function isCheck($var){
    if(isset($var)){
      echo "<th> true </th> ";
    }
    else{
      echo "<th> false </th> ";
    }
    //////////////////////////////
    if(empty($var)){
      echo "<th> true </th> ";
    }
    else{
      echo "<th> false </th> ";
    }
    ////////////////////////////
    if(is_null($var)){
      echo "<th> true </th> ";
    }
    else{
      echo "<th> false </th> ";
    }
  }
  $varArray = array(
    "Null"=> null,
    "false"=> false,
    "0"=>0,
    "empty string" => '',
    "true" => true
  );

   ?>
   <!DOCTYPE html>
   <html>
     <head>
       <meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

       <title></title>
     </head>
     <body>
       <table class='table table-bordered table-hover'>
         <thead>

         <tr>
           <th>
             Value
           </th>
           <th>
             isset()
           </th>
           <th>
             empty()
           </th>
           <th>
             is_null
           </th>
         </tr>
         </thead>

       <?php foreach ($varArray as $key => $value) {
         # code...
         echo '<tr><th>'.$key.'</th>';
         isCheck($value);
         echo '</tr>';

       } ?>
     </table>
     </body>
   </html>
