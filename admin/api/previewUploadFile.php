<?
error_reporting(0);
header("Content-type: application/json; charset=utf-8");

$projectId = isset($_POST['projectId']) ? $_POST['projectId'] : '1';
$uploadFolder = 'C:\laragon\www\research_app\uploads';
$ds = DIRECTORY_SEPARATOR;
$storeFolder = $uploadFolder .$ds . 'projectId' . $ds . $projectId . $ds;
$tmp = explode('.',$_FILES['fileInput']['name']);
$extension = end($tmp); 
$file = $_FILES['fileInput']['tmp_name'];
$allowed_extension = array("xlsx","xls","csv"); 
require_once("../plugins/PHPExcel/Classes/PHPExcel.php"); 
require_once("../plugins/PHPExcel/Classes/PHPExcel/IOFactory.php"); 


function convertDate($date){
    if ($date != '') {
        $oldDate = explode('/',$date);
        $newDate = $oldDate[2] . '-' . $oldDate[1] . '-';
        if($oldDate[0] < 10) {
            $newDate .= '0'.$oldDate[0];
        }else{
            $newDate .= $oldDate[0];
        }
        return $newDate;
    }
}
if (in_array($extension, $allowed_extension)) {
    $data_arr = array();
    $inputFileType = PHPExcel_IOFactory::identify($file);  
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);  
    $objReader->setReadDataOnly(true);  
    $objPHPExcel = $objReader->load($file); 
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);
    $highestRow = $objWorksheet->getHighestRow();
    $highestColumn = $objWorksheet->getHighestColumn();

    $headingsArray = $objWorksheet->rangeToArray('A1:'.$highestColumn.'1',null, true, true, true);
    $headingsArray = $headingsArray[1];

    $r = -1;
    for ($row = 2; $row <= $highestRow; ++$row) {
        $dataRow = $objWorksheet->rangeToArray('A'.$row.':'.$highestColumn.$row,null, true, true, true);
        if ((isset($dataRow[$row]['A'])) && ($dataRow[$row]['A'] > '')) {
            $key = '';
            ++$r;
            foreach($headingsArray as $columnKey => $columnHeading) {
                if($columnKey == 'A'){$key = 'No';}
                else if($columnKey == 'B'){$key = 'projectCode';}
                else if($columnKey == 'C'){$key = 'projectCertificateNo';}
                else if($columnKey == 'D'){$key = 'projectNameTH';}
                else if($columnKey == 'E'){$key = 'projectNameEN';}
                else if($columnKey == 'F'){$key = 'projectPosition';}
                else if($columnKey == 'G'){$key = 'projectLeader';}
                else if($columnKey == 'H'){$key = 'projectDepartment';}
                else if($columnKey == 'I'){$key = 'projectFaculty';}
                else if($columnKey == 'J'){$key = 'projectMobile';}
                else if($columnKey == 'K'){$key = 'projectEmail';}
                else if($columnKey == 'L'){$key = 'projectSecurityLab';}
                else if($columnKey == 'M'){$key = 'projectType';}
                else if($columnKey == 'N'){$key = 'projectRoom';}
                else if($columnKey == 'O'){$key = 'projectRequestDate';}
                else if($columnKey == 'P'){$key = 'projectApprovalDate';}
                else if($columnKey == 'Q'){$key = 'projectProcessDate';}
                else if($columnKey == 'R'){$key = 'projectCertdateEnd';}
                else if($columnKey == 'S'){$key = 'projectProcessResearcherDate';}
                else if($columnKey == 'T'){$key = 'projectExtendDate';}
                else if($columnKey == 'U'){$key = 'projectExtendDateEnd';}
                else if($columnKey == 'V'){$key = 'projectDateClose';}
                if($dataRow[$row][$columnKey] != ''){
                    if($key == 'projectRequestDate' || 
                       $key == 'projectApprovalDate' || $key == 'projectProcessDate' || $key == 'projectCertdateEnd' || 
                       $key == 'projectProcessResearcherDate' || $key == 'projectExtendDate' || $key == 'projectExtendDateEnd' || 
                       $key == 'projectDateClose'){
                       $data_arr[$r][$key] = convertDate($dataRow[$row][$columnKey]); 
                    }else{
                        $data_arr[$r][$key] = $dataRow[$row][$columnKey];
                    }
                }else{
                        $data_arr[$r][$key] = '';
                }
            }
        }
    }
    echo json_encode($data_arr);
}
?>