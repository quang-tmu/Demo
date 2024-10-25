<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function phuongtrinh($a,$b){
            if($a==0){
                if($b==0){
                    return"Phương trình có vô số nghiệm ";
                }else{
                    return"Phương trình có vô số nghiệm";
                }
             } else{
                $c=-$b/$a;
                return "Phương trình có nghiệm". $c;
            }
            }
        
        function chuvi($a, $b){
        return $a * 2 + $b * 2;
        }
        
        function echoline($text)
        {
            echo $text . "</br>";

        }
        $p_t= array(1 => "xe đạp", 2 => "xe mấy");
        foreach ($p_t as $p => $p_value ){
            echoline("Key =". $p . ", Value =" . $p_value);
        }
    
    ?>
    
    
</body>
</html>