<?php
    session_start();
    session_unsent();
    session_destroy();
    header('location:../?logout=true');
    exit();
?>