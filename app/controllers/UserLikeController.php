<?php
declare(strict_types=1);

class UserLikeController extends \Phalcon\Mvc\Controller
{

    protected $user_like;

    public function initialize(){

        $this->user_like = new OneUserLikes();

    }

    public function createAction()
    {
        $sql = "INSERT INTO OneUserLikes (user_id, article_id, type, created_at, updated_at) VALUES (:user_id:, :article_id:, :type:, :created_at:, :updated_at:)";

        $params = [
            'user_id' => 1,
            'article_id' => 1,
            'type' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $status = $this->user_like->modelsManager->executeQuery($sql, $params);

        if ($status){
            echo 'ok';
        }
    }

    public function readAction()
    {
        $user = OneUserLikes::find(1777051);

        print_r($user->toArray());
    }

    public function updateAction()
    {

        $sql = "UPDATE OneUserLikes SET type = :type: WHERE id = :id:";

        $params = [
            'id' => 1777051,
            'type' => 1,
        ];

        $status = $this->user_like->modelsManager->executeQuery($sql, $params);

        if ($status){
            echo 'ok';
        }
    }

    public function deleteAction()
    {

        $sql = "DELETE FROM OneUserLikes WHERE id = :id:";

        $params = [
            'id' => 1777051,
        ];

        $status = $this->user_like->modelsManager->executeQuery($sql, $params);

        if ($status){
            echo 'ok';
        }
    }

}

