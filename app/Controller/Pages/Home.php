<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page{

    public static function getHome(){
        $content = View::render('pages/home', [
            'name'=>'ETOP',
            'description' => 'Site da ETOP - educação'
        ]);

        return parent::getPage('ETOP - qualificação', $content);
    }

}