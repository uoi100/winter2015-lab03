<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Hook {
   function display(){
       $output = array();
       $ci = & get_instance();
       $current_output = $ci->output->get_output();
       
       if(preg_match_all('<p class="lead">', $current_output, $matches))
       {
           $output = "implode("FML", $matches[0]);
       }

       echo $output;
   }
}