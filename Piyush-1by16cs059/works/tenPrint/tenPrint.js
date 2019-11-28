let x = 0
let y = 0;
let l = 30;


function setup(){
    createCanvas(1366,768);
    background(0);
}

function draw() {
  stroke(255);
  if(random(1) < 0.5){
    line(x , y , x + l ,y + l);
  }else{
    line(x , y + l , x + l , y);
  }

  x += l;
  if(x > width){
    x = 0;
    y += l;
  }

}
