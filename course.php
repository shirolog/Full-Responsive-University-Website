<!-- @format -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Easy Tutorial website,ホームページの見本"
    />
    <title>University website design- Easy Tutorials</title>
    <!-- google-font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./assets/css/common.css" />
  </head>
  <body>
    <!-- subheader section -->
    <section class="sub-header">
      <nav>
        <a href="#"><img src="./assets/images/logo.png" alt="" /></a>
        <div class="nav-links" id="navLinks">
          <i class="fa fa-xmark"></i>
          <ul>
            <li><a href="./index.php">HOME</a></li>
            <li><a href="./about.php">ABOUT</a></li>
            <li><a href="./course.php">COURSE</a></li>
            <li><a href="./blog.php">BLOG</a></li>
            <li><a href="./contact.php">CONTACT</a></li>
          </ul>
        </div>
        <i class="fa fa-bars"></i>
      </nav>
      <h1>Our Courses</h1>
    </section>
    <!-- course section -->
    <section class="course">
      <h1>Course we Offer</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
      <div class="row">
        <div class="course-col">
          <h3>Intermediate</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            sint temporibus ipsa velit vitae error corrupti deserunt. Nihil
            voluptatem debitis ullam reiciendis
          </p>
        </div>
        <div class="course-col">
          <h3>Degree</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            sint temporibus ipsa velit vitae error corrupti deserunt. Nihil
            voluptatem debitis ullam reiciendis
          </p>
        </div>
        <div class="course-col">
          <h3>Post guraduation</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            sint temporibus ipsa velit vitae error corrupti deserunt. Nihil
            voluptatem debitis ullam reiciendis
          </p>
        </div>
      </div>
    </section>
    <!-- facilities section -->
    <section class="facilities">
      <h1>Our Facilities</h1>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
      <div class="row">
        <div class="facilities-col">
          <img src="./assets/images/library.png" />
          <h3>World Class Library</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam
            suscipit reprehenderit nihil quae iusto placeat.
          </p>
        </div>
        <div class="facilities-col">
          <img src="./assets/images/basketball.png" />
          <h3>Largest Play Ground</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam
            suscipit reprehenderit nihil quae iusto placeat.
          </p>
        </div>
        <div class="facilities-col">
          <img src="./assets/images/cafeteria.png" />
          <h3>Tasty and Healthy Food</h3>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam
            suscipit reprehenderit nihil quae iusto placeat.
          </p>
        </div>
      </div>
    </section>
    <!-- footer section -->
    <?php require('./footer.php');?>

    <script src="./assets/js/app.js"></script>
  </body>
</html>
