<template>
  <div>
    <div v-for="friend in friends" :key="friend.id" class="friend-list-item">
      <p>{{friend.name}}</p>
      <p>Javascript Developer from Vue</p>
      <a @click.prevent="sendRequest($event,friend.name)" class="follow">Follow</a>
    </div>
  </div>
</template>


<script>
export default {
  props: ["friends"],
  data() {
    return {};
  },
  methods: {
    sendRequest(e, name) {
      console.log(`Request sent to ${name}`);
    }
  }
};
</script>

