<template>
  <div class="container">
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
      <ul class="navbar-nav">
        <li class="nav-item">
          <router-link to="/" class="nav-link">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/create" class="nav-link">Create Data</router-link>
        </li>
        <li class="nav-item">
          <router-link to="/posts" class="nav-link">Data List</router-link>
        </li>
      </ul>
    </nav>
    <br />

    <transition name="fade">
      <router-view></router-view>
    </transition>
  </div>
</template>

<style>
.container::before {
  content: "";
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: -1;
   opacity: .2;
  background-image: url('/images/sketch.png');
  background-repeat: no-repeat;
}
</style>

<script>

    export default{
    }
</script>
