<!DOCTYPE html>
<html>
<body>

<h2>Register User</h2>

<form method="POST" action="/register">
    @csrf

  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name" placeholder="Nama"><br>

  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" placeholder="E-mail"><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" pattern=".{8,}" placeholder="minimal 8 karakter"><br>
  <input type="submit" value="submit"></input>
</form>

</body>
</html>