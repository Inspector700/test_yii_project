<?php
class UserController extends CController {
    
    public function actionIndex() {
        $model = new User;
        
        $post = Yii::app()->request->getPost('User');
        if (!empty($post)){
            
            $model->attributes = $post;
            
            if ($model->validate()) {
                $model->save();
                $this->refresh();
            }
        }else{
            $model->attributes = Yii::app()->request->getQuery('User');
        }
        $this->render('user', array('model' => $model));
    }
    
}

