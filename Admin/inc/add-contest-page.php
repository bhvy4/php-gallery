<?php
require "../config/connection.php";
$sql = "SELECT * FROM category";
$result = mysqli_query($conn, $sql);

?>

<div class="container-fluid">
    <!-- <div class="block-header">
            <h2>
                FORM VALIDATION
                <small>Taken from <a href="https://jqueryvalidation.org/" target="_blank">jqueryvalidation.org</a></small>
            </h2>
        </div> -->
    <!-- Basic Validation -->
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>Add Contests</h2>
                    <ul class="header-dropdown m-r--5">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Action</a></li>
                                <li><a href="javascript:void(0);">Another action</a></li>
                                <li><a href="javascript:void(0);">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="body">
                    <form id="contest-form" enctype="multipart/form-data">
                        <div class="form-group ">
                            <div class="form-line">
                                <input type="text" class="form-control" name="name" placeholder='Name' required>
                                <!-- <label class="form-label">Name</label> -->
                            </div>
                        </div>
                        <div class="form-group ">
                            <div>
                                <label class="form-label">Deadline</label>
                                <input name='deadline' type="datetime-local" class=" form-control" placeholder="Ex: 30/07/2016 23:59">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <input type="number" class="form-control" name="contestPrice" placeholder='Award Price' required>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <!-- <label class="form-label">Author</label> -->
                                <input type="text" name="author" class="form-control" placeholder="Author">
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="form-line">
                                <label>Category</label> <br>
                                <select name="category" id="" class="form-control show-tick">
                                    <option value="">-- Please select --</option>
                                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                                        <option value="<?= $row['category_name'] ?>"><?= $row['category_name'] ?></option>
                                    <?php endwhile ?>
                                </select>
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
                                <textarea name="details" cols="30" rows="5" class="form-control no-resize" placeholder='Details' required></textarea>

                            </div>
                        </div>
                        <div id="alert-message"></div>
                        <button class="btn btn-primary waves-effect" type="submit" id='contactSubmitBtn'>Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="scripts/submitForms.js"></script>