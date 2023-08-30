<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Teacher List</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <h2>Teacher List</h2>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <!-- Display list of teachers -->
            <tr>
              <td>1</td>
              <td>John Doe</td>
              <td>john@example.com</td>
              <td>
                <a href="edit_teacher.php?id=1" class="btn btn-primary btn-sm">Edit</a>
                <a href="delete_teacher.php?id=1" class="btn btn-danger btn-sm">Delete</a>
              </td>
            </tr>
            <!-- Repeat for other teachers -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
</html>
