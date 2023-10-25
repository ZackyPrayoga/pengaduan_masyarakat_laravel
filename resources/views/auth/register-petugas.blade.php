<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Register Form</title>
</head>
<body>
  <div class="login-container">
    <form id="loginForm" method="POST" action="">
      @method("POST")
      @csrf
    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="logo"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg>      <div class="form-group">
    <h2 style="color: #ffffff;">Register</h2>
    <div class="form-group">
        <input type="text" id="nama_petugas" placeholder="nama_petugas" name="nama_petugas" required>
        <label for="nik"></label>
      </div>      <div class="form-group">
        <input type="text" id="username" placeholder="username" name="username" required>
        <label for="nama"></label>
      </div>
      <div class="form-group">
        <input type="password" id="password" placeholder="password" name="password" required>
        <label for="username"></label>
      </div>
      <div class="form-group">
        <input type="number" id="telp" placeholder="telp" name="telp" required>
        <label for="password"></label>
      </div>
      <button type="submit" name="submit">Register</button>
      <a href="/login-petugas">Udah Punya Akun?</a>
    </form>
  </div>
</body>
</html>