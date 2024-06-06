<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: white; /* Light gray background */
  }

  header {
    background-color: pink; /* Sky blue header background */
    color: black;
    padding: 10px;
    text-align: center;
  }

  nav {
    background-color: pink; /* Sky blue navigation background */
    color: white;
  }

  nav ul {
    list-style-type: none;
    margin: 0;
    padding: 20px;
  }

  nav li {
    display: inline;
    background-color: gray;
    border: 1px solid blue;
    padding: 20px;
    border-radius: 8px;
    margin: 0 20px ;

  }

  nav a {
    text-decoration: none;
    color: black;
    font-size: 30px;
  }

  nav li:hover {
    background-color: white; /* Darker blue on hover */
  }

  .all {
    display: grid;
  }

  .box {
    margin-top: 10%;
    display: flex;
    flex-direction: column;
    place-self: center;
    width: 300px;
    background-color: gray; /* Gray box background */
    text-align: center;
    height: 100px;
    align-items: center;
    border-radius: 15px;
    color: white; /* White text inside the box */
  }

  .box a {
    margin-top: 10px;
    text-decoration: none;
    color: white; /* White links inside the box */
  }
</style>
</head>
<body>
  <header>
    <h1>Formal Website</h1>
  </header>
  <nav>
    <ul>
      <li><a href="/">Landing Page</a></li>
      <li><a href="/account">Accounts</a></li>
      <li><a href="/user">Users</a></li>
    </ul>
  </nav>
  <div class="all">
    <div class="box">
      <a href="/">Landing Page</a>
      <a href="/account">Accounts</a>
      <a href="/user">Users</a>
    </div>
  </div>
</body>
</html>
