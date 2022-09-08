<?
require('../../config/userpassDB.php');
class DB_con{
    function __construct(){
        $conn = new mysqli(HOSTDB,USERDB,PASSDB,NAMEDB);
        $this->dbcon = $conn;
        mysqli_set_charset($this->dbcon,"utf8");
        if ($this->dbcon -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
          }
    }


    public function checkDocumentByType($typeId , $projectId){
        $sql = "SELECT * FROM projectdocuments WHERE projects_projectId = '$projectId' AND documentType = '$typeId' LIMIT 1";
        $query = $this->dbcon->query($sql);
        if($query->num_rows > 0){
            return false;
        }else{
            return true;
        }
    }

    public function createDocument($projectId,$documentNameFile,$documentType){
        $sql = "INSERT INTO projectdocuments(`projects_projectId`,`documentNameFile`,`documentType`) VALUES('$projectId','$documentNameFile','$documentType')";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['status'] = true;
            $return['message'] = 'created : '. $documentNameFile;
        }
        return $return;
    }

    
    public function updateDocument($projectId,$documentNameFile,$documentType){
        $sql = "UPDATE projectDocuments SET `documentNameFile` = '$documentNameFile' WHERE projects_projectId = '$projectId' AND documentType = '$documentType'";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['status'] = true;
            $return['message'] = 'updated : '. $documentNameFile;
        }
        return $return;
    }
    
    // completed
    public function listProjectAll(){
        $sql = "SELECT * FROM projects";
        $query = $this->dbcon->query($sql);
        $return = array();
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['status'] = true;
            if($query->num_rows > 0){
                $return['message'] = 'success';
                while ($row = $query ->fetch_assoc()){
                    $return['data'][] = $row;
                }
            }else{
                $return['message'] = 'nodata';
            }
        }
        return $return;
    }
    public function updateProjects($data,$table,$projectId){
        $sql = "UPDATE $table SET ";
        $i = 0;
        foreach ($data as $key => $value) {
            ++$i;
            $sql .= "`$key`='$value'";
            if($i != count($data)){
                $sql .=',';
            }
        }
        $sql .= " WHERE projectId = '$projectId';";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $error = "Error description: " . $this->dbcon->error;
            return $error;
        }else{
            $return['message'] = 'Updated';
            $return['status'] = true;
            return $return;
        }
    }
    // completed
    public function listAccountAll(){
        $sql = "SELECT * FROM users";
        $query = $this->dbcon->query($sql);
        $return = array();
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
            if($query->num_rows > 0){
                while ($row = $query -> fetch_assoc()){
                    $return['data'][] = $row;
                }
            }
        }
        return $return;
    }
    public function listProjectExpire(){
        $sql = "SELECT * FROM projects WHERE projectNotificationExpire > NOW()";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
            if($query->num_rows > 0){
                while ($row = $query -> fetch_assoc()){
                    $return['data'][] = $row;
                }
            }
        }
        return $return;
    }
    public function listProjectAwaitingApproval(){
        $sql = "SELECT * FROM projects WHERE projectStatus = '0'";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
            if($query->num_rows > 0){
                while ($row = $query -> fetch_assoc()){
                    $return['data'][] = $row;
                }
            }
        }
        return $return;
    }

    public function projectDetails($projectId){
        $sql = "SELECT * FROM projects WHERE projectId = '$projectId'";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
            if($query->num_rows > 0){
                while ($row = $query -> fetch_assoc()){
                    $return['data'][] = $row;
                }
            }
        }
        return $return;
    }

    public function projectDocuments($projectId){
        $sql = "SELECT * FROM projectdocuments WHERE projects_projectId = '$projectId'";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
            if($query->num_rows > 0){
                while ($row = $query -> fetch_assoc()){
                    $return['data'][] = $row;
                }
            }else {
                $return['message'] = 'data is empty';
            }
        }
        return $return;
    }

    // completed
    public function checkDuplicateUser($username){
        $sql = "SELECT * FROM users WHERE userName = '$username'";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $error = "Error description: " . $this->dbcon->error;
            return $error;
        }else{
            if($query->num_rows > 0){
                return false;
            }else{
                return true;
            }
        }
    }

    // completed
    public function createProject($data, $table){
        $keys = '';
        $values = '';
        $lastData = count($data);
        $i = 0 ;
        foreach ($data as $key => $value) {
            $keys .= '`'.$key.'`';
            $values .= "'".$value."'";
            if(++$i != $lastData) {
                $keys .= ',';
                $values .= ',';
            }
        }
        $table = $table .'(' . $keys . ')';
        $sql = "INSERT INTO $table VALUES(".$values.")";
        $query = $this->dbcon->query($sql);
        $return = array();
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
        }
        return $return;
    }

    public function uploadText($data , $table , $projectId){
        $sql = "UPDATE $table SET " ;
        foreach ($data as $key => $value) {
            $sql .= "`$key` = '$value'";
        }
        $sql .= " WHERE projectId = '$projectId'";
        $query = $this->dbcon->query($sql);
        $return = array();
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
        }
        return $return;

    }
    
    public function getProjectId($projectCode){
        $sql = "SELECT projectId FROM projects WHERE projectCode = '$projectCode' LIMIT 1";
        $query = $this->dbcon->query($sql);
        $return = array();
        if(!$query){
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
            $return['sql'] = $sql;
        }else{
            $res = $query->fetch_assoc();
            $return['projectId'] = $res['projectId'];
            $return['message'] = 'success';
            $return['status'] = true;
        }
        return $return;
    }

    public function deleteProject($projectId){
        $sql = "DELETE FROM projectparticipants WHERE projects_projectId IN(SELECT projectId FROM projects WHERE projectId = '$projectId');
                DELETE FROM projectdocuments WHERE projects_projectId IN(SELECT projectId FROM projects WHERE projectId = '$projectId');
                DELETE FROM projects WHERE projectId = '$projectId'";
        $query = $this->dbcon->query($sql);
        $return = array();
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
        }
        return $return;
    }

    // completed
    public function createUser($username,$password){
        $sql = "INSERT INTO users(`userName`,`userPassword`) VALUES('$username' , '$password')";
        $query = $this->dbcon->query($sql);
        $return = array();
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'Account Created';
            $return['status'] = true;
        }
        return $return;
    }
    public function updateProject($projectId,$newData){

    }
    public function uploadFile(){

    }
    public function deleteFile(){

    }
    public function updateFile(){
        
    }
    public function countListProject($title){
        $sql = "SELECT COUNT(*) AS count FROM projects";
        if($title == 'listProjectAwaitingApproval'){
            $sql .= " WHERE projectStatus = 0";
        }
        else if ($title == 'listProjectExpire'){
            $sql .= " WHERE projectDateClose > NOW()";
        }
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['sql'] = $sql;
            $return['status'] = true;
            $fetch = $query->fetch_assoc();
            $return['count'] = $fetch['count'];
        }
        return $return;
    }
    public function logout($userName){
        $sql = "INSERT INTO users_log(`userName`,`status`) VALUES('$userName','0')";
        $query = $this->dbcon->query($sql);
        if (!$query) {
            $return['message'] = "Error description: " . $this->dbcon->error;
            $return['status'] = false;
        }else{
            $return['message'] = 'success';
            $return['status'] = true;
        }
        return $return;
    }
}

?>