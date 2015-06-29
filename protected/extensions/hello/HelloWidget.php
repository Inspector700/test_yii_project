<?php
 // http://zabolotskikh.com/yii/widgets/
class HelloWidget extends CWidget
{
    /**
     * @var string имя пользователя
     */
    public $username = '';
 
    /**
     * Запуск виджета
     */
    public function run()
    {
        $this->render('index', array(
            'username' => $this->username,
        ));
    }
}

