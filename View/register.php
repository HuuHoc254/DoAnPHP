<?php include('links.php') ?>

<body>
    <?php include('header.php') ?>
    <div class="container p-3 mb-3">
        <form action="" method="post">
            <input type="hidden" name="action" value="register">
        <h2 class="text-center mb-3">Tạo tài khoản</h2>
        <div class="row form-group">
                <div class="col-12 col-xl-6 mb-3 ">
                    <label>Tên đăng nhập:</label>
                    <input type="text" class="form-control" required name="userName">
                </div>
                <div class="col-12 col-xl-6 mb-3">
                    <label>Họ và tên:</label>
                    <input type="text" class="form-control" required name="fullName">
                </div>
                <div class="col-12 col-xl-6 mb-3">
                    <label>Email:</label>
                    <input type="email" class="form-control" required name="email">
                </div>
                <div class="col-12 col-xl-6 mb-3">
                    <label>Địa chỉ:</label>
                    <input type="text" class="form-control" required name="address">
                </div>
                <div class="col-12 col-xl-6 mb-3">
                    <label>Mật khẩu:</label>
                    <input type="password" class="form-control" required name="password">
                </div>
                <div class="col-12 col-xl-6 mb-3">
                    <label>Xác nhận mật khẩu:</label>
                    <input type="password" class="form-control" required name="re_password">
                </div>
                <button type="submit" class="btn btn-primary mx-auto mt-4">Đăng ký</button>
            
        </div>
    </form>
    </div>
    <?php include('footer.php') ?>
</body>