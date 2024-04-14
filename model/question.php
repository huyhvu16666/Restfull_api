<?php
class Question
{
    private $conn;

    public $id_cauhoi;
    public $title;
    public $cau_a;
    public $cau_b;
    public $cau_c;
    public $cau_d;
    public $cau_dung;


    //connect db
    public function __construct($db)
    {
        $this->conn = $db;
    }
    //read data
    public function read()
    {
        $query = "SELECT * FROM cauhoi ORDER BY id_cauhoi ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
    ?>