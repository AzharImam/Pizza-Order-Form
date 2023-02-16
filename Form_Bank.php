<?php 
if(isset($_POST["submit"])){
    $pin = $_POST["pin"];
    $option = $_POST["option"];
    $amount = $_POST["amount"];
    $pin = $_POST["pin"];
    $balance = 5000;

    if($pin == "1234" ) {
        switch($option) {
            case "1" :
                echo "<h2>Withdraw Amount</h2>";
                if($balance < $amount) {
                    echo "<h1 style='color:red'>Insufficient balance</h2>";
                }
                else {
                    $balance -=$amount;
                    echo "<h2>You withdraw Rs $amount and your new balance is Rs $balance</h2>";
                }
                break;
            case "2":
                echo "<h2>Deposit Amount</h2>";
                $balance += $amount;
                echo "<h2>You Deposited Rs $amount and your new balance is Rs $balance</h2>";
                break;
            case "3":
                echo "<h2>Check Amount <br> Your Current Balance is Rs $balance</h2>"; 
                break;
                default:
                echo "<script>
                alert('Invalid Option');
                window.location.href='Form_bank.html';
                </script>" ;  
        }
    }
    else{
        echo"<script>
            alert('Invalid Pin');
            window.location.href='Form_Bank.html';
        </script>";
    }

}   else {
    //redirect
    header("location:Form_Bank.html");
}
?>