<!-- @format -->
<?php 
require('./connect.php');

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_STRING);
  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_STRING);
  $subject = $_POST['subject'];
  $subject = filter_var($subject, FILTER_SANITIZE_STRING);
  $message = $_POST['message'];
  $message = filter_var($message, FILTER_SANITIZE_STRING);

  $insert_message = $conn->prepare("INSERT INTO  `message` (name, email, subject, message) VALUES
  (?, ?, ?, ?) ");
  $insert_message->execute(array($name, $email, $subject, $message));
  header('Location:./contact.php');
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
    <link rel="stylesheet" href="./assets/css/contact.css" />
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
      <h1>Contact US</h1>
    </section>
    <!-- contact section -->
    <section class="location">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d855924.8070253567!2d-95.97004336647572!3d35.49746965159415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b561e524498be3%3A0x2e4e371317ca3e0a!2sBengal%20Fire%20Department!5e0!3m2!1sja!2sjp!4v1670765550592!5m2!1sja!2sjp"
        width="600"
        height="450"
        style="border: 0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>
    <!-- contact-us section -->
    <section class="contact-us">
      <div class="row">
        <div class="contact-col">
          <div>
            <i class="fa fa-home"></i>
            <span>
              <h5>XYZ Road, ABC Building</h5>
              <p>Bangalore, Karnataka, In</p>
            </span>
          </div>
          <div>
            <i class="fa fa-phone"></i>
            <span>
              <h5>+1 0123456789</h5>
              <p>Monday to Saturday, 10AM to 6PM</p>
            </span>
          </div>
          <div>
            <i class="fa fa-envelope"></i>
            <span>
              <h5>info@gmail.com</h5>
              <p>Email us your query</p>
            </span>
          </div>
        </div>
        <div class="contact-col">
          <form action="" method="post">
            <input
              type="text"
              placeholder="Enter your name"
              required
              name="name"
            />
            <input
              type="email"
              placeholder="Enter email address"
              required
              name="email"
            />
            <input
              type="text"
              placeholder="Enter your subject"
              required
              name="subject"
            />
            <textarea
              rows="8"
              placeholder="Message"
              required
              name="message"
            ></textarea>
            <button type="submit" name="submit" class="hero-btn red-btn">Send Message</button>
          </form>
        </div>
      </div>
    </section>
    <!-- footer section -->
    <?php require('./footer.php');?>

    <script src="./assets/js/app.js"></script>
  </body>
</html>
