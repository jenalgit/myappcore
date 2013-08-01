<?php

/**
 * Description of validation
 *
 * @author jenal<warungkopidigital.blogspot.com>
 */
class validation {

    private $chk;
    private $message;

    

    public function check($value, $valkind) {
        if (is_array($valkind) == FALSE) {
            $valkind = explode("|", $valkind);
        }
        foreach ($valkind as $temp) {
            $nmf = array($this, trim($temp));
            echo $nmf($value);
        }
    }

    public function checkNumeric($chkvalue) {
        // /^[1-9][0-9]{0,15}$/
        $regex = '/^[1-9][0-9]*$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input only number';
        }
        return $message;
    }

    public function checkAlphabetOnly($chkvalue) {
        $regex = '/^[A-z]+$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input only alphabet';
        }
        return $message;
    }

    public function checkAlphabetwithSpace($chkvalue) {
        $regex = '/^[A-z]+[A-z \s]+$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input only alphabet and space';
        }
        return $message;
    }

    public function checkAlphabetwithSpaceandQuote($chkvalue) {
        $regex = '/^[A-z]+[A-z \'\"]+$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input only alpabhet , space, and quote';
        }
        return $message;
    }

    public function checkAlpaNumOnly($chkvalue) {
        $regex = '/^[A-z0-9]+$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input only alphanumerik';
        }
        return $message;
    }

    public function checkAlpaNumwithSpace($chkvalue) {
        $regex = '/^^[A-z 0-9]+$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input only valid alphanumerik and space';
        }
        return $message;
    }

    public function checkSentences($chkvalue) {
        $regex = '/^[A-z 0-9.,\'@#*$%/&\(\)\"?]+$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input only valid sentence';
        }
        return $message;
    }

    public function checkEmail($chkvalue) {

        $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = $email . " is an invalid email. Please try again.";
        }
        return $message;
    }

    public function checkUrl($chkvalue) {
        $regex = '/(ftp|http|https):\/\/(\w+:{0,1}\w*@)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%@!\-\/]))?/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input valid url';
        }
        return $message;
    }

    public function checkIP($chkvalue) {
        $regex = '/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/';
        if (preg_match($regex, $chkvalue)) {
            $this->chk = TRUE;
        } else {
            $this->chk = FALSE;
        }
        if ($this->chk == TRUE) {
            $message = '';
        } else {
            $message = 'Input only valid IP';
        }
        return $message;
    }

}

?>
