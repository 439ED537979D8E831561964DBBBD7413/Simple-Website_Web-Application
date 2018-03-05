<?php 
    $server     ="localhost";
    $username   ="root";
    $password   ="";
    $db         ="itproject";
    $conn       =mysqli_connect($server,$username,$password,$db);
        echo "<p>our products below </p>";
        $sql_get = "SELECT * FROM `products`";
        $result  = mysqli_query($conn,$sql_get);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                    echo "id -> ".$row['id']."   "." Name-> " .$row['name']." Price-> ".$row['price']."<br>";
                    }
            }
            if(isset($_POST["id"])){
                
                $id=$_POST["id"];
                $sql = "SELECT id,name,price FROM products WHERE id='$id'";
               if(!$conn){
                die("failed".mysqli_connect_error());

                }
                else
                {
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "the product u selected is "."id -> ".$row['id']."   "." Name-> " .$row['name']." Price-> ".$row['price']."<br>";
                        }
                    }
                    else
                    {
                        echo "there is no product with this id";
                    }
                }
            }
        


?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Select</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>here u can Select some products</h1>
        <div>
        <form action="" method="post">
            <input type="number" name="id" required placeholder="idOfProduct" /><br>
            <input type="submit">
        </form>
        </div>
    </body> 

</html>
