<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Echecs</title>
    <script src="home.js" defer ></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    
    // j'initialise le plateau en plaçant les pions par défaut comme dans les régles 
    
    <div id="plateau">
    <table cellspacing = "0" cellpadding="0">
    <tr>
        <td class="blanc"><div onclick="deplacer(this.id)" id="21"><img class="black" src="Tn.png"/></div></td>// classe black pour les pions noirs 
        <td class="marron"><div onclick="deplacer(this.id)" id="22"><img class="black" src="Cn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="23"><img class="black" src="Fn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="24"><img class="black" src="Dn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="25"><img class="black" src="Rn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="26"><img class="black" src="Fn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="27"><img class="black" src="Cn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="28"><img class="black" src="Tn.png"/></div></td>
    </tr>
    <tr>
        <td class="marron"><div onclick="deplacer(this.id)" id="31"><img class="black" src="Pn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="32"><img class="black" src="Pn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="33"><img class="black" src="Pn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="34"><img class="black" src="Pn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="35"><img class="black" src="Pn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="36"><img class="black" src="Pn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="37"><img class="black" src="Pn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="38"><img class="black" src="Pn.png"/></div></td>
    </tr>
    <tr>
        <td class="blanc"><div onclick="deplacer(this.id)" id="41"></div></td>
        <td class="marron" ><div onclick="deplacer(this.id)" id="42"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="43"></div></td>
        <td class="marron" ><div onclick="deplacer(this.id)" id="44"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="45"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="46"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="47"></div></td>
        <td class="marron" ><div onclick="deplacer(this.id)" id="48"></div></td>
    </tr>
    <tr>
        <td class="marron"><div onclick="deplacer(this.id)" id="51"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="52"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="53"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="54"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="55"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="56"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="57"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="58"></div></td>
    </tr>
    <tr>
        <td class="blanc"><div onclick="deplacer(this.id)" id="61"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="62"></div></td>
        <td class="blanc" ><div onclick="deplacer(this.id)" id="63"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="64"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="65"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="66"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="67"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="68"></div></td>
    </tr>
    <tr>
        <td class="marron"><div onclick="deplacer(this.id)" id="71"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="72"></div></td>
        <td class="marron" ><div onclick="deplacer(this.id)" id="73"></div></td>
        <td class="blanc" ><div onclick="deplacer(this.id)" id="74"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="75"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="76"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="77"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="78"></div></td>
    </tr>
    <tr>
        <td class="blanc"><div onclick="deplacer(this.id)" id="81"><img class="w" src="Pb.png"/></div></td> // classe w pour les pions whites
        <td class="marron"><div onclick="deplacer(this.id)" id="82"><img class="w" src="Pb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="83"><img class="w"  src="Pb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="84"><img class="w"  src="Pb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="85"><img class="w"  src="Pb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="86"><img class="w"  src="Pb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="87"><img class="w"  src="Pb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="88"><img class="w"  src="Pb.png"/></div></td>
    </tr>
    <tr>
        <td class="marron"><div onclick="deplacer(this.id)" id="91"><img class="w"  src="Tb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="92"><img class="w"  src="Cb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="93"><img class="w"  src="Fb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="94"><img class="w"  src="Db.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="95"><img class="w"  src="Rb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="96"><img class="w"  src="Fb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="97"><img class="w"  src="Cb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="98"><img class="w"  src="Tb.png"/></div></td>
    </tr>

</table>
    </div>
    
</body>

  
</html>
