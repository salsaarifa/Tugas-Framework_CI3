<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php $this->load->view("isi/head.php"); ?>
</head>
<body>
    <?php $this->load->view("isi/navbar.php"); ?>
    <h3><?php echo $Judul; ?></h3>
    <form method="post" action="<?php echo base_url('Employees/insert') ?>">
        <table>
            <tr>
                <td>EMPLOYEE ID</td>
                <td>:</td>
                <td><input type="text" name="EMPLOYEE_ID"></td>
            </tr>
            <tr>
                <td>FIRST NAME</td>
                <td>:</td>
                <td><input type="text" name="FIRST_NAME"></td>
            </tr>
            <tr>
                <td>LAST NAME</td>
                <td>:</td>
                <td><input type="text" name="LAST_NAME"></td>
            </tr>
            <tr>
                <td>DEPARTMENT ID</td>
                <td>:</td>
                <td><input type="text" name="DEPARTMENT_ID"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php $this->load->view("isi/footer.php"); ?>
    <?php $this->load->view("isi/js.php"); ?>
</body>
</html>