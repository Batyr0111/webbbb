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
    
            <li><a href="list-special.php">Сотрудники</a></li>
            <li class="active"><?=$header;?></li>
        </ol>
    </section>
    <div class="box-body">
    <form action="save-sotrydnik.php" method="POST">
            <div class="form-group">
                <label>Номер</label>
                <input type="number" class="form-control" name="nomer" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Фамилия</label>
                <input type="text" class="form-control" name="familia" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Имя</label>
                <input type="text" class="form-control" name="ima" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Отчество</label>
                <input type="text" class="form-control" name="ochestvo" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Дата рождение</label>
                <input type="date" class="form-control" name="datar" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Пол</label>
                <input type="text" class="form-control" name="pol" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Телефон</label>
                <input type="number" class="form-control" name="telefon" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Семейное положение</label>
                <input type="text" class="form-control" name="polohenie" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Должность</label>
                <input type="text" class="form-control" name="dol" required="required" value="<?=$racion->name;?>">
            </div>
            <div class="form-group">
                <label>Код супрга</label>
                <input type="number" class="form-control" name="kods" required="required" value="<?=$racion->name;?>">
            </div>

        <div class="form-group">
            <button type="submit" name="saveSpecial" class="btn btn-primary">Сохранить</button>
        </div>
        <input type="hidden" name="id" value="<?=$id;?>"/>
    </form>
    </div>