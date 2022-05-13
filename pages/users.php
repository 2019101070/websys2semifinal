<html>
    <head>
        <title>List of Users</title>
    </head>
    <style type="text/css">
        td
        {
            border: 1px solid;
        }
        </style>
        <body>
            <?Php
            require_once('../dao/config.php');
            require_once('../dao/crudDAO.php');
            ?>
            <table>
                <th>Name</th>
                <th>Email</th>
                <th>Specific Time</th>
                <th>Class Details</th>
                <th>Gender</th>
                <?Php $a=new crudDAO();
                $list = $a->display();
                foreach($list as $key => $value){
                    echo '<tr>';
                    echo '<td>'.$value['name'].'</td>';
                    echo '<td>'.$value['email'].'</td>';
                    echo '<td>'.$value['specifictime'].'</td>';
                    echo '<td>'.$value['classdetails'].'</td>';
                    echo '<td>'.$value['gender'].'</td>';
                    echo '<td><a href ="../pages/edit.php?id='.$value['id'].'">Edit</a></td>';
                    echo '<td><a href="../pages/deleteprocess.php?id='.$value['id'].'">Delete</a></td>';
                    echo '</tr>';

                }
                ?>
        </body>
</html>
