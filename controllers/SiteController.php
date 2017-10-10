<?php 

/**
* Main Controller of the site
*/
class SiteController {

	public function actionIndex($page = 1) {
        
        $hotList = array();
        $hotList = Hot::getHotList($page);
        $pageTitle = 'Основная';
        $sectionTitle = 'Деловые советы';

        $total = Hot::getHotCount();

        $pagination = new Pagination(array(
        	'itemsCount' => $total,
        	'itemsPerPage' => Hot::SHOW_BY_DEFAULT,
        	'currentPage' => $page,
        ));

		require_once(ROOT.'/views/site/index.php');
		return true;
	}

    public function actionContact() {

        $pageTitle = 'Связь с дирекцией';
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = $_POST['email'];
            $userText = $_POST['message'];
    
            $errors = false;
                        
            // Валидация полей
            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Голимый email';
            }
            
            if ($errors == false) {
                $adminEmail = 'jimm30g@gmail.com';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема письма';    
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }

        }
        
        require_once(ROOT . '/views/site/contact.php');
        
        return true;
    }
}