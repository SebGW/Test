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
            // echo '<p style="color: #333">' . $row['id'] . '</p>';
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

// <a href="#" class="btn btn-success" data-toggle="modal" data-target="#createCategory">Opret Kategori</a>
// <div class="icon removeTask">
// <span class="glyphicon glyphicon-remove"></span>
// </div>

//<div class="pull-right actions">
//<a href="#" class="btn btn-success" data-toggle="modal" data-target="#createCategory">Opret Kategori</a>
//</div>