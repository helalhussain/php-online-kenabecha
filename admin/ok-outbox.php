<?php include('admin-header.php'); ?>
<!--------------------sidebar------------------------>

 <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <!-- <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="" alt="User Image"> -->
        <div>
          <p class="app-sidebar__user-name"></p>
          <p class="app-sidebar__user-designation"></p>
        </div>
      </div>
      <ul class="app-menu">
        
        <li class="treeview"><a class="app-menu__item" href="admin-inbox.php" data-toggle="treeview"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Inbox</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview" style="background: black;"><a class="app-menu__item" href="charts.html"><i class="app-menu__icon fa fa-send"></i><span class="app-menu__label">Outbox</span><i class="treeview-indicator fa fa-angle-right"></i></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Profile</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-recycle"></i><span class="app-menu__label">Undo message</span><i class="treeview-indicator fa fa-angle-right"></i></a>

        </li>
        <li class="treeview"><a class="app-menu__item" href="admin-setting.php" data-toggle="treeview"><i class="app-menu__icon fa fa-cog fa-lg"></i><span class="app-menu__label">Settings</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        </li>

      </ul>
    </aside>
    <!---------------sidebar-end----------------->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-send"></i> Outbox</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-send fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Outbox</a></li>
        </ul>
      </div>

    </main>

    
<?php include('admin-footer.php'); ?>