<?php
$server="localhost";
$user="root";
$password= "";
$db="dmoe";

$con= mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
    <script>
        alert("connection success");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("connection no");
    </script>
    <?php
}

?>
