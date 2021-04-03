<html>
<head>
<title> Admin panal</title>
<style>
body{
	margin: opx;
	border: opx;
}
#header{
		width: 100%;
		height:170px;
		background:  #bdf7cc ;
		color: BLACK;
}
#sidbar{
        width: 300px;
        height:500px;
        background:rgb(128, 128, 128);
        float:left;
       
}
#data{
        height:700px;    
        background:rgb(105, 105, 105);
   
       }

#admin_icon{
        background:white;
        border-radius: 50px;
}


UL LI{
    PADDING:20PX;
    BORDER-BOTTOM:2PX SOLID black;

}
UL LI:HOVER{
        BACKGROUND:#f5ebeb;
        COLOR:#bbb3b3;
}


</style>
</head>
<body>


<div id="header">

<center>
<img src="{{ asset('      ') }}"  alt="admin_icon" id="admin_icon"><br>
<H1>
This is Admin panal, Please prossed with caution!
</H1>
</center>
</div>




<div id ="sidbar">
<ul>
    <li><H2>Add date </H2></li>
    <li><H2>Dlete date</H2> </li>
    <li><H2>Update date</H2></li>
    <li><H2>Developer</H2></li>

</ul>
</div>



<div id ="data">
</div>



</body>
</html>