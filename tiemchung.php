<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Convid-19</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.php">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!-- Chat bot -->
        <link rel="stylesheet" href="static/css/chat.css">
        <link rel="stylesheet" href="static/css/home.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     </head>
   <body>
   <?php
        require_once("lib/connection.php");
        require_once("lib/data-tiemchung.php");
    ?>
      <!--header section start -->
      <div class="header_section header_bg">
        <div class="container-fluid">
            <div class="main">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="menu_text">
                  <ul>
                     <div class="togle_">
                        <div class="menu_main">
                           <ul>
                              <li><a href="khaibao.php" style="margin-left: -100px;" ><b>KHAI BÁO Y TẾ</b></a></li>
                              <li><a href="timkiem.html"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                           <a href="index.html">TRANG CHỦ</a>
                           <a href="trieuchung.html">TRIỆU CHỨNG</a>
                           <a href="phongngua.html">PHÒNG NGỪA</a>
                           <a href="xetnghiem.html">XÉT NGHIỆM</a>
                           <a href="tinhhinhvacxin.html">TIÊM PHÒNG</a>
                           <a href="index.html">TIN TỨC COVID</a>
                        </div>
                     </div>
                     <span class="navbar-toggler-icon"></span>
                     <span onclick="openNav()"><img src="images/toogle-icon.png" class="toggle_menu"></span>
                     <span onclick="openNav()"><img src="images/toogle-icon1.png" class="toggle_menu_1"></span>
                  </ul>
               </div>
            </div>
         </div>
            <!-- banner section start -->
            <div class="container">
               <div class="about_taital_main">
                  <h2 class="about_tag" style="text-align: center;">TRANG ĐĂNG KÝ TIÊM PHÒNG VACXIN</h2>
                  <h4 style="text-align: center;color: red;"><i>KHAI BÁO SAI THÔNG TIN CÓ THỂ ẢNH HƯỞNG ĐẾN CÔNG TÁC TIÊM NGỪA VACXIN</i></h4>
                  <div class="about_menu">
                     <ul>
                        <li><a style="color: black;" href="index.html">Trang chủ ></a></li>
                        <li><a style="color: black;"> Trang đăng ký tiêm ngừa</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- doctor section start -->
      <div class="layout_padding body_khaibao">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="taital_main">
                     <div class="text">
                        <h1 class="covid_taital" style="text-align:center;">ĐĂNG KÝ TIÊM PHÒNG VACXIN NGỪA BỆNH COVID-19</h1>
                        <form method="post" action="" >
                        <div class="card px-1 py-2 p-sm-2 mt-2 list_khaibao">
                           <div class="row">
                                
                               <div class="col-12 d-flex flex-wrap">
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="cuatoi" value="Đăng ký cho bản thân" name="Loai_dang_ky" class="custom-control-input" checked="">
                                       <label class="custom-control-label" for="cuatoi">Đăng ký cho bản thân</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="cuanguoithan" value="Đăng ký cho người thân" name="Loai_dang_ky" class="custom-control-input">
                                       <label class="custom-control-label" for="cuanguoithan">Đăng ký cho người thân</label>
                                   </div>
                               </div>
                               <div class="col-12 d-flex flex-wrap">
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="mui1" value="Đăng ký tiêm mũi thứ nhất" name="Mui_tiem" class="custom-control-input" checked="">
                                       <label class="custom-control-label" for="mui1">Đăng ký tiêm mũi thứ nhất</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="mui2" value="Đăng ký tiêm mũi thứ hai" name="Mui_tiem" class="custom-control-input">
                                       <label class="custom-control-label" for="mui2">Đăng ký tiêm mũi thứ hai</label>
                                   </div>
                               </div>
                           </div>
                           <div class="row mt-1">
                           <div class="col-12">
                                   <div class="form-group">
                                       <span>Họ và tên:</span> <span class="text-danger">
                                           (*)</span>:
                                           <span class="text-danger"><?php echo $Ho_tenErr; ?> </span>
                                       <input type="text" class="form-control" name="Ho_ten" placeholder="Họ và tên" style="text-transform:uppercase">
                                   </div>
                               </div>
                           <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_birthday">Ngày sinh:</span> <span class="text-danger">(*)</span>:
                                       <input class="datetimepicker-input input_birthday form-control" name="Ngay_sinh" type="date" placeholder="DD/MM/YYYY">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_gender" translate="gioi_tinh">Giới tính:</span> <span class="text-danger">(*)</span>:
                                       <div class="combobox-group">
                                           <div class="input-group combobox-control ">
                                           <div style="margin-left:10%"><label class="lb-radio"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="Nam" checked="">Nam</label></div>
                                           <div style="margin-left:20%"><label class="lb-radio"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="Nữ">Nữ</label></div>
                                           <div style="margin-left:20%"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="Giới Tính Khác">Giới Tính Khác</label></div>
                                          
                                       </div>
                                       <div class="help-block" style="display: none;"></div></div>
                                   </div>
                               </div>

                             <div class="col-12 col-sm-6 col-md-3">
                                   <div class="form-group">
                                       <span class="text">Số điện thoại:</span> <span class="quocgia text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $So_dien_thoaiErr; ?> </span>
                                       <input type="text" class="form-control" name="So_dien_thoai" placeholder="Nhập số điện thoại">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3">
                                   <div class="form-group">
                                       <span class="text">Email:</span><span class="text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $EmailErr; ?> </span>
                                       <input type="text" class="form-control" name="Email" placeholder="Nhập email">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3">
                                   <div class="form-group">
                                       <span class="text">Số CMND/CCCD/HC:</span> <span class="text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $So_cmndErr; ?> </span>
                                       <input type="text" class="form-control" name="So_cmnd" placeholder="Nhập số CMND/CCCD/HC">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3">
                                   <div class="form-group">
                                       <span class="text">Số thẻ BHYT:</span><span class="text-danger">
                                           (*)</span>:
                                       <span class="text-danger"><?php echo $So_the_bhytErr; ?> </span>
                                       <input type="text" class="form-control" name="So_the_bhyt" placeholder="Nhập số thẻ BHYT">
                                   </div>
                               </div>
                               
                               <div class="col-12 col-sm-6 col-md-3 quoctich">
                                   <div class="form-group">
                                       <span class="text_nationality">Quốc tịch</span> <span class="quocgia text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $Quoc_tichErr; ?> </span>
                                       <input type="text" class="form-control" name="Quoc_tich" placeholder="Nhập quốc tịch">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3 tinhthanh">
                                   <div class="form-group">
                                       <span class="text_province">Tỉnh thành</span> <span class="tinhthanh text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $Tinh_thanhErr; ?> </span>
                                       <input type="text" class="form-control" name="Tinh_thanh" placeholder="Nhập tỉnh/thành phố">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3 quanhuyen">
                                   <div class="form-group">
                                       <span class="text_district">Quận huyện</span> <span class="quanhuyen text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $Quan_huyenErr; ?> </span>
                                       <input type="text" class="form-control" name="Quan_huyen" placeholder="Nhập quận/huyện">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3 xaphuong">
                                   <div class="form-group">
                                       <span class="text_ward">Xã phường</span> <span class="xaphuong text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $Xa_phuongErr; ?> </span>
                                       <input type="text" class="form-control" name="Xa_phuong" placeholder="Nhập xã/phường/thị trấn">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Số nhà, tên đường</span><span class="text-danger">
                                           (*)</span>:
                                           <span class="text-danger"><?php echo $Sonha_tenduongErr; ?> </span>
                                           <input type="text" name="Sonha_tenduong" class="form-control" placeholder="Số nhà, tên đường">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Dân tộc:</span>
                                           <input type="text" name="Dan_toc" class="form-control" placeholder="Dân tộc">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Nghề Nghiệp</span>
                                           <input type="text" name="Nghe_nghiep" class="form-control" placeholder="Nghề Nghiệp">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Đơn vị công tác:</span>
                                           <input type="text" name="Don_vi_cong_tac" class="form-control" placeholder="Đơn vị công tác">
                                   </div>
                               </div>
                               <div class="col-12">
                                   <div class="form-group">
                                       <span class="text">Nhóm ưu tiên:</span> <span class="quocgia text-danger"> (*)</span>:
                                       <select class="form-control" name="Nhom_uu_tien">
                                            <option class="text" value="1">1. Người làm việc trong các cơ sở y tế, ngành y tế (công lập và tư nhân)</option>
                                            <option class="text" value="2" >2. Người tham gia phòng chống dịch (Thành viên Ban chỉ đạo phòng, chống dịch các cấp, người làm việc ở các khu cách ly, làm nhiệm vụ truy vết, điều tra dịch tễ, tổ Covid dựa vào cộng đồng, tình nguyện viên, phóng viên…)</option>
                                            <option class="text" value="3">3. Lực lượng Quân đội</option>
                                            <option class="text" value="4">4. Lực lượng Công an</option>
                                            <option class="text" value="5">5. Nhân viên, cán bộ ngoại giao của Việt Nam và thân nhân được cử đi nước ngoài; người làm việc trong các cơ quan Ngoại giao, Lãnh sự, các tổ chức quốc tế hoạt động tại Việt Nam</option>
                                            <option class="text" value="6">6. Hải quan, cán bộ làm công tác xuất nhập cảnh</option>
                                            <option class="text" value="7">7. Người cung cấp dịch vụ thiết yếu: hàng không, vận tải, du lịch; cung cấp dịch vụ điện, nước</option>
                                            <option class="text" value="8">8. Giáo viên, người làm việc, học sinh, sinh viên tại các cơ sở giáo dục, đào tạo; lực lượng bác sỹ trẻ; người làm việc tại các cơ quan, đơn vị hành chính; các tổ chức hành nghề luật sư, công chứng, đấu giá… thường xuyên tiếp xúc với nhiều người</option>
                                            <option class="text" value="9">9. Người mắc các bệnh mạn tính; Người trên 65 tuổi</option>
                                            <option class="text" value="10">10. Người sinh sống tại các vùng có dịch</option>
                                            <option class="text" value="11">11. Người nghèo, các đối tượng chính sách xã hội</option>
                                            <option class="text" value="12">12. Người được cơ quan nhà nước có thẩm quyền cử đi công tác, học tập, lao động ở nước ngoài hoặc có nhu cầu xuất cảnh để công tác, học tập và lao động ở nước ngoài; chuyên gia nước ngoài làm việc tại Việt Nam</option>
                                            <option class="text" value="13">13. Các đối tượng là người lao động, thân nhân người lao động đang làm việc tại các doanh nghiệp (bao gồm cả doanh nghiệp trong khu công nghiệp, khu chế xuất, doanh nghiệp kinh doanh vận tải, tín dụng, du lịch…), cơ sở kinh doanh dịch vụ thiết yếu như các cơ sở lưu trú, ăn uống, ngân hàng, chăm sóc sức khỏe, dược, vật tư y tế… cơ sở bán lẻ, bán buôn, chợ, công trình xây dựng, người dân ở vùng, khu du lịch</option>
                                            <option class="text" value="14">14. Các chức sắc, chức việc các tôn giáo</option>
                                            <option class="text" value="15">15. Người lao động tự do</option>
                                            <option class="text" value="16" selected="selected">16. Các đối tượng khác theo Quyết định của Bộ trưởng Bộ Y tế hoặc Chủ tịch Ủy ban nhân dân tỉnh, thành phố và đề xuất của các đơn vị viện trợ vắc xin cho Bộ Y tế</option>
                                        </select>
                                   </div>
                                   <span class="text_note_1 text-primary font-weight-bold"><b>Thông tin đăng ký tiêm chủng:</b></span>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Ngày muốn được tiêm (dự kiến):</span>
                                       <input class="datetimepicker-input input_birthday form-control" name="Ngay_muon_tiem" type="date" placeholder="DD/MM/YYYY">
                                   </div>
                               </div> 
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Buổi tiêm mong muốn(dự kiến):</span>
                                        <select class="form-control" name="Buoi_muon_tiem">
                                            <option class="text" value="Buổi sáng từ 7h-11h30">Buổi sáng từ 7h-11h30</option>
                                            <option class="text" value="Buổi chiều từ 13h-17h30" >Buổi chiều từ 13h-17h30</option>
                                            <option class="text" value="Cả ngày" selected="selected">Cả ngày</option>
                                        </select>
                                   </div>
                               </div>

                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Ngày đã  tiêm mũi 1 (nếu có):</span>
                                       <input class="datetimepicker-input input_birthday form-control" name="Ngay_tiem_mui1" type="date" placeholder="DD/MM/YYYY">
                                   </div>
                               </div> 
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Loại Vacxin đã tiêm mũi 1(nếu có):</span>
                                        <select class="form-control" name="Loai_vacxin_mui1">
                                            <option class="text" value="AstraZeneca">Vacxin AstraZeneca</option>
                                            <option class="text" value="Vero Cell" >Vacxin Vero Cell (Sinopharm)</option>
                                            <option class="text" value="Gam-COVID-Vac" selected="selected">Vacxin Gam-COVID-Vac (SPUTNIK V)</option>
                                            <option class="text" value="Pfizer" selected="selected">Vacxin Comirnaty (Pfizer/BioNTech) </option>
                                            <option class="text" value="Moderna" selected="selected">Vacxin Spikevax (Moderna)</option>
                                            <option class="text" value="Janssen" selected="selected">Vacxin Janssen</option>
                                            <option class="text" value="Hayat-Vax" selected="selected">Vacxin vaccine Hayat - Vax</option>
                                            <option class="text" value="Abdala" selected="selected">Vacxin Abdala</option>
                                        </select>
                                   </div>
                               </div>
                               <div class="col-12 wrap_trieuchung">
                                   <div class="form-group">
                                       <span class="text_note_1 text-primary font-weight-bold">Ông/bà hiện có tiền sử mắc bệnh hoặc các biến chứng hay biểu hiện nào sau đây không?</span><span class="text-danger"> (*)</span>:
                                       <div class="table-responsive mt-1">
                                           <table class="table table-bordered mb-0">
                                               <thead>
                                                   <tr>
                                                       <th class="text_symptoms">Tiền sử bệnh, biến chứng, dấu hiệu:</th>
                                                       <th width="15%" class="text-center">Có</th>
                                                       <th width="15%" class="text-center">Không</th>
                                                       <th width="15%" class="text-center">Không rõ</th>
                                                   </tr>
                                               </thead>
                                               <tbody id="list-trieuchung">
                                           <tr>
                                               <td>1. Tiền sử phản vệ từ độ 2 trở lên<span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_phanve" name="Tiensubenh_phanve" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_phanve" name="Tiensubenh_phanve" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_phanve" name="Tiensubenh_phanve" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>2. Tiền sử bị COVID-19 trong vòng 6 tháng<span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_covid" name="Tiensubenh_covid" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_covid" name="Tiensubenh_covid" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_covid" name="Tiensubenh_covid" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>3. Tiền sử tiêm vắc xin khác trong 14 ngày qua<span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensu_tiemvacxin" name="Tiensu_tiemvacxin" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensu_tiemvacxin" name="Tiensu_tiemvacxin" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensu_tiemvacxin" name="Tiensu_tiemvacxin" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>4. Tiền sử suy giảm miễn dịch, ung thư giai đoạn cuối, cắt lách, xơ gan mất bù ...<span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_suygiammiendich" name="Tiensubenh_suygiammiendich" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_suygiammiendich" name="Tiensubenh_suygiammiendich" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_suygiammiendich" name="Tiensubenh_suygiammiendich" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>5. Đang dùng thuốc ức chế miễn dịch, corticoid liều ca (tương đương hoặc hơn 2mg prednisolon/kg/ngày trong ít nhất 7 ngày) hoặc điều trị hóa trị, xạ trị <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Su_dung_thuoc_corticoid" name="Su_dung_thuoc_corticoid" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Su_dung_thuoc_corticoid" name="Su_dung_thuoc_corticoid" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Su_dung_thuoc_corticoid" name="Su_dung_thuoc_corticoid" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>6. Bệnh cấp tính <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_captinh" name="Tiensubenh_captinh" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_captinh" name="Tiensubenh_captinh" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_captinh" name="Tiensubenh_captinh" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>7. Tiền sử bệnh mạn tính, đang tiến triển <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh" name="Tiensubenh_mantinh" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh" name="Tiensubenh_mantinh" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh" name="Tiensubenh_mantinh" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>8. Tiền sử bệnh mạn tính đã điều trị ổn <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh_dadieutri" name="Tiensubenh_mantinh_dadieutri" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh_dadieutri" name="Tiensubenh_mantinh_dadieutri" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh_dadieutri" name="Tiensubenh_mantinh_dadieutri" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>9. Đang mang thai, phụ nữ đang nuôi con bằng sữa mẹ <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Dang_mang_thai" name="Dang_mang_thai" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Dang_mang_thai" name="Dang_mang_thai" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Sot" name="Sot" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>10. Độ tuổi: ≥65 tuổi <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Do_tuoi_tren_65" name="Do_tuoi_tren_65" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Do_tuoi_tren_65" name="Do_tuoi_tren_65" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Do_tuoi_tren_65" name="Do_tuoi_tren_65" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>11. Tiền sử rối loạn đông máu/cầm máu hoặc đang dùng thuốc chống đông <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_dongmau" name="Tiensubenh_dongmau" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_dongmau" name="Tiensubenh_dongmau" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_dongmau" name="Tiensubenh_dongmau" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>12. Tiền sử dị ứng với các dị nguyên khác <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_diung" name="Tiensubenh_diung" class="radio-trieuchung" value="Có"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_diung" name="Tiensubenh_diung" class="radio-trieuchung" value="Không" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_diung" name="Tiensubenh_diung" class="radio-trieuchung" value="Không rõ"></label>
                                               </td>
                                           </tr>
                                           </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
               
               
                               <div class="col-12">
                                   <div class="mb-1 d-none thongtinthem">
                                       <span class="text_note text-primary font-weight-bold" translate="vui_long_cung_cap_them_chi_tiet_trieu_chung_dich_te">Vui lòng cung cấp thêm thông tin triệu chứng, dịch tễ, lịch sử di chuyển</span><span class="text-danger"> (*)</span>:
                                   </div>
                                   <div class="form-group">
                                       <textarea rows="2" name="Tiensubenh_khac" class="form-control" placeholder="Vui lòng cung cấp thêm thông tin về tiền sử bệnh hoặc triệu chứng hay dấu hiệu khác nếu có"></textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-12 my-3 text-center">
                                   <div block-bind="toolbar" style="margin-left:22%;"><div class="toolbar"><div class="btn-group toolbar-group w-50"><button type="submit" name = "submit" class="btn btn-primary width-sm ml-1">Xác nhận gửi thông tin</button></div></div></div>
                               </div>
                           </div>
                       </div>
                       </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- doctor section end -->
      <div class="news_section layout_padding">
         <div class="container" id="target">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <h1 class="news_taital">TIN TỨC MỚI NHẤT</h1>
                     <p class="news_text">Những thông tin cần biết về bệnh do virus Corona. Những diễn biến về tình hình dịch bệnh đã và đang diễn ra trên toàn thế giới. Những thông tin về phòng chống dịch và vacxin...</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/news-img.png"></div>
                           <h2 class="design_text">Coronavirus là loại virus nguy hiểm</h2>
                           <p class="lorem_text">Corona là một họ virus lớn, trong đó một số chủng có khả năng gây bệnh khi xâm nhiễm từ động vật sang người, số khác chỉ xâm nhiễm và tồn tại ở các loài động vật bao gồm lạc đà, mèo và dơi. Đôi khi virus corona từ động vật tiến hóa để lây sang người để rồi sau đó lây từ người sang người...</p>
                           <div class="read_btn"><a href="covid.html">TÌM HIỂU THÊM</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                    <h1 class="news_taital">TIN TỨC MỚI NHẤT</h1>
                     <p class="news_text">Những thông tin cần biết về bệnh do virus Corona. Những diễn biến về tình hình dịch bệnh đã và đang diễn ra trên toàn thế giới. Những thông tin về phòng chống dịch và vacxin...</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/dienbien.jpg"></div>
                           <h2 class="design_text">Diễn biến dịch bệnh ở Việt Nam</h2>
                           <p class="lorem_text">Bản tin sáng 7/6 của Bộ Y tế cho biết có thêm 44 ca mắc COVID-19 trong nước tại 4 tỉnh, thành phố: Bắc Giang 24, Bắc Ninh 6, TPHCM 12 đều liên quan đến nhóm truyền giáo Phục Hưng và Hà Nam 2. Việt Nam hiện có 8.791 bệnh nhân.</p>
                           <div class="read_btn"><a href="dienbiendichbenh.html">TÌM HIỂU THÊM</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                    <h1 class="news_taital">TIN TỨC MỚI NHẤT</h1>
                     <p class="news_text">Những thông tin cần biết về bệnh do virus Corona. Những diễn biến về tình hình dịch bệnh đã và đang diễn ra trên toàn thế giới. Những thông tin về phòng chống dịch và vacxin...</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/tiemvacxin.jpg"></div>
                           <h2 class="design_text">Tình hình tiêm vacxin phòng ngừa Covid-19</h2>
                           <p class="lorem_text">TPHCM đã tiêm được hơn 6,2 triệu liều vaccine (trong đó 5,8 triệu người đã tiêm mũi 1, số còn lại tiêm đủ 2 mũi). Đồng Nai đã tiêm 981.413 liều trên tổng số gần 1,8 triệu liều được phân bổ. Hà Nội đã tiêm được hơn 3,1 triệu liều vaccine...</p>
                           <div class="read_btn"><a href="tinhhinhvacxin.html">TÌM HIỂU THÊM</a></div>
                        </div>
                     </div>      
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
            </div>
         </div>
      </div>
      <!-- footer section start -->
      <div class="footer_section layout_padding">
        <div class="container">
           <div class="footer_section_2">
              <div class="row">
                 <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">NỘI DUNG</h2>
                    <div class="footer_menu">
                       <ul>
                          <li><a href="index.html">Trang Chủ</a></li>
                          <li><a href="trieuchung.html">Triệu trứng bệnh</a></li>
                          <li><a href="phongngua.html">Phòng ngừa bệnh</a></li>
                          <li><a href="xetnghiem.html">Xét Nghiệm, Test Nhanh</a></li>
                          <li><a href="tinhhinhvacxin.html">Tiêm phòng Vacxin</a></li>
                          <li><a href="bacsi.html">Lên đầu trang...</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">THÔNG TIN THÊM</h2>
                    <p class="footer_text">Trang website được tạo ra nhằm thông tin về dịch bệnh Covid-19. Các nội dung bao gồm diễn biến tình hình dịch bệnh Covid trong nước, các triệu chứng bệnh, phương pháp phòng bệnh, xét nghiệm và tiêm ngừa vacxin...</p>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">THÔNG TIN LIÊN HỆ</h2>
                    <div class="location_text">
                       <ul>
                          <li>
                             <a href="https://www.google.com/maps/d/u/0/viewer?ie=UTF8&t=m&oe=UTF8&msa=0&mid=1bhL0QOJQMXNfXtZ60fZ-mn4CfoA&ll=10.029129153612054%2C105.77126707117493&z=17"><i class="fa fa-map-marker" aria-hidden="true"></i>
                             <span class="padding_15">Địa chỉ</span></a>
                          </li>
                          <li>
                             <a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                             <span class="padding_15">Call +84 367834738</span></a>
                          </li>
                          <li>
                             <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fa fa-envelope" aria-hidden="true"></i>
                             <span class="padding_15">luan01667834738@gmail.com</span></a>
                          </li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">ĐẠI HỌC CẦN THƠ</h2>
                    <div class="map_image"><img src="images/dhct.png"></div>
                 </div>
              </div>
           </div>
        </div>
     </div>
      <!-- footer section end -->
      <!-- Chat bar block -->
      <!-- Chat bar end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/style.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <!-- Chat bot -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="static/scripts/responses.js"></script>
      <script src="static/scripts/chat.js"></script>
   </body>
</html>
