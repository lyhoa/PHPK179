<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<Style>
    
        

    li{
        list-style: none;
        border: 1px solid #333;
    }
    li a{
        text-transform: capitalize;
    }
</Style>
<body>
    <?php
        if(isset($_POST['sbm'])){
            $tk = $_POST['tk'];
            $mk = $_POST['mk'];
            if($tk ==""  || $mk == "" ){
                echo 'Yeu cua nhap user va pass';
            } 
            else{
                echo $tk.'<br/>'.$mk.'<br/>';
            }
        }
    ?>
    <form method="POST" enctype="multipart/form-data">
        <input type="text" name="tk">
        <input type="password" name="mk">
        <input type="submit" name="sbm" value="Đăng nhập">
    </form>

    <hr/>
    
    <div id='tbl'>
        <table>
        <tr>
        <td style="border: 1px solid #333; padding: 20px;">
            <ul>
                <li><a href="Bai2.php?ten=Nguyen-Van-A&tuoi=33&add=Ha-Noi">nguyễn văn a</a></li>
                <li><a href="Bai2.php?ten=Tran-Van-B&tuoi=23&add=HCM">trần văn b</a></li>
                <li><a href="Bai2.php?ten=Le-Thi-C&tuoi=19&add=Hue">lê thị c</a></li>
                <li><a href="Bai2.php?ten=Hoang-Van-D&tuoi=47&add=Ha-Noi">hoàng văn d</a></li>
                <li><a href="Bai2.php?ten=Ngo-Thi-E&tuoi=33&add=Vinh">ngô thị e</a></li>
            </ul>
    </td>
        <td style="border: 1px solid #333;">
            <?php 
            if(isset($_GET['ten']) && isset($_GET['tuoi']) && isset($_GET['add'])){
                $ten = $_GET['ten'];
                $tuoi = $_GET['tuoi'];
                $add = $_GET['add'];
                echo $ten.' '.$tuoi.' '.$add;
            }else{
                echo 'Thông tin chi tiết của mỗi người';
            }
        
            ?>
        </td>       
        </tr>
        </table>
    </div>
    
</body>
</html>