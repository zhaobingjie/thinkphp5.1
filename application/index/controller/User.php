<?php
namespace app\index\controller;

class User
{
    public function getInfo()
    {
        return $this->info();
    }

    public function info($id)
    {
        return 'info-2-'.$id;
    }

    public function getPhone()
    {
    }

    public function postInfo()
    {
    }

    public function putInfo()
    {
    }

    public function deleteInfo()
    {
    }
}
