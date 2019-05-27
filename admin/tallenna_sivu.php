

<?php

// Tällä sivulla tapahtuu muokatun tekstin päivitys tietokantaan

    include 'db.php';

    session_start();
    $vaarin = "";

    if(!isset($_SESSION['username'])){
        header("location: login.php");

    }

    if(isset($_POST['tallenna'])) {

        $id = $_POST['id'];
        $html_content = $_POST['html_content'];
        $class = $_POST['class'];
        $user_id = $_SESSION['user_id'];

        $kysely = $conn->prepare("UPDATE content SET html_content=?, class=?, user_id=? WHERE id=?;");

        $kysely->bind_Param("ssii", $html_content, $class, $user_id, $id);
        $kysely->execute();

        header('location: sivujen_muokkaus.php');
    }

?>