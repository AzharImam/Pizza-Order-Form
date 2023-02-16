<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case task-HTML</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <p>Please enter any character</p>
            <input type="text" name="user">
            <br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </div>

    <?php 
    if(isset($_POST["submit"])){
        $user = $_POST["user"];
        
        switch($user) {
            case "a":
                echo "It is a vovel";
                break;
            case "e":
                echo "It is a vovel";
                break;
            case "i":
                echo "It is a vovel";
                break;
            case "o":
                echo "It is a vovel";
                break;
            case "u":
                echo "It is a vovel";
                break;
            case "A":
                echo "It is a vovel";
                break;
            case "E":
                echo "It is a vovel";
                break;
            case "I":
                echo "It is a vovel";
                break;
            case "O":
                echo "It is a vovel";
                break;
            case "U":
                echo "It is a vovel";
                break;        
                default :
                echo "It is not a vovel";
            
        }
    }
    ?>
</body>
</html>