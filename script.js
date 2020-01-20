new Vue({
  el: '#st',
  data() {
    return {
      store: null
    };
  },
  mounted() {
    axios
      .get('/store.php')
      .then(response => (this.store = response));
  }
});