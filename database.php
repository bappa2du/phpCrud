<?php
{


        $name       = $_POST['name'];
        $password   = $_POST['password'];
        $connect = mysql_connect('localhost','root','');
        $db = mysql_select_db('bappa',$connect);
        $query = "insert into user values ('$name','$password')";
        $result = mysql_query($query);
        if($result)
        {
            echo "Data inserted, thank you";
        }



}
?>