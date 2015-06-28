<?php

class User extends CActiveRecord {

//    public $id;
//    public $username;
//    public $password;
//    public $email;
//    public $active;

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_user';
    }

    /**
     * Связи таблиц
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    public function attributeLabels() {

        return array(
            'username' => 'Ваше Имя',
            'password' => 'Ваш Пароль',
            'email' => 'Ваш Email',
            'activate' => 'Подписаться на рассылку'
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('id'. $this->id);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function rules() {

        return array(
            array('email, username', 'unique'),
            array('username', 'required'),
            array('activate', 'boolean'),
            array('password', 'authenticate'),
            array('email', 'email')
        );
    }

    public function authenticate($attribute,$params)
    {
        $this->_identity = new UserIdentity($this->username, $this->password);
        if (!$this->_identity->authenticate())
            $this->addError('password', 'Неправильное имя пользователя или пароль.');
    }

}
?>