<?php
$username="root";
$password="";
$servername='localhost';
$db='Amazondb';

$conn=mysqli_connect($servername,$username,$password,$db);
if($conn){
    ?>
    <script>
        alert("connection to database succesful");
    </script>
    <?php
}
else{
    echo"unsuccessful";
}
?>