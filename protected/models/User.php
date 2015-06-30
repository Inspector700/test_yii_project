<?php
class User extends CActiveRecord {
    
    
    public function tableName() {
        return 'user';
    }
    
    public function rules() {
        return array(
            array('username', 'required'),
            array('username', 'unique'),
            array('username', 'usernameValidator', 'pattern'=>'/[a-zA-Z]+$/s'),
            //array('username', 'match', 'pattern'=>'/[a-zA-Z]+$/s', 'message'=>'Must contains only letters.'),
            array('email', 'email'),
            array('password', 'length', 'min' => '3'),
            array('active', 'boolean')
        );
    }

    public function attributeLabels(){
        return array(
            'username' => 'Your Name',
            'email' => 'Your Email',
            'password' => 'Your Password',
            'active' => 'Activate'
        );
    }
    
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
    
    public function hashPassword($password) {
        return CPasswordHelper::hashPassword($password);
    }
    
    protected function beforeSave() {
        if($this->isNewRecord){
            return $this->password = $this->hashPassword($this->password);
        }
        
    }
    
    public function usernameValidator($attribute, $params) {

            if(!preg_match($params['pattern'], $this->$attribute))    {
                $this->addError($attribute, "This is custom message about error!");
            }
    }
    
    public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('active',$this->active);
                

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

