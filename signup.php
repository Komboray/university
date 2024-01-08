

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">

</head>
<body>
    <br>
    <div class = "contact-col signup">
    <h1>Sign up to the academy below</h1>
    </div>
    
 <div class="contact-col signup">

    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
       <input type="email" placeholder="Enter your Email address" name="email" required>
       <input type="password" placeholder="Enter your Password" name="password" id = "password" required>
       <button type="submit" class="hero-btn red-btn" onclick = "return mess();">Sign Up</button>
    </form>
 </div>
 <div>
 <?php
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if($_SERVER["REQUEST_METHOD"]== "POST"){
        include("connect.php");
        
        $sql = "SELECT * FROM sign_up
                WHERE email = '$email' ";
        
        $result = mysqli_query($conn, $sql);
        if($result){
            $num = mysqli_num_rows($result);
            if($num > 0){
                echo "
                User already exits
                
                ";
            }else{
    
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO sign_up (email, password) VALUES ('$email', '$hash')";
    
                $result = mysqli_query($conn, $sql);
                if($result){
                    echo "
                    
                    Sign up was successful!
                    ";


                    
                    // header("Location: index.php"); 
                }else{
                    die(mysqli_error($conn));
                }
            }
        }
    
        
    
       
    }



?>
 <br>
<div class="contact-col signup">
    <h1>Contact some of the registered learners</h1>
</div>
 <div class="contact-col signup">
    <table>
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
        </tr>
        <?php
       include("connect.php");
       $sql = "SELECT * FROM sign_up";

       $result = mysqli_query($conn, $sql);
       if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>" . $row["id"] ."</td> <td>" .$row["email"] ."</td></tr>";
           
        }

       }else{

       }
    ?>
    </table>
 
</body>
</html>

