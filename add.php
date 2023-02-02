<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="core/add.php" method="POST">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="adress" required />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" required selected disabled>Select Class</option>
                <option value="BCA">BCA</option>
                <option value="BSC">BSC</option>
                <option value="B.TECH">B.TECH</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" required />
        </div>
        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
</body>

</html>