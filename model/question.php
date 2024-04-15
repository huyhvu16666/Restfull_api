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

    public function show()
    {
        $query = "SELECT * FROM cauhoi WHERE id_cauhoi=? LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id_cauhoi);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->title = $row['title'];
        $this->cau_a = $row['cau_a'];
        $this->cau_b = $row['cau_b'];
        $this->cau_c = $row['cau_c'];
        $this->cau_d = $row['cau_d'];
        $this->cau_dung = $row['cau_dung'];
    }

    public function create()
    {
        $query = "INSERT INTO  cauhoi SET title=:title ,cau_a=:cau_a ,cau_b=:cau_b ,cau_c=:cau_c, cau_d=:cau_d, cau_dung=:cau_dung";
        $stmt = $this->conn->prepare($query);

        //clean data
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->cau_a = htmlspecialchars(strip_tags($this->cau_a));
        $this->cau_b = htmlspecialchars(strip_tags($this->cau_b));
        $this->cau_c = htmlspecialchars(strip_tags($this->cau_c));
        $this->cau_d = htmlspecialchars(strip_tags($this->cau_d));
        $this->cau_dung = htmlspecialchars(strip_tags($this->cau_dung));

        //bin data
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':cau_a', $this->cau_a);
        $stmt->bindParam(':cau_b', $this->cau_b);
        $stmt->bindParam(':cau_c', $this->cau_c);
        $stmt->bindParam(':cau_d', $this->cau_d);
        $stmt->bindParam(':cau_dung', $this->cau_dung);

        if ($stmt->execute()) {
            return true;
        }
        print("Error %s. \n" . $stmt->error);
        return false;
    }


    public function update()
    {
        $query = "UPDATE  cauhoi SET title=:title ,cau_a=:cau_a ,cau_b=:cau_b ,cau_c=:cau_c, cau_d=:cau_d, cau_dung=:cau_dung WHERE id_cauhoi=:id_cauhoi";
        $stmt = $this->conn->prepare($query);

        //clean data
        $this->id_cauhoi = htmlspecialchars(strip_tags($this->id_cauhoi));
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->cau_a = htmlspecialchars(strip_tags($this->cau_a));
        $this->cau_b = htmlspecialchars(strip_tags($this->cau_b));
        $this->cau_c = htmlspecialchars(strip_tags($this->cau_c));
        $this->cau_d = htmlspecialchars(strip_tags($this->cau_d));
        $this->cau_dung = htmlspecialchars(strip_tags($this->cau_dung));

        //bin data
        $stmt->bindParam(':id_cauhoi', $this->id_cauhoi);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':cau_a', $this->cau_a);
        $stmt->bindParam(':cau_b', $this->cau_b);
        $stmt->bindParam(':cau_c', $this->cau_c);
        $stmt->bindParam(':cau_d', $this->cau_d);
        $stmt->bindParam(':cau_dung', $this->cau_dung);

        if ($stmt->execute()) {
            return true;
        }
        print("Error %s. \n" . $stmt->error);
        return false;
    }

    public function delete()
    {
        $query = "DELETE FROM cauhoi WHERE id_cauhoi=:id_cauhoi";
        $stmt = $this->conn->prepare($query);

        //clean data
        $this->id_cauhoi = htmlspecialchars(strip_tags($this->id_cauhoi));

        //bin data
        $stmt->bindParam(':id_cauhoi', $this->id_cauhoi);

        if ($stmt->execute()) {
            return true;
        }
        print("Error %s. \n" . $stmt->error);
        return false;
    }
}
