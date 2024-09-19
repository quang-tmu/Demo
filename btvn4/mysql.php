<?php

// Kết nối tới MySQL server
$dbh = mysqli_connect('localhost', 'root', '', 'buoi5php');

// Nếu kết nối thất bại thì đưa ra thông báo lỗi
if (!$dbh)
    die("Unable to connect to MySQL: " . mysqli_connect_error());

// Thêm dữ liệu vào bảng
$sql_stmt = "INSERT INTO `my_contacts` (`full_names`, `gender`, `contact_no`, `email`, `city`, `country`) ";
$sql_stmt .= "VALUES('Poseidon', 'Male', '541', 'poseidon@sea.oc', 'Troy', 'Ithaca')";

$result = mysqli_query($dbh, $sql_stmt);
if (!$result) {
    die("Adding record failed: " . mysqli_error($dbh));
} else {
    echo "Poseidon has been successfully added to your contacts list<br>";
}

// Cập nhật dữ liệu trong bảng
$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785', `email` = 'poseidon@ocean.oc' WHERE `id` = 5";

$result = mysqli_query($dbh, $sql_stmt);
if (!$result) {
    die("Updating record failed: " . mysqli_error($dbh));
} else {
    echo "ID number 5 has been successfully updated<br>";
}

// Xóa dữ liệu trong bảng
$id = 4;  // ID của bản ghi cần xóa
$sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id";

$result = mysqli_query($dbh, $sql_stmt);
if (!$result) {
    die("Deleting record failed: " . mysqli_error($dbh));
} else {
    echo "ID number $id has been successfully deleted<br>";
}

// Hiển thị dữ liệu bảng
// Câu lệnh select
$sql_stmt = "SELECT * FROM my_contacts";

// Thực thi câu lệnh SQL
$result = mysqli_query($dbh, $sql_stmt);

// Thông báo lỗi nếu thực thi thất bại
if (!$result)
    die("Database access failed: " . mysqli_connect_error());

// Lấy số hàng trả về
$rows = mysqli_num_rows($result);

if ($rows) {
    while ($row = mysqli_fetch_array($result)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
}

mysqli_close($dbh); // Đóng kết nối CSDL