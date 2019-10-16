<?php
class Student extends User
{
    protected  $group;
    public function __construct($name, $address, $phone, $role, $group)
    {
        parent::__construct($name, $address, $phone, $role);
        $this->group = $group;
    }
    public function setGroup($group)
    {
        $this->group = $group;
    }
    public function getGroup()
    {
        return $this->group;
    }
}