var vm = new Vue({  
  el: '#st',
  data() {
    return {
      store: null,
      active_tab: 'ovens',
      selected: [],
      sum: 0
    };
  },
  methods: {
    toCupboards: function (product) {
      this.selected.push(product);
      this.sum += product.price;
      this.active_tab = 'cupboards'
    },
    toStoves: function (product) {
      this.selected.push(product);
      this.sum += product.price;
      this.active_tab = 'stoves'
    },
    toMicrowave: function (product) {
      this.selected.push(product);
      this.sum += product.price;
      this.active_tab = 'microwave'
    },
    toBasket: function (product) {
     this.selected.push(product);
     this.sum += product.price;
     this.active_tab = 'basket'
    }
  },
  mounted() {
    axios
      .get('/store.php')
      .then(response => (this.store = response));
  }
});
