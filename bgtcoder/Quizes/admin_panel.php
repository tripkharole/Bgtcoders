<!DOCTYPE html>
<html>
  <head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin_panel.css">
  </head>
  <body>
    <header>
      <div class="logo">
        <h1>Admin Panel</h1>
      </div>
      <nav>
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Users</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="sidebar">
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="#">Users</a></li>
          <li><a href="#">Settings</a></li>
        </ul>
      </div>
      <div class="content">
        <section>
          <h2>Dashboard</h2>
          <div class="cards">
            <div class="card">
              <h3>Users</h3>
              <p>1,234</p>
            </div>
            <div class="card">
              <h3>Revenue</h3>
              <p>$12,345</p>
            </div>
            <div class="card">
              <h3>Orders</h3>
              <p>567</p>
            </div>
          </div>
        </section>
        <section>
          <h2>Users</h2>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>johndoe@example.com</td>
                <td><button>Edit</button><button>Delete</button></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jane Doe</td>
                <td>janedoe@example.com</td>
                <td><button>Edit</button><button>Delete</button></td>
              </tr>
            </tbody>
          </table>
        </section>
        <section>
          <h2>Settings</h2>
          <form>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            <button>Save</button>
          </form>
        </section>
      </div>
    </main>
  </body>
</html>