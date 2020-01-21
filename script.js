var vm = new Vue({
  el: '#st',
  data() {
    return {
      store: null,
      active_tab: 'ovens',
      selected: []
    };
  },
  methods: {
    toCupboards: function (product) {
      this.selected.push(product);
      this.active_tab = 'cupboards'
    },
    toStoves: function (product) {
      this.selected.push(product);
      this.active_tab = 'stoves'
    }

  },
  mounted() {
    axios
      .get('/store.php')
      .then(response => (this.store = response));
  }
});