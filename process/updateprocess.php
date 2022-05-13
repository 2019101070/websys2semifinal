
<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $specifictime = $_POST['specifictime'];
    $classdetails = $_POST['classdetails'];
    $gender = $_POST['gender'];

    require_once('../dao/config.php');
	require_once('../dao/crudDAO.php');
    
    if(!empty($name) && !empty($email) && !empty($specifictime) && !empty($classdetails) && !empty($gender))
    {
        $a=new crudDAO();
        $update = $a->update($id, $name, $email, $specifictime, $classdetails, $gender);
        if($update)
        {
            header('location:../pages/users.php');
        }
    }
?>
