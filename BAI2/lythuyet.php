<?php
//biểu thức điều kiện if
// if(bieu thuc){
//     code thuc thi
// }
//Vd
// $soNguyen = 10;
// if($soNguyen > 0){
//     echo 'day la so nguyen duong';
// }else{
//     echo 'day la so nguyen am';
// }

//bieu thuc dieu kien if else if else
$soNguyen = 0;
if($soNguyen > 0){
    echo 'day la so nguyen duong';
}
else if($soNguyen < 0){
    echo 'day la so nguyen am';
}else{
    echo 'day la so 0<br/>';
}

//vong lap while
// while(bieu thuc){
//     code thuc thi
// }
//VD
// $i = 5;
// while($i < 10){
//     echo $i.'<br/>'
//     $i++;
// }

//VD2: in ra cac so tu 10 den 1 va co dau phay , dau cham sau so 1
// $so = 10;
// while($so > 0){
//     if($so > 1){
//         echo $so.',';
//     }else{
//         echo $so.'.';
//     }
//     $so--;
// }

//for
// for(khoi tao bt; bt; tang/giam bt){
//     code thuc thi 
// }

//vd: dung vong lap for lay ra cac so chan tu 10 den 0

// for($a = 10; $a >= 0; $a -= 2){
//     echo $a.',';
// }

// BT: tinh tong cua day so tu 1 den 100
// $i = 0;
// for($b = 1; $b <= 100; $b++){
//     $i += $b;
// }
//     echo $i;

//thiet ke bang cua chuong tu 2 den 9
for($a = 2; $a <= 9; $a++){
    echo '<br/>';
    for($b = 1; $b <=10; $b++){
         
         echo $a.'x'.$b.'='.$a*$b.',';
    }
}

?>