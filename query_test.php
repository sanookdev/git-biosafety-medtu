<?
    require('./api/database.php');
    $pass = md5('admin');
    $sql = "INSERT INTO users(`username`,`password`,`role_id`) VALUES('admin','$pass','1')";

    $insert = new DB_con();
    if($insert->fetch_data($sql)){
        echo "inserted";
    }
?>