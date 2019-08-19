
<template>
  <form class="w-full p-6" @submit.prevent="submit">
    <app-input name="username" label="Username"></app-input>
    <app-input name="bio" label="Bio"></app-input>
    <app-select :languages="language_list"></app-select>
    <app-submit></app-submit>
  </form>
</template>
<script>
import FormInput from "./FormInput";
import SelectWidget from "./SelectWidget";
import FormSubmit from "./FormSubmit";
export default {
  props: ["language_list"],
  data() {
    return {
      field: {}
    };
  },
  components: {
    "app-input": FormInput,
    "app-select": SelectWidget,
    "app-submit": FormSubmit
  },
  methods: {},
  created() {
    console.log(this.language_list);
  }
};
</script>
