<?php
class Contact extends CActiveForm {
    public $name = '';
    
    public function rules() {
        return array(
            array('name', 'required'),
        );
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

