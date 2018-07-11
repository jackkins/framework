<?php

/**
* 
*/
class ControllerHome extends MainController{
	
	function __construct($argument=null)
	{
		# code...
	}
	
	public function index($get){
		if(!empty($get['action'])){
			if(method_exists($this,$get['action'])){
				if($_POST){
					$this->$get['action']();
				}
				else{
					$this->loadController("header");
					$this->$get['action']();
					$this->loadController("footer");
				}
			}
		}
		else{
			if($_POST){
				$this->viewpage();
			}
			else{
				$this->loadController("header");
				$this->viewpage();
				$this->loadController("footer");
			}
		}
	}
	private function viewpage(){
		$this->outputcontent("home");
	}


}