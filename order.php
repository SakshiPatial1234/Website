<!DOCTYPE html>
<html>
<head>
<title>
The Pizza Shop
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<<body onLoad="typee();">
<div class="navmain">
<img src="logo.png">
<div class="nav">
<a href="pizza.html">Home</a>
<a href="about.html">About Us</a>
<a href="reviews.html">Reviews</a>
<a href="menu.html">Menu</a>

</div>
</div>
<center>
<div class="p3"><h1> Place Your Order </h1><hr width="50%" color="BLACK"></div><br><br><br><br />
<form action="db.php" method="post" name="form1" >
<table border=0 align="center" class="tble">
<tr><td>
        
          <p>
             <label> <font size="50"><b>Select_Your_PIZZA</b><font></label>
			 
             <select name= "Select Your PIZZA"> style="width: 200px";>
			 
               <option value = "Italian Pizza">1.Italian Pizza</option>
               <option value = "Hawaine Pizza">2.Hawaine Pizza</option>
               <option value = "Exotic Pizza">3.Exotic Pizza</option>
               <option value = "Farmhouse Pizza">4.Farmhouse Pizza</option>
			    <option value = "Veg Supreme Pizza">5.Veg Supreme Pizza</option>
                 <option value = "Veggie Feast Pizza">6.Veggie Feast Pizza</option>
				 <option value ="Piced Paneer Pizza ">7.Piced Paneer Pizza </option>
				 <option value ="Double Cheese Pizza"> 8.Double Cheese Pizza</option>
				  <option value ="Soya Masala Pizza">9.Soya Masala Pizza </option>
				  
             </select>
          </p>
       </fieldset>
    </tr></td>
	<tr><td>
	
       
        <input type="number" name="Number_of_pizza" id="numberofpizza" placeholder="Number of Pizza" required class="box">
    </tr></td>
	<tr><td>
	<tr><td>
	
       
        <input type="number" name="phone_number" id="phonenumber" placeholder="Enter your Phone number" required class="box">
    </tr></td>
	<tr><td>
        
        
      
        <input type="textarea" name="address" id="address" placeholder="Enter your Address" required class="box">
		<p>
        
    </tr></td>
</table>
<br><br><br><br />
<input type="Submit" value="ORDER CONFIRM" class="btn"/>
</form>
<br><br><br><br />
<table width="100%" cellpadding="0" cellspacing="0" class="deals">
<tr>
<td><img src="C:\xampp\htdocs\project\sa.jpg"></td>
</tr>
</html>
</head>