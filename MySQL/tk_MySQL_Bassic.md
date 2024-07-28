///////////////////////////////////////////////    Các từ gợi ý  ///////////////////////////////////////////////////////
          - CREATE  :  Khởi tạo trong MySQLi
          - TABLLE  :  Bảng trong MySQL
          -




///////////////////////////////////////////////    Kết nối Database (contac.conn)    //////////////////////////////////
          
          - new mysqli ({loaclhost}, {UsserName}, {Password}, {DataBase});
                    ==> Cho phép bạn kết nối dataBase  linh hoạt hơn và sử dụng phức tạp hơn(thường đc sử dụng)
          - mysqli_connect({loaclhost}, {UsserName}, {Password}, {DataBase});
                    ==> Cho phép bạn kết nối dataBase  cho người mới (ít sử dụng)
                    
[VD:Kết_Nối_Data_Base](./tk_Connect_DataBase.php)

///////////////////////////////////////////////    Tạo DateBase Mới (database)  //////////////////////////////////////////////////

          - mysql_query() : Cho phép bạn  truy vấn đến  MySQL( như kiểm tra kết nối DataBase hay là tạo ra Database)

[VD:Kết_Nối_Data_Base](./tk_Connect_DataBase.php)
[VD:Kết_Nối_DataBase+Tạo_DataBase](./tk_Tạo_Data_Base.php)


///////////////////////////////////////////////    Tạo Table Mới  (table) ////////////////////////////////////////////////// 

          ->  Nó tạo ra giống như DataBase bên dưới là code của nó
          
[VD:Kết_Nối_Data_Base](./tk_Connect_DataBase.php)
[VD:Kết_Nối_DataBase+Tạo_Table](./tk_Tạo_Table.php)

          ------------------------------------------------------------- Các kiểu dữ liệu trong MySQL---------------------------
          tham khảo thêm :
               https://gemini.google.com/app/2ee7f708e006ecb1?hl=vi