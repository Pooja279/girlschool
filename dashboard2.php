Here's an example of a Bootstrap admin dashboard with two lists for teachers and students, both with responsive design:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Students</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container-fluid mt-3">
        <div class="row">
            <!-- Teachers list -->
            <div class="col-md-6">
                <h2>Teachers</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>janesmith@example.com</td>
                        </tr>
                        <tr>
                            <td>Mark Johnson</td>
                            <td>markjohnson@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Students list -->
            <div class="col-md-6">
                <h2>Students</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Emily Davis</td>
                            <td>emilydavis@example.com</td>
                        </tr>
                        <tr>
                            <td>Michael Johnson</td>
                            <td>michaeljohnson@example.com</td>
                        </tr>
                        <tr>
                            <td>Sarah Lee</td>
                            <td>sarahlee@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body