<!doctype html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="main.css"/>
  <link rel="javascript" href="main.js"/>

</head>
<body>
  <div id="main_wrapper">
    <h1>Add User</h1>
    <form  method="post" action="addusr.php">
      <table id="form_table" >
        
        <td>
          UserName:
          <input type="text" name="username" />
        </td>
        </tr>
        <tr>
          <td>
            Password:
          <input type="password" name="password"/>
        </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input  type="submit" value="Sign Up" />
          </td>
        </tr>
      </table>
  </form>
</div>
</body>
</html>
