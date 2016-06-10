<?php
namespace App\Auth;

use Cake\Auth\AbstractPasswordHasher;

class PlainPasswordHasher extends AbstractPasswordHasher {

    public function hash($password) {
        //password_hashの戻り値にはcost(ストレッチ回数)とソルトを含むよ
        //costの13は2^13回のストレッチング
        //optionでsaltを与えなければ自動生成
        return $password;
    }

    public function check($password, $hashedPassword) {
        return $password === $hashedPassword;
    }

}
