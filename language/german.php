<?php
/*	Project:	EQdkp-Plus
 *	Package:	Lord of the rings online game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2016 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Barde',
		2	=> 'Hauptmann',
		3	=> 'Jäger',
		4	=> 'Kundiger',
		5	=> 'Schurke',
		6	=> 'Wächter',
		7	=> 'Waffenmeister',
		8	=> 'Runenbewahrer'',
		9	=> 'Hüter',
		10	=> 'Beorninger',
		11	=> 'Schläger', //Brawler
	),
	'races' => array(
		0	=> 'Unknown',
		1	=> 'Mensch',
		2	=> 'Hobbit',
		3	=> 'Elb',
		4	=> 'Zwerg',
		5	=> 'Beorninger',
		6	=> 'Hochelb',
		7	=> 'Stark-Axt',
		8	=> 'Der Hobbit am Fluss', //River hobbit
	),
	'factions' => array(
		'free'			=> 'Freie Völker',
		'monsterplay'	=> 'MonsterPlay'
	),
	'roles' => array(
		1	=> 'Heiler',
		2	=> 'Tank',
		3	=> 'Crowd Control',
		4	=> 'Damage Dealer',
		5	=> 'Supporter',
	),
	'realmlist' => array(
		// EU Servers
		'Gwaihir',
		'Morthond',
		'Anduin',
		'Maiar',
		'Vanyar',
		'Belegaer',
		'Snowbourn',
		'Evernight',
		'Eldar',
		'Gilrain',
		'Laurelin',
		'Sirannon',
		'Estel',
	
		// US Servers
		'Arkenstone',
		'Brandywine',
		'Crickhollow',
		'Dwarrowdelf',
		'Elendilmir',
		'Firefoot',
		'Gladden',
		'Imladris',
		'Landroval',
		'Meneldor',
		'Nimrodel',
		'Riddermark',
		'Silverlode',
		'Vilya',
		'Windfola',
	
		// other Servers
		'Bullroarer',
		
		//Legendary Servers
		'Anor',
		'Ithil'
	),
	'lang' => array(
		'lotro'							=> 'Der Herr der Ringe Online',
		'heavy'							=> 'Schwere Rüstung',
		'medium'						=> 'Mittlere Rüstung',
		'light'							=> 'Leichte Rüstung',

		// Berufe
		'Farmer'						=> 'Bauer',
		'Forester'						=> 'Förster',
		'Prospector'					=>	'Schürfer',
		'Cook'							=>	'Koch',
		'Jeweller'						=> 'Goldschmied',
		'Metalsmith'					=> 'Metallschmied',
		'Scholar'						=>	'Gelehrter',
		'Tailor'						=>	'Schneider',
		'Weaponsmith'					=>	'Waffenschmied',
		'Woodworker'					=>	'Drechsler',
		
		'Armourer'						=>	'Rüstungsschmied',
		'Armsman'						=>	'Waffenbauer',
		'Explorer'						=>	'Entdecker',
		'Historian'						=>	'Historiker',
		'Tinker'						=>	'Kesselflicker',
		'Woodsman'						=>	'Waldhüter',
		'Yeoman'						=>	'Freibauer',

		// Profile Admin area
		'core_sett_fs_gamesettings'		=> 'LOTRO Einstellungen',
		'uc_faction'					=> 'Fraktion',
		'uc_faction_help'				=> 'Die Fraktion im Spiel',
		'uc_fact_pvp'					=> 'MonsterPlay',
		'uc_fact_pve'					=> 'Freie Völker',
		'uc_server_loc'					=> 'Server Standort',
		'uc_server_loc_help'			=> 'Der Standort des LOTRO-Servers',
		'servername'					=> 'Servername',
		'servername_help'			=> 'Servername des Spielservers (z.B. Bullroarer)',		
		'uc_lockserver'					=> 'Servername unveränderbar machen',
		'uc_lockserver_help'			=> 'Der Servername für den Benutzer unveränderbar machen',
		'uc_importer_cache'				=> 'Leere Cache des Importers',
		'uc_importer_cache_help'		=> 'Löscht alle gecachten Daten aus der importer Class.',
		
		'uc_import_guild'				=> 'Gilde importieren',
		'uc_import_guild_help'			=> 'Importiere alle Mitglieder einer Gilde',
		'uc_importer_cache'				=> 'Leere Cache des Importers',
		'uc_importer_cache_help'		=> 'Löscht alle gecachten Daten aus der importer Class.',
		'uc_update_all'					=> 'Von MyLotro aktualisieren',
		'uc_update_all_help'			=> 'Alle Profilinformationen mit Profilerdaten von MyLotro aktualisieren',
		
		'uc_class_filter'				=> 'Klasse',
		'uc_class_nofilter'				=> 'Nicht filtern',
		'uc_guild_name'					=> 'Name der Gilde',
		'uc_filter_name'				=> 'Filter',
		'uc_level_filter'				=> 'Level größer als',
		'uc_imp_noguildname'			=> 'Es wurde kein Gildenname angegeben',
		'uc_gimp_loading'				=> 'Gildenmitglieder werden geladen, bitte warten...',
		'uc_gimp_header_fnsh'			=> 'Der Import der Gildenmitglieder wurde beendet. Beim Gildenimport werden nur der Charktername, die Rasse, die Klasse und das Level importiert. Um die restlichen Daten zu importieren, einfach den Updater benutzen.',
		'uc_importcache_cleared'		=> 'Der Cache des Importers wurde erfolgreich geleert.',
		'uc_delete_chars_onimport'		=> 'Charaktere im System löschen, die nicht mehr in der Gilde sind',
		
		'uc_noprofile_found'			=> 'Kein Profil gefunden',
		'uc_profiles_complete'			=> 'Profile erfolgreich aktualisiert',
		'uc_notyetupdated'				=> 'Keine neuen Daten (Inaktiver Charakter)',
		'uc_notactive'					=> 'Das Mitglied ist im EQDKP auf inaktiv gesetzt und wird daher übersprungen',
		'uc_error_with_id'				=> 'Fehler mit der Charakter ID, Charakter übersprungen',
		'uc_notyourchar'				=> 'ACHTUNG: Du versuchst gerade einen Charakter hinzuzufügen, der bereits in der Datenbank vorhanden ist und dir nicht zugewiesen ist. Aus Sicherheitsgründen ist diese Aktion nicht gestattet. Bitte kontaktiere einen Administrator zum Lösen dieses Problems oder versuche einen anderen Charakternamen einzugeben.',
		'uc_lastupdate'					=> 'Letzte Aktualisierung',
		"uc_updat_armory" 				=> "Von MyLotro aktualisieren",

		'uc_prof_import'				=> 'importieren',
		'uc_import_forw'				=> 'Start',
		'uc_imp_succ'					=> 'Die Daten wurden erfolgreich importiert',
		'uc_upd_succ'					=> 'Die Daten wurden erfolgreich aktualisiert',
		'uc_imp_failed'					=> 'Beim Import der Daten trat ein Fehler auf. Bitte versuche es erneut.',
		'uc_charname'					=> 'Charaktername',
		'servername'					=> 'Servername',
		'uc_charfound'					=> "Der Charakter  <b>%1\$s</b> wurde gefunden.",
		'uc_charfound2'					=> "Das letzte Update dieses Charakters war am <b>%1\$s</b>.",
		'uc_charfound3'					=> 'ACHTUNG: Beim Import werden bisher gespeicherte Daten überschrieben!',
		'uc_armory_imported'			=> 'Charakter erfolgreich importiert',
		'uc_armory_updated'				=> 'Charakter erfolgreich aktualisiert',
		'uc_armory_impfailed'			=> 'Charakter nicht importiert',
		'uc_armory_updfailed'			=> 'Charakter nicht aktualisiert',
		'uc_armory_impfail_reason'		=> 'Grund:',
		'uc_armory_impduplex'			=> 'Charakter ist bereits vorhanden',
		'uc_race'						=> 'Rasse',
		'uc_class'						=> 'Klasse',
		'us_level'						=> 'Niveau',
		
		'no_data'						=> 'Zu diesem Char konnten keine Informationen abgerufen werden. Bitte überprüfe ob der richtige Server in den Einstellungen eingestellt ist.',
		
		'vocation'						=> 'Berufung',
		'profession1'					=> 'Erster Beruf',
		'profession2'					=> 'Zweiter Beruf',
		'profession3'					=> 'Dritter Beruf',
		'profession1_proficiency'		=> 'Fachmann-Stufe erster Beruf',
		'profession2_proficiency'		=> 'Fachmann-Stufe zweiter Beruf',
		'profession3_proficiency'		=> 'Fachmann-Stufe dritter Beruf',
		'profession1_mastery'			=> 'Meister-Stufe erster Beruf',
		'profession2_mastery'			=> 'Meister-Stufe zweiter Beruf',
		'profession3_mastery'			=> 'Meister-Stufe dritter Beruf',
		
		// Profile Translation
		
		'uc_of'							=>	'von',
		'uc_stat_image'					=>	'de',
		'uc_might'						=>	'Macht',
		'uc_agility'					=>  'Bewegl.',	
		'uc_vitality'					=>	'Vitalität',
		'uc_will'						=>	'Wille',
		'uc_fate'						=>	'Schicksal',
		'uc_critical_hit'				=>	'Kritisch',
		'uc_finesse'					=>	'Finesse',
		'uc_block'						=>	'Blocken',
		'uc_parry'						=>	'Parieren',
		'uc_evade'						=>	'Ausw.',
		'uc_resistance'					=>	'Widerstand',
		'uc_crit_avoid'					=>	'Krit. Verm.',
		'uc_physical_mit'				=>	'Körperl. Ab.',
		'uc_tactical_mit'				=>	'Takt. Ab.',
		'uc_proficiency'				=>	'Fertigkeit',
		'uc_mastery'					=>	'Meisterschaft',
		
		
		//Events
		'event1' => 'Annùminas: Glinghant',
		'event2' => 'Annùminas: Feste Elendil',
		'event3' => 'Annùminas: Haudh Valandil',
		'event4' => 'Fornost: Wassergeist',
		'event5' => 'Fornost: Ergdeist',
		'event6' => 'Fornost: Feuergeist',
		'event7' => 'Fornost: Schattengeist',
		'event8' => 'Großes Hügelgrab: Das Labyrinth',
		'event9' => 'Großes Hügelgrab: Thadúr',
		'event10' => 'Großes Hügelgrab: Sambrog',
		'event11' => 'Helegrod: Drachen-Trakt',
		'event12' => 'Helegrod: Drachenbrut-Trakt',
		'event13' => 'Helegrod: Riesen-Trakt',
		'event14' => 'Helegrod: Spinnen-Trakt',
		'event15' => 'Sonstige Instanz: Halle der Nacht',
		'event16' => 'Sonstige Instanz: Herberge der Verlassenen',
		'event17' => 'Sonstige Instanz: Bibliothek in Tham Mírdain',
		'event18' => 'Sonstige Instanz: Schule in Tham Mírdain',
		'event19' => 'Isengart: Der Turm Orthanc',
		'event20' => 'Isengart: Die Gießerei',
		'event21' => 'Isengart: Dargnákh entfesselt',
		'event22' => 'Isengart: Gruben von Isengart',
		'event23' => 'Isengart: Am Rande des Fangorn',
		'event24' => 'Isengart: Draigochs Höhle',
		'event25' => 'Limklar-Schlucht: Wurzel des Fangorn',
		'event26' => 'Scharmützel (defensiv): Die Bruinenfurt',
		'event27' => 'Scharmützel (defensiv): Die Belagerung von Gondamon',
		'event28' => 'Scharmützel (defensiv): Das Gefecht am Amon Súl',
		'event29' => 'Scharmützel (defensiv): Die Verteidigung des tänzelnden Ponys',
		'event30' => 'Scharmützel (defensiv): Beschützer von Thangúlhad',
		'event31' => 'Scharmützel (defensiv): Der Kampf um den Tiefweg',
		'event32' => 'Scharmützel (defensiv): Der Kampf um den Weg der Schmiede',
		'event33' => 'Scharmützel (defensiv): Der Kampf um die Einunzwanzigste Halle',
		'event34' => 'Scharmützel (offensiv): Ärger in Buckelstadt',
		'event35' => 'Scharmützel (offensiv): Schlag gegen Dannenglor',
		'event36' => 'Scharmützel (offensiv): Der Durchbruch am Tor des Geisterbeschwörers',
		'event37' => 'Scharmützel (offensiv): Der Angriff auf das Versteck der Ringgeister',
		'event38' => 'Scharmützel (offensiv): Der Kampf im Turm',
		'event39' => 'Scharmützel (offensiv): Dieberei und Unheil',
		'event40' => 'Scharmützel (offensiv): Rettung in Núrz Gháshu',
		'event41' => 'Scharmützel (offensiv): Die Eisige Kluft',
		'event42' => 'Scharmützel (offensiv): Angriff bei Morgengrauen',
		'event43' => 'Scharmützel (offensiv): Der Sturm auf Methedras',
		'event44' => 'Scharmützel (überleben): Hügelgräberhöhen',
		'event45' => 'Angmar: Carn Dúm',
		'event46' => 'Angmar: Urugarth',
		'event47' => 'Angmar: Barad Gularan',
		'event48' => 'Angmar: Die Núrz-Gháshu-Spalte',
		'event49' => 'Dol Guldur: Barad Guldur',
		'event50' => 'Dol Guldur: Sammath Gúl',
		'event51' => 'Dol Guldur: Warg-Gehege',
		'event52' => 'Dol Guldur: Verliese',
		'event53' => 'Dol Guldur: Schwerthalle',
		'event54' => 'Garth Agarwen: Festung',
		'event55' => 'Garth Agarwen: Arborretum',
		'event56' => 'Garth Agarwen: Hügelgräber',
		'event57' => 'In ihrer Abwesenheit: Feste Dunoth',
		'event58' => 'In ihrer Abwesenheit: Sári-Surma',
		'event59' => 'In ihrer Abwesenheit: Verlorener Tempel',
		'event60' => 'In ihrer Abwesenheit: Der Nordhüttinger-Hof',
		'event61' => 'In ihrer Abwesenheit: Steinhöhe',
		'event62' => 'Lothlórien: Dár Narbugud',
		'event63' => 'Lothlórien: Hallen der Handwerkskunst',
		'event64' => 'Lothlórien: Die Spiegeelhallen von Lumul-nar',
		'event65' => 'Lothlórien: Die Wasserräder: Nalá-dúm',
		'event66' => 'Moria: Der abscheuliche Schlund',
		'event67' => 'Moria: Filikul',
		'event68' => 'Moria: Die große Treppe',
		'event69' => 'Moria: Skúmfíl',
		'event70' => 'Moria: Die Schmieden von Khazad-dúm',
		'event71' => 'Moria: Fil Gashan',
		'event72' => 'Moria: Schattenbinge',
		'event73' => 'Moria: Die Sechzehnte Halle',
		'event74' => 'Moria: Der vergessene Schatz',
		'event75' => 'Bilwiss-Dorf: Thronsaal',
		'event76' => 'Scharmützel (12er)',
		'event77' => 'Scharmützel (6er)',
		'event78' => 'Scharmützel (3er)',
		'event79' => 'Sommer: Boss aus dem Gewölbe: Thrâng',
		'event80' => 'Sommer: Das Perfekte Picknick',
		'event81' => 'Yule: Boss aus dem Gewölbe: Storvâgûn',
		'event82' => 'Yule: Die Schlacht bei Frostfels',
		'event83' => 'Weg nach Erebor: Flucht zum einsamen Berg',
		'event84' => 'Weg nach Erebor: Iobars Gipfel',
		'event85' => 'Weg nach Erebor: Sitz des großen Bilwisses',
		'event86' => 'Weg nach Erebor: Die Schlacht um Erebor',
		'event87' => 'Weg nach Erebor: Die Glocken von Tal',
		'event88' => 'Weg nach Erebor: Smaugs Feuer',
		'event89' => 'Weg nach Erebor: Netze des Krabbeltals',
		'event90' => 'Epische Schlachten: Helms Damm',
		'event91' => 'Epische Schlachten: Klammwall',
		'event92' => 'Epische Schlachten: Klammtal',
		'event93' => 'Epische Schlachten: Die glitzernde Grotte',
		'event94' => 'Epische Schlachten: Die Hornburg',
		'event95' => 'Epische Schlachten: Rückeroberung von Pelargir',
		'event96' => 'Epische Schlachten: Die Verteidigung von Minas Tirith',
		'event97' => 'Epische Schlachten: Hammer der Unterwelt',
		'event98' => 'Osgiliath: Versunkene Labyrinth',
		'event99' => 'Osgiliath: Sternendom',
		'event100' => 'Osgiliath: Die zerstörte Stadt',
		'event101' => 'Die Schlacht auf dem Pelennor: Blut der Schwarzen Schlange',
		'event102' => 'Die Schlacht auf dem Pelennor: Die Kais von Harlond',
		'event103' => 'Die Schlacht auf dem Pelennor: Die Stumme Straße',
		'event104' => 'Die Schlacht auf dem Pelennor: Thron des Schreckensherren',
		'event105' => 'Ebene von Gorgoroth: Der Hof von Seregost',
		'event106' => 'Ebene von Gorgoroth: Die Verliese von Naerband',
		'event107' => 'Ebene von Gorgoroth: Der Abgrund von Mordath',
		'event108' => 'Graues Gebirge: Höglen des Thrumfall',
		'event109' => 'Graues Gebirge: Funkenfeste',
		'event110' => 'Graues Gebirge: Thikil-gundun',
		'event111' => 'Graues Gebirge: Der Amboss der Winterschmiede',
		'event112' => 'Schwerteltal: Die Tiefen von Kidzuhl-kâlah',
		'event113' => 'Minas Morgul: Eithl Gwaur, der Dreckbrunnen',
		'event114' => 'Minas Morgul: Gath Daeroval, der Schattenhorst',
		'event115' => 'Minas Morgul: Gorthad Nûr, das Tiefengrab',
		'event116' => 'Minas Morgul: Die Grau von Morgul',
		'event117' => 'Minas Morgul: Bâr Nírnaeth, die Häuser der Wehklagen',
		'event118' => 'Minas Morgul: Ghashan-kútot, die Hallen des dunkelen Wissens',
		'event119' => 'Minas Morgul: Die Gefallenen Könige',
		'event120' => 'Minas Morgul: Remmorchant, das Netz der Finsterniss',
		'event121' => 'Krieg der Drei Gipfel: Amdân Dammul, die Blutige Schwelle',
		'event122' => 'Krieg der Drei Gipfel: Shakalush, die Stufenschlacht',
		'event123' => 'Other instances: Askâd-mazal, die Kammer der Schatten',
	),
);
?>
