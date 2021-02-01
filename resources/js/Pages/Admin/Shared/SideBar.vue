<template>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <inertia-link href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </inertia-link>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <inertia-link href="#" class="d-block">Alexander Pierce</inertia-link>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <inertia-link href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </inertia-link>
          </li>
          <li class="nav-item has-treeview">
            <a  class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <inertia-link href="pages/layout/top-nav.html" class="nav-link">
                  <i class="fas fa-file-signature nav-icon"></i>
                  <p>Permissions</p>
                </inertia-link>
              </li>
              <li class="nav-item">
                <inertia-link href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="fas fa-fingerprint nav-icon"></i>
                  <p>Roles</p>
                </inertia-link>
              </li>
              <li class="nav-item">
                <inertia-link href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Users</p>
                </inertia-link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <inertia-link :href="route('user.profile')" class="nav-link">
              <i class="nav-icon far fa-user text-warning"></i>
              <p>Profile</p>
            </inertia-link>
          </li>
          <li class="nav-item">
            <inertia-link href="#" class="nav-link">
              <i class="nav-icon far fa-bell text-info"></i>
              <p>Notifications</p>
            </inertia-link>
          </li>
          <li class="nav-item">
            <inertia-link href="#" class="nav-link">
              <i class="nav-icon far fa-image text-success"></i>
              <p>Change Profile Photo</p>
            </inertia-link>
          </li>
          <li class="nav-item">
            <inertia-link href="#" class="nav-link">
              <i class="nav-icon fas fa-lock text-primary"></i>
              <p>Change password</p>
            </inertia-link>
          </li>
          <li class="nav-item">
            <inertia-link :href="route('logout')" method="post"   class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
              <p>Logout</p>
            </inertia-link>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
</template>
<script>
export default {


}
</script>