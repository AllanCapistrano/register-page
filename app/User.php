<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class User extends Model
{
  // public $timestamps = false;
  protected $table = 'users';

  public static function find($email, $typedPassword)
  {
    // $user = User::where('email', $email)->get();
    $user = User::where('email', $email);

    if ($user->count() == 1) {
      foreach ($user->get() as $temp) {
        $user = $temp;
      }

      if (self::decryptPassword($user->password) == $typedPassword) {
        echo "Funcionou";
      } else {
        echo "F";
      }
    }

  }

  public function encryptPassword($password)
  {
    // $this->attributes['password'] = Crypt::encryptString($value);
    return Crypt::encryptString($password);
  }

  public static function decryptPassword($password)
  {
    try {
      return Crypt::decryptString($password);
    } catch (\Exception $e) {
      return $e;
    }
  }
}
