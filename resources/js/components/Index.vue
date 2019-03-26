<template>
  <div class="index-page">
  <h1>Data</h1>
    <div class="row">
      <div class="col-md-10"></div>
      <div class="col-md-2">
        <router-link :to="{ name: 'create' }" class="btn btn-primary">Create Data</router-link>
      </div>
    </div>

    <br />

    <table class="table table-hover">
      <thead>
      <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>Email</th>
          <th>Secret</th>
          <th colspan = 2>Actions</th>
          <th>Created</th>
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
            <button class="btn btn-danger" @click.prevent="deletePost(post.id)">X</button>
          </td>
          <td>{{ post.updated_at }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<style media="screen">
  h1 {
    margin: auto;
  }
  .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
  background-color: #4169e1;
  color: #FFD300;
  transition: ease all .1s;
  }
  .index-page {
    font-family: 'Raleway', sans-serif;
  }

</style>

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
    },
    methods: {
      deletePost(id)
      {
        let uri = `http://localhost:8000/api/post/delete/${id}`;
        this.axios.delete(uri).then(response => {
          this.posts.splice(this.posts.indexOf(id), 1);
        });
      }
    }
  }
</script>
