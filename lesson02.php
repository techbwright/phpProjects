<?php
# lesson02.php
# ----- built using http://www.phpform.info -----

print "<p>The following information was submitted from the form:<p><table width=\"375\" border=\"0\"><tr><td style=\"BORDER: #C3E9C1 3px solid;\"><table border=\"0\" width=\"100%\" cellpadding=\"5\" cellspacing=\"0\">
<tr><td width=\"35%\">Year</td><td>".$_REQUEST["Year"]."</td></tr>
<tr><td width=\"35%\">Make</td><td>".$_REQUEST["Make"]."</td></tr>
<tr><td width=\"35%\">Model</td><td>".$_REQUEST["Model"]."</td></tr>
<tr><td width=\"35%\">ListPrice</td><td>".$_REQUEST["ListPrice"]."</td></tr>
<tr><td width=\"35%\">DateListed</td><td>".$_REQUEST["DateListed"]."</td></tr>
<tr><td width=\"35%\">PriceSold</td><td>".$_REQUEST["PriceSold"]."</td></tr>
<tr><td width=\"35%\">DateSold</td><td>".$_REQUEST["DateSold"]."</td></tr>


</table></td></tr></table>
";

$hostname="localhost";
$username="student";
$password="learn";

$dbname="lesson01";
$usertable="table21";
$yourfield = "name";

$con = mysql_connect($hostname,$username, $password) 
  or die ("<html><script language='JavaScript'>alert('Cannot connect.'),history.go(-1)</script></html>");
mysql_select_db($dbname);
echo "successful connection.";


$val = mysql_query('select 1 from `Cycles`');
if($val == FALSE){
 // $sql = "CREATE TABLE table21 (id INT NOT NULL AUTO_INCREMENT,PRIMARY KEY( id ),";
 // $sql .= "name VARCHAR(20),";
  //$sql .= "descript VARCHAR(30)";
 // $sql .= ")";

$sql = "CREATE TABLE IF NOT EXISTS `Cycles` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `Year` year(4) NOT NULL,
  `Make` varchar(20) NOT NULL,
  `Model` varchar(10) NOT NULL,
  `ListPrice` float NOT NULL,
  `DateListed` date NOT NULL,
  `PriceSold` float NOT NULL,
  `DateSold` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3" ;


  $result = mysql_query ("$sql");
  if(!($result))
     echo "<BR><font color=red>Error; ".mysql_errno()."; error description: </font>".mysql_error();
/**Vars **/
}
$val1 = $_POST["Year"];
$val2 = $_POST["Make"];
$val3 = $_POST["Model"];
$val4 = $_POST["ListPrice"];
$val5 = $_POST["DateListed"];
$val6 = $_POST["PriceSold"];
$val7 = $_POST["DateSold"];



$sql = "INSERT INTO `lesson01`.`Cycles` (`id`, `Year`, `Make`, 'Model', 'ListPrice', 'DateListed', 'PriceSold', 'DateSold') VALUES (NULL, '$val1', '$val2', '$val3', '$val4', '$val5', '$val6', '$val7' )";

$result = mysql_query ("$sql");
if(!($result)) {
   echo "<BR><font color=red>error: record not inserted</font>";
} else {
   echo "<br><font color=green>record successfully inserted</font>";
}

?>
<!-- lesson02.html -->
<!-- built using http://www.phpform.info -->

<!DOCTYPE html>

<html>


<head>
  <title>LookWhatIPaid: Cycles</title>
</head>

<body>

<style>
.robotext {font-weight: bold; font-size: 9pt; color: #999999; font-family: Arial, Helvetica, sans-serif; text-decoration: none}
.robolink:link {font-weight: bold; font-size: 9pt; color: #999999; font-family: Arial, Helvetica, sans-serif; text-decoration: none}
.robolink:hover {font-weight: bold; font-size: 9pt; color: #979653; font-family: Arial, Helvetica, sans-serif; text-decoration: underline}
.robolink:visited {font-weight: bold; font-size: 9pt; color: #979653; font-family: Arial, Helvetica, sans-serif; text-decoration: none}
</style>

<script language="Javascript">
function validate(){
var allok = true;
document.basic.Submit.disabled="disabled";
return true;
}
</script>

<form name="basic" method="Post" action="lesson02.php" onSubmit="return validate();">
<table border="0" cellpadding="5" cellspacing="0">
<tr><td>Year</td><td><input type="text" name="Year" value="" size="20"></td></tr>
<tr><td>Make</td><td><input type="text" name="Make" value="" size="30"></td></tr>
<tr><td>Model</td><td><input type="text" name="Model" value="" size="30"></td></tr>
<tr><td>ListPrice</td><td><input type="text" name="ListPrice" value="" size="30"></td></tr>
<tr><td>DateListed</td><td><input type="text" name="DateListed" value="" size="30"></td></tr>
<tr><td>PriceSold</td><td><input type="text" name="PriceSold" value="" size="30"></td></tr>
<tr><td>DateSold</td><td><input type="text" name="DateSold" value="" size="30"></td></tr>


<tr><td align="center"><input type="reset" name="Reset" value="Reset"></td><td align="center"><input type="submit" name="Submit" value="Submit"></td></tr>
<!--<tr><td colspan=2 class=robotext><a href="http://www.phpform.info" class="robolink">HTML/PHP Form Generator</a> from ROBO Design Solutions</td></tr>-->
</table>
</form>

</body>
</html>
