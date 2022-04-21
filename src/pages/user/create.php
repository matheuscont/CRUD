<?php

require_once '../../../config.php';
require_once '../../actions/user.php';
require_once '../partials/header.php';

if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]))
    createUserAction($conn, $_POST["name"], $_POST["email"], $_POST["phone"]);

?>