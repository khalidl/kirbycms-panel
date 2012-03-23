<?php

l::set(array(
  
  // global 
  'ok' => 'OK',
  'cancel' => 'Annuleer',
  'nochanges' => 'Er zijn geen wijzigingen',

  // header
  'header.title' => 'Kirby',
  'header.logout' => 'Log Uit', 
  
  // subheader
  'subheader.home' => 'Home',  
  'subheader.site' => 'Jouw Site',
  'subheader.info' => 'Info',

  // tabs
  'tabs.overview' => 'Overzicht',
  'tabs.info' => 'Bewerk Info',
  'tabs.content' => 'Inhoud',
  'tabs.files' => 'Bestanden',
  'tabs.options' => 'URL',
  'tabs.preview' => 'Voorvertoning',
  
  // dashboard
  'dashboard.edit' => 'Bewerk',
  'dashboard.content' => 'Inhoud',
  'dashboard.content.empty' => 'Deze pagina heeft geen inhoud',
  'dashboard.files' => 'Bestanden',
  'dashboard.template' => 'Sjabloon',
  'dashboard.stats.images' => 'Afbeeldingen', 
  'dashboard.stats.videos' => 'Videos', 
  'dashboard.stats.docs' => 'Documenten', 
  'dashboard.stats.sound' => 'Geluid', 
  'dashboard.stats.others' => 'Anders', 

  // home
  'home.siteinfo' => 'Site info',
  'home.edit' => 'Bewerk',
  'home.warning.title' => 'Pas alstublieft eerst aan!',
  'home.warning.permissions.title' => 'Bevoegdheden',
  'home.warning.permissions.text' => 'De bevoegdheden in je inhoud map zijn niet juist toegekend. Verander alstublieft de bevoegdheden voor alle mappen naar  <strong>0755</strong> en voor alle bestanden naar <strong>0666</strong>',
  'home.warning.blueprints.title' => 'Blauwdrukken',
  'home.warning.blueprints.text' => 'Er zijn geen blauwdrukken aanwezig voor de volgende sjablonen<br /> Lees meer over <a href="http://getkirby.com/panel/blueprints">how to install blueprints for your templates</a>',
  'home.warning.thumbs.title' => 'Thumbnails',
  'home.warning.thumbs.text' => 'Voeg een <strong>thumbs</strong> map toe in de hoofdmap van je site en verander de bevoegdheden ervan naar <strong>0755</strong>',
  
  // siteinfo
  'siteinfo.button' => 'Bewaar',
  'siteinfo.errors.title' => 'Voeg alstublieft een titel toe',
  'siteinfo.errors.permissions' => '<strong>content/site.txt</strong> is niet schrijfbaar. <br />Verander alstublieft de bevoegdheden en probeer nog eens.',
  
  // content form 
  'content.save' => 'Save',
  'content.previous' => 'Vorige',
  'content.next' => 'Volgende',
  'content.invisible' => 'verborgen',
  
  // no content available
  'nocontent.title' => 'Geen Inhoud',
  'nocontent.text' => 'Er is geen inhoud beschikbaar voor deze pagina.',
    
  // pages
  'pages.title' => 'Visible pages',
  'pages.title.home' => 'Pages',
  'pages.home' => 'Home',
  'pages.sort' => 'Sorteer',
  'pages.add' => 'Voeg toe',
  'pages.delete' => 'Verwijder',
  'pages.invisible' => 'Invisible subpages',
  'pages.invisible.home' => 'Invisible pages',
  'pages.no.visible' => 'No visible pages so far',
  'pages.no.invisible' => 'No invisible pages so far',
  'pages.moved' => 'The page has been moved',
  'pages.sorted' => 'The pages have been sorted',
  'pages.show.more' => 'show more',
  'pages.show.less' => 'show less',
  'pages.errors.notfound' => 'The page could not be found',
  'pages.errors.move' => 'The page could not be moved',
  'pages.errors.sort' => 'Not all pages could be sorted',
  'pages.errors.nosort' => 'There\'s nothing to sort',

  // no subpages allowed
  'nopages.title' => 'Subpagina\'s',
  'nopages.text' => 'This page is not supposed to have subpages',  
  
  // add page
  'pages.add.title' => 'Voeg nieuwe pagina toe',
  'pages.add.label.title' => 'Titel',
  'pages.add.label.url' => 'URL',
  'pages.add.label.template' => 'Sjabloon',
  'pages.add.button' => 'Bewaar',
  'pages.add.errors.title' => 'Voeg alstublieft een titel toe',
  'pages.add.errors.url' => 'Voeg alstublieft een URL aan uw pagina toe',
  'pages.add.errors.characters' => 'Gebruik alstublieft alleen de volgende karakters a-z, 0-9, _, - voor de URL',
  'pages.add.errors.exists' => 'A page with that url already exists',
  'pages.add.errors.permissions' => 'The directory could not be created',
  'pages.add.success' => 'De pagina is aangemaakt',

  // update page
  'pages.update.errors.title' => 'Voeg alstublieft een titel toe',
    
  // delete page  
  'pages.delete.title' => 'Verwijder deze pagina',
  'pages.delete.button' => 'Verwijder',
  'pages.delete.errors.homepage' => 'Je kunt de homepage niet verwijderen',
  'pages.delete.errors.errorpage' => 'You cannot delete the error page',
  'pages.delete.errors.subpages' => 'Deze pagina heeft subpagina\'s. Verwijder deze alstublieft eerst.',
  'pages.delete.errors.permissions' => 'De pagina kon niet worden verwijderd',
  'pages.delete.success' => 'De pagina is verwijderd',

  // options
  'options.url' => 'URL',
  'options.button' => 'Bewaar',
  'options.home.url' => 'URL',
  'options.home.text' => 'Je kunt de URL van de homepage niet veranderen',
  'options.error.text' => 'You cannot change the URL of the error page',
  'options.errors.homepage' => 'Je kunt de URL van de homepage niet veranderen',
  'options.errors.errorpage' => 'You cannot change the URL of the error page',
  'options.errors.characters' => 'Gebruik alstublieft alleen de volgende karakters a-z, 0-9, _, -',
  'options.errors.permissions' => 'The the content directory cannot be moved',
  'options.errors.exists' => 'De nieuwe URL bestaat al',
  'options.errors.move' => 'The the content directory cannot be moved',

  // files
  'files.title' => 'Bestanden',
  'files.upload' => 'Upload een nieuw bestand',
  'files.edit' => 'Aanpassen',
  'files.replace' => 'Vervang',
  'files.delete' => 'Verwijder',
  'files.empty' => 'Nog geen bestanden',

  'nofiles.title' => 'Geen Bestanden',
  'nofiles.text' => 'Deze pagina behoort geen bestanden te bevatten',
  
  // delete file
  'files.delete.title' => 'Verwijder dit bestand',
  'files.delete.button' => 'Verwijder',
  'files.delete.errors.notfound' => 'Het bestand kon niet worden gevonden',
  'files.delete.errors.permissions' => 'Het bestand kon niet worden verwijderd',
  'files.delete.success' => 'Het bestand is verwijderd',

  // edit file
  'files.edit.title' => 'Bestand aanpassen',
  'files.edit.filename' => 'Bestandsnaam (zonder extensie)',
  'files.edit.button' => 'Bewaar',
  'files.edit.errors.notfound' => 'Het bestand kon niet worden gevonden',
  'files.edit.errors.exists' => 'The the new name already exists',
  'files.edit.errors.permissions' => 'The file could not be renamed',
  'files.edit.success' => 'Het bestand is opgeslagen',

  // replace file
  'files.replace.title' => 'Vervang dit bestand',
  'files.replace.file' => 'Bestand',
  'files.replace.choose' => 'Kies een nieuw bestand van uw computer…',
  'files.replace.button' => 'Vervang',
  'files.replace.errors.notfound' => 'Het bestand kon niet worden gevonden',
  'files.replace.success' => 'Het bestand is vervangen',

  // upload file
  'files.upload.title' => 'Upload een nieuw bestand',
  'files.upload.choose' => 'Kies een bestand van uw computer…',
  'files.upload.button' => 'Upload',
      
  // login  
  'login.button' => 'Login',
  'login.username' => 'Gebruikersnaam',
  'login.password' => 'Wachtwoord',
  'login.error' => 'Ongeldige gebruikersnaam of wachtwoord',
  'login.success' => 'Je bent ingelogd',
  'login.error.browser.title' => 'Je gebruikt een verouderde browser',
  'login.error.browser.text' => 'Upgrade alstublieft naar de nieuwste versie van Google Chrome, Firefox, Safari or Internet Explorer.',
  
  // upload
  'upload.errors.missing-file' => 'The file has not been found',
  'upload.errors.file-exists' => 'The file exists and cannot be overwritten',
  'upload.errors.invalid-upload' => 'The upload failed',
  'upload.errors.too-big' => 'The file is too big',
  'upload.errors.invalid-file' => 'The file type is not allowed',
  'upload.errors.move-error' => 'The file could not be moved to the server',
  'upload.success' => 'The file has been uploaded',

  // writer
  'writer.errors.permissions' => 'The file is not writable',
  'writer.errors.write' => 'The data could not be added',
  'writer.success' => 'The file has been saved',
  
));

?>