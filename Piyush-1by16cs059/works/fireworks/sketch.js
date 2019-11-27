let fw = [];
let gravity;

function setup() {
  createCanvas(windowWidth,windowHeight);
  colorMode(HSB);
  background(0);
  stroke(255);
  strokeWeight(4);

  gravity = createVector(0,0.2);

}

function draw() {
  colorMode(RGB);
  background(0,0,0,25);
  if(random(1) < 0.05){
    fw.push(new firework());
  }
  for(i = fw.length -1; i >= 0 ;i--){
    fw[i].update();
    fw[i].show();
    if(fw[i].done()){
      fw.splice(i,1);
    }
  }
}
