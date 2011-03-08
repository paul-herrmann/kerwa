<?php

include_once 'classes/Db.class.php';
include_once 'inc/config.inc.php';

class Users {

    private $db;
    private $cfg = array(
        'index_page' => 'index.php'
    );

    public function __construct() {
        $this->db = new Db(DBASE);
    }

    /**
     * ustawia cookie i sesje, jako parametry pobiera dane usera do dalszego wykorzystania
     * @param <array> $arr tablica z danymi usera
     */
    private function setCookie($arr) {
        foreach ($arr as $k => $v) {
            $_SESSION['user'][$k] = $v;
        }
        $_SESSION['logged'] = $this->Encrypt(session_id(), 'akcja animacja');
        $_SESSION['user']['last_visit'] = time();
        setcookie(sha1("user"), $arr['username'], time() + 24 * 3 * 3600); /* 24 godziny razy 3 dni */
        setcookie(sha1("pass"), $arr['password'], time() + 24 * 3 * 3600);
    }

    /**
     * takie biedne kodowanie ;)
     * @param <string> $str string do zakodowaniea
     * @param <string> $salt sól
     * @return <string> zakodowany string
     */
    private function Encrypt($str, $salt) {
        return (md5(sha1($salt . $str)));
    }

    /**
     * usuwa cookies i niszczy sesje
     */
    public function Logout() {
        setcookie(sha1("user"), "", time() - 3600);
        setcookie(sha1("pass"), "", time() - 3600);
        session_unset();
        session_destroy();
        $_SESSION = array();
        header('Location: ' . SITE_URL . 'login.php');
    }

    /**
     * sprawdzanie czy użytkownik zalogowany, jeśli nie to powrót na stronę z loginem
     */
    public function checkIfLogged() {

        if (isset($_SESSION['logged']) && $_SESSION['logged'] == $this->Encrypt(session_id(), 'akcja animacja')) {
            if (time() - 3600 > $_SESSION['user']['last_visit']) {
                $arr = array(
                    ':time' => time(),
                    ':username' => $_SESSION['user']['username'],
                    ':password' => $_SESSION['user']['password']
                );
                $this->db->exec("UPDATE " . USER_TBL . " SET last_visit=:time WHERE username=:username AND password=:password", $arr);
                $_SESSION['user']['last_visit'] = time();
            }
        } else {
            header('Location: ' . SITE_URL . 'login.php');
        }
    }

    /**
     * sprawdza czy zalogowanie jeśli tak przekierowanie dalej
     * @param <string> $to nazwa pliku do którego prowadzi przekierowanie
     */
    public function redir($to) {
        if (isset($_SESSION['logged']) && $_SESSION['logged'] == $this->Encrypt(session_id(), 'akcja animacja')) {
            header('Location: ' . SITE_URL . $to);
        }
    }

    /**
     *  wysyła zapytanie do bazy o użytkownika z pliku cookie
     * @return <bool>
     */
    public function checkFromCookie() {
        if (isset($_COOKIE[sha1("user")]) && isset($_COOKIE[sha1("pass")])) {
            $result = $this->db->query("SELECT * FROM " . USER_TBL . " WHERE username = '" . $_COOKIE[sha1('user')] . "' AND password = '" . $_COOKIE[sha1('pass')] . "'")->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $this->setCookie($result);
                return true;
            }
        }
    }

    /**
     *  wysyła zapytanie do bazy z wartościami przesłanymi przez form
     * @return <bool>
     */
    public function checkFromPost() {
        if (isset($_POST['user']) && isset($_POST['pass'])) {
            $result = $this->db->query("SELECT * FROM " . USER_TBL . " WHERE username = '" . $_POST['user'] . "' AND password = '" . md5($_POST['pass']) . "'")->fetch(PDO::FETCH_ASSOC);
            if ($result) {
                $this->setCookie($result);
                return true;
            } else {
                return 'err';
            }
        }
    }

    public function logError() {
        if ($this->checkFromPost()) {
            echo "Nie ma takiego użytkownika!";
        }
    }

    /**
     * funkcja dla strony z loginem, jeśli user zalogowany to przekierowuje
     *  od razu dalej jeśli nie sprawdza cookie jeśli nie ma cookie
     *  to czeka na dane z formularza
     */
    public function checkLogin() {
        if ($this->checkFromCookie() || $this->checkFromPost()) {
            $this->redir($this->cfg['index_page']);
        }
    }

    public function getUsers() {
        return $this->db->getData('SELECT * FROM users');
    }

//    edituser
//    removeuser
//    printuserlist
}

?>
