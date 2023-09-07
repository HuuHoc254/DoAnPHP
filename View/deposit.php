<?php include('links.php') ?>

<body>
    <?php include('header.php') ?>
    
    <div class="container p-3 mb-3">
    <?php if($_SESSION["login"]==null){
            echo "Bạn cần đăng nhập để truy cập vào trang này! ";
            exit;
        }?>
        <form action="" method="post">
            <input type="hidden" name="action" value="deposit">
        <h2 class="text-center mb-3">Nạp tiền vào tài khoản</h2>
        <div class="row form-group">
                <div class="col-12 mb-3 ">
                    <label class="text-danger"><h5>Họ và tên:</h5></label>
                    <input type="text" class="form-control" readonly value="<?php echo $viewFullName?>">
                </div>
                <div class="col-12 mb-3 ">
                    <label class="text-danger  "><h5>Số tiền nạp:</h5></label>
                    <input type="number" class="form-control" name="money" placeholder="VND">
                </div>
                <div class="col-12 mb-3">
                    <label class="text-danger  "><h5>Mật khẩu:</h5></label>
                    <input type="password" class="form-control" name="pass">
                </div>
                <div class="mx-auto">
                    <a href="account.php">
                    <button type="button" class="btn btn-primary mt-3">Hủy bỏ</button></a>
                <button type="submit" class="btn btn-primary mt-3">Nạp tiền</button>
                </div>
        </div>
    </form>
    </div>
    <?php include('footer.php') ?>
</body>