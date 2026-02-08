<!DOCTYPE html>
<html>

<head>
    <meta chrset =UTF-8>
<meta name ="viewport" content  ="width=device-width, initial-scale=1.0">

<title><?php echo $title ;?></title>

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

    <title>Web development site by Hasini</title>
    <!-- Add your CSS, JavaScript, etc. here -->
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
            background-color: hsl(347, 90%, 56%);
            color: white;
            padding: 20px;
            text-align: center;
        }
        </style>
</head>

<body>
    <header>
        <!-- Your header content goes here -->
         <h1>Welcome to My PHP Project</h1>
         <nav>
            <ul>
                <li><a href="ex1.php">Exercise 1</a></li>
                <li><a href="ex2.php">Exercise 2</a></li>
</ul>
</nav>
    </header>
