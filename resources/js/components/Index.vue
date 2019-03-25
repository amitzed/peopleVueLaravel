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
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card card-default">
              <div class="card-header">Index</div>

              <div class="card-body">
                  The Index component.
              </div>
          </div>
      </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Index Component mounted.')
        }
    }
</script>
 
