<?php
    require_once 'autoload.php';
    if (isset($_POST['id'])) {
        $special = new Pitomec();
        $special->id = Helper::clearInt($_POST['id']);
        $special->name = Helper::clearString($_POST['name']);
        $special->name1 = Helper::clearString($_POST['name1']);
        $special->name2 = Helper::clearInt($_POST['name2']);
        $special->name3 = Helper::clearInt($_POST['name3']);
        $special->name4 = Helper::clearInt($_POST['name4']);
        $special->name5 = Helper::clearInt($_POST['name5']);
        $special->name6 = Helper::clearInt($_POST['name6']);
        $special->name7 = Helper::clearInt($_POST['name7']);
        if ((new PitomecMap())->save($special)) {
            header('Location: view-special.php?id='.$special->special_id);
        } else {
            if ($special->special_id) {
        header('Location: add-special.php?id='.$special->special_id);
            } else {
                header('Location: add-special.php');
            }
        }
    }
