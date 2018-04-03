<%-- 
    Document   : for3
    Created on : 2018/04/03, 14:38:55
    Author     : sho nozaki
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%
//  問題　for文を利用して、0から100を全部足す処理を実現してください。
// 1から100の合計を表示する処理
int total = 0;
for (int i = 1; i <= 100; i++) {
    total = total + i;
}
out.print(total);

            %>
    </body>
</html>
