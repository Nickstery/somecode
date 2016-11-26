<?php

function getMainView() {

    $html = buildTable(getRows());

    $html .= '<br>
    <form action="http://localhost:63342/test_lesson/api.php?action=add" method="POST" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="USer Name"><br>
        <input type="number" name="age" placeholder="Age"><br>
        <input type="file" name="file" placeholder="File to upload"><br>
        <input type="submit" value="Add User">
    </form>';
    die($html);
}

function buildTable ($arr) {
    $html = '<table border="1"><thead><th>id</th><th>name</th><th>age</th></thead><tbody>';
    foreach ($arr as $id => $item) {
        $html .= '<tr>';
        $html .= '<td>'.$id.'</td>';
        $html .= '<td>'.$item['name']."</td>";
        $html .= '<td>'.$item['age']."</td>";
        $html .= '</tr>';
    }
    $html .= '</tbody></table>';
    return $html;
}