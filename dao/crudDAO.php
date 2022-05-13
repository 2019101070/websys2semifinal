<?Php
    class crudDAO
    {

            public function register($name, $email, $specifictime, $classdetails, $gender)
            {
            global $db;
    
                $sql="INSERT INTO registration_info (name, email, specifictime, classdetails, gender) VALUES ('$name','$email','$specifictime','$classdetails','$gender')";
                $result=$db->query($sql);
                if($result)
                {
                    return $result;
                }
                else
                {
                    return false;
                }
            }
            public function display()
            {
                global $db;

                $sql="SELECT * FROM registration_info";
                $result=$db->query($sql);
                if($result)
                {
                    return $result;
                }
                else
                {
                return false;
                }
            }
            public function getEdit($id)
            {
                global $db;

                $sql="SELECT*FROM registration_info WHERE id=$id";
                $result=$db->query($sql);
                if($result)
                {
                    return $result;
                }
                else
                {
                    return false;
                }
            }
        }
?>