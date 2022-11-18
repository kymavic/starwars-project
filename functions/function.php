<?php

function dbLink()
{
    $db_user = '<Datbase User>';
    $db_pass = '<Datbase password';
    $db_host = 'localhost';
    $db = '<Datbase Name>';

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db", $db_user, $db_pass);
    } catch (Exception $e) {
        echo 'Unable to connect to database:' . $e;
        exit;
    }
    error_reporting(0);
    return $db;
}

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
}