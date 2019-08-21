<template>
  <div class="flex flex-wrap mb-6">
    <label for="bio" class="block text-gray-700 text-sm font-bold mb-2">{{label}}:</label>

    <input
      id="bio"
      type="text"
      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-normal focus:outline-none focus:shadow-outline"
      :name="name"
      required
      autofocus
    />
  </div>
</template>
<script>
export default {
  props: ["label", "name"]
};
</script>

//
class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block w-full appearance-none leading-normal"
