<?php
    require_once 'autoload.php';
    if (isset($_POST['id'])) {
        $special = new Vid();
        $special->id = Helper::clearInt($_POST['id']);
        $special->name = Helper::clearString($_POST['name']);
        $special->pro = Helper::clearString($_POST['pro']);
        $special->grupp = Helper::clearInt($_POST['grupp']);       
        if ((new VidMap())->save($special)) {
            header('Location: view-special.php?id='.$special->special_id);
        } else {
            if ($special->special_id) {
        header('Location: add-special.php?id='.$special->special_id);
            } else {
                header('Location: add-special.php');
            }
        }
    }
