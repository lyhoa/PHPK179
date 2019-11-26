<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="Content-Type" content="text/html"> -->
    <title>Document</title>
    <style type="text/css">
    table tr td{
        font-family: Arial;
        font-size: 12px;
        color: #00000;
        text-transform: capitalize; 
    }

    table tr td#title{
        font-weight: bold;
        background: #ff6600;
        color: #ffffff;
        text-align: center;
    }

    table tr td.left{
        font-weight: bold;
        color: #ffffff;
        background: #333333;
    }

    </style>
</head>
<body>
    <?php
    $bien1 = 'bien1'; $_bien2 = 1000; $bienBa = 'Hello';
    echo $bien1.'<br/>'.$_bien2.'<br/>'.$bienBa.'<br/>';

    define('TEN','Lê Minh Anh');
    define('TUOI',' 18 tuổi');
    define('GIOI_TINH',' Nam');
    define('DIA_CHI',' Hoàn Kiếm, Hà Nội');
    echo TEN.TUOI.GIOI_TINH.DIA_CHI.'<br/>';
    
    echo "Đoạn Text sau được khai báo bởi kiểu <font color='red'><b>String</b></font> trong PHP<br/>";

    $kieu_int = 100;
    $kieu_double = 3.14;
    $kieu_string = 'khai báo chuỗi';
    $kieu_boolean = true;
    echo $kieu_int.' là kiểu '.gettype($kieu_int).'<br/>';
    echo $kieu_double.' là kiểu '.gettype($kieu_double).'<br/>';
    echo $kieu_string.' là kiểu '.gettype($kieu_string).'<br/>';
    echo $kieu_boolean.' là kiểu '.gettype($kieu_boolean).'<br/>';
    '<br/>';
    '<br/>';
    '<br/>';

    define('TBL_WIDTH','width');
    define('TBL_HEIGHT','height');
    define('TBL_ALIGN','align');
    define('TBL_BORDER', 'border');
    define('TD_COLSPAN', 'colspan');
    define('TD_ID', 'id');
    define('TD_CLASS', 'class');
    $tbl_width_1 = 300;
    $tbl_width_2 = 100;
    $tbl_width_3 = 200;
    $tbl_height;
    $tbl_align = 'center';
    $tbl_border = 1;
    $td_colspan = 2;
    $td_id = 'title';
    $td_class = 'left';
    ?>

    <br/>
    <br/>
    <br/>
    <table <?php echo TBL_WIDTH;?> = <?php echo $tbl_width_1;?> <?php echo TBL_BORDER;?> = <?php echo $tbl_border;?> <?php echo TBL_ALIGN;?> = <?php echo $tbl_align;?> >
        <tr>
            <td <?php echo TD_ID;?> = <?php echo $td_id;?> <?php echo TD_COLSPAN;?> = <?php echo $td_colspan;?> >Thông tin thành viên</td>
        </tr>
        <tr>
            <td <?php echo TD_CLASS;?> = <?php echo $td_class;?> <?php echo TBL_WIDTH;?> = <?php $tbl_width_2;?> > họ tên đầy đủ</td>
            <td <?php echo TBL_WIDTH;?> = <?php echo $tbl_width_3;?> > Nguyễn Văn Tài</td>
        </tr>
        <tr>
            <td <?php echo TD_CLASS;?> = <?php echo $td_class;?> >giới tính</td>
            <td>nam</td>
        </tr>
        <tr>
            <td <?php echo TD_CLASS;?> = <?php echo $td_class;?> >địa chỉ</td>
            <td>hà nội</td>
        </tr>
        <tr>
            <td <?php echo TD_CLASS;?> = <?php echo $td_class;?> >số điện thoại</td>
            <td>0363323848</td>
        </tr>
    </table>
</body>
</html>