<?php
    session_start();
    session_destroy();
    session_write_close();
    header('Refresh:1;URL=main.html');
?>