<!doctype html>
<html>

<head>
    <title>Student Entry Result</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
    <?php

    $name = $_REQUEST['name'];
    $title = $_REQUEST['title1'];


    $connect = mysql_connect('localhost','root','');

    $db = mysql_select_db('ftfl',$connect)or die("Error1");

    $query = "insert into students (name) values ('$name')";

    $result = mysql_query($query) or die("Error");

    $result = mysql_query("select id from students where name = '$name' ");
    $result = mysql_query("select id from courses where title = '$title' ");

    $query = "insert into mapping (student_id,course_id) values ('$name','$title')";

    $result = mysql_query($query) or die("Error");

    if($result)
        {
            echo "Data inserted, thank you<br/>";
        }
    else
    {
        echo "Data already exists<br/>";
    }

    ?>
    <br/><br/>

    <a href="student.html">Student Entry</a><br/>
    <a href="index.html">Home</a>
</div>
</body>
</html>
