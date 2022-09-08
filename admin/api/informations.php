<?
header("Content-type: application/json; charset=utf-8");

$_POST = json_decode(file_get_contents("php://input"),true);

require('./services.php');

$service = new DB_con();

$result = array();

//completed
if($_POST['action'] == 'listProjectAll'){
    $query = $service->listProjectAll();
    $result = $query;
}
else if ($_POST['action'] == 'uploadDocument'){
    $result = $_POST;
}
else if ($_POST['action'] == 'updateProjects'){
    $data = $_POST['data'];
    $table = 'projects';
    $projectId = $_POST['projectId'];
    $result = $service->updateProjects($data,$table,$projectId);
}

else if ($_POST['action'] == 'projectEdits'){
    $projectId = $_POST['projectId'];
    $result = $service->projectDetails($projectId);
}

else if ($_POST['action'] == 'projectDocuments'){
    $projectId = $_POST['projectId'];
    $result = $service->projectDocuments($projectId);
}

else if ($_POST['action'] == 'uploadText'){
    $table = $_POST['table'];
    $projectId = $_POST['projectId'];
    $data = array(
        $_POST['columnName'] => $_POST['text']
    );
    $result = $service->uploadText($data,$table,$projectId);
}

// completed
else if ($_POST['action'] == 'createProject'){
    $data = $_POST['data'];
    $table = $_POST['table'];
    $result['checkStatus'] = true;
    if(count($data) > 0){
        for($i = 0 ; $i < count($data) ; $i++){
            unset($data[$i]['No']);
            if($table == 'projectparticipants'){
                $projectId = $service->getProjectId($data[$i]['projectCode']);
                $data[$i]['projects_projectId'] = $projectId['projectId'];
            }
            $query = $service->createProject($data[$i] , $table);
            $result[$i] = $query;
            $result[$i]['data'] = $data[$i];
            if($result[$i]['status'] == false){
                $result['checkStatus'] = false;
            }
        }
    }
}

else if ($_POST['action'] == 'deleteProject'){
    $projectId = $_POST['projectId'];
    $result = $service->deleteProject($projectId);
}
// completed
else if ($_POST['action'] == 'checkDuplicateUser'){
    $username = $_POST['data']['username'];
    if($service->checkDuplicateUser($username)){
        $result['message'] = "สามารถใช้ username นี้ได้ ";
        $result['status'] = true;
    }else{
        $result['message'] = "มี username นี้ในระบบแล้ว";
        $result['status'] = false;
    }
}
// completed
else if ($_POST['action'] == 'createUser'){
    if(!isset($_POST['userName']) || !isset($_POST['userPassword'])){
        $result['message'] = 'username and password is not empty!';
        $result['status'] = false;
    }else{
        if($service->checkDuplicateUser($_POST['userName'])){
            $data = $_POST['userName'];
            $table = 'users';
            $query = $service->createUser($_POST['userName'] , $_POST['userPassword']);
            $result = $query;
        }else{
            $result['message'] = 'Username is Already';
            $result['status'] = false;
        }  
    }
}
// completed
else if ($_POST['action'] == 'listAccountAll'){
    $query = $service->listAccountAll();
    $result = $query;
}


// completed
else if ($_POST['action'] == 'userLogout'){
    $username = $_POST['username'];
    $query = $service->logout($username);
    if($query['status']){
        session_start();
        session_destroy();
        $result=$query;
    }else{
        $result['message'] = 'ไม่สามารถออกจากระบบได้ โปรดลองใหม่อีกครั้ง';
        $result['status'] = false;
    }
}

// completed
else if ($_POST['action'] == 'countListProject'){
    $title = $_POST['title'];
    $query = $service->countListProject($title);
    $result = $query;
}


echo json_encode($result);
?>