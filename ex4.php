<?php include 'header.php'; ?>

<!DOCTYPE html>
<html>
<body>

<h2>1. Voting Eligibility</h2>
<form action = "welcome.php" method = "post">
   Name: <input type="text" name="name" required><br>
   Age: <input type="number" name="age" required><br> 
   <input type = "submit">
   </form>

<?php
if (isset($_POST['vote_check'])) {
    $name = $_POST['name'];
    $a = $_POST['age'];

if ($a>= 18){
echo "<div class='alert alert-success'>You are eligible for voting!</div>";
}
else{
echo "<div class='alert alert-danger'>You are not eligible for voting!</div>";
}
?>

<?php
$currentMonth = date("F");

switch ($currentMonth) {
  case "August":
    echo "It's August, so it's still holiday.";
    break;
  default:
    echo "Not August, this is $currentMonth so I don't have any holidays";
    break;
  
}
?>

<h2>Multiplication Table</h2>

<?php
if (isset($_POST['table_submit'])) {
    $n = $_POST['num'];
    echo "<h3>Multiplication Table of $n</h3>";
    for ($i = 1; $i <= 10; $i++) {
        echo "$n × $i = " . ($n * $i) . "<br>";
    }
}
?>

<form method="post">
    Enter N: <input type="number" name="n_val" required>
    <input type="submit" name="print_submit" value="Print Numbers">
</form>

<?php
if (isset($_POST['print_submit'])) {
    $n = $_POST['n_val'];   
    $i = 1;            
    echo "<h3>Numbers from 1 to $n:</h3>";
    while ($i <= $n) {
        echo $i . " ";
        $i++;          
    }
}
?>

<?php
$myarray = array("HTML", "CSS", "PHP", "JavaScript");
foreach ($myarray as $value) {
    echo "• " . $value . "<br>";
}
?>

<?php include 'footer.php'; ?>


</body>
</html>