<?php

function dbLink(){
    $db = 'star_war';
    $db_host = 'localhost';
    $db_user = 'mri';
    $db_pass = 'password';
    try{
        $db = new PDO("mysql:host=$db_host;dbname=$db",$db_user,$db_pass);
    } catch (Exception $e){
        echo 'Unable to access database';
        exit;
    }
   error_reporting(0);
    return $db;
}

function validate($dbConnect,$username,$password){
    $sql = 'SELECT * FROM users';
    foreach ($dbConnect->query($sql) as $row)
    {
        if(($row['username'] == $username) && ($row['password'] == $password)){
            $_SESSION['validate'] = true;
            $_SESSION['uid'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            return true;
        }
    }
    $_SESSION['validate'] = false;
    $_SESSION['uid'] = null;
    $_SESSION['username'] = null;
    return false;
}


//Create
function addCharacter($dbConnect, $name,$image,$description){
    $q = "INSERT INTO characters(id,name,imgLocation,description) VALUES(NULL,:na,:img,:des);";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":na",$name);
    $query->bindParam(":img",$image);
    $query->bindParam(":des",$description);
    $result = $query->execute();
    return $result;
}
/*
//Read
function '<function name>'($dbConnect){
    $sql = 'SELECT * FROM <Database table>';
    foreach ($dbConnect->query($sql) as $row)
    {
    echo '<br>'.$row['<database field>'];
    }
}

//Update
function <function name>($dbConnect,$id,<parameter>){
    $q = $dbConnect -> prepare("UPDATE `<database table>` SET `<table field>` = :movt WHERE <id field> = :edid");
    $q->bindValue(':movt',<parameter>);
    $q->bindValue(':edid',$id);
    $q->execute();
}

//Delete
function '<function name>'($dbConnect,$id){
    $sql = "DELETE FROM <database table> WHERE id = :id";
    $stmt = $dbConnect->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}*/
?>