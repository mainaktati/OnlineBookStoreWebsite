<?php


include 'config.php';


session_start();
$number=$_REQUEST['num'];

date_default_timezone_set("asia/kolkata");

$datetime = date('d/m/Y', time());


// $query = "UPDATE orders SET status = '50' , canceldate='$datetime' WHERE id='$number' and user_id='$user_id' ";

// $result = mysqli_query($conn,$query)or die (mysqli_error());


$query1 = "UPDATE orders SET `status` = '50' , canceldate='$datetime' WHERE id='$number'  and user_id='".$_SESSION['user_id']."' ";
$result1 = mysqli_query($conn,$query1)or die (mysqli_error());

?>

<script language="javascript">

alert('Cancelation sucessful');

document.location="orders.php";

</script>