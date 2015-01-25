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
    
    ///
    /// sleep routing will run this function
    ///
    function zzz(){
        $this->data['pagebody'] = 'justone'; // load justone view
        $this->data = array_merge($this->data, $this->quotes->first());
        $this->render();
    }
    
    ///
    /// show/# routing will run this function
    /// $1 variable in routes.php is passed to the $index parameter
    ///
    function gimme($index){
        $this->data['pagebody'] = 'justone';
        $this->data = array_merge($this->data, $this->quotes->get($index));       
        //$this->data = array_merge($this->data, $this->quotes->get($id));
        $this->render();
    }

}