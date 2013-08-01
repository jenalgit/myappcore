<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of input
 *
 * @author jenal<warungkopidigital.blogspot.com>
 */
class common {

    //put your code here
    public function input($var, $type = "GET", $for = "string") {
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

    public function changetohtmlentities($string) {
        return htmlentities($string);
    }

    public function escapequote($string) {
        return addslashes($string);
    }

    public function selectquerydb($param,$table, $cond = "") {
        $query = "";
        if (is_array($param) == FALSE) {
            $query = mysql_real_escape_string($param);
        } else {
            $query="SELECT ";
            foreach ($param as $temp) {

                $query.=$query." ".$temp.", ";
            }
            $query.=substr($query,0,-1)." FROM ".$table;
        }
        if($cond!=="")
        {
            $query.=$query." WHERE ".$cond;
        }   
    }

}

?>
