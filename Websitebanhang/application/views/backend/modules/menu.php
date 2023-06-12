<aside class="main-sidebar">
    <?php
    $image = '';
    if ($user['img']) {
        $image = $user['img'];
    } else {
        $image = 'avatar5.png';
    }
    ?>
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="public/images/admin/<?php echo $image ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['fullname'] ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Trực tuyến</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">CHỨC NĂNG</li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin">
                    <i class="fa fa-bar-chart"></i> <span>Quản lý thống kê</span>
                </a>
            </li>
            <!-- <li class="treeview">
                <a href="<?php echo base_url() ?>admin">
                    <i class="fa fa-bell"></i> <span>Thông báo</span>
                </a>
            </li> -->
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/contact">
                    <i class="fa fa-envelope"></i> <span>Quản lý liên hệ</span>
                </a>
            </li>
            <li class="header">QUẢN LÝ DANH MỤC</li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/category">
                    <i class="fa fa-indent"></i><span>Quản lý loại sản phẩm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/producer">
                    <i class="fa fa-gift"></i><span>Quản lý nhà cung cấp</span>
                </a>
            </li>
            <li class="header">QUẢN LÝ CỬA HÀNG</li>
            <li>
                <a href="<?php echo base_url() ?>admin/product">
                    <i class="fa fa-leaf"></i> Quản lý sản phẩm
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/content">
                    <i class="glyphicon glyphicon-list"></i> Quản lý tin tức
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() ?>admin/orders">
                    <i class="fa fa-shopping-cart"></i> Quản lý đơn hàng
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/customer">
                    <i class="fa fa-user"></i><span>Quản lý khách hàng</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() ?>admin/province">
                    <i class="fa fa-globe"></i><span>Quản lý địa điểm</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-align-justify"></i><span>Quản lý giao diện</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="<?php echo base_url() ?>admin/sliders">
                            <i class="fa fa-cogs"></i>Quản lý sliders
                        </a>
                    </li>
                </ul>
            </li>
            <li class="header">CÀI ĐẶT</li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon-cog"></i><span>Quản lý hệ thống</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active">
                        <a href="<?php echo base_url() ?>admin/configuration/update">
                            <i class="fa fa-cogs"></i>Quản lý cấu hình
                        </a>
                    </li>
                    <?php
                    $cpnGroup = '';
                    if ($user['role'] == 1) {
                        $cpnGroup .=
                            "<li>
                                <a href='" . base_url() . "admin/group'>
                                    <i class='fa fa-lock'></i> Nhóm người dùng
                                </a>
                            </li>";
                    }
                    echo $cpnGroup;
                    ?>
                    <li>
                        <a href="<?php echo base_url() ?>admin/useradmin">
                            <i class="fa fa-users"></i>Quản lý thành viên
                        </a>
                    </li>
                </ul>
            </li>
            <li><a href="admin/user/logout.html"><i class="fa fa-sign-out text-red"></i> <span>Thoát</span></a></li>
            <li><a href="#"><i class="fa fa-question-circle text-yellow"></i> <span>Trợ giúp</span></a></li>
        </ul>

    </section>
    <!-- /.sidebar -->
</aside>