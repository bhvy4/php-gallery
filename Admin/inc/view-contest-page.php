<?php
require "../config/connection.php";

$sql = "SELECT * FROM contests ";

$result = mysqli_query($conn, $sql);



?>
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        All Contests
                    </h2>
                    <div id="alert-message"></div>
                </div>
                <div class="body">
                    <table id="mainTable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Deadline</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Prize</th>
                                <th>Winner </th>
                                <th>Details</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                                <tr id="<?= htmlspecialchars($data['contest_id']) ?>">
                                    <td><?= htmlspecialchars($data['contest_id']) ?></td>
                                    <td><?= htmlspecialchars($data['contest_name']) ?></td>
                                    <td read-only><?= htmlspecialchars($data['contest_deadline']) ?></td>
                                    <td read-only>
                                        <img width='100' src="uploads/contest_profile_images/<?= htmlspecialchars($data['contest_image']) ?>" alt="">
                                        <input type="file" style="display: none;">
                                    </td>
                                    <td read-only><?= htmlspecialchars($data['contest_category']) ?></td>
                                    <td><?= htmlspecialchars($data['contest_author']) ?></td>
                                    <td><?= htmlspecialchars($data['contest_prize']) ?></td>
                                    <td><?= htmlspecialchars($data['contest_winner']) ?></td>
                                    <td><?= htmlspecialchars($data['contest_details']) ?></td>
                                    <td read-only>
                                        <a class="delete-contest btn bg-red waves-effect" >
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a class="edit-contest btn bg-green waves-effect">
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

<?php include "delete-modal.php" ?>

<!-- Editable Table Plugin Js -->
<script src="plugins/editable-table/mindmup-editabletable.js"></script>
<script src="js/pages/tables/editable-table.js"></script>
<!-- <script src="plugins/bootstable/bootstable.min.js"></script> -->
<script src="scripts/editContest.js"></script>
<script src="scripts/deleteContest.js"></script>
<script src="scripts/switchPages.js"></script>


