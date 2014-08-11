<?php

    function student()
    {
        $id = $_REQUEST['id'];
        $name = $_REQUEST['name'];

        $connect = mysql_connect('localhost','root','');
        $db = mysql_select_db('ftfl',$connect);

        $query = "select count(*) from students where id = '$id' or name = '$name'";
        $result = mysql_query($query);
        if($result >= 0)
        {
            $query = "insert into students values ('$id','$name')";
            $result = mysql_query($query);
            if($result)
            {
                echo "Data inserted, thank you<br/>";
            }
        }
        else
        {
            echo "Data already exists<br/>";
        }
    }

    function course_entry()
    {
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

    }

    function course_list()
    {
        $connect = mysql_connect('localhost','root','');

        $db = mysql_select_db('ftfl',$connect);

        $result = mysql_query("select title from courses");

        while($row = mysql_fetch_array($result))
        {
            echo "<option>".$row['title']."</option>";
        }

    }

    function course_assign()
    {
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

    }