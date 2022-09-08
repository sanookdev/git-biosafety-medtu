<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project all modal</title>
    <style scoped>
    .form-row {
        margin-top: 15px !important;
    }

    .modal .modal-body {
        padding-left: 50px !important;
        padding-right: 50px !important;
    }
    </style>
</head>

<body>
    <!-- Modal Project -->
    <div class="modal fade" id="projectEdits" tabindex="-1" aria-labelledby="exampleEdits" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleEdits">รายละเอียด Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" id="projectEditForm">
                        <div class="form-row">
                            <div class="col-md">
                                <label for="projectCode">รหัสโครงการ</label>
                                <input type="text" name="projectCode" id="projectCode" class="form-control" />
                            </div>
                            <div class="col-md">
                                <label for="projectCertificateNo">หนังสือรับรอง</label>
                                <input type="text" name="projectCertificateNo" id="projectCertificateNo"
                                    class="form-control" />
                            </div>
                            <div class="col-md">
                                <label for="projectStatus">สถานะ</label>
                                <select name="projectStatus" id="projectStatus" class="form-control">
                                    <option value="0">รออนุมัติ</option>
                                    <option value="1">อนุมัติ</option>
                                    <option value="2">ไม่อนุมัติ</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="projectNameTH">ชื่อโครงการ (ไทย)</label>
                                <input type="text" name="projectNameTH" id="projectNameTH" class="form-control" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mt-2">
                                <label for="projectNameEN">ชื่อโครงการ (อังกฤษ)</label>
                                <input type="text" name="projectNameEN" id="projectNameEN" class="form-control" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <label for="projectPosition">ตำแหน่ง</label>
                                <input type="text" name="projectPosition" id="projectPosition" class="form-control" />
                            </div>
                            <div class="col-md-8">
                                <label for="projectLeader">หัวหน้าโครงการ</label>
                                <input type="text" name="projectLeader" id="projectLeader" class="form-control" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="projectDepartment">ภาควิชา</label>
                                <input type="text" name="projectDepartment" id="projectDepartment"
                                    class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label for="projectFaculty">คณะ</label>
                                <input type="text" name="projectFaculty" id="projectFaculty" class="form-control" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="projectMobile">เบอร์โทรศัพท์</label>
                                <input type="text" name="projectMobile" id="projectMobile" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label for="projectEmail">Email</label>
                                <input type="text" name="projectEmail" id="projectEmail" class="form-control" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="projectType">ชนิดประเภทโครงการ</label>
                                <input type="text" name="projectType" id="projectType" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label for="projectSecurityLab">ระดับความปลอดภัยของห้องของห้องปฏิบัติการ</label>
                                <input type="text" name="projectSecurityLab" id="projectSecurityLab"
                                    class="form-control" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="projectPresentCeo">วันที่เสนอผู้บริหาร</label>
                                <input type="date" class="form-control" name="projectPresentCeo" id="projectPresentCeo">
                            </div>
                            <div class="col-md-6">
                                <label for="projectSentUniversityDate">วันที่ส่งหนังสือลงนามเข้ามหาลัย</label>
                                <input type="date" class="form-control" name="projectSentUniversityDate"
                                    id="projectSentUniversityDate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="projectRequestDate">วันที่ยื่นขอ</label>
                                <input type="date" class="form-control" name="projectRequestDate"
                                    id="projectRequestDate">
                            </div>
                            <div class="col-md-6">
                                <label for="projectApprovalDate">วันที่อนุมัติ</label>
                                <input type="date" class="form-control" name="projectApprovalDate"
                                    id="projectApprovalDate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="projectProcessDate">วันที่กำหนดรายงานความก้าวหน้า</label>
                                <input type="date" class="form-control" name="projectProcessDate"
                                    id="projectProcessDate">
                            </div>
                            <div class="col-md-6">
                                <label for="projectCertificateExpireDate">วันที่สิ้นสุดการรับรอง</label>
                                <input type="date" class="form-control" name="projectCertificateExpireDate"
                                    id="projectCertificateExpireDate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="projectProcessResearcherDate">วันที่ผู้วิจัยส่งรายงานความก้าวหน้า</label>
                                <input type="date" class="form-control" name="projectProcessResearcherDate"
                                    id="projectProcessResearcherDate">
                            </div>
                            <div class="col-md-6">
                                <label for="projectExtendDate">วันที่อนุมัติขยายเวลารับรองโครงการ</label>
                                <input type="date" class="form-control" name="projectExtendDate" id="projectExtendDate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="projectExtendDateEnd">วันที่สิ้นสุดอายุุขยายเวลารับรองโครงการ</label>
                                <input type="date" class="form-control" name="projectExtendDateEnd"
                                    id="projectExtendDateEnd">
                            </div>
                            <div class="col-md-6">
                                <label for="projectDateClose">วันปิดโครงการ</label>
                                <input type="date" class="form-control" name="projectDateClose" id="projectDateClose">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="projectComment">หมายเหตุ</label>
                                <textarea rows="4" cols="50" class="form-control" name="projectComment"
                                    id="projectComment"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn_update" onclick="projectUpdate()">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Documents -->
    <div class="modal fade" id="projectDocuments" tabindex="-1" aria-labelledby="exampleDocuments" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleDocuments">รายละเอียด Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body font-weight-light">
                    <form id="formDocuments">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label
                                    for="document-a">แบบบันทึกปะหน้าการขอรับการประเมินความปลอดภัยทางชีวภาพของโครงการวิจัย
                                    TU-IBC_Cover letter</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-a" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-aNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="document-b-a">แบบประเมินประเภทของงานวิจัยเพื่อขอรับรองความปลอดภัยทางชีวภาพ
                                    (Biosafety Application Form) TU-IBC_A </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-b-a" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-b-aNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="document-b-b">แบบขอยกเว้นการประเมินความปลอดภัยทางชีวภาพ (Biosafety Exemption
                                    Registration Form) TU-IBC_B </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-b-b" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-b-bNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="document-c">แบบประเมินความปลอดภัยทางชีวภาพของโครงการและห้องปฏิบัติการด้วยตนเอง
                                    (Biosafety Self Inspection Checklist) TU-IBC_C</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-c" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-cNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="document-e">ข้อเสนอโครงการวิจัย
                                    (Proposal)ที่เกี่ยวข้องกับสิ่งมีชีวิตหรือตัวอย่างชีวภาพ หรือ เค้าโครงวิทยานิพนธ์ /
                                    โครงร่างการวิจัย (ในกรณีที่นักศึกษาเป็นหัวหน้าโครงการ)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-d" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-eNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label
                                    for="document-f">เอกสารข้อมูลความปลอดภัยทางชีวภาพของสิ่งมีชีวิตหรือตัวอย่างชีวภาพที่ใช้ในการวิจัย
                                    เช่น Fact Sheet หรือ Pathogen Safety Data Sheet (PSDS) หรือ Biological Agent
                                    Reference Sheet (BARS) หรือ MSDS ของเชื้อ / Cell Line / Toxin จากบริษัท</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-e" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-fNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="document-g">หนังสือรับรองอนุมัติให้ใช้สถานที่ / หน่วยงานในการดำเนินการวิจัย
                                    (ในกรณีที่มีการดำเนินงานวิจัยในห้องปฏิบัติการนอกหน่วยงานของผู้วิจัยหรือผู้ร่วมวิจัย)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-f" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-gNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="document-h">ประกาศนียบัตรการอบรมด้านความปลอดภัยทางชีวภาพ ที่มีอายุไม่เกิน 3
                                    ปี ของหัวหน้าโครงการ ผู้ร่วมวิจัยที่ปฏิบัติงาน และอาจารย์ที่ปรึกษา
                                    (ในกรณีที่นักศึกษาเป็นหัวหน้าโครงการวิจัย)</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-g" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-hNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="document-i">เอกสารอื่น ๆ เพื่อประกอบการพิจารณา</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="document-h" name="file[]"
                                            onchange="uploadDocument($(this))">
                                        <label class="custom-file-label document-iNamefile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Modal Participants -->
</body>

</html>