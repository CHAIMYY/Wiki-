<?php


class User
{
    
    static public function login($data)
    {
        $email = $data['Email'];
        $strm = DB::connect()->prepare("SELECT *FROM users WHERE Email='$email'");
        $strm->execute() or die('SQL');
        
        return $strm->fetch();
    }
    
    static public function insertUser($data)
    {
        $userRole = 'auteur';
        $strm = DB::connect()->prepare('INSERT INTO users(Firstname,Lastname,Email,passwordHash,UserRole)
         VALUES(:Firstname,:Lastname,:Email,:passwordHash,:UserRole) ');
        $strm->bindParam((':Firstname'), $data['Firstname']);
        $strm->bindParam((':Lastname'), $data['Lastname']);
        $strm->bindParam((':Email'), $data['Email']);
        $strm->bindParam((':passwordHash'), $data['passwordHash']);
        $strm->bindParam((':UserRole'), $userRole);

        if ($strm->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
    static public function FindEmail($email)
    {
        $strm = DB::connect()->prepare("SELECT  * FROM users WHERE Email='$email'");
        $strm->execute() or die('SQL');
        $x = $strm->fetch();
        return $x;
    }
}