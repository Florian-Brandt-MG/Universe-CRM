<?php

namespace UniverseCRM\Vendor;

class Autoload {

    var $allowedNamespaces = array("UniverseCRM\Vendor" , "UniverseCRM\Crypt");

    /**
     * Autoload constructor.
     */
    function __construct()
    {
        spl_autoload_register(array($this , 'autoload'));
    }


    function autoload($fqcn) {
        $fqcn_array = explode("\\" , $fqcn);
        $namespace = "";
        for($i = 0; $i < (count($fqcn_array) - 1); $i++) {
            $namespace .= $fqcn_array[$i] . "\\";
        }
        $namespace = substr($namespace, 0, -1);
        if(in_array($namespace , $this->getAllowedNamespaces())) {
            $namespace = __DIR__ .  DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR .  str_replace("\\" , DIRECTORY_SEPARATOR ,$namespace) . DIRECTORY_SEPARATOR . $fqcn_array[count($fqcn_array) - 1] . ".class.php";
            require_once $namespace;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return array
     */
    public function getAllowedNamespaces()
    {
        return $this->allowedNamespaces;
    }

    /**
     * @param array $allowedNamespaces
     */
    public function setAllowedNamespaces($allowedNamespaces)
    {
        $this->allowedNamespaces = $allowedNamespaces;
    }
}