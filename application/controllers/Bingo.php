<?php

/**
 * Our homepage. Show a table of all the author pictures. Clicking on one should show their quote.
 * Our quotes model has been autoloaded, because we use it everywhere.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index(){
        $this->data['pagebody'] = 'justone'; // load justone view
        $this->data = array_merge($this->data, $this->quotes->get(5));
        $this->render();
    }
    
    ///
    /// comp####/* routing will run this function
    ///
    function wisdom(){
        $this->data['pagebody'] = 'justone'; // load justone view
        $this->data = array_merge($this->data, $this->quotes->last());
        $this->render();
    }

}