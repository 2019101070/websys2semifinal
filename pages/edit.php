<html>
    <head>
        <title>Update</title>
    </head>
<body>
    <form method="post" action='../process/updateprocess.php'>
        <?Php 
        require_once('../dao/config.php');
        require_once('../dao/crudDAO.php');

        $id = $_GET['id'];
        //echo $id;

        $user = new crudDAO();
        $edit = $user->getEdit($id);

        foreach($edit as $key=> $value)
        {
            echo '<input type="text" name="id" hidden="hidden" value='.$value['id'].'>';
            echo '<br>';
            echo 'Name: <input type="text" name="name" value='.$value['name'].'>';
            echo '<br>';
            echo 'Email: <input type="text" name="email" value='.$value['email'].'>';
            echo '<br>';
            echo 'Specific Time: <input type="text" name="specifictime" value='.$value['specifictime'].'>';
            echo '<br>';
            echo 'Class Details: <input type="text" name="classdetails" value='.$value['classdetails'].'>';
            if($value['gender']=='male')
            {
                echo '<br>';
                echo '<label>Gender:</label>';
                echo '<input type="radio" name="gender" value="male" checked="checked">Male';
                echo '<input type="radio" name="gender" value="female">Female';
            }
            else
            {
                echo '<br>';
                echo '<label>Gender:</label>';
                echo '<input type="radio" name="gender" value="male">Male';
                echo '<input type="radio" name="gender" value="female" checked="checked">Female';
            }
        }
        ?>
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>