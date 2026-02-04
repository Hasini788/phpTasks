<?php include 'header.php'; ?>

<h3>
<?php
echo "Hello world! My name is 'David'";
?>
</h3>

<?php
$title = "PHP is interesting.";
?>

<h4>
<?php 
echo $title; 
?>
</h4>

<!--define variables-->
<?php
$g1 = 5;
$g2 = 4;
$g3 = 5;
?>

<table>
    <tr>
        <td>S.N</td>
        <td>Name</td>
<td>Grade</td>
</tr>

<tr>
        <td>1</td>
        <td>John</td>
<td><?php echo $g1;?></td>
</tr>

<tr>
        <td>2</td>
        <td>Alice</td>
<td><?php echo $g2;?></td>
</tr>

<tr>
        <td>3</td>
        <td>Bob</td>
<td><?php echo $g3;?></td>
</tr>
</table>

<h2>Development environment screen shot</h2>
<img src="ss.png" alt="development environment" width="800">

<?php include 'footer.php'; ?>


