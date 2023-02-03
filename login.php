<?php
include 'dbcon.php';

session_start();

if(isset($_POST['login'])){
   
    $email=mysqli_real_escape_string($con,$_POST['logemail']);
    $pass=mysqli_real_escape_string($con,$_POST['logpass']);
    $selectemail= " SELECT * FROM `data` WHERE `email`='$email' ";
    
    $query=mysqli_query($con,$selectemail);
    if($query){

        if(mysqli_num_rows($query)==1){
            $res_fetch=mysqli_fetch_assoc($query);

            if(password_verify($pass,$res_fetch['password'])){
                ?>
                <script>
                    alert("login success");
                </script>
                <?php
                session_start();
                $_SESSION['logged_in']=true;
                $_SESSION['username']=$res_fetch['name'];
                header("location: demo.php");
            }
            else{
                ?>
                <script>
                    alert("pass doest not match");
                </script>
                <?php
            }
        }
        else{
            ?>
            <script>
                alert("email does not exist");
            </script>
            <?php
        }

    }
   
}
    
?>