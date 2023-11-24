<?php require_once "../functions.php"; ?>
<?php if (isset($_GET['page'])==true){
    $page = $_GET['page'];
    $page = strip_tags($page);
}
else $page = "" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>

    <header>
        <a href=""><img src="/Project1/img/logout.png" alt=""></a>
    </header>

    <nav>
    
        <ul>
        <img src="/Project1/img/logokh.png" alt="">
            <li><a href="admin.php">TRANG CHỦ</a></li>
            <li><a href="#">KHÁCH HÀNG</a></li>
            <li><a href="admin.php?page=dsloai">DANH SÁCH LOẠI</a></li>
            <li><a href="admin.php?page=dssanpham">SANH SÁCH SẢN PHẨM</a></li>
            <li><a href="#">DANH SÁCH TIN TỨC</a></li>
            <li><a href="#">DOANH THU</a></li>
        </ul>
    </nav>

    <main>
        <section class="dashboard">
        <?php
switch ($page){
    case "dsloai": require_once 'dsloai.php'; break;
    case "themloai": require_once 'themloai_.php'; break;
    case "sualoai": require_once 'sualoai.php'; break;
    case "dssanpham": require_once 'danhsachsp.php'; break;
    case "themsanpham": require_once 'themsp.php'; break;
    case "suasanpham": require_once 'suasp.php'; break;
    case "thongbao": require_once 'thongbao.php'; break;
    case "upfile": require_once 'upfile.php'; break;
    default: ;
}
?>
        </section>
    </main>


</body>
</html>
