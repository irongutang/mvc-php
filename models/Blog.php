<?php 
/**
* Blog model class
*/
class Blog {
	
	const SHOW_BY_DEFAULT = 8;
    
    /**
     * Returns an array of blog posts
     * @return array $post
     */
    public static function getPosts($param, $page = 1) {
        
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();
        
        $sql = 'SELECT * FROM blog WHERE good = :good ORDER BY created_at'
        			 .' DESC LIMIT '.self::SHOW_BY_DEFAULT.' OFFSET :offset';
        $result = $db->prepare($sql);
        $result->bindParam(':good', $param, PDO::PARAM_STR);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        
        return $result->fetch();
    }

    public static function getPostCount() {

        $db = Db::getConnection();
        $result = $db->query('SELECT count(id) AS count FROM blog');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
	}
}