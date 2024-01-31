<?php

    //frontend purpose data

    define('SITE_URL','http://127.0.0.1/HOTEL/');
    define('ABOUT_IMG_PATH',SITE_URL.'images/about/');

    //backend upload process needs this data

    define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/HOTEL/images/');
    define('ABOUT_FOLDER', 'about/');

    function adminLogin(){
        session_start();
        if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)){
            redirect('index.php');
        }
    }

    function redirect($url){
        header("Location: $url");
        exit;
    }

    function alert($type, $msg){
        $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

        echo <<<alert
            <div class="alert $bs_class alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">$msg</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        alert;
    }

    function uploadImage($image, $folder){
        $valid_mime = ['image/jpeg', 'image/png', 'image/webp', 'image/jpg'];

        $img_mime = $image['type'];
        $img_extension = pathinfo($image['name'], PATHINFO_EXTENSION);

        if (!in_array($img_mime, $valid_mime)) {
            return 'inv_img'; // Invalid image mime or format
        } elseif (($image['size'] / (1024 * 1024)) > 2) {
            return 'inv_size'; // Invalid size greater than 2MB
        } else {
            $ext = pathinfo($image['name'],PATHINFO_EXTENSION);
            $rname = 'IMG_' . random_int(11111, 99999) . ".$ext";

            $img_path = UPLOAD_IMAGE_PATH . $folder . $rname;

            if (move_uploaded_file($image['tmp_name'], $img_path)) {
                return $rname;
            } else {
                return 'upd_failed';
            }
        }
    }

    function deleteImage($image, $folder){
        
        if(unlink(UPLOAD_IMAGE_PATH.$folder.$image)){
            return true;
        }else{
            return false;
        }
    }
?>
