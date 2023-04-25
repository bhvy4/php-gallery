<?php
 if(!isset($_GET['id'])) header('location: index.php');
 include 'Admin/config/connection.php';
 include 'include/head.php' ;
 include 'include/login-registration.php';

 $id = mysqli_real_escape_string($conn,$_GET['id']);
 $sql = "SELECT * FROM contests WHERE contest_id = '$id'";
 $contest = mysqli_query($conn,$sql);
 $data = mysqli_fetch_assoc($contest);
?>

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 header-text">
          <h2 class="space-need"><?=$data['contest_name']?> <em>Contest</em></h2>
          <h6>Contest Deadline</h6>
          <div class="main-content">
            <div class="counter">
              <div class="days">
                <div class="value">00</div>
                <span>Days</span>
              </div>
              <div class="hours">
                <div class="value">00</div>
                <span>Hours</span>
              </div>
              <div class="minutes">
                <div class="value">00</div>
                <span>Minutes</span>
              </div>
              <div class="seconds">
                <div class="value">00</div>
                <span>Seconds</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contest-details">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-content">
            <div class="row">
              <div class="col-lg-4">
                <span class="open">Open Contest</span>
                <span class="wish-list"><i class="fa fa-heart"></i> Add To Your Favorites</span>
              </div>
              <div class="col-lg-8">
                <ul>
                  <li><i class="fa fa-medal"></i> <span>Award:</span> $<?=$data['contest_prize']?></li>
                  <li><span>Time left:</span> 7 Days</li>
                  <li><span>Participants:</span> 118</li>
                  <li><span>Submittions:</span> 280</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="main-content">
            <h4>Requirements Of The Contest</h4>
            <p><?=$data['contest_details']?></p>
            <div class="row">
              <div class="col-lg-3 col-6">
                <div class="item">
                  <span>JPG</span>
                  <h5>A Trip In The Rain<br><h6>Previous Winner</h6></h5>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="item">
                  <span>PNG</span>
                  <h5>A Trip In The Jungle<br><h6>Previous Winner</h6></h5>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="item">
                  <span>PDF</span>
                  <h5>A Trip In The Mountain<br><h6>Previous Winner</h6></h5>
                </div>
              </div>
              <div class="col-lg-3 col-6">
                <div class="item">
                  <span>AI</span>
                  <h5>A Trip In The Forest<br><h6>Previous Winner</h6></h5>
                </div>
              </div>
            </div>
            <div class="main-button">
              <a href="#">Submit Your Photo/Video</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="contest-waiting">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h5>Other Contests Waiting For You:</h5>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="waiting-item">
            <img src="assets/images/waiting-01.jpg" alt="">
            <div class="down-content">
              <h4>Best Mountain Picture Award</h4>
              <p>Lorem ipsum dolor siter and ametters conseietur adipiscing elit.</p>
              <span class="price">Price: <em>$900</em></span>
              <span class="deadline">Deadline: <em>3 Days</em></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="waiting-item">
            <img src="assets/images/waiting-02.jpg" alt="">
            <div class="down-content">
              <h4>Nature Walk in the Forest</h4>
              <p>Lorem ipsum dolor siter and ametters conseietur adipiscing elit.</p>
              <span class="price">Price: <em>$1,400</em></span>
              <span class="deadline">Deadline: <em>2 Days</em></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="waiting-item">
            <img src="assets/images/waiting-03.jpg" alt="">
            <div class="down-content">
              <h4>The Road to Photograph</h4>
              <p>Lorem ipsum dolor siter and ametters conseietur adipiscing elit.</p>
              <span class="price">Price: <em>$1,250</em></span>
              <span class="deadline">Deadline: <em>4 Days</em></span>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="waiting-item">
            <img src="assets/images/waiting-04.jpg" alt="">
            <div class="down-content">
              <h4>The Lake and Mountain Scenery</h4>
              <p>Lorem ipsum dolor siter and ametters conseietur adipiscing elit.</p>
              <span class="price">Price: <em>$1,600</em></span>
              <span class="deadline">Deadline: <em>10 Days</em></span>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <ul class="pagination">
            <li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <?php include 'include/foot.php' ?>
