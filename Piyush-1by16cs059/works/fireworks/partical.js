let partical = function(x,y,hu,exp){
  this.pos = createVector(x,y);
  this.exp = exp;
  this.lifespan = 255;
  this.hu = hu;
  if(this.exp){
    this.vel = createVector(0,random(-8,-20));
  }else{
    this.vel = p5.Vector.random2D();
    this.vel.mult(random(2,10));
  }

  this.acc = createVector(0,0);

  this.applyForce = function(force){
    this.acc.add(force);
  }

  this.update = function(){
    if(!this.exp){
      this.vel.mult(0.96);
      this.lifespan -= 5;
    }

    this.vel.add(this.acc);
    this.pos.add(this.vel);
    this.acc.mult(0);
  }

  this.show = function(){
    colorMode(HSB);
    if(!this.exp){
      strokeWeight(3);
      stroke(hu , 255 , 255 , this.lifespan);
    }else{
      strokeWeight(6);
      stroke(hu , 255 , 255);
    }
    point(this.pos.x , this.pos.y);
  }


  this.done= function(){
    if(this.lifespan < 0){
      return true;
    }else{
      return false;
    }
  }

}
