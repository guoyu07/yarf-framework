<?php

// use Doctrine\Common\Cache;
class IndexController extends Yaf_Controller_Abstract  {
   
	public function indexAction() {//默认Action
		Yaf_Dispatcher::getInstance()->disableView();//禁用view
		$this->getView()->assign("content", "Hello World");
        echo 'asdf';


        // $cacheDriver = new \Doctrine\Common\Cache\ArrayCache();


        // $cacheDriver->setMemcache($memcache);
        // $cacheDriver->save('cache_id', 'my_data');
	}

	public function demoAction(){
		Yaf_Dispatcher::getInstance()->disableView();
		echo 'demo';
	}

}


?>