<?php
require "../config/connection.php";
$id = mysqli_real_escape_string($conn, $_POST['id']);
$sql = "select * from contests where contest_id = '$id'";
// echo $sql; die;
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);


$sql2 = "SELECT * FROM category";
$resultCat = mysqli_query($conn, $sql2);

?>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Update Contests</h2>
                </div>
                <div id="alert-message"></div>
                <div class="body">
                    <form id="contest-update-form" enctype="multipart/form-data">
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Name</label>
                                <textarea class="form-control" name="name" required><?= $data['contest_name'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Deadline</label>
                                <input value="<?= $data['contest_deadline'] ?>" name='deadline' type="datetime-local" class=" form-control">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Contest Prize</label>
                                <textarea type="number" class="form-control" name="prize" required><?= $data['contest_prize'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Contest Winner</label>
                                <textarea type="number" class="form-control" name="winner" required><?= $data['contest_winner'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Author</label>
                                <textarea name="author" class="form-control"><?= $data['contest_author'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div>
                                <!-- <textarea name="details" cols="30" rows="5" class="form-control no-resize" required></textarea> -->
                                <label class="form-label">Contest Image</label>
                                <div>
                                    <img id="image_tag" width='100' src="uploads/contest_profile_images/<?= $data['contest_image'] ?>" alt="">
                                </div>
                                <input id="file_input" name='contest-image' type="file" class="form-control " accept="image/*" >
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Category</label>
                                <select name="category" id="" class="form-control show-tick">
                                    <option value="">-- Please select --</option>
                                    <?php while ($row = mysqli_fetch_assoc($resultCat)) : ?>
                                        <option value="<?= $row['category_name'] ?>" <?php if($row['category_name'] == $data['contest_category']) echo 'selected' ?>><?= $row['category_name'] ?></option>
                                    <?php endwhile ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Details</label>
                                <textarea name="details" cols="30" rows="5" class="form-control no-resize" required><?= $data['contest_details'] ?></textarea>
                            </div>
                        </div>
                        <input type="hidden" name='id' value="<?= $id ?>">
                        <input type="hidden" name="formType" value="update2">
                        <button class="btn btn-primary waves-effect" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="scripts/submitForms.js"></script> -->
<script src="scripts/editContest.js"></script>