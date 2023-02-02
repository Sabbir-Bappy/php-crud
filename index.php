<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM `crud`";
            $run = $config->query($sql);
            $c = 1;
            while ($data = mysqli_fetch_array($run)) {
            ?>
                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['adress']; ?></td>
                    <td><?php echo $data['class']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td>
                        <a href='edit.php?eid=<?php echo md5($data['id']); ?>'>Edit</a>
                        <a href='core/delete.php?did=<?php echo md5($data['id']); ?>'>Delete</a>
                    </td>
                </tr>
            <?php $c++;
            } ?>

        </tbody>
    </table>
</div>
</div>
</body>

</html>