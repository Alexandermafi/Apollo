<?php
/**
 * Standard controller layout.
 * 
 * @package LydiaCore
 */
class CCIndex implements IController {

	/**
 	 * Implementing interface IController. All controllers must have an index action.
	 */
	public function Index() {	
    $this->Menu();
	}

	/**
 	 * Create a method that shows the menu, same for all methods
	 */
	private function Menu() {	
		$ap = CApollo::Instance();
		$menu = array('index', 'index/index', 'developer', 'developer/index', 'developer/links');
		
		$html = null;
		foreach($menu as $val) {
		  $html .= "<li><a href='" . $ap->request->CreateUrl($val) . "'>$val</a>";  
		}
		
		$ap->data['title'] = "The Index Controller";
		$ap->data['main'] = <<<EOD
<h1>The Index Controller</h1>
<p>This is what you can do for now:</p>
<ul>
$html
</ul>
EOD;
  }
  
} 