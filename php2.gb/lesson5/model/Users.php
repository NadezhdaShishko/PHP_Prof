<?php

namespace app\model;

class Users extends DbModel
{
  public $id;
  public $login;
  public $pass;
  public $property = [
    'id' => false,
    'login' => false,
    'pass' => false
  ];

  public function __construct($login = null, $pass = null)
  {
      $this->login = $login;
      $this->pass = $pass;
  }

  public function setLogin($login)
  {
      $this->property['login'] = true;
      $this->login = $login;
  }
  public function setPass($pass)
  {
      $this->property['pass'] = true;
      $this->pass = $pass;
  }

  public function propertyFalse()
  {
      $this->property['id'] = false;
      $this->property['login'] = false;
      $this->property['pass'] = false;
  }

  public static function isAuth()
  {
      if (isset($_SESSION['login'])) {
          $user = static::getWhere('login', $login);
          $user =
              [
                  'login' => $login,
                  'pass' => $pass
              ];
          if ($pass == $user['pass']) {
              $_SESSION['login'] = $user;
          }
        }
      return isset($_SESSION['login']) ? true: false;
  }

  public static function authSend()
  {
      if (isset($_POST['send'])) {
          $login = $_POST['login'];
          $pass = $_POST['pass'];
          $row = static::getWhere('login', $login);
          $user = new Users;
          $user->id = $row['id'];
          $user->login = $row['login'];
          $user->pass = $row['pass'];
          if (!static::auth($row)) {

              return false;

          } else {
              if (isset($_POST['save'])) {
                  $user->save();
                  $user->propertyFalse();
              }
              $_SESSION['login'] = $login;

              return true;
          }
      } else
          return false;
  }

  public static function auth($row)
  {
      $pass = $_POST['pass'];
      return password_verify($pass, $row['pass']);
  }

  public static function getUserName()
  {
      return static::isAuth() ? $_SESSION['login'] : "Guest";
  }


  public static function getTableName()
  {
      return 'users';
  }
}