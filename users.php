<?php
include 'Admin/config/connection.php';
if(!isset($_SESSION['user'])){
  header('Location: index.php');
}
include 'include/head.php';
include 'include/login-registration.php';
// print_r($_SESSION);
$name = $_SESSION['user']['name'];
$sql = "SELECT * FROM USERS WHERE user_name = '$name'";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
?>

<div class="page-heading">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 header-text">
        <h2>View <?=$_SESSION['user']['name']?>'s Photos and <em>Contest Details</em></h2>
        <p>If you wish to <a rel="nofollow" href="https://templatemo.com/contact" target="_blank">support TemplateMo</a>, you shall make a little amount of contribution via PayPal. We hope this SnapX template is useful for your web development. Thank you.</p>
      </div>
    </div>
  </div>
</div>

<div class="user-info">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="avatar">
          <img src="assets/images/user-avatar.jpg" alt="">
          <h4>#<?= $data['user_id'].' ' . $data['user_name']?></h4>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="info">
          <h6>Rank</h6>
          <h4>#121</h4>
          <span>of 1680</span>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="info">
          <h6>Ratings</h6>
          <h4>4.56</h4>
          <span>of 5.00 Stars</span>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="info">
          <h6>Top Rated</h6>
          <h4>Nature</h4>
          <span>Picture Category</span>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="info">
          <h6>Profile Views</h6>
          <h4>8,250</h4>
          <span>Monthly</span>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="info">
          <h6>Contests Won</h6>
          <h4>90</h4>
          <span>of 12,400</span>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6">
        <div class="info">
          <h6>Total Earned</h6>
          <h4>$68,000</h4>
          <span>All Time</span>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="thumb">
          <img src="assets/images/portfolio-01.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Walk In the Beach</h4>
              <span>Ranked: <em>2nd</em></span>
              <span>Award Won: <em>None</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="thumb">
          <img src="assets/images/portfolio-02.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Walk In The Nature</h4>
              <span>Ranked: <em>3rd</em></span>
              <span>Award Won: <em>EOS R3</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="thumb">
          <img src="assets/images/portfolio-03.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Walk In The Forest</h4>
              <span>Ranked: <em>4th</em></span>
              <span>Award: <em>EOS R7</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="thumb">
          <img src="assets/images/portfolio-04.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Forest Nature</h4>
              <span>Ranked: <em>2nd</em></span>
              <span>Award: <em>EOS R3</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="thumb">
          <img src="assets/images/portfolio-05.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Fly thru the river</h4>
              <span>Ranked: <em>1st</em></span>
              <span>Award: <em>EOS R1</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="thumb">
          <img src="assets/images/portfolio-06.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Rocky Mountain</h4>
              <span>Ranked: <em>2nd</em></span>
              <span>Award Won: <em>None</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="thumb">
          <img src="assets/images/portfolio-07.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Rocky Mountain . Part 2</h4>
              <span>Ranked: <em>2nd</em></span>
              <span>Award Won: <em>None</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="thumb">
          <img src="assets/images/portfolio-08.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Blue Lake Nature</h4>
              <span>Ranked: <em>4th</em></span>
              <span>Award Won: <em>None</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="thumb">
          <img src="assets/images/portfolio-09.jpg" alt="">
          <div class="hover-effect">
            <div class="content">
              <h4>Walk In The Forest</h4>
              <span>Ranked: <em>3rd</em></span>
              <span>Award Won: <em>None</em></span>
              <ul>
                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                <li><a href="#"><i class="fa fa-eye"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="main-button">
          <a href="#">Load More Photos</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center">
          <h6>Contact This User</h6>
          <h4>Don't Be Shy <em></em> to contact the <em>Photographer Now</em></h4>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="info-item">
          <i class="fa fa-phone"></i>
          <h4>Phone Numbers</h4>
          <span><a href="#">010-020-0340</a><br><a href="#">090-080-0760</a></span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="info-item">
          <i class="fa fa-envelope"></i>
          <h4>Email Addresses</h4>
          <span><a href="#">info@company.com</a><br><a href="#">SnapX@company.com</a></span>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="info-item">
          <i class="fa fa-map-marked"></i>
          <h4>Office Location</h4>
          <span><a href="#">155 Michigan Ave, Chicago,<br>IL 60601, United States</a></span>
        </div>
      </div>
      <div class="col-lg-12">
        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-lg-6">
              <fieldset>
                <input type="text" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="text" name="telephone" id="telephone" placeholder="Your Telephone..." autocomplete="on" required>
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="email" name="email" id="email" placeholder="Your E-mail..." required="">
              </fieldset>
            </div>
            <div class="col-lg-6">
              <fieldset>
                <input type="text" name="subject" id="subject" placeholder="Subject..." autocomplete="on">
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <textarea name="message" id="message" placeholder="Your Message"></textarea>
              </fieldset>
            </div>
            <div class="col-lg-12">
              <fieldset>
                <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'include/foot.php' ?>