<?php
require 'vendor/autoload.php';
class myApp  extends \atk4\ui\app{
	function __construct($is_admin = false){
		
		parent::__construct('Party App.');
		if ($is_admin){
			$this->initLayout('Admin');
			$this->layout->menuLeft->addItem(['Guests','icon'=>'birthday cake']);
		}
		else {
			$this->initLayout('Centered');
		}
		$this->dbConnect('mysql://root:password@localhost/party'); 
	}
	
}
class Guest extends \atk4\data\Model {
	public $table ='guest';
	function init(){
		parent::init();
		$this->addFields(['name','surname','phone','email']);
		$this->addField('age');
		$this->addField('units_of_drink');
		
	}
}