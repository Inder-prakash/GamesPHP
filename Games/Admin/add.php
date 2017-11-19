<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Strategy</title>
<link rel="stylesheet" type="text/css" href="../script/style.css">
<script src="../../Img/jquery-1.11.3.min.js"></script>
</head>
<body>
<script>

$(document).ready(function(e) {
	$("#form").on('submit',function (e) {
		e.preventDefault();
		var name = $("#name").val();
		var gen = $("#gen").val();
		var sz1 = $("#sz1").val();
		var sz2 = $("#sz2").val();
		var size = sz1+" "+sz2;
		var d = new FormData(this);
		d.append("name",name);
		d.append("gen",gen);
		d.append("size",size);
		$.ajax({
			type:"POST",
			cache:false,
			url:"control.php",
			processData:false,
			contentType:false,
			data:d,
			success: function(html) {
				$("#res").html(html);
			}
		});
	});
});
	function preview( input ) {
		if( input.files ){
			var read = new FileReader();
			read.onload = function (e) {
				$("#img").attr('src',e.target.result);
			}
			read.readAsDataURL(input.files[0]);
		}
	}
</script>
<div class="main">
<?php include ("Header.php");?>
<?php include ("menu.php");?>

<div class="middle">
<div class="lc">
<table align="center">
<tr><td><a href="add.php">Add New Game</a></td></tr>
<tr><td><a href="manage.php">Manage</a></td></tr>
<tr><td><a href="../blacklist.php">Blacklist Games</a></td></tr>
<tr><td><a href="../deleted.php">Deleted Games</a></td></tr>
</table>
</div>

<div class="rc">
<form id="form">
<table style="font-size:20px; font-weight:bolder" align="center" cellspacing="3" >
<tr>
<td>Name</td><td><input type="text" id="name" name="name" required></td>
<td width="200px" height="200px" rowspan="5"><img width="190px" id="img" name="img"></td>
</tr>
<tr>
<td>Icon</td><td><input type="file" onChange="preview(this)" name="att" id="att" style="width:90px" required></td>
</tr>
<tr>
<td>Genere</td><td><select style="width:100px" id="gen" name="gen" required><option>Action</option><option>Arcade</option><option>Racing</option><option>Role Playing</option><option>Sports</option><option>Strategy</option></select></td>
</tr>
<Tr>
<td>Size</td><td><input style="width:110px" type="text" required id="sz1" name="sz1">&nbsp;&nbsp;<select style="width:50px" required id="sz2" name="sz2"><option>GB</option><option>MB</option></select></td>
</Tr>
<tr>
<td colspan="1"></td>
<Td><input class="bu" type="submit" value="Add" name="sub"></Td>
</tr>
</table>
</form>
</div>

<div id="res">

</div>

</div>
</body>
</html>