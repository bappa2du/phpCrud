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
        <select name="title1[]" multiple>
            <?php
            $connect = mysql_connect('localhost','root','');
            $db = mysql_select_db('ftfl',$connect);
            $query = "select id,title from courses";
            $result = mysql_query($query);
            while($row = mysql_fetch_array($result))
            {
                echo "<option value='".$row['id']."'>".$row['title']."</option>";
            }

            ?>
        </select>
        <br/>
        <input type="submit" value="Submit" >
    </form>
</div>
</body>
</html>