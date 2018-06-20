<?php


class PagesController
{

    public function home()
    {

        require view('index');
    }

    public function about()
    {
        $us = 'Barqueros Company';

        require view('about', [
            'us' => $us
        ]);
    }

    public function contact()
    {
        require view('contact');
    }

    public function history()
    {
        require view('history');
    }


}