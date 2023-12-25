<?php

/**
 * Dump and die.
 *
 * @param $var
 * @return void
 */
function dd($var) {
    echo '<pre>';
    echo '<code>';
    var_dump($var);
    echo '</code>';
    echo '</pre>';
    die();
}

function str_secure($str) {
    return trim(htmlspecialchars($str));
}

$db = mysqli_connect('localhost', 'root', '', 'simple_mvc_db');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    try{
        require_once("./controllers");
        $query = "INSERT INTO users(name,email,password) VALUES (?,?,?); ";
        $stmt = $db->prepare($query);

        $stmt->bind_param(": name", $name);
        $stmt->bind_param(": email", $email);
        $stmt->bind_param(": username", $username);


        $stmt->execute();

        $db = null;
        $stmt = null;
        die();

    }catch(PDOException $e){
        die("QUERY FAILED" . $e->getMessage());
    }

}else{
    header("location : index.php");
}
