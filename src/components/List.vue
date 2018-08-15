<template>
  <div class="">
    <p v-for="station of stations">
      {{station['@attributes'].region_name}}
    </p>
  </div>
</template>

<script lang="ts">
import { Component, Prop, Watch, Vue } from 'vue-property-decorator';

@Component
export default class List extends Vue {
  @Prop(Array)
  public stations!: any[];

  public station: any;
}
</script>
