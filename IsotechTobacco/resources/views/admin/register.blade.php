<!DOCTYPE html>
<html>
<body>

<h2>Register Admin</h2>

<form method="POST" action="/admin/register">
    @csrf
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="submit" value="submit"></input>
</form>

<p>Note that the form itself is not visible.</p>

<p>Also note that the default width of text input fields is 20 characters.</p>

</body>
</html>