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
        // $stmt->execute([$categoryName, $date]);
        // return $stmt;
        if ($stmt->execute([$categoryName, $date])) {
            return true;
            // header("Location: index.php?cate=created");
            // $stmt->header("Location: index.php?cate=created");
            exit();
        }
        else {
            return false;
            header("Location: index.php?cate=failed");
            exit();
        }
    }
    }





}