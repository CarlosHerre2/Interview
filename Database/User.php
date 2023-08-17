<?php 

class User {

    public $UserName = 'Carlos';
    protected static $UserPassword = 'I_Pass';

    
    public static function verify_user($enteredUserName, $enteredUserPassword)
    {
        if ($enteredUserName == 'Carlos' &&  $enteredUserPassword == 'I_Pass') {
            return true;
        }
        // i am just adding this so that i can show that if you use a Database you may connect through this way 
        // global $database;
        // $UserName = $database->escape_string($UserName);
        // $UserPassword = $database->escape_string($UserPassword);

        // $sql = "SELECT * FROM ausers WHERE ";
        // $sql .= "UserName = '{$UserName}'";
        // $sql .= " AND UserPassword = '{$UserPassword}' ";

        // $the_result_array = self::Find_by_query($sql);
        // return !empty($the_result_array) ? array_shift($the_result_array) : false;
    }

}