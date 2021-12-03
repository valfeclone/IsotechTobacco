<!DOCTYPE html>
<html>
<body>

<h2>Login User</h2>

<form method="POST" action="/login">
    @csrf
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="submit" value="submit"></input>
  <a href="/forgot-password">Forgot your password?<a>
</form>

</body>
</html>