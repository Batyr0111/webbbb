<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            <li
<?=($_SERVER['PHP_SELF']=='/index.php')?'class="active"':'';?>>
                <a href="index.php"><i class="fa fa-calendar"></i><span>Главная</span></a>
            </li>
            <li class="header">Пользователи</li>
            <li <?=($_SERVER['PHP_SELF']=='/list-teacher.php')?'class="active"':'';?>>
                <a href="ListPitomec.php"><i class="fa fa-users"></i><span>Питомец зоопарка</span></a>
            </li>
            <li <?=($_SERVER['PHP_SELF']=='/list-student.php')?'class="active"':'';?>>
                <a href="ListRacion.php"><i class="fa fa-users"></i><span>Список рационов</span></a>
            </li>
            <li <?=($_SERVER['PHP_SELF']=='/list-student.php')?'class="active"':'';?>>
                <a href="ListSotrydnik.php"><i class="fa fa-users"></i><span>Список сотрудников</span></a>
            </li>
            <li <?=($_SERVER['PHP_SELF']=='/list-student.php')?'class="active"':'';?>>
                <a href="ListSvedenie.php"><i class="fa fa-users"></i><span>Сведение о животных</span></a>
            </li>
            <li <?=($_SERVER['PHP_SELF']=='/list-student.php')?'class="active"':'';?>>
                <a href="ListTip.php"><i class="fa fa-users"></i><span>Тип животных</span></a>
            </li>
            <li <?=($_SERVER['PHP_SELF']=='/list-student.php')?'class="active"':'';?>>
                <a href="ListVid.php"><i class="fa fa-users"></i><span>Вид животных</span></a>
            </li>
            <li <?=($_SERVER['PHP_SELF']=='/list-student.php')?'class="active"':'';?>>
                <a href="ListZona.php"><i class="fa fa-users"></i><span>Зона обитания</span></a>
            </li>
        </ul>
    </section>
</aside>