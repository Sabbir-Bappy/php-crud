<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Update Record</h2>

    <?php
    if (!isset($_REQUEST['eid'])) {
        die('Data not found');
    }

    $eid = $_REQUEST['eid'];

    $sql = "SELECT * FROM `crud` WHERE md5(id)='$eid'";
    $run = $config->query($sql);
    $data = mysqli_fetch_array($run);
    ?>


    <form class="post-form" action="core/update.php" method="POST">
        <input type="hidden" name="eid" value="<?php echo $eid; ?>">
        <div class="form-group">
            <label>Name</label>
            <input type="text" value="<?php echo $data['name']; ?>" name="name" required />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="adress" value="<?php echo $data['adress']; ?>" required />
        </div>



        <div class="form-group">
            <label>Class</label>

            <?php
            $sel1 = '';
            $sel2 = '';
            $sel3 = '';

            if ($data['class'] == 'BCA') {
                $sel1 = 'selected';
            }
            if ($data['class'] == 'BSC') {
                $sel2 = 'selected';
            }
            if ($data['class'] == 'B.TECH') {
                $sel3 = 'selected';
            }

            ?>

            <select name="class">
                <option value="" required selected disabled>Select Class</option>
                <option <?php echo $sel1; ?> value="BCA">BCA</option>
                <option <?php echo  $sel2; ?> value="BSC">BSC</option>
                <option <?php echo  $sel3; ?> value="B.TECH">B.TECH</option>
            </select>



        </div>



        <div class="form-group">
            <label>Phone</label>
            <input type="text" value="<?php echo $data['phone']; ?>" name="phone" required />
        </div>


        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>