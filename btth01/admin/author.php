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
                    <tr>
                        <th scope="row"><?= 1?></th>
                        <td><?= "Hoàng Anh Tuấn" ?></td>
                        <td><img src="../images/authors/<?= 'avatar.jpg'?>" alt="Đây là hình tấc giả"></td>
                        <td>
                            <a href="edit_category.php?id=1"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href=""><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><?= 2?></th>
                        <td><?= "Nguyễn Phương Trinh" ?></td>
                        <td><img src="../images/authors/<?= 'avatar.jpg'?>" alt="Đây là hình tấc giả"></td>
                        <td>
                            <a href="edit_category.php?id=2"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href=""><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
    include '../includes/footer.php';
?>