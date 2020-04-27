<?php
    require_once 'autoload.php';
    require_once 'template/header.php';
    $size = 1;
    if (isset($_GET['page'])) {
        $page = Helper::clearInt($_GET['page']);
    } 
    else {
        $page = 1;
    }
    $potimec = new PitomecMap();
    $count = $potimec->count();
    $potimeci = $potimec->findAll($page*$size-$size,$size);

    ?> 
<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <section class="content-header">
        <h1>Список питомцев</h1>
        <ol class="breadcrumb">
            <li><a href="/index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li class="active">Список питомцев</li>
        </ol>
    </section>
    <div class="box-body">
    <a class="btn btn-success" href="add-pitomec.php">Добавить питомца</a>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
if ($potimeci) {
?>

<table id="example2" class="table table-bordered table-hover">

<thead>
    <tr>
        <th>Имя</th>
        <th>Пол</th>
        <th>Дата рождения</th>
        <th>Вид</th>
        <th>Зона обитания</th>
        <th>Номер сотрудника</th>
        <th>Номер типа рациона</th>
        <th>Код сведение животного</th>
        <th>Вид</th>
        <th>Номер питомца</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($potimeci as $potimec) {
echo '<tr>';
echo '<td><a href="profile-
pitomec.php?id='.$potimec->Номер_питомца.'">'.$potimec->Имя.'</a> '. '<a href="add-pitomec.php?id='.$potimec->Номер_питомца.'"><i class="fa fa-pencil"></i></a></td>';

echo '<td>'.$potimec->Пол.'</td>';

echo '<td>'.$potimec->Дата_рождения.'</td>';
echo '<td>'.$potimec->Вид_млекопитающего.'</td>';
echo '<td>'.$potimec->Зона_обитания.'</td>';
echo '<td>'.$potimec->Номер_сотрудника.'</td>';
echo '<td>'.$potimec->Номер_Типа_Рациона.'</td>';
echo '<td>'.$potimec->Код_сведения_животного.'</td>';
echo '<td>'.$potimec->Номер_питомца.'</td>';
echo '</tr>';
}
?>
</tbody>
</table>
<?php } else {
echo 'Ни одного преподавателя не найдено';
} ?>
</div>
<div class="box-body">
<?php Helper::paginator($count, $page,$size); ?>
</div>
<!-- /.box-body -->
</div>
</div>
</div>

<?php
    require_once 'template/footer.php';
    
?>