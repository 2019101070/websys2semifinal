<?Php
    class crudDAO{

        public function register($name, $email, $specifictime, $classdetails, $gender){
            global $db;
    
                $sql="INSERT INTO registration_info (name, email, specifictime, classdetails, gender) VALUES ('$name','$email','$specifictime','$classdetails','$gender')";
                $result=$db->query($sql);
                if($result){
                    return $result;
                }
                else{
                    return false;
                }
            }
        }
?>