<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <?Php 
        require_once('../dao/config.php');
        require_once('../dao/crudDAO.php');

        $id = $_GET['id'];
        //echo $id;

        $user = new crudDAO();
        $edit = $user->getEdit($id);

        foreach($edit as $key=> $value)
        {
        echo '<input type="text" name="name" value='.$value['name'].'>';
        }
        ?>
</body>
</html>