<!DOCTYPE html>
<html>
    <head>
        <title>Đặt phòng</title>
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
                <div class="box-datphong">
                <form method="post" action="dangky.php">
                    <div style="text-align: center; font-size: 22px; font-weight: bold; color: yellow;"><h2>ĐẶT PHÒNG</h2></div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="hoten"> Họ tên: <span style="color: red;">*</span> </label>
                        <input type="text" name="txtHoten" placeholder="Lê Văn Minh"class="text-hoten">
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="gioitinh"> Giới tính: <span style="color: red;">*</span> </label>
                        <div style="font-size: 16px; margin-left: 32px; margin-top: 5px">
                            <input type="radio" name="radGioitinh" style="width: 40px; height: 18px; font-size: 16px;" value="Nam" checked="checked">Nam
                            <input type="radio" name="radGioitinh" style="width: 40px; height: 18px; font-size: 16px;" value="Nữ">Nữ
                            <input type="radio" name="radGioitinh" style="width: 40px; height: 18px; font-size: 16px;" value="Khác">Khác
                        </div>
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="ngaysinh"> Ngày sinh: <span style="color: red;">*</span> </label>
                        <input type="date" value ="1990-01-01" min="1990-01-01" max="2013-12-31" name="dateNgaysinh" class="text-ngaysinh">
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="sodienthoai"> Số điện thoại: <span style="color: red;">*</span> </label>
                        <input type="text" name="txtSodienthoai" placeholder="0903255719"class="text-dienthoai">
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="cmnd"> CMND/CCCD: <span style="color: red;">*</span> </label>
                        <input type="text" name="txtCmnd" placeholder="Số CMND hoặc CCCD"class="text-cmnd">
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="email"> Email: <span style="color: red;">*</span> </label>
                        <input type="email" name="e-mail"class="email">
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="songuoi"> Số người: <span style="color: red;">*</span> </label>
                        <div style="font-size: 16px; margin-left: 32px; margin-top: 5px">
                            <input type="radio" name="radSonguoi" style="width: 30px; height: 18px; font-size: 16px;" value="1" checked="checked">1
                            <input type="radio" name="radSonguoi" style="width: 30px; height: 18px; font-size: 16px;" value="2">2
                            <input type="radio" name="radSonguoi" style="width: 30px; height: 18px; font-size: 16px;" value="3 người trở lên">3 trở lên (Khuyến khích thuê Villa)
                        </div>
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="loaiphong"> Loại phòng: <span style="color: red;">*</span> </label>
                        <select name="selphong" class="selphong">
                            <option value="Seaview">Seaview</option>
                            <option value="Deluxe Single Bungalow">Deluxe Single Bungalow</option>
                            <option value="Deluxe Twin Bungalow">Deluxe Twin Bungalow</option>
                            <option value="Villa">Villa</option>
                        </select>
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="ngaynhan"> Ngày nhận: <span style="color: red;">*</span> </label>
                        <input type="datetime-local" value="2021-06-01T10:00" min ="2021-06-01T10:00" max ="2021-12-30T10:00" name="dateNgaynhan" class="text-ngaynhan">
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="ngaytra"> Ngày trả: <span style="color: red;">*</span> </label>
                        <input type="datetime-local" value="2021-06-02T16:00" min ="2021-06-02T16:00" max ="2021-12-31T16:00" name="dateNgaytra" class="text-ngaytra">
                    </div>
                    <div style="text-align: center; font-size: 22px; font-weight: bold; color: yellow; margin-top: 20px;"><h2>THANH TOÁN</h2></div>
                    <div class="textbox">
                        <label style="margin-top: 2px; padding-right: 20px;" for="dichvuthem"> Dịch vụ thêm: <span style="color: red;">*</span> </label>
                    </div>
                    <div style="font-size: 16px; margin-left: 50px; margin-top: 5px;">
                        <input type="radio" name="radDichvu" style="width: 50px; height: 18px; font-size: 16px;" value="Không chọn" checked="checked">Không chọn
                        <input type="radio" name="radDichvu" style="width: 50px; height: 18px; font-size: 16px;" value="Spa">Spa
                        <input type="radio" name="radDichvu" style="width: 50px; height: 18px; font-size: 16px;" value="Hồ bơi">Hồ bơi
                        <input type="radio" name="radDichvu" style="width: 50px; height: 18px; font-size: 16px;" value="Sân golf">Sân golf
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="thanhtoan"> Thanh toán qua: <span style="color: red;">*</span> </label>
                        <select name="selnganhang" class="selnganhang">
                            <option value="Vietcombank">Vietcombank</option>
                            <option value="BIDV">BIDV</option>
                            <option value="Techcombank">Techcombank</option>
                            <option value="Momo">Momo</option>
                        </select>
                    </div>
                    <div class="textbox">
                        <label style="margin-top: 5px;" for="ngaytra"> Số tài khoản: <span style="color: red;">*</span> </label>
                        <input type="text" name="txtSotaikhoan" class="text-sotaikhoan">
                    </div>
                        <div class="textbox-dangky">
                            <input type="submit" name="submit" value="Đăng ký" class="dangky">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="box-datphong3">
            <div style="text-align: center; font-size: 22px; font-weight: bold; color: yellow;"><h2>BẢNG GIÁ</h2></div>
            <br>
            <div style="font-size: 22px; margin-top: 15px;">
                <label for="" style="color: yellow; "><span style="color: yellow; font-size: 26px;">+ </span> <i>Thuê dưới 31 ngày:</i> </label> <br>
                <label for="">
                    <ul style="margin-left: 64px; margin-top: 10px; margin-bottom: 10px; font-size: 24px;">
                        <li>Seaview: 900.000 đồng</li>
                        <li>Deluxe Single Bungalow: 500.000 đồng</li>
                        <li>Deluxe Twin Bungalow: 700.000 đồng</li>
                        <li>Villa: 1.300.000 đồng</li>
                    </ul>
                </label>
                <label for="" style="color: yellow; "><span style="color: yellow; font-size: 26px;">+ </span> <i>Thuê trên 1 tháng:</i> </label> <br>
                <label for="">
                    <ul style="margin-left: 64px; margin-top: 10px; font-size: 24px;">
                        <li>Seaview: 800.000 đồng</li>
                        <li>Deluxe Single Bungalow: 400.000 đồng</li>
                        <li>Deluxe Twin Bungalow: 600.000 đồng</li>
                        <li>Villa: 1.200.000 đồng</li>
                    </ul>
                </label>
                <br>
                <br>
                <label for="" style="color: crimson; background-color:lightgoldenrodyellow; font-size: 30px; padding-left: 50px; padding-right: 50px; padding-top: 10px; padding-bottom: 10px; margin-left: 43px">
                    <b>Dịch vụ thêm: 300.000 đồng</b> 
                </label> <br>
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