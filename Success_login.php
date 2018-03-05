<?php
    $server     ="localhost";
    $username   ="root";
    $password   ="";
    $db         ="itproject";
    $conn       =mysqli_connect($server,$username,$password,$db);
    $user = array("");
    $sql_get = "SELECT * FROM `users`";
    $result  = mysqli_query($conn,$sql_get);
         if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                        array_push($user, $row['Users']);
                    }
            }
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $usr    = $_POST["username"];
        $pass   = $_POST["password"];
            if(in_array($usr, $user)){
           echo " <div class='success'>
                    <a href='Add.php'>Add</a> here u can add some products <br>
                    <a href='Delete.php'>Delete</a>  u can delete products  <br> 
                    <a href='Update.php'>Update</a>    update some products   <br>
                    <a href='Select.php'>Select</a>u can choose which product u want buy
            </div>";
        }
        else
        {
            echo "you can't login sorry ";
            
        }
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>PAGES</title>
        <link rel="stylesheet" href="style.css">
    </head>
</html>