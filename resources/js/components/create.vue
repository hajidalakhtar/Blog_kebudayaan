<template>
  <div id="app">
    <div class="container">
      <div class="card">
        <div class="card-body">
          <form method="Post" enctype="multipart/form-data" @submit.prevent="addPost()">
            <label for="title">Masukan Judul</label>
            <input type="text" class="form-control" name="title" v-model="title">
            <label for="isi">Masukan Isi</label>
            <vue-editor v-model="content" :editorToolbar="customToolbar"></vue-editor>
            <br>
            <label>Masukan Thumbnail</label>
            <input type="file" @change="onFileChanged" class="form-control">
            <br>
            <input type="submit" value="POST" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { VueEditor } from "vue2-editor";

export default {
  components: {
    VueEditor
  },

  data() {
    return {
      content: "",
      title: "",
      selectedFile: null,
      customToolbar: [
        ["bold", "italic", "underline"],
        [{ list: "ordered" }, { list: "bullet" }],
        ["image", "code-block"]
      ]
    };
  },
  methods: {
    onFileChanged(event) {
      this.selectedFile = event.target.files[0];
    },
    addPost() {
      axios.post("/admin/submit", {
        title: this.title,
        isi: this.content,
        img: this.selectedFile
      });
    }
  }
};
</script>