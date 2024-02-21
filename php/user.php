<?php

include 'connect_bd.php';

$id_user = $_GET['user'];

$query = mysqli_query($link,"SELECT *, 
users.Name AS user_name,
roles.Name AS user_role,
classes.Name AS user_class
FROM users 
INNER JOIN roles ON roles.ID = users.Role
INNER JOIN classes ON classes.ID = users.class
WHERE users.ID = $id_user");

for($user = []; $row = mysqli_fetch_assoc($query); $user[] = $row);
?>