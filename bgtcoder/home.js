function login() {
  // Perform login actions
  // ...

  // Change the login button to a logout button
  const loginButton = document.getElementById("login-button");
  loginButton.innerHTML = '<a href="kuldeep.php" onclick="logout()">LOGOUT</a>';
}
