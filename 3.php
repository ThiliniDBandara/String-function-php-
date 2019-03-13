<html>
<head>
<title>php</title>
</head>
<body>
<?php
$first="Good morning! ";
$second="Have a nice day! ";
$third=$first;
echo "$third";
echo "<br/>";
$third.=$second;
echo "$third";
echo "<br/>";
echo strtoupper($third);
echo "<br/>";
echo strtolower($third);
echo"<br/>";
echo ucwords($third);
echo"<br/>";
echo $third;
?>
</body>
</html>