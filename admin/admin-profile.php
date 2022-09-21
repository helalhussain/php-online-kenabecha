<?php include('admin-header.php'); ?>

<!-------------------------------Left-sidebar-start------------------->
 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user">
      <!-- <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image"> -->
        <div>
          <p class="app-sidebar__user-name"></p>
          <p class="app-sidebar__user-designation">Online kenabecha</p>
        </div>
      </div>
      <ul class="app-menu">
        <!-- <li><a class="app-menu__item active" href=""><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li> -->
        <li class="treeview"><a class="app-menu__item" href="admin-inbox.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li><a class="app-menu__item" href="admin-outbox.php"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        <li class="treeview"  style="background: black;"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Profile</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-recycle"></i><span class="app-menu__label">Undo message</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Setting</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>

      </ul>
    </aside>
    <!-----------------------Sidebar-end----------------->

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Profile</h1>
          <p></p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Profile</a></li>
        </ul>
      </div>
     
    </main>
   

<?php include('admin-footer.php'); ?>