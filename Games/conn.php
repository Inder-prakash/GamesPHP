<?php 
    if(isset($_GET['Page']))
	{
		$Page = $_GET['Page'];
	}
	else
	{
		$Page = 1;
	}
	$s_point = ($Page-1)*10;
	$v_onpage = 10;
    $conn = mysqli_connect("localhost","root","","games");
?>