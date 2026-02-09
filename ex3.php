<?php include 'header.php'; ?>

<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
       
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
     <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  padding-top: 10px;
  padding-bottom: 20px;
}
</style>

</head>

<body>


<h2> Welcome </h2>

<div class="container mt-4">
    <h2>User Details</h2>

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

echo "<p>The total length of '" . $combined . "' is: " . strlen($combined) . "</p>";
?> 

<?php
$a = 298;
$b = 234;
$c = 46;

 echo "<p>The sum of $a, $b, and $c is: " . ($a + $b + $c) . "</p>";
?>

<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
echo "<p>Detected Browser: $browser</p>";
?>

<?php include 'footer.php'; ?>


</body>
</html>