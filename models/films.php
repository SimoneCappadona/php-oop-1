<?php
class Films

{
    public $title;
    public $type;
    public $lang;
    public $vote;

    public function __construct($title,$type, $lang, $vote)
    {
        
        $this->title = $title;
        
        $this->type = $type;

        $this->lang = $lang;

        $this->vote = $vote;
    }

}
