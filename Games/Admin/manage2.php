<form>
<table border="2" align="center" cellpadding="20" >
<Tr align="center" style='background-color:#D0E9F4'>
<Td>Name</Td><Td>Genere</Td><Td>Size</Td><Td align="center" colspan="3">Options</Td>
</Tr>
<?php 
$con = mysqli_connect("localhost","root","","games");
$sql = "SELECT * FROM `gamecoll` ORDER BY `Id` DESC";
$res = mysqli_query($con,$sql);
while($arr = mysqli_fetch_array($res) ){
	extract ($arr);
	?>
    <Tr>
    <Td><?php echo $Name ?></Td>
    <Td><?php echo $Genere ?></Td>
    <Td><?php echo $Size ?></Td>
    <Td>
    <a style="color:#018600" onclick="edit(this)" 
    id = "<?php echo $Id; ?>" href="javascript:void(0);">Edit</a>
    </Td>
    <Td><a style="color:#000000" onclick="reason(this)" 
    id = "<?php echo $Id; ?>" href="javascript:void(0);">BlackList</a>
    </Td>
    <Td><a style="color:#BB0003" onclick="del(this)"
    id = "<?php echo $Id; ?>" href="javascript:void(0);">Delete</a></Td>
    </Tr>
    <?php
}
?>
</table>