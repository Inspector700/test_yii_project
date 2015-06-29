<?php

class AjaxtestController extends Controller
{

public function actionIndex()
    {
            $comment = new Comment('user');
            $this->performAjaxValidation($comment);
            if(isset($_POST['Comment']))
            {
                    $comment->attributes=$_POST['Comment'];
                    $comment->id_news = 1;

                    if($comment->save())
                    {
                        if(Yii::app()->request->isAjaxRequest){
                            echo 'Спасибо за ваш комментарий!';
                            // Завершаем приложение
                            Yii::app()->end();
                        }
                        else {
                            Yii::app()->user->setFlash('commentSubmitted','Спасибо за ваш комментарий!');
                            $this->refresh();
                        }
                    }
                    else {
                        if(Yii::app()->request->isAjaxRequest){
                            echo "fail";
                            Yii::app()->end();
                        }
                    }

            }
            $this->render('comment', array("model"=>$comment));
    }

    public function actionComment() {
        echo '123';
    }

    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='comment-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}