<?php

require_once 'tryconfig.php';
if (isset($_POST['submitted'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
   
    mysqli_query($conn, "insert into contacts(name) values ('$name')");

    //Start the session if already not started.
    session_start();
    $_SESSION['success_message'] = "Contact form saved successfully.";
    header("Location: index.php");
    exit();
} else {
    echo "Server problem, Try after sometime.";
}
?>
