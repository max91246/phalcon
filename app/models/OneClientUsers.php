<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class OneClientUsers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var string
     */
    public $nickname;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $sex;

    /**
     *
     * @var string
     */
    public $avatar;

    /**
     *
     * @var string
     */
    public $mobile;

    /**
     *
     * @var string
     */
    public $user_key;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var integer
     */
    public $integral;

    /**
     *
     * @var string
     */
    public $status;

    /**
     *
     * @var string
     */
    public $comment_status;

    /**
     *
     * @var string
     */
    public $desc;

    /**
     *
     * @var integer
     */
    public $device_id;

    /**
     *
     * @var string
     */
    public $code;

    /**
     *
     * @var string
     */
    public $register_ip;

    /**
     *
     * @var string
     */
    public $login_ip;

    /**
     *
     * @var integer
     */
    public $last_at;

    /**
     *
     * @var string
     */
    public $logged_at;

    /**
     *
     * @var string
     */
    public $mute_start;

    /**
     *
     * @var string
     */
    public $mute_end;

    /**
     *
     * @var integer
     */
    public $wallet;

    /**
     *
     * @var string
     */
    public $created_at;

    /**
     *
     * @var string
     */
    public $updated_at;

    /**
     *
     * @var string
     */
    public $deleted_at;

    /**
     *
     * @var string
     */
    public $vip_flag;

    /**
     *
     * @var integer
     */
    public $vip_level;

    /**
     *
     * @var integer
     */
    public $vip_order_id;

    /**
     *
     * @var integer
     */
    public $exp_increment;

    /**
     *
     * @var integer
     */
    public $total_exp;

    /**
     *
     * @var string
     */
    public $vip_expiry;

    /**
     *
     * @var string
     */
    public $vip_updated_at;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("onedb");
        $this->setSource("one_client_users");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OneClientUsers[]|OneClientUsers|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null): \Phalcon\Mvc\Model\ResultsetInterface
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OneClientUsers|\Phalcon\Mvc\Model\ResultInterface|\Phalcon\Mvc\ModelInterface|null
     */
    public static function findFirst($parameters = null): ?\Phalcon\Mvc\ModelInterface
    {
        return parent::findFirst($parameters);
    }

}
