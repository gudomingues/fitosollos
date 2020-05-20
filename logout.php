<?php
    session_start();
    session_destroy();
    Header('Location: loginIndex.php');
    exit();
