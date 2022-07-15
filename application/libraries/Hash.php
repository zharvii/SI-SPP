<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once('phpass-0.3/PasswordHash.php');

define('STRENGTH', 8);
define('PORTABLE', false);

class Hash
{

    private $CI;

    function __construct()
    {
        $this->CI = get_instance();
    }

    public function ecryptPassword($password)
    {
        $hasher = new PasswordHash(STRENGTH, PORTABLE);
        return $hasher->HashPassword($password);
    }

    public function checkPassword($passwordDecrypt, $passwordEncript)
    {
        $hasher = new PasswordHash(STRENGTH, PORTABLE);
        if ($hasher->CheckPassword($passwordDecrypt, trim($passwordEncript))) {
            return true;
        } else {

            return false;
        }
    }
}
