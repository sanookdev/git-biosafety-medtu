<?
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if(isset($_SESSION['status_type'])){
    // header('Location: ./main.php');
    print_r($_SESSION);
}else{
    header('Location: ./login.php');
}
    // header('Location: ./login.php');
    // header('Location: ./admin');
?>