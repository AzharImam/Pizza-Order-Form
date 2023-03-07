<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<?php 

  $uni = [
        "Index_1" => [
            "name" => "Butto Uni",
            "logo" => "https://png.pngtree.com/png-vector/20221030/ourmid/pngtree-university-logo-in-flat-style-png-image_6402847.png",
            "number" => "1020",
            "address" => "Korangi",
            "degree" => ["BA","phD","MS","MSC","BS",]
        ],

        "Index_2" => [
            "name" => "KASBIT Uni",
            "logo" => "https://t4.ftcdn.net/jpg/02/92/64/19/360_F_292641965_LeZzjp0GaGHixxRMBYQwJjskL1M5DPHO.jpg",
            "number" => "15",
            "address" => "Korangi",
            "degree" => ["BA","phD","MS","MSC","BS",]
        ],

        "Index_3" => [
            "name" => "NED Uni",
            "logo" => "https://www.nccu.edu/sites/default/files/styles/1_1_360x360/public/2022-10/sau.png?h=4de69ae3&itok=0vx7ekSD",
            "number" => "310",
            "address" => "Korangi",
            "degree" => ["BA","phD","MS","MSC","BS",]
        ],

        "Index_4" => [
            "name" => "KU Uni",
            "logo" => "https://img.freepik.com/premium-vector/campus-collage-university-education-logo-design-template_7492-63.jpg?w=360",
            "number" => "115",
            "address" => "Baldia",
            "degree" => ["BA","phD","MS","MSC","BS",]
        ],

    ]   ;
?>
<div class="row">
<?php
        foreach ($uni as $a => $b) {    
            ?>
        <div class="mt-4 col-md-3"> 
        <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="<?php echo "$b[logo]";   ?>" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"><?php echo "$b[name]";   ?></h5>
      <p class="card-text"><?php echo "$b[number]";   ?></p>
      <p class="card-text"><small class="text-muted"><?php echo "$b[address]";   ?></small></p>
      <p class="card-text"><small class="text-muted">
        <?php foreach ($b["degree"] as $degreearray) {
                echo " $degreearray";
            }   ?> </small></p>
      
    </div>
  </div>        
  </div>
</div>
<?php     
           }
 ?>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>