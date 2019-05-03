// function when window is open
    window.onload = function() {
                var myCanvas = document.getElementById("myCanvas");
                var colour = $('#selectColor option:selected').val();
                if(myCanvas){
                                var isDown      = false;
                                var context = myCanvas.getContext("2d");
                                var canvasX, canvasY;
                                // Line width of pen
                                context.lineWidth = 5;
                                
                                // Drawing function - when the user clicks
                                $(myCanvas)
                                .mousedown(function(e){
                                                isDown = true;
                                                context.beginPath();
                                                canvasX = e.pageX - myCanvas.offsetLeft;
                                                canvasY = e.pageY - myCanvas.offsetTop;
                                                context.moveTo(canvasX, canvasY);
                                })
                                .mousemove(function(e){
                                                if(isDown != false) {
                                                        canvasX = e.pageX - myCanvas.offsetLeft;
                                                        canvasY = e.pageY - myCanvas.offsetTop;
                                                        context.lineTo(canvasX, canvasY);
                                                        // Stroke Style (colour)
                                                        context.strokeStyle = colour;
                                                        context.stroke();
                                                }
                                })
                                .mouseup(function(e){
                                                isDown = false;
                                                context.closePath();
                                });
                }
                 // Selecting colour option 
                $('#selectColor').change(function () {
                                colour = $('#selectColor option:selected').val();
                });
                 
        };
