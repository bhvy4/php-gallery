<?php
require "../config/connection.php";

$sql = "SELECT * FROM category ";

$result = mysqli_query($conn, $sql);



?>
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Categories
                    </h2>
                    <div id="alert-message"></div>
                </div>
                <div class="body">
                    <table id="mainTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                                <tr id="<?= htmlspecialchars($data['category_id']) ?>">
                                    <td><?= htmlspecialchars($data['category_id']) ?></td>
                                    <td><?= htmlspecialchars($data['category_name']) ?></td>
                                    <td read-only>
                                        <img width='100' src="uploads/category_images/<?= htmlspecialchars($data['category_image']) ?>" alt="">
                                        <input type="file" style="display: none;">
                                    </td>
                                    <td read-only>
                                        <a class="delete-category btn bg-red waves-effect" >
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a class="edit-category btn bg-green waves-effect">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <script src="plugins/bootstable/bootstable.min.js"></script> -->
<script src="scripts/editContest.js"></script>
<script src="scripts/deleteContest.js"></script>
<script src="scripts/switchPages.js"></script>