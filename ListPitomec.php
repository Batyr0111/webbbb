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
    $pitomec = new PitomecMap();
    $count = $pitomec->count();
    $pitomec = $pitomec->findAll($page*$size-$size,$size);

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
if ($pitomec) {
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
foreach ($pitomec as $pitomec) {
echo '<tr>';
echo '<td><a href="profile-
pitomec.php?id='.$pitomec->Номер_питомца.'">'.$pitomec->Имя.'</a> '. '<a href="add-pitomec.php?id='.$pitomec->Номер_питомца.'"><i class="fa fa-pencil"></i></a></td>';

echo '<td>'.$pitomec->Пол.'</td>';

echo '<td>'.$pitomec->Дата_рождения.'</td>';
echo '<td>'.$pitomec->Вид_млекопитающего.'</td>';
echo '<td>'.$pitomec->Зона_обитания.'</td>';
echo '<td>'.$pitomec->Номер_сотрудника.'</td>';
echo '<td>'.$pitomec->Номер_Типа_Рациона.'</td>';
echo '<td>'.$pitomec->Код_сведения_животного.'</td>';
echo '<td>'.$pitomec->Номер_питомца.'</td>';
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