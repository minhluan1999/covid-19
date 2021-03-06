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
                              <li><a href="khaibao.php" style="margin-left: -100px;" ><b>KHAI B??O Y T???</b></a></li>
                              <li><a href="timkiem.html"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                           </ul>
                        </div>
                     </div>
                     <div id="myNav" class="overlay">
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="overlay-content">
                           <a href="index.html">TRANG CH???</a>
                           <a href="trieuchung.html">TRI???U CH???NG</a>
                           <a href="phongngua.html">PH??NG NG???A</a>
                           <a href="xetnghiem.html">X??T NGHI???M</a>
                           <a href="tinhhinhvacxin.html">TI??M PH??NG</a>
                           <a href="index.html">TIN T???C COVID</a>
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
                  <h2 class="about_tag" style="text-align: center;">TRANG ????NG K?? TI??M PH??NG VACXIN</h2>
                  <h4 style="text-align: center;color: red;"><i>KHAI B??O SAI TH??NG TIN C?? TH??? ???NH H?????NG ?????N C??NG T??C TI??M NG???A VACXIN</i></h4>
                  <div class="about_menu">
                     <ul>
                        <li><a style="color: black;" href="index.html">Trang ch??? ></a></li>
                        <li><a style="color: black;"> Trang ????ng k?? ti??m ng???a</a></li>
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
                        <h1 class="covid_taital" style="text-align:center;">????NG K?? TI??M PH??NG VACXIN NG???A B???NH COVID-19</h1>
                        <form method="post" action="" >
                        <div class="card px-1 py-2 p-sm-2 mt-2 list_khaibao">
                           <div class="row">
                                
                               <div class="col-12 d-flex flex-wrap">
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="cuatoi" value="????ng k?? cho b???n th??n" name="Loai_dang_ky" class="custom-control-input" checked="">
                                       <label class="custom-control-label" for="cuatoi">????ng k?? cho b???n th??n</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="cuanguoithan" value="????ng k?? cho ng?????i th??n" name="Loai_dang_ky" class="custom-control-input">
                                       <label class="custom-control-label" for="cuanguoithan">????ng k?? cho ng?????i th??n</label>
                                   </div>
                               </div>
                               <div class="col-12 d-flex flex-wrap">
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="mui1" value="????ng k?? ti??m m??i th??? nh???t" name="Mui_tiem" class="custom-control-input" checked="">
                                       <label class="custom-control-label" for="mui1">????ng k?? ti??m m??i th??? nh???t</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="mui2" value="????ng k?? ti??m m??i th??? hai" name="Mui_tiem" class="custom-control-input">
                                       <label class="custom-control-label" for="mui2">????ng k?? ti??m m??i th??? hai</label>
                                   </div>
                               </div>
                           </div>
                           <div class="row mt-1">
                           <div class="col-12">
                                   <div class="form-group">
                                       <span>H??? v?? t??n:</span> <span class="text-danger">
                                           (*)</span>:
                                           <span class="text-danger"><?php echo $Ho_tenErr; ?> </span>
                                       <input type="text" class="form-control" name="Ho_ten" placeholder="H??? v?? t??n" style="text-transform:uppercase">
                                   </div>
                               </div>
                           <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_birthday">Ng??y sinh:</span> <span class="text-danger">(*)</span>:
                                       <input class="datetimepicker-input input_birthday form-control" name="Ngay_sinh" type="date" placeholder="DD/MM/YYYY">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_gender" translate="gioi_tinh">Gi???i t??nh:</span> <span class="text-danger">(*)</span>:
                                       <div class="combobox-group">
                                           <div class="input-group combobox-control ">
                                           <div style="margin-left:10%"><label class="lb-radio"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="Nam" checked="">Nam</label></div>
                                           <div style="margin-left:20%"><label class="lb-radio"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="N???">N???</label></div>
                                           <div style="margin-left:20%"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="Gi???i T??nh Kh??c">Gi???i T??nh Kh??c</label></div>
                                          
                                       </div>
                                       <div class="help-block" style="display: none;"></div></div>
                                   </div>
                               </div>

                             <div class="col-12 col-sm-6 col-md-3">
                                   <div class="form-group">
                                       <span class="text">S??? ??i???n tho???i:</span> <span class="quocgia text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $So_dien_thoaiErr; ?> </span>
                                       <input type="text" class="form-control" name="So_dien_thoai" placeholder="Nh???p s??? ??i???n tho???i">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3">
                                   <div class="form-group">
                                       <span class="text">Email:</span><span class="text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $EmailErr; ?> </span>
                                       <input type="text" class="form-control" name="Email" placeholder="Nh???p email">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3">
                                   <div class="form-group">
                                       <span class="text">S??? CMND/CCCD/HC:</span> <span class="text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $So_cmndErr; ?> </span>
                                       <input type="text" class="form-control" name="So_cmnd" placeholder="Nh???p s??? CMND/CCCD/HC">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3">
                                   <div class="form-group">
                                       <span class="text">S??? th??? BHYT:</span><span class="text-danger">
                                           (*)</span>:
                                       <span class="text-danger"><?php echo $So_the_bhytErr; ?> </span>
                                       <input type="text" class="form-control" name="So_the_bhyt" placeholder="Nh???p s??? th??? BHYT">
                                   </div>
                               </div>
                               
                               <div class="col-12 col-sm-6 col-md-3 quoctich">
                                   <div class="form-group">
                                       <span class="text_nationality">Qu???c t???ch</span> <span class="quocgia text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $Quoc_tichErr; ?> </span>
                                       <input type="text" class="form-control" name="Quoc_tich" placeholder="Nh???p qu???c t???ch">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3 tinhthanh">
                                   <div class="form-group">
                                       <span class="text_province">T???nh th??nh</span> <span class="tinhthanh text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $Tinh_thanhErr; ?> </span>
                                       <input type="text" class="form-control" name="Tinh_thanh" placeholder="Nh???p t???nh/th??nh ph???">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3 quanhuyen">
                                   <div class="form-group">
                                       <span class="text_district">Qu???n huy???n</span> <span class="quanhuyen text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $Quan_huyenErr; ?> </span>
                                       <input type="text" class="form-control" name="Quan_huyen" placeholder="Nh???p qu???n/huy???n">
                                   </div>
                               </div>
                               <div class="col-12 col-sm-6 col-md-3 xaphuong">
                                   <div class="form-group">
                                       <span class="text_ward">X?? ph?????ng</span> <span class="xaphuong text-danger"> (*)</span>:
                                       <span class="text-danger"><?php echo $Xa_phuongErr; ?> </span>
                                       <input type="text" class="form-control" name="Xa_phuong" placeholder="Nh???p x??/ph?????ng/th??? tr???n">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">S??? nh??, t??n ???????ng</span><span class="text-danger">
                                           (*)</span>:
                                           <span class="text-danger"><?php echo $Sonha_tenduongErr; ?> </span>
                                           <input type="text" name="Sonha_tenduong" class="form-control" placeholder="S??? nh??, t??n ???????ng">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">D??n t???c:</span>
                                           <input type="text" name="Dan_toc" class="form-control" placeholder="D??n t???c">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Ngh??? Nghi???p</span>
                                           <input type="text" name="Nghe_nghiep" class="form-control" placeholder="Ngh??? Nghi???p">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">????n v??? c??ng t??c:</span>
                                           <input type="text" name="Don_vi_cong_tac" class="form-control" placeholder="????n v??? c??ng t??c">
                                   </div>
                               </div>
                               <div class="col-12">
                                   <div class="form-group">
                                       <span class="text">Nh??m ??u ti??n:</span> <span class="quocgia text-danger"> (*)</span>:
                                       <select class="form-control" name="Nhom_uu_tien">
                                            <option class="text" value="1">1. Ng?????i l??m vi???c trong c??c c?? s??? y t???, ng??nh y t??? (c??ng l???p v?? t?? nh??n)</option>
                                            <option class="text" value="2" >2. Ng?????i tham gia ph??ng ch???ng d???ch (Th??nh vi??n Ban ch??? ?????o ph??ng, ch???ng d???ch c??c c???p, ng?????i l??m vi???c ??? c??c khu c??ch ly, l??m nhi???m v??? truy v???t, ??i???u tra d???ch t???, t??? Covid d???a v??o c???ng ?????ng, t??nh nguy???n vi??n, ph??ng vi??n???)</option>
                                            <option class="text" value="3">3. L???c l?????ng Qu??n ?????i</option>
                                            <option class="text" value="4">4. L???c l?????ng C??ng an</option>
                                            <option class="text" value="5">5. Nh??n vi??n, c??n b??? ngo???i giao c???a Vi???t Nam v?? th??n nh??n ???????c c??? ??i n?????c ngo??i; ng?????i l??m vi???c trong c??c c?? quan Ngo???i giao, L??nh s???, c??c t??? ch???c qu???c t??? ho???t ?????ng t???i Vi???t Nam</option>
                                            <option class="text" value="6">6. H???i quan, c??n b??? l??m c??ng t??c xu???t nh???p c???nh</option>
                                            <option class="text" value="7">7. Ng?????i cung c???p d???ch v??? thi???t y???u: h??ng kh??ng, v???n t???i, du l???ch; cung c???p d???ch v??? ??i???n, n?????c</option>
                                            <option class="text" value="8">8. Gi??o vi??n, ng?????i l??m vi???c, h???c sinh, sinh vi??n t???i c??c c?? s??? gi??o d???c, ????o t???o; l???c l?????ng b??c s??? tr???; ng?????i l??m vi???c t???i c??c c?? quan, ????n v??? h??nh ch??nh; c??c t??? ch???c h??nh ngh??? lu???t s??, c??ng ch???ng, ?????u gi????? th?????ng xuy??n ti???p x??c v???i nhi???u ng?????i</option>
                                            <option class="text" value="9">9. Ng?????i m???c c??c b???nh m???n t??nh; Ng?????i tr??n 65 tu???i</option>
                                            <option class="text" value="10">10. Ng?????i sinh s???ng t???i c??c v??ng c?? d???ch</option>
                                            <option class="text" value="11">11. Ng?????i ngh??o, c??c ?????i t?????ng ch??nh s??ch x?? h???i</option>
                                            <option class="text" value="12">12. Ng?????i ???????c c?? quan nh?? n?????c c?? th???m quy???n c??? ??i c??ng t??c, h???c t???p, lao ?????ng ??? n?????c ngo??i ho???c c?? nhu c???u xu???t c???nh ????? c??ng t??c, h???c t???p v?? lao ?????ng ??? n?????c ngo??i; chuy??n gia n?????c ngo??i l??m vi???c t???i Vi???t Nam</option>
                                            <option class="text" value="13">13. C??c ?????i t?????ng l?? ng?????i lao ?????ng, th??n nh??n ng?????i lao ?????ng ??ang l??m vi???c t???i c??c doanh nghi???p (bao g???m c??? doanh nghi???p trong khu c??ng nghi???p, khu ch??? xu???t, doanh nghi???p kinh doanh v???n t???i, t??n d???ng, du l???ch???), c?? s??? kinh doanh d???ch v??? thi???t y???u nh?? c??c c?? s??? l??u tr??, ??n u???ng, ng??n h??ng, ch??m s??c s???c kh???e, d?????c, v???t t?? y t?????? c?? s??? b??n l???, b??n bu??n, ch???, c??ng tr??nh x??y d???ng, ng?????i d??n ??? v??ng, khu du l???ch</option>
                                            <option class="text" value="14">14. C??c ch???c s???c, ch???c vi???c c??c t??n gi??o</option>
                                            <option class="text" value="15">15. Ng?????i lao ?????ng t??? do</option>
                                            <option class="text" value="16" selected="selected">16. C??c ?????i t?????ng kh??c theo Quy???t ?????nh c???a B??? tr?????ng B??? Y t??? ho???c Ch??? t???ch ???y ban nh??n d??n t???nh, th??nh ph??? v?? ????? xu???t c???a c??c ????n v??? vi???n tr??? v???c xin cho B??? Y t???</option>
                                        </select>
                                   </div>
                                   <span class="text_note_1 text-primary font-weight-bold"><b>Th??ng tin ????ng k?? ti??m ch???ng:</b></span>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Ng??y mu???n ???????c ti??m (d??? ki???n):</span>
                                       <input class="datetimepicker-input input_birthday form-control" name="Ngay_muon_tiem" type="date" placeholder="DD/MM/YYYY">
                                   </div>
                               </div> 
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Bu???i ti??m mong mu???n(d??? ki???n):</span>
                                        <select class="form-control" name="Buoi_muon_tiem">
                                            <option class="text" value="Bu???i s??ng t??? 7h-11h30">Bu???i s??ng t??? 7h-11h30</option>
                                            <option class="text" value="Bu???i chi???u t??? 13h-17h30" >Bu???i chi???u t??? 13h-17h30</option>
                                            <option class="text" value="C??? ng??y" selected="selected">C??? ng??y</option>
                                        </select>
                                   </div>
                               </div>

                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Ng??y ????  ti??m m??i 1 (n???u c??):</span>
                                       <input class="datetimepicker-input input_birthday form-control" name="Ngay_tiem_mui1" type="date" placeholder="DD/MM/YYYY">
                                   </div>
                               </div> 
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_address">Lo???i Vacxin ???? ti??m m??i 1(n???u c??):</span>
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
                                       <span class="text_note_1 text-primary font-weight-bold">??ng/b?? hi???n c?? ti???n s??? m???c b???nh ho???c c??c bi???n ch???ng hay bi???u hi???n n??o sau ????y kh??ng?</span><span class="text-danger"> (*)</span>:
                                       <div class="table-responsive mt-1">
                                           <table class="table table-bordered mb-0">
                                               <thead>
                                                   <tr>
                                                       <th class="text_symptoms">Ti???n s??? b???nh, bi???n ch???ng, d???u hi???u:</th>
                                                       <th width="15%" class="text-center">C??</th>
                                                       <th width="15%" class="text-center">Kh??ng</th>
                                                       <th width="15%" class="text-center">Kh??ng r??</th>
                                                   </tr>
                                               </thead>
                                               <tbody id="list-trieuchung">
                                           <tr>
                                               <td>1. Ti???n s??? ph???n v??? t??? ????? 2 tr??? l??n<span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_phanve" name="Tiensubenh_phanve" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_phanve" name="Tiensubenh_phanve" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_phanve" name="Tiensubenh_phanve" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>2. Ti???n s??? b??? COVID-19 trong v??ng 6 th??ng<span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_covid" name="Tiensubenh_covid" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_covid" name="Tiensubenh_covid" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_covid" name="Tiensubenh_covid" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>3. Ti???n s??? ti??m v???c xin kh??c trong 14 ng??y qua<span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensu_tiemvacxin" name="Tiensu_tiemvacxin" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensu_tiemvacxin" name="Tiensu_tiemvacxin" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensu_tiemvacxin" name="Tiensu_tiemvacxin" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>4. Ti???n s??? suy gi???m mi???n d???ch, ung th?? giai ??o???n cu???i, c???t l??ch, x?? gan m???t b?? ...<span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_suygiammiendich" name="Tiensubenh_suygiammiendich" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_suygiammiendich" name="Tiensubenh_suygiammiendich" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_suygiammiendich" name="Tiensubenh_suygiammiendich" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>5. ??ang d??ng thu???c ???c ch??? mi???n d???ch, corticoid li???u ca (t????ng ??????ng ho???c h??n 2mg prednisolon/kg/ng??y trong ??t nh???t 7 ng??y) ho???c ??i???u tr??? h??a tr???, x??? tr??? <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Su_dung_thuoc_corticoid" name="Su_dung_thuoc_corticoid" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Su_dung_thuoc_corticoid" name="Su_dung_thuoc_corticoid" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Su_dung_thuoc_corticoid" name="Su_dung_thuoc_corticoid" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>6. B???nh c???p t??nh <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_captinh" name="Tiensubenh_captinh" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_captinh" name="Tiensubenh_captinh" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_captinh" name="Tiensubenh_captinh" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>7. Ti???n s??? b???nh m???n t??nh, ??ang ti???n tri???n <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh" name="Tiensubenh_mantinh" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh" name="Tiensubenh_mantinh" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh" name="Tiensubenh_mantinh" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>8. Ti???n s??? b???nh m???n t??nh ???? ??i???u tr??? ???n <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh_dadieutri" name="Tiensubenh_mantinh_dadieutri" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh_dadieutri" name="Tiensubenh_mantinh_dadieutri" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_mantinh_dadieutri" name="Tiensubenh_mantinh_dadieutri" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>9. ??ang mang thai, ph??? n??? ??ang nu??i con b???ng s???a m??? <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Dang_mang_thai" name="Dang_mang_thai" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Dang_mang_thai" name="Dang_mang_thai" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Sot" name="Sot" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>10. ????? tu???i: ???65 tu???i <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Do_tuoi_tren_65" name="Do_tuoi_tren_65" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Do_tuoi_tren_65" name="Do_tuoi_tren_65" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Do_tuoi_tren_65" name="Do_tuoi_tren_65" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>11. Ti???n s??? r???i lo???n ????ng m??u/c???m m??u ho???c ??ang d??ng thu???c ch???ng ????ng <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_dongmau" name="Tiensubenh_dongmau" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_dongmau" name="Tiensubenh_dongmau" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_dongmau" name="Tiensubenh_dongmau" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                                                                      
                                           <tr>
                                               <td>12. Ti???n s??? d??? ???ng v???i c??c d??? nguy??n kh??c <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_diung" name="Tiensubenh_diung" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_diung" name="Tiensubenh_diung" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Tiensubenh_diung" name="Tiensubenh_diung" class="radio-trieuchung" value="Kh??ng r??"></label>
                                               </td>
                                           </tr>
                                           </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
               
               
                               <div class="col-12">
                                   <div class="mb-1 d-none thongtinthem">
                                       <span class="text_note text-primary font-weight-bold" translate="vui_long_cung_cap_them_chi_tiet_trieu_chung_dich_te">Vui l??ng cung c???p th??m th??ng tin tri???u ch???ng, d???ch t???, l???ch s??? di chuy???n</span><span class="text-danger"> (*)</span>:
                                   </div>
                                   <div class="form-group">
                                       <textarea rows="2" name="Tiensubenh_khac" class="form-control" placeholder="Vui l??ng cung c???p th??m th??ng tin v??? ti???n s??? b???nh ho???c tri???u ch???ng hay d???u hi???u kh??c n???u c??"></textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-12 my-3 text-center">
                                   <div block-bind="toolbar" style="margin-left:22%;"><div class="toolbar"><div class="btn-group toolbar-group w-50"><button type="submit" name = "submit" class="btn btn-primary width-sm ml-1">X??c nh???n g???i th??ng tin</button></div></div></div>
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
                     <h1 class="news_taital">TIN T???C M???I NH???T</h1>
                     <p class="news_text">Nh???ng th??ng tin c???n bi???t v??? b???nh do virus Corona. Nh???ng di???n bi???n v??? t??nh h??nh d???ch b???nh ???? v?? ??ang di???n ra tr??n to??n th??? gi???i. Nh???ng th??ng tin v??? ph??ng ch???ng d???ch v?? vacxin...</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/news-img.png"></div>
                           <h2 class="design_text">Coronavirus l?? lo???i virus nguy hi???m</h2>
                           <p class="lorem_text">Corona l?? m???t h??? virus l???n, trong ???? m???t s??? ch???ng c?? kh??? n??ng g??y b???nh khi x??m nhi???m t??? ?????ng v???t sang ng?????i, s??? kh??c ch??? x??m nhi???m v?? t???n t???i ??? c??c lo??i ?????ng v???t bao g???m l???c ????, m??o v?? d??i. ????i khi virus corona t??? ?????ng v???t ti???n h??a ????? l??y sang ng?????i ????? r???i sau ???? l??y t??? ng?????i sang ng?????i...</p>
                           <div class="read_btn"><a href="covid.html">T??M HI???U TH??M</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                    <h1 class="news_taital">TIN T???C M???I NH???T</h1>
                     <p class="news_text">Nh???ng th??ng tin c???n bi???t v??? b???nh do virus Corona. Nh???ng di???n bi???n v??? t??nh h??nh d???ch b???nh ???? v?? ??ang di???n ra tr??n to??n th??? gi???i. Nh???ng th??ng tin v??? ph??ng ch???ng d???ch v?? vacxin...</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/dienbien.jpg"></div>
                           <h2 class="design_text">Di???n bi???n d???ch b???nh ??? Vi???t Nam</h2>
                           <p class="lorem_text">B???n tin s??ng 7/6 c???a B??? Y t??? cho bi???t c?? th??m 44 ca m???c COVID-19 trong n?????c t???i 4 t???nh, th??nh ph???: B???c Giang 24, B???c Ninh 6, TPHCM 12 ?????u li??n quan ?????n nh??m truy???n gi??o Ph???c H??ng v?? H?? Nam 2. Vi???t Nam hi???n c?? 8.791 b???nh nh??n.</p>
                           <div class="read_btn"><a href="dienbiendichbenh.html">T??M HI???U TH??M</a></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                    <h1 class="news_taital">TIN T???C M???I NH???T</h1>
                     <p class="news_text">Nh???ng th??ng tin c???n bi???t v??? b???nh do virus Corona. Nh???ng di???n bi???n v??? t??nh h??nh d???ch b???nh ???? v?? ??ang di???n ra tr??n to??n th??? gi???i. Nh???ng th??ng tin v??? ph??ng ch???ng d???ch v?? vacxin...</p>
                     <div class="news_section_2 layout_padding">
                        <div class="box_main">
                           <div class="image_1"><img src="images/tiemvacxin.jpg"></div>
                           <h2 class="design_text">T??nh h??nh ti??m vacxin ph??ng ng???a Covid-19</h2>
                           <p class="lorem_text">TPHCM ???? ti??m ???????c h??n 6,2 tri???u li???u vaccine (trong ???? 5,8 tri???u ng?????i ???? ti??m m??i 1, s??? c??n l???i ti??m ????? 2 m??i). ?????ng Nai ???? ti??m 981.413 li???u tr??n t???ng s??? g???n 1,8 tri???u li???u ???????c ph??n b???. H?? N???i ???? ti??m ???????c h??n 3,1 tri???u li???u vaccine...</p>
                           <div class="read_btn"><a href="tinhhinhvacxin.html">T??M HI???U TH??M</a></div>
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
                    <h2 class="useful_text">N???I DUNG</h2>
                    <div class="footer_menu">
                       <ul>
                          <li><a href="index.html">Trang Ch???</a></li>
                          <li><a href="trieuchung.html">Tri???u tr???ng b???nh</a></li>
                          <li><a href="phongngua.html">Ph??ng ng???a b???nh</a></li>
                          <li><a href="xetnghiem.html">X??t Nghi???m, Test Nhanh</a></li>
                          <li><a href="tinhhinhvacxin.html">Ti??m ph??ng Vacxin</a></li>
                          <li><a href="bacsi.html">L??n ?????u trang...</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">TH??NG TIN TH??M</h2>
                    <p class="footer_text">Trang website ???????c t???o ra nh???m th??ng tin v??? d???ch b???nh Covid-19. C??c n???i dung bao g???m di???n bi???n t??nh h??nh d???ch b???nh Covid trong n?????c, c??c tri???u ch???ng b???nh, ph????ng ph??p ph??ng b???nh, x??t nghi???m v?? ti??m ng???a vacxin...</p>
                 </div>
                 <div class="col-lg-3 col-sm-6">
                    <h2 class="useful_text">TH??NG TIN LI??N H???</h2>
                    <div class="location_text">
                       <ul>
                          <li>
                             <a href="https://www.google.com/maps/d/u/0/viewer?ie=UTF8&t=m&oe=UTF8&msa=0&mid=1bhL0QOJQMXNfXtZ60fZ-mn4CfoA&ll=10.029129153612054%2C105.77126707117493&z=17"><i class="fa fa-map-marker" aria-hidden="true"></i>
                             <span class="padding_15">?????a ch???</span></a>
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
                    <h2 class="useful_text">?????I H???C C???N TH??</h2>
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
