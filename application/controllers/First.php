<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index(){
        $this->data['pagebody'] = 'justone'; // load justone view
        $this->data = array_merge($this->data, $this->quotes->first());
        $this->render();
    }
    
    function zzz(){
        $this->data['pagebody'] = 'justone'; // load justone view
        $this->data = array_merge($this->data, $this->quotes->first());
        $this->render();
    }
    
    function gimme($index){
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $this->quotes->get($index));       
        //$this->data = array_merge($this->data, $this->quotes->get($id));
        $this->render();
    }

}