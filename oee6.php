<?php 
require_once("oe6.php");

if (isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];


    $login_query = "SELECT firstname, password,  from users_tbl where Email = '$user' AND Password = '$pass' ";
   

    $result = mysqli_query($dbc, $login_query);
    
    if(mysqli_num_rows($result)){
        echo "<script>alert('Logged in!')</script>";
        include("dash.php");
         $_SESSION['Email'] = $user;
        
    }
    else {
        echo '<script> alert("PASS")</script>';
        include("oe6.html");
    }

}

?>