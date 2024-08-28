<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài về nhà buổi 2</title>
</head>
<body>

<?php

$chuoi1 = "Xin chao cac ban";
$chuoi2 = "Xin chao";
echo "Day la chuoi1: " . $chuoi1. "<br/>";
echo "Day la chuoi2: " . $chuoi2. "<br/>";

// 1. Viết một chương trình PHP để đếm số ký tự trong một chuỗi sử dụng hàm strlen().
echo "Dem so ky tu: ". strlen($chuoi1)."<br/>";
// 2. Viết một chương trình PHP để đếm số từ trong một chuỗi sử dụng hàm str_word_count().
echo "Dem so tu: ". str_word_count($chuoi1)."<br/>";
// 3. Viết một chương trình PHP để đảo ngược một chuỗi sử dụng hàm strrev().
echo "Dao nguoc chuoi: ". strrev($chuoi1)."<br/>";
// 4. Viết một chương trình PHP để tìm kiếm một chuỗi con trong một chuỗi sử dụng hàm strpos().
echo "Tim chuoi con: ". strpos($chuoi1, "ch")."<br/>";
// 5. Viết một chương trình PHP để thay thế một chuỗi con trong một chuỗi bằng một chuỗi khác sử dụng hàm str_replace().
echo "Thay the chuoi con trong chuoi: ". str_replace("cac ban","em", $chuoi1)."<br/>";
// 6. Viết một chương trình PHP để kiểm tra xem một chuỗi có bắt đầu bằng một chuỗi con khác không sử dụng hàm strncmp().
if (strncmp($chuoi1, $chuoi2, strlen($chuoi2)) == 0) {
    echo"chuoi 1 bat dau bau chuoi 2". "<br/>";
} else {
    echo "chuoi 1 khong bat dau bang chuoi 2". "<br/>";
}
// 7. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ hoa sử dụng hàm strtoupper().
echo "In hoa chuoi 1: ". strtoupper($chuoi1) ."<br/>";
// 8. Viết một chương trình PHP để chuyển đổi một chuỗi thành chữ thường sử dụng hàm strtolower().
echo "Chuyen chuoi 2 ve chu thuong: ".strtolower($chuoi2). "<br/>";
// 9. Viết một chương trình PHP để chuyển đổi một chuỗi thành chuỗi in hoa chữ cái đầu tiên của mỗi từ sử dụng hàm ucwords().
echo "In hoa chu cai dua tien cua moi tu trong chuoi 1: ". ucwords($chuoi1). "<br/>";
// 10. Viết một chương trình PHP để loại bỏ khoảng trắng ở đầu và cuối chuỗi sử dụng hàm trim().
echo "Loai bo khoang trang o dau va cuoi chuoi 1:". trim($chuoi1). "<br/>";
// 11. Viết một chương trình PHP để loại bỏ ký tự đầu tiên của một chuỗi sử dụng hàm ltrim().
echo "Loai bo ky tu dau tien cua chuoi 1: ". ltrim($chuoi1, $chuoi1[0]). "<br/>";
// 12. Viết một chương trình PHP để loại bỏ ký tự cuối cùng của một chuỗi sử dụng hàm rtrim().
echo "Loai bo ky tu cuoi cung cua chuoi 1: ". rtrim($chuoi1, $chuoi1[strlen($chuoi1)-1]). "<br/>";
// 13. Viết một chương trình PHP để tách một chuỗi thành một mảng các phần tử sử dụng hàm explode().
$mang = explode(" ", $chuoi1);
$kqmang = print_r($mang, true);
echo "Tach mot chuoi thanh mot mang cac phan tu: $kqmang". "<br/>";
// 14. Viết một chương trình PHP để nối các phần tử của một mảng thành một chuỗi sử dụng hàm implode().
echo "Ghep phan tu cua mang thanh chuoi: ".implode(" ", $mang). "<br/>";
// 15. Viết một chương trình PHP để thêm một chuỗi vào đầu hoặc cuối của một chuỗi sử dụng hàm str_pad().
$chuoi3 = " moi nguoi nhe";
$length = strlen($chuoi3. $chuoi2);
echo "Them mot chuoi 3 vào cuoi cua chuoi 2: ". str_pad( $chuoi2, $length, $chuoi3, STR_PAD_RIGHT)."<br/>";
// 16. Viết một chương trình PHP để kiểm tra xem một chuỗi có kết thúc bằng một chuỗi con khác không sử dụng hàm strrchr().
if (strrchr($chuoi3, "nhe")) {
    echo "chuoi '$chuoi3' ket thuc bang chuoi 'nhe'". "<br/>";
} else {
    echo "chuoi '$chuoi3' khong ket thuc bang chuoi 'nhe'". "<br/>";
}
// 17. Viết một chương trình PHP để kiểm tra xem một chuỗi có chứa một chuỗi con khác không sử dụng hàm strstr().
if (strstr($chuoi3, "nguoi")) {
    echo "chuoi '$chuoi3' chua chuoi 'nguoi'". "<br/>";
} else {
    echo "chuoi '$chuoi3' khong chua chuoi 'nguoi'". "<br/>";
}

// 18. Viết một chương trình PHP để thay thế tất cả các ký tự trong một chuỗi không phải là chữ cái hoặc số bằng một ký tự khác sử dụng hàm preg_replace().
$kytu_can_thay = '/[^a-zA-Z0-9]/'; // Biểu thức chính quy tìm tất cả ký tự không phải chữ cái hoặc số
$chuoi4 = "cau.18.nay_rat.hay/nhe";
$kytu_thay = " ";
echo preg_replace($kytu_can_thay, $kytu_thay, $chuoi4). "<br/>";

// 19. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một số nguyên hay không sử dụng hàm is_int().
$var = 25.9;
if (is_int($var)) {
    echo "$var la so nguyen". "<br/>";
}else {
    echo "$var khong phai la so nguyen". "<br/>";
}

// 20. Viết một chương trình PHP để kiểm tra xem một chuỗi có phải là một email hợp lệ hay không sử dụng hàm filter_var().
$email = "hta63115@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo("$email la email hop le");
} else {
  echo("$email la email khong hop le");
}

?>
</body>
</html>