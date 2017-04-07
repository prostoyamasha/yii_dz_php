<?php
namespace app\components;
 
use yii\base\Component;
 
class Content extends Component {
    
    private $content = 'Hello World!';

    public function setContent($content)
    {
        $this->content = $content;
    }
    public function getContent()
    {
        return $this->content;
	}

}

