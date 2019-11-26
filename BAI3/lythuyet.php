<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <a href="lythuyet.php?ten=Nguyen Van Hai&tuoi=23&adress=HN">Nguyen Van Hai</a>
    <a href="lythuyet.php?ten=Bui Thi Dung&tuoi=26&adress=DN">Bui Thi Dung</a>
    <a href="lythuyet.php?ten=Le Van Thanh&tuoi=32&adress=HCM">Le Van Thanh</a>
    <hr/> -->
    <?php
    //phương thức GET
    //$_GET['tham_số];
    // truyền tham số lên url: index.php?tham_số1=giá_trị1&tham_số2=giá_trị2&tham_số3=giá_trị3
    //isset($bien);  ktra sự tồn tại của biến >> trả về 2 giá trị True or False

    // if(isset($_GET['ten']) && isset($_GET['tuoi']) && isset($_GET['adress'])){
    //     $ten = $_GET['ten'];
    //     $tuoi = $_GET['tuoi'];
    //     $adress = $_GET['adress'];
    //     echo $ten.'<br/>'.$tuoi.'<br/>'.$adress;
    // }

    //mảng: vòng lặp foreach
    //có 2 cách khai báo
    // $array = array(giá_trị1, giá_trị2, giá_trị3, ...); 
    // $array = [giá_trị1, giá_trị2, giá_trị3, ...];
    
    //VD: 
    $array = ['mot'=>1,2,'ba','bon'=>'bốn',true,5.1,'bàn','ghế'];
        echo'<pre>';
        var_dump($array);
        print_r($array);
        echo '<pre/>';
    echo $array[5].'<br/>'; // in ra key

    foreach ($array as $key => $value) { //in ra toan bo gtri Value
        echo $key.'=>'.$value.'<br/>';
    }

    //json
    //Cú pháp
    //đọc file json
    $data_json = file_get_contents('data.json');
    //chuyển sang dạng mảng
    $result_json = json_decode($data_json, true);
    print_r($result_json);
    foreach ($result_json as $key => $value) {
        echo $value.'<br/>';
    }
    //chuyển mảng vào json: dữ liệu cũ bị thay thế bằng dữ liệu mới 
    $data_en_json = json_encode($result_json, JSON_UNESCAPED_UNICODE);
    //put vào json
    file_put_contents('data.json', $data_en_json);


    ?>
</body>
    <!-- phuong thuc GET khong bao mat nen k dung voi form  -->

    <!-- <form action="" method="GET">
        <input type="email" name="email">
        <input type="password" name="pass">
        <input type="submit" name="sbm">
    </form> -->
</html>