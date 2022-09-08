<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reports expire</title>

</head>

<body>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">หน้ารายงาน</h1>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h3 class=" card-title mr-auto p-1">โครงการใกล้หมดอายุ</h3>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-outline-primary"
                                        (click)="onAddPrjectModal(addProjectModal)"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="reportExpire_table" class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>รหัสโครงการ</th>
                                        <th>สถานะ</th>
                                        <th>ชื่อโครงการ</th>
                                        <th>หัวหน้าโครงการ</th>
                                        <th>ห้องที่ใช้งาน</th>
                                        <th>วันที่อนุมัติ</th>
                                        <th>วันที่ปิดโครงการ</th>
                                        <th width="30px"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?for($i = 0 ; $i < 20 ; $i++){?>
                                    <tr>
                                        <td>ASE<?= $i;?></td>
                                        <td><?= ($i % 2 != 0) ? "ใช้งาน" : "รออนุมัติ" ;?></td>
                                        <td>
                                            โครงการ ASE<?= $i;?><br>
                                            <span style="font-style:italic" class="nameProjectEN">Project
                                                ASE<?= $i;?></span>
                                        </td>
                                        <td>นพ.วรัยรัตน์ พงใจดี</td>
                                        <td>ห้อง LAB<?= $i;?></td>
                                        <td><?= date('Y-m-d');?></td>
                                        <td><?= date('Y-m-d');?></td>
                                        <td>
                                            <a href="#">
                                                <i class="fas fa-file-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?}?>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
    </div>


    <script>
    $(document).ready(function() {
        var table = $('#reportExpire_table').DataTable({
            lengthChange: false,
            buttons: ['excel']
        });
        table.buttons().container()
            .appendTo('#reportExpire_table_wrapper .col-md-6:eq(0)');
    });
    </script>
</body>

</html>