<?php
    require_once 'autoload.php';
    if (isset($_POST['id'])) {
        $special = new Zona();
        $special->id = Helper::clearInt($_POST['id']);
        $special->kod = Helper::clearInt($_POST['kod']);
        $special->name = Helper::clearString($_POST['name']);
        $special->xar = Helper::clearInt($_POST['xar']);       
        if ((new ZonaMap())->save($special)) {
            header('Location: view-special.php?id='.$special->special_id);
        } else {
            if ($special->special_id) {
        header('Location: add-special.php?id='.$special->special_id);
            } else {
                header('Location: add-special.php');
            }
        }
    }
