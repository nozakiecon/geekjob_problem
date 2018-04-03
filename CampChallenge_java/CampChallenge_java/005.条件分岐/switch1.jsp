<%-- 
    Document   : switch1
    Created on : 2018/04/03, 13:31:51
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
int variable = 3;
switch (variable){
case 1:
out.print("one");
break;
case 2:
out.print("two");;
break;
default:
out.print("想定外");
}
%>
    </body>
</html>
