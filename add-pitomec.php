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
    
            <li><a href="list-special.php">Питомцы</a></li>
            <li class="active"><?=$header;?></li>
        </ol>
    </section>
    <div class="box-body">
    <form action="save-pitomec.php" method="POST">
            <div class="form-group">
                <label>Название питомцов</label>
                <input type="text" class="form-control" name="name" required="required" value="<?=$pitomec->name;?>">
            </div>
            <div class="form-group">
                <label>Дата рождения</label>
                <input type="date" class="form-control" name="name1" required="required" value="<?=$pitomec->name;?>">
            </div>
            <div class="form-group">
                <label>Пол</label>
                <input type="text" class="form-control" name="name2" required="required" value="<?=$pitomec->name;?>">
            </div>
            <div class="form-group">
                <label>Вид млекапитающего</label>
                <input type="text" class="form-control" name="name3" required="required" value="<?=$pitomec->name;?>">
            </div>
            <div class="form-group">
                <label>Зона_обитания</label>
                <input type="number" class="form-control" name="name4" required="required" value="<?=$pitomec->name;?>">
            </div>
            <div class="form-group">
                <label>Номер сотрудника</label>
                <input type="number" class="form-control" name="name5" required="required" value="<?=$pitomec->name;?>">
            </div>
            <div class="form-group">
                <label>Номер типа рациона</label>
                <input type="number" class="form-control" name="name6" required="required" value="<?=$pitomec->name;?>">
            </div>
            <div class="form-group">
                <label>Код сведение животного</label>
                <input type="number" class="form-control" name="name7" required="required" value="<?=$pitomec->name;?>">
            </div>
            <div class="form-group">
                <label>Номер питомца</label>
                <input type="number" class="form-control" name="name8" required="required" value="<?=$pitomec->name;?>">
            </div>
        <div class="form-group">
            <button type="submit" name="saveSpecial" class="btn btn-primary">Сохранить</button>
        </div>
        <input type="hidden" name="id" value="<?=$id;?>"/>
    </form>
    </div>