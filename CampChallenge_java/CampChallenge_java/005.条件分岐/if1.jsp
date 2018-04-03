<%-- 
    Document   : if1
    Created on : 2018/04/03, 13:19:12
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
int variable = 1;
if (variable == 1){
  out.print("１です！");
}else if (variable == 2){
out.print("プログラミングキャンプ！");
}else {
out.print("その他です！");
}
%>

    </body>
</html>
