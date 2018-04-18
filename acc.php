<!DOCTYPE html>
<head>
<title>The Book Barter Store</title>


<link href='https://fonts.googleapis.com/css?family=Itim' rel='stylesheet' type='text/css'>
<style type = "text/css">
h1 {font-size:3em;}
body{font-family: 'Itim', cursive;}

div.transbox {
    background-color: #ffffff;
    border: 2px solid black;
    opacity: 0.6;
    filter: alpha(opacity=60); /* For IE8 and earlier */
}

div.transbox p {
    font-weight: bold;
    color: #000000;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
   }
li {
float:left;
display: inline;
}
	
li ul{
position:absolute;
z-index:100;
}

li li {float:none;}	
	
ul li ul {display:none;}               /*changed*/	
	
ul li:hover ul {display:block;
                }	

#a1:link, #a1:visited,#a1:hover,#a1:active{ display: block; width: 175px;
    height: 175px; background-color: #eeeeee;}

#a2:link, #a2:visited {
    display: block;
    width: 330px;
    height: 55px;
    align: justify;
    font-weight: bold;
    color: #000000;
    background-color: #D4D3D4;
    text-align: center;
    padding: 0px;
    text-decoration: none;
    text-transform: uppercase;
}
#a2:hover, #a2:active{
    background-color: #A0928C;
}			

a:link, a:visited {
    display: block;
    width: 328px;
    height: 25px;
    font-weight: bold;
    color: #000000;
    background-color: #D4D3D4;
    text-align: center;
    padding: 5px;
    text-decoration: none;
    text-transform: uppercase;
}
a:hover, a:active{
    background-color: #A0928C;
}
table.fixed {table-layout:fixed; height:90px;}
table.fixed td {height:10px;
width:25px;
text-align: left;}
select,input{
    margin-left: 80px;
    width:140px;
    display:block;
border: 1px solid #999;
box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.5);
}  
input[type="submit"] {
     margin-left: 110px;
    background: #848484;
    color: #fff;
    font-family: Sans-serif;
    font-size: 15px;
    height: 25px;
    width: 70px;
    line-height: 15px;
 
    text-align: center;
    border: 0;
    
    border-radius: 15px;
}
input[type="submit"]:hover{
  background: #424242;
}  			
</style>
</head>
<body background="bg1.jpg">
<div style =  "width:1200px; height:175px; background-color:#eeeeee; text-align:center">
<div style="float:left;">
<a id="a1" href="tbbs.html"><img src="logo1.jpg" alt="the book barter store" height="175" width="175"></img></a>
</div>
<div>
<br>
<h1>The Book Barter Store</h1>
<ul>
  <li><a href="TBBS.html">Home</a></li>
  <li><a href="">Book Category</a>
      <ul>
		<li><a id="a2" href="wt.php" style="
    line-height: 50px">Web Technology</a></li>
		<li><a id="a2" href="mp.php"  style="
    line-height: 50px">Microprocessor</a></li>
		<li><a id="a2" href="sooad.php">Structured and Object Oriented Analysis and Design</a></li>
                <li><a id="a2" href="os.php"  style="
    line-height: 50px">Operating System</a></li>
		<li><a id="a2" href="bce.php"  style="
    line-height: 15px">Business Communication and Ethics</a></li>
		<li><a id="a2" href="cn.php"  style="
    line-height: 50px">Computer Networks</a></li> 
                <li><a id="a2" href="others.php"  style="
    line-height: 50px">Others</a></li>    
  </ul>
  </li>
  <li><a href="acc.html">My Account</a></li>
  
</ul>
</div>
</div>
<br>
<br>
<br>
<?php 

$conn=mysqli_connect('localhost','root','','tbbs');

$userid=(int)$_POST['usid'];;
$QUERY2="SELECT * FROM user WHERE uid='$userid'";
$RESULT2=mysqli_query($conn,$QUERY2);
$row=mysqli_fetch_assoc($RESULT2);
if($row>0)

echo '<div style =  "width:500px; height:200px; background-color:#eeeeee; text-align:center; float: left; margin: 30px 10px 10px 250px;">'."<br>"."MY ACCOUNT"."<br>"."<br>"."User Id: ".$row["uid"]."</br>"."Name: ".$row["uname"]."</br>"."Contact no: ".$row["phone"]."</br>"."Class :".$row["class"]."</br>" .'</div>';

else
  
 
     header('Location: error.html');
   


$QUERY2="SELECT * FROM book WHERE uid='$userid'";
$RESULT2=mysqli_query($conn,$QUERY2);

if(mysqli_num_rows($RESULT2) > 0)
{ 
    echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>";


    echo "<br>".'<p style="font-size:150%;">'."<b>"."My books "."</b>".'</p>'."<br>";
while($row=mysqli_fetch_assoc($RESULT2))
{
echo '<div style =  "width:300px; height:200px; background-color:#eeeeee; text-align:center; float: left; margin: 20px 30px 20px 30px;">'."<br>"."Book Id: ".$row["bid"]."</br>"."Name: ".$row["bname"]."</br>"."Author: ".$row["author"]."</br>"."Category: MP"."</br>"."Status: ".$row["status"]."</br>".'</div>';

}
}
else 
//   header('Location: error.html');


echo "<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>";
echo '<center>';
echo '<div style =  "width:400px; height:450px; background-color:#eeeeee; text-align:center; float: center; margin: 20px 30px 20px 30px; clear:left">'.
'<br>'."If you wish to add a book".'<br>'."Fill in the details about the book and click on insert".'</i>'.'<br>'.
'<form  method="post" action="insert.php" enctype="multipart/form-data" style="margin-left: 15px;">'.'<br>'.'<br>'.
'<table class="fixed">'.'<tr>'.'<td>'."Category".'</td>'.'<td>'.'<select name="category" style="margin-left: 10px;">'.'<option value="mp">'."MP".'</option>'.
'<option value="cn">'."CN".'</option>'.
'<option value="os">'."OS".'</option>'.
'<option value="wt">'."WT".'</option>'.
'<option value="bce">'."BCE".'</option>'.
'<option value="sooad">'."SOOAD".'</option>'.'</select>'.'</td>'.'</tr>'.
'<tr>'.'<td >'."Bookname:".'</td>'.'<td>'.'<input type="text" name="bname" style="margin-left: 10px;">'.'</td>'.'</tr>'.

//'<tr>'.'<td>'."Category:".'</td>'.'<td>'.'<input type="text" name="category">'.'</td>'.'</tr>'.

'<tr>'.'<td>'."Author:".'</td>'.'<td>'.'<input type="text" name="author" style="margin-left: 10px;">'.'</td>'.'</tr>'.
'<tr>'.'<td>'."Your Id: ".'</td>'.'<td>'.'<input type ="text" name="uid" style="margin-left: 10px;">'.'</td>'.'</tr>'.
'<tr>'.'<td>'."Image".'</td>'.'<td >'.'<input width="70px" type="file" accept="image/*"  name="imageOfbook" id="imageOfbook" style="margin-left: 10px;">'.'</td>'.'</tr>'.'</table>'.
'<br>'. '<br>'.'<input type="submit" value="Insert" name="submit" style="margin-left: 20px;">'.'</form>'.'</div>';
echo '</center>';

$QUERY4="SELECT bid FROM borrowbooks WHERE borrowerid='$userid'";

$RESULT4=mysqli_query($conn,$QUERY4);
echo "<br>".'<p style="font-size:150%;">'."<b>"."My Borrowed books "."</b>".'</p>'."<br>";
while($row1=mysqli_fetch_assoc($RESULT4))
{
$abc=$row1["bid"];
$QUERY3= "SELECT * FROM book WHERE bid ='$abc'";
$RESULT3=mysqli_query($conn,$QUERY3);

if(mysqli_num_rows($RESULT3) > 0)
{
$row=mysqli_fetch_assoc($RESULT3);

echo '<div style =  "width:300px; height:400px; background-color:#eeeeee; text-align:center; float: left; margin: 20px 30px 20px 30px;">'."<br>"."Book Id: ".$row["bid"]."</br>"."Name: ".$row["bname"]."</br>"."Author: ".$row["author"]."</br>"."Category: MP".'</br>'.'<i>'."If you wish to return this book".'<br>'."Fill your user id and book id and click on return".'</i>'.'<br>'.'<form  method="post" action="return.php">'."Your Id: ".'<input type ="text" name="userid" >'.'<br>'.'<br>'."Book id: ".'<input type ="text" name="bookid" >'.'<br>'
  .'<br>'.'<input type="submit" value="Return">'.'</form>'.'</div>';


}

else 

    echo "No books "."<br>";
}?>
</body>
</html>