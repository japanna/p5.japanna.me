<?php
class topics_controller extends base_controller {

    public function __construct() {
        parent::__construct();
        
    } 

    public function lego() {

        # Setup view
            $this->template->content = View::instance('v_topics_lego');
            $this->template->title   = "MiniMooc | LEGO";

        # Render template
            echo $this->template;

    }

    public function playdoh() {

        # Setup view
            $this->template->content = View::instance('v_topics_playdoh');
            $this->template->title   = "MiniMooc | PlayDoh";

        # Render template
            echo $this->template;

    }

    public function goose() {

        # Setup view
            $this->template->content = View::instance('v_topics_goose');
            $this->template->title   = "MiniMooc | Music";

        # Render template
            echo $this->template;

    }

    public function cook() {

        # Setup view
            $this->template->content = View::instance('v_topics_cook');
            $this->template->title   = "MiniMooc | Cooking";

        # Render template
            echo $this->template;

    }
}