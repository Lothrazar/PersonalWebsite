  
window.Painter = {};
console.log('window.Painter ');
Painter.init = function()
{
       
   //TODO: clean these up; module pattern
     clickX = new Array();
  clickY = new Array();
  clickDrag = new Array();
 
function addClick(x, y, dragging)
{
  clickX.push(x);
  clickY.push(y);
  clickDrag.push(dragging);
}
    
    
    
    var CanvasDiv = document.getElementById('canvasCtr');
    console.log( Painter.CanvasDiv );
    canvas = document.createElement('canvas');
    canvas.setAttribute('width', 500);
    canvas.setAttribute('height', 500);
    canvas.setAttribute('id', 'canvas');
    CanvasDiv.appendChild(canvas);
    if(typeof G_vmlCanvasManager !== 'undefined') 
    {
            canvas = G_vmlCanvasManager.initElement(canvas);
    }
    Painter.CanvasContext = canvas.getContext("2d");  
    Painter.CanvasDiv = $('#canvas');
    Painter.IsPainting = false;
    //// add events
     
    Painter.CanvasDiv.mousedown(function(e)
   {  
       Painter.IsPainting = true;
       addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop);
       Painter.RePaint();
   });

    Painter.CanvasDiv.mousemove(function(e)
   {
       if(Painter.IsPainting)
       {
         addClick(e.pageX - this.offsetLeft, e.pageY - this.offsetTop, true);
         Painter.RePaint();
       }
   });

   Painter.CanvasDiv.mouseup(function(e)
   {
     Painter.IsPainting = false;
   });
   Painter.CanvasDiv.mouseleave(function(e)
   {
     Painter.IsPainting = false;
   });

   //end of events
   
   
   
   

};


Painter.RePaint = function()
{
    var context = Painter.CanvasContext;
  context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas

  context.strokeStyle = "#df4b26";
  context.lineJoin = "round";
  context.lineWidth = 5;

  for(var i=0; i < clickX.length; i++) 
  {		
    context.beginPath();
    if(clickDrag[i] && i){
      context.moveTo(clickX[i-1], clickY[i-1]);
     }else{
       context.moveTo(clickX[i]-1, clickY[i]);
     }
     context.lineTo(clickX[i], clickY[i]);
     context.closePath();
     context.stroke();
  }
};
