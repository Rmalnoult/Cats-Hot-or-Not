<template>
	<div id="vote">
		<div class="bcg" :style="{ 'background-image': 'url('+cat.image+')' }">
			<div class="buttons">
				<div class="mask"></div>
				<div class="col-xs-6">
					<button class="pull-right success" v-on:click="vote('positive')">
						<span class="fa fa-3x fa-heart text-white"></span>
					</button>
				</div>
				<div class="col-xs-6">
					<button class="pull-left danger" v-on:click="vote('negative')">
						<span class="fa fa-3x fa-times text-white"></span>
					</button>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
	export default {
		data: function () {
			return {
				cats: cats,
				cat: {},
			}
		},
	    created() {
	        this.pickNewCat();
	    },
	    methods: {
	    	pickNewCat: function () {
	    		this.cat = this.cats[Math.floor(Math.random()*this.cats.length)];
	    	},
	    	vote: function (vote) {
	    		$.ajax({
	    			url : "/cats/vote",
	    			type : 'GET',
	    			data : {
	    				vote : vote,
	    				id : this.cat.id,
	    			},
	    		})
	    		.always(function() {
	    			this.pickNewCat();
	    		}.bind(this));
	    	}
	    }
	}
</script>