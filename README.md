## WordPress string translation plugin with Weglot API
This plugin allows you to translate english strings to multible languages.
All translations are available as API endpoints. 

## Installing
1) This plugin requires ACF PRO
2) Upload the plugin to the /wp-content/plugins/ directory and activate

## To do list

* Make succesful connection with Weglot API and translate some test strings
* Create custom REST API routes & endpoints with the languages provided

*site.com/translate/fr/ ( endpoint -> get translation from Weglot api )*

### Possible limitations & development solutions

* The quantity of strings - at some point the acf meta field solution will slow down the db. Possible workaround - use separate tables.
* There are limitations on Weglot api requests. Possible workaround - save translations to db and serve them using 
WP REST API db functions or write translations straight to custom json file.    