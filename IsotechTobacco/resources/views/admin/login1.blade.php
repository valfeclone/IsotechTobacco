<!DOCTYPE html>
<html>
<body>

<h2>Login Admin</h2>

<form method="POST" action="/admin/login">
    @csrf
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="submit" value="submit"></input>
</form>

</body>
</html>