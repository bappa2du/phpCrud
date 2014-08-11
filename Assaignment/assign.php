<!doctype html>
<html>

<head>
    <title>Student Entry</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
    <form method="post" action="assaign1.php">
        Student Name:
        <input type="text" name="name">
        <br/>
        Course Name:
        <select name="title[]" multiple>
            <?php

            $connect = mysql_connect('localhost','root','');

            $db = mysql_select_db('ftfl',$connect);

            $result = mysql_query("select title from courses");

            while($row = mysql_fetch_array($result))
            {
                echo "<option>".$row['title']."</option>";
            }

            ?>
        </select>
        <br/>
        <input type="submit" value="Submit" >
    </form>
</div>
</body>
</html>