const ressources = {
	wood: {
		name: 'wood',
		current: 0,
		max: 100,
		rate: 0,
		click : 1,
	},
	iron: {
		name: 'iron',
		current: 0,
		max: 100,
		rate: 1,
		click : 1,
	},
	stone: {
		name: 'stone',
		current: 0,
		max: 100,
		rate: 0,
		click : 1,
	},
};

const buildings = {
	home: {
		cost: {
			0: {
				what: 'wood',
				how: 50,
			},
			1: {
				what: 'iron',
				how: 50,
			}
		}
	}
}

let vm = new Vue({
	el: '#app',
	data: {
		view: '',
		time: 0,
		ressources: ressources,
		character: {

		},
		work: {
			current_task : '',
			work_power: 1,
			work_progress: 0,
			working: true
		}
	},
	async mounted() {
		// this.view = 'work';
		this.view = 'base';
	},
	methods: {
		auto_increment(){

			for (const [k, v] of Object.entries(this.ressources)) {
				if (this.ressources[k].current <= v.max) {
					this.ressources[k].current += v.rate;
				}
				this.ressources[k].rate += 1;
			}

			if (this.work.working) {

				// $('working_progress_bar').style.webkitAnimationPlayState = "running";
				this.work.work_progress += this.work.work_power;
				// this.work.work_progress 

			}
			else {
				// $('working_progress_bar').style.webkitAnimationPlayState = "paused";
			}
			
		},
		click_increment (which) {
			const r = Object.values(this.ressources)
			this.ressources[which].current += this.ressources[which].click;
		},
		set_view (view) {
			this.view = view;
		}

	},
	created: function() {
    var that = this;
    window.setInterval(function() {
			that.auto_increment();
    }, 1000);
  }


});
