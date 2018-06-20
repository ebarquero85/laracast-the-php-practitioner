<?php

namespace App\Controllers;


class PagesController
{

    public function home()
    {

        view('index');
    }

    public function about()
    {
        $us = 'Barqueros Company';

        view('about', [
            'us' => $us
        ]);
    }

    public function contact()
    {
        view('contact');
    }

    public function history()
    {
        view('history');
    }


}