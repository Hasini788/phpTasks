<?php include 'header.php'; ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .custom-container {
        padding: 60px 20px; /* Top/Bottom 60px, Sides 20px */
        max-width: 800px;
        margin: 0 auto; /* Centers the whole block */
    }
    
    .result-box {
        margin-top: 20px;
        padding: 20px;
        border-radius: 8px;
    }
</style>

<div class="custom-container">
    <div class="card shadow-lg">
        <div class="card-body" style="padding: 40px;"> <h2 class="text-center mb-4">Voting Eligibility</h2>
            
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label">Full Name:</label>
                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Enter your name" required>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Age:</label>
                    <input type="number" name="age" class="form-control form-control-lg" placeholder="Enter your age" required>
                </div>
                
                <button type="submit" name="vote_check" class="btn btn-primary btn-lg w-100">Check Eligibility</button>
            </form>

            <?php
            if (isset($_POST['vote_check'])) {
                $name = htmlspecialchars($_POST['name']);
                $a = intval($_POST['age']);
                
                echo "<div class='result-box'>";
                if ($a >= 18) {
                    echo "<div class='alert alert-success' style='padding: 30px;'>
                            <h4>Success!</h4>
                            Hello $name, you are eligible for voting!
                          </div>";
                } else {
                    echo "<div class='alert alert-danger' style='padding: 30px;'>
                            <h4>Not Eligible</h4>
                            Hello $name, you are not eligible for voting.
                          </div>";
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>




<div class="container mt-4 mb-4" style="padding: 20px; border-left: 5px solid #ff4d6d; background-color: #fff5f6;">
    <h3>Current Month </h3>
    <?php
    // Get the current month name
    $currentMonth = date("F");
$currentMonth = date("F");

switch ($currentMonth) {
        case "August":
            echo "<p style='font-size: 1.2rem;'>It's August, so it's still holiday. </p>";
            break;
        default:
            
            echo "<p style='font-size: 1.2rem;'>Not August, this is <strong>$currentMonth</strong> so I don't have any holidays.</p>";
            break;
    }
    ?>
</div>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">3. Multiplication Table</h4>
                </div>
                <div class="card-body p-4">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">Enter a number to see its table:</label>
                            <input type="number" name="num_table" class="form-control" placeholder="e.g. 5" required>
                        </div>
                        <button type="submit" name="submit_table" class="btn btn-primary w-100">Show Table</button>
                    </form>

                    <?php
                    if (isset($_POST['submit_table'])) {
                        $n = intval($_POST['num_table']);
                        echo "<hr><div class='p-3 bg-light rounded border text-center'>";
                        echo "<h5>Table of $n</h5>";
                        
                        // FOR LOOP for multiplication
                        for ($i = 1; $i <= 10; $i++) {
                            $result = $n * $i;
                            echo "$n × $i = <strong>$result</strong><br>";
                        }
                        
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0"> Print Numbers 1 to N</h4>
                </div>
                <div class="card-body p-4">
                    <form method="post" action="">
                        <div class="mb-3">
                            <label class="form-label">Enter N:</label>
                            <input type="number" name="n_val" class="form-control" placeholder="e.g. 10" required>
                        </div>
                        <button type="submit" name="print_submit" class="btn btn-primary w-100">Print Numbers</button>
                    </form>

                    <?php
                    if (isset($_POST['print_submit'])) {
                        $n = intval($_POST['n_val']);   
                        $i = 1;             
                        echo "<hr><div class='p-3 bg-light rounded border'>";
                        echo "<h5>Numbers from 1 to $n:</h5>";
                        
                        // Using a while loop to print numbers from 1 to N
                        while ($i <= $n) {
                            echo "<span class='badge bg-secondary me-1'>$i</span>";
                            $i++;          
                        }
                        echo "</div>";
                    }
                    ?>
                </div>
            </div>

            <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="mt-4">
                <ul class="list-group shadow-sm">
                    <?php
                    $myarray = array("HTML", "CSS", "PHP", "JavaScript");
                    foreach ($myarray as $value) {
                        // list-group-item adds the borders and padding
                        echo "<li class='list-group-item'>• $value</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>