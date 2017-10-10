<?php
class Hot {

    const SHOW_BY_DEFAULT = 5;
    
    /**
     * Returns an array of hot items
     */
    public static function getHotList($page = 1) {
        
        $page = intval($page);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();
        $hotList = array();
        $result = $db->query('SELECT id, title, date, content, author_name '
                    . 'FROM hot '
                    . 'ORDER BY date DESC '
                    . 'LIMIT '.self::SHOW_BY_DEFAULT
                    . ' OFFSET '.$offset);
        
        $i = 0;
        while ($row = $result->fetch()) {
            $hotList[$i]['id'] = $row['id'];
            $hotList[$i]['title'] = $row['title'];
            $hotList[$i]['date'] = $row['date'];
            $hotList[$i]['content'] = $row['content'];
            $hotList[$i]['author_name'] = $row['author_name'];
            $i++;
        }
        
        return $hotList;
    }

    public static function getHotCount() {

        $db = Db::getConnection();
        $result = $db->query('SELECT count(id) AS count FROM hot');
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $row = $result->fetch();

        return $row['count'];
    }
}
