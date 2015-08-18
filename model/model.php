<?php
class model {
    private $db;
    public function __construct() {
        $this->db = new SQLite3('model/stats.db', SQLITE3_OPEN_READONLY) or die("Unable to open database");
    }
    public function getAll() {
        $query = "SELECT id, artist, title FROM listening order by id desc LIMIT 50;";
        $return = [];
        $i=0;
        $resultset = $this->db->query($query) or die('Unable to execute query');
        while($row = $resultset->fetchArray(SQLITE3_NUM)) {
            $return[$i++] = $row;
        }
        return $return;
    }
    public function get($id) {
        $stmt = $this->db->prepare('SELECT * FROM listening where id=:id  order by id desc;') or die('Unable to execute query');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $result = $stmt->execute();
        return $result->fetchArray(SQLITE3_NUM);
    }
    public function getAllColumnNames() {
        return ['id', 'artist', 'title'];
    }
    public function getColumnNames() {
        $return = [];
        $result = $this->db->query("SELECT * FROM listening");
        $count = $result->numColumns();
        for($i=0;$i<$count;$i++) {
            $return[$i] = $result->columnName($i);
        }
        return $return;
    }
}
?>
