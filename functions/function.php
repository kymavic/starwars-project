<?php

function dbLink(){
    $db = 'star_war';
    $db_host = 'localhost';
    //$db_host = 'app-mysql';
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

//Read the force
function readTheForce($dbConnect){
    $sql = 'SELECT * FROM forces';
    return $dbConnect->query($sql);
}

//Read characters
function readCharacters($dbConnect){
    $sql = 'SELECT * FROM characters';
    return $dbConnect->query($sql);
}

//Read planets
function readPlanets($dbConnect){
    $sql = 'SELECT * FROM planets';
    return $dbConnect->query($sql);
}

//Read ships
function readShips($dbConnect){
    $sql = 'SELECT * FROM ships';
    return $dbConnect->query($sql);
}

//Read aliens
function readAliens($dbConnect){
    $sql = 'SELECT * FROM alien_races';
    return $dbConnect->query($sql);
}

/*
//Create
function '<function_name>'($dbConnect, $title){
    $q = "INSERT into <database table> (id,<database field>) VALUES(NULL,:mt);";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":mt",$title);
    $result = $query->execute();
    return $result;
}

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