<?php

class SiteController extends Controller {

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }
    
    public function actionContact() {
        $test = 'test';
        $this->render('contact', array('send' => $test));
    }

}
