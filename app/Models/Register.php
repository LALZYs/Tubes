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

    public function get_admin(){
        return[
            'nama'=>$this->$nama,
            'username'=>$this->$username,
            'password'=>$this->$password,
            'phonenumber'=>$this->$phonenumber,
            'email'=>$this->$email,
            'kode unik'=>$this->$kodeunik
        ];
    }

    public function get_tourist(){
        return[
        'nama'=>$this->$nama,
        'username'=>$this->$username,
	    'password'=>$this->$password,
	    'phonenumber'=>$this->$phonenumber,
	    'email'=>$this->$email,
        ];
    }

    public function get_tourguide(){
        return[
            'nama'=>$this->$nama ,
            'username'=>$this->$username,
            'password'=>$this->$password,
            'phonenumber'=>$this->$phonenumber,
            'email'=>$this->$email,
            'asalkota'=>$this->$asalkota,
        ];
    }
}
