<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$Customer_Key= $_POST['Customer_Key'];

		if(!empty($Customer_Key) && is_numeric($Customer_Key))
		{

			//read from database
			$query = "select * from users where Customer_Key = '$Customer_Key' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($_SESSION['Customer_Key'] = $user_data['Customer_Key'])
					{

						echo "Login Successful";

						header("Location: IssueSelection.html");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "empty";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="troubleshooting.css">
        <script src="myScript.js"></script>
</head>
<body>
<div id="stickybar">
        <script src="myScript.js"></script>
        <a class="logo" href="www.xln.co.uk"><img src="https://upload.wikimedia.org/wikipedia/commons/6/6d/XLN-Logo.jpg" alt="image not loaded" height="100" width=aut0></a>
        <p class = "sales"> Sales: <br> 0808 302 9676 </p>
        <p class = "customer"> Customer Service: <br> 0344 880 7777</p>
    </div>

	<div class="box">
    <form method="post">
        <label for="Customer Number"><b>Customer Number</b></label>
        <br>
        <input id="text" type="text" placeholder="Customer Number" name="Customer_Key" required>
        <br>
        <br>
        <a type="forgot">Forgotten Customer Number?</a>
        <a type="unregistered" href="signup.php">Not Registered</a>
        <br>
        <br>
        <input type="Checkbox" name="chckbx">
        <label for="chckbx">Remember me</label>
        <br>
		<br>
		<div class = "button">
		<input id="button" type="submit" value="Login"><br><br>
		</div>
    </form>
</div>

<br> <br>
<footer class="footer">
    <p id ="footer"> Footer </p>
</footer>
</body>
</html>



