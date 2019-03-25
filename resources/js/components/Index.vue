<!-- <template id="post-list">
  <div class="row">
    <div class="pull-right">
      <router-link class="btn btn-xs btn-primary">
        <span class="glyphicon glyphicon-plus"></span>
        Add New Data
      </router-link>
    </br></br>
    </div>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Age</th>
          <th>Email</th>
          <th>Secret</th>
          <th class="col-md-2">Update</th>
        </tr>
      </thead>
       <tbody>
         <tr v-for="(post, index) in filteredPosts">
           <td>{{ index + 1 }}</td>
           <td>{{ post.first_name }} {{ post.last_name }}</td>
           <td>{{ post.age }}</td>
           <td>{{ post.email }}</td>
           <td>{{ post.secret }}</td>
           <td>
            <router-link class="btn btn-info btn-xs" v-bind:to="{name: 'Viewpost', params: {id: post.id}}">Show</router-link>
            <router-link class="btn btn-warning btn-xs" v-bind:to="{name: 'Editpost', params: {id: post.id}}">Edit</router-link>
            <router-link class="btn btn-danger btn-xs" v-bind:to="{name: 'Deletepost', params: {id: post.id}}">X</router-link>
           </td>
         </tr>
       </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data:function(){
    return {posts: ''};
  },
  created: function() {
    let uri = 'http://localhost:8000/posts/';
    Axios.get(uri).then((response) => {
      this.posts = response.data;
    });
  },
  computed: {
    filteredPosts: function(){
      if(this.posts.length) {
        return this.posts;
      }
    }
  }
}
</script> -->


<template>
  <div>
  <h1>Data</h1>
    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Data</router-link>
      </div>
    </div><br />

    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Secret</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
          <tr v-for="post in posts" :key="post.id">
            <td>{{ post.id }}</td>
            <td>{{ post.first_name }} {{ post.last_name }}</td>
            <td>{{ post.age }}</td>
            <td>{{ post.email }}</td>
            <td>{{ post.secret }}</td>
            <td>
              <router-link :to="{name: 'edit', params: { id: post.id }}" class="btn btn-primary">Edit</router-link>
            </td>
            <td>
              <button class="btn btn-danger">X</button>
            </td>
          </tr>
        </tbody>
    </table>
  </div>
</template>

<script>
  export default {
      data() {
        return {
          posts: []
        }
      },
      created() {
      let uri = 'http://localhost:8000/api/posts';
      this.axios.get(uri).then(response => {
        this.posts = response.data.data;
      });
    }
  }
</script>
