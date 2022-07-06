var idcourant="none";// j'initilalise l'id sélectionner 
var imgcourant="none";// j'initialise l'image contenu dna sla case sélectionner


// Déplacement du cavalier

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

// Déplacement de la Tour

function moveTower(id) {
    if(id = k-10*n)
    return listmoveCavs;
}

// TODO : déplacement de la reine, du roi,du fou et des pions.



function deplacer(id1){
        var countdep = document.getElementById(id1).childElementCount;
        currentColor = document.getElementById(id1).style.backgroundColor;

        document.getElementById(id1).style.backgroundColor="#7CBCF5";
  
        if(imgcourant=="none") {
            
// Je récupère l'id  et l'image contenu dans la case cliquée 
            
            idcourant = id1;
            listimg = document.getElementById(id1).getElementsByTagName('img');
            imgcourant = listimg[0];
            imgcourant.className = listimg[0].className;       
        }
        else {
            // j'ai desormais un id de départ et une image à ajouter je fais donc la fonction ajouter
            ajouter(id1);
            
        }

}


function ajouter(id2) {
    countarr = document.getElementById(id2).childElementCount;// Je compte les élément de la case d'arrivée 
    if(countarr==0) { 
        // Si il n'ya aucun élément je supprime l'image de l'id de départ et je l'ajoute dans l'id d'arrivée
        
        document.getElementById(idcourant).firstChild.remove();
        document.getElementById(id2).appendChild(imgcourant);
    }
    else {
        // Si la case d'arrivée contient deja un pion je regarde si il est de la même couleur que celui de la cae d'arrivée
        // Si ils sont énemies la prise est possible
        if(document.getElementById(id2).firstChild.className != 
        document.getElementById(idcourant).firstChild.className){
            document.getElementById(idcourant).firstChild.remove();
            document.getElementById(id2).firstChild.remove();
            document.getElementById(id2).appendChild(imgcourant);
        }
        else {
            // Si ils sont alliés la prise est impossible
            alert("impossible");
        }
    }
    document.getElementById(idcourant).style.backgroundColor=currentColor;// ANimation de couleur 
    document.getElementById(id2).style.backgroundColor=currentColor;
    imgcourant ="none";// je remets l'image à ajouter a none 
    idcourant="none";// et l'idée a ajouter à none et je reste à l'écoute d'un click de mon utilisateur.
}


    
