<template>
  <div>
    {{user.name}}
    <div v-for="friend in friends" :key="friend.id" class="friend-list-item">
      <p>{{friend.name}}</p>
      <p>Javascript Developer from Vue</p>
      <a @click.prevent="sendRequest($event,friend.name)" class="follow">Follow</a>
    </div>
  </div>
</template>


<script>
export default {
  props: ["friends", "user"],
  data() {
    return {
      myData: {
        name: "Oladayo",
        job: "Developer"
      }
    };
  },
  methods: {
    sendRequest(e, name) {
      const request_data = {
        requester: this.user.id,
        requestee: name
      };
      axios
        .post("/test", request_data)
        .then(response => console.log(response.data))
        .catch(e => console.log(e));
      console.log(`Request sent to ${name}`);
    }
  }
  //   created() {
  //     console.log(this.user);
  //   }
};
</script>

