<?php
?>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TRANG QUẢN LÝ</title>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type ="text/css" href = "css/banner.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <meta charset=utf-8 />
  </head>
 
  <body>
    <?php
      require_once("lib/connection.php");
    ?>
<nav>
  <ul>
    <li><a href="index.php">DS KHAI BÁO Y TẾ KHỎE MẠNH</a></li>
    <li><a href="khaibaotrieuchung.php">DS KHAI BÁO Y TẾ CÓ TRIỆU CHỨNG</a></li>
    <li><a href="khaibaodichte.php">DS KHAI BÁO CÓ YẾU TỐ DỊCH TỂ</a></li>
    <li><a href="tiemchungmui1.php">DS ĐĂNG KÝ TIÊM CHỦNG MŨI 1</a></li>
    <li><a href="tiemchungmui2.php">DS ĐĂNG KÝ TIÊM CHỦNG MŨI 2</a></li>
    <li><a href="tiemchungcobenh.php">DS ĐĂNG KÝ TIÊM CHỦNG NHÓM CÓ TIỀN SỬ BỆNH</a></li>
    <li><a href="tiemchunguutien.php">DS ĐĂNG KÝ TIÊM CHỦNG NHÓM ƯU TIÊN CAO</a></li>
  </ul>
</nav>
    <h4 style="text-align: center;margin-top:20px;margin-bottom:20px;">DANH SÁCH KHAI BÁO Y TẾ NHÓM NGƯỜI CÓ XUẤT HIỆN TRIỆU CHỨNG BỆNH</h4>
        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="th-sm">STT</th>
              <th class="th-sm">Loại khai báo</th>
              <th class="th-sm">Họ và tên</th>
              <th class="th-sm">Ngày sinh</th>
              <th class="th-sm">Số điện thoại</th>
              <th class="th-sm">Giới Tính</th>
              <th class="th-sm">Địa chỉ</td>
              <th class="th-sm">Tình trạng sức khỏe</td>
            </tr>
          </thead>
          <tbody>
          <?php
            $stt = 1 ;
            $sql = "SELECT * FROM khai_bao_y_te where Sot='Có' or Ho='Có' or Dau_hong='Có' or Mat_vi='Có' or Met='Có' or Kho_tho='Có' or Trieu_chung_khac='Có' or Dau_hieu_khac IS NOT NULL ";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?php echo $stt++ ?></th>
              <td class="td-sm"><?php echo $data["Loai_khai_bao"]; ?></td>
              <td class="td-sm"><?php echo $data["Ho_ten"]; ?></td>
              <td class="td-sm"><?php echo $data["Ngay_sinh"]; ?></td>
              <td class="td-sm"><?php echo $data["So_dien_thoai"]; ?></td>
              <td class="td-sm"><?php echo $data["Gioi_tinh"]; ?></td>
              <td class="td-sm"><?php echo $data["Sonha_tenduong"]; ?>, <?php echo $data["Xa_phuong"]?>, <?php echo $data["Quan_huyen"]; ?>, <?php echo $data["Tinh_thanh"]; ?></td>
              <th style="color:red;">
                <?php
                    if($data["Sot"] == "Có"){
                        echo "Sốt ";
                    } if($data["Ho"] == "Có"){
                        echo "Ho ";
                    } if($data["Dau_hong"] == "Có"){
                        echo "Đau họng ";
                    } if($data["Mat_vi"] == "Có"){
                        echo "Mất vị giác ";
                    } if($data["Met"] == "Có"){
                        echo "Mệt mỏi ";
                    } if($data["Kho_tho"] == "Có"){
                        echo "Khó thở ";
                    } if($data["Trieu_chung_khac"] == "Có"){
                        echo "Triệu chứng khác ";
                    } if($data["Dau_hieu_khac"] !== '' ) {
                        echo $data["Dau_hieu_khac"];
                    }
                ?>
            </td>
            </tr>
          <?php
            }
          ?>
          </tbody>
            <tfoot>
            <tr>
              <th class="th-sm">STT</th>
              <th class="th-sm">Loại khai báo</th>
              <th class="th-sm">Họ và tên</th>
              <th class="th-sm">Ngày sinh</th>
              <th class="th-sm">Số điện thoại</th>
              <th class="th-sm">Giới Tính</th>
              <th class="th-sm">Địa chỉ</td>
              <th class="th-sm">Tình trạng sức khỏe</td>
            </tr>
            </tfoot>
        </table>
</body>
</html>