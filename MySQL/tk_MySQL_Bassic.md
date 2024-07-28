///////////////////////////////////////////////    Các từ gợi ý  ///////////////////////////////////////////////////////
          - CREATE  :  Khởi tạo trong MySQLi
          - DATABASE:  DATA trong MySQL
          - TABLLE  :  Bảng trong MySQL
          - INSERT  :  CHÈN THÊM VÀO
          - SELECT  :  Lấy dữ liệu
          - DELETE  :  Xóa dữ liệu
          - UPDATE  :  Thay đổi dữ liệu

///////////////////////////////////////////////    Các từ quan trọng SQL  /////////////////////////////////////////////////
          - WHERE   :   Lấy các giá trị có cùng tên 

```php
          WHERE id=1;
          ===> Kết quả trả về những dữ liệu nào có cùng id=1;
```



///////////////////////////////////////////////    Các từ hay dùng  ///////////////////////////////////////////////////////

          - mysql_query() : Cho phép bạn  truy vấn đến  MySQL( như kiểm tra kết nối DataBase hay là tạo ra Database)

///////////////////////////////////////////////    Kết nối Database (contac.conn)    //////////////////////////////////
          
          - new mysqli ({loaclhost}, {UsserName}, {Password}, {DataBase});
                    ==> Cho phép bạn kết nối dataBase  linh hoạt hơn và sử dụng phức tạp hơn(thường đc sử dụng)
          - mysqli_connect({loaclhost}, {UsserName}, {Password}, {DataBase});
                    ==> Cho phép bạn kết nối dataBase  cho người mới (ít sử dụng)
          - mysql_query() : Cho phép bạn  truy vấn đến  MySQL( như kiểm tra kết nối DataBase hay là tạo ra Database)
                    
[VD:Kết_Nối_Data_Base](./tk_Connect_DataBase.php)

///////////////////////////////////////////////    Tạo DateBase Mới (database)  //////////////////////////////////////////////////

          - CREATE DATABASE {tên_cơ_sở_dữ_liệu}  :  Tạo database 
          - mysql_query() : Cho phép bạn  truy vấn đến  MySQL( như kiểm tra kết nối DataBase hay là tạo ra Database)

[VD:Kết_Nối_Data_Base](./tk_Connect_DataBase.php)
[VD:Kết_Nối_DataBase+Tạo_DataBase](./tk_Tạo_Data_Base.php)


///////////////////////////////////////////////    Table Mới  (table ;bang) ////////////////////////////////////////////////// 
         
          - CREATE TABLE {tên_bảng}  :  Tạo database 
          ->  Nó tạo ra giống như DataBase bên dưới là code của nó
          
[VD:Kết_Nối_Data_Base](./tk_Connect_DataBase.php)
[VD:Kết_Nối_DataBase+Tạo_Table](./tk_Tạo_Table.php)

     ------------------------------------- Các kiểu dữ liệu trong MySQL-------------------------------------------------
               * Kiểu Dữ Liệu Số
                    INT: Số nguyên có độ dài 4 byte. Ví dụ: tuổi, ID sản phẩm.
                    SMALLINT: Số nguyên có độ dài 2 byte, thường dùng cho các giá trị số nguyên nhỏ hơn.
                    BIGINT: Số nguyên có độ dài 8 byte, dùng cho các giá trị số nguyên rất lớn.
                    DECIMAL(M,D): Số thập phân với M là tổng số chữ số và D là số chữ số sau dấu phẩy. Ví dụ: giá tiền, điểm số.
                    FLOAT: Số thực đơn độ chính xác.
                    DOUBLE: Số thực độ chính xác kép.

               *Kiểu Dữ Liệu Chuỗi
                    CHAR(M): Chuỗi ký tự có độ dài cố định là M. Ví dụ: mã bưu điện, mã sản phẩm.
                    VARCHAR(M): Chuỗi ký tự có độ dài biến đổi tối đa là M. Ví dụ: tên, địa chỉ.
                    TEXT: Chuỗi ký tự có độ dài lớn, thường dùng để lưu trữ các đoạn văn bản dài.
                    BLOB: Dùng để lưu trữ dữ liệu nhị phân như hình ảnh, file âm thanh.

               *Kiểu Dữ Liệu Ngày và Thời Gian
                    DATE: Lưu trữ ngày với định dạng YYYY-MM-DD. Ví dụ: ngày sinh, ngày bắt đầu.
                    DATETIME: Lưu trữ ngày và thời gian với định dạng YYYY-MM-DD HH:MM:SS. Ví dụ: thời điểm tạo đơn hàng.
                    TIMESTAMP: Tương tự DATETIME nhưng thường được tự động cập nhật khi có thay đổi dữ liệu.

               *Các Kiểu Dữ Liệu Khác
                    ENUM: Một kiểu dữ liệu liệt kê các giá trị có thể. Ví dụ: giới tính (Nam, Nữ, Khác).
                    SET: Tương tự ENUM nhưng cho phép chọn nhiều giá trị. Ví dụ: sở thích (đọc sách, xem phim, thể thao).
                    BOOL: Chỉ có hai giá trị: TRUE (1) hoặc FALSE (0).
                    BIT: Lưu trữ một hoặc nhiều bit.
          
          
     ------------------------------------------ CHÈN DỮ LIỆU VÀO BẢNG (INSERT TABLE)--------------------------------------------

          - INSERT INTO {tên_bảng} ({Các_giá_trị_tương_ứng})VALUE({Giá_trị})
                    -> Cho phép bạn chèn giá trị vào trong  MySQL

![VD:Chèn_giá_trị_table](./tk_Chèn_Table.php)

     ------------------------------------------ LẤY DỮ LIỆU (select form)------------------------------------------------------
          - SELECT * FROM {tên_bảng}       : Cho phép bạn lấy dữ liệu từ MySQL
          - mysqli_num_rows({Truy_Vấn})    : Cho phép bạn lấy số hàng  trong bảng MySQL
          - mysqli_fetch_array({Truy_Vấn}) : Cho phép bạn chuyển dữ liệu sang array

![VD:Lấy_dữ_liệu_DataBase](./tk_Lấy_dữ_liệu_DataBase.php)
     
     ------------------------------------------Xóa dữ liệu DELETE (delete form)------------------------------------------------------

          - DELETE FROM {tên_bảng}  WHERE {Giá_trị_muốn_xóa}  :  Hàm này cho phép bạn xóa đi dữ liệu mà bạn mong muốn.

![VD:Delete_DataBase](./tk_Delete_DataBase.php)
     
     ------------------------------------------Thay đổi dữ liệu (update set)------------------------------------------------------

          - UPDATE {Tên_bảng} SET  {Dữ_Liệu}  WHERE  {Địa_chỉ_thay_đổi}  
                    -> Hàm này cho phép bạn thay đổi giá trị  trong DataBase

![VD:Thay_đổi_giá_trị_DataBase](./tk_Thay_đổi_dữ_liệu.php)

     * Lưu ý: khi viết code để sử đổi chú ý đến các dấu  chấm  phẩy  tránh để bị lỗi code không chạy được.