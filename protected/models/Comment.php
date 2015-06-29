<?php

class Comment extends CActiveRecord
{
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 'tbl_comment';
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
            'author' => 'Ваше Имя',
            'body' => 'Theme',
            'ip' => 'Ваш ip',
            'dt_create' => 'Дата написания',
            'email' => 'Ваш Email',
            'safe' => 'Сохранить',
            'f_status' => "Статус"
        );
    }
public function rules()
    {
        return array(
            array('body, author', 'required'),            
            array('author, email', 'length', 'max'=>128),
                        array('email', 'email'),                        
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, id_user, body, author, email, ip, dt_create, f_status', 'safe', 'on'=>'search'),
        );
    }

}
?>