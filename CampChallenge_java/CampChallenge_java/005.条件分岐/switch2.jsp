<%-- 
    Document   : switch2
    Created on : 2018/04/03, 13:38:29
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
String language = "t";
switch (language){
case "A":
out.print("英語");
break;
case "あ":
out.print("日本語");
break;
default:
break;
}
%>
    </body>
</html>
