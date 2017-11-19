<?php 
	$result = mysqli_query($conn,$sql);
	$total_record = mysqli_num_rows($result);
	$total_page = ceil($total_record/$v_onpage);
	if($Page <= 2)
	{
		$Page = 1;
	}
	?>
	<ul> <?php
	echo "<li><a class='aa' href='$cat.php?Page=1'>First</a></li>";
	for($i = $Page;$i<$Page+5;$i++)
	{
		if($Page <= 2)
		{
			if($i > $total_page)
			{}
			else
			{
				echo "<li><a class='aa' href='$cat.php?Page=$i'>$i</a></li>";
			}
		}
		else
		{
			if($i > $total_page+2)
			{}
			else
			{
				$ii = $i-2;
				echo "<li><a class='aa' href='$cat.php?Page=$ii'>$ii</a></li>";
			}
		}
	}
	echo "<li><a class='aa' href='$cat.php?Page=$total_page'>Last</a></li>";
	echo "</ul>";
?>
<style>
.aa
{
	font-size:20px;
	font-weight:bold;
}
</style>