<!DOCTYPE html>
<html>
    <head>
        <title>HTML5 Application Development</title>
        <link rel="stylesheet" type="text/css" href="styles.css"/>
        <style>
            <?php include "styles.css" ?>
        </style>
    </head>
    <body>
        <div>
            <div id="name">Web Note</div>
        </div>

        <form action = "note.php" method = "post">            
            <textarea name = "note"> Type in your note! </textarea>
            <input type = "submit" name = "submit">
            <br>

            <?php
                include_once 'dbc.php';
                $sql = "SELECT * FROM example.notes;";
                $result = mysqli_query($conn,$sql);
                $data = array();
            
                while($row = mysqli_fetch_assoc($result))
                {
                    $data[] = $row;
                }
                echo "<div class=\"grid-container\">";

                foreach ($data as $curr)
                {
                    $value = $curr['notes'];
                    echo "<div class=\"grid-item\">{$value}</div>";
                }
                echo "</div>";

            ?>
        </form>
    </body>
</html>
