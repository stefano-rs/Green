<?php
namespace App\Controller;

use Green\Controller;
use Green\View;
use App\Model\UserModel;

class User extends Controller
{

    public function index()
    {
       $user = new UserModel();
       $result = $user->getAll();
       $this->view->render('app/View/user/list.phtml', $result);
    }

    public function create()
    {
        $this->view->render('app/View/user/create.phtml');
    }

    public function update()
    {
        $this->view->render('app/View/user/update.phtml');
    }

    public function delete()
    {
        $this->view->render('app/View/user/delete.phtml');
    }
}