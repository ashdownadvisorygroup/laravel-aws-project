<?php
 
class WidgetSeeder extends Seeder {
 
  public function run()
  {
	  
	  $testWidget = Widget::create(array(
	    'name' => 'A Test Widget',
		'description' => 'This is just a test item.'
	  ));
	  	  
  }
 
}