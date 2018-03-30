<?php

namespace UniverseCRM\Crypt;


class Universe {

    var $ini = "";

    var $options = [       'cost' => 11      ];



    function __construct()
    {
        $this->ini = parse_ini_file(__DIR__ . "/../../UniverseCRM.ini");
        $this->options['cost'] = $this->ini["Crypt"]["Cost"];
    }

    public function encrypt($password) {
        return password_hash($password, PASSWORD_BCRYPT, $this->options);
    }

    public function verify($password , $hash) {
        return password_verify($password,$hash);
    }


}