<?php

class UserView extends User
{

    public function showCateTitle()
    {
        $stmt = $this->getCateTitle();

        while ($row = $stmt->fetch()) {
            echo '<section>';
            echo '<div class="header-column">';
            echo '<header>';
            echo '<div class="category" data-time="' . $row['title'] . '">';
            echo '<h2 id="Imorgen" >' . $row['title'] . '</h2>';
            echo '</div>';
            echo '<a class="add-inline" data-toggle="modal" data-target="#createTask">';
            echo '<span class="glyphicon glyphicon-plus"></span>';
            echo '</a>';
            echo '</header>';
            echo '</div>';
            echo '<div class="items-column"></div>';
            echo '</section>';
        }
    }
}