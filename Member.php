<?php
namespace Phppot;

use \Phppot\DataSource;

class Member
{

    private $dbConn;

    private $ds;

    function __construct()
    {
        require_once "DataSource.php";
        $this->ds = new DataSource();
    }

    function validateMember()
    {
        $valid = true;
        $errorMessage = array();
        foreach ($_POST as $key => $value) {
            if (empty($_POST[$key])) {
                $valid = false;
            }
        }
        
        if($valid == true) {
           
            
            // Email Validation
            if (! isset($error_message)) {
                if (! filter_var($_POST["userEmail"], FILTER_VALIDATE_EMAIL)) {
                    $errorMessage[] = "Invalid email address.";
                    $valid = false;
                }
            }
            
            
        }
        else {
            $errorMessage[] = "All fields are required.";
        }
        
        if ($valid == false) {
            return $errorMessage;
        }
        return;
    }

    function isMemberExists($username, $email)
    {
        $query = "select * FROM user WHERE email = email";
        $paramType = "ss";
        $paramArray = array($email);
        $memberCount = $this->ds->numRows($query, $paramType, $paramArray);
        
        return $memberCount;
    }

    function insertMemberRecord($firstname, $lastame, $age, $email ,$password)
    {
        $passwordHash = md5($password);
        $query = "INSERT INTO user (user_name, display_name, password, email) VALUES (?, ?, ?, ?)";
        $paramType = "ssss";
        $paramArray = array(
            $firstnamename,
            $lastname,
			$age;
			$email
            $passwordHash,
            
        );
        $insertId = $this->ds->insert($query, $paramType, $paramArray);
        return $insertId;
    }
}