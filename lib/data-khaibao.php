<?php
    $Loai_khai_bao = "";
    $Ho_ten = "";
    $So_dien_thoai = "";
    $Ngay_sinh = "";
    $Gioi_tinh = "";
    $Quoc_tich = "";
    $Tinh_thanh = "";
    $Quan_huyen = "";
    $Xa_phuong = "";
    $Sonha_tenduong = "";
    $Sot = "";
    $Ho = "";
    $Dau_hong = "";
    $Mat_vi = "";
    $Met = "";
    $Kho_tho = "";
    $Trieu_chung_khac = "";
    $F0 = "";
    $F1_F2 = "";
    $Di_chuyen_xuyen_quoc_gia = "";
    $Cach_ly = "";
    $Nguoi_than_mac_benh = "";
    $Da_dieu_tri_covid = "";
    $Dau_hieu_khac = "";

    $Ho_tenErr = "";
    $So_dien_thoaiErr = "";
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

    if (isset($_POST["submit"]) && (empty($Ho_tenErr)) && (empty($So_dien_thoaiErr)) && (empty($Quoc_tichErr)) && (empty($Tinh_thanhErr))&& (empty($Quan_huyenErr))&& (empty($Xa_phuongErr))&& (empty($Sonha_tenduongErr)) ) {
    $Loai_khai_bao = $_POST["Loai_khai_bao"];
    $_POST["Ho_ten"] = mb_strtoupper($_POST["Ho_ten"]);
    $Ho_ten = $_POST["Ho_ten"];
    $So_dien_thoai = $_POST["So_dien_thoai"];
    $Ngay_sinh = $_POST["Ngay_sinh"];
    $Gioi_tinh = $_POST["Gioi_tinh"];
    $Quoc_tich = $_POST["Quoc_tich"];
    $Tinh_thanh = $_POST["Tinh_thanh"];
    $Quan_huyen = $_POST["Quan_huyen"];
    $Xa_phuong = $_POST["Xa_phuong"];
    $Sonha_tenduong = $_POST["Sonha_tenduong"];
    $Sot = $_POST["Sot"];
    $Ho = $_POST["Ho"];
    $Dau_hong = $_POST["Dau_hong"];
    $Mat_vi = $_POST["Mat_vi"];
    $Met = $_POST["Met"];
    $Kho_tho = $_POST["Kho_tho"];
    $Trieu_chung_khac = $_POST["Trieu_chung_khac"];
    $F0 = $_POST["F0"];
    $F1_F2 = $_POST["F1_F2"];
    $Di_chuyen_xuyen_quoc_gia = $_POST["Di_chuyen_xuyen_quoc_gia"];
    $Cach_ly = $_POST["Cach_ly"];
    $Nguoi_than_mac_benh = $_POST["Nguoi_than_mac_benh"];
    $Da_dieu_tri_covid = $_POST["Da_dieu_tri_covid"];
    $Dau_hieu_khac = $_POST["Dau_hieu_khac"];
    
    $sql = "INSERT INTO khai_bao_y_te (Loai_khai_bao, Ho_ten, So_dien_thoai, Ngay_sinh, Gioi_tinh, Quoc_tich, Tinh_thanh, Quan_huyen, Xa_phuong, Sonha_tenduong, Sot, Ho, Dau_hong, Mat_vi, Met, Kho_tho, Trieu_chung_khac, F0, F1_F2, Di_chuyen_xuyen_quoc_gia, Cach_ly, Nguoi_than_mac_benh, Da_dieu_tri_covid, Dau_hieu_khac)
    VALUES ('$Loai_khai_bao', '$Ho_ten', '$So_dien_thoai', '$Ngay_sinh', '$Gioi_tinh', '$Quoc_tich', '$Tinh_thanh', '$Quan_huyen', '$Xa_phuong', '$Sonha_tenduong', '$Sot', '$Ho', '$Dau_hong', '$Mat_vi', '$Met', '$Kho_tho', '$Trieu_chung_khac', '$F0', '$F1_F2', '$Di_chuyen_xuyen_quoc_gia', '$Cach_ly', '$Nguoi_than_mac_benh', '$Da_dieu_tri_covid', '$Dau_hieu_khac')";
    mysqli_query($conn, $sql);
    echo "<script>alert('Gửi thông tin khai báo y tế thành công !!');</script>";
    }
?>