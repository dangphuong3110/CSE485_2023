<?php
require '../includes/header_admin.php';
?>

<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Thêm mới tác giả</h3>
            <form action="add_author.php" method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblAutName">Tên tác giả</span>
                    <input type="text" class="form-control" name="txtAutName">
                </div>
                <div class="input-group mb-3">
                        <span class="input-group-text" id="lbAutImage">Hình ảnh</span>
                        <input type="file" class="form-control" name="fileAutImage">
                    </div>
                <div class="form-group float-end">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    <a href="author.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>

<?php
include '../includes/footer.php';
?>