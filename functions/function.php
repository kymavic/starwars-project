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

//Read
function readForumMessages($dbConnect){
    $sql = 'SELECT * FROM forums';
    return $dbConnect->query($sql);
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

function addAlien($dbConnect, $name,$image,$description){
    $q = "INSERT INTO alien_races(id,alien_races,url_img,description) VALUES(NULL,:na,:img,:des);";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":na",$name);
    $query->bindParam(":img",$image);
    $query->bindParam(":des",$description);
    $result = $query->execute();
    return $result;
}

function addForumMessage($dbConnect, $email, $password, $message){
    $q = "INSERT INTO forums(id,email,password,message) VALUES(NULL,:em,:pass,:msg);";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":em",$email);
    $query->bindParam(":pass",$password);
    $query->bindParam(":msg",$message);
    $result = $query->execute();
    return $result;
}

function addForce($dbConnect, $name,$description){
    $q = "INSERT INTO forces(id,name,description) VALUES(NULL,:na,:des);";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":na",$name);
    $query->bindParam(":des",$description);
    $result = $query->execute();
    return $result;
}

function addMovie($dbConnect, $name, $image, $year, $duration, $rating, $description){
    $q = "INSERT INTO movie(id,movie_title,url_img,year,duration,rate,description) VALUES(NULL,:na,:img,:ye,:dur,:rat,:des);";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":na",$name);
    $query->bindParam(":img",$image);
    $query->bindParam(":ye",$year);
    $query->bindParam(":dur",$duration);
    $query->bindParam(":rat",$rating);
    $query->bindParam(":des",$description);
    $result = $query->execute();
    return $result;
}

function addPlanet($dbConnect, $name,$image,$description){
    $q = "INSERT INTO planets(id,planet_name,url_img,description) VALUES(NULL,:na,:img,:des);";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":na",$name);
    $query->bindParam(":img",$image);
    $query->bindParam(":des",$description);
    $result = $query->execute();
    return $result;
}

function addShip($dbConnect, $name,$image,$description){
    $q = "INSERT INTO ships(id,ship_name,url_img,description) VALUES(NULL,:na,:img,:des);";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":na",$name);
    $query->bindParam(":img",$image);
    $query->bindParam(":des",$description);
    $result = $query->execute();
    return $result;
}
//List records
function listCharacters($dbConnect)
{
    $sql = 'SELECT * FROM characters';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<table class="content-center">';
        echo  ' <tbody>';
        echo '<tr>';
        echo '<td class="detail-subtitle">'. $row['name'] . ' ' . '</td>';
        echo '<td><a href="details.php?id='. $row['id']. '" class="footer-link">View details</a>
          </td>';
        echo '<td><a href="details.php?id='. $row['id']. '"  class="footer-link">Edit details</a>
          </td>';
          echo '<td><a href="delete_character.php?id='. $row['id'] . '" class="footer-link">Delete</a>
          </td>';
        echo '</tr>
         </tbody>
         </table>';
        // echo '<br>'.$row['name'].' ';
        // echo '<a href= "details.php?id='.$row['id'].'">[View Details]</a>';

    }
}
//display
function charactersDetails($dbConnect, $id)
{
    $sql = 'SELECT * FROM  characters';
    foreach ($dbConnect->query($sql) as $row) {
        if ($row['id'] == $id) {
            echo' <div class= "container content-center">';
            echo '
            <form class="form-content" method="post" action="update_character.php">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" value="'.$row['name'].'" />
            <br>
            <input type="text" name="image" value="'.$row['imgLocation'].'" />
            <br>
            <br>
            <input type="text" name="description"  value="'.$row['description'].'"></textarea>
            <br>
            <input type="hidden" name="id" id="id" value="'.$row['id'].'" />
            <br>
            <div class="inline-center">
            <button class="w-100 btn btn-lg btn-primary" type="submit" value="Update Record">Update Record</button>
            </form>
            </div>';
        }
    }
}
//update
function updateCharacter($dbConnect,$id,$details,$field){
    $q = $dbConnect->prepare("UPDATE 'characters' SET $field =:det WHERE id = :edid");
    $q->bindValue(':det', $details);
    $q->bindValue(':edid', $id);
    $q->execute();
    }

function updateAlien($dbConnect, $id, $name, $image, $description){
    $q = "UPDATE alien_races SET alien_races=:na, url_img=:img, description=:des WHERE $id = :eid;";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":eid", $id);
    $query->bindParam(":na", $name);
    $query->bindParam(":img", $image);
    $query->bindParam(":des", $description);
    $result = $query->execute();
    return $result;
}

function updateForce($dbConnect, $id, $name, $description){
    $q = "UPDATE forces SET name =:na,description=:des WHERE $id = :eid;";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":eid", $id);
    $query->bindParam(":na", $name);
    $query->bindParam(":des", $description);
    $result = $query->execute();
    return $result;
}

function updateMovie($dbConnect, $id, $name, $image, $year, $duration, $rating, $description){
    $q = "UPDATE movie SET movie_title =:na, url_img=:img, year=:ye, duration=:dur, rate=:rat, description=:des WHERE $id = :eid;";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":eid", $id);
    $query->bindParam(":na", $name);
    $query->bindParam(":img", $image);
    $query->bindParam(":ye", $year);
    $query->bindParam(":dur", $duration);
    $query->bindParam(":rat", $rating);
    $query->bindParam(":des", $description);
    $result = $query->execute();
    return $result;
}

function updatePlanet($dbConnect, $id, $name, $image, $description){
    $q = "UPDATE planet SET planet_name=:na, url_img=:img, description=:des WHERE $id = :eid;";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":eid", $id);
    $query->bindParam(":na", $name);
    $query->bindParam(":img", $image);
    $query->bindParam(":des", $description);
    $result = $query->execute();
    return $result;
}

function updateShip($dbConnect, $id, $name, $image, $description){
    $q = "UPDATE ships SET ship_name=:na, url_img=:img, description=:des WHERE $id = :eid;";
    $query = $dbConnect->prepare($q);
    $query->bindParam(":eid", $id);
    $query->bindParam(":na", $name);
    $query->bindParam(":img", $image);
    $query->bindParam(":des", $description);
    $result = $query->execute();
    return $result;
}

function deleteCharacter($dbConnect,$id){
    $sql = "DELETE FROM characters WHERE id = :id";
    $stmt = $dbConnect->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}

function deleteAlien($dbConnect,$id){
    $sql = "DELETE FROM alien_races WHERE id = :id";
    $stmt = $dbConnect->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}

function deleteForce($dbConnect,$id){
    $sql = "DELETE FROM forces WHERE id = :id";
    $stmt = $dbConnect->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}

function deleteMovie($dbConnect,$id){
    $sql = "DELETE FROM movies WHERE id = :id";
    $stmt = $dbConnect->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}

function deletePlanet($dbConnect,$id){
    $sql = "DELETE FROM planets WHERE id = :id";
    $stmt = $dbConnect->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
}

function deleteShip($dbConnect,$id){
    $sql = "DELETE FROM ships WHERE id = :id";
    $stmt = $dbConnect->prepare($sql);
    $stmt->bindParam(':id',$id);
    $stmt->execute();
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
*/
?>