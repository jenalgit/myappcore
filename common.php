<?php

/**
 * Description of input
 *
 * @author jenal<warungkopidigital.blogspot.com>
 */
class common {

    //put your code here
    public function input($var, $type = "GET") {
        $temp = "";
        switch ($type) {
            case "POST":
                $temp = $_POST[$var];
                break;
            case "GET":
                $temp = $_POST[$var];
                break;
            default:
                $temp = $_REQUEST[$var];
                break;
        }
        return $temp;
    }

    public function entities($string) {
        return htmlentities($string);
    }

    public function escapequote($string) {
        return addslashes($string);
    }

    public function encrypt($str) {
        return sha1(md5($str));
    }

    public function gensalt() {
        $characters = 'abcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*_;:<>?';
        $string = '';
        for ($i = 0; $i < 6; $i++) {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $string;
    }

}

?>
