<?php include('links.php') ?>

<body>

    <?php include('header.php') ?>
    <div class="container p-2 mb-3 ">
        <?php if($_SESSION["login"]==null){
            echo "Bạn cần đăng nhập để truy cập vào trang này! ";
            exit;
        }?>
        <?php if($invoice->getUser_name()!=$viewUserName): {
          echo "Hóa đơn không tồn tại!";
            exit;} ?>
            <?php else: ?>
        <h2 class=" text-center">Chi tiết hóa đơn</h2>
           
        <h5 class="ml-3">Tên khách hàng: <?php echo $invoice->getUser_name();?></h5> 
        <h5 class="ml-3">Mã số hóa đơn: <?php echo $invoice->getInvoice_id();?></h5> 
        <h5 class="ml-3">Ngày mua: <?php echo date("d/m/Y H:i' s",$time);?></h5>
        <h5 class="ml-3">Địa chỉ giao hàng:<?php echo $invoice->getDelivery_address();?> </h5>
        <h5 class="ml-3 text-primary">Sản phẩm</h5>
        <table class="table">
        
        <thead >
          <tr>
            <th class="col-1">#</th>
            <th class="col-4">Tên sản phẩm</th>
            <th class="col-2">Tên nhãn hàng</th>
            <th class="col-2">Giá tiền</th>
            <th class="col-1">Số lượng</th>
            <th class="col-2">Thành tiền</th>
          </tr>
        </thead>
        <tbody class="border-bottom">
        <?php foreach( $details as $key => $item ) : 
                          $index +=1;
                          $total+=$item['price']*$item['quantity'];
                      ?>    
          <tr>
            <th ><?php echo $index ?></th>
            <td><?php echo $item['product_name']; ?></td>
            <td><?php echo $item['brand_name'] ?></td>
            <td><?php echo number_format($item['price'],0,'.',' ')." VND" ?></td>
            <td class="text-center  "><?php echo $item['quantity']?></td>
            <td><?php echo number_format($item['price']*$item['quantity'],0,'.',' ')." VND" ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <h5 class="ml-3   ">Tổng tiền sản phẩm: <?php echo number_format($total,0,'.',' ')." VND" ?></h5>
      <h5 class="ml-3   ">Phí ship: <?php echo number_format($invoice->getShipCode(),0,'.',' ')." VND" ?></h5>
      <?php if($invoice->getStatus()=="Đã thanh toán"):?>
      <h4 class="ml-3  text-danger ">Số tiền đã thanh toán: <?php echo number_format($total+$invoice->getShipCode(),0,'.',' ')." VND" ?>
        <a href="../Controller/controller.php?action=cancelOrder&id=<?php echo $invoice->getInvoice_id();?>"
        onclick="return confirm('Bạn có chắc chắn muốn hủy đơn hàng?')"><button class="btn btn-danger ml-3">Hủy đơn hàng</button></a></h4>
        <?php else:?>
          <h5 class="ml-3">Tông tiền: <?php echo number_format($total+$invoice->getShipCode(),0,'.',' ')." VND" ?></h5>
          <h5 class="ml-3"><?php echo $invoice->getStatus();?></h5>
        <?php endif ?>
    </div>
    <?php endif ?>
    <?php include('footer.php') ?>
</body>