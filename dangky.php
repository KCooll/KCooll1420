<!DOCTYPE html>
<html>
    <head>
        <title>Thanh toán</title>
        <meta charset="utf-8">      
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
        <div class="First">
            <div class="header">
                <a href="index.html"><img src="img/logo_hotel.png" alt="logo" id="logo_hotel"></a>
                <div class="menu">
                    <ul>
                        <li>
                            <button type="button" class="bt1"><a href="index.html">Trang chủ</a></button>
                        </li>
                        <li>
                            <button type="button" class="bt1"><a href="gioithieu.html">Giới thiệu</a></button>
                        </li>
                        <li>
                            <button type="button" class="bt1"><a href="quydinh.html">Quy định</a></button>
                        </li>
                        <li>
                            <button type="button" class="bt1"><a href="datphong.php">Đặt phòng</a></button>
                        </li>
                        <li>
                            <button type="button" class="bt1"><a href="thucdon.html">Thực đơn</a></button>
                        </li>
                        <li>
                            <button type="button" class="bt1"><a href="bosuutap.html">Bộ sưu tập</a></button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="Second">
            <div class="box-2">
                <img src="img/HD-Luxury-Resort-Wallpaper.jpg" alt="" id="hinh1">
                <div class="box-datphong2">
                <?php
                    // define variables and set to empty values
                    $hoten = $gioitinh = $ngaysinh = $sodienthoai = $cmnd = $email = $songuoi = $loaiphong  = $ngaynhan = $ngaytra = $sotaikhoan = $dichvuthem = $nganhang = "";
                    $thanhtoan = 0;
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $hoten = test_input($_POST["txtHoten"]);
                    $gioitinh = test_input($_POST["radGioitinh"]);
                    $ngaysinh = test_input($_POST["dateNgaysinh"]);
                    $sodienthoai = test_input($_POST["txtSodienthoai"]);
                    $cmnd = test_input($_POST["txtCmnd"]);
                    $email = test_input($_POST["e-mail"]);
                    $songuoi = test_input($_POST["radSonguoi"]);
                    $loaiphong = test_input($_POST["selphong"]);
                    $ngaynhan = test_input($_POST["dateNgaynhan"]);
                    $ngaytra = test_input($_POST ["dateNgaytra"]);
                    $sotaikhoan = test_input($_POST ["txtSotaikhoan"]);
                    $dichvuthem = test_input($_POST["radDichvu"]);
                    $nganhang = test_input($_POST ["selnganhang"]);
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $diff = abs(strtotime($ngaytra)-strtotime($ngaynhan));
                    $years = floor($diff / (365*60*60*24));
                    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
                    $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
                    if ($months == 0){ //Nếu tháng = 0, nghĩa là đặt trong khoảng 1<=ngày<=31
                        for ($i = 1; $i <= $days; $i++) {
                            if ($loaiphong == "Seaview" and $dichvuthem == "Không chọn"){
                                $thanhtoan += 900000;
                            }
                            elseif ($loaiphong == "Deluxe Single Bungalow" and $dichvuthem == "Không chọn"){
                                $thanhtoan += 500000;
                            }
                            elseif ($loaiphong == "Deluxe Twin Bungalow" and $dichvuthem == "Không chọn"){
                                $thanhtoan += 700000;
                            }
                            elseif ($loaiphong == "Villa" and $dichvuthem == "Không chọn"){
                                $thanhtoan += 1300000;
                            }
                            elseif ($loaiphong == "Seaview" and ($dichvuthem == "Spa" or $dichvuthem == "Hồ bơi" or $dichvuthem == "Sân golf")){
                                $thanhtoan += 1200000;
                            }
                            elseif ($loaiphong == "Deluxe Single Bungalow" and ($dichvuthem == "Spa" or $dichvuthem == "Hồ bơi" or $dichvuthem == "Sân golf")){
                                $thanhtoan += 800000;
                            }
                            elseif ($loaiphong == "Deluxe Twin Bungalow" and ($dichvuthem == "Spa" or $dichvuthem == "Hồ bơi" or $dichvuthem == "Sân golf")){
                                $thanhtoan += 1000000;
                            }
                            elseif ($loaiphong == "Villa" and ($dichvuthem == "Spa" or $dichvuthem == "Hồ bơi" or $dichvuthem == "Sân golf")){
                                $thanhtoan += 1600000;
                            }
                        };
                    }
                    elseif ($months >= 1){ //Nếu tháng >=1, nghĩa là đặt bằng 1 tháng hoặc trên
                        for ($x = 1; $x <= $months; $x++) { //Lặp tháng
                            for ($y = 1; $y <= (31+$days-1); $y++){ //Lặp ngày + ngày thêm của tháng đó (nếu có)
                                if ($loaiphong == "Seaview" and $dichvuthem == "Không chọn"){
                                    $thanhtoan += 800000;
                                }
                                elseif ($loaiphong == "Deluxe Single Bungalow" and $dichvuthem == "Không chọn"){
                                    $thanhtoan += 400000;
                                }
                                elseif ($loaiphong == "Deluxe Twin Bungalow" and $dichvuthem == "Không chọn"){
                                    $thanhtoan += 600000;
                                }
                                elseif ($loaiphong == "Villa" and $dichvuthem == "Không chọn"){
                                    $thanhtoan += 1200000;
                                }
                                elseif ($loaiphong == "Seaview" and ($dichvuthem == "Spa" or $dichvuthem == "Hồ bơi" or $dichvuthem == "Sân golf")){
                                    $thanhtoan += 1100000;
                                }
                                elseif ($loaiphong == "Deluxe Single Bungalow" and ($dichvuthem == "Spa" or $dichvuthem == "Hồ bơi" or $dichvuthem == "Sân golf")){
                                    $thanhtoan += 700000;
                                }
                                elseif ($loaiphong == "Deluxe Twin Bungalow" and ($dichvuthem == "Spa" or $dichvuthem == "Hồ bơi" or $dichvuthem == "Sân golf")){
                                    $thanhtoan += 900000;
                                }
                                elseif ($loaiphong == "Villa" and ($dichvuthem == "Spa" or $dichvuthem == "Hồ bơi" or $dichvuthem == "Sân golf")){
                                    $thanhtoan += 1500000;
                                }
                            }
                        };
                    }
                    $tien = number_format($thanhtoan, 0, '', ',')." đồng";
                    }
                    function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                    }
                ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get" style="color: white;">
                    <h2 style="color: yellow;">Thông tin khách hàng & Hóa đơn</h2>
                    <?php
                        echo "<br>";
                        echo "Họ tên khách hàng:          ";
                        echo $hoten;
                        echo "<br>";
                        echo "<br>";
                        echo "Giới tính:          ";
                        echo $gioitinh;
                        echo "<br>";
                        echo "<br>";
                        echo "Ngày sinh:          ";
                        echo $ngaysinh;
                        echo "<br>";
                        echo "<br>";
                        echo "Số điện thoại:          ";
                        echo $sodienthoai;
                        echo "<br>";
                        echo "<br>";
                        echo "CMND/CCCD:          ";
                        echo $cmnd;
                        echo "<br>";
                        echo "<br>";
                        echo "Email:          ";
                        echo $email;
                        echo "<br>";
                        echo "<br>";
                        echo "Số người:          ";
                        echo $songuoi;
                        echo "<br>";
                        echo "<br>";
                        echo "Loại phòng:          ";
                        echo $loaiphong;
                        echo "<br>";
                        echo "<br>";
                        echo "Ngày nhận:          ";
                        echo $ngaynhan;
                        echo "<br>";
                        echo "<br>";
                        echo "Ngày trả:          ";
                        echo $ngaytra;
                        echo "<br>";
                        echo "<br>";
                        echo "Thuê:          ";
                        echo $hours." giờ - ".$days." ngày - ".$months." tháng. ";
                        echo "<br>";
                        echo "<br>";
                        echo "Dịch vụ thêm:          ";
                        echo $dichvuthem;
                        echo "<br>";
                        echo "<br>";
                        echo "Ngân hàng thanh toán:          ";
                        echo $nganhang;
                        echo "<br>";
                        echo "<br>";
                        echo "Số tài khoản:          ";
                        echo $sotaikhoan;
                        echo "<br>";
                        echo "<br>";
                        echo "Thanh toán:          ";
                        echo number_format($thanhtoan, 0, '', ',')." đồng";
                    ?>
                    <div class="textbox-xacnhan">
                        <button onclick="myFunction()" type="submit" class="xacnhan"><a href="datphong.php">Xác nhận thanh toán</a></button>
                        <script>
                        function myFunction() {
                            alert("Đặt phòng thành công! Vui lòng kiểm tra Email và thực hiện xác nhận để hoàn thành bước cuối cùng của việc đặt phòng.");
                            alert("Thư xác nhận có hiệu lực trong vòng 7 giờ vì vậy nếu không thực hiện xác nhận, thủ tục đặt phòng của quý khách sẽ được hủy bỏ ngay sau đó. Xin cảm ơn!");
                        }
                        </script>
                        <?php
                                // //------------------------------
                                // //Đưa thông tin vào database
                                $server = "127.0.0.1";
                                $username = "root";
                                $password = "";
                                $dbname = "dbquanlyresort";
                                $hoten = $gioitinh = $ngaysinh = $sodienthoai = $cmnd = $email = $songuoi = $loaiphong  = $ngaynhan = $ngaytra = $sotaikhoan = $dichvuthem = $nganhang = "";
                                $conn = mysqli_connect($server,$username,$password);
                                if (!$conn){
                                    echo 'Not Connected';
                                }
                                if(!mysqli_select_db($conn,$dbname)){
                                    echo("Database Not Selected");
                                }
                                $hoten = $_POST['txtHoten'];
                                $gioitinh = $_POST['radGioitinh'];
                                $ngaysinh = $_POST['dateNgaysinh'];
                                $sodienthoai = $_POST['txtSodienthoai'];
                                $cmnd = $_POST['txtCmnd'];
                                $email = $_POST['e-mail'];
                                $songuoi = $_POST['radSonguoi'];
                                $loaiphong = $_POST['selphong'];
                                $ngaynhan = $_POST['dateNgaynhan'];
                                $ngaytra = $_POST['dateNgaytra'];
                                $dichvuthem = $_POST['radDichvu'];
                                $nganhang = $_POST['selnganhang'];
                                $sotaikhoan = $_POST['txtSotaikhoan'];
                                $sotien = $thanhtoan;
                                if(empty($hoten) or empty($sodienthoai) or empty($cmnd) or empty($email) or empty($sotaikhoan)){ //Nếu không điền thông tin thì
                                    echo "<script type='text/javascript'>alert('Đăng ký không thành công!');</script>";
                                    header("refresh: 0.5; url= datphong.php"); //Sẽ refresh trang, quay về trang trước.
                                }
                                else{ //Ngược lại thì đưa vào database
                                    $query = "INSERT INTO thongtindatphong(hoten,gioitinh,ngaysinh,sodienthoai,cmnd,
                                            email,songuoi,loaiphong,ngaynhan,ngaytra,dichvuthem,nganhang,sotaikhoan,sotien) 
                                            VALUES ('$hoten','$gioitinh','$ngaysinh','$sodienthoai','$cmnd','$email',
                                            '$songuoi','$loaiphong','$ngaynhan','$ngaytra','$dichvuthem','$nganhang','$sotaikhoan','$sotien')";
                                }
                                if(!mysqli_query($conn,$query)){
                                    echo "<script type='text/javascript'>alert('Đăng ký không thành công!');</script>";
                                }
                                else{ //Ngược lại nhập hết thông tin sẽ có thông báo đăng ký thành công và gửi mail về
                                    echo "<script type='text/javascript'>alert('Đăng ký thành công!');</script>";
                                    $to = "$email"; //đến email người nhập
                                    $subject = "Xác Nhận Hóa Đơn Đặt Phòng Eagle Resort";
                                    $mess = "Họ tên: $hoten
                                    \n Giới tính: $gioitinh
                                    \n Ngày sinh: $ngaysinh
                                    \n Số điện thoại: $sodienthoai
                                    \n CMND/CCCD: $cmnd
                                    \n Email: $email
                                    \n Số người: $songuoi
                                    \n Loại phòng: $loaiphong
                                    \n Ngày nhận: $ngaynhan
                                    \n Ngày trả: $ngaytra
                                    \n Dịch vụ thêm: $dichvuthem
                                    \n Ngân hàng: $nganhang
                                    \n Số tài khoản: $sotaikhoan
                                    \n ---------------------------
                                    \n ĐÃ THANH TOÁN: $thanhtoan";
                                    $header = "From: myemail@gmail.com"; //nhập email của mình
                                    // if (mail($to,$subject,$mess,$header)==true){
                                    //     echo "Thành công";
                                    // }
                                    // else{
                                    //     echo "Thất bại";
                                    //     };
                                    mail($to,$subject,$mess,$header);
                                }
                        ?>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="Last">
            <div class="footer">
                <img src="img/blue-footer-png-8-Transparent-Images.png" alt="hinh footer" id="hinh_footer">
                <div class="menu-footer">
                <ul>
                    <li>
                        <a href="https://www.facebook.com"><img src="img/1024px-Facebook_Logo_(2019).png" alt="" class="mxh"></a>
                    </li>
                    <li>
                        <a href="https://www.twitter.com"><img src="img/unnamed (1).png" alt="" class="mxh"></a>
                    </li>
                    <li>
                        <img src="img/-e65f2d0c889a223c2369f180c71facf81570e0fd6dfe810531-pimgpsh_fullsize_distr-aX0MIy7WUn.png" alt="" class="hotline">
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </body>
</html>