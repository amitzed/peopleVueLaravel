<template>
  <div class="create-page">
    <h1>Create Data</h1>
    <form @submit.prevent="addPost">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>First Name:</label>
            <input type="text" class="form-control" v-model="post.first_name" required>
          </div>
        </div>
        </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Last Name:</label>
            <input type="text" class="form-control" v-model="post.last_name" required>
          </div>
        </div>
        </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Age:</label>
            <input type="number" class="form-control" v-model="post.age" required>
          </div>
        </div>
        </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" v-model="post.email" required>
          </div>
        </div>
        </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Secret:</label>
            <input type="text" class="form-control" v-model="post.secret" required>
          </div>
        </div>
        </div>

        <br />
        <div class="form-group">
          <button class="btn btn-primary">Create</button>
        </div>
    </form>
  </div>
</template>

<style media="screen">
  .create-page {
    font-family: 'Raleway', sans-serif;
  }
  div .col-xs-3 {
    text-align: center;
  }
</style>
<script>
    export default {
        data(){
        return {
          post:{}
        }
    },
    methods: {
      addPost(){
        let uri = 'http://localhost:8000/api/post/create';
        this.axios.post(uri, this.post).then((response) => {
           this.$router.push({name: 'posts'});
        });
      }
    }
  }
</script>
