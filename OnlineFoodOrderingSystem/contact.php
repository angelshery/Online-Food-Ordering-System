
<html>
<head>
    <title>Contact Us</title>
    <style>
body{
	background-image:url("images/home2.jpg");
	background-repeat:no-repeat;
	background-position:center;
    background-size:100%;
}
</style>
</head>
<body>
    <div id="ContactUs">
        <h1><center>CONTACT US</center></h1>
        <form action="contact_sub.php" method="post"> 
		<center>
            <div class="form-shape">
                <label for="query">Type of Query</label>
                <select name="myQuery" id="query">
                    <option value="sel" selected>Select</option>
                    <option value="ord">Order related Issues</option>
                    <option value="Site">Site related Issues</option>
                    <option value="fed">Complaint related Issues</option>
                    <option value="others">Others</option>
                </select>
            </div>
			<br><br>
            <div class="form-shape">
                <label for="name">Name</label>
                <input type="text" name="myName" id="name" placeholder="Enter your Name">
            </div>
			<br><br>
            <div class="form-shape">
                <label for="email">Email-Id</label>
                <input type="email" name="myEmail" id="email" placeholder="Enter your email">
            </div>
			<br><br>
            <div class="form-shape">
                <label for="message"> Enter your feedback:</label>
                <textarea name="mesg" id="message" cols="30" rows="10"></textarea>
            </div>
			<br><br>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset"></center>
        </form>
    </div>
</body>
</html>