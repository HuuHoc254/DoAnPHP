<?php include('links.php') ?>

<body>

    <?php include('header.php') ?>
    <div class="container p-2 mb-3 ">
        <?php if( !isset($_SESSION["login"]) || $_SESSION["login"]==null ){
            echo ' <img src="../image/err.webp" alt="">';
           echo " <br> Bạn cần đăng nhập để truy cập vào trang này! ";
           
            exit;
        }?>
        <div class="row">
            <div class="col-6 border-right">
            <h3 class=" text-uppercase text-center">Thông tin tài khoản</h3>
        <div class="row ml-5 mt-3"> 
            <h5 class="font-weight-normal ">Họ và Tên:
                <?php echo $viewFullName ?>
            </h5>
        </div>
        <div class="row ml-5 mt-3">
            <h5 class="font-weight-normal">Tên tài khoản:
                <?php echo $viewUserName ?>
            </h5>
        </div>
        <div class="row ml-5 mt-3">
            <h5 class="font-weight-normal">Email:
                <?php echo $viewEmail ?>
            </h5>
        </div>
        <div class="row ml-5 mt-3">
            <h5 class="font-weight-normal">Số dư:
                <?php echo number_format($viewAmount) . " VND" ; ?> <a href="deposit.php"><button class="btn btn-danger ml-3 mb-3">Nạp tiền</button> </a>
            </h5>
            
        </div>
        <div class="row ml-5 mt-3">
            <h5 class="font-weight-normal">Mật khẩu:
                <?php echo "*********************" ?>
            </h5>
        </div>
        <div class="row ml-5 mt-3">
            <h5 class="font-weight-normal">Địa chỉ:
                <?php echo $viewAddress ?>
            </h5>
        </div>
        <div class="row ml-5 mt-3"><a href="update_account.php"><button class="btn btn-primary ml-3 mb-3">Sửa đổi thông
                    tin</button></a>
                    <a href="update_password.php"><button class="btn btn-primary ml-3 mb-3">Đổi mật khẩu</button> </a>
                    <form action="." method="post">
                        <input type="hidden" name="action" value="logout">
                    <button class="btn btn-primary ml-3 mb-3">Đăng xuất</button>
                </form>
        </div>  
            </div>
            <div class="col-6">
            <h3 class=" text-uppercase text-center ">Lịch sử mua hàng</h3>
            <?php foreach ($invoices as $key => $value): 
                if($value['Status']!="Đã hủy đơn"):?>
                <div class="row ml-1 border-bottom mr-3">
                    <div class="col-6">Mã hóa đơn: <?php echo $value['invoice_id'] ?> </div>
                    <div class="col-6">Số mặt hàng: <?php echo $value['quantity_product'] ?></div>
                    <div class="col-6">Tổng tiền: <?php echo number_format($value['invoice_total']) ?> VND</div>
                    <div class="col-6">Ngày mua: <?php echo $value['invoice_date'] ?></div>
                    <a href="detailInvoice.php?action=detailInvoice&invoiceId=<?php echo $value['invoice_id'] ?>" class="mx-auto mt-2">  Chi tiết HD</a>
                </div>
                <?php endif;?>
                <?php endforeach ?>
            </div>
        </div>
    </div>

    <?php include('footer.php') ?>
</body>