<script type="text/x-template">
    export default {

    	template: '#example3template',
    	
		  data () {
			return {
			  tabs: [
					      { name: 'name 1222' },
					      { name: 'name 2222' },
					      { name: 'name 333' }
					  ]
			}
		  },
		  methods: {
			  	AjaxFunktion: function(sendData) {

			  	var vardata = [
					      { data: sendData }
					  ];

					Vue.http.post('/test/vuejs', vardata)
					.then(function (response) {
						this.tabs = response.data;
		                //console.log(response.data);
		            }.bind(this))
					    .catch( function(error) { 
					        console.error(error); 
					    });	

			  	}
		  }

		  /*
		  methods: {
			  	AjaxFunktion: function(view) {

					Vue.http.get('/test/vuejs')
					    .then( function(response) { 
					        console.log(response); 
					        this.tabs = response.data;
					        console.log(view); 
					    }.bind(this) )
					    .catch( function(error) { 
					        console.error(error); 
					    } );
			  	}
		  }
		  */
    }
</script>
