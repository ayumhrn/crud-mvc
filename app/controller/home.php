<?php

//Controller

class Home extends Controller {

    public function __construct() {
        $this->modelofBook = $this->model('book');
    }

    public function index() {
        $data = $this->modelofBook->allBooks();
        $this->view('pages/viewbook', $data);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'title'  => trim($_POST['title']),
                'author' => trim($_POST['author']),
                'pages'  => trim($_POST['pages']),
                'genre'  => trim($_POST['genre'])
            ];

            if($this->modelofBook->createBook($data)) {
                header('Location: '. URLROOT . 'home/index');
            }

            else {
                die('Failed to create Book!');
            }
        }

        else {
            $data = [
                'title' => '',
                'author' => '',
                'pages' => '',
                'genre' => ''
            ];
        }

        $this->view('pages/createbook', $data);
    }

    public function update($id="") {

        $this->modelofBook->id = $id;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST  = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id'    => $this->modelofBook->id,
                'title'  => trim($_POST['title']),
                'pages'  => trim($_POST['pages']),
                'author' => trim($_POST['author']),
                'genre'  => trim($_POST['genre'])
            ];

            if($this->modelofBook->updateBook($data)) {
                header('Location: '. URLROOT . 'home/index');
            }

            else {
                die('Failed to update Book!');
            }
        }

        else {
            
            $query = $this->modelofBook->BookbyId($this->modelofBook->id);
            $result = mysqli_fetch_array($query);


            $data = [
                'id' => $id,
                'title' => $result['title'],
                'pages' => $result['pages'],
                'author' => $result['author'],
                'genre' => $result['genre']
            ];
        }

        $this->view('pages/editbook', $data);
    }

    public function delete($id="") {

        $this->modelofBook->id = $id;

        $data = [
            'id' => $this->modelofBook->id
        ];

        if ($this->modelofBook->deleteBook($data)) {
            header('Location: ' . URLROOT . 'home/index');
        } 
        else {
            die('Failed to Delete Book');
        }
    }
}