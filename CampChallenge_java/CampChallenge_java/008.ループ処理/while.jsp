<%-- 
    Document   : while
    Created on : 2018/04/03, 14:45:05
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
//  問題　while文を利用して、以下の処理を実現してください。
// 1000を2で割り続け、100より小さくなったらループを抜ける処理
int key = 1000;
while(key >= 100) {
out.print(key);
key = key/2;
}
%>
    </body>
</html>
