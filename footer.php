 <style>
    footer {
        background-color: hsl(347, 90%, 56%);
        color: white;
        padding: 10px;
        text-align: center;
        position: relative; 
        bottom: 0;
        width: 100%;
        margin-top; 20px;
    }
       #main {
        width: 300px;
        height: 300px;
        border: 1px solid black;
        display: flex;
    }

    #main div {
        flex: 1;
    }

</style>

<footer>
        <!-- Your footer content goes here -->
         <p>2026 Hasini - Web Development project <br>
         <a href = "mailto:hasini.manamperi@student.hamk.fi">hasini.manamperi@student.hamk.fi</a>
</p>
<div class="mt-2" style="font-size: 0.8rem; opacity: 0.8;">
<?php
    $current_file = basename($_SERVER['PHP_SELF']);
    $mod_time = filemtime($current_file);
    echo "Last modified: " . date("F d Y H:i:s.", $mod_time);
    ?>
    </div>
    </footer>
</body>
</html>
