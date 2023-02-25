<?php 
declare (strict_types = 1);
include '../includes/database_connection.php';
include '../includes/functions.php';
?>

<?php 
if (isset($_POST['submit']))
{
    // $ten_tloai = $_POST['txtCategory'];
    $ten_tloai_error = "";

    if(empty($_POST['txtCategory']))
    {
        $ten_tloai_error = "Tên thể loại không được để trống";
    }
    else
    {
        $ten_tloai = html_escape($_POST['txtCategory']);
    }
}
?>


<?php include '../includes/header_admin.php'; ?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
                <form action="process_add_category.php" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên thể loại</span>
                        <input type="text" class="form-control" name="txtCatName" >
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php include '../includes/footer.php'; ?>