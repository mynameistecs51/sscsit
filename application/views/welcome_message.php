<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">

    <title>DataTables example - Multiple tables</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/media/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/examples/resources/syntax/shCore.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>DataTables/examples/resources/demo.css">
    <style type="text/css" class="init">
        div.dataTables_wrapper {
            margin-bottom: 3em;
        }
    </style>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/examples/resources/syntax/shCore.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo base_url();?>DataTables/examples/resources/demo.js"></script>
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function () {
            $('table.display').dataTable();
        });
    </script>
</head>

<body class="dt-example">
    <div class="container">
        <section>
            <h1>DataTables example <span>Multiple tables</span></h1>

            <table id="" class="display" cellspacing="0" width="100%">
             <thead>
                <th>โปรเจ็ค</th>
                <th>ประเภทโครงงาน</th>
                <th>หัวหน้าโครงงาน</th>
                <th>เวลาที่ส่ง</th>
                <th>ผู้ส่ง</th>
                <th>สถานการตรวจ</th>
            </thead>
            <tfoot>
                <th>โปรเจ็ค</th>
                <th>ประเภทโครงงาน</th>
                <th>หัวหน้าโครงงาน</th>
                <th>เวลาที่ส่ง</th>
                <th>ผู้ส่ง</th>
                <th>สถานการตรวจ</th>
            </tfoot>
            <tbody>
                <?php
                foreach ($get_paper as $key_paper => $row_paper) {
                    ?>                  
                  <tr>
                    <td><?php echo $row_paper->paper_inputProjectName_TH;?></td>
                    <td><?php echo $row_paper->group_name;?></td>
                    <td><?php echo $row_paper->paper_inputName1;?></td>
                    <td><?php echo $row_paper->paper_date;?></td>
                    <td><?php echo $row_paper->user_first_name." ".$row_paper->user_last_name;?></td>
                    <td>ผ่านแบบมีเงื่อนไข</td>
                </tr>           
            <?php } ?> 
            </tbody>
        </table>

    </section>
</div>

</body>

</html>