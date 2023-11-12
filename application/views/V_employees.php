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
    <?php echo $this->session->flashdata('msg'); ?>
    <a href="<?php echo base_url('employees/insert'); ?>">TAMBAH DATA KARYAWAN</a>
    <table border='1'>
        <thead>
            <tr>
                <td>Employee ID</td>
                <td>FIRST NAME</td>
                <td>LAST NAME</td>
                <td>DEPARTMENT ID</td>
                <td>ACTION</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $data) : ?>
                <tr>
                    <td><?php echo $data->EMPLOYEE_ID;?></td>
                    <td><?php echo kapital($data->FIRST_NAME);?></td>
                    <td><?php echo kapital($data->LAST_NAME);?></td>
                    <td><?php echo $data->DEPARTMENT_ID?></td>
                    <td>
                        <a href="<?php echo base_url('employees/update/'.$data->EMPLOYEE_ID); ?>" class="btn btn-primary">UPDATE</a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('employees/delete/'.$data->EMPLOYEE_ID); ?>" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php $this->load->view("isi/footer.php"); ?>
    <?php $this->load->view("isi/js.php"); ?>
</body>
</html>