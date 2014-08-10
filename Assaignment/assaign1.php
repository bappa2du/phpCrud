<!doctype html>
<html>

<head>
    <title>Student Entry Result</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
    <?php
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];

    $connect = mysql_connect('localhost','root','');
    $db = mysql_select_db('ftfl',$connect);
    $query = "insert into students values ('$id','$name')";
    $result = mysql_query($query);
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
