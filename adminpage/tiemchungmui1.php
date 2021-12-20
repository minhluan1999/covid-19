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
    <h4 style="text-align: center;margin-top:20px;margin-bottom:20px;">DANH SÁCH ĐĂNG KÝ TIÊM CHỦNG NHÓM ĐĂNG KÝ TIÊM MŨI 1</h4>
        <table id="myTable" class="table table-striped table-bordered" style="width:100%">
          <thead>
            <tr>
              <th class="th-sm">STT</th>
              <th class="th-sm">Họ và tên</th>
              <th class="th-sm">Ngày sinh</th>
              <th class="th-sm">Số điện thoại</th>
              <th class="th-sm">Giới Tính</th>
              <th class="th-sm">Địa chỉ</th>
              <th class="th-sm">Nhóm ưu tiên</td>
              <th class="th-sm">Tình trạng sức khỏe</td>
            </tr>
          </thead>
          <tbody>
          <?php
            $stt = 1 ;
            $sql = "SELECT * FROM dang_ky_tiem_phong where Mui_tiem='Đăng ký tiêm mũi thứ nhất'";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?php echo $stt++ ?></th> 
              <td class="td-sm"><?php echo $data["Ho_ten"]; ?></td>
              <td class="td-sm"><?php echo $data["Ngay_sinh"]; ?></td>
              <td class="td-sm"><?php echo $data["So_dien_thoai"]; ?></td>
              <td class="td-sm"><?php echo $data["Gioi_tinh"]; ?></td>
              <td class="td-sm"><?php echo $data["Sonha_tenduong"]; ?>, <?php echo $data["Xa_phuong"]?>, <?php echo $data["Quan_huyen"]; ?>, <?php echo $data["Tinh_thanh"]; ?></td>
              <td class="td-sm"><?php echo $data["Nhom_uu_tien"]; ?></td>
              <th style="color:red;">
                <?php
                    if($data["Tiensubenh_phanve"] == "Có"){
                        echo "Tiền sử có bệnh phản vệ ";
                    } else if($data["Tiensubenh_covid"] == "Có"){
                        echo "Đã từng mắc bệnh Covid ";
                    } else if($data["Tiensu_tiemvacxin"] == "Có"){
                        echo "Đã tiêm vacxin 14 ngày trở lại ";
                    } else if($data["Tiensubenh_suygiammiendich"] == "Có"){
                        echo "Tiền sử có bệnh suy giảm miễn dịch ";
                    } else if($data["Su_dung_thuoc_corticoid"] == "Có"){
                        echo "Có sử dụng thuốc chứa Corticoid ";
                    } else if($data["Tiensubenh_captinh"] == "Có"){
                        echo "Tiền sử có bệnh cấp tính ";
                    } else if($data["Tiensubenh_mantinh"] == "Có"){
                        echo "Tiền sử có bệnh mãn tính ";
                    } else if($data["Tiensubenh_mantinh_dadieutri"] == "Có" ) {
                        echo "Tiền sử bệnh mãn tính đã điều trị ";
                    } else if($data["Dang_mang_thai"] == "Có" ) {
                        echo "Đang mang thai kỳ ";
                    } else if($data["Do_tuoi_tren_65"] == "Có" ) {
                        echo "Độ tuổi cao trên 65 tuổi";
                    } else if($data["Tiensubenh_dongmau"] == "Có" ) {
                        echo "Tiền sử có bệnh đông máu ";
                    } else if($data["Tiensubenh_diung"] == "Có" ) {
                        echo "Tiền sử có bệnh dị ứng";
                    } else if($data["Tiensubenh_khac"] !== "") {
                        echo $data["Tiensubenh_khac"];
                    } else{
                        echo '<span style="color:green;">Sức khỏe tốt</span>';
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
              <th class="th-sm">Họ và tên</th>
              <th class="th-sm">Ngày sinh</th>
              <th class="th-sm">Số điện thoại</th>
              <th class="th-sm">Giới Tính</th>
              <th class="th-sm">Địa chỉ</th>
              <th class="th-sm">Nhóm ưu tiên</td>
              <th class="th-sm">Tình trạng sức khỏe</td>
            </tr>
            </tfoot>
        </table>
</body>
</html>