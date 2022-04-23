<?php
    include 'settings.php';
    include 'lib/db.php';
    include 'utils/security.php';
    Authentication :: logout();
    // redirect login
    // include 'view/logout.php';
?>