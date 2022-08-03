<!DOCTYPE html lang="fr">
<html>

<head>
    <meta charset="utf-8" />
    <title>Echecs</title>
    <script src="home.js" defer ></script>
    <script src="tour.js" defer></script>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div id="plateau">
    <table cellspacing = "0" cellpadding="0">
    <tr>
        <td class="blanc"><div onclick="deplacer(this.id)" id="21" class="cell"><img class="black" name="tower" src="Tn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="22" class="cell"><img class="black" name="cava" src="Cn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="23" class="cell"><img class="black" name="fou" src="Fn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="24" class="cell"><img class="black" name="queen" src="Dn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="25" class="cell"><img class="black" src="Rn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="26" class="cell"><img class="black" name="fou" src="Fn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="27" class="cell"><img class="black" name="cava" src="Cn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="28" class="cell"><img class="black" name="tower" src="Tn.png"/></div></td>
    </tr>
    <tr>
        <td class="marron"><div onclick="deplacer(this.id)" id="31" class="cell"><img class="black" src="Pn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="32" class="cell"><img class="black" src="Pn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="33" class="cell"><img class="black" src="Pn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="34" class="cell"><img class="black" src="Pn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="35" class="cell"><img class="black" src="Pn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="36" class="cell"><img class="black" src="Pn.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="37" class="cell"><img class="black" src="Pn.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="38" class="cell"><img class="black" src="Pn.png"/></div></td>
    </tr>
    <tr>
        <td class="blanc"><div onclick="deplacer(this.id)" id="41" class="cell"></div></td>
        <td class="marron" ><div onclick="deplacer(this.id)" id="42" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="43" class="cell"></div></td>
        <td class="marron" ><div onclick="deplacer(this.id)" id="44" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="45" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="46" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="47" class="cell"></div></td>
        <td class="marron" ><div onclick="deplacer(this.id)" id="48" class="cell"></div></td>
    </tr>
    <tr>
        <td class="marron"><div onclick="deplacer(this.id)" id="51" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="52" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="53" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="54" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="55" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="56" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="57" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="58" class="cell"></div></td>
    </tr>
    <tr>
        <td class="blanc"><div onclick="deplacer(this.id)" id="61" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="62" class="cell"></div></td>
        <td class="blanc" ><div onclick="deplacer(this.id)" id="63" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="64" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="65" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="66" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="67" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="68" class="cell"></div></td>
    </tr>
    <tr>
        <td class="marron"><div onclick="deplacer(this.id)" id="71" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="72" class="cell"></div></td>
        <td class="marron" ><div onclick="deplacer(this.id)" id="73" class="cell"></div></td>
        <td class="blanc" ><div onclick="deplacer(this.id)" id="74" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="75" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="76" class="cell"></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="77" class="cell"></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="78" class="cell"></div></td>
    </tr>
    <tr>
        <td class="blanc"><div onclick="deplacer(this.id)" id="81" class="cell"><img class="w" src="Pb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="82" class="cell"><img class="w" src="Pb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="83" class="cell"><img class="w"  src="Pb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="84" class="cell"><img class="w"  src="Pb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="85" class="cell"><img class="w"  src="Pb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="86" class="cell"><img class="w"  src="Pb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="87" class="cell"><img class="w"  src="Pb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="88" class="cell"><img class="w"  src="Pb.png"/></div></td>
    </tr>
    <tr>
        <td class="marron"><div onclick="deplacer(this.id)" id="91" class="cell"><img class="w" name="tower"  src="Tb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="92" class="cell"><img class="w" name="cava"  src="Cb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="93" class="cell"><img class="w" name="fou"  src="Fb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="94" class="cell"><img class="w" name="queen"  src="Db.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="95" class="cell"><img class="w"  src="Rb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="96" class="cell"><img class="w" name="fou"  src="Fb.png"/></div></td>
        <td class="marron"><div onclick="deplacer(this.id)" id="97" class="cell"><img class="w" name="cava"  src="Cb.png"/></div></td>
        <td class="blanc"><div onclick="deplacer(this.id)" id="98" class="cell"><img class="w" name="tower"  src="Tb.png"/></div></td>
    </tr>

</table>
    </div>
    
</body>

  
</html>