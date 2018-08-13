<template>
  <div class="">
    {{programs}}
    <p v-for="program in programs"> {{program}} </p>
  </div>
</template>

<script lang="ts">
import { Component, Prop, Watch, Vue } from 'vue-property-decorator';

@Component
export default class List extends Vue {
  @Prop(Array)
  public programs!: any[];

  constructor(obj?: any) {
    super(obj);
    // setInterval(() => {
    //   console.log(this.programs);
    // }, 100);
  }
}
</script>
