function titre_appear(id){
   
//     document.getElementById('titreapparition'+id).style.opacity='1';
 document.getElementById('button'+id).style.opacity='1';
    
   
//     document.getElementById('titre1').style.opacity='0';
//     document.getElementById('titre2').style.opacity='0';

}
 
function titre_desappear(id){
    
//document.getElementById('titreapparition'+id).style.opacity='0';
document.getElementById('button'+id).style.opacity='0';
   
//     document.getElementById('titre1').style.opacity='1';
//     document.getElementById('titres').style.opacity='1';
//     document.getElementById('titre2').style.opacity='1';
}



 function effect2(){
   
setTimeout(function(){
        document.getElementById('cadre1').style.opacity='1';
        document.getElementById('cadre1').style.transform='translate(0px,0px)'; 
    },600);
      
    setTimeout(function(){
         document.getElementById('cadre2').style.opacity='1';
        document.getElementById('cadre2').style.transform='translate(0px,0px)'; 
    },1400);

    setTimeout(function(){
         document.getElementById('cadre3').style.opacity='1';
        document.getElementById('cadre3').style.transform='translate(0px,0px)'; 
    },2200);

     setTimeout(function(){
        document.getElementById('cadre4').style.opacity='1';
        document.getElementById('cadre4').style.transform='translate(0px,0px)'; 
    },3000);
      
    setTimeout(function(){
         document.getElementById('cadre5').style.opacity='1';
        document.getElementById('cadre5').style.transform='translate(0px,0px)'; 
    },3800);

    setTimeout(function(){
         document.getElementById('cadre6').style.opacity='1';
        document.getElementById('cadre6').style.transform='translate(0px,0px)'; 
    },4600);
    
   }

function effect3(){
  document.getElementById('cadre1').style.transition='all 0s';
   document.getElementById('cadre1').style.transition='opacity 1s';
     document.getElementById('cadre1').style.opacity='1';
    document.getElementById('cadre1').style.transform='translate(0px,0px)';

      document.getElementById('cadre2').style.transition='all 0s';
   document.getElementById('cadre2').style.transition='opacity 1s';
    document.getElementById('cadre2').style.opacity='1';
    document.getElementById('cadre2').style.transform='translate(0px,0px)';

      document.getElementById('cadre3').style.transition='all 0s';
   document.getElementById('cadre3').style.transition='opacity 1s'; 
    document.getElementById('cadre3').style.opacity='1';
    document.getElementById('cadre3').style.transform='translate(0px,0px)';

      document.getElementById('cadre4').style.transition='all 0s';
   document.getElementById('cadre4').style.transition='opacity 1s'; 
    document.getElementById('cadre4').style.opacity='1';
    document.getElementById('cadre4').style.transform='translate(0px,0px)';

      document.getElementById('cadre5').style.transition='all 0s';
   document.getElementById('cadre5').style.transition='opacity 1s'; 
     document.getElementById('cadre5').style.opacity='1';
    document.getElementById('cadre5').style.transform='translate(0px,0px)';

      document.getElementById('cadre6').style.transition='all 0s';
   document.getElementById('cadre6').style.transition='opacity 1s'; 
    document.getElementById('cadre6').style.opacity='1';
    document.getElementById('cadre6').style.transform='translate(0px,0px)';

      



}




