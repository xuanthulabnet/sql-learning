<?php
    // Đường dẫn lưu trữ file dữ liệu
    $dbpath = '../sql-learning/sqlite/db.sqlite';
    //Kết nối (PHP có extension sqlite)
    $db = new SQLite3($dbpath);

    //Truy vấn
    $results = $db->query('SELECT * FROM Danhmuc');

    //Đọc kết quả truy vấn
    while ($row = $results->fetchArray())
    {
        var_dump($row);
    }

    $db->close();
?>
