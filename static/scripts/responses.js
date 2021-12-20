
// function getURL() {
//     alert("The URL of this page is: " + window.location.href);
// }
function getBotResponse(input) {

    // Loại bỏ thành phần số, dấu câu,ký tự đặc biệt, chữ in hoa
    // input = input.replace(/[^a-zA-Z]/g, "");
    input = input.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
    input = input.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
    input = input.replace(/ì|í|ị|ỉ|ĩ/g, "i");
    input = input.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
    input = input.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
    input = input.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
    input = input.replace(/đ/g, "d");
    input = input.replace(/À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ/g, "A");
    input = input.replace(/È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ/g, "E");
    input = input.replace(/Ì|Í|Ị|Ỉ|Ĩ/g, "I");
    input = input.replace(/Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ/g, "O");
    input = input.replace(/Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ/g, "U");
    input = input.replace(/Ỳ|Ý|Ỵ|Ỷ|Ỹ/g, "Y");
    input = input.replace(/Đ/g, "D");
    input = input.replace(/A/g,"a");
    input = input.replace(/B/g,"b");
    input = input.replace(/C/g,"c");
    input = input.replace(/D/g,"d");
    input = input.replace(/E/g,"e");
    input = input.replace(/F/g,"f");
    input = input.replace(/G/g,"g");
    input = input.replace(/H/g,"h");
    input = input.replace(/I/g,"i");
    input = input.replace(/J/g,"j");
    input = input.replace(/K/g,"k");
    input = input.replace(/L/g,"l");
    input = input.replace(/M/g,"m");
    input = input.replace(/N/g,"n");
    input = input.replace(/O/g,"o");
    input = input.replace(/P/g,"p");
    input = input.replace(/Q/g,"q");
    input = input.replace(/R/g,"r");
    input = input.replace(/S/g,"s");
    input = input.replace(/T/g,"t");
    input = input.replace(/U/g,"u");
    input = input.replace(/V/g,"v");
    input = input.replace(/W/g,"w");
    input = input.replace(/X/g,"x");
    input = input.replace(/Y/g,"y");
    input = input.replace(/Z/g,"z");
    input = input.replace(/ /g, "");
    input = input.replace(/[^a-zA-Z]/g, "");

    // Thay thế các từ trùng lặp
    input = input.replace(/covid/g,"");
    input = input.replace(/convid/g,"");
    input = input.replace(/virrus/g,"");
    input = input.replace(/virut/g,"");
    input = input.replace(/corona/g,"");
    input = input.replace(/khaibaoyte/g,"khaibao");

    input = input.replace(/nhiembenh/g,"mac");
    input = input.replace(/macbenh/g,"mac");
    input = input.replace(/dinhbenh/g,"mac");
    input = input.replace(/macnhat/g,"mac");
    
    input = input.replace(/tachai/g,"nguyhiem");
    input = input.replace(/cactachai/g,"nguyhiem");
    input = input.replace(/sunguyhiem/g,"nguyhiem");
    input = input.replace(/sunguyhiemcua/g,"nguyhiem");

    input = input.replace(/lagi/g,"");
    input = input.replace(/lacaigi/g,"");
    input = input.replace(/lasao/g,"");
    input = input.replace(/lavisao/g,"");
    input = input.replace(/visao/g,"");
    input = input.replace(/lanhuthenao/g,"");
    input = input.replace(/nhuthenao/g,"");
    input = input.replace(/nhunao/g,"");
    input = input.replace(/lalamsao/g,"");
    input = input.replace(/lamsaode/g,"");
    input = input.replace(/lamsao/g,"");
    input = input.replace(/lacachnao/g,"");
    input = input.replace(/cachnao/g,"");
    input = input.replace(/larasao/g,"");
    input = input.replace(/rasao/g,"");
    input = input.replace(/bangcachnao/g,"");
    input = input.replace(/ralamsao/g,"");
    input = input.replace(/taisao/g,"");
    input = input.replace(/tailamsao/g,"");
    input = input.replace(/phaikhong/g,"");
    input = input.replace(/lido/g,"");
    input = input.replace(/gikhong/g,"");
    input = input.replace(/laai/g,"");
    input = input.replace(/lakhinao/g,"");
    input = input.replace(/khinao/g,"");
    input = input.replace(/lucnao/g,"");
    input = input.replace(/dabaonhieu/g,"");
    input = input.replace(/baonhieunguoi/g,"");
    input = input.replace(/canbaonhieu/g,"");
    input = input.replace(/labaonhieu/g,"")
    input = input.replace(/cobaonhieu/g,"");;
    input = input.replace(/baonhieu/g,"");
    input = input.replace(/phailamgi/g,"");
    input = input.replace(/canlamgi/g,"");
    input = input.replace(/lamgi/g,"");
    input = input.replace(/cosaokhong/g,"");
    input = input.replace(/conguyhiemkhong/g,"");
    input = input.replace(/chotoibietve/g,"");
    input = input.replace(/chotoibiet/g,"");
    input = input.replace(/chotoihoive/g,"");
    input = input.replace(/chotoihoi/g,"");
    input = input.replace(/tudaura/g,"");
    input = input.replace(/tudauden/g,"");
    input = input.replace(/tudautoi/g,"");
    input = input.replace(/odaura/g,"");
    input = input.replace(/dodaura/g,"");

    
    
    
    

    input = input.replace(/xuatphat/g,"nguongoc");
    input = input.replace(/batnguon/g,"nguongoc");
    input = input.replace(/khoinguon/g,"nguongoc");
    input = input.replace(/noidautien/g,"nguongoc");
    input = input.replace(/xuathien/g,"nguongoc");
    input = input.replace(/noitiethay/g,"nguongoc");
    input = input.replace(/nguongoccua/g,"nguongoc");
    input = input.replace(/nguocgocdautien/g,"nguongoc");



    input = input.replace(/dauhieu/g,"trieuchung");
    input = input.replace(/bieuhien/g,"trieuchung");
    input = input.replace(/bienchung/g,"trieuchung");
    input = input.replace(/dacdiembenh/g,"trieuchung");
    input = input.replace(/hoichung/g,"trieuchung");
    input = input.replace(/trieuchungcua/g,"trieuchung");
    input = input.replace(/cactrieuchung/g,"trieuchung");

    input = input.replace(/laynhiem/g,"laylan");
    input = input.replace(/truyenbenh/g,"laylan");
    input = input.replace(/danbenh/g,"laylan");
    input = input.replace(/laytruyen/g,"laylan");
    input = input.replace(/laybenh/g,"laylan");
    input = input.replace(/dinhbenh/g,"laylan");
    input = input.replace(/lantruyen/g,"laylan");
    input = input.replace(/cachthuclaylan/g,"laylan");
    input = input.replace(/conduonglaylan/g,"laylan");
    input = input.replace(/cochelaylan/g,"laylan");
    input = input.replace(/cachlaylan/g,"laylan");
    input = input.replace(/motvaicachlaylan/g,"laylan");
    input = input.replace(/laylancua/g,"laylan");

    input = input.replace(/testnhanh/g,"xetnghiem");
    input = input.replace(/lamxetnghiem/g,"xetnghiem");
    input = input.replace(/dixetnghiem/g,"xetnghiem");
    input = input.replace(/kiemtraxetnghiem/g,"xetnghiem");
    input = input.replace(/diachi/g,"noi");
    input = input.replace(/diadiem/g,"noi");
    
    input = input.replace(/vacxincapphep/g,"vacxin");
    input = input.replace(/vacxinduoccapphep/g,"vacxin");
    input = input.replace(/trungquoc/g,"my");
    input = input.replace(/tiemnguavacxin/g,"tiem");
    input = input.replace(/tiemngua/g,"tiem");
    input = input.replace(/tiemphong/g,"tiem");
    input = input.replace(/chichngua/g,"tiem");
    input = input.replace(/tiemchichngua/g,"tiem");
    input = input.replace(/tiemvacxin/g,"tiem");
    input = input.replace(/dangkytiem/g,"tiem");
    input = input.replace(/muitiem/g,"mui");
    input = input.replace(/maymui/g,"mui");
    input = input.replace(/ditiemve/g,"ditiem");


    input = input.replace(/bimac/g,"bi");
    input = input.replace(/conguyco/g,"bi");
    input = input.replace(/ichloi/g,"loiich");
    input = input.replace(/bienthedelta/g,"bienthe");
    input = input.replace(/bienthedenta/g,"bienthe");
    input = input.replace(/cacloaibienthe/g,"bienthe");

    input = input.replace(/dienbien/g,"tinhhinh");
    input = input.replace(/tinhdenhomnay/g,"");
    input = input.replace(/tinhdennay/g,"");
    input = input.replace(/hiennay/g,"");
    input = input.replace(/hientai/g,"");
    input = input.replace(/tronghomnay/g,"");
    input = input.replace(/homnay/g,"");
    input = input.replace(/buanay/g,"");
    input = input.replace(/hiengio/g,"");
    input = input.replace(/ngaybaygio/g,"");
    input = input.replace(/baygio/g,"");
    input = input.replace(/ngaynay/g,"");
    input = input.replace(/ngaylucnay/g,"");
    input = input.replace(/lucnay/g,"");
    input = input.replace(/khoibenh/g,"xuatvien");
    input = input.replace(/chet/g,"tuvong");
    input = input.replace(/khongquakhoi/g,"tuvong");
    input = input.replace(/truonghop/g,"ca");

    input = input.replace(/daduoctiem/g,"datiem");

    input = input.replace(/dephongbenh/g,"phongbenh");
    input = input.replace(/baoveminh/g,"baove");
    input = input.replace(/baovenguoithan/g,"baove");
    input = input.replace(/baovegiadinh/g,"baove");
    input = input.replace(/baovebanthanvagiadinh/g,"baove");
    input = input.replace(/baovecongdong/g,"baove");


    // Hello
    if (input == "hello" || input == "hi"|| input == "chao"|| input == "xinchao"||
        input == "xinchaoban"|| input == "halo"|| input == "hii"|| input == "canhotro"||
        input == "hotro"|| input == "help"|| input == "giup"|| input == "giupdo"||
        input == "xinhotro"|| input == "cangiupdo"|| input == "xingiup"|| input == "helpme"||
        input == "coaikhong"|| input == "chaothanh"|| input == "hellothanh"|| input == "hithanh"||
        input == "xinchaothanh"|| input == "alo"|| input == "thanhoi"|| input == "giuptoi"||
        input == "canyouhelpme"|| input == "helo") {
        return "Chào bạn..Bạn cần giúp đỡ về vấn đề gì?";
        
        // Khai bao y te
    } else if (input == "giupdokhaibao" || input == "khaibao"|| input == "toimuonkhaibao"||
               input == "toicankhaibao"|| input == "khaibaoodau"|| input == "dekhaibao"||
               input == "lamthenaokhaibao"|| input == "lamthenaodekhaibao"|| input == "khai" ||
               input == "toicothekhaibaoodau" || input == "demakhaibao" || input == "trangkhaibao" ||
               input == "khaibaoonoidau" || input == "khaibaobangduongnao" || input == "chitoicachkhaibao" ||
               input == "giuptoikhaibao" || input == "chitoikhaibao" || input == "chitoicachkhaibao") {
        return "Bạn có thể khai báo y tế theo liên kết "+'<a href ="http://localhost/convid-master/khaibao.html"><u> tại đây.</u></a>';
    
        // Covid la gi
    } else if (input == "" || input == "benh" || input == "benhtudaura" ||
               input == "benhdodau" || input == "bi" || input == "nguyennhancobenh" ||
               input == "benh" || input == "nguyennhan" || input == "nguyennhanbenh" ||
               input == "tacnhangaybenh" || input == "tacnhanaynhiem" || input == "bibenh" ||
               input == "cobenh" || input == "tudauco" || input == "tudaucobenh" ||
               input == "dodau" || input == "la" || input == "latudaura" ||
               input == "bi" || input == "co" || input == "tudaura" ||
               input == "nguyennhandodau" || input == "nguyennhandodauco" || input == "laico" ||
               input == "saocobenh" || input == "tudaura" || input == "co" ||
               input == "benhtudauco" || input == "nguyennhancuabenhcovidtudau" || input == "tudaura"||
               input == "labenhtudaura" || input == "ladodau" || input == "latudau" ||
               input == "nguyennhanla" || input == "nguyennhanco" || input == "nguyennhanbi" ||
               input == "mac" || input == "nguyennhanmac" || input == "saomac" ||
               input == "timhieuve" || input == "no" || input == "nguoncoicua" ||
               input == "timhieuvebenh" || input == "thongtinve" || input == "thongtinvebenh" ||
               input == "cacthongtinve" || input == "cacthongtincovid" || input == "vebenh" ||
               input == "nguyennhanla" || input == "nguyennhangayra" || input == "nguyennhancua") {
        return "Bệnh do vi-rút corona (COVID-19) là một bệnh truyền nhiễm do vi-rút SARS-CoV-2 gây ra. Nó gây ra các biến chứng bệnh đường hô hấp cấp hoặc bệnh mãn tính và lây lan nhanh từ người sang người. Bạn có thể tìm hiểu thêm "+'<a href ="http://localhost/convid-master/covid.html"><u> tại đây.</u></a>';
    // Nguon goc covid
    } else if (input == "nguongoc" || input == "nguongocbenh" || input == "nguongocbenhdodau" ||
               input == "nguongoctudau" || input == "nguongocdodau" || input == "nguongocbenhtudau" ||
               input == "nguongoclatudau" || input == "nguongoclatunoinao" || input == "nguongoclatudautoi" || 
               input == "nguongocd" || input == "nguongoctudaura" || input == "nguongocnoidau" ||
               input == "nguongocladau" || input == "noinaocodautien" || input == "noicobenhdautien" ||
               input == "noicodautien" || input == "cotunoinao" || input == "cotu" ||
               input == "batdautunoinao" || input == "batdautu" || input == "tutrungquocphaikhong" ||
               input == "otrungquocphaikhong" || input == "cophaitutrungquocqua" || input == "cophaitutrungquocquakhong" ||
               input == "noidautienco" || input == "noicodautien" || input == "" ||
               input == "nguongoctunoinao" || input == "nguongolatudau" || input == "nguongocodau" ||
               input == "nguongoclaodau" || input == "nguongocdautienodau" || input == "nguongocdautienlaodau" ||
               input == "nguocgoclaodau" || input == "nguocgocla" || input == "noicobenhdautienla") {
        return "Virus corona được xác định trong một cuộc điều tra ổ dịch bắt nguồn từ khu chợ lớn chuyên bán hải sản và động vật ở Vũ Hán, tỉnh Hồ Bắc, Trung Quốc. 2019-nCoV là chủng virus mới chưa được xác định trước đó. Ngoài chủng coronavirus mới phát hiện này, đã có 6 chủng coronavirus khác được biết tới ngày nay có khả năng lây nhiễm ở người. Tìm hiểu thêm "+'<a href ="http://localhost/convid-master/covid.html"><u> tại đây.</u></a>';
        // Su nguy hiem cua covid
    } else if (input == "nguyhiem" || input == "conguyhiem" || input == "conguyhiemkhong" ||
               input == "connguyhiem" || input == "connguyhiemkhong" || input == "ratnguyhiem" ||
               input == "conginguyhiem" || input == "benhconguyhiem" || input == "benhconguyhiemkhong" ||
               input == "nguoimacconguyhiemkhong" || input == "macconguyhiemkhong" || input == "coginguyhiemkhong"||
               input == "coginguyhiem" || input == "coginguyhiemvay" || input == "benhcoginguyhiemvay"||
               input == "maccoginguyhiem" || input == "macconguyhiem" || input == "benhconguyhiemvay" ||
               input == "sunguyhiem" || input == "sunguyhiemcua" || input == "coquanguyhiem") {
        return "COVID-19 là căn bệnh nguy hiểm đe dọa nghiêm trọng đến sức khỏe người dân. Bệnh thường phát triển từ các triệu chứng nhẹ tới sốt nặng kéo dài, suy viêm hô hấp cấp tính. Nặng hơn có thể làm tổn thương các cơ quan như gan, tim, thận và gây nhiễm trùng thứ phát đến sốc nhiễm trùng... Đặc biệt rất nguy hiểm với người trên 65 tuổi. Bạn có thể tìm hiểu thêm "+'<a href ="http://localhost/convid-master/covid.html"><u> tại đây.</u></a>';
    //Bien the cua covid
    } else if (input == "bienthe" || input == "cacbienthe" || input == "bienthela" ||
               input == "cacbienthecua" || input == "nhungbienthe" || input == "nhungbienthecua" ||
               input == "bientheconguyhiemkhong" || input == "sunguyhiemcuabienthe" || input == "cacbienthenguyhiem" || 
               input == "nguycocuabienthe" || input == "cacnguycocuabienthe" || input == "bienthecolaynhiem" ||
               input == "bienthenguyhiem" || input == "cacloaibienthe" || input == "bienthecua" ||
               input == "bienthecolaynhiemkhong" || input == "cacloaibienthecua" || input == "motvaibienthecua") {
        return "Hiện nay đã xuất hiện biến thể của SARS-CoV-2 có tên là Delta gây lây nhiễm nhiều hơn và lây lan nhanh hơn các chủng ban đầu. Nó có khả năng lây lan cao hơn biến thể Alpha ban đầu và dễ lây lan nhanh do nó có tỉ lệ miễn dịch lại với các kháng thể chống lại nó khiến những người đã tiêm ngừa vẫn mắc bệnh và lây lan cho người khác. Tuy nhiên thời gian lây nhiễm của nó rút ngắn hơn và lượng vật chất di truyền thấp hơn nên có thể nó ít nguy hiểm cho cơ thể hơn ban đầu.";
        // Lay lan Covid
    } else if (input == "laylan" || input == "laylannhanh" || input == "conduonglaylan" ||
               input == "laylan" || input == "dauhieulaylan" || input == "cachthuclaylan" ||
               input == "nguyennhanhlaylan" || input == "nguongoclaylan" || input == "laynhiem" ||
               input == "saolaylan" || input == "laylancua" || input == "nhunglaylan" ||
               input == "nhungcachthuclaylan" || input == "conduonglaylan" || input == "nhungcachthulaylancua" ||
               input == "nhunglaylancua" || input == "conduonglaylancua" || input == "nhungdauhieulaylan" ||
               input == "nhungdauhieulaylan" || input == "saolaylannhanh" || input == "laylanthenao" ||
               input == "sulaylan" || input == "nhungconduonglaylancua" || input == "laylancua" ||
               input == "caclaylan" || input == "caclaylancua" || input == "vailaylancua") {
        return "Vi-rút corona (COVID-19) có thể lây từ miệng hoặc mũi của người bị nhiễm bệnh dưới dạng các giọt nhỏ khi họ ho, hắt hơi, nói chuyện, hát hoặc thở.. Bạn có thể tìm hiểu thêm "+'<a href ="http://localhost/convid-master/covid.html"><u> tại đây.</u></a>';
    // Nguy co mac covid
    } else if (input == "aimac" || input == "aicothemac" || input == "nhungaicothemac" ||
               input == "nhungaimac" || input == "aiconguycomac" || input == "nhungaiaiconguycomac" ||
               input == "aidemac" || input == "nguoimac" || input == "nguoinaodemac" || 
               input == "nhungaimac" || input == "nhungaicothe" || input == "nhungnguoicothemac" ||
               input == "ailacothemac" || input == "cacdoituongmac" || input == "cacdoituongdemac" ||
               input == "nguoimaccothela" || input == "nguoidemac" || input == "nguoicothemac" ||
               input == "nhungaicothebi" || input == "nhungaicotheco" || input == "aibi" ||
               input == "aicothebi" || input == "aicothebi" || input == "nhungaicothebi" ||
               input == "cacdoituongbi" || input == "cacdoituongmac" || input == "cacdoituongdemac" ||
               input == "cacdoituongcothemac" || input == "cacdoituongcothebi" || input == "cacdoituong") {
        return "Ai cũng có thể có nguy cơ mắc bệnh Covid nếu có tiếp xúc với người nhiễm bệnh. Nam giới có nguy cơ mắc cao hơn do thói quen ít quan tâm sức khỏe, không có thói quen rửa tay đúng cách cũng như thường xuyên hút thuốc lá và uống đồ có cồn. Người lớn tuối có biến chứng nghiêm trọng nhất trong khi người mắc bệnh nền có nguy cơ tử vong cao nhất. Trẻ em cũng có thể mắc covid nhưng khả năng nhẹ hơn do sức đề kháng và ít bệnh. ";
        // Trieuchungcovid
    } else if (input == "trieuchung" || input == "trieuchunggomnhunggi" || input == "nguoibenhcotrieuchunggi" ||
               input == "nguoibenhconhungtrieuchunggi" || input == "aiconguycomac" || input == "nhungaiconguycomac" ||
               input == "trieuchunglagomnhunggi" || input == "cactrieuchung" || input == "cactrieuchungcua" || 
               input == "trieuchungthuongthay" || input == "trieuchungthuongthaycua" || input == "cactrieuchungthuongthay" ||
               input == "cactrieuchungthuongthaycua" || input == "moivaitrieuchung" || input == "moivaitrieuchungcua" ||
               input == "cactrieuchungthuongthaycuagomnhunggi" || input == "motvaitrieuchungthuongthaycua" || input == "nhungnguoibenhcotrieuchunggi" ||
               input == "cactrieuchunghaygap" || input == "cactrieuchung" || input == "trieuchung") {
        return "Những người có nguy cơ mắc bệnh Covid thường có các triệu chứng: Sốt, ho, khó thở, mệt mỏi, đau đầu,...Biến chứng nặng hơn có thể gây viêm phổi nặng, suy hô hấp tiến triển, suy giảm miễn dịch và có nguy cơ gây tử vong đặc biệt với người mắc bệnh mãn tính. Bạn có thể tìm hiểu thêm "+'<a href ="http://localhost/convid-master/trieuchung.html"><u> tại đây.</u></a>';
    // Phong ngua covid
    } else if (input == "phongngua" || input == "cachphongngua" || input == "caccachphongngua" ||
               input == "phongbenh" || input == "cachphongbenh" || input == "caccanhphongbenh" ||
               input == "nguabenh" || input == "caccachnguabenh" || input == "cachphongbenh" || 
               input == "antoan" || input == "antoantruoccovid" || input == "cachantoantruoccovid" ||
               input == "baovebanthan" || input == "cachbaovebanthan" || input == "baove" ||
               input == "baoveantoan" || input == "baoveantoantruoc" || input == "baoveantoantruocbenh" ||
               input == "cachbaoveantoan" || input == "cachbaoveantoantruoc" || input == "cachbaoveantoantruocbenh" ||
               input == "bienphap" || input == "bienphapphongngua" || input == "bienphapnguabenh" ||
               input == "cacbienphap" || input == "cacbienphapphongngua" || input == "cacbienphapnguabenh" ||
               input == "k" || input == "bienphapk" || input == "k" ||
               input == "cacbienphapk" || input == "phongbenhk" || input == "phongnguabenhk" ||
               input == "bienphapkgomnhunggi" || input == "phongbenhkgomnhunggi" || input == "phongnguabenhkgomgi" ||
               input == "tuanthuk" || input == "kla" || input == "bienphapkla"||
               input == "phongngua" || input == "cachphongngua" || input == "phongnguabang") {
        return "Để chủ động phòng, chống dịch COVID-19 trong trạng thái “bình thường mới”, Bộ Y tế mong muốn và kêu gọi mỗi người dân Việt Nam cùng nhau thực hiện Chung sống an toàn với đại dịch COVID-19. Bộ Y tế gửi đến Bạn “Thông điệp 5K: Khẩu trang – Khử khuẩn – Khoảng cách – Không tụ tập – Khai báo y tế”. Tìm hiểu thêm "+'<a href ="http://localhost/convid-master/phongngua.html"><u> tại đây.</u></a>';
    // Xet nghiem la gi
    } else if (input == "xetnghiem" || input == "xetnghiem" || input == "canxetnghiem" ||
               input == "saophaixetnghiem" || input == "xetnghiemtudau" || input == "kiemtraxetnghiemtudau" ||
               input == "xetnghiemla" || input == "xetnghiemchobietdieugi" || input == "xetnghiemla") {
        return "Xét nghiệm Covid cho biết hiện tại quý vị có bị lây nhiễm hay không bằng cách lấy dịch thể khuếch đại axit nucleit (NAATs). Bạn có thể tìm hiểu thêm tại "+ '<a href ="http://localhost/convid-master/xetnghiem.html"><u> tại đây.</u></a>';
    // xet nghiem o dau
    } else if (input == "xetnghiemodau" || input == "xetnghiemonoinao" || input == "xetnghiemonoidau" ||
               input == "noinaocoxetnghiem" || input == "noinaocanxetnghiem" || input == "diadiemxetnghiem" ||
               input == "noixetnghiem" || input == "noixetnghiemodau" || input == "cacdiadiemxetnghiem" || 
               input == "cacvungxetnghiem" || input == "cacnoixetnghiem" || input == "toixetnghiemodau" ||
               input == "toimuonxetnghiem" || input == "toicothexetnghiemodau" || input == "dexetnghiem" ||
               input == "timnoixetnghiem" || input == "timnoixetnghiemodau" || input == "motvainoixetnghiem" ||
               input == "didaudexetnghiem" || input == "cantimnoixetnghiem" || input == "toicantimnoixetnghiem" ||
               input == "toicanlamxetnghiem" || input == "toimuonlamxetnghiem" || input == "toicanlamxetnghiemodau" ||
               input == "toimuonlamxetnghiemodau" || input == "toiphailamxetnghiemodau" || input == "noinaodexetnghiem" ||
               input == "toimuontimnoixetnghiem" || input == "toimuontimchoxetnghiem" || input == "cothexetnghiemodau" ||
               input == "noinaocothexetnghiem" || input == "toicothexetnghiemodau" || input == "noinaotoicothexetnghiem" ||
               input == "canxetnghiemodau" || input == "toicanxetnghiemodau" || input == "dixetnghiemodau" ||
               input == "toicothedixetnghiemodau" || input == "noinaotoicothedixetnghiem" || input == "toidixetnghiem") {
        return "Bạn có thể xét nghiệm Covid tại các cơ sở y tế gần nhất hoặc các bệnh viện, trung tâm y tế và các công tác xét nghiệm cộng đồng tại địa phương đang ở. Bạn có thể tìm hiểu thêm tại "+ '<a href ="http://localhost/convid-master/xetnghiem.html"><u> tại đây.</u></a>';
    // Chi phi xet nghiem
    } else if (input == "chiphixetnghiem" || input == "chiphixetnghiem" || input == "chiphixetnghiemlatien" ||
               input == "xetnghiemtontien" || input == "chiphixetnghiemtontien" || input == "xetnghiemcantien" ||
               input == "giacaxetnghiem" || input == "chiphicuaxetnghiem" || input == "chiphicuaxetnghiemla" || 
               input == "chiphicuaxetnghiemcan" || input == "xetnghiemcantien" || input == "xetnghiemcan" ||
               input == "xetnghiemcomackhong" || input == "xetnghiemcorekhong" || input == "xetnghiemcotontienkhong" ||
               input == "xetnghiemcocantienkhong" || input == "xetnghiemmattien" || input == "xetnghiemgcomattienkhong" ||
               input == "xetnghiemton" || input == "xetnghiemcantienvay" || input == "xetnghiemcotonnhieutienkhong") {
        return "Chi phí xét nghiệm cộng đồng là hoàn toàn miễn phí. Chi phí xét nghiệm dịch vụ nhanh/test nhanh tại các bệnh viện, cơ sở y tế khoảng 179.000VNĐ-350.000VNĐ. Với phương pháp PCR cho độ chính xác cao chi phí có thể lên đến 700.000VNĐ. Bạn có thể tìm hiểu thêm "+ '<a href ="http://localhost/convid-master/xetnghiem.html"><u> tại đây.</u></a>';
    // vacxin la gi
    } else if (input == "vacxingomgi" || input == "vacxin" || input == "cochevacxin" ||
               input == "cochehoatdongvacxin" || input == "vacxinhoatdong" || input == "vacxinhoatdong" ||
               input == "vacxinhoatdong" || input == "cachvacxinhoatdong" || input == "timhieuvacxin" || 
               input == "timhieuvevacxin" || input == "tiemhieucachhoatdongcuavacxin" || input == "cochehoatdongcuavacxin") {
        return "Vacxin là các RNA (mRNA) để dạy các tế bào cách tạo protein giúp kích hoạt phản ứng miễn dịch và cung cấp khả năng bảo vể từ bên trong cơ thể của chúng ta. Bạn có thể tìm hiểu thêm "+ '<a href ="http://localhost/convid-master/tiemphong.html"><u> tại đây.</u></a>';
    // cac loai vacxin
    } else if (input == "cacloaivacxin" || input == "cacloaivacxinduoctiem" || input == "cacloaivacxinduoctiemovietnam" ||
               input == "cacloaivacxinovietnam" || input == "coloaivacxin" || input == "coloaivacxinovietnam" ||
               input == "cacloaivacxintaivietnam" || input == "coloaivacxintaivietnam" || input == "cacloaivacxinduoctiemtaivietnam" || 
               input == "vacxingomnhungloainao" || input == "vacxincoloainao" || input == "vacxincoloai" ||
               input == "vacxincomayloai" || input == "vacxinovietnnamgomnhungloainao" || input == "vacxinovietnamcomayloai" ||
               input == "vacxincuamy" || input == "vacxincuamycoloainao" || input == "vacxincuamygomloainao" ||
               input == "vacxincuamycoloai" || input == "vacxincuaduccoloainao" || input == "vacxincuaducgomloainao" ||
               input == "vacxincuaduc" || input == "vacxincuamyconhungloainao" || input == "vacxincuaducconhungloainao" ||
               input == "vacxinvietnamgomnhungloainao" || input == "coloaimayvacxin" || input == "comayloaivacxin" ||
               input == "comayloaivacxinduoctiem" || input == "coloaivacxinduoctiem" || input == "conmayloaivacxin" ||
               input == "vailoaivacxin" || input == "loaivacxin" || input == "coloaivacxinovietnam" ||
               input == "motvailoaivacxin" || input == "coloaivacxintaivietnam" || input == "motvailoaivacxin" ||
               input == "motvailoaivacxintaivietnam" || input == "motvailoaivacxinhienco" || input == "motvailoaivacxinhiencoovietnam") {
        return "Hiện nay có 8 loại vacxin được cấp phép tại Việt Nam là: SINOVAC (Trung Quốc), JANSSEN (Mỹ), ASTRA ZECECA (Mỹ), SINOPHARM (Trung Quốc), PFIZER BIONTECH (Mỹ-Đức), NOVAVAX (Mỹ), SPUTNIK (Nga), MODERNA (Mỹ). Bạn có thể tìm hiểu thêm "+ '<a href ="http://localhost/convid-master/tiemphong.html"><u> tại đây.</u></a>';
    // dang ky tiem phong
    } else if (input == "tiem" || input == "cachtiem" || input == "tiemodau" ||
               input == "toicothetiem" || input == "toicothetiemodau" || input == "lamsaotiem" ||
               input == "tiem" || input == "cachdetiem" || input == "toimuontiem" || 
               input == "tiem" || input == "noitiem" || input == "noitiemodau" ||
               input == "toicanditiem" || input == "toimuonditiem" || input == "toicanditiem" ||
               input == "toicantiem" || input == "diadiemtiem" || input == "noicothetiem" ||
               input == "diachitiem" || input == "diadiemtiemodau" || input == "diachitiemodau" ||
               input == "noicothetiemodau" || input == "diadiemdetiem" || input == "diachidetiem" ||
               input == "muonditiemodau" || input == "motvainoidetiem" || input == "motvainoitiem" ||
               input == "chitoitiem" || input == "chitoicachtiem" || input == "chitoidiadiemtiem" ||
               input == "chitoinoitiem" || input == "chitoichotiem" || input == "toimuonditiemthiodauco") {
        return "Bạn có thể đăng ký tiêm ngừa vacxin tại các cơ sở y tế địa phương hoặc trang tiêm chủng quốc gia https://tiemchungcovid19.gov.vn hoặc có thể đăng ký "+ '<a href ="http://localhost/convid-master/tiemphong.html"><u> tại đây.</u></a>';
    // trieu chung sau khi tiem
    } else if (input == "vacxincoantoankhong" || input == "tinhantoancuavacxin" || input == "vacxinconguyhiemkhong" ||
               input == "tiemcotacdungphukhong" || input == "tiemcoantoankhong" || input == "tiemcoantoan" ||
               input == "vacxincoantoan" || input == "tacdungphucuavacxin" || input == "tacdungphucuatiem" || 
               input == "tacdungphucuavacxingomnhunggi" || input == "tacdungphucuatiemgomnhunggi" || input == "phanungsautiem" ||
               input == "phanungsautiemgomnhunggi" || input == "saukhitiemcophanunggi" || input == "saukhitiembigi" ||
               input == "saokhitiemcothebigi" || input == "saokhitiemcothebibenhgi" || input == "saukhitiemcosaokhong" ||
               input == "saukhitiembigi" || input == "saokhitiemcothebigi" || input == "saokhitiemcothebibenhgi" ||
               input == "saukhitiemcosaokhong" || input == "saukhitiemcotacdungphukhong" || input == "saukhitiemcotacdungphukhong" ||
               input == "antoansautiem" || input == "antoancuatiem" || input == "phanungsautiemcogi" ||
               input == "bibenhsaukhitiem" || input == "bibenhsaukhitiem" || input == "bisotsaukhitiem" ||
               input == "bisotsaukhitiem" || input == "cactrieuchungsaukhitiem" || input == "cactrieuchungsaukhitiem" ||
               input == "saukhitiembibenhgi" || input == "saukhitiembibenhgi" || input == "cactrieuchunghaygapsaukhitiem" ||
               input == "cactrieuchunghaygapsaukhitiem" || input == "cactrieuchungthuonggapsaukhitiem" || input == "cactrieuchunghuonggapsaukhitiem") {
        return "Sau khi tiêm vacxin COVID-19, quý vị có thể có một số tác dụng phụ. Đây là những dấu hiệu bình thường cho thấy cơ thể quý vị đang xây dựng hàng rào bảo vệ. Tác dụng phụ từ việc tiêm chủng COVID-19, như mệt mỏi, đau đầu, hoặc ớn lạnh, có thể ảnh hưởng tới khả năng thực hiện các hoạt động hàng ngày của quý vị nhưng chúng sẽ biến mất trong vài ngày. Bạn có thể tìm hiểu thêm "+ '<a href ="http://localhost/convid-master/tiemphong.html"><u> tại đây.</u></a>';
    //Thong Tin tiem ngua
    } else if (input == "dotuoitiem" || input == "dotuoitiemgom" || input == "dotuoitiemla" ||
               input == "dotuoiphuhopdetiem" || input == "dotuoiphuhopdetiemgom" || input == "dotuoiphuhopdetiemla" ||
               input == "doituongtiem" || input == "doituongtiemla" || input == "doituongtiemgomnhungai" || 
               input == "cacdotuoitiem" || input == "cacdotuoiduoctiem" || input == "cacdoituongtiem" ||
               input == "cacdoituongduoctiem" || input == "dotuoicothetiem" || input == "dotuoiphuhoptiem" ||
               input == "doituongcothetiem" || input == "doituongphuhoptiem" || input == "aiduocuutientiem" ||
               input == "tuoidetiem" || input == "tuoideduoctiem" || input == "aiuutientiem" ||
               input == "nhungaiduocuutientiem" || input == "nhungaiuutientiem" || input == "toicoduoctiemkhong") {
        return "Hiện nay độ tuổi tiêm phù hợp là trên 16 tuổi. Có 16 cấp độ ưu tiên trong hệ thống tiêm ngừa trong đó ưu tiên các cán bộ, bác sĩ, y tá,..  những người trực tiếp tham gia tuyến đầu chống dịch. Ngoài ra người có độ tuổi trên 65 cũng thuộc đối tượng ưu tiên gấp. Bạn có thể tìm hiểu thêm "+ '<a href ="http://localhost/convid-master/tiemphong.html"><u> tại đây.</u></a>';
    } else if (input == "tiemcanmui" || input == "phaitiemmui" || input == "tiemmui" ||
               input == "tiemhetmui" || input == "phaitiemhetmui" || input == "cantiemmui" ||
               input == "phaitiemhaimui" || input == "tiemitnhatmui" || input == "cantiemitnhatmui" || 
               input == "phaitiemitnhatmui" || input == "tiemhaimui" || input == "tiemmatmui") {
        return "Mọi công dân đều phải tiêm ngừa vacxin ít nhất 2 mũi để có khả năng đề kháng lại virut Covid. Mỗi mũi tiêm cách nhau từ 4 tuần - 8 tuần tùy vào loại thuốc được tiêm trước đó.";
    //Truoc khi tiem can lam gi
    } else if (input == "truockhitiem" || input == "truockhiditiem" || input == "antoantruockhitiem" ||
               input == "antoankhitiem" || input == "phongnguakhitiem" || input == "anuongkhitiem" ||
               input == "khiditiem" || input == "khitiem" || input == "khiditiem" || 
               input == "luctiem" || input == "lucditiem" || input == "thoidiemtruockhitiem" ||
               input == "khisaptiem" || input == "khisapditiem" || input == "khisapduoctiem") {
        return "Trước khi tiêm bạn cần phải ăn uống no và đủ chất, đảm bảo khỏe mạnh trước khi tiêm và tránh sử dụng rượu bia có cồn hoặc chất kích thích. Khi đến cơ sở tiêm phải thực hiện các biện pháp phòng ngừa đeo khẩu trang và khai báo y tế đầy đủ, mang theo giấy CMND/CCCD/Hộ chiếu và tờ khai cam kết tiêm ngừa vacxin. Tải ứng dụng sổ theo dõi sức khỏe để khai báo thông tin cần thiết.";
    
    // Sau khi tiem
    } else if (input == "saukhiditiem" || input == "phanungsaukhiditiem" || input == "cacphanungsaukhiditiem" ||
               input == "saukhitiemolaibaolau" || input == "cactrieuchungsaukhiditiem" || input == "nhungphanungsaukhiditiem" ||
               input == "nhungtrieuchungsaukhiditiem" || input == "bibenhsaukhiditiem" || input == "cacbenhsaukhiditiem" || 
               input == "bisotsaukhiditiem" || input == "bidauhongsaukhiditiem" || input == "biphatbansaukhiditiem" ||
               input == "bidaudausaukhitiem" || input == "bidaunhucsaukhiditiem" || input == "nhungbenhsaukhiditiem" ||
               input == "cacdauhieusaukhiditiem") {
        return "Sau khi tiêm ngừa vacxin bạn phải ở lại ít nhất 30 phút để theo dõi, khi về nhà phải chủ động theo dõi trong 3 tuần xem có phản ứng gì không. Bạn có thể bị sốt, ho, nhức đầu, đau nhức cơ thể,.. là các phản ứng THÔNG THƯỜNG sau khi tiêm. Nhưng nếu bạn bị các triệu chứng như tê lưỡi, phát ban nổi mẫn đỏ tím tái da, đau ngứa họng và khản đặc, nôn mửa khó thở, cơ thể yếu ớt thì hãy liên hệ cơ sở y tế gần nhất vì đó là các triệu chứng NGHIÊM TRỌNG.";
    // Loi ich cua vacxin
    } else if (input == "loiichcuavacxin" || input == "loiichcuaviectiem" || input == "loiichtiem" ||
               input == "saukhitiemcoloiichgi" || input == "cacloiichcuavacxin" || input == "cacloiichcuaviectiem" ||
               input == "cacvacxincoloiichgi" || input == "tiemcoloiichgi" || input == "vacxincototkhong" || 
               input == "tiemcototkhong" || input == "loiichkhitiem" || input == "vacxintot") {
        return "Các vắc-xin COVID-19 có hiệu quả. Chúng có thể giúp bảo vệ quý vị và chống sự lây lan của vi-rút gây bệnh COVID-19.Các vắc-xin COVID-19 cũng giúp bạn không mắc bệnh nghiêm trọng nếu nhiễm COVID-19. Tự mình tiêm phòng cũng giúp bảo vệ những người xung quanh, đặc biệt là những người có nhiều nguy cơ mắc bệnh nặng do COVID-19. Tìm hiểu thêm "+ '<a href ="http://localhost/convid-master/tiemphong.html"><u> tại đây.</u></a>';
    } else if (input == "tinhhinhmac" || input == "socamac" || input == "tinhhinhsocamac" ||
               input == "tinhhinhnhiem" || input == "tongsocamac" || input == "tongsocanhiem" ||
               input == "tinhhinhmac" || input == "socakhoibenh" || input == "socaxuatvien" || 
               input == "tinhhinhkhoibenh" || input == "nguoikhoibenh" || input == "xuatvien" ||
               input == "nguoixuatvien" || input == "tinhhinhxuatvien" || input == "caccaxuatvien" ||
               input == "songuoixuatvien" || input == "songuoidaxuatvien" || input == "caccaxuatvien" ||
               input == "caccatuvong" || input == "caccadatuvong" || input == "socatuvong" ||
               input == "socadatuvong" || input == "nhungcatuvong" || input == "songuoituvong") {
        return "Từ ngày 27/4/2021 đến nay, Việt Nam ghi nhận 923.451 ca nhiễm COVID-19, trong đó có 819.248 bệnh nhân đã được công bố khỏi bệnh. Các địa phương ghi nhận số nhiễm tích lũy cao trong đợt dịch này: TP. Hồ Chí Minh (433.069 ca), Bình Dương (233.740 ca), Đồng Nai (66.436 ca), Long An (34.947 ca), Tiền Giang (16.807 ca). Tổng số ca tử vong do COVID-19 tại Việt Nam tính đến nay là 22.135 ca, chiếm tỷ lệ 2,4% so với tổng số ca nhiễm. ";
    } else if (input == "socaxetnghiem" || input == "tongcaxetnghiem" || input == "tongsocaxetnghiem" ||
               input == "tinhhinhxetnghiem" || input == "soluotxetnghiem" || input == "tongsoluotxetnghiem" ||
               input == "daxetnghiemnguoi" || input == "daxetnghiemmaynguoi" || input == "solanxetnghiem" || 
               input == "canuocdaxetnghiem" || input == "soluotdaxetnghiem" || input == "socadaxetnghiem" ||
               input == "tongsocadaxetnghiem" || input == "tongcadaxetnghiem" || input == "tongketsocaxetnghiem") {
        return "Trong 24 giờ qua đã thực hiện 100.672 xét nghiệm cho 170.665 lượt người. Số lượng xét nghiệm từ 27/4/2021 đến nay đã thực hiện 22.305.493 mẫu cho 60.535.102 lượt người.";
    } else if (input == "soluongtiem" || input == "soluongtiem" || input == "datiem" ||
               input == "datiemlieuvacxin" || input == "tongsoluongdatiem" || input == "tongsonguoitiem" ||
               input == "nguoitiem" || input == "nguoidatiem" || input == "nguoithamgiatiem" || 
               input == "nguoidathamgia" || input == "somuitiem" || input == "tongsomuitiem" ||
               input == "songuoidatiem" || input == "tongsonguoidatiem" || input == "soluotiem" ||
               input == "soluotnguoitiem" || input == "sovacxindatiem" || input == "solieudatiem" ||
               input == "soluotvacxindatiem" || input == "songuoidathamgiatiem" || input == "sovacxindaduoctiem") {
        return "Trong ngày 31/10 có 553.475 liều vaccine phòng COVID-19 được tiêm. Như vậy, tổng số liều vắc xin đã được tiêm là 81.929.875 liều, trong đó tiêm 1 mũi là 57.332.644 liều, tiêm mũi 2 là 24.597.231 liều.";
    } else if (input == "loikhuyen" || input == "chotoiloikhuyen" || input == "toicanloikhuyen" ||
               input == "loikhuyenphongbenh" || input == "cachphongbenhhieuqua" || input == "chotoiloikhuyenphongbenh" ||
               input == "coloikhuyen" || input == "loikhuyendephongbenh" || input == "phongbenhcan" || 
               input == "cachtranhbenh" || input == "cachtranhxabenh" || input == "cachnebenh" ||
               input == "canphongbenh" || input == "nenphongbenh" || input == "cacviecdephongbenh") {
        return "Lời khuyên từ bác sĩ để bảo vệ bản thân: Giữ ấm cơ thể, vệ sinh cá nhân, rửa tay thường xuyên bằng xà phòng, súc họng bằng nước sát khuẩn miệng trước khi đi ngủ, sau khi ngủ dậy cũng như trước và sau khi tiếp xúc với cộng đồng cư dân đông đúc để dự phòng nhiễm bệnh. Luôn luôn che miệng và mũi khi ho hoặc hắt hơi bằng khăn vải hoặc khăn tay để làm giảm phát tán các dịch tiết đường hô hấp. Hạn chế tiếp xúc với chó mèo và các động vật nuôi khác...";
    } else if (input == "baove" || input == "debaove" || input == "canbaove" ||
               input == "giupbaove" || input == "phongvabaove" || input == "phongnguavabaove" ||
               input == "giupdobaove" || input == "cangiupdobaove" || input == "cachbaove" || 
               input == "cachphongnguatruoc" || input == "caccachphongnguatruoc" || input == "caccachbaove" ||
               input == "giuptoibaove" || input == "canduocbaove" || input == "cachdebaove") {
        return "Bảo vệ bản thân và gia đình bằng cách tuân thủ các quy định về phòng chống dịch: Đeo khẩu trang khi ở nơi công cộng, rửa tay thường xuyên, tránh tiếp xúc hay đứng gần hơn 2 mét, không tiếp xúc quá đông trên 10 người và đặc biện thực hiện cách ly cộng đồng tốt và khai báo y tế khám sức khỏe thường xuyên.";
    } else if (input == "" || input == "" || input == "" ||
               input == "" || input == "" || input == "" ||
               input == "" || input == "" || input == "" || 
               input == "" || input == "" || input == "" ||
               input == "" || input == "" || input == "") {
        return "";
    } else if (input == "" || input == "" || input == "" ||
               input == "" || input == "" || input == "" ||
               input == "" || input == "" || input == "" || 
               input == "" || input == "" || input == "" ||
               input == "" || input == "" || input == "") {
        return "";
    } else { 
        return "Vui lòng đặt câu hỏi có liên quan hoặc bạn có thể thử câu hỏi khác tương tự !!";
    }
}