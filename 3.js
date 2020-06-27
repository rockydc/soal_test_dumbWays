function drawImage(sisi){

    var char="";
    var half = Math.round(sisi/2);
    for (i=1; i<=sisi; i++)
    {   
        if (i==1 || i==sisi) {
            for (j=1; j<=sisi; j++)
            {
                if(j==1 || j==half || j==sisi){
                    char += "*"+" "
                }else{
                    char+="#"+" "
                }
            }

     
        }else if(i==half){
            for(j=1;j<=sisi;j++){
                if (j==half){
                    char+="#"+" "
                }else{
                    char+="*"+" "
                }
            }
        }else{
            for(j=1; j<=sisi;j++){
                if (j!=half){
                    char+="#"+" "
                }else{
                    char+="*"+" "
                }
            }
        }
     
       
        console.log(char );
       
        char="";   
    }
}

drawImage(9);
// console.log("*"+""+"")