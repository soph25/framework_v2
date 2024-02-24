<?php $this->insert('partials/header') ?>
<?php $domaines = array(
    array("agriculture animaux"),
    array("armée sécurité"),
    array("arts culture artisanat"),
    array("banque assurances immobilier"),
    array("commerce marketing vente"),
    array("construction architecture travaux publics"),
    array("économie droit politique"),
    array("électricité électronique robotique"),
    array("environnement énergies propreté"),
    array("gestion des entreprises"),
    array("comptabilité"),
    array("histoire-géographie"),
    array("psychologie"),
    array("sociologie"),
    array("hôtellerie restauration tourisme"),
    array("information-communication"),
    array("audiovisuel"),
    array("informatique"),
    array("internet bases de données"),
    array("lettres"),
    array("langues enseignement"),
    array("logistique", "transport"),
    array("matières premières fabrication industries"),
	array("mécanique"),
    array("mécanique automatismes"),
    array("santé social sport"),
	array("sciences"),
    array("sciences biologie"),
    array("sciences chimie"),
    array("sciences mathématiques"),
    array("sciences physiques"),
    array("sciences de la Terre"),
    array("sciences univers")
);   ;?>
<h1> Recherche par domaines </h1>

<form action="/domaines/search" method="post">
<?php echo $this->csrf_input();?>  
    <div class="row">
	
      <div class="col-sm-3">
        <div class="form-group">
          <select id="domaine" name="domaine" class="form-control">
            <option value="0">- domaine -</option>
              <?php
              
              foreach($domaines as $domaine) {
                ?>
                <option value="<?= $domaine[0]; ?>"><?= $domaine[0]; ?></option>
                <?php
              }
              ?>
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
        </div>
      </div>
	  
      <div class="col-sm-3">
	      <div class="form-group">
	      <input class="btn btn-primary"type="submit" />
		  </div>
	  </div>
    </div>
	
  </form>

<div class="page-container__layout page-container__layout--no-padding">
  <ul class="fr-accordions-group" data-fr-js-accordions-group="true">
    
	 </ul> 
</div>


<!-- <?php echo $this->paginate($posts, 'blog.index'); ?> -->

<?php $this->insert('partials/footer') ?>


