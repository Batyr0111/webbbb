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
    $racion = new RacionMap();
    $count = $racion->count();
    $racion = $racion->findAll($page*$size-$size,$size);

    ?> 
<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <section class="content-header">
        <h1>Рационы</h1>
        <ol class="breadcrumb">
            <li><a href="/index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li class="active">Список рационов</li>
        </ol>
    </section>
    <div class="box-body">
    <a class="btn btn-success" href="add-racion.php">Добавить рацион</a>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
if ($racion) {
?>

<table id="example2" class="table table-bordered table-hover">

<thead>
    <tr>
        <th>Номер_рациона</th>
        <th>Наименование</th>
        <th>Список_продуктов</th>
        <th>Номер_типа</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($racion as $racion) {
echo '<tr>';
echo '<td><a href="profile-
racion.php?id='.$racion->Номер_рациона.'">'.$racion->Наименование.'</a> '. '<a href="add-racion.php?id='.$racion->Список_продуктов.'"><i class="fa fa-pencil"></i></a></td>';

echo '<td>'.$racion->Наименование.'</td>';
echo '<td>'.$racion->Список_продуктов.'</td>';
echo '<td>'.$racion->Номер_типа.'</td>';
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