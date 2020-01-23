<?php
    session_start();
    var_dump($_SESSION);
    if(isset($_SESSION['is_auth']) && $_SESSION['is_auth'] == 1)
    {
        
        header('Location:dashboard.php');
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        input{
            border-radius:3px;
        }
    
    </style>
    
</head>
<body>
  
   <div >
         
       <form action="sesjalogin.php" method="post" >
           
           <p>Login:<input type="text" name="login" required="required"></p>
           <p>Hasło:<input type="password" name="haslo" required="required"></p>
           <p><input type="submit" name="wyslij" value="Zaloguj się"></p>
       </form>
       
   </div>
   
</body>
</html>    