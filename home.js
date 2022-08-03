var idcourant="none";
var imgcourant="none";
var playerTurn = 1;


// Déplacement du pion à finir

function movePawn(idDepart,idArrive) {
    numDep = parseInt(idDepart, 10);
    numArr = parseInt(idArrive, 10);

    
}

// Déplacement du cavalier

function moveCavs(idDepart,idArrive) {
    numDep = parseInt(idDepart, 10);
    numArr = parseInt(idArrive, 10);
    var listmoveCavs = [numDep-12,numDep-21,numDep-19,numDep-8,
        numDep+12,numDep+21,numDep+19,numDep+8];
    if (listmoveCavs.includes(numArr) == true) {
        return true;
    }
    else{
        return false;
    }
}
// Déplacement de la tour

function moveTower(idDepart,idArrive) {
    numDep = parseInt(idDepart, 10);
    numArr = parseInt(idArrive, 10);
    list = [1, 2, 3, 4, 5, 6, 7]
    pas = Math.abs(numArr-numDep);
    if(pas%10 == 0 || list.includes(pas)) {// déplacements verticaux et horizontaux
        return true;
    }
    else {
        return false;
    }

}
// Déplacement du fou

function moveFou(idDepart,idArrive) {
    numDep = parseInt(idDepart, 10);
    numArr = parseInt(idArrive, 10);
    pas = Math.abs(numArr-numDep);
    if(pas%11 == 0 || pas%9 == 0) {// déplacements en diagonales
        return true;
    }
    else {
        return false;
    }

}
// déplacement  de la rein equi combine fou et tour

function moveQueen(idDepart,idArrive) {
    if(moveTower(idDepart,idArrive) || moveFou(idDepart,idArrive)) {
        return true;
    }
    else{
        return false;
    }
}



function deplacer(id1){

        currentColor = document.getElementById(id1).style.backgroundColor;

        document.getElementById(id1).style.backgroundColor="#7CBCF5";
  
        if(imgcourant=="none") {
            // si il n'ya rien à déplacer je stock les infos du pions à déplacer
            idcourant = id1;
            listimg = document.getElementById(id1).getElementsByTagName('img');
            imgcourant = listimg[0];
            imgcourant.className = listimg[0].className; 
            imgcourant.setAttribute('name', listimg[0].getAttribute('name') );
            
        }
        else {
            // Dans ce cas jai un pion à deplacer dans ma variable je lance la fonvtion qui va l'ajouter
            // à la nouvelle case

            ajouter(id1);
            
        }

}


function ajouter(id2) {

    countarr = document.getElementById(id2).childElementCount;
    // je récupère le type de pion
    var pion = document.getElementById(idcourant).firstChild.getAttribute('name');

    if(countarr==0) { // si il n'ya pas de pion sur la case d'arrive je déplace normalement mon pion 
        switch(pion) {
            case 'cava' :
                if(moveCavs(idcourant, id2)==true) {
                    document.getElementById(idcourant).firstChild.remove();
                    document.getElementById(id2).appendChild(imgcourant);
                }
                break;
 
            case 'tower' :
                if(moveTower(idcourant, id2)) {
                    document.getElementById(idcourant).firstChild.remove();
                    document.getElementById(id2).appendChild(imgcourant); 
                }
                break;

            case 'king' :
                document.getElementById(idcourant).firstChild.remove();
                document.getElementById(id2).appendChild(imgcourant); 
            case 'queen':
                if(moveQueen(idcourant, id2)) {
                    document.getElementById(idcourant).firstChild.remove();
                    document.getElementById(id2).appendChild(imgcourant); 
                }
                break;
                
            case 'fou' :
                if(moveFou(idcourant, id2)) {
                    document.getElementById(idcourant).firstChild.remove();
                    document.getElementById(id2).appendChild(imgcourant); 
                }
                break;
            case 'pawn' :
                document.getElementById(idcourant).firstChild.remove();
                document.getElementById(id2).appendChild(imgcourant); 
        }
    }
    else {
        // Dans ce cas la case contient déja un pion

        // Je vérifie la couleur pour déterminer si c'est un allié ou si il y'a prise
        
        if((document.getElementById(id2).firstChild.className != 
        document.getElementById(idcourant).firstChild.className)){
            switch(pion) {
                case 'cava' :
                    if(moveCavs(idcourant, id2)==true) {
                        document.getElementById(idcourant).firstChild.remove();
                        document.getElementById(id2).firstChild.remove();
                        document.getElementById(id2).appendChild(imgcourant);
                    }
                    break;
     
                case 'tower' :
                    if(moveTower(idcourant, id2)) {
                        document.getElementById(idcourant).firstChild.remove();
                        document.getElementById(id2).firstChild.remove();
                        document.getElementById(id2).appendChild(imgcourant);
                    }
                    break;
    
                case 'king' :
                    document.getElementById(idcourant).firstChild.remove();
                    document.getElementById(id2).appendChild(imgcourant); 
                case 'queen':
                    if(moveQueen(idcourant, id2)) {
                        document.getElementById(idcourant).firstChild.remove();
                        document.getElementById(id2).firstChild.remove();
                        document.getElementById(id2).appendChild(imgcourant);
                    }
                    break;

                case 'fou' :
                    if(moveFou(idcourant, id2)) {
                        document.getElementById(idcourant).firstChild.remove();
                        document.getElementById(id2).firstChild.remove();
                        document.getElementById(id2).appendChild(imgcourant);
                    }
                    break;
                case 'pawn' :
                    document.getElementById(idcourant).firstChild.remove();
                    document.getElementById(id2).appendChild(imgcourant); 
            }

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






    