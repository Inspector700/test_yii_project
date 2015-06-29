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
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    public function attributeLabels() {

        return array(
            'username' => 'Ваше Имя',
            'password' => 'Ваш Пароль',
            'password2' => 'Введите Пароль Еще раз',
            'email' => 'Ваш Email',
            'activate' => 'Подписаться на рассылку'
        );
    }

    public function safeAttributes() {
        return array(
            'username',
            'password',
            'password2',
            'email',
            'emactivate',
        );
    }

//    public function search() {
//        $criteria = new CDbCriteria;
//
//        $criteria->compare('id' . $this->id);
//
//        return new CActiveDataProvider($this, array(
//            'criteria' => $criteria,
//        ));
//    }

    public function hashPassword($password) {
        return CPasswordHelper::hashPassword($password);
    }


    protected function beforeSave() {
        if (parent::beforeSave()) {
            
                if ($this->isNewRecord)
                    $this->password = $this->hashPassword($this->password);
                return true;
        }
    }

    public function rules() {

        return array(
            array('username, password, password2, email', 'required'),
            array('activate', 'boolean'),
            array('password', 'compare', 'compareAttribute'=>'password2'),
            array('username, password', 'length', 'min' => 3),
            array('username', 'length', 'max' => 10),
            array('password, password2', 'required', 'message' => "Password can not be empty"),
            array('email', 'email')
        );
    }
}
?>