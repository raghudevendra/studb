<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>

<?php


echo"HIIIII"
$link = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('studb1', $link);
mysql_set_charset('UTF-8', $link);
echo "Hello"

$sql = "SELECT name FROM studb1";
$result = $conn->query($sql);

$foo = True;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
		if($row["name"]==$_POST["uname"]){
			$foo=false;
			echo "User Already exists."
		}
    }
} else {
    echo "0 results";
}

if($foo){
	echo "User doesnot exist please add the user to DB sign up needed"
	
}else{
	echo "User Already exists.Continue with the login"
}
$conn->close();


?> 


<body>

<h2 class="container" style="background-color:#f1f1f1" >Login Form</h2>

<form >
  

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" ></br>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" ></br>
        
    <button type="submit">Login</button> <a href="/phpexamples/studb/studb/modules/singUp.php">Sing Up</a>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>