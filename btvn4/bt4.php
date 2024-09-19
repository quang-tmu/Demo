<?php
// Kết nối đến cơ sở dữ liệu MySQL bằng PDO mà không cần try-catch
$dbh = new PDO('mysql:host=localhost;dbname=buoi5php', 'root', '');

// Thiết lập chế độ lỗi PDO là Exception để có thể thông báo lỗi nếu xảy ra
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Thêm dữ liệu vào bảng
$sql = "INSERT INTO `my_contacts` (`full_names`, `gender`, `contact_no`, `email`, `city`, `country`) 
        VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";

$stmt = $dbh->prepare($sql);

// Gán giá trị cho các tham số
$full_names = 'Poseidon';
$gender = 'Male';
$contact_no = '541';
$email = 'poseidon@sea.oc';
$city = 'Troy';
$country = 'Ithaca';

// Thực thi câu lệnh thêm
$stmt->execute([
    ':full_names' => $full_names,
    ':gender' => $gender,
    ':contact_no' => $contact_no,
    ':email' => $email,
    ':city' => $city,
    ':country' => $country
]);

echo "Poseidon has been successfully added to your contacts list<br>";

// Cập nhật dữ liệu trong bảng
$sql = "UPDATE `my_contacts` SET `contact_no` = :contact_no, `email` = :email WHERE `id` = :id";
$stmt = $dbh->prepare($sql);

$contact_no = '786';
$email = 'poseidon@ocean.oc';
$id = 5;

// Thực thi câu lệnh cập nhật
$stmt->execute([
    ':contact_no' => $contact_no,
    ':email' => $email,
    ':id' => $id
]);

echo "ID number $id has been successfully updated<br>";

// Xóa dữ liệu trong bảng
$sql = "DELETE FROM `my_contacts` WHERE `id` = :id";
$stmt = $dbh->prepare($sql);
$id = 13;

// Thực thi câu lệnh xóa
$stmt->execute([':id' => $id]);

echo "ID number $id has been successfully deleted<br>";

// Hiển thị dữ liệu từ bảng
$sql = "SELECT * FROM my_contacts";
$stmt = $dbh->query($sql);

// Kiểm tra số hàng trả về
if ($stmt->rowCount() > 0) {
    // Lặp qua các kết quả và hiển thị
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo 'ID: ' . $row['id'] . '<br>';
        echo 'Full Names: ' . $row['full_names'] . '<br>';
        echo 'Gender: ' . $row['gender'] . '<br>';
        echo 'Contact No: ' . $row['contact_no'] . '<br>';
        echo 'Email: ' . $row['email'] . '<br>';
        echo 'City: ' . $row['city'] . '<br>';
        echo 'Country: ' . $row['country'] . '<br><br>';
    }
} else {
    echo "No records found.<br>";
}

// Đóng kết nối CSDL
$dbh = null;
