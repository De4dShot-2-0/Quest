<?php

namespace App\Controllers;

use App\Core\App;
use App\Core\Validator;

class ConferenceController
{

    public function home()
    {
        $conferences = App::get('database')->selectAll('conferences');

        return view('index', ['conferences' => $conferences]);
    }


    public function create()
    {
        return view('create');
    }


    public function details()
    {
        $id = (int)$_GET['show'];
        $conference = App::get('database')->getElement($id, 'conferences');
        return view('details', ['conference' => $conference[0]]);
    }


    public function edit()
    {
        $id = (int)$_GET['id'];
        $conference = App::get('database')->getElement($id, 'conferences');
        return view('edit', ['conference' => $conference[0]]);
    }


    public function store()
    {
        $validate = Validator::clean($_POST);

        if ($validate) {
            if (Validator::check_length($_POST['title'], 2, 255)) {
                App::get('database')->insert('conferences', [
                    'title' => $_POST['title'],
                    'date' => $_POST['date'],
                    'country' => $_POST['country'],
                    'address_x' => $_POST['address_x'],
                    'address_y' => $_POST['address_y'],
                ]);

                return redirect('/');
            } else {
                return redirect('create');
            }
        }
    }


    public function update()
    {
        $id = (int)$_POST['id'];


        $validate = Validator::clean($_POST);

        if ($validate) {
            if (Validator::check_length($_POST['title'], 2, 255)) {
                $data = [
                    'title' => $_POST['title'],
                    'date' => $_POST['date'],
                    'country' => $_POST['country'],
                    'address_x' => $_POST['address_x'],
                    'address_y' => $_POST['address_y'],
                ];

                App::get('database')->update($id, 'conferences', $data);
                return redirect('/');
            } else {
                return redirect("edit?id={$id}");
            } 
        }
    }


    public function delete()
    {
        $id = (int)$_REQUEST['id'];
        App::get('database')->delete($id, 'conferences');

        return redirect('/');
    }
}
