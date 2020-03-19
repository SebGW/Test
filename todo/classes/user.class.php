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


    protected function setCateTitle()
    {

        if (isset($_POST['add-submit'])) {

            $categoryName = $_POST['categoryName'];
            $date = date("d-m-Y");

            $sql = "INSERT INTO category (title, create_date) VALUES (?, ?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam('s', $categoryName);
            $stmt->bindParam('s', $date);
            $stmt->execute([$categoryName, $date]);
            return $stmt;


            //     if ($stmt->execute([$categoryName, $date])) {
            //         header("location: index.php?cate=created");
            //         exit();
            //    }else {
            //         header("Location: index.php?cate=failed");            
            //         exit();
            //    }
        }
    }

    protected function delCateTitle()
    {

        if (isset($_POST['delete-submit'])) {

            $categoryName = $_POST['categoryName'];

            $sql = "DELETE FROM category WHERE title = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->bindParam('s', $categoryName);
            $stmt->execute([$categoryName]);
            return $stmt;



        } 
    }



    public function redirectOnSubmit()
    {

        if (isset($_POST['add-submit'])) {
            header("Location: index.php?cate=created");
        }
        else if (isset($_POST['delete-submit'])) {
            header("Location: index.php?cate=deleted");
        }

        $fullUrl = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (strpos($fullUrl, "cate=created") == true) {
            echo '<p class="text-center text-success">Kategori er blevet tilføje!</p>';
        }
        else if (strpos($fullUrl, "cate=deleted") == true) {
            echo '<p class="text-center text-success">Kategorien er blevet slettet!</p>';
        }


    }
}
