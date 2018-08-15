<template>
  <div id="app">
    <List :stations="stations" />
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
  public stations: any[] = [];

  public created() {
    this.fetch();
  }

  public fetch() {
    axios
      .get('https://api-radiko.soramugi.net/station/region/full.xml')
      .then((res) => {
        this.stations = res.data.stations;
      });
  }
}
</script>

<style>
</style>
