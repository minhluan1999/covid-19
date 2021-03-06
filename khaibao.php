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
        require_once("lib/data-khaibao.php");
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
                  <h2 class="about_tag" style="text-align: center;">TRANG KHAI B??O Y T???</h2>
                  <h4 style="text-align: center;color: red;"><i>KHAI B??O TH??NG TIN SAI L?? VI PH???M PH??P LU???T VI???T NAM V?? C?? TH??? X??? L?? H??NH S???</i></h4>
                  <div class="about_menu">
                     <ul>
                        <li><a style="color: black;" href="index.html">Trang ch??? ></a></li>
                        <li><a style="color: black;"> Trang khai b??o y t???</a></li>
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
                        <h1 class="covid_taital" style="text-align:center;">KHAI B??O Y T??? ?????N S??? Y T??? QU???C GIA</h1>
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
                        <div class="card px-1 py-2 p-sm-2 mt-2 list_khaibao">
                           <div class="row">
                                
                               <div class="col-12 d-flex flex-wrap">
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="cuatoi" value="B???nh nh??n/Ng?????i nh??" name="Loai_khai_bao" class="custom-control-input" checked="">
                                       <label class="custom-control-label" for="cuatoi">B???nh nh??n/Ng?????i nh??</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="nhanvien-benhvien" value="Nh??n vi??n b???nh vi???n" name="Loai_khai_bao" class="custom-control-input">
                                       <label class="custom-control-label" for="nhanvien-benhvien">Nh??n vi??n b???nh vi???n</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2">
                                       <input type="radio" id="khach" value="Di chuy???n c??ng t??c" name="Loai_khai_bao" class="custom-control-input">
                                       <label class="custom-control-label" for="khach">Di chuy???n c??ng t??c</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2 tiemchung_wrap">
                                       <input type="radio" id="student" value="Ti??m ch???ng v???c xin" name="Loai_khai_bao" class="custom-control-input">
                                       <label class="custom-control-label" for="student">Ti??m ch???ng v???c xin</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2 xetnghiem_wrap">
                                       <input type="radio" id="xetnghiem_covid19" value="X??t nghi???m Covid-19" name="Loai_khai_bao" class="custom-control-input">
                                       <label class="custom-control-label" for="xetnghiem_covid19">X??t nghi???m Covid-19</label>
                                   </div>
                                   <div class="custom-control custom-radio mt-2 mr-2 theodoi_tainha_wrap">
                                       <input type="radio" id="theodoi_suckhoe_tainha" value="Theo d??i s???c kh???e t???i nh??" name="Loai_khai_bao" class="custom-control-input">
                                       <label class="custom-control-label" for="theodoi_suckhoe_tainha">Theo d??i s???c kh???e t???i nh??</label>
                                   </div>
                                   <!-- <div class="custom-control custom-radio mt-1" style="flex: 1;text-align: right;padding-right: 10px;padding-left: 0;">
                                       <button class="btn btn-sm btn-outline-primary clear-data px-1"><i class="fe-refresh-cw"></i>
                                           <span class="type_clear" translate="nhap_lai">Nh???p l???i</span></button>
                                   </div> -->
                               </div>
                           </div>
                           <div class="row mt-1">
                               <div class="col-12">
                                   <div class="form-group">
                                       <span>H??? v?? t??n</span> <span class="text-danger">
                                           (*)</span>:
                                           <span class="text-danger"><?php echo $Ho_tenErr; ?> </span>
                                       <input type="text" class="form-control" name="Ho_ten" placeholder="H??? v?? t??n" style="text-transform:uppercase">
                                   </div>
                               </div>
                               <div class="col-12">
                                 <div class="form-group">
                                     <span class="tel" translate="so_dien_thoai">S??? ??i???n tho???i</span><span class="text-danger"> (*)</span>:
                                     <!-- <input type="number" class="form-control so_dien_thoai input_phone" placeholder="S??? ??i???n tho???i li??n l???c" data-bind="value:so_dien_thoai" pattern="[0-9]*" min="0" step="1" onkeypress='return event.charCode >= 48 && event.charCode <= 57 && this.value.length <= 11'
                                         title="Numbers only"> -->
                                         <span class="text-danger"><?php echo $So_dien_thoaiErr; ?> </span>
                                     <input type="tel" name="So_dien_thoai" class="form-control">
                                 </div>
                             </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_birthday">Ng??y sinh</span> <span class="text-danger">(*)</span>:
                                       <input class="datetimepicker-input input_birthday form-control" name="Ngay_sinh" type="date" placeholder="DD/MM/YYYY">
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="form-group">
                                       <span class="text_gender" translate="gioi_tinh">Gi???i t??nh</span> <span class="text-danger">(*)</span>:
                                       <div class="combobox-group">
                                           <div class="input-group combobox-control ">
                                           <div style="margin-left:10%"><label class="lb-radio"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="Nam" checked="">Nam</label></div>
                                           <div style="margin-left:20%"><label class="lb-radio"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="N???">N???</label></div>
                                           <div style="margin-left:20%"><input type="radio" id="Gioi_tinh" name="Gioi_tinh" value="Gi???i T??nh Kh??c">Gi???i T??nh Kh??c</label></div>
                                          
                                       </div>
                                       <div class="help-block" style="display: none;"></div></div>
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
                               <div class="col-12">
                                   <div class="form-group">
                                       <span class="text_address">S??? nh??, t??n ???????ng</span><span class="text-danger">
                                           (*)</span>:
                                           <span class="text-danger"><?php echo $Sonha_tenduongErr; ?> </span>
                                           <input type="text" name="Sonha_tenduong" class="form-control" placeholder="S??? nh??, t??n ???????ng">
                                   </div>
                               </div>         
                               <div class="col-12 wrap_trieuchung">
                                   <div class="form-group">
                                       <span class="text_note_1 text-primary font-weight-bold">??ng/b?? hi???n c?? nh???ng tri???u ch???ng hay bi???u hi???n n??o sau ????y kh??ng?</span><span class="text-danger"> (*)</span>:
                                       <div class="table-responsive mt-1">
                                           <table class="table table-bordered mb-0">
                                               <thead>
                                                   <tr>
                                                       <th class="text_symptoms">D???u hi???u</th>
                                                       <th width="15%" class="text-center text_yes" translate="co">C??</th>
                                                       <th width="15%" class="text-center text_no" translate="khong">Kh??ng</th>
                                                   </tr>
                                               </thead>
                                               <tbody id="list-trieuchung">
                                           <tr>
                                               <td>S???t <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Sot" name="Sot" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Sot" name="Sot" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>Ho <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Ho" name="Ho" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Ho" name="Ho" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>??au h???ng <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Dau_hong" name="Dau_hong" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Dau_hong" name="Dau_hong" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>M???t v???/M???t m??i <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Mat_vi" name="Mat_vi" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Mat_vi" name="Mat_vi" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>C???m gi??c m???t <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Met" name="Met" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Met" name="Met" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>Kh?? th??? <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Kho_tho" name="Kho_tho" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Kho_tho" name="Kho_tho" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                           </tr>
                                           
                                           <tr>
                                               <td>Tri???u ch???ng/d???u hi???u kh??c <span class="text-danger">(*)</span></td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Trieu_chung_khac" name="Trieu_chung_khac" class="radio-trieuchung" value="C??"></label>
                                               </td>
                                               <td class="text-center td-center">
                                                   <label class="lb-radio"><input type="radio" id="Trieu_chung_khac" name="Trieu_chung_khac" class="radio-trieuchung" value="Kh??ng" checked=""></label>
                                               </td>
                                           </tr>
                                           </tbody>
                                           </table>
                                       </div>
                                   </div>
               
                                   <div class="form-group xacnhan_dichte">
                                       <span class="text_note_2 text-primary font-weight-bold">Trong th???i gian v???a qua</span><span class="text-danger">
                                           (*)</span>:
                                       <div class="table-responsive mt-1">
                                           <table class="table table-bordered mb-0">
                                               <thead>
                                                   <tr>
                                                       <th><span class="text_epidemiological_factors" translate="yeu_to_dich_te">Y???u t??? d???ch t???</span> <span class="text-danger">(*)</span></th>
                                                       <th width="15%" class="text-center text_yes" translate="co">C??</th>
                                                       <th width="15%" class="text-center text_no" translate="khong">Kh??ng</th>
                                                   </tr>
                                               </thead>
                                               <tbody id="list-dichte">
                                                   <tr>
                                                       <td>1. B???n c?? ??ang m???c COVID-19 kh??ng <span class="text-danger">(*)</span></td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="F0" name="F0" class="radio-dichte" value="C??"></label>
                                                       </td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="F0" name="F0" class="radio-dichte" value="Kh??ng" checked=""></label>
                                                       </td>
                                                   </tr>
                                                   
                                                   <tr>
                                                       <td>2. Ti???p x??c g???n ca nhi???m, ca nghi nhi???m COVID-19 trong v??ng 14 ng??y qua <span class="text-danger">(*)</span></td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="F1_F2" name="F1_F2" class="radio-dichte" value="C??"></label>
                                                       </td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="F1_F2" name="F1_F2" class="radio-dichte" value="Kh??ng" checked=""></label>
                                                       </td>
                                                   </tr>
                                                   
                                                   <tr>
                                                       <td>3. ??i t??? qu???c gia ho???c v??ng l??nh th??? kh??c trong v??ng 14 ng??y qua <span class="text-danger">(*)</span></td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="Di_chuyen_xuyen_quoc_gia" name="Di_chuyen_xuyen_quoc_gia" class="radio-dichte" value="C??"></label>
                                                       </td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="Di_chuyen_xuyen_quoc_gia" name="Di_chuyen_xuyen_quoc_gia" class="radio-dichte" value="Kh??ng" checked=""></label>
                                                       </td>
                                                   </tr>
                                                   
                                                   <tr>
                                                       <td>4. B???n c?? k???t th??c c??ch ly t???p trung trong v??ng 14 ng??y qua kh??ng? <span class="text-danger">(*)</span></td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="Cach_ly" name="Cach_ly" class="radio-dichte" value="C??"></label>
                                                       </td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="Cach_ly" name="Cach_ly" class="radio-dichte" value="Kh??ng" checked=""></label>
                                                       </td>
                                                   </tr>
                                                   
                                                   <tr>
                                                       <td>5. Trong v??ng 14 ng??y qua, trong gia ????nh/c?? quan b???n c?? ai s???t hay ho kh??ng? <span class="text-danger">(*)</span></td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="Nguoi_than_mac_benh" name="Nguoi_than_mac_benh" class="radio-dichte" value="C??"></label>
                                                       </td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="Nguoi_than_mac_benh" name="Nguoi_than_mac_benh" class="radio-dichte" value="Kh??ng" checked=""></label>
                                                       </td>
                                                   </tr>
                                                   
                                                   <tr>
                                                       <td>6. B???n ???? xu???t vi???n do ??i???u tr??? COVID-19 trong v??ng 14 ng??y qua kh??ng? <span class="text-danger">(*)</span></td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="Da_dieu_tri_covid" name="Da_dieu_tri_covid" class="radio-dichte" value="C??"></label>
                                                       </td>
                                                       <td class="text-center td-center">
                                                           <label class="lb-radio"><input type="radio" id="Da_dieu_tri_covid" name="Da_dieu_tri_covid" class="radio-dichte" value="Kh??ng" checked=""></label>
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
                                       <textarea rows="2" name="Dau_hieu_khac" class="form-control" placeholder="Vui l??ng cung c???p th??m th??ng tin v??? tri???u ch???ng hay d???u hi???u kh??c n???u c??"></textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-12 my-3 text-center">
                                   <div block-bind="toolbar" style="margin-left:22%;"><div class="toolbar"><div class="btn-group toolbar-group w-50"><button type="submit" name = "submit" value="them" class="btn btn-primary width-sm ml-1">X??c nh???n g???i th??ng tin</button></div></div></div>
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
