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

    $connect = mysql_connect('localhost','root','');

    $db = mysql_select_db('ftfl',$connect);

    mysql_query("insert into students (name) values ('$name')");

    $result = mysql_query("select s_id from students where name = '$name' ");

    $student_id = mysql_fetch_array($result);

    $a = $student_id['s_id'];

    foreach($_REQUEST['title'] as $course_title)
    {
        $result = mysql_query("select c_id from courses where title = '$course_title' ");

        $course_id = mysql_fetch_array($result);

        $b = $course_id['c_id'];

        $query = "insert into mapping (student_id,course_id) values ('$a','$b')";

        $result = mysql_query($query);
    }

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
