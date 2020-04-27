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
    
            <li><a href="list-special.php">Сведение</a></li>
            <li class="active"><?=$header;?></li>
        </ol>
    </section>
    <div class="box-body">
    <form action="save-svedenie.php" method="POST">
            <div class="form-group">
                <label>Код</label>
                <input type="number" class="form-control" name="kod" required="required" value="<?=$svedenie->name;?>">
            </div>
            <div class="form-group">
                <label>Название страны</label>
                <input type="text" class="form-control" name="strana" required="required" value="<?=$svedenie->name;?>">
            </div>
            <div class="form-group">
                <label>Начало улета</label>
                <input type="date" class="form-control" name="ylet" required="required" value="<?=$svedenie->name;?>">
            </div>
            <div class="form-group">
                <label>Начало прилета</label>
                <input type="date" class="form-control" name="prilet" required="required" value="<?=$svedenie->name;?>">
            </div>
            <div class="form-group">
                <label>Температура</label>
                <input type="number" class="form-control" name="temp" required="required" value="<?=$svedenie->name;?>">
            </div>
        <div class="form-group">
            <button type="submit" name="saveSpecial" class="btn btn-primary">Сохранить</button>
        </div>
        <input type="hidden" name="id" value="<?=$id;?>"/>
    </form>
    </div>