<?php
require "../config/connection.php";
$id = mysqli_real_escape_string($conn, $_POST['id']);
$sql = "select * from contests where contest_id = '$id'";
// echo $sql; die;
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_assoc($result);

?>

<div class="container-fluid">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Update Contests</h2>
                </div>
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
                                <textarea type="number" class="form-control" name="price" required><?= $data['contest_prize'] ?></textarea>
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
                                <input name='contest-image' type="file" class="form-control " accept="image/*" required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Details</label>
                                <textarea name="details" cols="30" rows="5" class="form-control no-resize" required><?= $data['contest_details'] ?></textarea>
                            </div>
                        </div>
                        <div id="alert-message"></div>
                        <input type="hidden" name ='id' value = "<?=$id?>">
                        <button class="btn btn-primary waves-effect" type="submit" id='contactSubmitBtn'>Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script src="scripts/submitForms.js"></script> -->
<script src="scripts/editContest.js"></script>
