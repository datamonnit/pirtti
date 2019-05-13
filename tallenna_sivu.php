<?php

    include 'db.php';

    if(isset($_POST['tallenna'])) {

        $id = $_POST['id'];
        $html_content = $_POST['html_content'];
        $class = $_POST['class'];

        $kysely = $conn->prepare("UPDATE content SET html_content=?, class=? WHERE id=?;");

        $kysely->bind_Param("ssi", $html_content, $class, $id);
        $kysely->execute();

        header('location: sivujen_muokkaus.php');
    }

?>