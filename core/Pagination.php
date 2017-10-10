<?php 
require_once 'Button.php';
/**
* Pagination class
*/
class Pagination
{
	public $buttons = array();
	
	function __construct($options = array('itemsCount' => 257, 'itemsPerPage' => 5, 'currentPage' => 1))
	{
		extract($options);

		$pagesCount = ceil($itemsCount / $itemsPerPage);

		$this->buttons[] = new Button($currentPage - 1, $currentPage > 1, 'Назад');

		for ($i=1; $i <= $pagesCount; $i++) { 
			$active = $currentPage != $i;
			$this->buttons[] = new Button($i, $active); 
		}

		$this->buttons[] = new Button($currentPage + 1, $currentPage < $pagesCount, 'Вперед');

		if (!$currentPage) {
			return;
		}

		if ($pagesCount == 1) {
			return;
		}

		if ($currentPage > $pagesCount) {
			$currentPage = $pagesCount;
		}
	}
}