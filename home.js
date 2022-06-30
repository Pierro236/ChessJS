var idcourant="none";
var imgcourant="none";



function moveCavs(idDepart,idArrive) {
    numDep = parseInt(idDepart);
    numArr = parseInt(idArrive);
    var listmoveCavs = [numDep-12,numDep-21,numDep-19,numDep-8,
        numDep+12,numDep+21,numDep+19,numDep+8];
    for(var i=0; i<listmoveCavs.length; i++) {
        if(numArr==i) {
            return true;
        }
        else {return false;}
    }
}

function moveTower(id) {
    if(id = k-10*n)
    return listmoveCavs;
}


function deplacer(id1){
        var countdep = document.getElementById(id1).childElementCount;
        currentColor = document.getElementById(id1).style.backgroundColor;

        document.getElementById(id1).style.backgroundColor="#7CBCF5";
  
        if(imgcourant=="none") {

            idcourant = id1;
            listimg = document.getElementById(id1).getElementsByTagName('img');
            imgcourant = listimg[0];
            imgcourant.className = listimg[0].className;       
        }
        else {
            ajouter(id1);
            
        }

}


function ajouter(id2) {
    countarr = document.getElementById(id2).childElementCount;
    if(countarr==0) {
        // if(document.getElementById(idcourant).firstChild.src=="Cn.png" && 
        // moveCavs(idcourant,id2)==true) {
        //     document.getElementById(idcourant).firstChild.remove();
        //     document.getElementById(id2).appendChild(imgcourant); 
        // }
        // else{alert("deplacement cavalier impossible");}
        document.getElementById(idcourant).firstChild.remove();
        document.getElementById(id2).appendChild(imgcourant);
    }
    else {
        if(document.getElementById(id2).firstChild.className != 
        document.getElementById(idcourant).firstChild.className){
            document.getElementById(idcourant).firstChild.remove();
            document.getElementById(id2).firstChild.remove();
            document.getElementById(id2).appendChild(imgcourant);
        }
        else {
            alert("impossible");
        }
    }
    document.getElementById(idcourant).style.backgroundColor=currentColor;
    document.getElementById(id2).style.backgroundColor=currentColor;
    imgcourant ="none";
    idcourant="none";
}


    