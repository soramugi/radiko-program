<template>
  <div id="app">
    <List :programs="programs" />
  </div>
</template>

<script lang="ts">
import { Component, Vue } from 'vue-property-decorator';
import List from './components/List.vue';
import axios from 'axios';

@Component({
  components: {
    List,
  },
})
export default class App extends Vue {
  public programs: any[] = [];

  public created() {
    this.fetch();
  }

  public fetch() {
    axios
      .get('https://api-radiko.soramugi.net/program/today/JP13.xml')
      .then((res) => {
        this.programs = Object.keys(res.data);
      });
  }
}
</script>

<style>
</style>
