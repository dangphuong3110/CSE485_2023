<?php
declare(strict_types=1);
require '../includes/database_connection.php';
require '../includes/functions.php';

$sql = "SELECT * FROM tacgia";
$rows = pdo($pdo, $sql)->fetchAll();

$title = "Tác giả";
?>

<?php
require '../includes/header_admin.php';
?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="add_author.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên tác giả</th>
                        <th scope="col">Hình ảnh</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <th scope="row"><?= html_escape($row['ma_tgia']); ?></th>
                            <td><?= html_escape($row['ten_tgia']); ?></td>
                            <td><img src="../images/authors/<?= $row['hinh_tgia']?>" alt="Đây là hình tác giả"></td>
                            <td>
                                <a href="edit_author.php?id=<?= html_escape($row['ma_tgia']) ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href=""><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
include '../includes/footer.php';
?>