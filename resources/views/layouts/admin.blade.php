<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Your Name">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    
<header data-bs-theme="dark">
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Admin Dashboard</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Welcome to Admin Dashboard</h1>
        <p class="lead text-body-secondary">Manage your users, blog posts, and other site content from here.</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">User Management</h5>
              <p class="card-text">Manage your site's users, including creation, editing, and deletion.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/admin/users" class="btn btn-sm btn-outline-secondary">View Users</a>
                  <a href="/admin/users/create" class="btn btn-sm btn-outline-secondary">Add User</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Blog Post Management</h5>
              <p class="card-text">Create, edit, and delete blog posts for your site.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/admin/posts" class="btn btn-sm btn-outline-secondary">View Posts</a>
                  <a href="/admin/posts/create" class="btn btn-sm btn-outline-secondary">Add Post</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Site Statistics</h5>
              <p class="card-text">View important statistics about your site's performance.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="/admin/statistics" class="btn btn-sm btn-outline-secondary">View Stats</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-body-secondary py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">&copy; 2024 Your Company Name</p>
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>