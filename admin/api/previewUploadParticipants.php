<?
error_reporting(0);

header("Content-type: application/json; charset=utf-8");
$tmp = explode('.',$_FILES['fileInput2']['name']);
$extension = end($tmp); 
$file = $_FILES['fileInput2']['tmp_name'];
$allowed_extension = array("xlsx","xls","csv"); 
require_once("../plugins/PHPExcel/Classes/PHPExcel.php"); 
require_once("../plugins/PHPExcel/Classes/PHPExcel/IOFactory.php"); 
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
                else if($columnKey == 'C'){$key = 'projectAdvisor';}
                else if($columnKey == 'D'){$key = 'position';}
                else if($columnKey == 'E'){$key = 'name';}
                else if($columnKey == 'F'){$key = 'department';}
                else if($columnKey == 'G'){$key = 'faculty';}
                else if($columnKey == 'H'){$key = 'university';}
                else if($columnKey == 'I'){$key = 'mobile';}
                else if($columnKey == 'J'){$key = 'email';}
                if($dataRow[$row][$columnKey] != ''){
                    $data_arr[$r][$key] = $dataRow[$row][$columnKey];
                }
            }
        }
    }
    echo json_encode($data_arr);
}
?>