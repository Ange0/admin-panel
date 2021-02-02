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
            <h1 class="m-0 text-dark">Create Permission</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Permission v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="container-fluid">
            <div class="col-md-12">
            <!-- general form elements -->
            <div class="card ">
              <div class="card-header">
                <h3 class="card-title">Add New Permission</h3>
                    <div class="card-tools">
                        <inertia-link :href="route('permission.index')" class="btn btn-info"><i class="fas fa-shield-alt"></i> See All Permissions</inertia-link>
                    </div>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form"  method="POST" @submit.prevent="addPermission()">
                <div class="card-body">
                  <div class="form-group">
                    <label for="permission">Permission Name</label>
                    <input type="text" v-model="form.name" class="form-control" id="permission" placeholder="Enter your permission">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> Ceate Permission</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
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
        data() {
            return {
                form: {
                    name: null,
                }
            }
        },
        methods:{
          addPermission(){
             this.$inertia.post(route("permission.store"),this.form);
          }
        },
       
    }
</script>
