<?php
class ViewHome{
    protected $data = [];
    protected $template;
    protected $engine;

    function __construct($template = "pages/HomePage",$data = []){
        $this->engine = new LoadedEngine();
        $this->template = $template;
        $this->data = $data;
    }

    function render (){
        return $this->engine->render($this->template,$this->data);
    }

    function setData($data){
        $this->data = $data;
    }
}