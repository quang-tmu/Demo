<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      //8.Viết function giải phương trình bậc 2.
      function giaiPTBac2($a, $b, $c) {
        if ($a == 0) {
            if ($b != 0) {
                return "Phương trình có 1 nghiệm: x = " . (-$c / $b);
            } else {
                return ($c == 0) ? "Phương trình vô số nghiệm" : "Phương trình vô nghiệm";
            }
        }
    
        $delta = $b * $b - 4 * $a * $c;
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "Phương trình có 2 nghiệm phân biệt: x1 = $x1 và x2 = $x2";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "Phương trình có nghiệm kép: x = $x";
        } else {
            return "Phương trình vô nghiệm";
        }
    }
    
    //9.Viết function in ra màn hình chữ nhật rỗng có kích thước 5x7 sử dụng dấu sao (dùng vòng lặp).   
    function ChuNhatRong($chieuDai, $chieuRong) {
        for ($i = 1; $i <= $chieuDai; $i++) {
            for ($j = 1; $j <= $chieuRong; $j++) {
                if ($i == 1 || $i == $chieuDai || $j == 1 || $j == $chieuRong) {
                    echo "*";
                } else {
                    echo " ";
                }
            }
            echo "\n";
        }
    }
    
    
    ChuNhatRong(5, 7);

    //10.Viết function tính trung bình cộng của mảng.
    function tinhTrungBinhCong($arr) {
        if (count($arr) == 0) {
            return 0; // Xử lý trường hợp mảng rỗng
        }
        $tong = array_sum($arr);
        $soPhanTu = count($arr);
        return $tong / $soPhanTu;
    }
    
    
     
    
    ?>

    
    
</body>
</html>