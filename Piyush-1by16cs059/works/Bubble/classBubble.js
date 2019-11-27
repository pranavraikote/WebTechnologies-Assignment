let fps = 12;
let n = 5;
let loo = true;
let bubbleObj = [];
function setup() {
    createCanvas(screen.width,screen.height);
    background(51);

    for(let i = 0;i<n;i++){
      bubbleObj[i] = new bubble();
    }
    frameRate(fps);
    rectMode(CENTER);
}

function draw() {
  for(let i=0;i<n;i++){
    noStroke();
    fill(random(255),random(255),random(255));
    bubbleObj[i].radius = random(height/4);
    bubbleObj[i].x = random(width);
    bubbleObj[i].y = random(height);
    ellipse(bubbleObj[i].x,bubbleObj[i].y,bubbleObj[i].radius);
    //rect(x,y,radius,radius);
  }
}

class bubble {
  constructor() {
    this.x = 0,
    this.y = 0,
    this.radius = 0
  }
}

function mousePressed(){
  if(loo === true){
    noLoop();
    loo = false;
  }else{
    loop();
    loo = true;
  }
}
