<?php
    require_once 'autoload.php';
    if (isset($_POST['id'])) {
        $special = new Racion();
        $special->id = Helper::clearInt($_POST['id']);
        $special->nomerRac = Helper::clearString($_POST['nomerRac']);
        $special->naimenov = Helper::clearString($_POST['naimenov']);
        $special->spisok = Helper::clearInt($_POST['spisok']);
        $special->nomertipa = Helper::clearInt($_POST['nomertipa']);
        if ((new RacionMap())->save($special)) {
            header('Location: view-special.php?id='.$special->special_id);
        } else {
            if ($special->special_id) {
        header('Location: add-special.php?id='.$special->special_id);
            } else {
                header('Location: add-special.php');
            }
        }
    }
