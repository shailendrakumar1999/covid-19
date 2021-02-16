<?php
$server='localhost';
$user='root';
$password='';
$db='corona_db';

$con = mysqli_connect($server,$user,$password, $db);

if($con){
    
}
else{
    ?>
    <script>
        alert("Connection failed!");
    </script>
    <?php
}

?>