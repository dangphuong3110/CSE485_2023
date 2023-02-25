<?php
declare(strict_types=1);
require '../includes/database_connection.php';
require '../includes/functions.php';

$title = "Sửa tác giả";
?>
<?php require '../includes/header_admin.php'; ?>

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tác giả</h3>
            <form action="process_add_author.php" method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="ma_tgia">Mã tác giả</span>
                    <input type="text" class="form-control" name="ma_tgia" readonly value="1">
                </div>

                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="ten_tgia">Tên tác giả</span>
                    <input type="text" class="form-control" name="ten_tgia" value="Nhạc trữ tình">
                </div>

                <div class="form-group  float-end ">
                    <input type="submit" value="Lưu lại" class="btn btn-success">
                    <a href="author.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include '../includes/footer.php';
?>