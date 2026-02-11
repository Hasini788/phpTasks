<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset =UTF-8>
<meta name ="viewport" content  ="width=device-width, initial-scale=1.0">



    <title>

        <?php if (isset($title) && !empty($title))
        {
            echo $title;
        }
        else{
            echo "DEFAULT TITLE";
        }
        ?>
    </title>
        
    <!-- Add your CSS, JavaScript, etc. here -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        table,th,td { border: 1px solid black; border-collapse: collapse;}
        th,td { padding: 10px 20px 30px 40px; }
        nav ul {list-style-type: none; padding: 0; background-color: #f4f4f4;}
        nav ul li {display: inline; margin-right: 20px;}

         body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: hsl(0, 0%, 100%);
        }
        header {
            background-color: #6d3e74;
            color: white;
            padding: 20px;
            text-align: center;
}
contenttitle {
            padding: 40px 20px; 
            text-align: center;
            background-color: #f8f9fa; 
            border-bottom: 1px solid #ddd;
            color: #333;
        }

        </style>
</head>

<body>

    <header>
        <!-- Your header content goes here -->
         <h1>Welcome to My PHP Project</h1>
         <nav>
            <ul>
                <li><a href="ex1.php" class="btn btn-warning">Exercise 1</a></li>
<li><a href="ex2.php" class="btn btn-warning">Exercise 2</a></li>
<li><a href="ex3.php" class="btn btn-warning">Exercise 3</a></li>
<li><a href="ex4.php" class="btn btn-warning">Exercise 4</a></li>
<li><a href="aboutus.php" class="btn btn-warning">About Us</a></li>
                <li><a href="contactus.php" class="btn btn-warning">Contact Us</a></li>
            </ul>
</nav>
    </header>


</body>
</html>
