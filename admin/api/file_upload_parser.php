<?php
// echo "<pre>";
// print_r($_POST);
// echo "<pre>";

// print_r($_FILES);
// "file" = '';
// foreach($_FILES as $key=>$value) {
//     "file" = $key;
// }
$storageFolder = '../../uploads/projects/'.$_POST['projectId'];
if (!file_exists($storageFolder)) {
    mkdir($storageFolder ,0777,true);
}
$fileName = $_FILES["file"]["name"]; // The file name
$type = explode('.',$fileName);
$type = '.' .end($type);
$fileTmpLoc = $_FILES["file"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file"]["type"]; // The type of file it is
$fileSize = $_FILES["file"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file"]["error"]; // 0 for false... and 1 for true
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if (move_uploaded_file($fileTmpLoc, $storageFolder.'/'.$_POST['rename'].$type)) {
    $nameFileSql = $_POST['rename'] . $type;
    $docType = $_POST['docType'];
    $projectId = $_POST['projectId'];
    require('./services.php');
    $insert = new DB_con();
    $result = array();
    if($insert->checkDocumentByType($docType,$projectId)){
        $result = $insert->createDocument($projectId,$nameFileSql,$docType);
    }else{
        $result = $insert->updateDocument($projectId,$nameFileSql,$docType);
    }
    echo json_encode($result);

} else {
    echo "move_uploaded_file function failed";
}

?>