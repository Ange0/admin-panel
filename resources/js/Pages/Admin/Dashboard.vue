<template>
<div>

  <!-- Navbar -->
    <nav-bar></nav-bar>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <side-bar></side-bar>
 <!-- Fin Main Sidebar Container -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
  <!-- /.content-wrapper -->
  <my-footer></my-footer>

<!-- ./wrapper -->
</div>
</template>



<script>

    import NavBar from './Shared/NavBar';
    import SideBar from './Shared/SideBar';
    import MyFooter from './Shared/Footer';
    
    
    export default {
        components: {
           NavBar,
           SideBar,
           MyFooter
        },
       
    }
</script>
