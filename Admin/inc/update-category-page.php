<?php
require "../config/connection.php";
$id = mysqli_real_escape_string($conn, $_POST['id']);
$sql = "select * from category where category_id = '$id'";
// echo $sql; die;
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

?>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Update category</h2>
                </div>
                <div id="alert-message"></div>
                <div class="body">
                    <form id="category-update-form" enctype="multipart/form-data">
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Name</label>
                                <textarea class="form-control" name="name" required><?= $data['category_name'] ?></textarea>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div>
                                <!-- <textarea name="details" cols="30" rows="5" class="form-control no-resize" required></textarea> -->
                                <label class="form-label">Contest Image</label>
                                <div>
                                    <img id="image_tag" width='100' src="uploads/category_images/<?= $data['category_image'] ?>" alt="">
                                </div>
                                <input id="file_input" name='category-image' type="file" class="form-control " accept="image/*" required>
                            </div>
                        </div>
                        <input type="hidden" name='id' value="<?= $id ?>">
                        <!-- <input type="hidden" name="formType" value="update2"> -->
                        <button class="btn btn-primary waves-effect" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="scripts/submitForms.js"></script> -->
<script src="scripts/editContest.js"></script>