<?php $this->insert('partials/header') ?>




<form action="/domaines/search" method="post">
<?php echo $this->csrf_input();?>  
    <div class="migrid">
	
      <div class="col-sm-3">
        <div class="form-group">
          <select name="domaine" class="form-control" data-style="btn-warning">
		  <option value="0">- domaines -</option>
		  
    <optgroup label="agriculture animaux">
	  <option value="agriculture animaux" class="colored" data-style="btn-warning">iiiii</option>
      <option value="en" class="test" data-thumbnail="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/LetterA.svg/2000px-LetterA.svg.png">English</option>
	  <option value="agriculture (généralités)"> agriculture (généralités) </option>
      <option value="cultures"> cultures </option>
	  <option value="développement agricole"> développement agricole </option>
	  <option value="élevage, aquaculture"> élevage, aquaculture </option>
	  <option value="forêt"> forêt</option>
      <option value="pêche"> pêche</option>
	  <option value="soins aux animaux">soins aux animaux</option>
	</optgroup>
    <optgroup label="armée sécurité">
	  <option value="armée sécurité">- armée sécurité -</option> 
	  <option value="défense publique"> défense publique</option>
      <option value="sécurité, prévention"> sécurité, prévention</option>
    </optgroup>  
	<optgroup label="arts culture artisanat">
      <option value="arts culture artisanat">- arts culture artisanat -</option>
      <option value="activités culturelles">activités culturelles </option>	  
      <option value="artisanat d'art">artisanat d'art</option>
      <option value="arts appliqués">arts appliqués</option>
	  <option value="arts du spectacle"> arts du spectacle</option>
	  <option value="arts graphiques"> arts graphiques</option>
      <option value="arts plastiques">arts plastiques</option>
	  <option value="commerce de l'art"> commerce de l'art</option>
	  <option value="histoire de l'art"> histoire de l'art</option>
	  <option value="arts graphiques"> arts graphiques</option>
      <option value="restauration d'art">restauration d'art</option>
	</optgroup>  
	<optgroup label="banque assurances immobilier">
        <option value="banque assurances immobilier">- banque assurances immobilier -</option>
        <option value="assurances">assurances </option>
        <option value="banque">banque</option>
        <option value="finances">finances</option>
        <option value="immobilier">immobilier</option>
    </optgroup>
	 <optgroup label="commerce marketing vente">
        <option value="commerce marketing vente">- commerce marketing vente -</option>
        <option value="achat, approvisionnement">achat, approvisionnement</option>
        <option value="commerce international">commerce international</option>
        <option value="grande distribution et petits commerces">grande distribution et petits commerces</option>
        <option value="marketing,vente">marketing,vente</option>
    </optgroup>
    <optgroup label="construction architecture travaux publics">
        <option value="construction architecture travaux publics">- construction architecture travaux publics -</option>
        <option value="agencement">agencement</option>
        <option value="ameublement">ameublement</option>
        <option value="bureau d'études BTP">bureau d'études BTP</option>
        <option value="équipement technique">équipement technique</option>
        <option value="finition">finition</option>
		<option value="génie civil">génie civil</option>
        <option value="génie civil, construction (généralités)"> génie civil, construction (généralités) </option>
        <option value="maçonnerie, béton armé">maçonnerie, béton armé</option>
		<option value="finition">finition</option>
		<option value="menuiserie">menuiserie</option>
        <option value="plâtrerie"> plâtrerie</option>
        <option value="travaux publics"> travaux publics</option>
		
    </optgroup>
     <optgroup label="économie droit politique">
        <option value="économie droit politique">- économie droit politique -</option>
        <option value="Paris">Paris</option>
        <option value="SeineEtMarne">Seine-et-Marne</option>
        <option value="Yvelines">Yvelines</option>
        <option value="Essonne">Essonne</option>
        <option value="HautsDeSeine">Hauts-de-Seine</option>
        <option value="SeineSaintDenis">Seine-Saint-Denis</option>
        <option value="ValDeMarne">Val-de-Marne</option>
        <option value="ValDOise">Val-d'Oise</option>
    </optgroup>
	<optgroup label="électricité électronique robotique">
        <option value="électricité électronique robotique">- électricité électronique robotique -</option>
        <option value="Calvados">Calvados</option>
        <option value="Eure">Eure</option>
        <option value="Manche">Manche</option>
        <option value="Orne">Orne</option>
        <option value="SeineMaritime">Seine-Maritime</option>
    </optgroup>
    <optgroup label="environnement énergies propreté">
        <option value="environnement énergies propreté">- environnement énergies propreté -</option>
    </optgroup>
       <optgroup label="gestion des entreprises">
       <option value="gestion des entreprises">- gestion des entreprises -</option>
      
    </optgroup>
    <optgroup label="comptabilité">
       <option value="comptabilité">- comptabilité -</option>
    </optgroup>

    <optgroup label="histoire-géographie">
        <option value="histoire-géographie">- histoire-géographie -</option>
    </optgroup>
    <optgroup label="psychologie">
        <option value="psychologie">- psychologie -</option>
    </optgroup>
    <optgroup label="sociologie">
        <option value="sociologie">- sociologie -</option>
    </optgroup>
    <optgroup label="hôtellerie restauration tourisme">
        <option value="hôtellerie restauration tourisme">- hôtellerie restauration tourisme -</option>
    </optgroup>
    <optgroup label="information-communication">
        <option value="information-communication">- information-communication -</option>
    </optgroup>
    <optgroup label="audiovisuel">
        <option value="audiovisuel">- audiovisuel -</option>
    </optgroup>
    <optgroup label="informatique, internet">
        <option value="informatique, internet">- informatique, internet -</option>
    </optgroup>
    <optgroup label="lettres,langues, enseignement">
        <option value="lettres,langues, enseignement">- lettres,langues, enseignement -</option>
    </optgroup>
	<optgroup label="logistique, transport">
        <option value="logistique, transport">- logistique, transport -</option>
    </optgroup>
	<optgroup label="matières premières fabrication industries">
        <option value="matières premières fabrication industries">- matières premières fabrication industries -</option>
    </optgroup>
	<optgroup label="mécanique">
        <option value="mécanique">- mécanique -</option>
    </optgroup>
	<optgroup label="santé, social, sport">
        <option value="santé, social, sport">- santé, social, sport -</option>
    </optgroup>
	<optgroup label="sciences">
        <option value="sciences">- sciences -</option>
    </optgroup>
  </select>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <select name="niveau" class="form-control">
		  <option value="0">- types de formation -</option>
    <optgroup label="post_college">
	  <option value="CAP">CAP</option>
      <option value="baccalauréat général">Bac</option>
	  <option value="baccalauréat professionnel">Bac pro</option>
	  <option value="baccalauréat technologique">Bac techno</option>
	  <option value="baccalauréat binational"> Bac binational</option>
      <option value="baccalauréat français international">Bac international</option>
	  <option value="brevet de techniciens">Brevet de technicien</option>
	  <option value="brevet des métiers d'art">Brevet des métiers d'art</option>
	  <option value="brevet professionnel"> Brevet professionnel</option>
      <option value="brevet professionnel agricole">Brevet professionnel agricole</option>
	  <option value="CAP agricole">CAP agricole</option>
	  <option value="certificat technique des métiers">certificat technique des métiers</option>
	  <option value="Classe de 1re générale">Classe de 1re générale</option>
	  <option value="classe de 1re technologique"> classe de 1re technologique</option>
      <option value="classe de 2de générale et technologique">classe de 2de générale et technologique</option>
	  <option value="classe de 2de professionnelle">classe de 2de professionnelle</option>
	  <option value="classe de 2de spécifique">classe de 2de spécifique</option>
	  <option value="diplôme d'Etat du travail social">diplôme d'Etat du travail social</option>
	  <option value="diplôme d'Etat en santé"> diplôme d'Etat en santé</option>
      <option value="diplôme professionnel de l'animation et du sport">diplôme professionnel de l'animation et du sport</option>
	  <option value="formation complémentaire d'initiative locale">formation complémentaire d'initiative locale</option>
	  <option value="formation d'école spécialisée">formation d'école spécialisée</option>
	  <option value="formation de fonctionnaires (après concours)"> formation de fonctionnaires (après concours)  </option>
	  <option value="mention complémentaire"> mention complémentaire </option>
      <option value="préparation aux concours de la fonction publique">préparation aux concours de la fonction publique</option>
	  <option value="formation complémentaire d'initiative locale">formation complémentaire d'initiative locale</option>
	  <option value="titre professionnel">titre professionnel</option>
    </optgroup>
    <optgroup label="post_bac">
	  <option value="agrégation">agrégation</option>
      <option value="bachelor universitaire de technologie">BUT</option>
      <option value="brevet de maîtrise">brevet de maîtrise</option>
	  <option value="brevet de technicien supérieur">BTS</option>
      <option value="brevet de technicien supérieur agricole">BTSA</option>
      <option value="brevet technique des métiers supérieur">brevet technique des métiers supérieur</option>
	  <option value="agrégation">agrégation</option>
      <option value="certificat d'aptitude">certificat d'aptitude</option>
      <option value="certificat d'études d'arts plastiques">certificat d'études d'arts plastiques</option>
	  <option value="certificat d'études supérieures d'arts plastiques">certificat d'études supérieures d'arts plastiques</option>
	  <option value="certificat d'études supérieures de chirurgie dentaire">certificat d'études supérieures de chirurgie dentaire</option>
	  <option value="certificat de spécialisation">certificat de spécialisation</option>
      <option value="classe de mise à niveau (accès en STS)">classe de mise à niveau (accès en STS)</option>
      <option value="classe de mise à niveau post bac">classe de mise à niveau post bac</option>
	  <option value="cycle préparatoire commun">cycle préparatoire commun</option>
      <option value="certificat d'études supérieures de chirurgie dentaire">certificat d'études supérieures de chirurgie dentaire</option>
      <option value="certificat d'études d'arts plastiques">certificat d'études d'arts plastiques</option>
    </optgroup>
  </select>
        </div>
      </div>
	  <div class="col-sm-3">
	         <div class="form-group">
         <select name="region" class="form-control">
		  <option value="0">- lieux -</option>
		  <option value="France">France</option>
    <optgroup label="AuvergneRhoneAlpes">
	  <option value="AuvergneRhoneAlpes">- AuvergneRhoneAlpes -</option>
	  <option value="Ain">Ain</option>
      <option value="Allier">Allier</option>
	  <option value="Ardeche">Ardeche</option>
	  <option value="Cantal">Cantal</option>
	  <option value="Drome"> Drome</option>
      <option value="Isere">Isere</option>
	  <option value="Loire">Loire</option>
	  <option value="HauteLoire">Haute Loire</option>
	  <option value="PuyDeDome"> Puy de Dome</option>
      <option value="Rhone">Rhone</option>
	  <option value="MetropoledeLyon">Lyon</option>
	  <option value="Savoie">Savoie</option>
	  <option value="HauteSavoie">Haute Savoie</option>
	</optgroup>
    <optgroup label="BourgogneFrancheComté">
	  <option value="Bourgogne-Franche-Comté">- BourgogneFrancheComté -</option> 
	  <option value="CotedOr">Cote d'Or</option>
      <option value="Doubs">Doubs</option>
      <option value="Jura">Jura</option>
	  <option value="Nievre">Nievre</option>
      <option value="SaoneEtLoire">SaoneEtLoire</option>
      <option value="Yonne">Yonne</option>
	  <option value="TerritoireDeBelfort">TerritoireDeBelfort</option>
	</optgroup>  
	<optgroup label="Bretagne">
      <option value="Bretagne">- Bretagne -</option>
      <option value="Morbihan">Morbihan</option>	  
      <option value="CotedArmor">CotedArmor</option>
      <option value="Finistere">Finistere</option>
	  <option value="IlleetVilaine">Ille-et-Vilaine</option>
	</optgroup>  
	<optgroup label="Centre-Val de Loire">
        <option value="CentreValdeLoire">- Centre-Val de Loire -</option>
        <option value="Cher">Cher</option>
        <option value="EureEtLoir">Eure-et-Loir</option>
        <option value="Indre">Indre</option>
        <option value="IndreetLoire">Indre-et-Loire</option>
        <option value="LoirEtCher">Loir-et-Cher</option>
        <option value="Loiret">Loiret</option>
    </optgroup>
	 <optgroup label="Grand Est">
        <option value="GrandEst">- Grand Est -</option>
        <option value="Ardennes">Ardennes</option>
        <option value="Aube">Aube</option>
        <option value="Marne">Marne</option>
        <option value="HauteMarne">Haute-Marne</option>
        <option value="MeurtheEtMoselle">Meurthe-et-Moselle</option>
        <option value="Meuse">Meuse</option>
        <option value="Moselle">Moselle</option>
        <option value="BasRhin">Bas-Rhin</option>
        <option value="HautRhin">Haut-Rhin</option>
        <option value="Vosges">Vosges</option>
    </optgroup>
    <optgroup label="Hauts-de-France">
        <option value="HautsDeFrance">- Hauts-de-France -</option>
        <option value="Aisne">Aisne</option>
        <option value="Nord">Nord</option>
        <option value="Oise">Oise</option>
        <option value="PasDeCalais">Pas-de-Calais</option>
        <option value="Somme">Somme</option>
    </optgroup>
     <optgroup label="Île-de-France">
        <option value="IleDeFrance">- Île-de-France -</option>
        <option value="Paris">Paris</option>
        <option value="SeineEtMarne">Seine-et-Marne</option>
        <option value="Yvelines">Yvelines</option>
        <option value="Essonne">Essonne</option>
        <option value="HautsDeSeine">Hauts-de-Seine</option>
        <option value="SeineSaintDenis">Seine-Saint-Denis</option>
        <option value="ValDeMarne">Val-de-Marne</option>
        <option value="ValDOise">Val-d'Oise</option>
    </optgroup>
    <optgroup label="Normandie">
        <option value="Normandie">- Normandie -</option>
        <option value="Calvados">Calvados</option>
        <option value="Eure">Eure</option>
        <option value="Manche">Manche</option>
        <option value="Orne">Orne</option>
        <option value="SeineMaritime">Seine-Maritime</option>
    </optgroup>
    <optgroup label="Nouvelle-Aquitaine">
        <option value="NouvelleAquitaine">- Nouvelle-Aquitaine -</option>
        <option value="Charente">Charente</option>
        <option value="CharenteMaritime">Charente-Maritime</option>
        <option value="Correze">Corrèze</option>
        <option value="Creuse">Creuse</option>
        <option value="DeuxSevres">Deux-Sèvres</option>
        <option value="Dordogne">Dordogne</option>
        <option value="Gironde">Gironde</option>
        <option value="Landes">Landes</option>
        <option value="LotEtGaronne">Lot-et-Garonne</option>
        <option value="PyreneesAtlantiques">Pyrénées-Atlantiques</option>
        <option value="Vienne">Vienne</option>
        <option value="HauteVienne">Haute-Vienne</option>
    </optgroup>
       <optgroup label="Occitanie">
      <option value="Occitanie">- Occitanie -</option>
      <option value="Ariege">Ariège</option>
       <option value="Aude">Aude</option>
      <option value="Aveyron">Aveyron</option>
      <option value="Gard">Gard</option>
      <option value="HauteGaronne">Haute-Garonne</option>
      <option value="Gers">Gers</option>
      <option value="Lot">Lot</option>
      <option value="Lozere">Lozère</option>
      <option value="HautesPyrénées">Hautes-Pyrénées</option>
      <option value="PyreneesOrientales">Pyrénées-Orientales</option>
      <option value="Tarn">Tarn</option>
      <option value="TarnEtGaronne">Tarn-et-Garonne</option>
    </optgroup>
    <optgroup label="Pays de la Loire">
    <option value="PaysDeLaLoire">- Pays de la Loire -</option>
    <option value="LoireAtlantique">Loire-Atlantique</option>
    <option value="MaineEtLoire">Maine-et-Loire</option>
    <option value="Mayenne">Mayenne</option>
    <option value="Sarthe">Sarthe</option>
    <option value="Vendee">Vendée</option>
</optgroup>

<optgroup label="Provence-Alpes-Côte d'Azur">
    <option value="ProvenceAlpesCoteDAzur">- Provence-Alpes-Côte d'Azur -</option>
    <option value="AlpesDeHauteProvence">Alpes-de-Haute-Provence</option>
    <option value="HautesAlpes">Hautes-Alpes</option>
    <option value="AlpesMaritimes">Alpes-Maritimes</option>
    <option value="BouchesDuRhone">Bouches-du-Rhône</option>
    <option value="Var">Var</option>
    <option value="Vaucluse">Vaucluse</option>
</optgroup>	
  </select>
    
	  
      <div class="col-sm-3">
	      <div class="form-group">
	      <input class="btn btn-primary"type="submit" />
		  
	  </div>
    
	
  </form>
</div>
</div>
</div>
</div>

<div class="column">
<form action="domaines/api/v1/formations" method="GET">
rome :<input type="text" name="romes">

diplome :<select name="diploma">
       <option value="BAC">- BAC -</option>
	    <option value="CAP">- CAP -</option>
		 <option value="(BTS, DEUST)">- (BTS, DEUST) -</option>
</select></br>
radius :<select name="radius">
       <option value="30">- 30km -</option>
	    <option value="60">- 60km -</option>
		 <option value="100">- 100km -</option>
</select></br>
longit :<input type="text" name="long">
latid :<input type="text" name="lat">
<p>
<input class="btn btn-primary"type="submit" />
</form> 

</div>
<div class="row">
<button class="accordion">A: Agriculture et pêche, espaces naturels et espaces verts, soin aux animaux</button>
<div class="panel">
  <li> Conduite d'engins agricoles et forestiers A1101 fiche rome: A1101</li>

<li> Bûcheronnage et élagage A1201 fiche rome: A1201 </li>

<li> Entretien des espaces naturels A1202 fiche rome: A1202 </li>

<li> Aménagement et entretien des espaces verts A1203 fiche rome: A1203 </li>

<li> Protection du patrimoine naturel  A1204 fiche rome: A1204 </li>

<li> Sylviculture

A1205 fiche rome: A1205 </li>

<li>Conseil et assistance technique en agriculture et environnement naturel

A1301 fiche rome: A1301</li>

<li>Contrôle et diagnostic technique en agriculture

A1302 fiche rome: A1302</li>

<li>Ingénierie en agriculture et environnement naturel

A1303 fiche rome: A1303</li>

<li>Aide agricole de production fruitière ou viticole

A1401 fiche rome: A1401</li>

<li>Aide agricole de production légumière ou végétale

A1402 fiche rome: A1402</li>

<li>Aide d'élevage agricole et aquacole

A1403 fiche rome: A1403</li>

<li>Aquaculture

A1404 fiche rome: A1404</li>

<li>Arboriculture et viticulture

A1405 fiche rome: A1405</li>

<li>Encadrement équipage de la peche

A1406 fiche rome: A1406</li>

<li>élevage bovin ou équin

A1407 fiche rome: A1407</li>

<li>élevage d'animaux sauvages ou de compagnie

A1408 fiche rome: A1408</li>

<li>élevage de lapins et volailles

A1409 fiche rome: A1409</li>

<li>élevage ovin ou caprin

A1410 fiche rome: A1410</li>

<li>élevage porcin

A1411 fiche rome: A1411</li>

<li>Fabrication et affinage de fromages

A1412 fiche rome: A1412</li>

<li>Fermentation de boissons alcoolisées

A1413 fiche rome: A1413</li>

<li>Horticulture et maraîchage

A1414 fiche rome: A1414</li>

<li>équipage de la peche

A1415 fiche rome: A1415</li>

<li>Polyculture, élevage

A1416 fiche rome: A1416</li>

<li>Saliculture

A1417 fiche rome: A1417</li>

<li>Aide aux soins animaux

A1501 fiche rome: A1501</li>

<li>Podologie animale

A1502 fiche rome: A1502</li>

<li>Toilettage des animaux

A1503 fiche rome: A1503</li>

<li>Santé animale

A1504 fiche rome: A1504 </p>
</div>

<button class="accordion">B : Arts et façonnage d'ouvrages d'art</button>
<div class="panel">
<li> Création en arts plastiques

B1101 fiche rome: B1101</li>

<li>Réalisation d'objets décoratifs et utilitaires en céramique et matériaux de synthèse

B1201 fiche rome: B1201</li>

<li>Décoration d'espaces de vente et d'exposition

B1301 fiche rome: B1301</li>

<li>Décoration d'objets d'art et artisanaux

B1302 fiche rome: B1302</li>

<li>Gravure - ciselure

B1303 fiche rome: B1303</li>

<li>Réalisation d'objets en lianes, fibres et brins végétaux

B1401 fiche rome: B1401</li>

<li>Reliure et restauration de livres et archives

B1402 fiche rome: B1402</li>

<li>Fabrication et réparation d'instruments de musique

B1501 fiche rome: B1501</li>

<li>Métallerie d'art

B1601 fiche rome: B1601</li>

<li>Réalisation d'objets artistiques et fonctionnels en verre

B1602 fiche rome: B1602</li>

<li>Réalisation d'ouvrages en bijouterie, joaillerie et orfèvrerie

B1603 fiche rome: B1603</li>

<li>Réparation - montage en systèmes horlogers

B1604 fiche rome: B1604</li>

<li>Conservation et reconstitution d'espèces animales

B1701 fiche rome: B1701</li>

<li>Réalisation d'articles de chapellerie

B1801 fiche rome: B1801</li>

<li>Réalisation d'articles en cuir et matériaux souples (hors vetement)

B1802 fiche rome: B1802</li>

<li>Réalisation de vetements sur mesure ou en petite série

B1803 fiche rome: B1803</li>

<li>Réalisation d'ouvrages d'art en fils

B1804 fiche rome: B1804</li>

<li>Stylisme

B1805 fiche rome: B1805</li>

<li>Tapisserie - décoration en ameublement

B1806 fiche rome: B1806</li>
</div>

<button class="accordion">C: Banque, assurances, immobilier </button>
<div class="panel">
  <li>Conception - développement produits d'assurances C1101 fiche rome: C1101</li>
<li>Conseil clientèle en assurances C1102 fiche rome: C1102</li>
<li>Courtage en assurances C1103 fiche rome: C1103</li>
<li>Direction d'exploitation en assurances C1104 fiche rome: C1104</li>
<li>Études actuarielles en assurances C1105 fiche rome: C1105</li>
<li>Expertise risques en assurances C1106 fiche rome: C1106</li>
<li>Indemnisations en assurances C1107 fiche rome: C1107</li>
<li>Management de groupe et de service en assurances C1108 fiche rome: C1108</li>
<li>Rédaction et gestion en assurances C1109 fiche rome: C1109</li>
<li>Souscription d'assurances C1110 fiche rome: C1110</li>
<li>Accueil et services bancaires C1201 fiche rome: C1201</li>
<li>Analyse de crédits et risques bancaires C1202 fiche rome: C1202</li>
<li>Relation clients banque/finance C1203 fiche rome: C1203</li>
<li>Conception et expertise produits bancaires et financiers C1204 fiche rome: C1204</li>
<li>Conseil en gestion de patrimoine financier C1205 fiche rome: C1205</li>
<li>Gestion de clientèle bancaire C1206 fiche rome: C1206</li>
<li>Management en exploitation bancaire C1207 fiche rome: C1207</li>
<li>Front office marchés financiers C1301 fiche rome: C1301</li>
<li>Gestion back et middle-office marchés financiers C1302 fiche rome: C1302</li>
<li>Gestion de portefeuilles sur les marchés financiers C1303 fiche rome: C1303</li>
<li>Gestion en banque et assurance C1401 fiche rome: C1401</li>
<li>Gérance immobilière C1501 fiche rome: C1501</li>
<li>Gestion locative immobilière C1502 fiche rome: C1502</li>
<li>Management de projet immobilier C1503 fiche rome: C1503</li>
<li>Transaction immobilière C1504 fiche rome: C1504</li>

</div>
<button class="accordion">D: Commerce, vente  et grande distribution</button>


<div class="panel">
<li>Boucherie D1101 fiche rome: D1101</li>
<li>Boulangerie - viennoiserie D1102 fiche rome: D1102</li>
<li>Charcuterie - traiteur D1103 fiche rome: D1103</li>
<li>Pâtisserie, confiserie, chocolaterie et glacerie D1104 fiche rome: D1104</li>
<li>Poissonnerie D1105 fiche rome: D1105</li>
<li>Vente en alimentation D1106 fiche rome: D1106</li>
<li>Vente en gros de produits frais D1107 fiche rome: D1107</li>
<li>Achat vente d'objets d'art, anciens ou d'occasion D1201 fiche rome: D1201</li>
<li>Coiffure D1202 fiche rome: D1202</li>
<li>Hydrothérapie D1203 fiche rome: D1203</li>
<li>Location de véhicules ou de matériel de loisirs D1204 fiche rome: D1204</li>
<li>Nettoyage d'articles textiles ou cuirs D1205 fiche rome: D1205</li>
<li>Réparation d'articles en cuir et matériaux souples D1206 fiche rome: D1206</li>
<li>Retouches en habillement D1207 fiche rome: D1207</li>
<li>Soins esthétiques et corporels D1208 fiche rome: D1208</li>
<li>Vente de végétaux D1209 fiche rome: D1209</li>
<li>Vente en animalerie D1210 fiche rome: D1210</li>
<li>Vente en articles de sport et loisirs D1211 fiche rome: D1211</li>
<li>Vente en décoration et équipement du foyer D1212 fiche rome: D1212</li>
<li>Vente en gros de matériel et équipement D1213 fiche rome: D1213</li>
<li>Vente en habillement et accessoires de la personne D1214 fiche rome: D1214</li>
<li>Management de magasin de détail D1301 fiche rome: D1301</li>
<li>Assistanat commercial D1401 fiche rome: D1401</li>
<li>Relation commerciale grands comptes et entreprises D1402 fiche rome: D1402</li>
<li>Relation commerciale auprès de particuliers D1403 fiche rome: D1403</li>
<li>Relation commerciale en vente de véhicules D1404 fiche rome: D1404</li>
<li>Conseil en information médicale D1405 fiche rome: D1405</li>
<li>Management en force de vente D1406 fiche rome: D1406</li>
<li>Relation technico-commerciale D1407 fiche rome: D1407</li>
<li>Téléconseil et télévente D1408 fiche rome: D1408</li>
<li>Animation de vente D1501 fiche rome: D1501</li>
<li>Management/gestion de rayon produits alimentaires D1502 fiche rome: D1502</li>
<li>Management/gestion de rayon produits non alimentaires D1503 fiche rome: D1503</li>
<li>Direction de magasin de grande distribution D1504 fiche rome: D1504</li>
<li>Personnel de caisse D1505 fiche rome: D1505</li>
<li>Marchandisage D1506 fiche rome: D1506</li>
<li>Mise en rayon libre-service D1507 fiche rome: D1507</li>
<li>Encadrement du personnel de caisses D1508 fiche rome: D1508</li>
<li>Management de département en grande distribution D1509 fiche rome: D1509</li>


</div>

<button class="accordion">E: Communication, médias  et multimédias</button>


<div class="panel">
<li>Animation de site multimédia E1101 fiche rome: E1101</li>
<li>Écriture d'ouvrages, de livres E1102 fiche rome: E1102</li>
<li>Communication E1103 fiche rome: E1103</li>
<li>Conception de contenus multimédias E1104 fiche rome: E1104</li>
<li>Coordination d'édition E1105 fiche rome: E1105</li>
<li>Journalisme et information média E1106 fiche rome: E1106</li>
<li>Organisation d'événementiel E1107 fiche rome: E1107</li>
<li>Traduction, interprétariat E1108 fiche rome: E1108</li>
<li>Photographie E1201 fiche rome: E1201</li>
<li>Production en laboratoire cinématographique E1202 fiche rome: E1202</li>
<li>Production en laboratoire photographique E1203 fiche rome: E1203</li>
<li>Projection cinéma E1204 fiche rome: E1204</li>
<li>Réalisation de contenus multimédias E1205 fiche rome: E1205</li>
<li>Conduite de machines d'impression E1301 fiche rome: E1301</li>
<li>Conduite de machines de façonnage routage E1302 fiche rome: E1302</li>
<li>Encadrement des industries graphiques E1303 fiche rome: E1303</li>
<li>Façonnage et routage E1304 fiche rome: E1304</li>
<li>Préparation et correction en édition et presse E1305 fiche rome: E1305</li>
<li>Prépresse E1306 fiche rome: E1306</li>
<li>Reprographie E1307 fiche rome: E1307</li>
<li>Intervention technique en industrie graphique E1308 fiche rome: E1308</li>
<li>Développement et promotion publicitaire E1401 fiche rome: E1401</li>
<li>Élaboration de plan média E1402 fiche rome: E1402</li>

</div>


<button class="accordion">F: construction, bâtiment  et travaux publics</button>


<div class="panel">
<li>Architecture du BTP et du paysage F1101 fiche rome: F1101</li>
<li>Conception - aménagement d'espaces intérieurs F1102 fiche rome: F1102</li>
<li>Contrôle et diagnostic technique du bâtiment F1103 fiche rome: F1103</li>
<li>Dessin BTP et paysage F1104 fiche rome: F1104</li>
<li>Études géologiques F1105 fiche rome: F1105</li>
<li>Ingénierie et études du BTP F1106 fiche rome: F1106</li>
<li>Mesures topographiques F1107 fiche rome: F1107</li>
<li>Métré de la construction F1108 fiche rome: F1108</li>
<li>Conduite de travaux du BTP et de travaux paysagers F1201 fiche rome: F1201</li>
<li>Direction de chantier du BTP F1202 fiche rome: F1202</li>
<li>Direction et ingénierie d'exploitation de gisements et de carrières F1203 fiche rome: F1203</li>
<li>Qualité Sécurité Environnement et protection santé du BTP F1204 fiche rome: F1204</li>
<li>Conduite de grue F1301 fiche rome: F1301</li>
<li>Conduite d'engins de terrassement et de carrière F1302 fiche rome: F1302</li>
<li>Extraction liquide et gazeuse F1401 fiche rome: F1401</li>
<li>Extraction solide F1402 fiche rome: F1402</li>
<li>Montage de structures et de charpentes bois F1501 fiche rome: F1501</li>
<li>Montage de structures métalliques F1502 fiche rome: F1502</li>
<li>Réalisation - installation d'ossatures bois F1503 fiche rome: F1503</li>
<li>Application et décoration en plâtre, stuc et staff F1601 fiche rome: F1601</li>
<li>Électricité bâtiment F1602 fiche rome: F1602</li>
<li>Installation d'équipements sanitaires et thermiques F1603 fiche rome: F1603</li>
<li>Montage d'agencements F1604 fiche rome: F1604</li>
<li>Montage de réseaux électriques et télécoms F1605 fiche rome: F1605</li>
<li>Peinture en bâtiment F1606 fiche rome: F1606</li>
<li>Pose de fermetures menuisées F1607 fiche rome: F1607</li>
<li>Pose de revêtements rigides F1608 fiche rome: F1608</li>
<li>Pose de revêtements souples F1609 fiche rome: F1609</li>
<li>Pose et restauration de couvertures F1610 fiche rome: F1610</li>
<li>Réalisation et restauration de façades F1611 fiche rome: F1611</li>
<li>Taille et décoration de pierres F1612 fiche rome: F1612</li>
<li>Travaux d'étanchéité et d'isolation F1613 fiche rome: F1613</li>
<li>Construction en béton F1701 fiche rome: F1701</li>
<li>Construction de routes et voies F1702 fiche rome: F1702</li>
<li>Maçonnerie F1703 fiche rome: F1703</li>
<li>Préparation du gros œuvre et des travaux publics F1704 fiche rome: F1704</li>
<li>Pose de canalisations F1705 fiche rome: F1705</li>
<li>Préfabrication en béton industriel F1706 fiche rome: F1706</li>


</div>


</div>








<!-- <?php echo $this->paginate($posts, 'blog.index'); ?> -->

<?php $this->insert('partials/footer') ?>

