<?php 

/**
* Button class used in pagination etc.
*/
class Button
{
	public $page;
	public $text;
	public $isActive;
	
	function __construct($page, $isActive = true, $text = null)
	{
		$this->page = $page;
		$this->isActive = $isActive;
		$this->text = is_null($text) ? $page : $text;
	}
}