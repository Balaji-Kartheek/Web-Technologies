window.addEventListener('load', () =>{
    const canvas = document.querySelector("#canvas");
    const ctx = canvas.getContext("2d")
    

    //resizing

    canvas.height = window.innerHeight;
    canvas.width = window.innerWidth;

    //positioning
    //ctx.strokeRect = "red";
    //ctx.strokeRect(50,50,200,200);


    ctx.beginPath();
    ctx.moveTo(100,100);
    ctx.lineTo(200,100);
    ctx.lineTo(200,150);
    ctx.closePath();
    ctx.stroke();

    //variables 
    let painting = false;

    function startPosition(){
        painting = true;
    }

    function finishPosition(){
        painting = false;
        ctx.beginPath();
    }

    function draw(e){
         if (!painting) return;
         ctx.lineWith = 10;
         ctx.lineCap = "round";
         ctx.strokeStyle = "red";

         ctx.lineTo(e.clientX,e.clientY);
         ctx.stroke();

         ctx.beginPath();
         ctx.moveTo(e.clientX,e.clientY);
    }

    //Event Listner's
    canvas.addEventListener("mousedown",startPosition);
    canvas.addEventListener("mouseup",finishPosition);
    canvas.addEventListener("mousemove",draw);

});