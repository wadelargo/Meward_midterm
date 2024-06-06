<!DOCTYPE html>
<html>
<head>
<style>
  body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }

    header {
      background: linear-gradient(to bottom, #333, #111);
      color: #fff;
      text-align: center;
      padding: 20px 0;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      border-bottom: 2px solid #000;
    }

    h1 {
      margin: 0;
      font-size: 24px;
    }

    nav {
      background: linear-gradient(to bottom, #444, #222);
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
    }

    ul {
      list-style-type: none;
      padding: 0;
      text-align: center;
    }

    li {
      display: inline;
      margin-right: 20px;
    }

    a {
      text-decoration: none;
      color: #fff;
      font-weight: bold;
      transition: all 0.3s;
    }

    a:hover {
      color: #f2f2f2;
    }

    .container {
      margin: 20px;
      background: linear-gradient(to bottom, #fff, #ddd);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
      padding: 20px;
    }

    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    th {
      background: linear-gradient(to bottom, #333, #111);
      color: #fff;
    }

    tr:nth-child(even) {
      background: linear-gradient(to bottom, #f2f2f2, #ddd);
    } 
</style>
</head>
<body>
  <header>
    <h1>Formalss Website</h1>
  </header>
  <nav>
    <ul>
      <li><a href="/">Landing Page</a></li>
      <li><a href="/account">Accounts</a></li>
      <li><a href="/user">Users</a></li>
    </ul>
  </nav>
  <div class="container">
    <h1>Users</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Address</th>
          <th>Phone Number</th>
          <th>Email Address</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
          <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->lname ?></td>
            <td><?= $user->fname ?></td>
            <td><?= $user->address ?></td>
            <td><?= $user->phone ?></td>
            <td><?= $user->email ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>
