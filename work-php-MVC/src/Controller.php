<?php


namespace Cakes;


abstract class Controller
{
    protected function getTemplate($file, array $data = []){
        extract($data);
        // эти инструкции происходят  памяти
        ob_start(); //  буферизированный вывод, т.е. все де ствия происходят в неком буфере
        require_once '../templates/' . $file;
        $page = ob_get_contents();// сгенерированныя html строчка сохраняем в переменную $page
        ob_clean();
        // конец инструкций в памяти
        return $page;
    }
}