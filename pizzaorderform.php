<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Pizza Order Form PHP</title>
  </head>
  <body>
    <div class="container-fluid">
      <?php
      $name = $_POST["name"];
      $address = $_POST["address"];
      $phone = $_POST["phone"];
      $quantity = $_POST["quantity"];
      $delivery = $_POST["delivery"];
      $size = $_POST["size"];
      $crust = $_POST["crust"];
      $bill = 0;
      $smallsizep = 700;
      $mediumsizep = 900;
      $largesizep = 1100;
      $crust1 = 700;
      $crust2 = 900;
      $crust3 = 1100;

      if($crust == "Stuffed Crust") {
        if($size == "Small") {
          $bill = ($crust1 + $smallsizep) * $quantity;
        } 
        elseif($size == "Medium") {
          $bill = ($crust1 + $mediumsizep) * $quantity;
        } 
        elseif($size == "Large") {
          $bill = ($crust1 + $largesizep) * $quantity;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;

      if($crust == "Cracker Crust") {
        if($size == "Small") {
          $bill = ($crust2 + $smallsizep) * $quantity;
        } 
        elseif($size == "Medium") {
          $bill = ($crust2 + $mediumsizep) * $quantity;
        } 
        elseif($size == "Large") {
          $bill = ($crust2 + $largesizep) * $quantity;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;

      if($crust == "Thin Crust") {
        if($size == "Small") {
          $bill = ($crust3 + $smallsizep) * $quantity;
        } 
        elseif($size == "Medium") {
          $bill = ($crust3 + $mediumsizep) * $quantity;
        } 
        elseif($size == "Large") {
          $bill = ($crust3 + $largesizep) * $quantity;
        } 
        else {
          $bill = "Error 404";
        } 
      } ;

      echo " 
      <h1 class='text-center'> RESULT</h1>
      <div class='text-center form-control'> 
      Person's Name :<strong> $name </strong> <br><br>
      Person's Address is :<strong> $address </strong> <br><br>
      Person's Phone Number :<strong> $phone</strong> <br><br>
      Pizza Quantity :<strong> $quantity </strong> <br><br>
      Delivery Method :<strong> $delivery </strong> <br><br>
      Pizza Size :<strong> $size </strong> <br><br>
      Pizza Crust :<strong> $crust </strong> <br><br>
      Total Bill :<strong> $bill </strong> <br><br>
      </div>
      ";
  
      ?>






















    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>