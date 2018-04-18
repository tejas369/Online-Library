<!DOCTYPE html>
<head>
<title>The Book Barter Store</title>
    <script>
function myFunction() {
    alert(" Please Put all the user information");
}</script>
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
        
</style>



</head>
<body background="bg1.jpg" >
<div style =  "width:1200px; height:175px; background-color:#eeeeee; text-align:center">
<div style="float:left;">
<a id="a1" href="about.html"><img src="logo1.jpg" alt="the book barter store" height="175" width="175"></img></a>
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
<center>
<div style =  "width:500px; height:150px; background-color:#eeeeee; text-align:center; float: left; margin: 30px 10px 10px 200px;">
    <br>
    
    
    <br>
    <?php
   
$uname=$_POST["uname"];

$phone=$_POST["phone"];
$class=$_POST["class"];

if((!empty($uname))&&(!empty($phone))&&(!empty($class)))
    {

$conn=mysqli_connect('localhost','root','','tbbs');
$query1="INSERT into user(uname,phone,class) VALUES ('".$uname."','".$phone."','".$class."')";
$result=mysqli_query($conn,$query1);

$query2="SELECT uid FROM user WHERE uname='$uname'";
$result2=mysqli_query($conn,$query2);

$row=mysqli_fetch_array($result2);

   echo '<p>'."Thank You for Registering".'</p>'.'<br>';
$ui =$row['uid'];
echo "Your Id Is ".$ui;
}
else {
       echo '<script type="text/javascript">    myFunction();      </script>';
  //  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
</div>
</body>
</html>