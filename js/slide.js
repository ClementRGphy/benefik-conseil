function titre_appear(id){
   
    document.getElementById('titreapparition'+id).style.opacity='1';
    document.getElementById('button'+id).style.opacity='1';
    document.getElementById('titres').style.opacity='0';
    document.getElementById('titreapparition'+id).style.transform='translate(0px, 0px)';
    document.getElementById('titre1').style.opacity='0';
    document.getElementById('titre2').style.opacity='0';

}
 
function titre_desappear(id){
    
    document.getElementById('titreapparition'+id).style.opacity='0';
    document.getElementById('button'+id).style.opacity='0';
    document.getElementById('titreapparition'+id).style.transform='translate(0px, -100%)';
    document.getElementById('titre1').style.opacity='1';
    document.getElementById('titres').style.opacity='1';
    document.getElementById('titre2').style.opacity='1';
}


function effect1(){
    
    document.getElementById('article2').style.opacity='1';
   document.getElementById('article2').style.transform='translate(0px, 0px)';
}