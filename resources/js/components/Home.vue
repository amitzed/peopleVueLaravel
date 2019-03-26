<template>
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="">
              <div class="head-title">
                <h1>Data Machine</h1>
              </div>
              <div class="">
                <img class="dataIMG" src="images/data.png" alt="">
              </div>
              <div class="card-body">
                  Create | Edit Your Data
              </div>
          </div>
      </div>
  </div>
</template>
<style media="screen">
  .col-md-8 {
    font-family: 'Raleway', sans-serif;
  }
  .dataIMG {
    padding: 50px;
    opacity: .2;
  }
  h1 {
    text-align: center;
    font-size: 50px;
    padding-top: 10px;
  }
  .card-body {
    text-align: center;
    font-size: 30px;
  }
</style>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
