<?php
class Model
{
    private $urlbase;
    private $pattern;
    public function __construct()
    {
        $this->db      = new Databases();
        $this->urlbase = "../public/";
        $this->pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    }

    public function getCodigo($a)
    {
        $key = '';
        $max = strlen($this->pattern) - 1;
        for ($i = 0; $i < $a; $i++) {
            $key .= $this->pattern{mt_rand(0, $max)};
        }
        return strtoupper($key);
    }

    public function encodeId($id)
    {
        return hash('ripemd160', $id);
    }

}
