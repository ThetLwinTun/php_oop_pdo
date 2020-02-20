<?php
$users = $database->selectAll('users');
// $users = $database->delete('users');
require 'views/users.view.php';
