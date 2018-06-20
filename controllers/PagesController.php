<?php


class PagesController
{

    public function home()
    {
        $users = App::get('database')->selectAll('users');

        require view('index');
    }

    public function about()
    {
        require view('about');
    }

    public function contact()
    {
        require view('contact');
    }

    public function history()
    {
        require view('history');
    }

    public function addname()
    {

        App::get('database')->insert('users',[
            'name' => $_POST['name'],
        ]);

        header('Location: /');

    }


}