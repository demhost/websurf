<script type="text/x-template">
    export default {

    	template: '#form1template',
    	
		  data () {
			return {
			  message: ''
			}
		  },
		  methods: {
			  	send: function() {
			  		console.log(this.message);
			  	},

			  	send2: function(sendData) {

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

    }
</script>
