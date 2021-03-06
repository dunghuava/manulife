<style>
    .main-sidebar{
      background:<?=$setting['sibar_background_color']?>;
    }
    .main-sidebar *{
      color:<?=$setting['sibar_text_color']?> !important;
    }
    .main-sidebar .user-panel {
      border-bottom: 1px solid <?=$setting['sibar_text_color']?>;
    }
    .elevation-4{box-shadow:none !important}
    .app_say{
      font-size: 20px;
      font-weight: bold;
      display: block;
    }

    .number-contact{
      background-color: red;
      color: #fff;
      display: inline-block;
      padding-left: 8px;
      padding-right: 8px;
      text-align: center;
      border-radius: 50%
    }
</style>
<?php 
  function appSay(){
    $hour = date('H');
    $sayText ='';
    if ($hour>=0 && $hour <5){
      $sayText='Chào buổi tối';
    }else if ($hour>=5 && $hour<12){
      $sayText='Chào buổi sáng';
    }else if ($hour>=12 && $hour<=19){
      $sayText='Chào buổi chiều';
    }else if ($hour>=19 && $hour<=23){
      $sayText='Chào buổi tối';
    }
    return '<span class="app_say">'.$sayText.'</span>';
  }

?>

<input type="hidden" id="primary_color" value="<?=$setting['sibar_background_color']?>b0">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host"><div class="os-resize-observer observed" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer observed"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 483px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!-- <div class="image" >
          <img onerror="this.src='dist/img/user.png'" style="width:35px;height:35px" src="dist/img/user.png" class="img-circle" alt="User Image">
        </div> -->
        <div class="info">
          <a href="<?=base_url('user')?>" class="d-block">
              <?=appSay().''.$user_infor['user_fullname']?>
              <!-- <span style="font-size: 11px;position: absolute;bottom: 0;right: 0;"><?=sprintf('%02d',$online)?> Online</span> -->
          </a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item has-treeview <?=$page_menu=='project' ? 'menu-open':''?>">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Dự án
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('user/project')?>" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Tất cả</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('user/project/add')?>" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Thêm dự án</p>
                </a>
              </li>
            </ul>
          </li>
 -->

          <li class="nav-item has-treeview <?=$page_menu=='post' ? 'menu-open':''?>">
            <a href="javascript:void(0)" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Kiến thức & Tin tức
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('user/post')?>" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Tất cả</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?=base_url('user/post/add')?>" class="nav-link">
                  <i class="fas fa-angle-right nav-icon"></i>
                  <p>Thêm bài viết</p>
                </a>
              </li>
            </ul>
          </li>
        
          <li class="nav-item has-treeview">
            <a href="user/account/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-in-alt"></i>
              <p>
                Exit
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 38.4738%; transform: translate(0px, 76.2274px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>