<?php
  Class User {
    private $username;
    private $password;

    function __construct($username, $password) {
      $this->setUsername($username);
      $this->setPassword($password);
    }

    function setUsername($username) {
      $this->username = $username;
    }

    function getUsername() {
      return $this->username;
    }

    function setPassword($password) {
      $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    function getPassword() {
      return $this->password;
    }

    /**
    * Check if username and password are correct.
    * @parm string $usernameGiven
    * @parm string $passwordGiven
    * @return Boolean
    */
    function checkPassword($usernameGiven, $passwordGiven) {

      if ($username == $usernameGiven && $password == password_hash($passwordGiven, PASSWORD_DEFAULT)) {
        return true;
      } else {
        return false;
      }
    }
  }
?>
