<?php

function homeHandler() {

    // From db
    $listPeoples = [
        [
            'name' => 'Витя',
            'last_name' => 'Нико нико ниииииииииии',
            'age' => '20',
            'sex' => 'men'
        ],  [
            'name' => 'Саша',
            'last_name' => 'Нико нико ниииииииииии',
            'age' => '18',
            'sex' => 'women'
        ]
    ];





    return require_once('pages/home.php');

}