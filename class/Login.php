<?php 

class Login 
{
    public static function validateUserLogin($email,$senha)
    {
        $conn = Connection::getConnection();
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $result = $conn->prepare($sql);
        $result->bindParam(":email",$email);
        $result->bindParam(":senha",$senha);
        $result->execute();

        if($result->rowCount() > 0)
        {
            $result = $result->fetch();
            // session 
            $_SESSION['cLogin'] = $result['id'];
            return true;
        }else {
            return false;
        }
    }
}