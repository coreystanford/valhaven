define(['Renderer'],function(Renderer){

	return Renderer.extend({
		constructor: function(options){
			this.agents = options.agents;

			Renderer.prototype.constructor.call(this,options);
		},
		draw: function(){
			var self = this;

			// console.log(this.w + "  " + this.h);
			// console.log(this.context);

			// var can = document.getElementById('can');
			// this.context = can.children[0].getContext("2d");
			// this.context.restore();    // after obtaining the context
			this.context.save();
			this.context.setTransform(1, 0, 0, 1, 0, 0);
			// Will always clear the right space
			this.context.restore();
			this.context.clearRect(0, 0, this.w, this.h);

			_(this.agents).each(function(agent){
				self.tileSpec = agent.getTileSpec();
				self.drawTile(agent.getSprite(), agent.getTileId(), agent.position.x, agent.position.y);
			});
		}
	});

});