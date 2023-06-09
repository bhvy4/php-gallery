<?php
include 'Admin/config/connection.php';
include 'include/head.php';
include 'include/login-registration.php';

$result = mysqli_query($conn, "SELECT * FROM contests ORDER BY RAND() LIMIT 3");
// $data = mysqli_fetch_assoc($result);

$sql = "SELECT c.category_name AS category_name, c.category_image, COUNT(*) AS contest_count
FROM category c
LEFT JOIN contests co ON c.category_name = co.contest_category
GROUP BY c.category_id";
$category_result = mysqli_query($conn, $sql);

$closed_contests = mysqli_query($conn, "SELECT * FROM contests WHERE contest_status ='1'");

if (isset($_SESSION['user']['user_name'])) {
  $user = base64_decode($_SESSION['user']['user_name']);
  $query = 'SELECT * FROM users where user_name = "$user"';

  $result = mysqli_query($conn, $query);
  if ($result) {
    $user_data = mysqli_fetch_assoc($result);
  }
}
?>


<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="header-text">
          <h2>Enter a world of <em>Photos</em> &amp; Amazing <em>Awards</em></h2>
          <p>SnapX Photography is a professional website template with 5 different HTML pages for maximum customizations. It is free for commercial usage. This Bootstrap v5.1.3 CSS layout is provided by TemplateMo Free CSS Templates.</p>
          <div class="buttons">
            <div class="big-border-button">
              <a href="contests.php">Explore SnapX Contest</a>
            </div>
            <div class="icon-button">
              <a href="https://youtube.com/templatemo" target="_blank"><i class="fa fa-play"></i> Watch Our Video Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<section class="featured-items" id="featured-items">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">

          <?php while ($data = mysqli_fetch_assoc($result)) : ?>
            <div class="item">
              <div class="thumb">
                <img src="Admin/uploads/contest_profile_images/<?= $data['contest_image'] ?>" alt="">
                <div class="hover-effect">
                  <div class="content">
                    <h4><?= $data['contest_name'] ?><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                    <ul>
                      <li><span>Contest Winner:</span> <?= $data['contest_winner'] ?></li>
                      <li><span>Contest Author:</span> <?= $data['contest_author'] ?></li>
                      <li><span>Awards:</span> <?= $data['contest_prize'] ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile ?>
          <!-- <div class="item">
            <div class="thumb">
              <img src="assets/images/featured-03.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <h4>Happy In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                  <ul>
                    <li><span>Contest Winner:</span> Vincent Adam</li>
                    <li><span>Contest Author:</span> Anthony Soft</li>
                    <li><span>Awards:</span> $1,800 + Canon EOS R6</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="thumb">
              <img src="assets/images/featured-01.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <h4>Walk In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                  <ul>
                    <li><span>Contest Winner:</span> Thomas Eddy</li>
                    <li><span>Contest Author:</span> Anthony Soft</li>
                    <li><span>Awards:</span> $8,400 + Canon EOS R1</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="thumb">
              <img src="assets/images/featured-02.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <h4>Run In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                  <ul>
                    <li><span>Contest Winner:</span> Vincent Adam</li>
                    <li><span>Contest Author:</span> Anthony Soft</li>
                    <li><span>Awards:</span> $5,500 + Canon EOS R3</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="thumb">
              <img src="assets/images/featured-03.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <h4>Stay In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                  <ul>
                    <li><span>Contest Winner:</span> Thomas Eddy</li>
                    <li><span>Contest Author:</span> Anthony Soft</li>
                    <li><span>Awards:</span> $4,400 + Canon EOS R5</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="thumb">
              <img src="assets/images/featured-01.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <h4>Walk In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                  <ul>
                    <li><span>Contest Winner:</span> Vincent Adam</li>
                    <li><span>Contest Author:</span> Anthony Soft</li>
                    <li><span>Awards:</span> $3,800 + Canon EOS R6</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="thumb">
              <img src="assets/images/featured-02.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <h4>Shoot In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                  <ul>
                    <li><span>Contest Winner:</span> Vincent Adam</li>
                    <li><span>Contest Author:</span> Anthony Soft</li>
                    <li><span>Awards:</span> $2,400 + Canon EOS R7</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="thumb">
              <img src="assets/images/featured-03.jpg" alt="">
              <div class="hover-effect">
                <div class="content">
                  <h4>Fly In The Nature <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> <span>(4.5)</span></h4>
                  <ul>
                    <li><span>Contest Winner:</span> Vincent Adam</li>
                    <li><span>Contest Author:</span> Anthony Soft</li>
                    <li><span>Awards:</span> $1,200 + Canon EOS R10</li>
                  </ul>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>


<section class="popular-categories">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="section-heading">
          <h6>Our Categories</h6>
          <h4>Check Out <em>Popular</em> Contest <em>Categories</em></h4>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="main-button">
          <a href="categories.php">Discover All Categories</a>
        </div>
      </div>
      <?php while ($row = mysqli_fetch_assoc($category_result)) : ?>
        <div class="col-lg-3 col-sm-6">
          <div class="popular-item">
            <div class="top-content">
              <div class="icon">
                <img src="assets/images/icon-01.png" alt="">
              </div>
              <div class="right">
                <h4><?= $row['category_name'] ?> Contest</h4>
                <span><em><?= $row['contest_count'] ?></em> Available Contests</span>
              </div>
            </div>
            <div class="thumb">
              <img src="Admin/uploads/category_images/<?= $row['category_image'] ?>" alt="">
              <span class="category">Top Contest</span>
              <span class="likes"><i class="fa fa-heart"></i> 256</span>
            </div>
            <div class="border-button">
              <a href="contest-details.php">Browse <?= $row['category_name'] ?> Contests</a>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
      <!-- <div class="col-lg-3 col-sm-6">
        <div class="popular-item">
          <div class="top-content">
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <div class="right">
              <h4>Random Pic Contest</h4>
              <span><em>116</em> Available Contests</span>
            </div>
          </div>
          <div class="thumb">
            <img src="assets/images/popular-02.png" alt="">
            <span class="category">Top Contest</span>
            <span class="likes"><i class="fa fa-heart"></i> 256</span>
          </div>
          <div class="border-button">
            <a href="contest-details.php">Browse Random Pic Contests</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="popular-item">
          <div class="top-content">
            <div class="icon">
              <img src="assets/images/icon-03.png" alt="">
            </div>
            <div class="right">
              <h4>Portrait Pic Contest</h4>
              <span><em>164</em> Available Contests</span>
            </div>
          </div>
          <div class="thumb">
            <img src="assets/images/popular-03.png" alt="">
            <span class="category">Top Contest</span>
            <span class="likes"><i class="fa fa-heart"></i> 256</span>
          </div>
          <div class="border-button">
            <a href="contest-details.php">Browse Portrait Pic Contests</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="popular-item">
          <div class="top-content">
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <div class="right">
              <h4>Space Pic Contest</h4>
              <span><em>135</em> Available Contests</span>
            </div>
          </div>
          <div class="thumb">
            <img src="assets/images/popular-04.png" alt="">
            <span class="category">Top Contest</span>
            <span class="likes"><i class="fa fa-heart"></i> 256</span>
          </div>
          <div class="border-button">
            <a href="contest-details.php">Browse Space Pic Contests</a>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</section>

<section class="closed-contests">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center">
          <h6>Closed Photography Contests</h6>
          <h4><em>Previous Contests</em> With Handpicked <em>Winners</em></h4>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="owl-features owl-carousel" style="position: relative; z-index: 5;">
          <?php while ($row = mysqli_fetch_assoc($closed_contests)) : ?>
            <div class="item">
              <div class="closed-item">
                <div class="thumb">
                  <img src="Admin/uploads/contest_profile_images/<?= $row['contest_image'] ?>" alt="">
                  <span class="winner"><em>Winner:</em> <?= $row['contest_winner'] ?></span>
                  <span class="price"><em>Award :</em>$<?= $row['contest_prize'] ?></span>
                </div>
                <div class="down-content">
                  <div class="row">
                    <div class="col-7">
                      <h4>88 Participants <br><span>Number Of Artists</span></h4>
                    </div>
                    <div class="col-5">
                      <h4 class="pics">320 Pictures <br><span>Submited Pics</span></h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
          <!-- <div class="item">
            <div class="closed-item">
              <div class="thumb">
                <img src="assets/images/closed-02.jpg" alt="">
                <span class="winner"><em>Winner:</em> Anthony Soft</span>
                <span class="price"><em>Award :</em> $4,200</span>
              </div>
              <div class="down-content">
                <div class="row">
                  <div class="col-7">
                    <h4>96 Participants <br><span>Number Of Artists</span></h4>
                  </div>
                  <div class="col-5">
                    <h4 class="pics">410 Pictures <br><span>Submited Pics</span></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="closed-item">
              <div class="thumb">
                <img src="assets/images/closed-03.jpg" alt="">
                <span class="winner"><em>Winner:</em> Anthony Soft</span>
                <span class="price"><em>Award :</em> $3,200</span>
              </div>
              <div class="down-content">
                <div class="row">
                  <div class="col-7">
                    <h4>74 Participants <br><span>Number Of Artists</span></h4>
                  </div>
                  <div class="col-5">
                    <h4 class="pics">284 Pictures <br><span>Submited Pics</span></h4>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <div class="col-lg-12">
        <div class="border-button text-center">
          <a href="contests.php">Browse Open Contests</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- <section class="pricing-plans">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading text-center">
          <h6>Our Pricing</h6>
          <h4>Photography <em>Contest Plans</em> and Price <em>Awards</em></h4>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="pricing-item">
          <img src="assets/images/pricing-01.jpg" alt="">
          <h4>Basic Plan</h4>
          <ul class="first-plan">
            <li>Lorem Ipsum Dolores Sonte</li>
            <li>Songe Lorem Ipsum Dol</li>
            <li>Matrios Venga Heptuss</li>
            <li>Denim Sriracha Kogi</li>
            <li>Digital Photography Awards</li>
          </ul>
          <span class="price">$25 USD</span>
          <div class="border-button">
            <a href="#">Choose This Plan</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="pricing-item">
          <img src="assets/images/pricing-02.jpg" alt="">
          <h4>Standard Plan</h4>
          <ul class="second-plan">
            <li>Lorem Ipsum Dolores Sonte</li>
            <li>Songe Lorem Ipsum Dol</li>
            <li>Matrios Venga Heptuss</li>
            <li>Denim Sriracha Kogi</li>
            <li>Digital Photography Awards</li>
          </ul>
          <span class="price">$45 USD</span>
          <div class="border-button">
            <a href="#">Choose This Plan</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="pricing-item">
          <img src="assets/images/pricing-03.jpg" alt="">
          <h4>Advanced Plan</h4>
          <ul class="third-plan">
            <li>Lorem Ipsum Dolores Sonte</li>
            <li>Songe Lorem Ipsum Dol</li>
            <li>Matrios Venga Heptuss</li>
            <li>Denim Sriracha Kogi</li>
            <li>Digital Photography Awards</li>
          </ul>
          <span class="price">$85 USD</span>
          <div class="border-button">
            <a href="#">Choose This Plan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<?php include 'include/foot.php' ?>