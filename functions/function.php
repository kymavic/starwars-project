<?php

//Characters
 
$GLOBALS["characters"] = Array();

function listCharacters($dbConnect){
    return $GLOBALS["characters"];
}

function saveCharacter($dbConnect, $id, $img, $name, $description){
    $character = Array(
        "id" => $id,
        "img" => $img,
        "name" => $name,
        "description" => $description
    );
    array_push($GLOBALS["characters"],$character);
    return $character;
}

saveCharacter(null,"1","https://upload.wikimedia.org/wikipedia/en/9/9b/Luke_Skywalker.png","Luke Skywalker"," Luke is the twin brother of Rebellion leader Princess Leia and eventual brother-in-law of the smuggler Han Solo. Luke trains to be a Jedi under Jedi Masters Obi-Wan Kenobi and Yoda and rebuilds the Jedi Order.");
saveCharacter(null,"2","https://upload.wikimedia.org/wikipedia/en/1/1b/Princess_Leia%27s_characteristic_hairstyle.jpg","Leia Skywalker","Leia is princess of the planet Alderaan, a member of the Imperial Senate and an agent of the Rebel Alliance. She thwarts the sinister Sith Lord Darth Vader and helps bring about the destruction of the Empire's cataclysmic superweapon, the Death Star.");
saveCharacter(null,"3","https://upload.wikimedia.org/wikipedia/en/9/9b/Yoda_Empire_Strikes_Back.png","Yoda","He is a small, green humanoid alien who is powerful with the Force and is a leading member of the Jedi Order until its near annihilation.");
saveCharacter(null,"4","https://upload.wikimedia.org/wikipedia/en/0/0b/Darth_Vader_in_The_Empire_Strikes_Back.jpg","Anakin Skywalker (Darth Vader)","The character is the central antagonist of the original trilogy and, as Anakin Skywalker, is one of the main protagonists throughout the prequel trilogy.");
saveCharacter(null,"5","https://upload.wikimedia.org/wikipedia/en/b/be/Han_Solo_depicted_in_promotional_image_for_Star_Wars_%281977%29.jpg","Han Solo","Han Solo and his first mate Chewbacca are smugglers who are hired by Ben Kenobi and Luke Skywalker to transport them to Alderaan so they can deliver the stolen plans for the Death Star.");
saveCharacter(null,"6","https://upload.wikimedia.org/wikipedia/en/1/12/Chewbaca_%28Peter_Mayhew%29.png","Chewbacca","He is a Wookiee, a tall, hirsute, bipedal, intelligent species originating from the fictional planet of Kashyyyk. Chewbacca is the loyal friend and first mate of Han Solo, and serves as co-pilot on Solo's spaceship, the Millennium Falcon; together they help the Rebel Alliance defeat the Galactic Empire and restore freedom to the galaxy.");

/*
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
*/