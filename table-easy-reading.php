<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
	<meta name="author" content="">

	<title>Untitled 2</title>
</head>

<body bgcolor="#000000" text="#7FFF55">
<h3 align="center">Dark Orange style (from foobar2000)</h3>
<table align="center" width='70%' style="color: #F47E46;">
<?

for ($row=0; $row < 50; $row++)
{
	if (($row % 2) == 0) // if (($row & 1) == 0)
	{
		$color = '#252723';
	}
	else
	{
		$color = '#1D1F1B';
	}
	
	echo("\n<tr style='background-color: $color;'>");
	
	for ($col=0; $col < 3; $col++)
	{
		printf("\n\t<td style='padding-left: 5px;'>%s</td>", rand(0, 255));
	}
	
	echo("\n</tr>");
}

?>
</table>

</body>
</html>
