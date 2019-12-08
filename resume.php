<html>
<body>

<h1>
<?php	
echo "{$_POST["fullname"]} <br />"; 
?>
<h1>

<h3>
<?php
echo "Contact";
?>
<h3>

<h4>
<?php
echo "{$_POST["phone"]} <br />";
echo "{$_POST["email"]} <br />";
echo "{$_POST["github"]} <br />";
echo "{$_POST["street"]} <br />";
echo "{$_POST["city"]} <br />";
echo "{$_POST["state"]} <br />";
echo "{$_POST["country"]} <br />";
?>
<h4>

<h3>
<?php
echo "Education";
?>
<h3>

<h4>
<?php
echo "{$_POST["college"]} <br />";
echo "{$_POST["date"]} <br />";
echo "{$_POST["degree"]} <br />";
?>
<h4>

<h3>
<?php
echo "Work Experience";
?>
<h3>

<h4>
<?php
echo "{$_POST["job1"]} <br />";
echo "{$_POST["sjobdate1"]} <br />";
echo "{$_POST["ejobdate1"]} <br />";
echo "{$_POST["job1description"]} <br />";
?>
<br>
<?php
echo "{$_POST["job2"]} <br />";
echo "{$_POST["sjobdate2"]} <br />";
echo "{$_POST["ejobdate2"]} <br />";
echo "{$_POST["job2description"]} <br />";
?>
<br>
<?php
echo "{$_POST["job3"]} <br />";
echo "{$_POST["sjobdate3"]} <br />";
echo "{$_POST["ejobdate3"]} <br />";
echo "{$_POST["job3description"]} <br />";
?>
<br>
<?php
echo "{$_POST["job4"]} <br />";
echo "{$_POST["sjobdate4"]} <br />";
echo "{$_POST["ejobdate4"]} <br />";
echo "{$_POST["job4description"]} <br />";
?>
<h4>

<h3>
<?php
echo "Skills";
?>
<h3>

<h4>
<?php
echo "{$_POST["skills"]} <br />";
?>
<h4>