<?php
mysql_connect("localhost","root","");
mysql_select_db("userregistration");

$query=mysql_query("select * from form inner join investor on form.category=investor.category ");
$rowcount=mysql_num_rows($query);
?>
<table border="2">
	<tr>
		<td>Category </td>
		
	</tr>

<?php
for($i=1;$i<=$rowcount;$i++)
{
	$row=mysql_fetch_array($query);
?>
<tr>
	<td><?php echo $row["category"] ?></td>
	

</tr>
<?php
}
?>
</table>