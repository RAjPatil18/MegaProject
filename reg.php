<?php

 include 'dbcon.php';


    if(isset($_POST['submitInfo'])){
        $fullname=mysqli_real_escape_string($con,$_POST['username']);
        $email=mysqli_real_escape_string($con,$_POST['emailAddress']);
        $mobile=mysqli_real_escape_string($con,$_POST['phoneNumber']);
        $pass=mysqli_real_escape_string($con,$_POST['createPassword']);
        $cpassword=mysqli_real_escape_string($con,$_POST['confirmPassword']);
    $password=password_hash($pass,PASSWORD_BCRYPT);
    $confirmPassword=password_hash($cpassword,PASSWORD_BCRYPT);


    $selectemail= " SELECT * FROM `data` WHERE `email` = '$email' ";
    
    $query=mysqli_query($con,$selectemail);
    if(mysqli_num_rows($query) > 0){
        echo "Email exist";
    }
    else{
        if($pass==$cpassword){

            $insertquery=" INSERT INTO `data` (`name`, `email`, `mobile`, `password`, `cofirmpassword`)
                           VALUES ('$fullname', '$email', '$mobile', '$password', '$confirmPassword') ";

            $query=mysqli_query($con, $insertquery);
            if($insertquery){
                ?>
                <script>
                    alert("inserted success");
                    window.location.href='index.php';
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert(" no insertion");
                </script>
                <?php
            }
            
        }
        else{
            echo "Pass does not match";
        }
    }
}
else {
    echo "not match";
}
?>
