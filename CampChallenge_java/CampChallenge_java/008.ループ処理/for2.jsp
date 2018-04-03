<%-- 
    Document   : for2
    Created on : 2018/04/03, 14:30:27
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
//  問題　for文を利用して、適当な変数へ文字連結を行い、中に"A"が30個入った状態にしてください

final String letter = "A";
String moji = "";
for (int i = 0; i < 30; i++) {
    moji = moji+letter;
}
out.print(moji);
%>
    </body>
</html>
