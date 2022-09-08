  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Setting Page</title>
      <!-- dropzonejs -->
      <link rel="stylesheet" href="./plugins/dropzone/min/dropzone.min.css">
      <!-- alertify -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

      <!-- Font Awesome -->
      <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" /> -->
      <!-- Google Fonts -->
      <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" /> -->
      <!-- MDB -->
      <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" /> -->
  </head>

  <body>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-12 mt-5">
                          <div class="card">
                              <div class="card-header">
                                  <div class="card-title">
                                      <h4>นำเข้าข้อมูล</h4>
                                  </div>
                                  <button class="btn btn-sm btn-success float-right">
                                      <i class="nav-icon fas fa-plus"></i> เพิ่มโปรเจค
                                  </button>
                              </div>
                              <div class="card-body">
                                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                                      <li class="nav-item" role="presentation">
                                          <a class="nav-link active" id="projects-tab" data-toggle="tab"
                                              href="#projects" role="tab" aria-controls="projects"
                                              aria-selected="true">นำเข้าไฟล์ข้อมูล Projects</a>
                                      </li>
                                      <li class="nav-item" role="presentation">
                                          <a class="nav-link" id="participants-tab" data-toggle="tab"
                                              href="#participants" role="tab" aria-controls="participants"
                                              aria-selected="false">นำเข้าไฟล์ข้อมูลผู้ร่วมวิจัย</a>
                                      </li>
                                  </ul>
                                  <div class="tab-content" id="myTabContent">
                                      <div class="tab-pane fade show active" id="projects" role="tabpanel"
                                          aria-labelledby="projects-tab">
                                          <form>
                                              <div class="form-row mt-3">
                                                  <div class="col-md-12 input-group">
                                                      <div class="custom-file">
                                                          <input type="file" class="custom-file-input" id="fileInput"
                                                              onchange="changeNameFileinput($(this))">
                                                          <label class="custom-file-label" for="fileInput">Choose
                                                              projects file</label>
                                                      </div>
                                                      <div class="input-group-append">
                                                          <button class="input-group-text btn_preview">Preview</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                          <table id="report_table"
                                              class="table table-bordered table-hover table-responsive text-center"
                                              hidden>
                                              <button
                                                  class="btn btn-outline-success btn-sm btn_upload mb-2 mt-2 btn_upload"
                                                  onclick="uploadFile('projects')" hidden>Upload
                                                  Data</button>
                                              <thead>
                                                  <tr>
                                                      <th>ลำดับ</th>
                                                      <th>รหัสโครงการ</th>
                                                      <th>หนังสือรับรอง</th>
                                                      <th>ชื่อโครงการภาษาไทย</th>
                                                      <th>ชื่อโครงการภาษาอังกฤษ</th>
                                                      <th>ตำแหน่ง</th>
                                                      <th>หัวหน้าโครงการ</th>
                                                      <th>ภาควิชา/โครงการ/แผนก</th>
                                                      <th>คณะ</th>
                                                      <th>เบอร์โทรศัพท์</th>
                                                      <th>Email</th>
                                                      <th>ระดับความปลอดภัยของห้องปฏิบัติการ</th>
                                                      <th>ชนิด/ประเภทโครงการ</th>
                                                      <th>ห้อง</th>
                                                      <th>วันที่ยื่นขอ</th>
                                                      <th>วันที่อนุมัติ</th>
                                                      <th>กำหนดรายงานความก้าวหน้า</th>
                                                      <th>วันที่สิ้นสุดการรับรอง</th>
                                                      <th>วันที่ผู้วิจัยส่งรายงานความก้าวหน้า</th>
                                                      <th>วันที่อนุมัติขยายเวลารับรองโครงการ</th>
                                                      <th>วันที่สิ้นสุดอายุุขยายเวลา</th>
                                                      <th>วันที่อนุมัติปิดโครงการ</th>
                                                  </tr>
                                              </thead>
                                              <tbody class="report_data">
                                              </tbody>
                                          </table>

                                      </div>
                                      <div class="tab-pane fade" id="participants" role="tabpanel"
                                          aria-labelledby="participants-tab">
                                          <form>
                                              <div class="form-row mt-3">
                                                  <div class="col-md-12 input-group">
                                                      <div class="custom-file">
                                                          <input type="file" class="custom-file-input" id="fileInput2"
                                                              onchange="changeNameFileinput($(this))">
                                                          <label class="custom-file-label" for="fileInput2">Choose
                                                              participants file</label>
                                                      </div>
                                                      <div class="input-group-append">
                                                          <button class="input-group-text btn_preview2">Preview</button>
                                                      </div>
                                                  </div>
                                              </div>
                                          </form>
                                          <table id="report_table2"
                                              class="table table-bordered table-hover table-responsive text-center"
                                              hidden>
                                              <button
                                                  class="btn btn-outline-success btn-sm btn_upload mb-2 mt-2 btn_upload2"
                                                  onclick="uploadFile('projectparticipants')" hidden>Upload
                                                  Data</button>
                                              <thead>
                                                  <tr>
                                                      <th>ลำดับ</th>
                                                      <th>รหัสโครงการ</th>
                                                      <th>ที่ปรึกษา</th>
                                                      <th>ตำแหน่ง</th>
                                                      <th>ผู้ร่วมวิจัย</th>
                                                      <th>ภาควิชา/โครงการ/แผนก</th>
                                                      <th>คณะ</th>
                                                      <th>มหาวิทยาลัย</th>
                                                      <th>เบอร์โทรศัพท์</th>
                                                      <th>Email</th>
                                                  </tr>
                                              </thead>
                                              <tbody class="report_data2">
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- /.card -->
                      </div>
                  </div>
                  <!-- /.row import projects-->


              </div>
              <!-- /.container-fluid -->
          </section>
          <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Axios api -->
      <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

      <!-- alertify -->
      <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
      <script>
      $(document).ready(function() {
          var dataUpload = {};
          var dataUpload2 = {};

          function _(el) {
              return document.getElementById(el);
          }

          changeNameFileinput = async (e) => {
              let id = e[0].id;
              var filename = e.val().replace(/C:\\fakepath\\/i, '')
              $('label[for=' + id + ']').text(filename);
          }

          previewFile = async () => {
              var file = _("fileInput").files[0];
              var formdata = new FormData();
              formdata.append("fileInput", file);
              await axios.post('./api/previewUploadFile.php', formdata, {
                  headers: {
                      'Content-Type': 'multipart/form-data'
                  }
              }).then((res) => {
                  //   console.log(res);
                  dataUpload = res.data;
                  if (dataUpload.length > 0) {
                      $('#report_table').prop('hidden', false);
                      $('.btn_upload').prop('hidden', false);
                      let outputHtml = '';
                      $.each(dataUpload, function(keys, values) {
                          outputHtml += '<tr>';
                          $.each(values, function(key, value) {
                              outputHtml += '<td>' + value + '</td>';
                          });
                          outputHtml += '</tr>';
                      });
                      $('.report_data').html(outputHtml);
                  } else {
                      $('#report_table').prop('hidden', true);
                      $('.btn_upload').prop('hidden', true);
                  }
              })
          }

          previewFileParticipants = async () => {
              var file = _("fileInput2").files[0];
              var formdata = new FormData();
              formdata.append("fileInput2", file);
              await axios.post('./api/previewUploadParticipants.php', formdata, {
                  headers: {
                      'Content-Type': 'multipart/form-data'
                  }
              }).then((res) => {
                  dataUpload2 = res.data;
                  if (dataUpload2.length > 0) {
                      $('#report_table2').prop('hidden', false);
                      $('.btn_upload2').prop('hidden', false);
                      let outputHtml = '';
                      $.each(dataUpload2, function(keys, values) {
                          outputHtml += '<tr>';
                          $.each(values, function(key, value) {
                              outputHtml += '<td>' + value + '</td>';
                          });
                          outputHtml += '</tr>';
                      });
                      $('.report_data2').html(outputHtml);
                  } else {
                      $('#report_table2').prop('hidden', true);
                      $('.btn_upload2').prop('hidden', true);
                  }
              }).catch((err) => {
                  console.log(err)
              })
          }

          uploadFile = async (table) => {
              let data = (table == 'projectparticipants') ? dataUpload2 : dataUpload;
              await axios.post('./api/informations.php', {
                  action: 'createProject',
                  data: data,
                  table: table
              }).then((res) => {
                  if (res.data.checkStatus) {
                      alertify.success('Data Uploaded')
                  } else {
                      alertify.error('Upload Fails')
                  }
                  console.log(res);
              })
          }

          $('.btn_preview').on('click', (e) => {
              e.preventDefault();
              console.log(_("fileInput").files[0])
              if (_("fileInput").files[0] != undefined) {
                  alertify.success('success');
                  previewFile();
              } else {
                  alertify.error('file not found');
              }
          })
          $('.btn_preview2').on('click', (e) => {
              e.preventDefault();
              console.log(_("fileInput2").files[0])
              if (_("fileInput2").files[0] != undefined) {
                  alertify.success('success');
                  previewFileParticipants();
              } else {
                  alertify.error('file not found');
              }
          })
      })
      </script>
  </body>

  </html>