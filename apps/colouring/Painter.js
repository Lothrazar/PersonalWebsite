  
window.Painter = {};

Painter.init = function()
{
    Painter.currentColour = "df4b26";
       
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
    
    function startPainting()
    {
        Painter.IsPainting = true;
    }
    
    function stopPainting()
    {
        Painter.IsPainting = false;
    }


    
            //var CanvasDiv = ; 
    canvas = document.createElement('canvas');
  canvas.setAttribute('height',600);  
  canvas.setAttribute('width',900);

    canvas.style.width='900px';    
    canvas.style.height='600px';

    canvas.setAttribute('id', 'canvas');
    document.getElementById('canvasCtr').appendChild(canvas);
    if(typeof G_vmlCanvasManager !== 'undefined') 
    {
        canvas = G_vmlCanvasManager.initElement(canvas);
    }
    Painter.CanvasContext = canvas.getContext("2d");  
    Painter.CanvasDiv = $('#canvas');
    Painter.IsPainting = false;
    
 
    //// add events to start and drag paint
     
    Painter.CanvasDiv.mousedown(function(e)
    {  
        if(!Painter.IsPainting) 
        {
           startPainting();
        }
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

    //add events to halt painting of mouse click ends, or out of bounds
    
    Painter.CanvasDiv.mouseup(function(e)
    {
        stopPainting();
    });
    Painter.CanvasDiv.mouseleave(function(e)
    {
        //todo: on hold painting, so it doesnt stretch across border
        //stopPainting();
    });

    //end of events
   
   
   
   

};


Painter.RePaint = function()
{
    console.log('repaint'+clickX.length);
    var context = Painter.CanvasContext;
  context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas
Painter.currentColour = $('#colPickerMain').val();
console.log($('#colPickerMain'));
  context.strokeStyle = "#" + Painter.currentColour;
  context.lineJoin = "round";//TODO: lookup docs for this
  context.lineWidth = 99;
 
  for(var i = 0; i < clickX.length; i++) 
  {		
    context.beginPath();
    if(clickDrag[i] && i)
    {
      context.moveTo(clickX[i-1], clickY[i-1]);
    }
    else
    {
       context.moveTo(clickX[i]-1, clickY[i]);
    }
    context.lineTo(clickX[i], clickY[i]);
    context.closePath();
    context.stroke();
  }
};
