<?php
/**
 * 用户控制器
 * 13-5-7 下午8:30 
 */
class UserController extends Controller{
    /**
     *用户登录 
     */
    function actionLogin(){
        //通过控制器方法调用视图
        //renderPatial()调用视图
        //$this ->renderPartial('login');
        $this -> render('login');
    }
    
    function actionRegister(){
        /**
         * renderPartial不渲染布局
         * render会渲染布局 
         */
        //$this ->renderPartial('register');
        $this -> render('register');
    }
    
    function actionCc(){
        echo "cc";
    }
}