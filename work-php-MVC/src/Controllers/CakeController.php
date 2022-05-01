<?php


namespace Cakes\Controllers;


use Cakes\Db\CakeDb;
use Cakes\Controller;
// use Cakes\Controllers\ErrorController;

class CakeController extends Controller
{
    private $cakeDB;

    public function __construct(){
        $this->cakeDB = new CakeDb();
    }

    public function addNewCake(){
        $post = $_POST;
        $files = $_FILES;
        $tmp_name = $files['image']['tmp_name'];
        $name = $files['image']['name'];
        $cake = $this->cakeDB->getCakeByName($post['name_c']);
        if ($cake) {
                $message = $post['name_c'] . ', уже есть в базе';
                header('Location: /addcake?message=' . $message);
                return;
        }
        if (!$this->cakeDB->addNewCake($post['name_c'], $name, $post['price'])) {
                echo 'Попробуйте позже';
                return;
        }
            if (move_uploaded_file($tmp_name,"/image/$name")) {
                var_dump('Файл успешно загружен');
                $message = $post['name_c'] . ' успешно зарегистрирован';
                header('Location: /addcake?message=' . $message);
            } else {
                $message = 'Файл не загружен';
                header('Location: /addcake?message=' . $message);
            }
        
    }

    public function showAddForm(){
        $data = ['message' => 'Форма для добавления нового торта'];
        echo $this->getTemplate('addcake.php', $data);
    }
    public function showSearch(){
        $data = ['message' => 'Для поиска тортов, укажите диапазон цен'];
        echo $this->getTemplate('search.php', $data);
    }


    public function searchCake(){
        $post = $_POST;
        $data= $this->cakeDB->getCakesByPrice($post['price1'], $post['price2']);
        if ($data) {
            echo json_encode($data);
        } else {
            echo json_encode(0);
        }
        
    }
}