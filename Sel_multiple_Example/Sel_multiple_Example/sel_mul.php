<?php 
mysql_connect('localhost','root','');
mysql_select_db("multiple");

if(isset($_REQUEST['submit']))
{
	$m=$_REQUEST['m'];
	foreach($m as $key=>$value)
	{
		echo $key."<br>".$value;
		 mysql_query("insert into multi values ('','".$value."')");
		//mysql_query($sql);
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<form name="frm" action="" method="post">
		<table align="center" border="1">
			<tr>
				<td>Select Multiple</td>
				<td><select multiple="multiple" name="m[]">
				<option value="html">Html</option>
				<option value="php">Php</option>
				<option value="java">Java</option>
				<option value="c++">C++</option>
				</select></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="submit" /></td>
			</tr>
		</table>
	</form>
</body>
</html>
