<!-- include header php -->
<?php include 'header.php'; ?>

<div class="container">
  <div class="page-banner">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-md-6">
        <nav aria-label="Breadcrumb">
          <ul class="breadcrumb justify-content-center py-0 bg-transparent">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Blog</li>
          </ul>
        </nav>
        <h1 class="text-center">Blog</h1>
      </div>
    </div>
  </div>
</div>
</header>

<div class="page-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <form action="#" class="form-search-blog">
          <div class="input-group">
            <div class="input-group-prepend">
              <select id="categories" class="custom-select bg-light">
                <option>All Categories</option>
                <option value="travel">Travel</option>
                <option value="lifestyle">LifeStyle</option>
                <option value="healthy">Healthy</option>
                <option value="food">Food</option>
              </select>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." />
          </div>
        </form>
      </div>
      <div class="col-sm-2 text-sm-right">
        <button class="btn btn-secondary">
          Filter <span class="mai-filter"></span>
        </button>
      </div>
    </div>

    <?php
    // Include the database configuration file
    include('config.php');

    // Fetch blog data from the database
    $query = "SELECT blogs.id, blogs.title, blogs.blog_image, blogs.created_at FROM blogs";
    $result = mysqli_query($conn, $query);

    // Check if there are any results
    if (mysqli_num_rows($result) > 0) {
    ?>
      <div class="row my-5">
        <?php
        // Fetch each row as an associative array
        while ($row = mysqli_fetch_assoc($result)) {
          // Format the date
          $date = date('d M Y', strtotime($row['created_at']));
        ?>
          <div class="col-lg-4 py-3">
            <div class="card-blog">
              <div class="header">
                <div class="post-thumb">
                  <img src="<?php echo htmlspecialchars($row['blog_image']); ?>" alt="" />
                </div>
              </div>
              <div class="body">
                <h5 class="post-title">
                  <a href="blog-details.php?id=<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['title']); ?></a>
                </h5>
                <div class="post-date">
                  Posted on <a href="#"><?php echo $date; ?></a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
      </div>
    <?php
    } else {
      echo "No blog posts found.";
    }

    // Close the database connection
    mysqli_close($conn);
    ?>


    <nav aria-label="Page Navigation">
      <ul class="pagination justify-content-center">
        <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item active" aria-current="page">
          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
        </li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</div>
<!-- include footer php -->
<?php include 'footer.php'; ?>