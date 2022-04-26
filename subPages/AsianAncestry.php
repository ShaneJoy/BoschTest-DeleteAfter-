
  
<?php
require 'common.php';

//Grab all users from our database
$users = $database->select("users", [
    'id',
    'name',
]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Asian Ancestry Page </title>
</head>
<body>
    <h1>
        Welcome to the Asian Ancestry Page!
    </h1>
</body>
<div class="container">
    <div class="row">
        <h2>Attendance</h2>
    </div>
    <table class="table table-striped table-responsive">
        <tbody>
            <?php
                //Loop through all our available users
                for each($users as $user) {
                    echo '<tr>';
                    echo '<td scope="row">' . $user['name'] . '</td>';


                }
            ?>
        </tbody>
    </table>
</div>
