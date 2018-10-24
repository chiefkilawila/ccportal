<?php

class DbOperation
{
    //Database connection link
    private $con;

    //Class constructor
    public function __construct()
    {
        //Getting the DbConnect.php file
        require_once dirname(__FILE__) . '/DBConnect.php';

        //Creating a DbConnect object to connect to the database
        $db = new DbConnect();

        //Initializing our connection link of this class
        //by calling the method connect of DbConnect class
        $this->con = $db->connect();
    }

    // destructor
    public function __destruct()
    {
    }



    /**
     * Get user by email and password
     */
    public function getUserByEmailAndPassword($email, $password)
    {
        $stmt = $this->con->prepare("SELECT * FROM agrovet_users WHERE email = ?");

        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();

            // verifying user password
            $salt = $user['salt'];
            $encrypted_password = $user['encrypted_password'];
            $hash = $this->checkhashSSHA($salt, $password);
            // check for password equality
            if ($encrypted_password == $hash) {
                // user authentication details are correct
                return $user;
            }
        } else {
            return null;
        }
    }


    /**
     * create user
     */
public function createUser(){


}


    /**
     * add new product
     */
public function addNewProduct(){


}



    /**
     * Get user by email and username
     */
    public function getUseridbyEmail($email)
    {
        $stmt = $this->con->prepare("SELECT * FROM agrovet_users WHERE email = ?");

        $stmt->bind_param("s", $email);

        if ($stmt->execute()) {
            // $user = $stmt->get_result()->fetch_assoc();
            $user = $stmt->get_result()->fetch_assoc();

            $stmt->close();
            return $user;
        //  }
        } else {
            return null;
        }
    }

    /**
     * Check users email is exists or not
     */
    public function doesUserExist($email)
    {
        $stmt = $this->con->prepare("SELECT email from agrovet_users WHERE email = ?");

        $stmt->bind_param("s", $email);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // user existed
            $stmt->close();
            return true;
        } else {
            // user not existed
            $stmt->close();
            return false;
        }
    }


    /**
     * Check user is existed or not
     */
    public function doesUseridExist($user_id)
    {
        $stmt = $this->con->prepare("SELECT user_id from agrovet_users WHERE user_id = ?");

        $stmt->bind_param("s", $user_id);

        $stmt->execute();

        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // user existed
            $stmt->close();
            return true;
        } else {
            // user not existed
            $stmt->close();
            return false;
        }
    }

    /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
    public function hashSSHA($password)
    {
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }

    /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    public function checkhashSSHA($salt, $password)
    {
        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }



    /*
    * The delete operation
    * When this method is called record is deleted for the given id
    */
    public function deleteUserAccount($user_id)
    {
        $stmt = $this->con->prepare("DELETE FROM agrovet_users WHERE user_id = ? ");
        $stmt->bind_param("i", $user_id);
        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
