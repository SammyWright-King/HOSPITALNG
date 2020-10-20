<?php
  require_once(__dir__ . '/Db.class.php');
  class RegisterModel extends Db {

    /**
      * @param array
      * @return array
      * @desc Creates and returns a user record....
    **/
    public function createUser(array $user) :array
    {
      $this->query("INSERT INTO loginsystem (username, email, password) VALUES (:username, :email, :password)");
      $this->bind('username', $user['username']);
      $this->bind('email', $user['email']);
      $this->bind('password', $user['password']);

      if ($this->execute()) {
        $Response = array(
          'status' => true,
        );
        return $Response;
      } else {
        $Response = array(
          'status' => false
        );
        return $Response;
      }
    }

    /**
      * @param string
      * @return array
      * @desc Returns a user record based on the method parameter....
    **/
    public function fetchUser(string $email) :array
    {
      $this->query("SELECT * FROM loginsystem WHERE `email` = :email");
      $this->bind('email', $email);
      $this->execute();

      $User = $this->fetch();
      if (!empty($User)) {
        $Response = array(
          'status' => true,
          'data' => $User
        );
        return $Response;
      }
      return array(
        'status' => false,
        'data' => []
      );
    }
  }
 ?>