<html>
    <head>
        <title>List of Users</title>
    </head>
        <body>
            <?Php
            require_once('../dao/config.php');
            require_once('../dao/crudDAO.php');
            ?>
            <table>
                <?Php $a=new crudDAO();
                $list = $a->display();
                foreach($list as $key => $value){
                    echo '<tr>';
                    echo '<td>'.$value['name'].'</td>';
                    
                }
                ?>
        </body>
</html>
