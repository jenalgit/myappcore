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
        return htmlentities($temp);
    }

    public function entities($string) {
        return htmlentities($string);
    }

    public function escapequote($string) {
        return addslashes($string);
    }

}

?>
