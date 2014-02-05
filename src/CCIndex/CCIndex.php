<?php
/**
 * Standard controller layout.
 * 
 * @package ApolloCore
 */
class CCIndex implements IController {

  /**
    * Implementing interface IController. All controllers must have an index action.
   */
  public function Index() {  
    global $ap;
    $ap->data['title'] = "The Index Controller";
    $ap->data['main'] = "<h1>The Index Controller</h1>";
  }

}  