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
    $vid = new VidMap();
    $count = $vid->count();
    $vid = $vid->findAll($page*$size-$size,$size);

    ?> 
<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <section class="content-header">
        <h1>Сведение</h1>
        <ol class="breadcrumb">
            <li><a href="/index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li class="active">Вид</li>
        </ol>
    </section>
    <div class="box-body">
    <a class="btn btn-success" href="add-vid.php">Добавить вид</a>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
if ($racion) {
?>

<table id="example2" class="table table-bordered table-hover">

<thead>
    <tr>
        <th>Наименование</th>
        <th>Происхождение</th>
        <th>Группа</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($vid as $vid) {
echo '<tr>';
echo '<td><a href="profile-
vid.php?id='.$vid->Наименование.'">'.$vid->Происхождение.'</a> '. '<a href="add-vid.php?id='.$vid->Группа.'"><i class="fa fa-pencil"></i></a></td>';

echo '<td>'.$vid->Наименование.'</td>';
echo '<td>'.$vid->Происхождение.'</td>';
echo '<td>'.$vid->Группа.'</td>';
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