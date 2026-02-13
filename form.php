<?php
include 'header.php';
?>

<h2> Input your information below: </h2>
<form name= "form1" method="post" action="">
<div class="row">
<div class="col">
<input type="text" class="form-control" placeholder="First name" name="fname"
required>
</div>
<div class="col">
<input type="text" class="form-control" placeholder="Last name" name="lname"
required>
</div>
</div>
<br>
<div class="row">
<div class="col">
<input type="text" class="form-control" placeholder="City" name="city" required>
</div>
<div class="col">
<select class="form-control" name="groupid">
<option value="BBCAP19"> BBCAP19 </option>
<option value="BBCAP20"> BBCAP20 </option>
<option value="BBCAP21"> BBCAP21 </option>
<option value="BBCAP22"> BBCAP22 </option>
<option value="Others"> Others </option>
</select>
</div>
</div>
<br><button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<?php
/*
The isset() function is used to check if a variable is set and not NULL. In this
case, it's checking if the $_POST['submit']
value is set and not NULL. If the form has been submitted, the value of
$_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been
submitted,
the value of $_POST['submit'] will not be set, and the code inside the if block will
not be executed.
*/
if (isset($_POST['submit'])) {

    $fname  = $_POST['fname'];
    $lname  = $_POST['lname'];
    $city   = $_POST['city'];
    $groupid = $_POST['groupid'];

    include 'db.php';

    $sql = "INSERT INTO studentsinfo (first_name, last_name, city, groupId)
            VALUES ('$fname', '$lname', '$city', '$groupid')";

    if ($conn->query($sql) === TRUE) {
        echo "New record added";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>

<?php include 'footer.php'; ?>