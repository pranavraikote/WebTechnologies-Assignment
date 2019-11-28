let firework = function(){
  this.hu = random(255);
    this.firework = new partical(random(width),height,this.hu,true);
    this.exploded = false;
    this.particals = [];

    this.done = function(){
      if(this.exploded && this.particals.length === 0){
        return true;
      }else{
        return false;
      }
    }


    this.update = function(){
      if(!this.exploded){
        this.firework.applyForce(gravity);
        this.firework.update();
        this.firework.show();

        if(this.firework.vel.y >=0){
          //this.firework = null;
          this.exploded = true;
           this.explode();
        }
      }

      for(let i = this.particals.length -1; i >=0 ;i--){
        this.particals[i].applyForce(gravity);
        this.particals[i].update();
        if(this.particals[i].done()){
          this.particals.splice(i,1);
        }
      }

    }

    this.explode = function() {
      for(let i=0;i<100;i++){
        let p = new partical(this.firework.pos.x,this.firework.pos.y,this.hu,false);
        this.particals.push(p);
      }
    }


    this.show = function(){
      if(!this.exploded){
        this.firework.show();
      }
      for(let i =0; i < this.particals.length;i++){
        this.particals[i].show();
      }
    }
}
