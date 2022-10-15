window.addEventListener("load", function(event) {
    canvas = document.getElementById("canvas");
    context = canvas.getContext("2d");
    var res = document.cookie.split('=').pop();
    
    
    var img=document.getElementById('previev');
    var cape = document.getElementById('cape');
    var capewidth = cape.naturalWidth;
    var capeturn = false;
    if(capewidth != 0)
    {
        capeturn = true;
        var cratio = capewidth/64;
    }

    var width = img.naturalWidth;
    var height = img.naturalHeight;
    var ratio = width/64;
    canvas.width = width;
        canvas.height = height;
    context.drawImage(img, 0,0);
    var color = context.getImageData(55*ratio, 21*ratio,1,1).data;
    console.log(color);
    if(color[0]==0 && color[1]==0 && color[2]==0 && color[3]==0){var mode='slim';}
    else{var mode='classic';}
    
    
    
    
    
    
    context.clearRect(0, 0, width, height);
    
    if (width == height)
    {
        canvas.width = width/4;
        canvas.height = height/2;
    }
    else if(width/2 == height)
    {
        canvas.width = width/4;
        canvas.height = height;
    }
    else {alert('err');}
    
    
    function flip(context, canvas, sx,sy,swx,swy,dx,dy,dwx,dwy)
    {
        context.setTransform(-1, 0, 0, 1, 0, 0);
        context.drawImage(canvas, sx*ratio, sy*ratio,swx*ratio,swy*ratio, dx*ratio, dy*ratio, dwx*ratio, dwy*ratio);
        context.setTransform(1, 0, 0, 1, 0, 0);
    }
    
    
        
      front();
    canvas.addEventListener('mouseenter', (e) => {back();});
    canvas.addEventListener('mouseleave', (e) => {front();});
      
    
    
    
    function front()
    {
        context.clearRect(0, 0, width, height);
    if(width == height)
    {
        if(mode=='classic')
        {
            //голова
            context.drawImage(img, 8*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
            //тело
            context.drawImage(img, 20*ratio, 20*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
            //правая рука
            context.drawImage(img, 44*ratio, 20*ratio,4*ratio,12*ratio, 0*ratio, 8*ratio, 4*ratio, 12*ratio);
            //левая рука
            context.drawImage(img, 36*ratio, 52*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 4*ratio, 12*ratio);
            //правая нога
            context.drawImage(img, 4*ratio, 20*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
            //левая нога
            context.drawImage(img, 20*ratio, 52*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
    
            /*Второй слой*/
    
            //голова
            context.drawImage(img, 40*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
            //тело
            context.drawImage(img, 20*ratio, 36*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
            //правая рука
            context.drawImage(img, 44*ratio, 36*ratio,4*ratio,12*ratio, 0*ratio, 8*ratio, 4*ratio, 12*ratio);
            //левая рука
            context.drawImage(img, 52*ratio, 52*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 4*ratio, 12*ratio);
            //правая нога
            context.drawImage(img, 4*ratio, 36*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
            //левая нога
            context.drawImage(img, 4*ratio, 52*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
        }
        else
        {
            //голова
            context.drawImage(img, 8*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
            //тело
            context.drawImage(img, 20*ratio, 20*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
            //правая рука
            context.drawImage(img, 44*ratio, 20*ratio,4*ratio,12*ratio, 1*ratio, 8*ratio, 3*ratio, 12*ratio);
            //левая рука
            context.drawImage(img, 36*ratio, 52*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 3*ratio, 12*ratio);
            //правая нога
            context.drawImage(img, 4*ratio, 20*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
            //левая нога
            context.drawImage(img, 20*ratio, 52*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
    
            /*Второй слой*/
    
            //голова
            context.drawImage(img, 40*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
            //тело
            context.drawImage(img, 20*ratio, 36*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
            //правая рука
            context.drawImage(img, 44*ratio, 36*ratio,4*ratio,12*ratio, 1*ratio, 8*ratio, 3*ratio, 12*ratio);
            //левая рука
            context.drawImage(img, 52*ratio, 52*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 3*ratio, 12*ratio);
            //правая нога
            context.drawImage(img, 4*ratio, 36*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
            //левая нога
            context.drawImage(img, 4*ratio, 52*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
        }
    }
    else if(width/2 == height)
    {
        
            //голова
            context.drawImage(img, 8*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
            //тело
            context.drawImage(img, 20*ratio, 20*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
            //правая рука
            context.drawImage(img, 44*ratio, 20*ratio,4*ratio,12*ratio, 0*ratio, 8*ratio, 4*ratio, 12*ratio);
            //левая рука
            flip(context, canvas, 0, 8, 4, 12, -16, 8, 4, 12)
            //правая нога
            context.drawImage(img, 4*ratio, 20*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
            //левая нога
            flip(context, canvas, 4, 20, 4, 12, -12, 20, 4, 12)
            
            /*Второй слой*/
            //голова
            context.drawImage(img, 40*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
            
    }
    else {alert('err');}
    if(capeturn == true)
    {
    //Плащ
    context.drawImage(cape, 13*cratio, 14*cratio, 1*cratio, 3*cratio, 3*cratio, 20*cratio, 1*cratio, 3*cratio);
    //Плащ
    context.drawImage(cape, 20*cratio, 14*cratio, 1*cratio, 3*cratio, 12*cratio, 20*cratio, 1*cratio, 3*cratio);
    }
    
    }
    
    
    function back()
    {
        context.clearRect(0, 0, width, height);
        if(width == height)
        {
            if(mode=='classic')
            {
                //голова
                context.drawImage(img, 24*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
                //тело
                context.drawImage(img, 32*ratio, 20*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
                //правая рука
                context.drawImage(img, 44*ratio, 52*ratio,4*ratio,12*ratio, 0*ratio, 8*ratio, 4*ratio, 12*ratio);
                //левая рука
                context.drawImage(img, 52*ratio, 20*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 4*ratio, 12*ratio);
                //правая нога
                context.drawImage(img, 28*ratio, 52*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
                //левая нога
                context.drawImage(img, 12*ratio, 20*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
        
                /*Второй слой*/
        
                //голова
                context.drawImage(img, 56*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
                //тело
                context.drawImage(img, 32*ratio, 36*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
                //правая рука
                context.drawImage(img, 60*ratio, 52*ratio,4*ratio,12*ratio, 0*ratio, 8*ratio, 4*ratio, 12*ratio);
                //левая рука
                context.drawImage(img, 52*ratio, 36*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 4*ratio, 12*ratio);
                //правая нога
                context.drawImage(img, 12*ratio, 52*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
                //левая нога
                context.drawImage(img, 12*ratio, 36*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
                
            }
            else
            {
                //голова
                context.drawImage(img, 24*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
                //тело
                context.drawImage(img, 32*ratio, 20*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
                //правая рука
                context.drawImage(img, 44*ratio, 52*ratio,4*ratio,12*ratio, 1*ratio, 8*ratio, 3*ratio, 12*ratio);
                //левая рука
                context.drawImage(img, 52*ratio, 20*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 3*ratio, 12*ratio);
                //правая нога
                context.drawImage(img, 28*ratio, 52*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
                //левая нога
                context.drawImage(img, 12*ratio, 20*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
        
                /*Второй слой*/
        
                //голова
                context.drawImage(img, 56*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
                //тело
                context.drawImage(img, 32*ratio, 36*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
                //правая рука
                context.drawImage(img, 60*ratio, 52*ratio,4*ratio,12*ratio, 1*ratio, 8*ratio, 3*ratio, 12*ratio);
                //левая рука
                context.drawImage(img, 52*ratio, 36*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 3*ratio, 12*ratio);
                //правая нога
                context.drawImage(img, 12*ratio, 52*ratio,4*ratio,12*ratio, 4*ratio, 20*ratio, 4*ratio, 12*ratio);
                //левая нога
                context.drawImage(img, 12*ratio, 36*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
            }
        }
        else if(width/2 == height)
        {
            
                //голова
                context.drawImage(img, 24*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
                //тело
                context.drawImage(img, 32*ratio, 20*ratio,8*ratio,12*ratio, 4*ratio, 8*ratio, 8*ratio, 12*ratio);
                //левая рука
                context.drawImage(img, 52*ratio, 20*ratio,4*ratio,12*ratio, 12*ratio, 8*ratio, 4*ratio, 12*ratio);
                //правая рука
                flip(context, canvas, 12, 8, 4, 12, -4, 8, 4, 12)
                
             
                //левая нога
                context.drawImage(img, 12*ratio, 20*ratio,4*ratio,12*ratio, 8*ratio, 20*ratio, 4*ratio, 12*ratio);
                //левая нога
                flip(context, canvas, 8, 20, 4, 12, -8, 20, 4, 12)
                
                /*Второй слой*/
                //голова
                context.drawImage(img, 56*ratio, 8*ratio,8*ratio,8*ratio, 4*ratio, 0*ratio, 8*ratio, 8*ratio);
                
        }
        else {alert('err');}
        
        if(capeturn == true)
        {
        //Плащ
        context.drawImage(cape, 1*cratio, 1*cratio, 10*cratio, 15*cratio, 3*ratio, 8*ratio, 10*ratio, 15*ratio);
        }
        }
    
        });