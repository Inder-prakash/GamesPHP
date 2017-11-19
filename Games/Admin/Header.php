<div class="header">
<div class="im"><img class="im" src="Img/logo.png" ></div>
<div class="head"><a style='text-decoration:none; color:#000000' href="../../index.php"><h1>MY GAMES</h1></a></div>
<div class="search"><form><table cellspacing="0" cellpadding="0"><tr><td><input required placeholder="Search...." type="text"  name="search" style="height:25px; width:260px"></td><td><input type="submit" name="sub" value="" class="button" ></td></tr></table></form>
<?php 
if(isset($_REQUEST['sub']))
{
	$n = $_REQUEST['search'];
	header("location:../search.php?nn=$n");
}
?>
</div>
</div>
