<?php
class ArticleController extends Controller{
    
    public function actionIndex(){
        $articleId = Yii::app()->request->getParam('id');
        
        $this->assign('aid', $articleId);
        $this->display('test.html');
    }
    
}