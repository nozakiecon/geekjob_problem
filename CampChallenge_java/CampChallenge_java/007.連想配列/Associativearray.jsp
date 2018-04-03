<%-- 
    Document   : Associativearray
    Created on : 2018/04/03, 14:16:53
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
        <%@ page import="java.util.*" %>
        <%@ page import="java.util.ArrayList" %>
 <%
//以下の順で、連想配列を作成してください。
//"1"に"AAA", "hello"に"world", "soeda"に"33", "20"に"20"
HashMap<String, String> user1 =
            new HashMap<String, String>();
user1.put("1", "AAA");
user1.put("hello", "world");
user1.put("soeda", "33");
user1.put("20", "20");
out.print(user1.get("1"));
out.print(user1.get("hello"));
out.print(user1.get("soeda"));
out.print(user1.get("20"));
%>
    </body>
</html>
