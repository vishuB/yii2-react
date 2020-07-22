<?php


namespace vishuB\react\widgets;

use yii\web\View;
use vishuB\react\ReactAsset;
use vishuB\react\ReactUiAsset;


/**
 * Class ReactRenderer - yii2 widget to server-side react rendering
 * and implementing it on client side.
 * This widget require V8JS PHP extension: http://php.net/v8js
 * @package vishuB\react\widgets
 */
class ReactRawJsRenderer extends ReactRenderer
{


    public
        /**
         * raw js
         * @var string
         */
        $js;

    /**
     * Apply js in view
     */
    public function applyJs()
    {
        ReactAsset::register($this->view);
	$this->getView()->registerJs($this->js,View::POS_END);
        ReactUiAsset::register($this->view);
    }



    /**
     * Get source component js for ReactJs constructor
     * @return string
     */
    protected function getSourceJs()
    {
        return $this->js;
    }


}
