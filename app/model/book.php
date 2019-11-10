<?php

//Book Model

class Book {

    private $conn;

    public function __construct() {
        $this->conn = connection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }

    public function allBooks() {
        $sql = "SELECT * FROM book ORDER BY id DESC";
        $result = mysqli_query($this->conn, $sql);

        return $result;
    }

    public function BookbyId($id) {
        $sql = "SELECT * FROM book WHERE id = $id";
        $result = mysqli_query($this->conn, $sql);

        return $result;
    }

    public function createBook($data){
        $title = $data['title'];
        $author = $data['author'];
        $pages = $data['pages'];
        $genre = $data['genre'];

        $sql = "INSERT INTO book (title, author, pages, genre) VALUES ('$title', '$author', '$pages', '$genre')";
        $result = mysqli_query($this->conn, $sql);

        if($result) {
            return $result;
        }
        else{
            echo "error" . $sql;
            echo mysqli_error($this->conn);
        }
    }

    public function updateBook($data){
        $id = $data['id'];
        $title = $data['title'];
        $pages = $data['pages'];
        $author = $data['author'];
        $genre = $data['genre'];

        $sql = "UPDATE book SET title = '$title', pages = '$pages', author = '$author', genre = '$genre' WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);

        if($result) {
            return $result;
        }
        else{
            echo "error" . $sql;
            echo mysqli_error($this->conn);
        }
    }

    public function deleteBook($data) {
        $id = $data['id'];

        $sql = "DELETE FROM book WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);

        if($result) {
            return $result;
        }
        else{
            echo "error" . $sql;
            echo mysqli_error($this->conn);
        }
    }
}
