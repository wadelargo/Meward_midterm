<!DOCTYPE html>
<html>
<head>
  <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background: linear-gradient(135deg, #111 0%, #333 100%);
        color: white;
        padding: 10px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    nav {
        background: linear-gradient(135deg, #111 0%, #333 100%);
        color: white;
    }

    nav ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
    }

    nav li {
        display: inline;
    }

    nav a {
        text-decoration: none;
        color: white;
        padding: 10px 20px;
    }

    nav a:hover {
        background: linear-gradient(135deg, #111 0%, #333 100%);
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }

    h1 {
        font-size: 24px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background: linear-gradient(135deg, #111 0%, #333 100%);
        color: white;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
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
  <div class="container">
    <h1>Accounts</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>User ID</th>
          <th>Account Name</th>
          <th>Initial Investment</th>
          <th>Start Date</th>
          <th>Remarks</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($accounts as $account): ?>
          <tr>
            <td><?= $account->id ?></td>
            <td><?= $account->user_id ?></td>
            <td><?= $account->acct_name ?></td>
            <td><?= $account->init_invest ?></td>
            <td><?= $account->start_date ?></td>
            <td><?= $account->remarks ?></td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>
