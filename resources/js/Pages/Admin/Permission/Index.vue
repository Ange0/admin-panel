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
          <div  v-if="$page.props.flash.success" class="alert alert-info alert-dismissible fade show" role="alert">
            {{ $page.props.flash.success }}.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Permissions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Permission v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="container">
        <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                    <inertia-link :href="route('permission.create')" class="btn btn-danger"><i class="fas fa-plus-circle"></i> Add new Permission</inertia-link>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Date posted</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="permission in permissions" :key="permission.id">
                      <td>{{ permission.id }}</td>
                      <td>{{ permission.name }} </td>
                      <td>{{ permission.created_at }}</td>
                      <td>
                          <inertia-link :href="route('permission.edit',permission.id)" class="btn btn-sm btn-info "> Edit </inertia-link>
                          <inertia-link :href="route('permission.show',permission.id)" class="btn btn-sm btn-info "> Show </inertia-link>
                      </td>
                      
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

 
  <my-footer></my-footer>

<!-- ./wrapper -->
</div>
</template>
<script>
    import NavBar from './../Shared/NavBar';
    import SideBar from './../Shared/SideBar';
    import MyFooter from './../Shared/Footer';
    export default {
    components: {
           NavBar,
           SideBar,
           MyFooter
        },
    props:{
        permissions:Object,
    },
}
</script>