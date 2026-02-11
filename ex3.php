<?php include 'header.php'; ?>

<h2> Welcome </h2>

<div class="container mt-4">
    <h3>User Details</h3>

    <!-- Bootstrap Form -->
    <form method="post" action="">
        <div class="mb-3">
            <label for="fname" class="form-label">Firstname</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter Firstname">
        </div>

        <div class="mb-3">
            <label for="lname" class="form-label">Lastname</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Lastname">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- PHP Output -->
    <?php
    if (isset($_POST["fname"]) && isset($_POST["lname"])) {
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];

        echo "<h3 class='mt-4'>Hello $fname $lname, You are welcome to my site.</h3>";
    }
    ?>
</div>

<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>

<div class="container mt-5">
    <div class="container mb-5">
        <h3>Student Grade Results</h3>
 <table class="table">
   
     <thead>
    <tr>
        <td>S.N</td>
        <td>Name</td>
<td>Grade</td>
</tr>
</thead>

<tbody>
<tr class="table-primary">
        <td>1</td>
        <td>John</td>
<td><?php echo $g1;?></td>
</tr>

<tr class="table-danger">
        <td>2</td>
        <td>Alice</td>
<td><?php echo $g2;?></td>
</tr>

<tr class="table-info">
        <td>3</td>
        <td>Bob</td>
<td><?php echo $g3;?></td>
</tr>
</tbody>
</table>
</div>


<p class="mt-4">

<?php

$str1 = "Hello";

$str2 = "World";

$combined = $str1 . $str2;
echo "<h3>Length of the string</h3>";
echo "<p>The total length of '" . $combined . "' is: " . strlen($combined) . "</p>";

?>


<div class="container mt-4">
    <h3>Number Addition Task</h3>
<?php
$a = 298;
$b = 234;
$c = 46;

 echo "<p>The sum of $a, $b, and $c is: " . ($a + $b + $c) . "</p>";
?>
</div>

<div class="container mt-4 mb-5">
    <h3>Browser Information</h3>
<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
echo "<p>Detected Browser: $browser</p>";
?>
</div>

<?php include 'footer.php'; ?>


</body>
</html>