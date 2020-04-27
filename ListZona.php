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
    $zona = new ZonaMap();
    $count = $zona->count();
    $zona = $zona->findAll($page*$size-$size,$size);

    ?> 
<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <section class="content-header">
        <h1>Сведение</h1>
        <ol class="breadcrumb">
            <li><a href="/index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li class="active">Зона</li>
        </ol>
    </section>
    <div class="box-body">
    <a class="btn btn-success" href="add-zona.php">Добавить зону</a>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
if ($zona) {
?>

<table id="example2" class="table table-bordered table-hover">

<thead>
    <tr>
        <th>Код</th>
        <th>Название</th>
        <th>Характеристика</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($zona as $zona) {
echo '<tr>';
echo '<td><a href="profile-
zona.php?id='.$zona->Код.'">'.$zona->Название.'</a> '. '<a href="add-zona.php?id='.$zona->Характеристика.'"><i class="fa fa-pencil"></i></a></td>';

echo '<td>'.$zona->Код.'</td>';
echo '<td>'.$zona->Название.'</td>';
echo '<td>'.$zona->Характеристика.'</td>';
echo '</tr>';
}
?>
</tbody>
</table>
<?php } else {
echo 'Ни одного вида не найдено';
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