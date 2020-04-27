<?php
    require_once 'autoload.php';
    if (isset($_POST['id'])) {
        $special = new Tip();
        $special->id = Helper::clearInt($_POST['id']);
        $special->nomer = Helper::clearInt($_POST['nomer']);
        $special->name = Helper::clearString($_POST['name']);
        
        if ((new TipMap())->save($special)) {
            header('Location: view-special.php?id='.$special->special_id);
        } else {
            if ($special->special_id) {
        header('Location: add-special.php?id='.$special->special_id);
            } else {
                header('Location: add-special.php');
            }
        }
    }
