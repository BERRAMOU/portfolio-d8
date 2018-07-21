var apiUrl = 'http://localhost/d8-test/api/movies';
var vm = new Vue({

  el: '#app',

  data: {
    listMovies: []
  },

  methods: {
    getMovies: function () {
      this.$http.get(apiUrl, {params: {_format: 'json'}}).then(function(response){
        this.listMovies = response.data;
         console.log(response.data);
      }, function(error){
        console.log(error.statusText);
      });
    }
  },
  ready: function () {
    console.log('test ');
  }
});

vm.getMovies();