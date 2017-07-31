<?php
/**
 * Class ProfileController
 * Контроллер для работы с личным кабинетом
 */

 class ProfileController extends Controller {

         public function __construct(){
             parent::__construct();
         }
         /**
          * Основная страница личного кабинета
          *
          * @return bool
          */
         public function index () {

             //Получаем id пользователя из сессии
             $userId = User::checkLog();

             //Получаем всю информацию о пользователе из БД
             $user = User::getUserById($userId);

             $data['title'] = 'Личный кабинет ';
             $data['user'] = $user;

             if ($data['user']['role_id']==1){
                $this->_view->render('admin/index',$data);
             }else{

                $this->_view->render('profile/index',$data);
             }

         }

     }
