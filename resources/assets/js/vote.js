var App = new Vue({
	el: "#vote",
	components: {
		vote: Vue.component("vote", require("./components/Vote.vue")),
	},
	template: "<vote></vote>"
});