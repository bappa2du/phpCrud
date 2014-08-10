<!doctype html>
<html>

<head>
    <title>Course Entry Result</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
    <?php
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $code = $_REQUEST['code'];

    $connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('ftfl',$connect);

    $query = "select count(*) from courses where id = '$id' or title = '$title' or code = '$code'";
    $result = mysql_query($query);
    if($result >= 0)
    {
        $query = "insert into courses values ('$id','$title','$code')";
        $result = mysql_query($query);
        if($result)
        {
            echo "Course Data inserted, thank you<br/>";
        }
    }
    else
    {
        echo "Data already exists<br/>";
    }


    ?>
    <br/><br/>
    <a href="courses.html">Course Entry</a><br/>
    <a href="index.html">Home</a>
</div>
</body>
</html>