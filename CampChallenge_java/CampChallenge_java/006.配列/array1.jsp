<%-- 
    Document   : array1
    Created on : 2018/04/03, 13:50:35
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
<%@ page import="java.util.ArrayList" %>
<%
//配列型か ArrayList 型の変数を宣言してください（なお，要素の型は，文字列型とします）。そして変数を，下記の要素が順番に格納された状態にしてください。 
//また，各要素を順番に表示して，正しく要素が格納されたことを確認してください。 
//"10"， "100"， "soeda"， "hayashi"， "-20"， "118"， "END"
ArrayList<String> data = new ArrayList<String>();
data.add("10");
data.add("100");
data.add("soeda");
data.add("hayashi");
data.add("-20");
data.add("118");
data.add("END");
out.print(data.get(0));
out.print(data.get(1));
out.print(data.get(2));
out.print(data.get(3));
out.print(data.get(4));
out.print(data.get(5));
out.print(data.get(6));
%>
    </body>
</html>
