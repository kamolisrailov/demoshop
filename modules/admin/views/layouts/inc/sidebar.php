<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= \yii\helpers\Url::to(['main/index']) ?>" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="<?= \yii\helpers\Url::to(['main/index']) ?>" class="d-block"><?= Yii::$app->user->identity->username ?></a>
            </div>
        </div>

         <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->


                        <li class="nav-item active">
                            <a href="<?= \yii\helpers\Url::to(['main/index']) ?>" class="nav-link ">
                                <i class="fa fa-chart-bar"></i>
                                <span>Статистика магазина</span>
                            </a>
                        </li>




                <li class="nav-item has-treeview active">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-list-ul"></i>
                        <p>
                            Заказы
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= \yii\helpers\Url::to(['order/index']) ?>" class="nav-link ">

                                <span>Список заказов</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= \yii\helpers\Url::to(['order/create']) ?>" class="nav-link">
                                <i class="fas fa-cart-plus"></i>
                                <p>Добавить заказ</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview active">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-clipboard-list"></i>
                        <p>
                            Категории
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item active">
                            <a href="<?= \yii\helpers\Url::to(['category/index']) ?>" class="nav-link ">

                                <span>Список категорий</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= \yii\helpers\Url::to(['category/create']) ?>" class="nav-link">
                                <i class="fas fa-cart-plus"></i>
                                <p>Добавить категорию</p>
                            </a>
                        </li>
                    </ul>
                </li>




                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->>
    </div>
    <!-- /.sidebar -->
</aside>