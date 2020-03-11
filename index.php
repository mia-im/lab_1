<?php

class User{

public $name;
public $surname;
public $job;

public function __construct($job, $name,$surname)
{
	$this->job = $job;
	$this->name = $name;
	$this->surname = $surname;
}

public function printInf()
   {
	    echo 'Здравствуйте '.$this->job.' '.$this->name.' '.$this->surname.'. ';
 	}
}

class admin extends User{
	public function printInf()
   {
   	    parent::printInf();
	    echo 'Вы можете на сайте делать всё.';
 	}
}

class client extends User{
	public function printInf()
   {
   	    parent::printInf();
	    echo 'Вы можете на сайте просматривать информацию доступную пользователям.';
 	}
}

class manager extends User{
	public function printInf()
   {
     	parent::printInf();
	    echo 'Вы можете на сайте изменять, удалять и создавать клиентов.';
 	}
}


if(!empty($_POST["password"])&&!empty($_POST["login"]))
{

if($_POST["password"]==123 && $_POST["login"]==admin)
{
$admin = new admin('админ','Ада','Байрон');
$admin->printInf();
}
else if($_POST["password"]==124 && $_POST["login"]==client)
{
$client = new client('клиент','Афанасий','Авдотьев');
$client->printInf();
}
else if($_POST["password"]==125 && $_POST["login"]==manager)
{
$manager = new manager('менеджер','Иван','Иванов');
$manager->printInf();
}
else{
echo 'Вы ввели неверный логин или пароль.';
}
}

?>




