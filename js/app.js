
Vue.component('counter', {
  template: '<button v-on:click="counter += 1">{{counter}}</button>',
  data: function () {
		  return {
		    counter: 0
		  }  
	}
})

new Vue({
	el: '#app',
})