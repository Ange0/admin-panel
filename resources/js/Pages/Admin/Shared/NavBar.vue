<template>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <inertia-link :href="route('dashboard')" class="nav-link">Home</inertia-link>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <inertia-link :href="route('contact')" class="nav-link">Contact</inertia-link>
        </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item">
         

            <inertia-link :href="route('logout')" method="post" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
                Logout
            </inertia-link>
        </li>
        </ul>
    </nav>
</template>
<script>
export default {
    
}
</script>