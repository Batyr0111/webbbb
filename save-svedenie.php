<?php
    require_once 'autoload.php';
    if (isset($_POST['id'])) {
        $special = new Svedenie();
        $special->id = Helper::clearInt($_POST['id']);
        $special->kod = Helper::clearString($_POST['kod']);
        $special->strana = Helper::clearString($_POST['strana']);
        $special->ylet = Helper::clearString($_POST['ylet']);
        $special->prilet = Helper::clearString($_POST['prilet']);
        $special->temp = Helper::clearInt($_POST['temp']);
        
        if ((new SvedenieMap())->save($special)) {
            header('Location: view-special.php?id='.$special->special_id);
        } else {
            if ($special->special_id) {
        header('Location: add-special.php?id='.$special->special_id);
            } else {
                header('Location: add-special.php');
            }
        }
    }
