<?php
  require_once(__dir__ . '/Db.class.php');
  class LoginModel extends Db {

    /**
      * @param string
      * @return array
      * @desc Returns a user record based on the method parameter....
    **/
    public function fetchEmail(string $username_email) :array
    {
      $this->query("SELECT * FROM loginsystem WHERE `email` = :email OR username = :username");
      $this->bind('email', $username_email);
      $this->bind('username', $username_email);
      $this->execute();

      $Email = $this->fetch();
      if (empty($Email)) {
        $Response = array(
          'status' => true,
          'data' => $Email
        );

        return $Response;
      }

      if (!empty($Email)) {
        $Response = array(
          'status' => false,
          'data' => $Email
        );

        return $Response;
      }
    }
  }
 ?>