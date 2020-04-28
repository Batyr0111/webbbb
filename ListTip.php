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
    $tip = new TipMap();
    $count = $tip->count();
    $tip = $tip->findAll($page*$size-$size,$size);

    ?> 
<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <section class="content-header">
        <h1>Сведение</h1>
        <ol class="breadcrumb">
            <li><a href="/index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li class="active">Тип</li>
        </ol>
    </section>
    <div class="box-body">
    <a class="btn btn-success" href="add-tip.php">Добавить тип</a>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
if ($tip) {
?>

<table id="example2" class="table table-bordered table-hover">

<thead>
    <tr>
        <th>Номер</th>
        <th>Название</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($tip as $tip) {
echo '<tr>';
echo '<td><a href="profile-
tip.php?id='.$tip->Номер_типа.'">'.$tip->Название.'</a> '. '<a href="add-tip.php?id='.$tip->Номер_типа.'"><i class="fa fa-pencil"></i></a></td>';

echo '<td>'.$tip->Номер_типа.'</td>';
echo '<td>'.$tip->Название.'</td>';
echo '</tr>';
}
?>
</tbody>
</table>
<?php } else {
echo 'Ни одного типа не найдено';
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