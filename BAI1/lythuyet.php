<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // vùng làm việc của php
        echo 'Hello';
        // biến trong php
        $tenBien;
        // kiểu dữ liệu trong php: số nguyên, số thực, chuỗi, logic, mảng, đối tượng

        // 1. Số nguyên:
        // vd: $soNguyen = 10;
        // echo $soNguyen;

        // 2. Số thực:
        $soThuc = 3.4;
        echo $soThuc;

        // 3. Chuỗi
        $chuoi ='Ly Thanh Hoa';
        echo $chuoi;

        // 4. Logic
        $logic = 5 > 3;
        echo $logic;

        // toán nối và gán
        $abc = 'vietpro'; // = toán tử gán
        echo '<br>xin chao cac ban'.$abc; // . toán tử nối

        // hằng
        define('ABC', 6.7);
        echo ABC;

        // toán tử so sánh
        (!5<3);

        $a = 10;
        $b = $a++; //10
        $b = ++$a; //11

        //Bài tập
        $a = 5; $b; $c; $d = 2;
        echo $a; // T = 5
        $a++; //a=6
        echo $a;// U = 6
        $b = $a--; //b=a=6 a=5
        echo $b; // V = 6 
        $c = --$a; //c=a=4
        echo $c;// X = 4
        $c += 10; // c=14
        $c -= $a; // c= 14-4=10
        echo $c;// Y = 10
        $c /= $d; // c/d=10/2
        echo $c;// Z = 5
    ?>
</body>
</html>