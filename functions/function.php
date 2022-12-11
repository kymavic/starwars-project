<?php

function dbLink(){
    $db = 'star_war';
    $db_host = 'app-mysql';
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

function readCharacters($dbConnect){
    $sql = 'SELECT * FROM characters';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<div id="'.$row['id'].'" class="object-container-link">';
        echo '  <p class="detail-subtitle">'.$row['name'].'</p>';
        echo '  <figure class="default-detail-banner">';
        echo '    <img src="'.$row['imgLocation'].'" alt="'.$row['name'].'">';
        echo '  </figure>';
        echo '  <p class="storyline">'.$row['description'].'</p>';
        echo '</div>';
      }
}

function readAliens($dbConnect){
    $sql = 'SELECT * FROM alien_races';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<div id="'.$row['id'].'" class="object-container-link">';
        echo '  <p class="detail-subtitle">'.$row['alien_races'].'</p>';
        echo '  <figure class="default-detail-banner">';
        echo '    <img src="'.$row['url_img'].'" alt="'.$row['alien_races'].'">';
        echo '  </figure>';
        echo '  <p class="storyline">'.$row['description'].'</p>';
        echo '</div>';
      }
}

function readShips($dbConnect){
    $sql = 'SELECT * FROM ships';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<div id="'.$row['id'].'" class="object-container-link">';
        echo '  <p class="detail-subtitle">'.$row['ship_name'].'</p>';
        echo '  <figure class="default-detail-banner">';
        echo '    <img src="'.$row['url_img'].'" alt="'.$row['ship_name'].'">';
        echo '  </figure>';
        echo '  <p class="storyline">'.$row['description'].'</p>';
        echo '</div>';
      }
}

function readPlanets($dbConnect){
    $sql = 'SELECT * FROM planets';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<div id="'.$row['id'].'" class="object-container-link">';
        echo '  <p class="detail-subtitle">'.$row['planet_name'].'</p>';
        echo '  <figure class="default-detail-banner">';
        echo '    <img src="'.$row['url_img'].'" alt="'.$row['planet_name'].'">';
        echo '  </figure>';
        echo '  <p class="storyline">'.$row['description'].'</p>';
        echo '</div>';
      }
}

function readForces($dbConnect){
    $sql = 'SELECT * FROM forces';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<div id="'.$row['id'].'" class="object-container-link">';
        echo '  <p class="detail-subtitle">'.$row['name'].'</p>';
        echo '  <p class="storyline">'.$row['description'].'</p>';
        echo '</div>';
      }
}

function readMovies($dbConnect){
    $sql = 'SELECT * FROM movies';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<li id="'.$row['id'].'" class="object-container-link">';
        echo '  <div class="movie-card">';
        echo '    <figure class="card-banner">';
        echo '        <img src="'.$row['url_img'].'" alt="'.$row['movie_title'].'">';
        echo '    </figure>';
        echo '    <div class="title-wrapper">';
        echo '        <h3 class="card-title">'.$row['movie_title'].'</h3>';
        echo '        <time datetime="'.$row['year'].'">'.$row['year'].'</time>';
        echo '    </div>';
        echo '    <div class="card-meta">';
        echo '      <div class="badge badge-outline">2K</div>';
        echo '      <div class="duration">';
        echo '        <ion-icon name="time-outline"></ion-icon>';
        echo '        <time datetime="PT'.$row['duration'].'M">'.$row['duration'].' min.</time>';
        echo '      </div>';
        echo '      <div class="rating">';
        echo '        <ion-icon name="star"></ion-icon>';
        echo '        <data>'.$row['rating'].'</data>';
        echo '      </div>';
        echo '    </div>';
        echo '    <p class="movie-description">';
        echo '      After the Rebels are brutally overpowered by the Empire on the ice planet Hoth, Luke Skywalker begins Jedi training with Yoda, while his friends are pursued across the galaxy by Darth Vader and bounty hunter Boba Fett.';
        echo '    </p>';
        echo '  </div>';
        echo '</li>';
      }
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
        echo '<tbody>';
        echo '<tr>';
        echo '<td class="detail-subtitle">'.$row['name'].' ' .'</td>';
        echo '<td><a href="characters.php#'.$row['id'].'" class="footer-link">View</a></td>';
        echo '<td><a href="character_details.php?id='.$row['id'].'" class="footer-link">Edit details</a></td>';
        echo '<td><a href="delete_character.php?id='.$row['id'].'" class="footer-link">Delete</a></td>';
        echo '</tr>
         </tbody>
         </table>';
    }
}

function listAliens($dbConnect)
{
    $sql = 'SELECT * FROM alien_races';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<table class="content-center">';
        echo '<tbody>';
        echo '<tr>';
        echo '<td class="detail-subtitle">'.$row['alien_races'].' ' .'</td>';
        echo '<td><a href="aliens.php#'.$row['id'].'" class="footer-link">View</a></td>';
        echo '<td><a href="alien_details.php?id='.$row['id'].'" class="footer-link">Edit details</a></td>';
        echo '<td><a href="delete_alien.php?id='.$row['id'].'" class="footer-link">Delete</a></td>';
        echo '</tr>
         </tbody>
         </table>';
    }
}

function listForces($dbConnect)
{
    $sql = 'SELECT * FROM forces';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<table class="content-center">';
        echo '<tbody>';
        echo '<tr>';
        echo '<td class="detail-subtitle">'.$row['name'].' ' .'</td>';
        echo '<td><a href="forces.php#'.$row['id'].'" class="footer-link">View</a></td>';
        echo '<td><a href="force_details.php?id='.$row['id'].'" class="footer-link">Edit details</a></td>';
        echo '<td><a href="delete_force.php?id='.$row['id'].'" class="footer-link">Delete</a></td>';
        echo '</tr>
         </tbody>
         </table>';
    }
}

function listMovies($dbConnect)
{
    $sql = 'SELECT * FROM movies';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<table class="content-center">';
        echo '<tbody>';
        echo '<tr>';
        echo '<td class="detail-subtitle">'.$row['movie_title'].' ' .'</td>';
        echo '<td><a href="movies.php#'.$row['id'].'" class="footer-link">View</a></td>';
        echo '<td><a href="movie_details.php?id='.$row['id'].'" class="footer-link">Edit details</a></td>';
        echo '<td><a href="delete_movie.php?id='.$row['id'].'" class="footer-link">Delete</a></td>';
        echo '</tr>
         </tbody>
         </table>';
    }
}

function listPlanets($dbConnect)
{
    $sql = 'SELECT * FROM planets';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<table class="content-center">';
        echo '<tbody>';
        echo '<tr>';
        echo '<td class="detail-subtitle">'.$row['planet_name'].' ' .'</td>';
        echo '<td><a href="planets.php#'.$row['id'].'" class="footer-link">View</a></td>';
        echo '<td><a href="planet_details.php?id='.$row['id'].'" class="footer-link">Edit details</a></td>';
        echo '<td><a href="delete_planet.php?id='.$row['id'].'" class="footer-link">Delete</a></td>';
        echo '</tr>
         </tbody>
         </table>';
    }
}

function listShips($dbConnect)
{
    $sql = 'SELECT * FROM ships';
    foreach ($dbConnect->query($sql) as $row) {
        echo '<table class="content-center">';
        echo '<tbody>';
        echo '<tr>';
        echo '<td class="detail-subtitle">'.$row['ship_name'].' ' .'</td>';
        echo '<td><a href="ships.php#'.$row['id'].'" class="footer-link">View</a></td>';
        echo '<td><a href="ship_details.php?id='.$row['id'].'" class="footer-link">Edit details</a></td>';
        echo '<td><a href="delete_ship.php?id='.$row['id'].'" class="footer-link">Delete</a></td>';
        echo '</tr>
         </tbody>
         </table>';
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
            <label class="detail-subtitle" for="image">Image</label>
            <input type="text" name="image" value="'.$row['imgLocation'].'" />
            <br>
            <label class="detail-subtitle" for="description">Description</label>
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

function alienDetails($dbConnect, $id)
{
    $sql = 'SELECT * FROM  alien_races';
    foreach ($dbConnect->query($sql) as $row) {
        if ($row['id'] == $id) {
            echo' <div class= "container content-center">';
            echo '
            <form class="form-content" method="post" action="update_alien.php">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" value="'.$row['alien_races'].'" />
            <br>
            <label class="detail-subtitle" for="image">Image</label>
            <input type="text" name="image" value="'.$row['url_img'].'" />
            <br>
            <label class="detail-subtitle" for="description">Description</label>
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

function forceDetails($dbConnect, $id)
{
    $sql = 'SELECT * FROM  forces';
    foreach ($dbConnect->query($sql) as $row) {
        if ($row['id'] == $id) {
            echo' <div class= "container content-center">';
            echo '
            <form class="form-content" method="post" action="update_force.php">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" value="'.$row['name'].'" />
            <br>
            <label class="detail-subtitle" for="description">Description</label>
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

function movieDetails($dbConnect, $id)
{
    $sql = 'SELECT * FROM  movies';
    foreach ($dbConnect->query($sql) as $row) {
        if ($row['id'] == $id) {
            echo' <div class= "container content-center">';
            echo '
            <form class="form-content" method="post" action="update_movie.php">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" value="'.$row['movie_title'].'" />
            <br>
            <label class="detail-subtitle" for="image">Image</label>
            <input type="text" name="image" value="'.$row['url_img'].'" />
            <br>
            <label class="detail-subtitle" for="year">Year</label>
            <input type="text" name="year" id="year" value="'.$row['year'].'" />
            <br>
            <label class="detail-subtitle" for="duration">Duration</label>
            <input type="text" name="duration" id="duration" value="'.$row['duration'].'" />
            <br>
            <label class="detail-subtitle" for="rate">Rate</label>
            <input type="text" name="rate" id="rate" value="'.$row['rate'].'" />
            <br>
            <label class="detail-subtitle" for="description">Description</label>
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

function planetDetails($dbConnect, $id)
{
    $sql = 'SELECT * FROM  planets';
    foreach ($dbConnect->query($sql) as $row) {
        if ($row['id'] == $id) {
            echo' <div class= "container content-center">';
            echo '
            <form class="form-content" method="post" action="update_planet.php">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" value="'.$row['planet_name'].'" />
            <br>
            <label class="detail-subtitle" for="image">Image</label>
            <input type="text" name="image" value="'.$row['url_img'].'" />
            <br>
            <label class="detail-subtitle" for="description">Description</label>
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

function shipDetails($dbConnect, $id)
{
    $sql = 'SELECT * FROM ships';
    foreach ($dbConnect->query($sql) as $row) {
        if ($row['id'] == $id) {
            echo' <div class= "container content-center">';
            echo '
            <form class="form-content" method="post" action="update_ship.php">
            <label class="detail-subtitle" for="name">Name</label>
            <input type="text" name="name" id="name" value="'.$row['ship_name'].'" />
            <br>
            <label class="detail-subtitle" for="image">Image</label>
            <input type="text" name="image" value="'.$row['url_img'].'" />
            <br>
            <label class="detail-subtitle" for="description">Description</label>
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
    $q = $dbConnect->prepare("UPDATE characters SET $field =:det WHERE id = :edid");
    $q->bindValue(':det', $details);
    $q->bindValue(':edid', $id);
    if(!$q->execute()){
        print_r($q->errorInfo());
    }
}

function updateAlien($dbConnect,$id,$details,$field){
    $q = $dbConnect->prepare("UPDATE alien_races SET $field =:det WHERE id = :edid");
    $q->bindValue(':det', $details);
    $q->bindValue(':edid', $id);
    if(!$q->execute()){
        print_r($q->errorInfo());
    }
}

function updateForce($dbConnect,$id,$details,$field){
    $q = $dbConnect->prepare("UPDATE forces SET $field =:det WHERE id = :edid");
    $q->bindValue(':det', $details);
    $q->bindValue(':edid', $id);
    if(!$q->execute()){
        print_r($q->errorInfo());
    }
}

function updateMovie($dbConnect,$id,$details,$field){
    $q = $dbConnect->prepare("UPDATE movies SET $field =:det WHERE id = :edid");
    $q->bindValue(':det', $details);
    $q->bindValue(':edid', $id);
    if(!$q->execute()){
        print_r($q->errorInfo());
    }
}


function updatePlanet($dbConnect,$id,$details,$field){
    $q = $dbConnect->prepare("UPDATE planets SET $field =:det WHERE id = :edid");
    $q->bindValue(':det', $details);
    $q->bindValue(':edid', $id);
    if(!$q->execute()){
        print_r($q->errorInfo());
    }
}

function updateShip($dbConnect,$id,$details,$field){
    $q = $dbConnect->prepare("UPDATE ships SET $field =:det WHERE id = :edid");
    $q->bindValue(':det', $details);
    $q->bindValue(':edid', $id);
    if(!$q->execute()){
        print_r($q->errorInfo());
    }
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