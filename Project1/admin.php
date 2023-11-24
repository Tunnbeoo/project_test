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
        <a href=""><img src="/img/logout.png" alt=""></a>
    </header>

    <nav>
        <ul>
            <img src="/Project1/img/logokh.png" alt="">
            <li><a href="#">Bảng điều khiển</a></li>
            <li><a href="#">Quản lý Sản phẩm</a></li>
            <li><a href="#">Quản lý Người dùng</a></li>
            <li><a href="#">Thống kê</a></li>
            <li><a href="#">Cài đặt</a></li>
        </ul>
    </nav>

    <main>
        <section class="dashboard">
        <?php
switch ($page){
    case "dsloai": require_once 'dsloai.php'; break;
    case "themloai": require_once 'themloai.php'; break;
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
