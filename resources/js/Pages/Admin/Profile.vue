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
        <div class="bg-green-200 text-green-500 p-3" v-if="$page.props.flash.success">
            {{ $page.props.flash.success }}
          </div>
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" :src="'/imgs/user4-128x128.jpg'" alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">Nina Mcintire</h3>
                <p class="text-muted text-center">Software Engineer</p>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>

          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
               <h1>Edit profile</h1>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div  id="settings">
                    <form class="form-horizontal"  method="POST" @submit.prevent="edit()">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName" v-model="userInfos.name" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail"  v-model="userInfos.email"  placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPhone" class="col-sm-2 col-form-label"  >Phone</label>
                        <div class="col-sm-10">
                          <input type="tel" class="form-control" id="inputPhone" v-model="userInfos.phone" placeholder="Tel">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Edit here</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
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
          props:{
           errors: Object,
        },
        data() {
          return {
            userInfos: this.$page.props.user
          };
        },
        methods:{

          edit(){
             this.$inertia.put(route("user.profile"),this.userInfos);
          }
        },
        mounted()
        {
          console.log( this.$page.props.user.name);
        }
       
    }
</script>
