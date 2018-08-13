<template>
  <div id="app">
    <button class="btn" @click="fetch">fetch</button>
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

  constructor(obj?: any) {
    super(obj);
  }

  public fetch() {
    console.log('fetch');
    axios
      .get('https://api.coindesk.com/v1/bpi/currentprice.json')
      .then((res) => {
        console.log('fetch done');
        this.programs = Object.keys(res.data);
      });
  }
}
</script>

<style>
</style>
