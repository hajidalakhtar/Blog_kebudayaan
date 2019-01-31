<template>
  <div>
    <div class="row mt-5">
      <div class="col-md-5" v-for="data in data">
        <div class="card">
          <div class="card-head">
            <h2>
              <a v-bind:href="'/blog/'+data.slug">{{data.title}}</a>
            </h2>
          </div>
          <div class="card-body">
            <h2>{{data.isi}}</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      data: []
    };
  },

  mounted() {
    axios.get("/api/blog").then(response => (this.data = response.data));
  }
};
</script>
