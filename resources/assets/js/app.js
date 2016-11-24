
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


Vue.component('example3', require('./components/Example3.vue'));
Vue.component('form1', require('./components/Form1.vue'));

/*
const app = new Vue({
    el: '#app',
		  data () {
			return {
			  tabls: ['mike1111','bill111','tony111']
			}
		  },
});
*/



const form1 = new Vue({
    el: '#form1',
      data () {
      return {
        message: ''
      }
      },
});

const vuetest = new Vue({
    el: '#vuetest',
		  data () {
			return {
			  tabs: []
			}
		  },
});

var app3 =  new Vue({
        el: '#app-3',

        props: ['sec'],

        data () {
          return {
                  currentNumber: null,
                  timer: null,
                  status: false,
                  //widgetId: false
          }
        },


        

        created: function () {
            //this.startRotation();
            //this.currentNumber = 2;
            //this.widgetId = this.sec;
        },

        methods: {
            startRotation: function() { 

                //console.log(this);
                if(this.currentNumber == null) {
                  this.currentNumber = this.$el.getElementsByTagName("iframe")[0].getAttribute("sec");
                }
                
                //this.currentNumber = 120;
                if(this.status != true) {
                  this.timer = setInterval(this.next, 1000);
                }
            },

            next: function() {
                this.currentNumber -= 1;

                if(this.currentNumber == parseInt(0)) {
                  console.log('Load captcha');
                  this.status = true;
                  this.stop();
                }
                // if(this.timer >= 10) {
                //     this.confirmOut();
                //     }
            },

            stop: function() {
                clearInterval(this.timer);
            },

            mouseLeave: function() {
                console.log('Mouse Leave');
                this.stop();
            },
            mouseOver: function() {
                this.startRotation();
                console.log('Mouse mouseover')
            },

            confirmOut() {
              if (confirm("Может вы желаете покинуть серфинг данной страницы?")) {
                alert('Да');
              } else {
                alert('Нет');
              }
            },
        }


    });











/*
var example3component = Vue.extend({


    	template: '#example3template',
    	

		  data () {
			return {
			  tabsList: ['mike1111','bill111','tony111']
			}
		  },


		    created: function () {
		        this.loadItems();
		    },

		  methods: {

				loadItems: function () {
		            this.tabsList = ['mike222','bill222','tony333']
		        },

			  	AjaxFunktion: function(view) {

					Vue.http.get('/test/vuejs')
					    .then( function(response) { 
					        console.log(response); 
					        this.tabsList = response.data;
					    }.bind(this) )
					    .catch( function(error) { 
					        console.error(error); 
					    } );
			  	}
		  }


});
*/


//Vue.component('example3', example3component);

/*const app = new Vue({
    el: '#app',
    data: {
    	message: 'Hello Vue!'
  	}
});
*/



/*
const app1 = new Vue({
    el: '#app-1',
    data: {
    	message: 'Hello Vue!'
  	}
});

var app2 = new Vue({
  el: '#app-2',
  data: {
    message: 'You loaded this page on ' + new Date()
  }
});

var app3 = new Vue({
  el: '#app-3',
  data: {
    seen: true
  }
});

var app4 = new Vue({
  el: '#app-4',
  data: {
    todos: [
      { text: 'Learn JavaScript' },
      { text: 'Learn Vue' },
      { text: 'Build something awesome' }
    ]
  }
});

var app5 = new Vue({
  el: '#app-5',
  data: {
    message: 'Hello Vue.js!'
  },
  methods: {
    reverseMessage: function () {
      this.message = this.message.split('').reverse().join('')
    }
  }
});

var app6 = new Vue({
  el: '#app-6',
  data: {
    message: 'Hello Vue!'
  }
});
*/



/*
Vue.component('todo-item', {
  props: ['todo'],
  template: '<li>{{ todo.text }}</li>'
});

var app7 = new Vue({
  el: '#app-7',
  data: {
    groceryList: [
      { text: 'Vegetables' },
      { text: 'Cheese' },
      { text: 'Whatever else humans are supposed to eat' }
    ]
  }
});
*/


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

//Vue.component('example', require('./components/Example.vue'));

//Vue.component('example3', require('./components/Example3.vue'));

/*Vue.component('example3', require('./components/Example3.vue'));

const app = new Vue({
    el: '#app',
    data: {
    	msg: 'Hello VueJS',
    	items: [
			      { childMsg: 'Foo' },
			      { childMsg: 'Bar' }
			    ],
		currentView: 'example3'
  	}
});*/

//app.msg = 'Hello!'
