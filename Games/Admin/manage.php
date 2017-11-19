<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strategy</title><script src="../../Img/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="../script/style.css">
</head>
<body>
<script>
function edit(input) {
	var url = "edit.php?n="+input.id+"";
	var left = (screen.width/2)-(450/2);
	var top = (screen.height/2)-(450/2);
	return window.open(url, 'title', 'toolbar=no, location=no, directories=no,        status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=450,        height=230, top='+top+', left='+left);
}

function reason(input) {
	var url = "blacklist.php?n="+input.id+"";
	var left = (screen.width/2)-(450/2);
	var top = (screen.height/2)-(450/2);
	return window.open(url, 'title', 'toolbar=no, location=no, directories=no,        status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=450,        height=460, top='+top+', left='+left);
}

function del(input) {	
	$(document).ready(function(e) {
		var data = "data="+input.id;
		$.ajax({
			url:"control.php",
			cache:false,
			type:"POST",
			data:data,
			success: function(html) {
				$(".rcc").html(html);
			}
		});
    });
}

</script>
<div class="main">
<?php include ("Header.php");?>
<?php include ("menu.php");?>
<div class="middle">
<p id="rs"></p>
<div class="lc">
<table align="center">
<tr><td><a href="add.php">Add New Game</a></td></tr>
<tr><td><a href="manage.php">Manage</a></td></tr>
<tr><td><a href="../blacklist.php">Blacklist Games</a></td></tr>
<tr><td><a href="../deleted.php">Deleted Games</a></td></tr>
</table>
</div>

<div class="rcc" >
<?php include ("manage2.php"); ?>
</div>

</div>
</body>
</html>