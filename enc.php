<?php
class person{
 public $username;
 protected $mobileno;
 private  $password;

public function __construct($uname,$mno,$upass){
     $this->username=$uname;
     $this->mobileno=$mno;
     $this->password=$upass;
}
 function getPassword(){
		return $this->password;
	}

}

class people extends person{
	public function getMobileno(){
		return $this->mobileno;
	}
}

$object = new people('abc','02334645786777','abc12344556');
echo "Username is :".$object->username."<br>";
echo "Mobilenumber  is :".$object->getMobileno()."<br>";
echo "Password is :".$object->getPassword();

?>