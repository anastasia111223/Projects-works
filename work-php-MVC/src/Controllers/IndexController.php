<?php
namespace Cakes\Controllers;

// /
use Cakes\Db\CakeDb;
use Cakes\Controller;


class IndexController extends Controller
{
    private $cakeDB;

    public function __construct(){
        $this->cakeDB = new CakeDb();
    }

    public function index(){
        $data = [];
        $data['cakes'] = $this->cakeDB->getCakes();
        echo $this->getTemplate('main.php', $data);
    }
}