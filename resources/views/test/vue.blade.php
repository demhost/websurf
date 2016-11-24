@extends('layouts.app')

@section('content')
{{--
	    <div class="container">

	        <div class="row">

	            <div id="app-1" class="col-md-12 well">
	           	 @{{ message }}
	    		</div>
			
		        <div id="app-2" class="col-md-12 well">
					<span v-bind:title="message">
					    Hover your mouse over me for a few seconds to see my dynamically bound title!
					</span>
				</div>

		        <div id="app-3" class="col-md-12 well">
			  		<p v-if="seen">Now you see me</p>
				</div>

				<div id="app-4" class="col-md-12 well">
				  <ol>
				    <li v-for="todo in todos">
				      @{{ todo.text }}
				    </li>
				  </ol>
				</div>


			<div id="app-5" class="col-md-12 well">
			  <p>@{{ message }}</p>
			  <button v-on:click="reverseMessage">Reverse Message</button>
			</div>

			<div id="app-6" class="col-md-12 well">
			  <p>@{{ message }}</p>
			  <input v-model="message">
			</div>


	    	</div>
		</div>

--}}


{{-- 	<div id="app-7">
	  <ol>
	    <todo-item v-for="item in groceryList" v-bind:todo="item"></todo-item>
	  </ol>
	</div> --}}

<div id="form1">

	<form1>

		<template id="form1template">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-8 col-md-offset-2">
		                <div class="panel panel-default">
		                    <div class="panel-heading">Форма</div>

		                    <div class="panel-body">
								<input v-model="message" placeholder="edit me">
								<p>Message is: @{{ message }}</p>

								<b @click="send()">Send</b>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</template>

	</form1>

</div>

<div id="app-3">
@{{ currentNumber }}
 <iframe id="surfwindow" src="http://demhost.dev" width="100%" height="300px" :sec="5" @mouseleave="mouseLeave" @mouseover="mouseOver">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>

</div>


<div id="vuetest">

	<example3>

		<template id="example3template">
		    <div class="container">
		        <div class="row">
		            <div class="col-md-8 col-md-offset-2">
		                <div class="panel panel-default">
		                    <div class="panel-heading">Example example3 Component 123</div>

		                    <div class="panel-body">
								<li v-for="(item,index) in tabs" @click="AjaxFunktion(item.name)">
								  	@{{ index }} - @{{ item }}
								</li>

								<b @click="AjaxFunktion('123')">Load 123</b>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</template>

	</example3>

</div>


@endsection



@section('vue')

<example3>

	<template id="example3template">
	    <div class="container">
	        <div class="row">
	            <div class="col-md-8 col-md-offset-2">
	                <div class="panel panel-default">
	                    <div class="panel-heading">Example example3 Component 123</div>

	                    <div class="panel-body">
							<li v-for="item in tabs" @click="AjaxFunktion('123')">
							  	@{{ item }}
							</li>

							<b @click="AjaxFunktion('123')">Load 123</b>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</template>

</example3>

@endsection
