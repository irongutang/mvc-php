<?php 
/**
* Blog controller class
*/
class BlogController {
	
	public function actionIndex($param, $page = 1) {
		
		if ($param == 'good') {
			$pageTitle = 'Нехуйовые дела';
		}
		else {
			$pageTitle = 'Шо де хуйово';
			$param = 'bad';
		}	

		$posts = array();
		$posts = Blog::getPosts($param, $page);

		$total = Blog::getPostCount();

		$pagination = new Pagination(array(
    	'itemsCount' => $total,
    	'itemsPerPage' => Blog::SHOW_BY_DEFAULT,
    	'currentPage' => $page,
    ));

		require_once(ROOT.'/views/blog/index.php');
		return true;
	}
}