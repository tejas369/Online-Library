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
input{
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
<body background="bg1.jpg" >
<div style =  "width:1200px; height:175px; background-color:#eeeeee; text-align:center">
<div style="float:left;">
<a id="a1" href="tbbs.html"><img src="logo1.jpg" alt="the book barter store" height="175" width="175"></img></a>
</div>
<div >
<br>
<h1>The Book Barter Store</h1>
<ul>
  <li ><a href="TBBS.html">Home</a></li>
  <li><a href="">Book Category</a>
      <ul>
        <li><a id="a2" href="wt.php" style=" line-height: 50px">Web Technology</a></li>
        <li><a id="a2" href="mp.php"  style="line-height: 50px">Microprocessor</a></li>
        <li><a id="a2" href="sooad.php">Structured and Object Oriented Analysis and Design</a></li>
                <li><a id="a2" href="os.php"  style="line-height: 50px">Operating System</a></li>
        <li ><a id="a2" href="bce.php"  style="line-height: 15px">Business Communication and Ethics</a></li>
        <li ><a id="a2" href="cn.php"  style="line-height: 50px">Computer Networks</a></li> 
                <li><a id="a2" href="others.php"  style="line-height: 50px">Others</a></li>    
  </ul>
  </li>
  <li><a href="acc.html">My Account</a></li>
 
</ul>
</div>
</div>

<div style=" margin: 10px 70px 10px 70px" >


<br>
<br>


<?php 

$con=mysqli_connect('localhost','root','','tbbs');


$QUERY2="SELECT * FROM BOOK WHERE category='cn'";
$RESULT=mysqli_query($con,$QUERY2);

while($row=mysqli_fetch_array($RESULT))
{
$image =$row['images'];
 
        $check=$row['status'];
if($check=="available")
    echo '<div style =  "width:300px; height:700px; background-color:#eeeeee; text-align:center; float: left; margin: 20px 20px 20px 20px;">'.'<img src = "'.$image.'" ;  height ="300" width= "300"/>'."<br>"."Book Id: ".$row["bid"]."</br>"."Name: ".$row["bname"]."</br>"."Author: ".$row["author"]."</br>"."Category: CN"."</br>"."Status: ".$row["status"]."</br>".'<i>'."If you wish to borrow this book".'<br>'."Fill your user id and book id and click on borrow".'</i>'.'<br>'.'<form  method="post" action="borrow.php">'."Your Id: ".'<input type ="text" name="userid" >'.'<br>'.'<br>'."Book id: ".'<input type ="text" name="bookid" >'.'<br>'.'<br>'.'<input type="submit" value="Borrow">'.'</form>'.'</div>';

else
    echo '<div style =  "width:300px; height:600px; background-color:#eeeeee; text-align:center; float: left; margin: 20px 20px 20px 20px;">'.'<img src = "'.$image.'" ;  height ="300" width= "300"/>'."<br>"."Book Id: ".$row["bid"]."</br>"."Name: ".$row["bname"]."</br>"."Author: ".$row["author"]."</br>"."Category: CN"."</br>"."Status: ".$row["status"]."</br>".'</div>';
}


 
?>








</div>
</body>
</html>