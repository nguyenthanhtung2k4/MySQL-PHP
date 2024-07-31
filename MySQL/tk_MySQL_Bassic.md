///////////////////////////////////////////////    Các từ gợi ý  ///////////////////////////////////////////////////////
          - CREATE  :  Khởi tạo trong MySQLi
          - DATABASE:  DATA trong MySQL
          - TABLLE  :  Bảng trong MySQL
          - INSERT  :  CHÈN THÊM VÀO
          - SELECT  :  Lấy dữ liệu
          - DELETE  :  Xóa dữ liệu
          - UPDATE  :  Thay đổi dữ liệu

///////////////////////////////////////////////   Câu lệnh Quan trọng SQL  /////////////////////////////////////////////////
          - WHERE   :   Lấy các giá trị có cùng tên 

```php
                    WHERE id=1;
                    ===> Kết quả trả về những dữ liệu nào có cùng id=1;
```

          - AND      :  ĐI cùng với WHERE và kết hợp thêm điều kiện  cho  nó 

```php
                    WHERE name='tung' AND id=1; 
                    ===> Kết quả trả về tên là tùng và có thêm id=1  thì nó hiện ra.
```

          - OR       : Có hoặc không điều kiện  cần

```php
                    WHERE id=0 OR name='tung';
                    ===> Khi thực hiện nếu nó k tìm thấy id=0  thì nó sẽ tìm tiếp name='tung';
                    ====>Tìm thấy thì in ra.
```

          - LIKE     : Câu lệnh tìm kiếm trong SQL

```php
                    WHERE taikhoan LIKE  '%tung%';
                    ===> Nó sẽ tìm trong Data taikhoan  có giá trị nào tên tung hay  không
                    ====> Nếu có thấy giá trị như tung thì nó sẽ tìm hiện ra.
```

          - ORDER BY  : Hiệnn thị theo danh sách tăng hoặc giảm

```php
                    ORDER BY {Giá_hoặc_ID}  ASC 
                    --> Hiện thị theo tăng dần

                    ORDER BY {Giá_hoặc_ID}  DESC 
                    --> Hiện thị theo giảm dần

                    ==> Hàm ORDER thường đc dùng trong  tăng hoặc giảm.
```

          - LIMIT     : Kiểm soát số lượng dữ liệutrả về

```php
                    LIMIT 0,10;
                    --->  0 là số bắt đầu;
                    --->  10là số kết thúc;
                    ===> Nó sẽ  hiện thị số lượng mà bạn yêu câu khi lấy data hiện ra bên ngoài.
```

          - RAND()    : Random dữ liệu đầu ra | Nó đi với ORDER BY

```php
                    ORDER BY RAND() LIMIT 0,10;
                    ===> Lấy ngẫu nhiên 10  giá trị đầu và hiện thị bất kì không theo tăng giảm ...
```

          - INNER JOIN : Kết hợp  2 bảng trong sql  lại với nhau.


```php
               CÚ pháp:
                    SELECT column_name(s)
                    FROM table1
                    INNER JOIN table2
                    ON table1.column_name = table2.column_name;
               VD:
                    SELECT ho,ten,mk,pass 
                    FORM tung1 INNER JOIN tung2
                    ON tung1.id=tung2.id;

                    ===> Select là lấy các value 
                         Form   là  đến bảng có tên tung1
                         INNER JOIN là kết nối tung1 với tung2
                         ON  là lấy id giống nhau để nối lại

                    --> LINK: https://www.w3schools.com/mysql/mysql_join_inner.asp
                              https://www.youtube.com/watch?v=PXEn_CFlL2g&list=PLaevEBkXyvnXEMoe6ZHFJGjPDb_eCCVNc&index=92
```

///////////////////////////////////////////////    Các Hàm lấy  dữ liệu DATABASE mysqli_fetch  ///////////////////////////////////////////////////////
          - mysqli_fetch_array()   : Cho phép bạn linh hoạt trong việc truy cập dữ liệu bằng cả TÊN cột và chỉ SỐ.(Cả tên và chỉ số)
                                   ===> array thường được sử dụng nhiều nhất trong mysqli_fetch
          - mysqli_fetch_assoc()   : Thường được sử dụng khi bạn biết TÊN các cột và muốn truy cập chúng bằng tên.(Theo tên)
          - mysqli_fetch_row()     : Thường được sử dụng khi bạn KHÔNG biết tên các cột HOẶC muốn truy cập dữ liệu bằng chỉ SỐ.(Chỉ số)
          - mysqli_fetch_object()  : Thường được sử dụng khi bạn muốn tạo các đối tượng từ dữ liệu lấy được.(ít được sử dụng)

     ==> mysqli_fetch___ được hiểu đơn giản nó là chức năng để lấy dữ liệu được nhà phát triển phát hành.

![VD:mysqli_fetch](./tk_mysqli_fetch____.php)

///////////////////////////////////////////////    Các từ hay dùng DATABASE ///////////////////////////////////////////////////////

          - mysql_query(link,query) : Cho phép bạn  truy vấn đến  MySQL( như kiểm tra kết nối DataBase hay là tạo ra Database)

          - mysqli_multi_query(link, query): Thực thi nhiều truy vấn SQL cùng một lúc.

///////////////////////////////////////////////    Kết nối Database (contac.conn)    //////////////////////////////////
          
          - new mysqli ({loaclhost}, {UsserName}, {Password}, {DataBase});
                    ==> Cho phép bạn kết nối dataBase  linh hoạt hơn và sử dụng phức tạp hơn(thường đc sử dụng)
          - mysqli_connect({loaclhost}, {UsserName}, {Password}, {DataBase});
                    ==> Cho phép bạn kết nối dataBase  cho người mới (ít sử dụng)
          - mysql_query() : Cho phép bạn  truy vấn đến  MySQL( như kiểm tra kết nối DataBase hay là tạo ra Database)
                    
[VD:Kết_Nối_Data_Base](./tk_Connect_DataBase.php)
///////////////////////////////////////////////    Đóng Database (contac.conn)    //////////////////////////////////

          - mysqli_close(link): Đóng kết nối đến cơ sở dữ liệu.

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
     
     ------------------------------------------Thay đổi dữ liệu (update set edit)------------------------------------------------------

          - UPDATE {Tên_bảng} SET  {Dữ_Liệu}  WHERE  {Địa_chỉ_thay_đổi}  
                    -> Hàm này cho phép bạn thay đổi giá trị  trong DataBase

![VD:Thay_đổi_giá_trị_DataBase](./tk_Sửa_đổi_dữ_liệu.php)

     * Lưu ý: khi viết code để sử đổi chú ý đến các dấu  chấm  phẩy  tránh để bị lỗi code không chạy được.

///////////////////////////////////////////////    Các hàm khác trong Database(mysqli)  ////////////////////////////////////////////

          - mysqli_num_rows(result): Trả về số lượng hàng trong kết quả truy vấn.
          - mysqli_insert_id(link): Trả về ID của bản ghi vừa được chèn.
          - mysqli_affected_rows(link): Trả về số lượng hàng bị ảnh hưởng bởi truy vấn UPDATE, DELETE hoặc INSERT.
          - mysqli_error(link): Trả về thông báo lỗi của truy vấn gần nhất.
          - mysqli_real_escape_string(link, string): Thực hiện thoát các ký tự đặc biệt trong một chuỗi để ngăn chặn các cuộc tấn công tiêm SQL.
          