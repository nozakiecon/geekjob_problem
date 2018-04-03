<%-- 
    Document   : string
    Created on : 2018/04/03, 12:55:10
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
         //「groove」「-」「gear」の３つの文字列を連結することで，「groove-gear」と画面に表示してください。
final String x1 = "groove";
final String x2 = "-";
final String x3 = "gear";
out.print(x1+x2+x3);
%>
    </body>
</html>
