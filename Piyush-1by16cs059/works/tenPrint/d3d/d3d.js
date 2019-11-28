//Global Namespace//
r = 50;
 angle = 0;
 offset = 0;
 d = 2*r;
 maxD = 0;
//

function setup() {
  createCanvas(windowWidth, windowHeight, WEBGL);
  img = loadImage('sketches/texture2.jpg');

  centerX = width/2;
  centerY = width/2;

  // maxD = dist(0,0,centerX,centerY);
  background(0);

}

function draw() {
  rotateX(PI/5);
  rotateZ(PI/4);
  for(let i = -centerX;i< centerX;i+=3*r){
    for(let j = -centerY;j< centerY;j+=3*r){
      push();
      offset = map(d , 0,maxD,2,-2)*1.5;
      let a = angle + offset;
      let z = map(sin(a) , -1 , 1 , 0,r)
      translate(i-200,j-200);
      sphere(r * z,6,4);
      pop();
    }
     offset +=0.01;
  }
   angle +=0.01;

}
