<?php
declare(strict_types = 1);
require '../includes/database_connection.php';
require '../includes/functions.php';

$success = $_GET['success'] ?? null;
$failure = $_GET['failure'] ?? null;

$sql = "SELECT bv.ma_bviet, bv.tieude, bv.tomtat, bv.noidung, bv.ngayviet, bv.hinhanh,
               tg.ten_tgia AS tacgia,
               tl.ten_tloai AS theloai
            FROM baiviet AS bv
            JOIN tacgia AS tg ON bv.ma_tgia = tg.ma_tgia
            JOIN theloai AS tl ON bv.ma_tloai = tl.ma_tloai
           ORDER BY bv.ma_bviet;";
$articles = pdo($pdo, $sql)->fetchAll();
?>
<?php include '../includes/header_admin.php'; ?>
    <main class="container-fluid mt-5 mb-5">
        <div class="row">
            <div class="col-sm table-responsive-sm">
                <?php if ($success) { ?><div class="alert alert-success text-center"><?= $success ?></div><?php } ?>
                <?php if ($failure) { ?><div class="alert alert-danger"><?= $failure ?></div><?php } ?>
                <a href="article.php" class="btn btn-success">Thêm mới</a>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Mã bài viết</th>
                            <th>Tiêu đề</th>
                            <th>Tóm tắt</th>
                            <th>Nội dung</th>
                            <th>Ngày viết</th>
                            <th>Hình ảnh</th>
                            <th>Tác giả</th>
                            <th>Thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($articles as $article){ ?>
                            <tr>
                                <th scope="row"><?= $article['ma_bviet']; ?></th>
                                <td><?= $article['tieude']; ?></td>
                                <td><?= $article['tomtat']; ?></td>
                                <td><?= $article['noidung']; ?></td>
                                <td><?= $article['ngayviet']; ?></td>
                                <td><img src ="../images/songs/<?= $article['hinhanh']; ?>" alt="" width = 100px height = 70px></td>
                                <td><?= $article['tacgia']; ?></td>
                                <td><?= $article['theloai']; ?></td>
                                <td>
                                    <a href="article.php?id=<?= $article['ma_bviet']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                                </td>
                                <td>
                                    <a href="article-delete.php?id=<?= $article['ma_bviet']; ?>"><i class="fa-solid fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
<?php include '../includes/footer.php'; ?>