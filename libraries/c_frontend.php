<?php
class C_Frontend extends MY_Controller{
    function __construct(){
        parent::__construct();

        var_dump('test call this from frontend controller');
    }
}
