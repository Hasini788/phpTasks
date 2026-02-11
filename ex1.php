<?php include 'header.php'; ?>

<div class="contenttitle" style="padding: 20px; text-align: center; background-color: #f8f9fa; border-bottom: 1px solid #ddd;">
    <h2 style="color: #6d3e74;">Getting Started with PHP - Hasini</h2>
</div>


<div class="container mt-4 mb-4" style="padding: 20px; border-left: 5px solid #ff4d6d; background-color: #fff5f6;">
    
    <div style="display: flex; justify-content: center; margin-top: 20px;">
       
    </div>

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

<h2 style="margin-top: 50px;">Development environment screen shot</h2>
<img src="ss.png" alt="development environment" width="800">

<?php include 'footer.php'; ?>


