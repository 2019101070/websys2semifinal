<?php
require_once('../dao/config.php');
require_once('../dao/crudDAO.php');

echo 'Do you really want to delete this data?';

?>
        <br><br>
        <button type="Back" name="Back" action='../pages/users.php'>Back</button>
        <button class="btn" type="submit" name="Delete">Delete</button>