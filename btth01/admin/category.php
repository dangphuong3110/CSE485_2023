<?php
declare (strict_types = 1);
require '../includes/database_connection.php';
require '../includes/functions.php';
$sql = "SELECT * FROM theloai";
$rows = pdo($pdo, $sql)->fetchAll();
$title = "Thể loại - Admin";
?>

<?php include '../includes/header_admin.php'; ?>
    <main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <a href="add_category.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody> 
                        <?php foreach($rows as $row) {?>
                        <tr>
                            <th scope="row"><?= html_escape($row['ma_tloai']); ?></th>
                            <td><?= html_escape($row['ten_tloai']); ?> </td>
                            <td>
                                <a href="edit_category.php?id=<?= html_escape($row['ma_tloai']); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
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
<?php include '../includes/footer.php'; ?>
    