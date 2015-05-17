<?php
class ErrorController extends Controller{
    
    public function actionIndex(){
        $error = Yii::app()->errorHandler->error;
        $isRequest = Yii::app()->request->isAjaxRequest;
        
	    $this->assign('message', $error['message']);
	    $this->display('404.html');
    }
}