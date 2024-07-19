<!-- include header php -->
<?php include 'header.php'; ?>

<main id="main">

  <!-- Modal -->
  <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="productModalLabel">Product Details</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <img id="modal-product-image" src="" class="img-fluid" alt="Product Image">
          <div class="product-details">
            <h3 id="modal-product-name"></h3>
            <p id="modal-product-price"></p>
            <p id="modal-product-type"></p>
            <div id="modal-product-description" class="description"></div>
          </div>
        </div>

      </div>
    </div>
  </div>


  <!-- ======= Works Section ======= -->
  <section class="section site-portfolio">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
          <h2>Product Catolog</h2>
          <p class="mb-0">UNIQUE BY NATURE</p>
        </div>
        <div class="col-md-12 col-lg-6 text-start text-lg-end" data-aos="fade-up" data-aos-delay="100">
          <div id="filters" class="filters">
            <a href="#" data-filter="*" class="active">All</a>
            <a href="#" data-filter=".house">House Keeping Products</a>
            <a href="#" data-filter=".laundary">Laundary Products</a>
            <a href="#" data-filter=".floorcare">FloorCare Products</a>

          </div>
        </div>
      </div>
      <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">

        <?php
        include 'config.php';
        $stmt = $conn->prepare('SELECT * FROM product');
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) :
          $product_type = $row['product_type']; // Get product type
        ?>
          <div class="item <?= strtolower($product_type) ?> col-sm-6 col-md-4 col-lg-4 mb-4">
            <a class="item-wrap fancybox" href="#" onclick="showProductDetails('<?= $row['product_name'] ?>', '<?= $row['product_price'] ?>', '<?= $row['product_image'] ?>', '<?= $row['id'] ?>', '<?= $row['product_description'] ?>', '<?= $row['product_type'] ?>')">
              <div class="work-info">
                <h3><?= $row['product_name'] ?></h3>
                <span><?= $product_type ?></span>
              </div>
              <img class="img-fluid" src="site_images/<?= $row['product_image'] ?>">
            </a>
          </div>
        <?php endwhile; ?>


      </div>
    </div>
  </section><!-- End  Works Section -->


</main><!-- End #main -->


<!-- include footer php -->
<?php include 'footer.php'; ?>