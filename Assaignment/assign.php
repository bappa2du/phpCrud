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
        <select>
            <?php
            $connect = mysql_connect('localhost','root','');
            $db = mysql_select_db('ftfl',$connect);
            $query = "select name from students";
            $result = mysql_query($query);
                while($row = mysql_fetch_array($result))
                {
                    echo "<option>".$row['name']."</option>";
                }

            ?>
        </select>
        <br/>
        Course Name:
        <select>
            <?php
            $connect = mysql_connect('localhost','root','');
            $db = mysql_select_db('ftfl',$connect);
            $query = "select title from courses";
            $result = mysql_query($query);
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