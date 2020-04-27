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
    $sotrydnik = new SotrydnikMap();
    $count = $sotrydnik->count();
    $sotrydnik = $sotrydnik->findAll($page*$size-$size,$size);

    ?> 
<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <section class="content-header">
        <h1>Сотрудники</h1>
        <ol class="breadcrumb">
            <li><a href="/index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li class="active">Список сотрудников</li>
        </ol>
    </section>
    <div class="box-body">
    <a class="btn btn-success" href="add-sotrydnik.php">Добавить сотрудников</a>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
if ($racion) {
?>

<table id="example2" class="table table-bordered table-hover">

<thead>
    <tr>
        <th>Номер</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Отчество</th>
        <th>Дата рождения</th>
        <th>Пол</th>
        <th>Телефон</th>
        <th>Семейное положение</th>
        <th>Должность</th>
        <th>Код супруга</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($sotrydnik as $sotrydnik) {
echo '<tr>';
echo '<td><a href="profile-
sotrydnik.php?id='.$sotrydnik->Номер.'">'.$sotrydnik->Наименование.'</a> '. '<a href="add-racion.php?id='.$sotrydnik->Фамилия.'"><i class="fa fa-pencil"></i></a></td>';

echo '<td>'.$sotrydnik->Наименование.'</td>';
echo '<td>'.$sotrydnik->Список_продуктов.'</td>';
echo '<td>'.$sotrydnik->Номер_типа.'</td>';
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