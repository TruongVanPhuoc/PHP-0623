<?php
class User
{
    protected string $name;
    protected string $email;
    public $role;
    function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }
    function setName($name)
    {
        $this->name = $name;
    }
    function getName()
    {
        return $this->name;
    }
    function setEmail($email)
    {
        $this->email = $email;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getInfor()
    {
        return "Name:" . $this->name ."<br>". "Email:" . $this->email ."<br>". "Role:" . $this->role;
    }
    function isAdmin()
    {
        return $this->role === 1;
    }
    function getRolename()
    {
        return $this->role === 1 ? 'admin' : "User";
    }
}

$infor = new User("Phuoc", "phuoc@gmail.com", 1);
echo $infor->getRolename() . "<br>";
echo $infor->getInfor();

?>
