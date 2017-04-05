<?php 

namespace app\components;
 
use yii\base\Component;
 
class MyClass extends Component{
    
    public $content;
    
    public function init(){
        
        $this->content = 'Hello World!';
    }

    public function display($content){
	      return $content;
	}
  
     
}
?>

