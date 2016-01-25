<aside class="main-sidebar">
    <section class="sidebar">
        <form action="/search" method="post" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Търси продукт..."/>
<span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <ul class="sidebar-menu">
            <li><a href="#"><span>Dashboard</span></a></li>
            <li class="header">Продукти</li>
            <li><a href="/products"><span>Продукти</span></a></li>
            <li><a href="/brands"><span>Марки</span></a></li>
            <li><a href="/types"><span>Видове</span></a></li>
            <li class="treeview">
                <a href="#"><span>Региони</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="/countries">Държава</a></li>
                    <li><a href="/regions">Регион</a></li>
                </ul>
            </li>
            <li class="header">Информация</li>
            <li><a href="#"><span>За нас</span></a></li>
            <li><a href="#"><span>Контакти</span></a></li>
            <li class="header">Изглед</li>
            <li><a href="/images/main-picture"><span>Главна снимка</span></a></li>
            <li><a href="/gallery"><span>Галерия</span></a></li>
        </ul>
    </section>
</aside>