<!-- include header php -->
<?php include 'header.php'; ?>
</header>

<div class="page-section pt-5">
  <div class="container">
    <nav aria-label="Breadcrumb">
      <ul class="breadcrumb p-0 mb-0 bg-transparent">
        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
        <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
      </ul>
    </nav>

    <?php
    // Include the database configuration file
    include('config.php');

    // Get the blog ID from the query string
    $blog_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

    // Fetch the blog details from the database
    $query = "SELECT * FROM blogs WHERE id = $blog_id";
    $result = mysqli_query($conn, $query);

    // Check if the blog post exists
    if (mysqli_num_rows($result) > 0) {
      $blog = mysqli_fetch_assoc($result);
      $date = date('F j, Y', strtotime($blog['created_at']));
    } else {
      echo "Blog post not found.";
      exit;
    }

    // Close the database connection
    mysqli_close($conn);
    ?>

    <div class="row">
      <div class="col-lg-8">
        <div class="blog-single-wrap">
          <div class="header">
            <div class="post-thumb">
              <img src="<?php echo htmlspecialchars($blog['blog_image']); ?>" alt="" />
            </div>
            <div class="meta-header">
              <div class="post-author">
                <div class="avatar">
                  <img src="assets/img/person/person_1.jpg" alt="" />
                </div>
                by <a href="#">Stephen Doe</a>
              </div>
              <div class="post-sharer">
                <a href="#" class="btn social-facebook"><span class="mai-logo-facebook-f"></span></a>
                <a href="#" class="btn social-twitter"><span class="mai-logo-twitter"></span></a>
                <a href="#" class="btn social-linkedin"><span class="mai-logo-linkedin"></span></a>
                <a href="#" class="btn"><span class="mai-mail"></span></a>
              </div>
            </div>
          </div>
          <h1 class="post-title"><?php echo htmlspecialchars($blog['title']); ?></h1>
          <div class="post-meta">
            <div class="post-date">
              <span class="icon">
                <span class="mai-time-outline"></span>
              </span>
              <a href="#"><?php echo $date; ?></a>
            </div>
            <div class="post-comment-count ml-2">
              <span class="icon">
                <span class="mai-chatbubbles-outline"></span>
              </span>
              <a href="#">4 Comments</a>
            </div>
          </div>
          <div class="post-content">
            <?php echo nl2br(htmlspecialchars($blog['content'])); ?>
          </div>
        </div>

        <div class="comment-form-wrap pt-5">
          <h2 class="mb-5">Leave a comment</h2>
          <form action="submit_comment.php" method="post">
            <div class="form-row form-group">
              <div class="col-md-6">
                <label for="name">Name *</label>
                <input type="text" class="form-control" id="name" name="name" required />
              </div>
              <div class="col-md-6">
                <label for="email">Email *</label>
                <input type="email" class="form-control" id="email" name="email" required />
              </div>
            </div>
            <div class="form-group">
              <label for="website">Website</label>
              <input type="url" class="form-control" id="website" name="website" />
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="message" id="message" cols="30" rows="8" class="form-control"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Post Comment" class="btn btn-primary" />
            </div>
          </form>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="widget">
          <!-- Widget search -->
          <div class="widget-box">
            <form action="#" class="search-widget">
              <input type="text" class="form-control" placeholder="Enter keyword.." />
              <button type="submit" class="btn btn-primary btn-block">
                Search
              </button>
            </form>
          </div>

          <!-- Widget Categories -->
          <div class="widget-box">
            <h4 class="widget-title">Category</h4>
            <div class="divider"></div>

            <ul class="categories">
              <li><a href="#">Cleaning Products</a></li>
              <li><a href="#">Hygiene Solutions</a></li>
              <li><a href="#">Sanitization</a></li>
              <li><a href="#">Eco-Friendly Products</a></li>
              <li><a href="#">Maintenance Tips</a></li>
              <li><a href="#">Product Reviews</a></li>
              <li><a href="#">Industrial Cleaning</a></li>
              <li><a href="#">Commercial Cleaning</a></li>
            </ul>

          </div>



          <!-- Widget Tag Cloud -->
          <div class="widget-box">
            <h4 class="widget-title">Tag Cloud</h4>
            <div class="divider"></div>

            <div class="tag-clouds">
              <a href="#" class="tag-cloud-link">Cleaning Products</a>
              <a href="#" class="tag-cloud-link">Hygiene Solutions</a>
              <a href="#" class="tag-cloud-link">Commercial Cleaning</a>
              <a href="#" class="tag-cloud-link">Industrial Cleaning</a>
              <a href="#" class="tag-cloud-link">Eco-Friendly</a>
              <a href="#" class="tag-cloud-link">Sanitization</a>
              <a href="#" class="tag-cloud-link">Disinfectants</a>
              <a href="#" class="tag-cloud-link">Product Reviews</a>
              <a href="#" class="tag-cloud-link">Maintenance Tips</a>
              <a href="#" class="tag-cloud-link">Client Testimonials</a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>

< <!-- include footer php -->
  <?php include 'footer.php'; ?>