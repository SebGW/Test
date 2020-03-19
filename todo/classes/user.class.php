<?php


class User extends Dbh
{
    // Få fat i Kategori navnen fra Databasen
    protected function getCateTitle()
    {
        $sql = "SELECT * FROM category";
        $stmt = $this->connect()->query($sql);
        return $stmt;
    }

    
    protected function setCateTitle() {

        if (isset($_POST['submit'])) {

        $categoryName = $_POST['categoryName'];
        $date = date("d-m-Y");

        $sql = "INSERT INTO category (title, create_date) VALUES (?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam('s', $categoryName);
        $stmt->bindParam('s', $date);
        $stmt->execute([$categoryName, $date]);
        return $stmt;
        
        // header("Location: index.php?cate=created");
        

    //     if ($stmt->execute([$categoryName, $date])) {
    //         header("location: index.php?cate=created");
    //         exit();
    //    }else {
    //         header("Location: index.php?cate=failed");            
    //         exit();
    //    }
    }
    }


    public function redirectOnSubmit() {
        if (isset($_POST['submit'])) {
            header("Location: index.php?cate=created");
        }
    }



}
