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
    $svedenie = new SvedenieMap();
    $count = $svedenie->count();
    $svedenie = $svedenie->findAll($page*$size-$size,$size);

    ?> 
<div class="row">
    <div class="col-xs-12">
    <div class="box">
    <section class="content-header">
        <h1>Сведение</h1>
        <ol class="breadcrumb">
            <li><a href="/index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
            <li class="active">Сведение животных</li>
        </ol>
    </section>
    <div class="box-body">
    <a class="btn btn-success" href="add-svedenie.php">Добавить сведение</a>
</div>
<!-- /.box-header -->
<div class="box-body">
<?php
if ($racion) {
?>

<table id="example2" class="table table-bordered table-hover">

<thead>
    <tr>
        <th>Код</th>
        <th>Название страны</th>
        <th>Начало улета</th>
        <th>Конец прилета</th>
        <th>Температура</th>
    </tr>
</thead>
<tbody>
<?php
foreach ($svedenie as $svedenie) {
echo '<tr>';
echo '<td><a href="profile-
svedenie.php?id='.$svedenie->Код.'">'.$svedenie->Название_страны.'</a> '. '<a href="add-svedenie.php?id='.$svedenie->Начало_улета.'"><i class="fa fa-pencil"></i></a></td>';

echo '<td>'.$svedenie->Код.'</td>';
echo '<td>'.$svedenie->Название_страны.'</td>';
echo '<td>'.$svedenie->Начало_улета.'</td>';
echo '</tr>';
}
?>
</tbody>
</table>
<?php } else {
echo 'Ни одного сведения не найдено';
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