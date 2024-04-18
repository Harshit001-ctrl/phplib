<?php
session_start();
if (isset($_SESSION['user'])) {
    ?>
    <?php require_once ("header.php"); ?>
    <?php require_once ("dao.php"); ?>
    <!-- <link rel="stylesheet" href="seat_layout.css"> -->
    <style>
        .box {
            display: flex;
            flex-wrap: wrap;
        }

        .seat {
            /* display: inline-block; */
            height: 100px;
            width: 100px;
            margin: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
        }

        .available {
            border: 10px solid green;
        }

        .booked {
            border: 10px solid red;
        }
    </style>

    <div class="box">
        <?php
        $row = selectAll("seats");
        // print_r($row);
        for ($i = 0; $i < count($row); $i++) {
            if ($row[$i]['admission_id'] == "") {
                ?>
                <div class="seat booked"><?php echo $row[$i]['seatid']; ?></div>
                <?php
            } else {
                ?>
                <div class="seat available"><a
                        href="viewprofile.php?view=<?php echo $row[$i]['admission_id']; ?>"><?php echo $row[$i]['seatid']; ?></a>
                </div>
                <?php
            }
        }

        ?>
    </div>
    <!-- <div class="container-fluid">
    <div class="container">
        <div class="firstrow">            
            <div class="seat available">1</div>
            <div class="seat available">2</div>
            <div class="seat available">3</div>
            <div class="seat available">4</div>
            <div class="seat available">5</div>
            <div class="seat available">6</div>
            <div class="seat available">7</div>
            <div class="seat available">8</div>
            <div class="seat available">9</div>
            <div class="seat available">10</div>
            <div class="seat available">11</div>
            <div class="seat available">12</div>
        </div>
        <div class="secondrow">
            <div class="seat available">13</div>
            <div class="seat available">14</div>
            <div class="seat available">15</div>
            <div class="seat available">16</div>
            <div class="seat available">17</div>
            <div class="seat available">18</div>
            <div class="seat available">19</div>
            <div class="seat available">20</div>
            <div class="seat available">21</div>
            <div class="seat available">22</div>
            <div class="seat available">23</div>
        </div>
        <div class="thirdrow">
            <div class="seat available">24</div>
            <div class="seat available">25</div>
            <div class="seat available">26</div>
            <div class="seat available">27</div>
            <div class="seat available">28</div>
            <div class="seat available">29</div>
            <div class="seat available">30</div>
            <div class="seat available">31</div>
            <div class="seat available">32</div>
        </div>
        <div class="fourthrow">
            <div class="seat available">33</div>
            <div class="seat available">34</div>
            <div class="seat available">35</div>
        </div>
    </div>
</div>
</div> -->

    <?php require_once ("footer.php"); ?>
<?php
} else {
    header('location:login.php?error=please login in first');
}
?>