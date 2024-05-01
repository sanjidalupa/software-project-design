<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Survey Dashboard</title>
<!-- Link to Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-nav">
      <a class="nav-link active" aria-current="page" href="#">Surveys</a>
      <a class="nav-link" href="#">Imports</a>
    </div>
  </div>
</nav>

<!-- Main content area -->
<div class="container my-4">
  <!-- Survey list header -->
  <div class="d-flex justify-content-between align-items-center mb-2">
    <h2>View all surveys</h2>
    <div>
      <input class="form-control" type="search" placeholder="Search" aria-label="Search">
    </div>
    <button class="btn btn-primary">New Survey</button>
  </div>
  
  <!-- Survey card -->
  <div class="card mb-3">
    <img src="your-image-link.jpg" class="card-img-top" alt="Survey Header Image">
    <div class="card-body">
      <h5 class="card-title">Customer survey</h5>
      <p class="card-text"><small class="text-muted">Primary team</small></p>
      <div class="d-flex justify-content-between">
        <button class="btn btn-outline-primary">Edit</button>
        <div>
          <!-- Place for additional icons or actions -->
        </div>
      </div>
    </div>
  </div>

  <!-- Archive button at the bottom -->
  <div class="d-flex justify-content-end">
    <button class="btn btn-outline-secondary">Archive</button>
  </div>
</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
