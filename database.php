<?php

/**
 * Description of database
 *
 * @author jenal<warungkopidigital.blogspot.com>
 */
class database {

    private $host;
    private $user;
    private $pwd;
    private $dbname;
    private $db;

    public function __construct() {
        $ini_array = parse_ini_file("config/config.ini", true);
        $this->host = $ini_array['db']['host'];
        $this->user = $ini_array['db']['user'];
        $this->pwd = $ini_array['db']['pwd'];
        $this->dbname = $ini_array['db']['dbname'];
        $this->db = new mysqli($this->host, $this->user, $this->pwd, $this->dbname);
    }

    public function select($param, $table, $cond = "") {
        $query = "";
        if (is_array($param) == FALSE) {
            $query = $param;
        } else {
            $query = "SELECT ";
            foreach ($param as $temp) {

                $query.=$query . " " . $temp . ",";
            }
            $query.=substr($query, 0, -1) . " FROM " . $table;
            if ($cond !== "") {
                $query.=$query . " WHERE " . $cond;
            }
        }
        return $this->execsql($query);
    }

    public function add($param, $table) {
        $query = "";
        if (is_array($param) == FALSE) {
            $query = $this->db->real_escape_string($param);
        } else {
            $query = "INSERT INTO  " . $this->db->real_escape_string($table);
            $valdata = "(";
            $fielddata = "(";
            foreach ($param as $key => $val) {
                $valdata.=" " . $this->db->real_escape_string($key) . ",";
                $fielddata.=" " . $this->db->real_escape_string($fielddata) . ",";
            }
            $valdata = substr($valdata, 0, -1);
            $fielddata = substr($fielddata, 0, -1);
            $valdata.=$valdata . " ) ";
            $fielddata.=$fielddata . " ) ";
            $query = $query . " " . $fielddata . " " . $valdata;
        }
        return $this->db->query($query);
    }

    public function update($param, $table, $cond) {
        $query = "";
        if (is_array($param) == FALSE) {
            $query = $this->db->real_escape_string($param);
        } else {
            $query = "UPDATE  " . $this->db->real_escape_string($table) . " ";
            foreach ($param as $key => $val) {

                $query.=$query . " SET " . $this->db->real_escape_string($key) . " = " . $this->db->real_escape_string($val) . ",";
            }
            $query = substr($query, 0, -1);
            if ($cond !== "") {
                $query.=$query . " WHERE " . $this->db->real_escape_string($cond);
            }
        }
        return $this->db->query($query);
    }

    public function delete($table, $cond = "") {
        $query = "DELETE FROM" . $this->db->real_escape_string($table) . " WHERE " . $this->db->real_escape_string($cond);
        return $this->db->query($query);
    }

}

?>
