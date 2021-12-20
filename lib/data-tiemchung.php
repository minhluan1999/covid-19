<?php
    $Loai_dang_ky = "";
    $Mui_tiem = "";
    $Ho_ten = "";
    $Ngay_sinh = "";
    $Gioi_tinh = "";
    $So_dien_thoai ="";
    $Email ="";
    $So_cmnd ="";
    $So_the_bhyt ="";
    $Nghe_nghiep ="";
    $Don_vi_cong_tac ="";
    $Quoc_tich = "";
    $Tinh_thanh = "";
    $Quan_huyen = "";
    $Xa_phuong = "";
    $Sonha_tenduong = "";
    $Dan_toc = "";
    $Nhom_uu_tien = "";
    $Ngay_muon_tiem = "";
    $Buoi_muon_tiem = "";
    $Ngay_tiem_mui1 ="";
    $Loai_vacxin_mui1 ="";
    $Tiensubenh_phanve = "";
    $Tiensubenh_covid = "";
    $Tiensu_tiemvacxin = "";
    $Tiensubenh_suygiammiendich = "";
    $Su_dung_thuoc_corticoid = "";
    $Tiensubenh_captinh = "";
    $Tiensubenh_mantinh = "";
    $Tiensubenh_mantinh_dadieutri = "";
    $Dang_mang_thai = "";
    $Do_tuoi_tren_65 = "";
    $Tiensubenh_dongmau = "";
    $Tiensubenh_diung = "";
    $Tiensubenh_khac = "";


    $Ho_tenErr = "";
    $So_dien_thoaiErr = "";
    $EmailErr = "";
    $So_cmndErr = "";
    $So_the_bhytErr ="";
    $Quoc_tichErr = "";
    $Tinh_thanhErr = "";
    $Quan_huyenErr = "";
    $Xa_phuongErr = "";
    $Sonha_tenduongErr = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["Ho_ten"])) {
            $Ho_tenErr = "Họ và tên không được bỏ trống.";
        } else {
            $Ho_ten = input_data($_POST["Ho_ten"]);
            // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
            if (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]*$/",$Ho_ten)) {
                $Ho_tenErr = "Họ và tên chỉ được nhập chữ cái và khoảng trắng.";
            }
        }

        if (empty($_POST["So_dien_thoai"])) {
            $So_dien_thoaiErr = "Số điện thoại là bắt buộc.";
        } else {
            $So_dien_thoai = input_data($_POST["So_dien_thoai"]);
            // Kiểm tra xem số điện thoại đã đúng định dạng hay chưa 
            if (!preg_match ("/^[0-9]*$/", $So_dien_thoai) ) {
                $So_dien_thoaiErr = "Số điện thoại chỉ bao gồm số.";
            }
            //Kiểm tra độ dài của số điện thoại 
            if (strlen ($So_dien_thoai) != 10) {
                $So_dien_thoaiErr = "Số điện thoại hợp lệ có 10 ký tự.";
            }
        }

        if (empty($_POST["Email"])) {
            $EmailErr = "Cần nhập email để gửi thông tin.";
        }else {
            $Email = input_data($_POST["Email"]);
            if (!preg_match("/^[a-zA-Z][\\w-]+@([\\w]+\\.[\\w]+|[\\w]+\\.[\\w]{2,}\\.[\\w]{2,})$/", $Email) ) {
                $EmailErr = "Email chưa đúng định dạng.";
            }
        }

        if (empty($_POST["So_cmnd"])) {
            $So_cmndErr = "Số CMND/CCCD/HC là bắt buộc.";
        } else {
            $So_cmnd = input_data($_POST["So_cmnd"]);
            // Kiểm tra xem số điện thoại đã đúng định dạng hay chưa 
            if (!preg_match ("/^[0-9]*$/", $So_cmnd) ) {
                $So_cmndErr = "Số CMND/CCCD/HC chỉ bao gồm số.";
            }
            //Kiểm tra độ dài của số điện thoại 
            if ((strlen ($So_cmnd) <7) || (strlen ($So_cmnd) >20)) {
                $So_cmndErr = "Số CMND/CCCD/HC từ 7-20 số.";
            }
        }

        if (empty($_POST["So_the_bhyt"])) {
            $So_the_bhytErr = "Số thẻ bảo hiểm là cần thiết.";
        } else {
            $So_the_bhyt = input_data($_POST["So_the_bhyt"]);
            // Kiểm tra xem số điện thoại đã đúng định dạng hay chưa 
            if (!preg_match ("/^[0-9]*$/", $So_the_bhyt) ) {
                $So_the_bhytErr = "Số CMND/CCCD/HC chỉ bao gồm số.";
            }
            if ((strlen ($So_the_bhyt) <7) || (strlen ($So_the_bhyt) >20)) {
                $So_the_bhytErr = "Số thẻ BHYT chỉ từ 7-20 số.";
            }
        }

        if (empty($_POST["Quoc_tich"])) {
            $Quoc_tichErr = "Tên Quốc tịch không được bỏ trống.";
        } else {
            $Quoc_tich = input_data($_POST["Quoc_tich"]);
            // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
            if (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]*$/",$Quoc_tich)) {
                $Quoc_tichErr = "Tên Quốc tịch chỉ được nhập chữ cái và khoảng trắng.";
            }
        }

        if (empty($_POST["Tinh_thanh"])) {
            $Tinh_thanhErr = "Tên tỉnh thành không được bỏ trống.";
        } else {
            $Tinh_thanh = input_data($_POST["Tinh_thanh"]);
            // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
            if (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]*$/",$Tinh_thanh)) {
                $Tinh_thanhErr = "Tên tỉnh thành chỉ được nhập chữ cái và khoảng trắng.";
            }
        }

        if (empty($_POST["Quan_huyen"])) {
            $Quan_huyenErr = "Tên quận huyện không được bỏ trống.";
        } else {
            $Quan_huyen = input_data($_POST["Quan_huyen"]);
            // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
            if (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]*$/",$Quan_huyen)) {
                $Quan_huyenErr = "Tên quận huyện chỉ được nhập chữ cái và khoảng trắng.";
            }
        }

        if (empty($_POST["Xa_phuong"])) {
            $Xa_phuongErr = "Tên xã phường không được bỏ trống.";
        } else {
            $Xa_phuong = input_data($_POST["Xa_phuong"]);
            // Kiểm tra và chỉ cho phép nhập chữ và khoảng trắng 
            if (!preg_match("/^[a-zA-ZÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]*$/",$Xa_phuong)) {
                $Xa_phuongErr = "Tên xã phường chỉ được nhập chữ cái và khoảng trắng.";
            }
        }

        if (empty($_POST["Sonha_tenduong"])) {
            $Sonha_tenduongErr = "Số nhà và tên đường không được bỏ trống.";
        } else {
            $Sonha_tenduong = input_data($_POST["Sonha_tenduong"]);
        }
    }

    function input_data($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST["submit"]) && (empty($Ho_tenErr)) && (empty($So_dien_thoaiErr)) && (empty($EmailErr)) && (empty($So_cmndErr)) && (empty($So_the_bhytErr)) && (empty($Quoc_tichErr)) && (empty($Tinh_thanhErr)) && (empty($Quan_huyenErr)) && (empty($Xa_phuongErr)) && (empty($Sonha_tenduongErr)) ) {
        $Loai_dang_ky = $_POST["Loai_dang_ky"];
        $Mui_tiem = $_POST["Mui_tiem"];
        $_POST["Ho_ten"] = mb_strtoupper($_POST["Ho_ten"]);
        $Ho_ten = $_POST["Ho_ten"];
        $Ngay_sinh = $_POST["Ngay_sinh"];
        $Gioi_tinh = $_POST["Gioi_tinh"];
        $So_dien_thoai = $_POST["So_dien_thoai"];
        $Email = $_POST["Email"];
        $So_cmnd = $_POST["So_cmnd"];
        $So_the_bhyt = $_POST["So_the_bhyt"];
        $Nghe_nghiep = $_POST["Nghe_nghiep"];
        $Don_vi_cong_tac = $_POST["Don_vi_cong_tac"];
        $Quoc_tich = $_POST["Quoc_tich"];
        $Tinh_thanh = $_POST["Tinh_thanh"];
        $Quan_huyen = $_POST["Quan_huyen"];
        $Xa_phuong = $_POST["Xa_phuong"];
        $Sonha_tenduong = $_POST["Sonha_tenduong"];
        $Dan_toc = $_POST["Dan_toc"];
        $Nhom_uu_tien = $_POST["Nhom_uu_tien"];
        $Ngay_muon_tiem = $_POST["Ngay_muon_tiem"];
        $Buoi_muon_tiem = $_POST["Buoi_muon_tiem"];
        $Ngay_tiem_mui1 = $_POST["Ngay_tiem_mui1"];
        $Loai_vacxin_mui1 = $_POST["Loai_vacxin_mui1"];
        $Tiensubenh_phanve = $_POST["Tiensubenh_phanve"];
        $Tiensubenh_covid  = $_POST["Tiensubenh_covid"];
        $Tiensu_tiemvacxin = $_POST["Tiensu_tiemvacxin"];
        $Tiensubenh_suygiammiendich = $_POST["Tiensubenh_suygiammiendich"];
        $Su_dung_thuoc_corticoid = $_POST["Su_dung_thuoc_corticoid"];
        $Tiensubenh_captinh = $_POST["Tiensubenh_captinh"];
        $Tiensubenh_mantinh = $_POST["Tiensubenh_mantinh"];
        $Tiensubenh_mantinh_dadieutri = $_POST["Tiensubenh_mantinh_dadieutri"];
        $Dang_mang_thai = $_POST["Dang_mang_thai"];
        $Do_tuoi_tren_65 = $_POST["Do_tuoi_tren_65"];
        $Tiensubenh_dongmau = $_POST["Tiensubenh_dongmau"];
        $Tiensubenh_diung = $_POST["Tiensubenh_diung"];
        $Tiensubenh_khac = $_POST["Tiensubenh_khac"];
    
    // $sql = "INSERT INTO dang_ky_tiem_phong (Loai_dang_ky, Mui_tiem, Ho_ten, Ngay_sinh, Gioi_tinh, So_dien_thoai, Email, So_cmnd, So_the_bhyt, Nghe_nghiep, Don_vi_cong_tac, Quoc_tich, Tinh_thanh, Quan_huyen, Xa_phuong, Sonha_tenduong, Dan_toc, Nhom_uu_tien, Ngay_muon_tiem, Buoi_muon_tiem, Tiensubenh_phanve, Tiensubenh_covid, Tiensu_tiemvacxin, Tiensubenh_suygiammiendich, Su_dung_thuoc_corticoid, Tiensubenh_captinh, Tiensubenh_mantinh, Tiensubenh_mantinh_dadieutri, Dang_mang_thai, Do_tuoi_tren_65, Tiensubenh_dongmau, Tiensubenh_diung, Tiensubenh_khac)
    // VALUES ('$Loai_dang_ky', '$Mui_tiem', '$Ho_ten', '$Ngay_sinh', '$Gioi_tinh', '$So_dien_thoai',, '$Email', '$So_cmnd', '$So_the_bhyt', '$Nghe_nghiep', '$Don_vi_cong_tac' '$Quoc_tich', '$Tinh_thanh', '$Quan_huyen', '$Xa_phuong', '$Sonha_tenduong', '$Dan_toc', '$Nhom_uu_tien', '$Ngay_muon_tiem', '$Buoi_muon_tiem', '$Tiensubenh_phanve', '$Tiensubenh_covid', '$Tiensu_tiemvacxin', '$Tiensubenh_suygiammiendich', '$Su_dung_thuoc_corticoid', '$Tiensubenh_captinh', '$Tiensubenh_mantinh', '$Tiensubenh_mantinh_dadieutri', '$Dang_mang_thai', '$Do_tuoi_tren_65', '$Tiensubenh_dongmau', '$Tiensubenh_diung', '$Tiensubenh_khac')";
    // mysqli_query($conn, $sql);

        $sql = "INSERT INTO `dang_ky_tiem_phong` (`Loai_dang_ky`, `Mui_tiem`, `Ho_ten`, `Ngay_sinh`, `Gioi_tinh`, `So_dien_thoai`, `Email`, `So_cmnd`, `So_the_bhyt`, `Nghe_nghiep`, `Don_vi_cong_tac`, `Quoc_tich`, `Tinh_thanh`, `Quan_huyen`, `Xa_phuong`, `Sonha_tenduong`, `Dan_toc`, `Nhom_uu_tien`, `Ngay_muon_tiem`, `Buoi_muon_tiem`, `Ngay_tiem_mui1`, `Loai_vacxin_mui1`, `Tiensubenh_phanve`, `Tiensubenh_covid`, `Tiensu_tiemvacxin`, `Tiensubenh_suygiammiendich`, `Su_dung_thuoc_corticoid`, `Tiensubenh_captinh`, `Tiensubenh_mantinh`, `Tiensubenh_mantinh_dadieutri`, `Dang_mang_thai`, `Do_tuoi_tren_65`, `Tiensubenh_dongmau`, `Tiensubenh_diung`, `Tiensubenh_khac`) VALUES ('$Loai_dang_ky', '$Mui_tiem', '$Ho_ten', '$Ngay_sinh', '$Gioi_tinh', '$So_dien_thoai', '$Email', '$So_cmnd', '$So_the_bhyt', '$Nghe_nghiep', '$Don_vi_cong_tac', '$Quoc_tich', '$Tinh_thanh', '$Quan_huyen', '$Xa_phuong', '$Sonha_tenduong', '$Dan_toc', '$Nhom_uu_tien', '$Ngay_muon_tiem', '$Buoi_muon_tiem', '$Ngay_tiem_mui1', '$Loai_vacxin_mui1', '$Tiensubenh_phanve', '$Tiensubenh_covid', '$Tiensu_tiemvacxin', '$Tiensubenh_suygiammiendich', '$Su_dung_thuoc_corticoid', '$Tiensubenh_captinh', '$Tiensubenh_mantinh', '$Tiensubenh_mantinh_dadieutri', '$Dang_mang_thai', '$Do_tuoi_tren_65', '$Tiensubenh_dongmau', '$Tiensubenh_diung', '$Tiensubenh_khac')";
        mysqli_query($conn, $sql); 
        echo "<script>alert('Gửi thông tin đăng ký tiêm ngừa vacxin thành công !!');</script>";
    }
?>