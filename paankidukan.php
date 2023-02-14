<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Paan Ki Dukan-PHP</title>
  </head>
  <body>
    <?php 
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];
    $flavor = $_POST["flavor"];
    $topping = $_POST["topping"];
    $bill = 0;
    $jelly = "Jelly";
    $chocolate = "Chocolate";
    $supari = "Supari";

    //echo "$name <br> $quantity <br> $flavor <br> $topping " ;
    
    if($flavor == "Sada - 100") {
        if($topping == "Jelly") {
            $bill = (100 + 100)  * $quantity ;
        } 
        elseif($topping == "Chocolate") {
            $bill = (100 + 200)  * $quantity;
        } 
        elseif($topping == "Supari") {
            $bill = (100 + 60)  * $quantity ;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;
      if($flavor == "Patti - 140") {
        if($topping == "Jelly") {
            $bill = (100 + 100)  * $quantity ;
        } 
        elseif($topping == "Chocolate") {
            $bill = (100 + 200)  * $quantity ;
        } 
        elseif($topping == "Supari") {
            $bill = (100 + 60)  * $quantity;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;
      if($flavor == "Zahoor Raja - 200") {
        if($topping == "Jelly") {
            $bill = (100 + 100)  * $quantity ;
        } 
        elseif($topping == "Chocolate") {
            $bill = (100 + 200)  * $quantity ;
        } 
        elseif($topping == "Supari") {
            $bill = (100 + 60)  * $quantity ;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;
      if($flavor == "Meetha Paan - 220") {
        if($topping == "Jelly") {
            $bill = (100 + 100)  * $quantity ;
        } 
        elseif($topping == "Chocolate") {
            $bill = (100 + 200)  * $quantity ;
        } 
        elseif($topping == "Supari") {
            $bill = (100 + 60)  * $quantity ;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;
      if($flavor == "Chocolate - 300") {
        if($topping == "Jelly") {
            $bill = (100 + 100)  * $quantity ;
        } 
        elseif($topping == "Chocolate") {
            $bill = (100 + 200)   * $quantity;
        } 
        elseif($topping == "Supari") {
            $bill = (100 + 60)  * $quantity ;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;
      if($flavor == "Nuts Paan - 350") {
        if($topping == "Jelly") {
            $bill = (100 + 100)  * $quantity ;
        } 
        elseif($topping == "Chocolate") {
            $bill = (100 + 200)  * $quantity ;
        } 
        elseif($topping == "Supari") {
            $bill = (100 + 60)  * $quantity ;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;
      if($flavor == "Fire Paan - 400") {
        if($topping == "Jelly") {
            $bill = (100 + 100)   * $quantity;
        } 
        elseif($topping == "Chocolate") {
            $bill = (100 + 200)  * $quantity ;
        } 
        elseif($topping == "Supari") {
            $bill = (100 + 60)  * $quantity ;
        }
        else {
          $bill = "Error 404";
        } ;
      } ;





      echo "<h1 class=text-center>Paan Shop Bill</h1>";
      echo "<table class='table table-bordered'> 
      <tr>
      <th>Name</th>
      <th>Quantity</th>
      <th>Flavor</th>
      <th>Topping</th>
      <th>Bill</th>
      </tr>
      <tr>
      <td>$name</td>
      <td>$quantity</td>
      <td>$flavor</td>
      <td>$topping</td>
      <td>$bill Rs</td>
      </tr>

      </table>";
    
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>