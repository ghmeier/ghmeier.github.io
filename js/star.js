var canvas = document.getElementById('all');
var context = canvas.getContext('2d');
var circles = [];
var pageX,pageY;

init();
run();

function init(){
    window.addEventListener('resize', resizeCanvas, false);
    document.onmousemove = handleMouseMove;
    resizeCanvas();
    makeCircles();
    draw();
}

function run(){
    setInterval(function() {
      moveCircles(pageX,pageY);
      draw();
    }, 1000/30);
}


function resizeCanvas() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
}


function handleMouseMove(event) {
    var dot, eventDoc, doc, body;
    event = event || window.event; // IE-ism

    if (event.pageX == null && event.clientX != null) {
        eventDoc = (event.target && event.target.ownerDocument) || document;
        doc = eventDoc.documentElement;
        body = eventDoc.body;
        event.pageX = event.clientX +
          (doc && doc.scrollLeft || body && body.scrollLeft || 0) -
          (doc && doc.clientLeft || body && body.clientLeft || 0);
        event.pageY = event.clientY +
          (doc && doc.scrollTop  || body && body.scrollTop  || 0) -
          (doc && doc.clientTop  || body && body.clientTop  || 0 );
    }
    pageX = event.pageX;
    pageY = event.pageY;

}

function makeCircles(){
    var max = 1000;
    var rad = 2;

    for (i=0;i<max;i++){
        var cur = {};
        cur.x = Math.floor(Math.random()*(canvas.width+2*rad) - rad);
        cur.y = Math.floor(Math.random()*(canvas.height+2*rad) - rad);
        cur.startX = cur.x;
        cur.startY = cur.y;
        cur.r = rad+Math.floor(Math.random()*1.5-1);
        if (collided(cur)){
            i--;
        }else{
          circles.push(cur);
        }
    }
}

function moveCircles(x,y){
    for (i=0;i<circles.length;i++){
        var dist = distance (x,y,circles[i].x,circles[i].y);

                if (Math.random() > .9){
                        circles[i].r+=.5;
                        if (circles[i].r >= 2){
                                circles[i].r = 1;
                        }
                }

        if (dist < canvas.width){
            var potX = (x-circles[i].x)/(dist);
            var potY = (y-circles[i].y)/(dist);
            var moveable = !collided(circles[i],potX,potY);

            if (moveable){
                circles[i].x += potX;
                circles[i].y += potY;
            }
        }//else{
            var backD = distance(circles[i].startX,circles[i].startY,circles[i].x,circles[i].y);
            circles[i].x += (circles[i].startX-circles[i].x)/(backD+1);
            circles[i].y += (circles[i].startY-circles[i].y)/(backD+1);
        //}
    }
}

function collided(c1,x,y){
    if (circles.length == 0){
        return false;
    }

    for (j=0;j<circles.length;j++){

        if (circles[j]!=c1 && distance(c1.x+x,c1.y+y,circles[j].x,circles[j].y) <= c1.r + circles[j].r){
            return true;
        }
    }
    return false;
}

function distance(x1,y1,x2,y2){
    return Math.sqrt((x1-x2)*(x1-x2) + (y1-y2)*(y1-y2));
}

function draw(){
    context.clearRect(0, 0, canvas.width, canvas.height);

    for (i=0;i<circles.length;i++){
        var cur = circles[i];

        var gradient=context.createRadialGradient(cur.x, cur.y, cur.r,cur.x, cur.y, cur.r+10);
        gradient.addColorStop("0","black");
        gradient.addColorStop("1.0","white");

// Fill with gradient
        context.strokeStyle=gradient;
        context.beginPath();
        context.arc(cur.x, cur.y, cur.r, 0, 2*Math.PI);
        context.stroke();

        context.fillStyle = "#ffffff"
        context.globalAlpha = 0.5;
        context.beginPath();
        context.arc(cur.x, cur.y, cur.r, 0, 2*Math.PI);
        context.fill();
    }
}