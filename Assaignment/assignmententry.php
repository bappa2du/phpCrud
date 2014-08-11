<!doctype html>
<html>

<head>
    <title>Student Entry</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div>
    <form method="post" action="assignment.php">
        Student Name:
        <input type="text" name="name">
        <br/>
        Course Name:
        <select name="title[]" multiple>

            <?php

            require_once 'main.php';

            course_list();

            ?>

        </select>
        <br/>
        <input type="submit" value="Submit" >
    </form>
</div>
</body>
</html>