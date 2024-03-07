<?php

class Series
{
    public $title;

    public $type;

    public $lang;

    public $season;

    public $eps;
    public $vote;

    public function __construct($title,$type, $lang, $season, $eps, $vote){
        $this->title = $title;
        
        $this->type = $type;

        $this->lang = $lang;

        $this->season = $season;

        $this->eps = $eps;

        $this->vote = $vote;

    }
    
}
