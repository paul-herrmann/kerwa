<?php

include_once 'classes/Db.class.php';
include_once 'inc/config.inc.php';

class Posts {

    private $db;

    public function __construct() {
        $this->db = new Db(DBASE);
        $_SESSION['timestamp'] = microtime(true);
    }

    public function getPosts() {
        $query = 'SELECT * FROM ' . POST_TBL . ' ORDER BY timestamp DESC';
        return $this->db->getData($query);
    }

    public function getReplies() {
        $query = 'SELECT * FROM ' . REPLY_TBL . ' ORDER BY timestamp ASC';
        return $this->db->getData($query);
    }

    public function addPost() {
        if (isset($_POST['txt']) && !isset($_GET['reply_to'])) {
            $qry = "INSERT INTO " . POST_TBL . " (userID, timestamp, txt) values (:userID, :timestamp, :txt)";

            $arr = array(
                ':userID' => $_SESSION['user']['id'],
                ':timestamp' => $_SESSION['timestamp'],
                ':txt' => $_POST['txt']);

            $this->db->exec($qry, $arr);
            return true;
        } elseif (isset($_POST['txt']) && isset($_GET['reply_to'])) {
            $qry = "INSERT INTO " . REPLY_TBL . " (userID, timestamp, txt, reply_to) values (:userID, :timestamp, :txt, :reply_to)";

            $arr = array(
                ':userID' => $_SESSION['user']['id'],
                ':timestamp' => $_SESSION['timestamp'],
                ':txt' => $_POST['txt'],
                ':reply_to' => $_GET['reply_to']);

            $this->db->exec($qry, $arr);
            return true;
        }
    }

    public function getReply_To() {
        if (isset($_GET['reply_to'])) {
            echo '?reply_to=' . $_GET['reply_to'];
        }
    }

}

?>
