<html>
<head>
<link rel="stylesheet" href="Style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="ArmCode.php"  method="post" >
<table style="width:100%">
  <tr>
    <th></th>
    <th>
	<div class="container">
<div class="slidecontainer">
<h1> Robot Arm Sliders </h1>
<div class="text">

<p>(<span id="value1"name="value1" ></span> θ)  :المحرك ١ </p>
<input type="range" name="engine1" min="1" max="180" value="90" class="slider" id="myRange1">

<p>(<span id="value2" name="value2"></span> θ)  :المحرك ٢ </p>
<input type="range" name="engine2" min="1" max="180" value="90" class="slider" id="myRange2">

<p>(<span id="value3"name="value3"></span> θ)  :المحرك ٣ </p>
<input type="range" name="engine3" min="1" max="180" value="90" class="slider" id="myRange3">

<p>(<span id="value4" name="value4"></span> θ)  : المحرك ٤</p>
<input type="range" name="engine4" min="1" max="180" value="90" class="slider" id="myRange4">

<p>(<span id="value5" name="value5" ></span> θ)  :المحرك ٥ </p>
<input type="range" name="engine5" min="1" max="180" value="90" class="slider" id="myRange5">

<p>(<span id="value6" name="value6" ></span> θ)  :المحرك ٦ </p>
<input type="range" name="engine6" min="1" max="180" value="90" class="slider" id="myRange6">

<p>(<span id="value7"name="value7" ></span> θ)  :المحرك ٧ </p>
<input type="range" name="engine7" min="1" max="180" value="90" class="slider" id="myRange7">

<script src="JSall.js"></script>

</div>
<br><br>

<input type="submit" name="save" value="حفظ" >
<input type="submit" name="on"value="تشغيل" >
<?php
$mysqli = mysqli_connect("localhost","root","123456789","robotarm");

if (isset($_POST['save'])) {

$sql = "INSERT INTO allengine (engine1,engine2,engine3,engine4,engine5,engine6,engine7)VALUES
('".$_POST['engine1']."','".$_POST['engine2']."','".$_POST['engine3']."','".$_POST['engine4']."',
'".$_POST['engine5']."','".$_POST['engine6']."','".$_POST['engine7']."')";

   if (mysqli_query($mysqli, $sql)) {
			echo "تم حفظ البيانات";
		} else {
			echo "<br>" . mysqli_error($mysqli);
		}
}

if (isset($_POST['on'])) {

$sql2 = "INSERT INTO workengine (on_off) VALUES ('on')";

	if (mysqli_query($mysqli, $sql2)) {
			echo "تم التشغيل";
		} else {
			echo "<br>" . mysqli_error($mysqli);
		}
}
?>
  </th>
  </tr>
   <tr>
    <th></th>
    <th>

<div class="container">
<br><br><br>
<h1> Robot Arm Buttons </h1>
<br><br>
<table style="width:100%">
  <tr>
    <th></th>
    <th><input class="button" type="submit" name="forward" value="Forward" ></th>
    <th></th>
  </tr>
  <tr>
    <th><input class="button" type="submit" name="left" value="Left" ></th>
    <th><input class="button" type="submit" name="stop" value="Stop" ></th>
    <th><input class="button" type="submit" name="right" value="Right" ></th>
  </tr>
  <tr>
  <th></th>
   <th><input class="button" type="submit" name="backward" value="Backward" ></th>
    <th></th>
  </tr>

</table>
<br><br>
<?php
$query3="CREATE TABLE movement(
id INT(6) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
backwardBTN VARCHAR(255),
forwardBTN  VARCHAR(255),
leftBTN     VARCHAR(255),
rightBTN    VARCHAR(255),
stopBTN     VARCHAR(255))";

if (isset($_POST['stop'])) {
$sql3 = "INSERT INTO movement(stopBTN) VALUES ('".$_POST['stop']."')";
	if (mysqli_query($mysqli, $sql3)) {
			echo "توقف التحرك";
		} else {echo "<br>" . mysqli_error($mysqli);}
}
if (isset($_POST['left'])) {

$sql4 = "INSERT INTO movement (leftBTN) VALUES ('".$_POST['left']."')";

	if (mysqli_query($mysqli, $sql4)) {
			echo "تم الذهاب لليسار";
		} else {echo "<br>" . mysqli_error($mysqli);}
}

if (isset($_POST['right'])) {
$sql5 = "INSERT INTO movement (rightBTN) VALUES ('".$_POST['right']."')";
	if (mysqli_query($mysqli, $sql5)) {
			echo "تم الذهاب لليمين";
		} else {echo "<br>" . mysqli_error($mysqli);}
}

if (isset($_POST['backward'])) {
$sql6 = "INSERT INTO movement (backwardBTN) VALUES ('backward')";
	if (mysqli_query($mysqli, $sql6)) {
		 echo "تم الرجوع للخلف";
		} else {echo "<br>" . mysqli_error($mysqli);}
}
if (isset($_POST['forward'])) {
$sql7 = "INSERT INTO movement (forwardBTN) VALUES ('forward')";
	if (mysqli_query($mysqli, $sql7)) {
		 echo "تم التقدم للأمام";
		} else {echo "<br>" . mysqli_error($mysqli);}
}
?>
</div>
</th></tr>
</table>
</form>
</body>
</html>
