<?php
require_once('../dbhelper.php');

?>

<head>
  <link rel="stylesheet" href="../css/pay.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<div class="container p-5 my-5 bg-primary text-white"></div>
<div class="container">
  
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="payment.php">Thanh toán</a></span> </div>
    <div class="step"> <span><a href="delivering.php">Đang giao</a></span> </div>
    <div class="step"> <span><a href="finished.php">Đã hoàn thành</a><span> </div>
  </div>




<form action="" method="POST">

  <div class="row">
    <div class="col-md-8">
      <h4>Thông tin đơn hàng</h4>
      <ul>
        <li>Họ và tên người nhận : <b> </b></li>
        <li>Số điện thoại : <b> </b></li>
        <li>Địa chỉ : <b></b> </li>
        <li>Ghi chú : </li>
      </ul>
    </div>

  

    <div class="col-md-4 thanhtoan">
      <h4>Phương thức thanh toán</h4>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="cash" value="   mat" checked>
        <img src="../images/cash.png" height="32" width="32" >
        <label class="form-check-label" for="cash">
          Tiền mặt
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="bank" value="chuyen khoan" >
        <img src="../images/bank.png" height="32" width="32" >
        <label class="form-check-label" for="bank">
          Chuyển khoản
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="momo" value="momo" > 
        <img src="../images/Momo.png " height="32" width="32" >
        <label class="form-check-label" for="momo">
          Ví Momo
        </label>
      </div>

      <input type="submit" name="checkout" value="Thanh toán" class="btn btn-danger">

    </div>
    
  </div>
  </form>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../js/slide_pay.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>