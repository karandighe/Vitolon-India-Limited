<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>Failed</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;700&amp;family=Roboto:wght@400;700&amp;display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.css"
    integrity="sha512-x9WwyMYBnlXMNQ6kQ/Lyzu1NqIhLQKL5Oq6xByfXuRj7s9CskyCbLv/1IjqzJmXwFXWr0ov6jBV7Qbc0hh9nHg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/js/all.js"
    integrity="sha512-YbiNgTNv2GVfwJwqGr9Xv9xWzPIEwaDOv3f2S6HFbRVeo/xuM87nKqkmBPctPP3sbvxv3EpNIRss+3gjEJbVrA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">

    <?php include 'header.php';?>
    <!-- ======================== page title =========================== -->
    <section class="page-title-layout1 page-title-light text-center bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/breadcrum-contact.webp" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle-heading">Failed</h1>
            <nav>
              <ol class="breadcrumb d-flex justify-content-center mt-20 mb-0">
                <li class="breadcrumb-item">
                  <a href="index.php">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Failed</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <a class="home-nav" href="index.php">
        <i class="icon-home"></i>
      </a>
      <div class="curve-top-shape">
        <svg class="curve-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
          <path class="curve-path" d="M1000,4.3V0H0v4.3C0.9,23.1,126.7,99.2,500,100S1000,22.7,1000,4.3z"></path>
        </svg>
      </div>
    </section>


    <section class="blog-layout1 pb-70">
      <div class="container">
        <div class="row section-row align-items-center">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="confirmation-content text-center" data-aos="fade-up" data-aos-duration="500">
                <img src="assets/images/icons/failed-icon.png" alt="failed" style="height: 150px;padding-top: 30px;">
                <h2 class="text-lg mt-3 mb-4">Your mail is not send sucessfully!</h2>
                <p class="mb-4">Please try again.</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <?php include 'footer.php';?>
  </div>
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>