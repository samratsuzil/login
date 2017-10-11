<!doctype html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="main.css"/>
  <link rel="javascript" href="main.js"/>
</head>
<body>
  <div id="main_wrapper">
    <h1>Login</h1>
    <form action="login.php" method="post">
      <table id="form_table">
        <tr id="row1">
        <td>
          UserName:
        </td>
        <td>
          <input type="text" name="username" width="100%"/>
        </td>
        </tr>
        <tr>
          <td>
            Password:
          </td>
          <td>
          <input type="password" name="password"/>
        </td>
        </tr>
        <tr>
		<td>
		</td>
          <td align="right">
            <input  type="submit" value="Log In"/>
          </td>
        </tr>
		<tr>
		<td> <a href="adduserpage.php">Register</a>
		</td>
		</tr>
      </table>
  </form>
</div>
</body>
</html>
