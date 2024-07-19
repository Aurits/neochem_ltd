<!-- include header php -->
<?php include 'header.php'; ?>

<div class="container">
  <div class="page-banner">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-md-6">
        <nav aria-label="Breadcrumb">
          <ul class="breadcrumb justify-content-center py-0 bg-transparent">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Contact</li>
          </ul>
        </nav>
        <h1 class="text-center">Contact Us</h1>
      </div>
    </div>
  </div>
</div>
</header>

<div class="page-section">
  <div class="container">
    <div class="row text-center align-items-center">
      <div class="col-lg-4 py-3">
        <div class="display-4 text-center text-primary"><span class="mai-pin"></span></div>
        <p class="mb-3 font-weight-medium text-lg">Address</p>
        <p class="mb-0 text-secondary">203 Fake St. Mountain View, San Francisco, California, USA</p>
      </div>
      <div class="col-lg-4 py-3">
        <div class="display-4 text-center text-primary"><span class="mai-call"></span></div>
        <p class="mb-3 font-weight-medium text-lg">Phone</p>
        <p class="mb-0"><a href="#" class="text-secondary">+1 232 3235 324</a></p>
        <p class="mb-0"><a href="#" class="text-secondary">+00 1122 3344 5566</a></p>
      </div>
      <div class="col-lg-4 py-3">
        <div class="display-4 text-center text-primary"><span class="mai-mail"></span></div>
        <p class="mb-3 font-weight-medium text-lg">Email Address</p>
        <p class="mb-0"><a href="#" class="text-secondary">support@seogram.com</a></p>
        <p class="mb-0"><a href="#" class="text-secondary">hello@seogram.com</a></p>
      </div>
    </div>
  </div>

  <section class="formcarry-container">
    <form action="https://formcarry.com/s/G2eLTVj5OYo" method="POST" enctype="multipart/form-data">

      <div class="formcarry-block">
        <label for="fc-generated-1-name">Full Name</label>
        <input type="text" name="name" id="fc-generated-1-name" placeholder="Your first and last name" />
      </div>

      <div class="formcarry-block">
        <label for="fc-generated-1-email">Your Email Address</label>
        <input type="email" name="email" id="fc-generated-1-email" placeholder="john@doe.com" />
      </div>

      <div class="formcarry-block">
        <label for="fc-generated-1-message">Your message</label>
        <textarea name="message" name="message" id="fc-generated-1-message" placeholder="Enter your message..."></textarea>
      </div>

      <div class="formcarry-block">
        <button type="submit">Send</button>
      </div>

    </form>
  </section>

  <!-- include footer php -->
  <?php include 'footer.php'; ?>