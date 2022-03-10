<?php
declare(strict_types=1);

class UserController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
        $user = OneClientUsers::find(10);

        var_dump($user->toArray());
    }

}

