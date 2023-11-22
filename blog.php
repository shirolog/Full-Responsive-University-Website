<!-- @format -->
<?php 
require('./connect.php');

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $comment = $_POST['comment'];
  $comment = filter_var($comment, FILTER_SANITIZE_STRING);

  $insert_comment = $conn->prepare("INSERT INTO  `comment` (name, email, comment) VALUES
  (?, ?, ?) ");
  $insert_comment->execute(array($name, $email, $comment));
  header('Location:./blog.php');
  exit();
}

?>


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
    <link rel="stylesheet" href="./assets/css/blog.css" />
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
      <h1>Our Certificate & Online Programs for 2022</h1>
    </section>
    <!-- blog section -->
    <section class="blog-content">
      <div class="row">
        <div class="blog-left">
          <img src="./assets/images/certificate.jpg" alt="" />
          <h2>Our Certificate & Online Programs for 2022</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
            placeat consectetur in atque, voluptate quidem possimus, mollitia
            hic quam autem quas a magni adipisci eius tenetur earum. Esse,
            repellendus iure!
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis
            nostrum omnis blanditiis itaque minus excepturi molestias, dolores
            aperiam animi earum reiciendis ex! Suscipit numquam dolorem
            doloribus, dolorum nihil accusantium adipisci.
          </p>
          <br />
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam alias
            adipisci eaque ducimus dolore autem voluptates laboriosam, sed quam
            cupiditate natus sunt unde est quas iste eum facilis, odio nihil.
          </p>
          <br />
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos enim
            culpa rerum ea nemo aspernatur quo, impedit labore alias minus.
            Distinctio amet, voluptas ut beatae eius soluta illum nemo
            molestiae!
          </p>
          <div class="comment-box">
            <h3>Leave a comment</h3>
            <form class="comment-form" method="post">
              <input type="text" name="name" placeholder="Enter Name" />
              <input type="email" name="email" placeholder="Email" />
              <textarea rows="5" name="comment" placeholder="Your comment"></textarea>
              <button type="submit" name="submit" class="hero-btn red-btn">
                POST COMMENT
              </button>
            </form>
          </div>
        </div>
        <div class="blog-right">
          <h3>Post Categories</h3>
          <div>
            <span>Business Analytics</span>
            <span>21</span>
          </div>
          <div>
            <span>Data Science</span>
            <span>28</span>
          </div>
          <div>
            <span>Machine learning</span>
            <span>15</span>
          </div>
          <div>
            <span>Computer Science</span>
            <span>34</span>
          </div>
          <div>
            <span>AutoCAD</span>
            <span>42</span>
          </div>
          <div>
            <span>Journalism</span>
            <span>22</span>
          </div>
          <div>
            <span>Commerce</span>
            <span>30</span>
          </div>
        </div>
      </div>
    </section>
    <!-- footer section -->
    <?php require('./footer.php');?>

    <script src="./assets/js/app.js"></script>
  </body>
</html>
