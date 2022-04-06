<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasApiTokens,HasFactory;

    private $nama,$phonenumber,$username,$password,$email;

    public function admin(){
        $this->$nama = $nama;
        $this->$username = $username;
        $this->$password = $password;
        $this->$phonenumber = $phonenumber;
        $this->$email = $email;
        $this->$kodeunik = $kodeunik;
    }

    public function tourist(){
        $this->$nama = $nama;
        $this->$username = $username;
        $this->$password = $password;
        $this->$phonenumber = $phonenumber;
        $this->$email = $email;
    }

    public function tourguide(){
        $this->$nama = $nama;
        $this->$username = $username;
        $this->$password = $password;
        $this->$phonenumber = $phonenumber;
        $this->$email = $email;
        $this->$asalkota = $asalkota;
    }

}
