<?php
require 'vendor/autoload.php';
class myApp  extends \atk4\ui\app{
	function __construct($is_admin = false){
		
		parent::__construct('Party App.');
		if ($is_admin){
			$this->initLayout('Admin');
            $this->layout->menuLeft->addItem(['Dashboard','icon'=>'user'],['dashboard']);
			$this->layout->menuLeft->addItem(['Guests','icon'=>'birthday cake'],['admin']);
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
		$this->addFields([
		    ['name','required'=>true],
            'surname',
            ['phone','required'=>true],
            ['email','required'=>true]]);
		$this->addField('age',['required'=>true]);
		$this->addField('gender',['enum'=>['male','female']]);
		$this->addField('units_of_drink',['ui'=>['hint'=>'Bring...'],'default'=> 0]);
		
	}
}
class Dashboard extends \atk4\ui\View {
    public $defaultTemplate = __DIR__.'/dashboard.html';
}