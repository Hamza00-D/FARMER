<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE_FARMER</title>
    <link rel="stylesheet" href="css/styles.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <section class="top-page">
        <header class="header">
            <img src="images/logo1-re.png" alt="Logo du site">
            <nav class="nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="recrutement.php">Recrutement</a></li>
                <li><a href="forum.php">Forum</a></li>
                <li><div class="box">
	                    <a class="button" href="#popup1">Compte</a>
                    </div>
                    <div id="popup1" class="overlay">
	                    <div class="popup">
                            <div id="container">
                                <form action="verification.php" method="POST">
                                    <h2>Connexion</h2>
                                    <a class="close" href="#">&times;</a>

                                    <section class="info-compte">
                                        <input type="text" placeholder="Email" name="username" required>
                                        <input type="password" placeholder="Mot de passe" name="password" required>
                                        <input type="submit" id='submit' value='VALIDER' >

                                        <?php
                                        if(isset($_GET['erreur'])){
                                            $err = $_GET['erreur'];
                                            if($err==1 || $err==2)
                                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                                        }
                                        ?>
                                    </section>
                                </form>
                            </div>

                            <section class="pas-membre">
                                <p class="membre">Si vous n'avez pas de compte. <a href="inscription.html">Rejoignez-nous</a></p></p>
                            </section>

	                    </div>
                    </div>
                </li>
            </nav>
        </header>
        
    </section>
    
    <section class="services" id="services">
        <div class="service-item">
            <i class="fas fa-store delivery-icon"></i>
            <p class="service-details">Nos magasins</p>
        </div>
        <div class="service-item">
            <i class="fas fa-truck delivery-icon"></i>
            <p class="service-details">Livraison</p>
        </div>
    </section> 

   
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="fr-FR"  class="supernova"><head><script>console.warn("Server Side Rendering => render-from: frontend");</script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&amp;url=https%3A%2F%2Fform.jotform.com%2F222772770656060" title="oEmbed Form">
<link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&amp;url=https%3A%2F%2Fform.jotform.com%2F222772770656060" title="oEmbed Form">
<meta property="og:title" content="Terrain à promouvoir" >
<meta property="og:url" content="https://form.jotform.com/222772770656060" >
<meta property="og:description" content="Veuillez cliquer sur ce lien pour terminer de remplir ce formulaire." >
<meta name="slack-app-id" content="AHNMASS8M">
<link rel="shortcut icon" href="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg">
<meta property="og:image" content="https://cdn.jotfor.ms/assets/img/favicons/favicon-2021.svg" />
<link rel="canonical" href="https://form.jotform.com/222772770656060" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=1" />
<meta name="HandheldFriendly" content="true" />
<title>Terrain à promouvoir</title>
<style type="text/css">@media print{.form-section{display:inline!important}.form-pagebreak{display:none!important}.form-section-closed{height:auto!important}.page-section{position:initial!important}}</style>
<link type="text/css" rel="stylesheet" href="https://cdn01.jotfor.ms/themes/CSS/5e6b428acc8c4e222d1beb91.css?"/>
<link type="text/css" rel="stylesheet" href="https://cdn02.jotfor.ms/css/styles/payment/payment_styles.css?3.3.36258" />
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/css/styles/payment/payment_feature.css?3.3.36258" />
<script src="https://cdn01.jotfor.ms/static/prototype.forms.js?3.3.36258" type="text/javascript"></script>
<script src="https://cdn02.jotfor.ms/static/jotform.forms.js?3.3.36258" type="text/javascript"></script>
<script src="https://js.jotform.com/vendor/postMessage.js?3.3.36258" type="text/javascript"></script>
<script src="https://js.jotform.com/WidgetsServer.js?v=1664962695450" type="text/javascript"></script>
<script type="text/javascript">	JotForm.newDefaultTheme = true;
	JotForm.extendsNewTheme = false;
	JotForm.singleProduct = false;
	JotForm.newPaymentUIForNewCreatedForms = true;
	JotForm.newPaymentUI = true;
	JotForm.clearFieldOnHide="disable";
	JotForm.submitError="jumpToFirstError";

	JotForm.init(function(){
	/*INIT-START*/
      JotForm.alterTexts({"ageVerificationError":"Vous devez avoir plus de {Ageminimum} ans pour envoyer ce formulaire.","alphabetic":"Ce champ ne peut contenir que des lettres","alphanumeric":"Ce champ ne peut contenir que des lettres et des chiffres.","appointmentSelected":"Vous avez sélectionné {time} le {date}","ccDonationMinLimitError":"Le montant minimum est de {minAmount} {currency}","ccInvalidCVC":"Le numéro CVC est invalide.","ccInvalidExpireDate":"La date d&amp;#039;expiration est invalide.","ccInvalidNumber":"Le numéro de la carte bancaire est invalide.","ccMissingDetails":"Please fill up the credit card details.","ccMissingDonation":"Veuillez saisir des valeurs numériques pour le montant des dons.","ccMissingProduct":"Veuillez sélectionner au moins un produit.","characterLimitError":"Trop de caractères. La limite est de","characterMinLimitError":"Nombre de caractères insuffisant. Le nombre minimum est de","confirmClearForm":"Êtes-vous certain de vouloir supprimer les inscriptions de ce formulaire ?","confirmEmail":"L&amp;#039;adresse e-mail ne correspond pas","currency":"Ce champ ne peut contenir que des valeurs monétaires.","cyrillic":"Ce champ ne peut contenir que des caractères cyrilliques","dateInvalid":"Ce format de date n&amp;#039;est pas valide. Le format de la date est {format}","dateInvalidSeparate":"Cette date n&amp;#039;est pas valide. Veuillez saisir une date valide {element}.","dateLimited":"Cette date est indisponible.","disallowDecimals":"Veuillez entrer un nombre entier.","dragAndDropFilesHere_infoMessage":"Glissez-déposez des fichiers ici","email":"Saisir une adresse courriel valide","fillMask":"La valeur du champ doit remplir le masque.","freeEmailError":"Les comptes e-mail gratuits ne sont pas autorisés","generalError":"Ce formulaire contient des erreurs. Veuillez les corriger avant de continuer.","generalPageError":"Cette page contient des erreurs. Veuillez les corriger avant de continuer.","gradingScoreError":"Le score total devrais être moins ou égal à","incompleteFields":"Des champs obligatoires ne sont pas remplis. Veuillez les compléter.","inputCarretErrorA":"Le nombre saisi ne peut pas être inférieur à la valeur minimum :","inputCarretErrorB":"Vous ne pouvez pas saisir une valeur supérieure à la valeur maximum :","justSoldOut":"Tout juste épuisé","lessThan":"Votre note doit être inférieure ou égale à","maxDigitsError":"Le nombre de chiffres maximum autorisé est de","maxFileSize_infoMessage":"Taille de fichier max.","maxSelectionsError":"The maximum number of selections allowed is ","minSelectionsError":"Le nombre minimum requis de sélections est de","multipleFileUploads_emptyError":"{file} est vide, veuillez sélectionner à nouveau les fichiers sans celui-ci.","multipleFileUploads_fileLimitError":"Seuls {fileLimit} téléchargements de fichiers sont autorisés.","multipleFileUploads_minSizeError":"{file} est trop petite, la taille de fichier minimale est {minSizeLimit}.","multipleFileUploads_onLeave":"Les fichiers sont en cours de téléchargement, si vous quittez maintenant le téléchargement sera annulé.","multipleFileUploads_sizeError":"{file} est trop volumineux, la taille maximale d&amp;#039;un fichier est de {sizeLimit}.","multipleFileUploads_typeError":"L&amp;#039;extension de {file} est invalide. Seules les extensions {extensions} sont autorisées.","multipleFileUploads_uploadFailed":"File upload failed, please remove it and upload the file again.","noSlotsAvailable":"Aucun emplacement disponible","notEnoughStock":"Pas assez de stock pour la sélection actuelle","notEnoughStock_remainedItems":"Pas assez de stock pour la sélection actuelle ({count} articles restants)","noUploadExtensions":"File has no extension file type (e.g. .txt, .png, .jpeg)","numeric":"Ce champ ne peut contenir que des valeurs numériques","pastDatesDisallowed":"La date ne doit pas se situer dans le passé.","pleaseWait":"Veuillez patienter.","required":"Ce champ est obligatoire.","requireEveryCell":"Toutes les cellules sont nécessaires.","requireEveryRow":"Chaque ligne est obligatoire.","requireOne":"Au moins un champ est requis","restrictedDomain":"This domain is not allowed","selectionSoldOut":"Sélection épuisée","slotUnavailable":"{heure} le {date} a été pris.Veuillez sélectionner un autre emplacement.","soldOut":"Epuisé","subProductItemsLeft":"({count} articles restants)","uploadExtensions":"Vous ne pouvez uploader que les fichiers suivants :","uploadFilesize":"La taille du fichier ne peut pas dépasser :","uploadFilesizemin":"la taille du fichier ne peut pas être inférieure à :","url":"Ce champ peut uniquement contenir une URL valide","validateEmail":"Vous devez valider cet e-mail","wordLimitError":"Trop de mots. Le nombre max. de mots est de","wordMinLimitError":"Nombre de mots insuffisants. Le minimum est de"});
	/*INIT-END*/
	});

   JotForm.prepareCalculationsOnTheFly([null,{"name":"heading","qid":"1","text":"Terrain a promouvoir","type":"control_head"},null,null,null,null,null,{"description":"","labelText":"","name":"images_1633d4a803c9f5913379489","qid":"7","text":"images_1.633d4a803c9f59.13379489","type":"control_image"},{"description":"","labelText":"","name":"image8","qid":"8","text":"images_2.633d4a8dec79d1.75380204","type":"control_image"},{"description":"","labelText":"","name":"image9","qid":"9","text":"images_3.633d4a9a039347.62740691","type":"control_image"},{"description":"","labelText":"","name":"image10","qid":"10","text":"images_4.633d4ab73c13c3.14065450","type":"control_image"},null,null,null,null,null,{"name":"input16","qid":"16","text":"Bien agricole a vendre a Noues de Sienne dans le Calvados (14380), ref : 076\u002F5935 EXCLUSIVITE - ST MANVIEU BOCAGE - PARCELLES DE TERRE AGRICOLE en nature d'herbage et pre (avec haies classees) , l'ensemble d'une superficie 4ha 45a 17ca","type":"control_text"},{"name":"input17","qid":"17","text":"Bien agricole a vendre a Blandouet-Saint Jean en Mayenne (53270), ref : 018\u002F1802 SAINT JEAN SUR ERVE - PARCELLE DE TERRE AGRICOLE d'une surface de 6ha32a67ca. actuellement louee. Fermage annuel = 803,22€ Prix HNI 39 858,00 € dont 5% TTC charge acquereurs. Prix ​​hors honoraires : 37960€ Ref : 018\u002F1802","type":"control_text"},{"name":"input18","qid":"18","text":"Terrain agricole a vendre a Rostrenen dans les Cotes-d'Armor (22110), ref : 22075-TA01475Terres 3 d'une surface de 3ha86a62caLandes 1 d'une surface de 0ha87a20caPresence d'un cours d'eau sur la partie Landes.Terres agricoles accessibles par route.","type":"control_text"},{"name":"input19","qid":"19","text":"Propriete agricole de 134,5 hectares\nCampagne GUISCRIFF, Terrain agricole - En campagne; 5\u002F6 parcelles de terres agricoles cultivables (environ 63 hectares), et boisees (environ 30 hectares); pour une contenance totale d'environ 93,47 hectares, sur 2 hameaux de la communes. Propriete a haute valeur Cynegetique... - - Prix Hon. Nego Inclus : 471 500,00 € dont 4,78% Hon. Nego TTC charge acq. Prix ​​Hors Hon. Nego :450 000,00 € - Ref : 075\u002F1691","type":"control_text"},null,{"name":"saisissezUne","qid":"21","text":"Geolocation","type":"control_widget"}]);
   setTimeout(function() {
JotForm.paymentExtrasOnTheFly([null,{"name":"heading","qid":"1","text":"Terrain a promouvoir","type":"control_head"},null,null,null,null,null,{"description":"","labelText":"","name":"images_1633d4a803c9f5913379489","qid":"7","text":"images_1.633d4a803c9f59.13379489","type":"control_image"},{"description":"","labelText":"","name":"image8","qid":"8","text":"images_2.633d4a8dec79d1.75380204","type":"control_image"},{"description":"","labelText":"","name":"image9","qid":"9","text":"images_3.633d4a9a039347.62740691","type":"control_image"},{"description":"","labelText":"","name":"image10","qid":"10","text":"images_4.633d4ab73c13c3.14065450","type":"control_image"},null,null,null,null,null,{"name":"input16","qid":"16","text":"Bien agricole a vendre a Noues de Sienne dans le Calvados (14380), ref : 076\u002F5935 EXCLUSIVITE - ST MANVIEU BOCAGE - PARCELLES DE TERRE AGRICOLE en nature d'herbage et pre (avec haies classees) , l'ensemble d'une superficie 4ha 45a 17ca","type":"control_text"},{"name":"input17","qid":"17","text":"Bien agricole a vendre a Blandouet-Saint Jean en Mayenne (53270), ref : 018\u002F1802 SAINT JEAN SUR ERVE - PARCELLE DE TERRE AGRICOLE d'une surface de 6ha32a67ca. actuellement louee. Fermage annuel = 803,22€ Prix HNI 39 858,00 € dont 5% TTC charge acquereurs. Prix ​​hors honoraires : 37960€ Ref : 018\u002F1802","type":"control_text"},{"name":"input18","qid":"18","text":"Terrain agricole a vendre a Rostrenen dans les Cotes-d'Armor (22110), ref : 22075-TA01475Terres 3 d'une surface de 3ha86a62caLandes 1 d'une surface de 0ha87a20caPresence d'un cours d'eau sur la partie Landes.Terres agricoles accessibles par route.","type":"control_text"},{"name":"input19","qid":"19","text":"Propriete agricole de 134,5 hectares\nCampagne GUISCRIFF, Terrain agricole - En campagne; 5\u002F6 parcelles de terres agricoles cultivables (environ 63 hectares), et boisees (environ 30 hectares); pour une contenance totale d'environ 93,47 hectares, sur 2 hameaux de la communes. Propriete a haute valeur Cynegetique... - - Prix Hon. Nego Inclus : 471 500,00 € dont 4,78% Hon. Nego TTC charge acq. Prix ​​Hors Hon. Nego :450 000,00 € - Ref : 075\u002F1691","type":"control_text"},null,{"name":"saisissezUne","qid":"21","text":"Geolocation","type":"control_widget"}]);}, 20); 
</script>
</head>
<body>
<form class="jotform-form" action="https://submit.jotformeu.com/submit/222772770656060/" method="post" name="form_222772770656060" id="222772770656060" accept-charset="utf-8" autocomplete="on">
  <input type="hidden" name="formID" value="222772770656060" />
  <input type="hidden" id="JWTContainer" value="" />
  <input type="hidden" id="cardinalOrderNumber" value="" />
  <div role="main" class="form-all">
    <style>
      .form-all:before { background: none;}
    </style>
    <ul class="form-section page-section">
      <li id="cid_1" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-large">
          <div class="header-text httal htvam">
            <h1 id="header_1" class="form-header" data-component="header">
              Terrain à promouvoir
            </h1>
            <div id="subHeader_1" class="form-subHeader">
              Trouvez ici des terrains cultivable à des prix battant le record du marché financier.
            </div>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_image" id="id_7">
        <div id="cid_7" class="form-input-wide" data-layout="full">
          <div style="text-align:center">
            <img alt="" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/hdiaby0/form_files/images_1.633d4a803c9f59.13379489.jpg" height="147px" width="343px" data-component="image" />
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_19">
        <div id="cid_19" class="form-input-wide" data-layout="full">
          <div id="text_19" class="form-html" data-component="text" tabindex="0">
            <p><span style="font-family: arial black, sans-serif;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="font-size: 14pt;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Propriété agricole de 134,5 hectares</span></span></span></span></span></span></span></span></p>
            <p><span style="font-family: arial black, sans-serif; font-size: 10pt;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Campagne </span></span></span></span><br /><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">GUISCRIFF, Terrain agricole - En campagne; </span></span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">5/6 parcelles de terres agricoles cultivables (environ 63 hectares), et boisées (environ 30 hectares); </span></span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">pour une contenance totale d'environ 93,47 hectares, sur 2 hameaux de la communes. </span></span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Propriété à haute valeur Cynégétique... - - Prix Hon. </span></span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Négo Inclus : 471 500,00 € dont 4,78% Hon. </span></span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Négo TTC charge acq. </span></span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Prix ​​Hors Hon. </span></span></span><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Négo :450 000,00 € - Réf : 075/1691</span></span></span></span></span></span></span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_image" id="id_8">
        <div id="cid_8" class="form-input-wide" data-layout="full">
          <div style="text-align:center">
            <img alt="" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/hdiaby0/form_files/images_2.633d4a8dec79d1.75380204.jpg" height="168px" width="300px" data-component="image" />
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_18">
        <div id="cid_18" class="form-input-wide" data-layout="full">
          <div id="text_18" class="form-html" data-component="text" tabindex="0">
            <p><span style="font-family: arial black, sans-serif; font-size: 14pt;">Terrain agricole à vendre à Rostrenen dans les Côtes-d'Armor (22110), ref : 22075-TA01475</span><br /><span style="font-family: arial black, sans-serif;">Terres 3 d'une surface de 3ha86a62ca</span><br /><span style="font-family: arial black, sans-serif;">Landes 1 d'une surface de 0ha87a20ca</span><br /><span style="font-family: arial black, sans-serif;">Présence d'un cours d'eau sur la partie Landes.</span><br /><span style="font-family: arial black, sans-serif;">Terres agricoles accessibles par route.</span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_image" id="id_9">
        <div id="cid_9" class="form-input-wide" data-layout="full">
          <div style="text-align:center">
            <img alt="" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/hdiaby0/form_files/images_3.633d4a9a039347.62740691.jpg" height="183px" width="275px" data-component="image" />
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_17">
        <div id="cid_17" class="form-input-wide" data-layout="full">
          <div id="text_17" class="form-html" data-component="text" tabindex="0">
            <p><span style="font-family: arial black, sans-serif; font-size: 14pt;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Bien agricole à vendre à Blandouet-Saint Jean en Mayenne (53270), ref : 018/1802</span></span></span><br /><span style="font-family: arial black, sans-serif;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"> SAINT JEAN SUR ERVE - PARCELLE DE TERRE AGRICOLE d'une surface de 6ha32a67ca. </span></span></span><br /><span style="font-family: arial black, sans-serif;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">actuellement louée. </span><span style="vertical-align: inherit;">Fermage annuel = 803,22€ </span></span></span><br /><span style="font-family: arial black, sans-serif;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Prix HNI 39 858,00 € dont 5% TTC charge acquéreurs. </span><span style="vertical-align: inherit;">Prix ​​hors honoraires : 37960€ </span></span></span><br /><span style="font-family: arial black, sans-serif;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Réf : 018/1802</span></span></span></p>
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_image" id="id_10">
        <div id="cid_10" class="form-input-wide" data-layout="full">
          <div style="text-align:center">
            <img alt="" loading="lazy" class="form-image" style="border:0" src="https://www.jotform.com/uploads/hdiaby0/form_files/images_4.633d4ab73c13c3.14065450.jpg" height="166px" width="304px" data-component="image" />
          </div>
        </div>
      </li>
      <li class="form-line" data-type="control_text" id="id_16">
        <div id="cid_16" class="form-input-wide" data-layout="full">
          <div id="text_16" class="form-html" data-component="text" tabindex="0">
            <p><span style="font-size: 14pt; font-family: arial black, sans-serif;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Bien agricole à vendre à Noues de Sienne dans le Calvados (14380), ref : 076/5935 </span></span></span></span></span></span></span></span></span><br /><span style="font-family: arial black, sans-serif;"><strong><span style="font-size: 10pt;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">EXCLUSIVITE - ST MANVIEU BOCAGE - PARCELLES DE TERRE AGRICOLE en nature d'herbage et pré (avec haies classées) , l'ensemble d'une superficie 4ha 45a 17ca</span></span></span></span></span></span></span></span></span></strong></span></p>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_widget" id="id_21">
        <label class="form-label form-label-top form-label-auto" id="label_21" for="input_21">
          Geolocation
          <span class="form-required">
            *
          </span>
        </label>
        <div id="cid_21" class="form-input-wide jf-required" data-layout="full">
          <div data-widget-name="Géolocalisation" style="width:100%;text-align:Left;overflow-x:auto" data-component="widget-field">
            <iframe data-client-id="5343b614d5f416b42a000004" title="Géolocalisation" frameBorder="0" scrolling="no" allowtransparency="true" allow="geolocation; microphone; camera; autoplay; encrypted-media; fullscreen" data-type="iframe" class="custom-field-frame" id="customFieldFrame_21" src="" style="max-width:460px;border:none;width:100%;height:420px" data-width="460" data-height="420">
            </iframe>
            <div class="widget-inputs-wrapper">
              <input type="hidden" id="input_21" class="form-hidden form-widget widget-required " name="q21_saisissezUne" value="" />
              <input type="hidden" id="widget_settings_21" class="form-hidden form-widget-settings" value="%5B%7B%22name%22%3A%22output%22%2C%22value%22%3A%22Adresse%20~%20Latitude%20et%20Longitude%22%7D%2C%7B%22name%22%3A%22cprecision%22%2C%22value%22%3A%2210%22%7D%2C%7B%22name%22%3A%22manualentry%22%2C%22value%22%3A%22false%22%7D%5D" data-version="2" />
            </div>
            <script type="text/javascript">
            setTimeout(function()
{
  var _cFieldFrame = document.getElementById("customFieldFrame_21");
  if (_cFieldFrame)
  {
    _cFieldFrame.onload = function()
    {
      if (typeof widgetFrameLoaded !== 'undefined')
      {
        widgetFrameLoaded(21, {
          "formID": 222772770656060
        })
      }
    };
    _cFieldFrame.src = "//data-widgets.jotform.io/geolocation/?qid=21&ref=" + encodeURIComponent(window.location.protocol + "//" + window.location.host) + '' + '' + '&injectCSS=' + encodeURIComponent(window.location.search.indexOf("ndt=1") > -1);
    _cFieldFrame.addClassName("custom-field-frame-rendered");
  }
}, 0);
            </script>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="" />
      </li>
    </ul>
  </div>
  <script>
  JotForm.showJotFormPowered = "new_footer";
  </script>
  <script>
  JotForm.poweredByText = "Propulsé par Jotform";
  </script>
  <input type="hidden" class="simple_spc" id="simple_spc" name="simple_spc" value="222772770656060" />
  <script type="text/javascript">
  var all_spc = document.querySelectorAll("form[id='222772770656060'] .si" + "mple" + "_spc");
for (var i = 0; i < all_spc.length; i++)
{
  all_spc[i].value = "222772770656060-222772770656060";
}
</body>
</html>