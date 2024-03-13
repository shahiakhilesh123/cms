<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php
            $menus = App\Models\Menu::whereHas('type', function ($query) {
                $query->where('type', 'SideBar');
            })
            ->whereHas('category', function ($query) {
                $query->where('category', 'Admin');
            })
            ->where('menu_id', '=', 0)->get()->toArray();
            foreach($menus as $menu) {
              $subMenus = App\Models\Menu::where('menu_id', $menu['id'])->get(); 
              ?>
              <li class="nav-item menu-open">
                <a href="<?php if($subMenus->count() == 0){ echo $menu['menu_link'];  }?> " class="nav-link active">
                  <i class="nav-icon {{ $menu['menu_class']}}"></i>
                  <p>
                    {{$menu['menu_name']}}
                    <?php if($subMenus->count() > 0){ ?>
                    <i class="right fas fa-angle-left"></i>
                    <?php } ?>
                  </p>
                </a>
                <?php 
                if($subMenus->count() > 0){
                  $subMenus = $subMenus->toArray();
                    ?>
                    <ul class="nav nav-treeview">
                      @foreach($subMenus as $subMenu)
                        <li class="nav-item">
                          <a href="{{ $subMenu['menu_link'] }}" class="nav-link active">
                            <i class="far {{ $subMenu['menu_class'] }}"></i>
                            <p>{{ $subMenu['menu_name']}}</p>
                          </a>
                        </li>
                      @endforeach
                    </ul>
                <?php } ?>
          </li>
          <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>