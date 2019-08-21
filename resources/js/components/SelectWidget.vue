<template>
  <div class="mb-6">
    <div class="flex flex-wrap my-2">
      <small
        v-for="language in lang_list"
        :key="language"
        @click="remove"
        class="bg-gray-200 mr-2 rounded-full py-2 px-4 mb-3 hover:bg-gray-300 cursor-pointer border border-blue-900"
      >{{language}}</small>
    </div>
    <div class="relative">
      <select
        @change="update"
        class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
      >
        <option v-for="prog_lang in languages" :key="prog_lang.id">{{prog_lang.language}}</option>
      </select>
      <div
        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
      >
        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
        </svg>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      lang_list: []
    };
  },
  props: ["languages"],
  methods: {
    update(e) {
      this.lang_list.push(e.target.value);
      const lang_set = new Set(this.lang_list);
      return (this.lang_list = [...lang_set]);
    },
    remove({ target: { textContent } }) {
      const index = this.lang_list.indexOf(textContent);
      if (index > -1) {
        return this.lang_list.splice(index, 1);
      }
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>
