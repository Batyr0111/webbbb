<?php
    require_once 'autoload.php';
    $id = 0;
    if (isset($_GET['id'])) {
        $id = Helper::clearInt($_GET['id']);
    }
    // $pitomec = (new PitomecMap())->findById($id);
    $header = (($id)?'Редактировать':'Добавить').' Специальность';
    require_once 'template/header.php';
    ?>
    <section class="content-header">
        <h1><?=$header;?></h1>
        <ol class="breadcrumb">
    
            <li><a href="/index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
    
            <li><a href="list-special.php">Рационы</a></li>
            <li class="active"><?=$header;?></li>
        </ol>
    </section>
    <div class="box-body">
    <form action="save-racion.php" method="POST">
            <div class="form-group">
                <label>Номер рациона</label>
                <input type="number" class="form-control" name="nomerRac" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Наименование</label>
                <input type="text" class="form-control" name="naimenov" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Список продуктов</label>
                <input type="text" class="form-control" name="spisok" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Номер типа</label>
                <input type="number" class="form-control" name="nomertipa" required="required" value="<?=$racion->name;?>">
            </div>

        <div class="form-group">
            <button type="submit" name="saveSpecial" class="btn btn-primary">Сохранить</button>
        </div>
        <input type="hidden" name="id" value="<?=$id;?>"/>
    </form>
    </div>