<?php
require_once ("header.php");
require_once ("dao.php");
?>

<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Fees Received Date</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $table = "subscriber";
            // $rows = selectAll($table);
            $rows= selectByCondition($table, "status=0");

            for ($i = 0; $i < count($rows); $i++) {
                // print_r($rows[$i]['name']);
                ?>
                <tr>
                    <td><?php echo $rows[$i]['subid']; ?></td>
                    <td><?php echo $rows[$i]['admission_id']; ?></td>
                    <td><?php echo $rows[$i]['start_date']; ?></td>
                    <td><?php echo $rows[$i]['end_date']; ?></td>
                    <td><?php echo $rows[$i]['feereciveddate']; ?></td>
                    <td><?php echo $rows[$i]['amount']; ?></td>
                    <!-- <td><?php echo $rows[$i]['status']; ?></td> -->
                    <!-- <td><a href="edit_enquiry.php?edit=<?php echo $rows[$i]['id']; ?>">Edit</a></td>
                    <td><a href="enquiry_controller.php?del=<?php echo $rows[$i]['id']; ?>">Delete</a></td> -->
                </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Fees Received Date</th>
                <th>Amount</th>
            </tr>
        </tfoot>
    </table>
</div>


<?php require_once ("footer.php"); ?>