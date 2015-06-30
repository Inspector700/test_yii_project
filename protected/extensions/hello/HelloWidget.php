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
        $sql = 'Select * From user Order By rand() Limit 5;';
        $users = User::model()->findAllBySql($sql);
        $this->render('index', array(
            'users' => $users,
        ));
    }
}

