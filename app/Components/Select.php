<?php

namespace Components;
use core\Component;


class Select extends Component{
    private $placeholder;
    private $value;
    private $options;

    public function __construct($data=[]){
        parent::__construct(null, $data);
    }

    public function addAttr($name, $value){
        $this-> $name = $value;
        return $this;
    }

    public function setPlaceholder($placeholder){
        $this->placeholder = $placeholder;
        return $this;
        
    }
    public function setValue($value){
        $this->value = $value;
        return $this;
    }
    public function generateOptions(){
        $html="";
        if($this->placeholder){
            $select = (empty($this->value))?'select' : '';
            $html.= "<option disabled$select value''>{$this->Placeholder}</option>";

        }
        foreach($this->options as $value => $text) {
            $select = ($this->value == $value)?'selected' : '';
            $html.= "<option value='$value' $select>{$text}</option>";
        }
        return $html;
    }
    public function addOption($value,$text){
        $this->options[$value] = $text;
        return $this;
    }
    public function show(array $data = []){
        $data = array_merge($this->data, $data);
        $attrs = '';
        foreach($data as $key => $value) {
            $attrs .= "$key='$value'";
        }
        echo "<select $attrs>";
        echo $this->generateOptions();
        echo "</select>";
    }

}

