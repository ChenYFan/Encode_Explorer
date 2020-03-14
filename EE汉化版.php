<?php
/***************************************************************************
 *
 * 
 * Encode Explorer
 *
 * Author : Marek Rei (marek ät marekrei dot com)
 * Version : 6.4.1
 * Homepage : encode-explorer.siineiolekala.net
 *
 *
 * NB!:If you change anything, save with UTF-8! Otherwise you may
 *     encounter problems, especially when displaying images.
 *  汉化：ChenYF
 ***************************************************************************/

/***************************************************************************/
/*   HERE ARE THE SETTINGS FOR CONFIGURATION                               */
/***************************************************************************/

//
// Initialising variables. Don't change these.
//

$_CONFIG = array();
$_ERROR = "";
$_START_TIME = microtime(TRUE);

/*
 * GENERAL SETTINGS
 */

//
// Choose a language. See below in the language section for options.
// Default: $_CONFIG['lang'] = "en";
// 默认语言
$_CONFIG['lang'] = "zh";

//
// Display thumbnails when hovering over image entries in the list.
// Common image types are supported (jpeg, png, gif).
// Pdf files are also supported but require ImageMagick to be installed.
// Default: $_CONFIG['thumbnails'] = true;
// 
$_CONFIG['thumbnails'] = true;

//
// Maximum sizes of the thumbnails.
// Default: $_CONFIG['thumbnails_width'] = 200;
// Default: $_CONFIG['thumbnails_height'] = 200;
//
$_CONFIG['thumbnails_width'] = 300;
$_CONFIG['thumbnails_height'] = 300;

//
// Mobile interface enabled. true/false
// Default: $_CONFIG['mobile_enabled'] = true;
//
$_CONFIG['mobile_enabled'] = true;

//
// Mobile interface as the default setting. true/false
// Default: $_CONFIG['mobile_default'] = false;
//
$_CONFIG['mobile_default'] = false;

/*
 * USER INTERFACE
 */

//
// Will the files be opened in a new window? true/false
// Default: $_CONFIG['open_in_new_window'] = false;
//
$_CONFIG['open_in_new_window'] = false;

//
// How deep in subfolders will the script search for files?
// Set it larger than 0 to display the total used space.
// Default: $_CONFIG['calculate_space_level'] = 0;
//
$_CONFIG['calculate_space_level'] = 0;

//
// Will the page header be displayed? 0=no, 1=yes.
// Default: $_CONFIG['show_top'] = true;
//
$_CONFIG['show_top'] = true;

//
// The title for the page
// Default: $_CONFIG['main_title'] = "Encode Explorer";
// 主标题
$_CONFIG['main_title'] = "CYF的私有云(●'◡'●)";

//
// The secondary page titles, randomly selected and displayed under the main header.
// For example: $_CONFIG['secondary_titles'] = array("Secondary title", "&ldquo;Secondary title with quotes&rdquo;");
// Default: $_CONFIG['secondary_titles'] = array();
//
$_CONFIG['secondary_titles'] = array();

//
// Display breadcrumbs (relative path of the location).
// Default: $_CONFIG['show_path'] = true;
//
$_CONFIG['show_path'] = true;

//
// Display the time it took to load the page.
// Default: $_CONFIG['show_load_time'] = true;
//
$_CONFIG['show_load_time'] = true;

//
// The time format for the "last changed" column.
// Default: $_CONFIG['time_format'] = "d.m.y H:i:s";
//
$_CONFIG['time_format'] = "d.m.y H:i:s";

//
// Charset. Use the one that suits for you.
// Default: $_CONFIG['charset'] = "UTF-8";
//
$_CONFIG['charset'] = "UTF-8";

/*
* PERMISSIONS
*/

//
// The array of folder names that will be hidden from the list.
// Default: $_CONFIG['hidden_dirs'] = array();
//
$_CONFIG['hidden_dirs'] = array("images", ".heroku", "vendor", "Procfile", ".composer", ".profile.d");

//
// Filenames that will be hidden from the list.
// Default: $_CONFIG['hidden_files'] = array(".ftpquota", "index.php", "index.php~", ".htaccess", ".htpasswd");
//
$_CONFIG['hidden_files'] = array(".ftpquota", "index.php", "index.php~", ".htaccess", ".htpasswd", ".composer~", ".heroku", ".profile.d", "images", "vendor", "composer.json", "Procfile","404.php","404.jpg","favicon.png");

//
// Whether authentication is required to see the contents of the page.
// If set to false, the page is public.
// If set to true, you should specify some users as well (see below).
// Important: This only prevents people from seeing the list.
// They will still be able to access the files with a direct link.
// Default: $_CONFIG['require_login'] = false;
//
$_CONFIG['require_login'] = false;

//
// Usernames and passwords for restricting access to the page.
// The format is: array(username, password, status)
// Status can be either "user" or "admin". User can read the page, admin can upload and delete.
// For example: $_CONFIG['users'] = array(array("username1", "password1", "user"), array("username2", "password2", "admin"));
// You can also keep require_login=false and specify an admin.
// That way everyone can see the page but username and password are needed for uploading.
// For example: $_CONFIG['users'] = array(array("username", "password", "admin"));
// Default: $_CONFIG['users'] = array();
//
$_CONFIG['users'] = array();

//
// Permissions for uploading, creating new directories and deleting.
// They only apply to admin accounts, regular users can never perform these operations.
// Default:
// $_CONFIG['upload_enable'] = true;
// $_CONFIG['newdir_enable'] = true;
// $_CONFIG['delete_enable'] = false;
//
$_CONFIG['upload_enable'] = true;
$_CONFIG['newdir_enable'] = true;
$_CONFIG['delete_enable'] = false;

/*
 * UPLOADING
 */

//
// List of directories where users are allowed to upload.
// For example: $_CONFIG['upload_dirs'] = array("./myuploaddir1/", "./mydir/upload2/");
// The path should be relative to the main directory, start with "./" and end with "/".
// All the directories below the marked ones are automatically included as well.
// If the list is empty (default), all directories are open for uploads, given that the password has been set.
// Default: $_CONFIG['upload_dirs'] = array();
//
$_CONFIG['upload_dirs'] = array();

//
// MIME type that are allowed to be uploaded.
// For example, to only allow uploading of common image types, you could use:
// $_CONFIG['upload_allow_type'] = array("image/png", "image/gif", "image/jpeg");
// Default: $_CONFIG['upload_allow_type'] = array();
//
$_CONFIG['upload_allow_type'] = array();

//
// File extensions that are not allowed for uploading.
// For example: $_CONFIG['upload_reject_extension'] = array("php", "html", "htm");
// Default: $_CONFIG['upload_reject_extension'] = array();
//
$_CONFIG['upload_reject_extension'] = array("php", "php2", "php3", "php4", "php5", "phtml");

//
// By default, apply 0755 permissions to new directories
//
// The mode parameter consists of three octal number components specifying
// access restrictions for the owner, the user group in which the owner is
// in, and to everybody else in this order.
//
// See: https://php.net/manual/en/function.chmod.php
//
// Default: $_CONFIG['new_dir_mode'] = 0755;
//
$_CONFIG['new_dir_mode'] = 0755;

//
// By default, apply 0644 permissions to uploaded files
//
// The mode parameter consists of three octal number components specifying
// access restrictions for the owner, the user group in which the owner is
// in, and to everybody else in this order.
//
// See: https://php.net/manual/en/function.chmod.php
//
// Default: $_CONFIG['upload_file_mode'] = 0644;
//
$_CONFIG['upload_file_mode'] = 0644;

/*
 * LOGGING
 */

//
// Upload notification e-mail.
// If set, an e-mail will be sent every time someone uploads a file or creates a new dirctory.
// Default: $_CONFIG['upload_email'] = "";
//
$_CONFIG['upload_email'] = "";

//
// Logfile name. If set, a log line will be written there whenever a directory or file is accessed.
// For example: $_CONFIG['log_file'] = ".log.txt";
// Default: $_CONFIG['log_file'] = "";
//
$_CONFIG['log_file'] = "";

/*
 * SYSTEM
 */


//
// The starting directory. Normally no need to change this.
// Use only relative subdirectories!
// For example: $_CONFIG['starting_dir'] = "./mysubdir/";
// Default: $_CONFIG['starting_dir'] = ".";
//
$_CONFIG['starting_dir'] = ".";

//
// Location in the server. Usually this does not have to be set manually.
// Default: $_CONFIG['basedir'] = "";
//
$_CONFIG['basedir'] = "";

//
// Big files. If you have some very big files (>4GB), enable this for correct
// file size calculation.
// Default: $_CONFIG['large_files'] = false;
//
$_CONFIG['large_files'] = false;

//
// The session name, which is used as a cookie name.
// Change this to something original if you have multiple copies in the same space
// and wish to keep their authentication separate.
// The value can contain only letters and numbers. For example: MYSESSION1
// More info at: http://www.php.net/manual/en/function.session-name.php
// Default: $_CONFIG['session_name'] = "";
//
$_CONFIG['session_name'] = "";

/***************************************************************************/
/*   TÕLKED                                                                */
/*                                                                         */
/*   TRANSLATIONS.                                                         */
/***************************************************************************/

$_TRANSLATIONS = array();
// zh(简体中文)
$_TRANSLATIONS["zh"] = array(
	"file_name" => "文件名",
	"size" => "大小",
	"last_changed" => "最后一次上传时间",
	"total_used_space" => "总大小",
	"free_space" => "剩余空间",
	"password" => "密码：",
	"upload" => "上传",
	"failed_upload" => "上传失败!",
	"failed_move" => "移动失败!",
	"wrong_password" => "错误的密码",
	"make_directory" => "新建文件夹",
	"new_dir_failed" => "新建文件夹失败!",
	"chmod_dir_failed" => "改文件(夹)名失败!",
	"unable_to_read_dir" => "拒绝读取!",
	"location" => "定位",
	"root" => "文件",
	"log_file_permission_error" => "日志拒写.",
	"upload_not_allowed" => "拒绝上传!",
	"upload_dir_not_writable" => "文件夹拒写.",
	"mobile_version" => "手机版",
	"standard_version" => "电脑板",
	"page_load_time" => "文件在 %.2f 毫秒内加载完毕",
	"wrong_pass" => "错误的密码!",
	"username" => "用户名",
	"log_in" => "登陆",
	"upload_type_not_allowed" => "禁止上传!",
	"del" => "删除",
	"log_out" => "登出"
);

// Albanian
$_TRANSLATIONS["al"] = array(
	"file_name" => "Emri Skedarit",
	"size" => "Madhësia",
	"last_changed" => "Ndryshuar",
	"total_used_space" => "Memorija e përdorur total",
	"free_space" => "Memorija e lirë",
	"password" => "Fjalëkalimi",
	"upload" => "Ngarko skedarë",
	"failed_upload" => "Ngarkimi i skedarit dështoi!",
	"failed_move" => "Lëvizja e skedarit në udhëzuesin e saktë deshtoi!",
	"wrong_password" => "Fjalëkalimi i Gabuar!!",
	"make_directory" => "New dir",
	"new_dir_failed" => "Failed to create directory",
	"chmod_dir_failed" => "Failed to change directory rights",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Location",
	"root" => "Root"
);

// Czech
$_TRANSLATIONS["cz"] = array(
	"file_name" => "Název souboru",
	"size" => "Velikost",
	"last_changed" => "Změněno",
	"total_used_space" => "Obsazený prostor",
	"free_space" => "Volný prostor",
	"password" => "Heslo",
	"upload" => "Nahrát",
	"failed_upload" => "Nahrávání se nezdařilo!",
	"failed_move" => "Přesun souboru do určeného adresáře se nezdařil!",
	"wrong_password" => "Chybné heslo",
	"make_directory" => "Nový adresář",
	"new_dir_failed" => "Vytvoření adresáře se nezdařilo",
	"chmod_dir_failed" => "Změna práv adresáře se nezdařila",
	"unable_to_read_dir" => "Chyba při čtení adresáře",
	"location" => "Umístění",
	"root" => "Kořenový adresář",
	"log_file_permission_error" => "Skript nemá oprávnění k zápisu do souboru protokolu.",
	"upload_not_allowed" => "Konfigurační skript neumožňuje nahrávání v tomto adresáři.",
	"upload_dir_not_writable" => "Tento adresář nemá oprávnění k zápisu.",
	"mobile_version" => "Zobrazení pro mobil",
	"standard_version" => "Standardní zobrazení",
	"page_load_time" => "Stránka nahrána za %.2f ms",
	"wrong_pass" => "Špatné uživatelské jméno nebo heslo",
	"username" => "Uživatelské jméno",
	"log_in" => "Přihlásit se",
	"upload_type_not_allowed" => "Tento typ souboru není povolen pro nahrávání.",
	"del" => "Smazat",
	"log_out" => "Odhlásit se"
);

// Dutch
$_TRANSLATIONS["nl"] = array(
	"file_name" => "Bestandsnaam",
	"size" => "Omvang",
	"last_changed" => "Laatst gewijzigd",
	"total_used_space" => "Totaal gebruikte ruimte",
	"free_space" => "Beschikbaar",
	"password" => "Wachtwoord",
	"upload" => "Upload",
	"failed_upload" => "Fout bij uploaden van bestand!",
	"failed_move" => "Fout bij het verplaatsen van tijdelijk uploadbestand!",
	"wrong_password" => "Fout wachtwoord!",
	"make_directory" => "Nieuwe folder",
	"new_dir_failed" => "Fout bij aanmaken folder!",
	"chmod_dir_failed" => "Rechten konden niet gewijzigd worden!",
	"unable_to_read_dir" => "Niet mogelijk om directorie te lezen",
	"location" => "Locatie",
	"root" => "Root",
	"log_file_permission_error" => "Script heeft geen toegang tot het logbestand.",
	"upload_not_allowed" => "Uploaden van bestanden is niet toegestaan.",
	"upload_dir_not_writable" => "Het is niet toegestaan in deze directorie bestanden te plaatsen.",
	"mobile_version" => "Mobiele weergave",
	"standard_version" => "Standaard weergave",
	"page_load_time" => "Pagina geladen in %.2f ms",
	"wrong_pass" => "Foutieve gebruikersnaam of wachtwoord",
	"username" => "Gebruikersnaam",
	"log_in" => "Inloggen",
	"upload_type_not_allowed" => "Dit type bestand is niet toegestaan.",
	"del" => "Verwijder", // short for Delete
	"log_out" => "Uitloggen"
);

// English
$_TRANSLATIONS["en"] = array(
	"file_name" => "File name",
	"size" => "Size",
	"last_changed" => "Last updated",
	"total_used_space" => "Total space used",
	"free_space" => "Free space",
	"password" => "Password",
	"upload" => "Upload",
	"failed_upload" => "Failed to upload the file!",
	"failed_move" => "Failed to move the file into the right directory!",
	"wrong_password" => "Wrong password",
	"make_directory" => "New directory",
	"new_dir_failed" => "Failed to create directory",
	"chmod_dir_failed" => "Failed to change directory rights",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Location",
	"root" => "Root",
	"log_file_permission_error" => "The script does not have permissions to write the log file.",
	"upload_not_allowed" => "The script configuration does not allow uploading in this directory.",
	"upload_dir_not_writable" => "This directory does not have write permissions.",
	"mobile_version" => "Mobile view",
	"standard_version" => "Standard view",
	"page_load_time" => "Page loaded in %.2f ms",
	"wrong_pass" => "Wrong username or password",
	"username" => "Username",
	"log_in" => "Log in",
	"upload_type_not_allowed" => "This file type is not allowed for uploading.",
	"del" => "Delete",
	"log_out" => "Log out"
);

// Estonian
$_TRANSLATIONS["et"] = array(
	"file_name" => "Faili nimi",
	"size" => "Suurus",
	"last_changed" => "Viimati muudetud",
	"total_used_space" => "Kokku kasutatud",
	"free_space" => "Vaba ruumi",
	"password" => "Parool",
	"upload" => "Uploadi",
	"failed_upload" => "Faili ei &otilde;nnestunud serverisse laadida!",
	"failed_move" => "Faili ei &otilde;nnestunud &otilde;igesse kausta liigutada!",
	"wrong_password" => "Vale parool",
	"make_directory" => "Uus kaust",
	"new_dir_failed" => "Kausta loomine ebaõnnestus",
	"chmod_dir_failed" => "Kausta õiguste muutmine ebaõnnestus",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Asukoht",
	"root" => "Peakaust"
);

// Finnish
$_TRANSLATIONS["fi"] = array(
	"file_name" => "Tiedoston nimi",
	"size" => "Koko",
	"last_changed" => "Muokattu",
	"total_used_space" => "Yhteenlaskettu koko",
	"free_space" => "Vapaa tila",
	"password" => "Salasana",
	"upload" => "Lisää tiedosto",
	"failed_upload" => "Tiedoston lisäys epäonnistui!",
	"failed_move" => "Tiedoston siirto kansioon epäonnistui!",
	"wrong_password" => "Väärä salasana",
	"make_directory" => "Uusi kansio",
	"new_dir_failed" => "Uuden kansion luonti epäonnistui!",
	"chmod_dir_failed" => "Kansion käyttäjäoikeuksien muuttaminen epäonnistui!",
	"unable_to_read_dir" => "Kansion sisältöä ei voi lukea.",
	"location" => "Paikka",
	"root" => "Juurihakemisto",
	"log_file_permission_error" => "Ohjelman ei ole sallittu kirjoittaa lokiin.",
	"upload_not_allowed" => "Ohjelman asetukset eivät salli tiedoston lisäämistä tähän kansioon.",
	"upload_dir_not_writable" => "Kansioon tallentaminen epäonnistui.",
	"mobile_version" => "Mobiilinäkymä",
	"standard_version" => "Tavallinen näkymä",
	"page_load_time" => "Sivu ladattu %.2f ms:ssa",
	"wrong_pass" => "Väärä käyttäjätunnus tai salasana",
	"username" => "Käyttäjätunnus",
	"log_in" => "Kirjaudu sisään",
	"log_out" => "Kirjaudu ulos",
	"upload_type_not_allowed" => "Tämän tiedostotyypin lisääminen on estetty.",
	"del" => "Poista"
);

// French
$_TRANSLATIONS["fr"] = array(
	"file_name" => "Nom de fichier",
	"size" => "Taille",
	"last_changed" => "Ajouté",
	"total_used_space" => "Espace total utilisé",
	"free_space" => "Espace libre",
	"password" => "Mot de passe",
	"upload" => "Envoyer un fichier",
	"failed_upload" => "Erreur lors de l'envoi",
	"failed_move" => "Erreur lors du changement de dossier",
	"wrong_password" => "Mauvais mot de passe",
	"make_directory" => "Nouveau dossier",
	"new_dir_failed" => "Erreur lors de la création du dossier",
	"chmod_dir_failed" => "Impossible de changer les permissions du dossier",
	"unable_to_read_dir" => "Impossible de lire le dossier",
	"location" => "Localisation",
	"root" => "Racine",
	"log_file_permission_error" => "Le script ne possède pas les permissions pour écrire un fichier d'enregistrement.",
	"upload_not_allowed" => "La configuration actuelle ne permet de déposer un fichier dans ce dossier.",
	"upload_dir_not_writable" => "Ce dossier ne possède pas les permissions en écriture.",
	"mobile_version" => "Vue mobile",
	"standard_version" => "Vue standard",
	"page_load_time" => "Page chargée en %.2f ms",
	"wrong_pass" => "Identifiant ou mot de passe incorrect",
	"username" => "Identifiant",
	"log_in" => "Connexion",
	"upload_type_not_allowed" => "Ce format de fichier n'est pas autorisé.",
	"del" => "Effacer",
	"log_out" => "Déconnexion"
);

// German
$_TRANSLATIONS["de"] = array(
	"file_name" => "Dateiname",
	"size" => "Gr&ouml;&szlig;e",
	"last_changed" => "Letzte &Auml;nderung",
	"total_used_space" => "Benutzter Speicherplatz",
	"free_space" => "Freier Speicherplatz",
	"password" => "Passwort",
	"upload" => "Upload",
	"failed_upload" => "Upload ist fehlgeschlagen!",
	"failed_move" => "Verschieben der Datei ist fehlgeschlagen!",
	"wrong_password" => "Falsches Passwort",
	"make_directory" => "Neuer Ordner",
	"new_dir_failed" => "Erstellen des Ordners fehlgeschlagen",
	"chmod_dir_failed" => "Ver&auml;nderung der Zugriffsrechte des Ordners fehlgeschlagen",
	"unable_to_read_dir" => "Ordner konnte nicht gelesen werden",
	"location" => "Ort",
	"root" => "Wurzelverzeichnis",
	"log_file_permission_error" => "Das Script kann wegen fehlenden Berechtigungen keine Log Datei schreiben.",
	"upload_not_allowed" => "Die Scriptkonfiguration erlaubt kein Hochladen in dieses Verzeichnis.",
	"upload_dir_not_writable" => "Dieser Ordner besitzt keine Schreibrechte.",
	"mobile_version" => "Mobile Ansicht",
	"standard_version" => "Normale Ansicht",
	"page_load_time" => "Die Seite wurde in %.2f ms geladen",
	"wrong_pass" => "Benutzername oder Kennwort falsch",
	"username" => "Benutzername",
	"log_in" => "Einloggen",
	"upload_type_not_allowed" => "Dieser Dateityp darf nicht hochgeladen werden.",
	"del" => "Entfernen",
	"log_out" => "Ausloggen"
);

// Greek
$_TRANSLATIONS["el"] = array(
	"file_name" => "Όνομα αρχείου",
	"size" => "Μέγεθος",
	"last_changed" => "Τροποποιημένο",
	"total_used_space" => "Χρησιμοποιημένος χώρος",
	"free_space" => "Ελεύθερος χώρος",
	"password" => "Εισάγεται κωδικό",
	"upload" => "Φόρτωση",
	"failed_upload" => "Αποτυχία φόρτωσης αρχείου!",
	"failed_move" => "Αποτυχία μεταφοράς αρχείου στον κατάλληλο φάκελο!",
	"wrong_password" => "Λάθος κωδικός",
	"make_directory" => "Δημιουργία νέου φακέλου",
	"new_dir_failed" => "Αποτυχία δημιουργίας νέου φακέλου",
	"chmod_dir_failed" => "Αποτυχία τροποποίησης δικαιωμάτων φακέλου",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Location",
	"root" => "Root"
);

// Hungarian
$_TRANSLATIONS["hu"] = array(
	"file_name" => "Fájl név",
	"size" => "Méret",
	"last_changed" => "Utolsó módosítás",
	"total_used_space" => "Összes elfoglalt terület",
	"free_space" => "Szabad terület",
	"password" => "Jelszó",
	"upload" => "Feltöltés",
	"failed_upload" => "A fájl feltöltése nem sikerült!",
	"failed_move" => "A fájl mozgatása nem sikerült!",
	"wrong_password" => "Hibás jelszó",
	"make_directory" => "Új mappa",
	"new_dir_failed" => "A mappa létrehozása nem sikerült",
	"chmod_dir_failed" => "A mappa jogainak megváltoztatása nem sikerült",
	"unable_to_read_dir" => "A mappa nem olvasható",
	"location" => "Hely",
	"root" => "Gyökér",
	"log_file_permission_error" => "A log fájl írása jogosultsági okok miatt nem sikerült.",
	"upload_not_allowed" => "Ebbe a mappába a feltöltés nem engedélyezett.",
	"upload_dir_not_writable" => "A mappa nem írható.",
	"mobile_version" => "Mobil nézet",
	"standard_version" => "Web nézet",
	"page_load_time" => "Letöltési id? %.2f ms",
	"wrong_pass" => "Rossz felhasználónév vagy jelszó",
	"username" => "Felhasználónév",
	"log_in" => "Belépés",
	"upload_type_not_allowed" => "A fájltípus feltöltése tiltott."
);

// Italian
$_TRANSLATIONS["it"] = array(
	"file_name" => "Nome file",
	"size" => "Dimensione",
	"last_changed" => "Ultima modifica",
	"total_used_space" => "Totale spazio usato",
	"free_space" => "Spazio disponibile",
	"password" => "Parola chiave",
	"upload" => "Caricamento file",
	"failed_upload" => "Caricamento del file fallito!",
	"failed_move" => "Spostamento del file nella cartella fallito!",
	"wrong_password" => "Password sbagliata",
	"make_directory" => "Nuova cartella",
	"new_dir_failed" => "Creazione cartella fallita!",
	"chmod_dir_failed" => "Modifica dei permessi della cartella fallita!",
	"unable_to_read_dir" => "Non abilitato a leggere la cartella",
	"location" => "Posizione",
	"root" => "Indice",
	"log_file_permission_error" => "Lo script non ha i permessi per scrivere il file di log.",
	"upload_not_allowed" => "La configurazione dello script non permette l'upload in questa cartella.",
	"upload_dir_not_writable" => "Questa cartella non ha i permessi di scrittura.",
	"mobile_version" => "Visualizzazione Mobile",
	"standard_version" => "Visualizzazione Standard",
	"page_load_time" => "Page aperta in %.2f min",
	"wrong_pass" => "Username o password errati",
	"username" => "Username",
	"log_in" => "Log in",
	"upload_type_not_allowed" => "Questo formato di file non è abilitato per l'upload.",
	"del" => "Cancella", // short for Delete
	"log_out" => "Esci"
);

// Norwegian
$_TRANSLATIONS["no"] = array(
	"file_name" => "Navn",
	"size" => "Størrelse",
	"last_changed" => "Endret",
	"total_used_space" => "Brukt plass",
	"free_space" => "Resterende plass",
	"password" => "Passord",
	"upload" => "Last opp",
	"failed_upload" => "Opplasting gikk galt",
	"failed_move" => "Kunne ikke flytte objektet",
	"wrong_password" => "Feil passord",
	"make_directory" => "Ny mappe",
	"new_dir_failed" => "Kunne ikke lage ny mappe",
	"chmod_dir_failed" => "Kunne ikke endre rettigheter",
	"unable_to_read_dir" => "Kunne ikke lese mappen",
	"location" => "Område",
	"root" => "Rot"
);

//Polish
$_TRANSLATIONS["pl"] = array(
	"file_name" => "Nazwa Pliku",
	"size" => "Rozmiar",
	"last_changed" => "Data Zmiany",
	"total_used_space" => "Total used space",
	"free_space" => "Wolnego obszaru",
	"password" => "Haslo",
	"upload" => "Przeslij",
	"failed_upload" => "Przeslanie pliku nie powiodlo sie",
	"failed_move" => "Przenosienie pliku nie powidlo sie!",
	"wrong_password" => "Niepoprawne haslo",
	"make_directory" => "Nowy folder",
	"new_dir_failed" => "Blad podczas tworzenia nowego foldera",
	"chmod_dir_failed" => "Blad podczas zmiany uprawnienia foldera",
	"unable_to_read_dir" => "Odczytanie foldera nie powiodlo sie",
	"location" => "Miejsce",
	"root" => "Root",
	"log_file_permission_error" => "Brak uprawnien aby utowrzyc dziennik dzialan.",
	"upload_not_allowed" => "Konfiguracja zabrania przeslanie pliku do tego foldera.",
	"upload_dir_not_writable" => "Nie mozna zapisac pliku do tego foldera.",
	"mobile_version" => "Wersja Mobile",
	"standard_version" => "Widok standardowy",
	"page_load_time" => "Zaladowano w %.2f ms",
	"wrong_pass" => "Nie poprawna nazwa uzytkownika lub hasla",
	"username" => "Uzytkownik",
	"log_in" => "Zaloguj sie",
	"upload_type_not_allowed" => "Ten rodazaj pliku jest zabrioniony."
);

// Portuguese (Brazil)
$_TRANSLATIONS["pt_BR"] = array(
	"file_name" => "Nome do arquivo",
	"size" => "Tamanho",
	"last_changed" => "Modificado em",
	"total_used_space" => "Total de espaço utilizado",
	"free_space" => "Espaço livre",
	"password" => "Senha",
	"upload" => "Enviar",
	"failed_upload" => "Falha ao enviar o arquivo!",
	"failed_move" => "Falha ao mover o arquivo para o diretório correto!",
	"wrong_password" => "Senha errada",
	"make_directory" => "Nova pasta",
	"new_dir_failed" => "Falha ao criar diretório",
	"chmod_dir_failed" => "Falha ao mudar os privilégios do diretório",
	"unable_to_read_dir" => "Não foi possível ler o diretório",
	"location" => "Localização",
	"root" => "Raíz",
	"log_file_permission_error" => "O script não tem permissão para escrever o arquivo de log.",
	"upload_not_allowed" => "A configuração do script não permite envios neste diretório.",
	"upload_dir_not_writable" => "Não há permissão para escrita neste diretório.",
	"mobile_version" => "Versão Móvel",
	"standard_version" => "Versão Padrão",
	"page_load_time" => "Página carregada em %.2f ms",
	"wrong_pass" => "Nome de usuário ou senha errados",
	"username" => "Nome de Usuário",
	"log_in" => "Log in",
	"upload_type_not_allowed" => "Não é permitido envio de arquivos deste tipo.",
	"del" => "Deletar",
	"log_out" => "Log out"
);

// Portuguese (Portugal)
$_TRANSLATIONS["pt_PT"] = array(
	"file_name" => "Nome do ficheiro",
	"size" => "Tamanho",
	"last_changed" => "Modificado em",
	"total_used_space" => "Total de espaço utilizado",
	"free_space" => "Espaço livre",
	"password" => "Palavra-passe",
	"upload" => "Enviar",
	"failed_upload" => "Falha ao enviar o ficheiro!",
	"failed_move" => "Falha ao mover o ficheiro para a pasta correcta!",
	"wrong_password" => "Palavra-passe errada",
	"make_directory" => "Nova pasta",
	"new_dir_failed" => "Falha ao criar pasta",
	"chmod_dir_failed" => "Falha ao mudar os privilégios da pasta",
	"unable_to_read_dir" => "Não foi possível ler a pasta",
	"location" => "Localização",
	"root" => "Raíz",
	"log_file_permission_error" => "O script não tem permissão para escrever o ficheiro de log.",
	"upload_not_allowed" => "A configuração do script não permite envios para esta pasta.",
	"upload_dir_not_writable" => "Não há permissão para escrita nesta pasta.",
	"mobile_version" => "Versão Móvel",
	"standard_version" => "Versão Padrão",
	"page_load_time" => "Página carregada em %.2f ms",
	"wrong_pass" => "Nome de utilizador ou palavra-passe incorrectos",
	"username" => "Nome de utilizador",
	"log_in" => "Entrar",
	"upload_type_not_allowed" => "Não é permitido o envio de ficheiros deste tipo.",
	"del" => "Apagar",
	"log_out" => "Sair"
);

// Romanian
$_TRANSLATIONS["ro"] = array(
	"file_name" => "Nume fisier",
	"size" => "Marime",
	"last_changed" => "Ultima modificare",
	"total_used_space" => "Spatiu total utilizat",
	"free_space" => "Spatiu disponibil",
	"password" => "Parola",
	"upload" => "Incarcare fisier",
	"failed_upload" => "Incarcarea fisierului a esuat!",
	"failed_move" => "Mutarea fisierului in alt director a esuat!",
	"wrong_password" => "Parol gresita!",
	"make_directory" => "Director nou",
	"new_dir_failed" => "Eroare la crearea directorului",
	"chmod_dir_failed" => "Eroare la modificarea drepturilor pe director",
	"unable_to_read_dir" => "Nu s-a putut citi directorul",
	"location" => "Locatie",
	"root" => "Root"
);

// Russian
$_TRANSLATIONS["ru"] = array(
	"file_name" => "Имя файла",
	"size" => "Размер",
	"last_changed" => "Последнее изменение",
	"total_used_space" => "Всего использовано",
	"free_space" => "Свободно",
	"password" => "Пароль",
	"upload" => "Загрузка",
	"failed_upload" => "Не удалось загрузить файл!",
	"failed_move" => "Не удалось переместить файл в нужную папку!",
	"wrong_password" => "Неверный пароль",
	"make_directory" => "Новая папка",
	"new_dir_failed" => "Не удалось создать папку",
	"chmod_dir_failed" => "Не удалось изменить права доступа к папке",
	"unable_to_read_dir" => "Не возможно прочитать папку",
	"location" => "Расположение",
	"root" => "Корневая папка",
	"log_file_permission_error" => "Скрипт не имеет прав для записи лога файла.",
	"upload_not_allowed" => "Загрузка в эту папку запрещена в настройках скрипта",
	"upload_dir_not_writable" => "В эту папку запрещена запись",
	"mobile_version" => "Мобильный вид",
	"standard_version" => "Обычный вид",
	"page_load_time" => "Страница загружена за %.2f мс.",
	"wrong_pass" => "Неверное имя пользователя или пароль",
	"username" => "Имя пользователя",
	"log_in" => "Войти",
	"upload_type_not_allowed" => "Этот тип файла запрещено загружать",
	"del" => "удалить",
	"log_out" => "выйти"
);

// Slovensky
$_TRANSLATIONS["sk"] = array(
	"file_name" => "Meno súboru",
	"size" => "Veľkosť",
	"last_changed" => "Posledná zmena",
	"total_used_space" => "Použité miesto celkom",
	"free_space" => "Voľné miesto",
	"password" => "Heslo",
	"upload" => "Nahranie súborov",
	"failed_upload" => "Chyba nahrávania súboru!",
	"failed_move" => "Nepodarilo sa presunúť súbor do vybraného adresára!",
	"wrong_password" => "Neplatné heslo!",
	"make_directory" => "Nový priečinok",
	"new_dir_failed" => "Nepodarilo sa vytvoriť adresár!",
	"chmod_dir_failed" => "Nepodarilo sa zmeniť práva adresára!",
	"unable_to_read_dir" => "Nemôžem čítať adresár",
	"location" => "Umiestnenie",
	"root" => "Domov"
);

// Spanish
$_TRANSLATIONS["es"] = array(
	"file_name" => "Nombre de archivo",
	"size" => "Medida",
	"last_changed" => "Ultima modificación",
	"total_used_space" => "Total espacio usado",
	"free_space" => "Espacio libre",
	"password" => "Contraseña",
	"upload" => "Subir el archivo",
	"failed_upload" => "Error al subir el archivo!",
	"failed_move" => "Error al mover el archivo al directorio seleccionado!",
	"wrong_password" => "Contraseña incorrecta",
	"make_directory" => "Crear directorio",
	"new_dir_failed" => "Error al crear el directorio",
	"chmod_dir_failed" => "Error al cambiar los derechos de directorio",
	"unable_to_read_dir" => "No es posible leer el directorio",
	"location" => "Localización",
	"root" => "Raíz"
);

// Swedish
$_TRANSLATIONS["sv"] = array(
	"file_name" => "Filnamn",
	"size" => "Storlek",
	"last_changed" => "Senast andrad",
	"total_used_space" => "Totalt upptaget utrymme",
	"free_space" => "Ledigt utrymme",
	"password" => "Losenord",
	"upload" => "Ladda upp",
	"failed_upload" => "Fel vid uppladdning av fil!",
	"failed_move" => "Fel vid flytt av fil till mapp!",
	"wrong_password" => "Fel losenord",
	"make_directory" => "Ny mapp",
	"new_dir_failed" => "Fel vid skapande av mapp",
	"chmod_dir_failed" => "Fel vid andring av mappens egenskaper",
	"unable_to_read_dir" => "Kan inte lasa den filen",
	"location" => "Plats",
	"root" => "Hem"
);

// Turkish
$_TRANSLATIONS["tr"] = array(
	"file_name" => "Dosya ismi",
	"size" => "Boyut",
	"last_changed" => "gecmis",
	"total_used_space" => "Toplam dosya boyutu",
	"free_space" => "Bos alan",
	"password" => "Sifre",
	"upload" => "Yükleyen",
	"failed_upload" => "Hatali dosya yüklemesi!",
	"failed_move" => "Hatali dosya tasimasi!",
	"wrong_password" => "Yeniden sifre",
	"make_directory" => "Yeni dosya",
	"new_dir_failed" => "Dosya olusturalamadi",
	"chmod_dir_failed" => "Dosya ayari deqistirelemedi",
	"unable_to_read_dir" => "Unable to read directory",
	"location" => "Location",
	"root" => "Root"
);


// Esperanto
$_TRANSLATIONS["eo"] = array(
	"file_name" => "Dosiernomo",
	"size" => "Grando",
	"last_changed" => "Lasta ŝanĝo",
	"total_used_space" => "Uzata spaco",
	"free_space" => "Disponebla spaco",
	"password" => "pasvorto",
	"upload" => "Alŝuto",
	"failed_upload" => "Alŝuto malsukcesis!",
	"failed_move" => "Movo de la dosiero malsukcesis!",
	"wrong_password" => "Malĝusta pasvorto",
	"make_directory" => "Nova dosierujo",
	"new_dir_failed" => "Kreado de dosierujo malsukcesis",
	"chmod_dir_failed" => "Ŝanĝo de dosierujaj rajtoj malsukcesis",
	"unable_to_read_dir" => "Dosierujo ne estas legebla",
	"location" => "Loko",
	"root" => "Radiko",
	"log_file_permission_error" => "La skripto ne rajtas skribi la protokolan dosieron.",
	"upload_not_allowed" => "La skripto malpermesas alŝuti en ĉi tiun dosierujon.",
	"upload_dir_not_writable" => "Ĉi tiu dosierujo ne rajtigas skribadon.",
	"mobile_version" => "Vido por mobilaj iloj",
	"standard_version" => "Defaŭlta vido",
	"page_load_time" => "Paĝo ŝarĝita en %.2f ms",
	"wrong_pass" => "Malĝusta salutnomo aŭ pasvorto",
	"username" => "Salutnomo",
	"log_in" => "Ensaluto",
	"upload_type_not_allowed" => "Alŝuto estas malpermesita por ĉi tiu dosiertipo.",
	"del" => "For", // short for Delete
	"log_out" => "Adiaŭo"
);

/***************************************************************************/
/*   CSS FOR TWEAKING THE DESIGN                                           */
/***************************************************************************/


function css()
{
?>
<style type="text/css">

/* General styles */

BODY {
	background-color:#FFFFFF;
	font-family:Verdana;
	font-size:small;
}

A {
	color: #000000;
	text-decoration: none;
}

A:hover {
	text-decoration: underline;
}

#top {
	width:100%;
	padding-bottom: 20px;
}

#top a span, #top a:hover, #top a span:hover{
	color:#68a9d2;
	font-weight:bold;
	text-align:center;
	font-size:84px;
}

#top a {
	display:block;
	padding:20px 0 0 0;
}

#top span {
	display:block;
}

div.subtitle{
	width:84px;
	margin: 0 auto;
	color:#68a9d2;
	text-align:center;
}

#frame {
	border: 1px solid #CDD2D6;
	text-align:left;
	position: relative;
	margin: 0 auto;
	max-width:680px;
	overflow:hidden;
}

#error {
	max-width:450px;
	background-color:#FFE4E1;
	color:#000000;
	padding:7pt;
	position: relative;
	margin: 10pt auto;
	text-align:center;
	border: 1px dotted #CDD2D6;
}

input {
	border: 1px solid #CDD2D6;
}

.bar{
	width:100%;
	clear:both;
	height:1px;
}

/* File list */

table.table {
	width:100%;
	border-collapse: collapse;
}

table.table td{
	padding:3px;
}

table.table tr.row.two {
	background-color:#fcfdfe;
}

table.table tr.row.one {
	background-color:#f8f9fa;
}

table.table tr.row td.icon {
	width:25px;
	padding-top:3px;
	padding-bottom:1px;
}

table.table td.del {
	width:25px;
}

table.table tr.row td.size {
	width: 100px;
	text-align: right;
}

table.table tr.row td.changed {
	width: 150px;
	text-align: center;
}

table.table tr.header img {
	vertical-align:bottom;
}

table img{
	border:0;
}

/* Info area */

#info {
	color:#000000;
	font-family:Verdana;
	max-width:680px;
	position: relative;
	margin: 0 auto;
	text-align:center;
}

/* Thumbnail area */

#thumb {
	position:absolute;
	border: 1px solid #CDD2D6;
	background:#f8f9fa;
	display:none;
	padding:3px;
}

#thumb img {
	display:block;
}

/* Login bar (at the bottom of the page) */
#login_bar {
	margin: 0 auto;
	margin-top:2px;
	max-width:680px;
}

#login_bar input.submit{
	float:right;
}

/* Upload area */

#upload {
	margin: 0 auto;
	margin-top:2px;
	max-width:680px;
}

#upload #password_container {
	margin-right:20px;
}

#upload #newdir_container, #upload #password_container {
	float:left;
}

#upload #upload_container{
	float:right;
}

#upload input.upload_dirname, #upload input.upload_password{
	width:140px;
}

#upload input.upload_file{
	font-size:small;
}

/* Breadcrumbs */

div.breadcrumbs {
	display:block;
	padding:1px 3px;
	color:#cccccc;
	font-size:x-small;
}

div.breadcrumbs a{
	display:inline-block;
	color:#cccccc;
	padding:2px 0;
	font-size:small;
}

/* Login area */

#login {
	max-width:280px;
	text-align:right;
	margin:15px auto 50px auto;
}

#login div {
	display:block;
	width:100%;
	margin-top:5px;
}

#login label{
	width: 120px;
	text-align: right;
}

/* Mobile interface */

body.mobile #frame, body.mobile #info, body.mobile #upload {
	max-width:none;
}

body.mobile {
	font-size:medium;
}

body.mobile a.item {
	display:block;
	padding:10px 0;
}

body.mobile a.item span.size {
	float:right;
	margin-left:10px;
}

body.mobile table.table {
	margin-bottom:30px;
}

body.mobile table.table tr td {
	border-top: 1px solid #CDD2D6;
}

body.mobile table.table tr.last td {
	border-bottom: 1px solid #CDD2D6;
}

body.mobile #top {
	padding-bottom:3px;
}

body.mobile #top a {
	padding-top:3px;
}

body.mobile #upload #password_container, body.mobile #upload #upload_container, body.mobile #upload #newdir_container {
	float:none;
	margin-top:5px;
}

body.mobile #upload input.upload_dirname, body.mobile #upload input.upload_password{
	width:240px;
}

body.mobile #upload {
	margin-bottom:15px;
}

</style>

<?php
}

/***************************************************************************/
/*   IMAGE CODES IN BASE64                                                 */
/*   You can generate your own with a converter                            */
/*   Like here: http://www.motobit.com/util/base64-decoder-encoder.asp     */
/*   Or here: http://www.greywyvern.com/code/php/binary2base64             */
/*   Or just use PHP base64_encode() function                              */
/***************************************************************************/

/*以下为图标，标记为已替换的无需替换*/
$_IMAGES = array();
/*向下箭头,已替换*/
$_IMAGES["arrow_down"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABAElEQVQ4T2NkoBAw
UqifYRAY0NDQwMTFxXWEgYHBkkTvHP727ZsD48yZM1k/fvx4n4GBQZpEA55++/ZN
ARwG3d3dOv/+/TvGyMjIS4wh/////8zExGRVWlp6BR6IHR0dNoyMjHsZGRnZ8Bny
////X////3euqKgAeRs1Fjo7O/0YGBjWMzIyMmEz5P////8YGBgCy8vLN8HkMaKx
s7MzmZGRcQ4OA1LKy8vnIsthTQddXV2tDAwMVcgK////31peXl6DbjDOhNTV1bWY
gYEhBqphSVlZWSw2V+E0YNWqVcwPHjyYwcDA8FdBQSE7LCzsL0kGEBOdGLFArCaC
gUiKQQBHR08XItkG9gAAAABJRU5ErkJggg==";
/*向上箭头,已替换*/
$_IMAGES["arrow_up"] = "iVBORw0KGgoAAAANSUhEUgAAABcAAAAQCAYAAAD9L+QYAAABAUlEQVQ4T7XSMSuF
YRQA4OcWhUkZZDOYLEImk40/wEbZsCqDMsiglExWsfEHWJRdkgGLwcRqkrLolFdf
+r77ve693nq3c55zOuc05L8trOIAuzlpjZwgLOK4ELuAs7rcHHwUN+gpYO8Yw1Oz
AnV4H+4wUoI8YgIfVQXq8FPMN+nuCMut4Cs4rJsrlnBSFlfVeczzGt0ZeIxlEg+/
Y8vwftxiOANOIbHYaCgW/fPK8HPM/gFOoXGacaKV+Dr2WoBTylpxT8XOp3GFrjbw
T0x9n6+ED+Aeg23AKfUZ43gLPP4lZjoAJ+ICcwFvYqeDcKI2An/B0D/gr4HHhWyj
t8MF9r8AXwgk+t5Qt7kAAAAASUVORK5CYII=";
/*删除，已替换*/
$_IMAGES["del"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAAXNSR0IB2cksfwAA
AAlwSFlzAAALEwAACxMBAJqcGAAAAPBQTFRFAAAA2B4G2B4G2B4G2B4G2B4G2B4G
2B4G2B4G2B4G2B4G2B4G3hYA2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G
2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G
2B4G2B4G2B4G2B4G2B4G1x0F2B4G2B4G2B4F1x0F2B4G2B4G2B4G2B4F1x0F2B4G
2B4G2B4G2B4G2B4F1x0F2B4G2B4G2B4G2B4G2B4G2B4F2B4G2B4G2B4G2B4G2B4G
2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4G2B4GK+jMTgAAAFB0Uk5TAA1j6PCCHH3v
f/a5AAg1PMFYwv9QODLS3evh29A0F3DlhK/tcRjNn1pCIBkLh3oLDIl84wwK/YV2
3goCYShSMWICW9ytA2p5otYPe9ji2hOANB0dAAAApElEQVR4nGNgAAFGJmYWVjYG
BGDn4OTk4uYBs3n5+Pn5WQQEBYWERURFxXgZ+MQlJCSEuSQluYSlpKVlZBnk5BVk
FKFASVlFFahJTR1mlIYEmAIKaGpp82lpIgR0hHX1pHSF9eECBsKGRsaGwiYkCJia
mVtYmptZwQWsbcRs7ewdHJ2cwQJCLq5Qd7iJgyl3Zg8jMFD0NAQLeHn7+IKBn7k/
AwMAadUZxa3fHtYAAAAASUVORK5CYII=";

/*压缩包，已替换*/
$_IMAGES["archive"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAAXNSR0IB2cksfwAA
AAlwSFlzAAALEwAACxMBAJqcGAAAAUdQTFRFuSjluyzmvS7mvi7nvS7nvDDmyVrq
vz3nuyzmxTrr3oz01WzxyD7sxjzr14Tw/fn+0G7tvS7m8Mj64JH0yUrs6r/3////
vCzmxjvr4Zb113LxxkDr24/x/vr+uSjlvjDnwTTpwjXpwTPpwDnn2o7xxlDpAJ/7
AKH7BKD7Bp77B5z7L6r7GaL7AKH7AKb8F7L9Da79AKr9AKn9LrP8tuP+RLn8AKP8
AKz9tuj/bdD+FK/9qN7+Vb/9AKP8AKH7GLL9Da/9tuT+AKH7AKT4AKT2AaP2KbD2
E6j1BNpSGd1aJt5fJ99gI95eHd1heuykMOFyENtXOuFmmfCuduqTQ+JqOuFqfuyl
+v77VeaLFNxYyvfVlO+qQeJxs/TLDttWN+Bmj+6mb+mNN+Bnceqc+P77A9pSDttW
FdxZFtxaFNxZD9tZPuJ7G91jctK+2AAAAG10Uk5THKX7//////+n/v/////////2
//////+3/v//////M8b9//////8KV6SsrKysXfL/////////6f///////+he////
VqOsrKysMsb+//////+2/v/////////1/////6f+//////8dpvn//////7q18hoA
AACqSURBVHicY2BgZGKGARZWNnYGDk4ubh4o4OXjF2AQ5BEShgmIiIoJMIhLSErB
BKRlZAUY5OQVFGFASVlFlUFNXUMTDrS0dRh09fQNDKHAyNjElMHM3MLSHAqsrMVs
GGzRBez07B0QWhxNGdScnF3gwNXNncHD08sbBnx8/fwZAgKDgkOgIDQsPIIhMiQq
GiYQEysWwRAXn5AIE0hKTolgSE1Lz4CBzKzsHADSRjQ0CeUb1wAAAABJRU5ErkJg
gg==";

/*音乐文件，已替换*/
$_IMAGES["audio"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABH0lEQVQ4T8XSvSuG
URzG8Q9JJmXwPhB/gcnIKOrJSwajSSgxyZ9AGWTyWgY2/gujUIxioEiRZJHQT0fd
3T3Pg8ld5z6nc87v2++6zlWh/FeFNnRkRmdax3xVUaS+C3t4QiVucYPrNGfXD8UA
Y+jG7A/dxfHbXwDVaEFrZiyXAszhOHe5NiPnW8Z0OcBWRnMU3OMjJ+u5FKAXE7/w
4H8A9WjAOf7cwQ5GcJQMbv/2IFLVj8tEjxzkPRjFDPrwgmHsB2AQ2zjAKyaxXgSw
hAusJXMjpS8BOMUUDtPBKiI0+Q6i9XEU8J5qhgJwh+a0GYyIcCMWijzjZop5DaK2
EL8NPGIePUlO6DspkYN4hSacRbACUIcVDKTkLWL3FyH6uvIJtetEdI1QEDIAAAAA
SUVORK5CYII=";
/*代码文件样式，已替换*/
$_IMAGES["code"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACcElEQVQ4T6WTXUhT
YRjH/+/ZObI5P4aypcQsLZXUELIP8OMsIfWii9jsSN6FXQRBRR+T6KbuyjmwCy+6
S6lMvHAWfUA3MWcpyqCRtUmioKW1qJnlPtzHE2dyhunopvfu/T/P/3ee9/B/GP7z
sK3+8xPPczTR8GlKsFMMVAGwGDHyMcYNRFXr93pq20KbPX8BrrgcNSqiFwDTpx+M
lhMqNNvrLNNKPQXoHBtuQgJPAZax1Zyn1uJHeE2Rg4kEHbMftYzLQhJw2TliVIG8
jEG71WzgNWjWF+PB8ofNpQDFMyq6G49/SQI6XY4bINxUOgyaLPhDv5PXRrUBc/Pz
CJXsSGmyTkTWbpPFngRYR4fdDOyAhhfQUrAXuVGg//M7cIIAa6WI268e40x1Pb5x
MbxcnkUkHpMRYzbR0rABcDoCKo7pLlU1YOD+Q3j4IAxV5SgTclD4KwanOgi/x4dD
gg6tkoSe9y55gk82k8W48YRRx2o8GM6+sK8WH0MrGP2+gHA8Bil/D55MvUakpACZ
fAZM+UbsErLQOzMBPlPz1WYyFygAH4Dy1blFVEYESCcl9M26IelL0Ts7iSytFufK
jmBwaAgzuRxyigrl77ptovmg8oQ7jOGirMajUQQmp9FUJ+Ln4hLmjNmIroWw4vEh
7/B+qHhe+de3bKL5ehJwbdyxO7FOXjCmVqpSbjH6344hs3hnukwFwXGltvoTS6kg
XXWOnOUY3VW6F964UVRbkzaQDNTeJVoGU0FSuqwuRzuIehlYXjongfwcqKNLbH22
LcqKkFym9UgHEdrkZSKGOAAvCI9Ip+2zV7ekMr1tgvQL9G/1D0gH5BGe9VTwAAAA
AElFTkSuQmCC";
/*数据库文件，已替换*/
$_IMAGES["database"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACLklEQVQ4T5WTT0hU
URjFz7nO0PAGEjdGW5GiwEiyTbQIioLIgkLcZRsTSipK75tZBLPzvXGIGjcRQWCb
EErIRfRvIS3aKAVlFIKrINq0e2+C59wTb/CJSX/wru53//zuOd/3XWLDqFQqhWKx
OOScuwBgP8lCui3pJ4D3JB/EcTxdqVTSuDWYTcIwHCJZBdC5Ebp5Luk7SWutnV4H
VKvVQQCP/nVx855zbrBUKs20FFSr1SUAe7cCAPDRWtvTAoRhuEyye4uAz9baPZmC
AQAzWwGQPD0+Pj7XAkxOTvZL2iHpDknvP6AIwKikH77vP80szBpjHgOYlXQKwDEA
fQC6JAnACoAFAC+MMc8kDUjq933/XAswMTHRa4yZJzlvjPHHxsY+/UlFEAQ9xpgA
wGHn3KFSqbSU5eB2Pp8PkyS5AeC6pG8klzdBdkvqJHkrSZJaPp+/aa0dzSzcJ6k4
jq96nrdd0tHMQrqeWiC5kCTJy/b29kYURVMAGtbaSy1ArVY74Jy7JuksyTkAr1LP
hUJhJY5jSuoi2UfyOICTJGeazWa9XC6/yyw8KRaL56MoOpK2xd+aStIHSWXP8940
Go2Hvu+fWe+DtRLWc7ncvSRJCsaYXVkO1irxZXV1tZnL5YYlXTHGDK/3QXowCIIT
JO+S3CnpOclF59xiW1ubkdQL4KCk1MJXABd933/9229Mg3q9vi2O48vGmEMA9gHo
Xns9rUgq/21HR8fUyMhIkqn7BZWBACDJGl4IAAAAAElFTkSuQmCC";
/*文件夹图标，已替换*/
$_IMAGES["directory"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAAXNSR0IB2cksfwAA
AAlwSFlzAAALEwAACxMBAJqcGAAAALpQTFRFAAAA/+oA/+oA/+oA/+oA//da//Al
/+8g/+4a/+sFUGr+6euY7O2L7O2I8vGF//x8//18//lm/+0VUWz+U23+U23+WnP6
ztat//+N//x1/+4YUWz+U23+h5rcP1z+PVr+PVr+PVr+PVr+PVr+UWv+S2b+T2r+
QV7+Umz+RGD+Plr+RmL+S2b+TGf+UWv+Umz+UGv+S2b+P1v+PVr+PVr+PVr+PVr+
RmH+Tmn+T2r+RGD+Plv+PVr+PVr+tcBUqgAAAD50Uk5TAAYhKCZHt9PTxgjY+v//
////8BDJ///////wHt3///+xC9sc//////////8Ord/f39/f360OECAgICAgIA8X
rIHCAAAAe0lEQVR4nGNgIAIwMjHDAAtYgJWNHQo4OEF8Lm4eXl5ePn4BAQFBISBf
WEQUBMTEJSQkJKWAAtIyYAFRWXQBIJCTl1dQRBNQUkYSUJFHE1BFE1BTRxXQ0NRC
EVDRlpeHCOjo6unrGxgaGYOBiSkDg5m5haWVtQ0E2DIAADmIFcbU9pEMAAAAAElF
TkSuQmCC";
/*画图，已替换*/
$_IMAGES["graphics"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAADHUlEQVQ4T3XTWU8T
URQA4Htm2rHTacu0lrAoixaBNpRFcSOKDy6IGqJijDsx0XfkQWOiRmN8UB/4A2qa
KJpogg9GwSUuiYpgsKJSWiyiUNq0dGXaKTOdzjXFaIjAeb3nfveec+8BtEBgjJXj
EVQmY6QDEg0VsRD5m+oN48I8PfIDgACz92OMSeewfDronj4lxGRjMpoGOYWRiiUR
YyQD+mLVeYuFuNHfI4wTCHwr6xbV/gNGMVZF+sQP3v5kFVukjBpXqDrVRuJ5Mo6m
E15xDx9ON6oNpI/SEB2jbxJXTfXMOYtVeeUf8KlXfBcYTNYVrtNcNpuJSwCQ/r86
fxznOJ/z40Ag2NikpgFAmgGG3FKLu4uzFdczN61V1ImF+vL1S+rhWE9ityxiVLSR
aausptpngLdPeL/Ey7pNzUwWAIjzAZ4IrnY84uwGEzXCh9MFBCBuwy7GCJ4QXjr4
mBvPsahs1bXU8YVO7+8RvgddQomlSVsZ/ild8A3w+8x7dCb4FcJbB+5Gn1U0s0eX
58Od+QD3BD7gehS7t7SWeVBVq9zvdKZbnV1T7auOsY0wFsINnzui3RV72RYNhTqD
QflkKpEuNJQqLxdkQTgDfnjBh5IxmamoZ7Kzs4Fze3CLozNqqznC7gDPJC51dHGu
XKvKJgm4zvORL1XQBDKWUJOrN6nyM512OKTHQKEH5hKFLQPae8W7Aef0QetOrXmm
ie+7+bDIyVlcQCIK6phrgHGez548WtGkK1PSKCaKKKfAAF8yuYEA1nz/mPSTiyC1
bgvNzgDDw1KzzyHc0eQqPi9ZS20Z6ea9chrRuVb1YVdX7D6hAGTeqTujUKC+eCh9
9sfr+LbyBm2baRn55xlnx7cBsXX0Ld9eul17kdYTL0MjqafeTzxd3pR1UZiSd/94
xVXn1dCulWsoKwCk5gD2PrFjcmj6UOF69S1GT95OcMgkRFOnpyakvKkJUZtfQ9sN
ZdTmv8M1B/BFcLHnqzAQ90u6RFBCsoQRzZKI1pMhQ4nqqqWcvD77xnOAzGJmlMeC
qJJASIsBJRSL0WA+AD/fH/kNi+1kO2aQHGMAAAAASUVORK5CYII=";
/*图片，已替换*/
$_IMAGES["image"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABaUlEQVQ4T62TvUpD
QRCFz7nkDyy0szMYFJGEkOxa+ANia+8DCGIRlBRa2Ai+gBZaCGIdsLHzAcROcPYm
9lG0ExstlEjCHbnRQIwaLuh0y+58s3vOWeKPxT/2ow2w1h4CmFHV5yhAkoOqWnfO
LXUAdyIyCiCIAgDgWWtvRSTdAdyISKZQKCx4nrcSBMFetVqt9oNZa9s93YBxY8wj
gDLJ9VarVarVav5vkG+ARqORTyaT981mcyoej1dUdd/3/ZPIgPA6xWJxi+QmyXMA
yyLyms/nJ2Kx2DaAMQAjAO5VdcPzvErvEzLd07LZbCKVSu2q6ryqln3fvwj3jTHT
AI5IpkVkqK2BMeaB5KyI1D/XkyQrAC5FZK3XnVwuN5xIJK6dc8MdEZ9UNbTwGGhn
Y5XkjogcRNYAwFwQBIsk30ieiUjfUH1xwRhz65wLgxS5rLVh+D6CZIw5/VT4JSJh
gOSViJT+5zNFnPrjsXds3qkRhFo6CAAAAABJRU5ErkJggg==";
/*ppt图标，已替换*/
$_IMAGES["presentation"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABnklEQVQ4T5WTXShD
YRjH/8+xnU1Rm022QlMko86RheJi7uRC2pJy6c6VjwtcEK7lxo24co0LIu1SufBR
LpRZCRFrK59L7KOzvTrntK04W8dz+fY+v/f/f573TyhSkV6Hl3FMoAztOgPRe62r
JB++ey2WRKlZAMHLGIkAE0HkyjZQhvU4A9FDTUC4z7FAoPliSmxCJ3ir/e8Vxibo
PwBW3wokE6DHkApjbFEXwNo/ApPdiUxDG5jDBe7sAFzo5C/AuR8GiJAO3yK2Nofk
uWrbMrUOk/QNVlmrAPAWgWFvVRvwOuMD725H+fAkIv4GIC0pAN5sBHd9rgAp+iDr
LwJo7kDZ0Biig405gLHJo/qOf8KwuaQ9g6wF6S6I2NosUpenqoXxFRiFbiAZR8nR
Fih8UxjwOu1DKqg2ZsvW2gW+zg3EnhVFufq9BVmBFkCeQc6C3P0Vg2F7Wf8aK3oG
wFdV51+WJNDLk36A1T8KvqY+D0glwF0d6wdUtHguTHbHh8Z338iHyWwWMxy8BBIZ
4CJA0BWmYiFS4kwkEmM7heL8A/vAxfO7IDVUAAAAAElFTkSuQmCC";
/*Excel，已替换*/
$_IMAGES["spreadsheet"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABgklEQVQ4T6WTS0uC
QRiFz3xaiRldsVWgYEFg+RUEbSLF0NCySLKkP2FBVChkEJSFKdQugqIfYBdatLPL
yloYROhKIbEWIaEiIuoXGiWU2kCzHM48c96XcwiqHLmNVTKAIsPHacDuD5eTksIl
a2ebcjmiIBxRcgBLCMcCRPL1IM/lVY/rfm9ZQK+t3w6C1WpOxJ1iCBoEvyQcME/+
AwCwRgWwTq3ghXtFS10z+sRs0cnR0zECsWAJMDdoxsKoBWOuCcjaZXCbnZjcNeI5
FoFZPYs4Lw5RjQjSxs/VeCPXiCajJQCf4ePM4sFN8BaKjh74QvfYuXQXxVQOCkJ1
twoO0wYS6ST0LgNSmVQRQOWgINTKNbCOL4OAQOcyIJFO0AOEtUKcWzzYvzqAaWAa
vtAdNi+26EdY0i1CIx+B1qnHcNcQtmccMO6ZEHoL049QKUzUS6wEqJRE6iC1Stse
6puE7z8/yBMcfpcpmwXLgFFyxSJBQkAUVGX6s86EYTO8/EmlOn8AVyvCYutSMyUA
AAAASUVORK5CYII=";
/*Word，已替换*/
$_IMAGES["textdocument"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABl0lEQVQ4T2NkwAO4
XecbMDAy6TMy/Xv4ZUfiAWxKGWGCPB7zHf7/Z9JnYvhv8P8/gwEjI6MBTO7/f4bG
L7viG7AaANLI+J9pPz6XaMvzLVzfaLEAWQ0zM/M/UVHRI4zEGJAboMKQF6iMYcf/
//+9iTIgzVOWIcNbFmzA////GXh4eBiYmJhA3ACwAVxsrPufr49ikA5azlAaqcdg
pCbM4Fe5m2FZnQNDRs9RBm8jboYoW364AbKysmBD4AaAwuDMbH+GtO4jDPWJRgxa
8gIM+onrGS4vDGJQjljFEO8kxpDoIgb3goiICAM7OzuqAXPKbRn2nHnKUB6tz/Dt
xx+GrmWXGCJdlBkiGvYRZ0BesDaDoZowAx83K8PLdz8Y+LlZGS7de8fQufQScQbY
G0gwrGhwYpi67hrD6w8/GBqTjRjiWg4y7Dr9lDgDQDY+XhvJENG4n+Hdxx8Mu/o8
GZTCVzG8+fiDIdJGgHAg4ktIBKORUEqkOCHhTcqomYnZgJHhvwIDODMx2BOVmQhm
ZwZmA0bmvw9wZWcAokm1RR33F7UAAAAASUVORK5CYII=";
/*未知文件，已替换*/
$_IMAGES["unknown"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAz0lEQVQ4T7XTMWpC
QRSF4c8+IVlCGssUguA2UqcLBLEQQiCFKxCRQCCpglXAUl2FlZWYFcQFBLGLFsrA
CI/BR5555MJUM/efM2fOrShZlZL9UsA1+thgHdc3lhgcuywFvGKIWeZwHROM8ZhC
UsA7uvhKADc4wznusTvsFwFcYoQp2nhG7xRAVvUVOmj9BrhA8ONQQXIT26KArAd/
UhCa7hLHP6J5hZ6wQi0BzBEM/V/AW0zcIifiDdziIe8XqniJoTnG+METPvMAJ89W
6WncAx0hMBGxCQTQAAAAAElFTkSuQmCC";
/*向量绘图图标，已替换，我实在找不到更好的了,捂脸哭つ﹏⊂......如果有更好的欢迎PR*/
$_IMAGES["vectorgraphics"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABMUlEQVQ4T53Tvyvv
URzH8YeQKAMZUAZG6vtVojsy3Y0MKOVvYFFikezKqgzuZrt3vpMyuAvKj8Egg4Ey
MPgVN73rfOrbp+9HX97L6Zzzej/P633e59ShDWXfi4s6TOIdz3j9Iqc3AMsJcFBj
cgn3qEdHABZxh+0EWMNf7ONHGivZo7hFA8YCsIKWNGbCRszhDTs5Zz/xktZGArCU
iJmDTB8nbGAPDxjGOsLBdXLX/hkgQFu4wimmMJsAMe/KSlhFWI5SKiMuK9r7K7ce
Dk7QnQHyJYTNG5xhAJtVANHuHnRmJfzHvxrbOIijpC0HYB7HNSbnZaUATGO3AJA9
8aIDZgKwUJDcVNHvZjxV0T0GoCjG8SdtTuB3NWERoA/h4Dwl9ScHl3lIEWAIrTlx
fKDDPOAD68Y7PkVdTAsAAAAASUVORK5CYII=";
/*视频,已替换*/
$_IMAGES["video"] = "iVBORw0KGgoAAAANSUhEUgAAABEAAAAQCAYAAADwMZRfAAAA1klEQVQ4T7XSsUrC
URTH8Y9BhBCODbnoIrT5BCL4AEprj1G70eDk4OTsqkOPEPoSrenckouTWFzwxkX+
yd9/dZbLPZzzPb/z45T8QZQSRg/N5P+MM3ST3AqTw7kp5A21pOAeFfST3ALtf4c8
obWfssMDwjtKJs/x+JOSBq5zehx8Cat/R/Rkg3JOyBL1LEiQnZp8jPeOK1xggGFs
PBXSwRQ3qBaBbPGJ873cQpDDVQtBPvCC298oicbeYRx8KeJJhAQhVawjJFznZc47
ecUs605y9meXfQG5PSe4vo3whwAAAABJRU5ErkJggg==";
/*网页,已替换*/
$_IMAGES["webpage"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACnElEQVQ4T21TTUhU
URT+zvW9mpkCAzcFUSBEIYRkLWrRwmwRhP0gQRSECCVCSA68eyeseCDMeN8MSdJU
tgmTgsSIFrUJQogKxcUUuSlKKkIKqrE0p8m5J+4wDoPMW71zz/m++91zvkNY8Wmt
NxLRcWZuJaIGZnaJKMPMj4QQw57nfauE0HKQTqfXzs/P3yKiNgDlc2b+DiAJoImI
DgKI19bWJjs7O/9ZbLFwcHBwdS6Xew5g50pFADKO47REo9EfWutdRHQXQDYUCu3t
7u7+WyQIguAagK4qYDDzDaVUOTcwMLAhn8+/APBEKXWG+vv7NwkhPgCoqUIwbow5
G4vFpitzQRA0AZgsFArbKAiCPgAXqt0O4DOAOWZOKaWGl2u01lcAHABw3xJMAcgz
8xsi6qii5L3neVuIiC1BKpVqKBQKEwBCAKYtwU8AzVLKjNY6Q0SNtvN2GsaYkBCi
S0p5xIKHhobcbDY7S0R1zJwDYCyBldiilJrSWj8kokMAxqWUzRaUTCb3eJ730v6X
+vWx4rm/SGttpfdJKe+lUqnNxpgEM+8D8BrAiFJqpLI/WuubRHTanjHzK0uQBrBG
KdVe0aTzRCQBrLMOdF33lPWBzfu+vyoSibxlZju1O5RIJHYIISatbaWU7ypI3hNR
fSmecF33aE9Pz6yN4/F4neM4dkKNRSNpra9bqwLYr5T6XXr7YWZ+YN3KzHNLS0tb
e3t7v1oF4XD4mZ2AUqqjSDA6OlozMzMzZm80xrTGYrFPJWKPiAJmvqSU6kskEvVC
iDEAzuLi4m7f9/+Ul8b3fScSiVwEcI6Zbwshnhpj2ojoJDNfBRAmomNEdHlhYSHh
+36+vEwrbLoeQDsznyCi7XZxrFwAjx3HGY5Go18q6/8DI5sm1SBtKrEAAAAASUVO
RK5CYII=";
$_IMAGES["7z"] = $_IMAGES["archive"];
/*flash文件，已替换。*/
$_IMAGES["as"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABwUlEQVQ4T6WTwUsU
YRjGn2e2XUQIIxNZSz/xUoTFrJsHL/4HRocI7JTs5K1LHYIisrKbd8GZKAWPXhQv
/gmlzrIbGJ1mVgjCzcVACrf93piRWXbHiQS/47zP+/ueb97nJc54GO//Np2/VNf6
CSi3IBgRoE6gJMAnphtzar5ca+1pA/iFmxOg8QHkxSRjIrIHwdTgu+J6VG8CvIJ5
nwaXT/MiAe4O2u5KoA0B363h3l9IeyQ6EgDbZP1ef012KxcyhwDOQeQwdfRbXVn6
8iMEeJb5luSzE80i+2kjdTULHFREvwHwtKkRmVFO8VUI8C2zDHI4DiAwO2C7L3wr
twpiIlbfVrabPwY8zAXWOtsEIpJpsDf73t2T6XzaF10icK3Fwb5yit3RE36SPN8O
wJpy3Nv+VO46UnIZ5CKAbIumqmy3J3JQAnAjKgbjMow/Y/21z16ly/wKcujk/8Gm
ctzRyMEsyeeBSAQ7GcMY71vYqnqW2fyeMJ2XynZfh4AgfUda7x6PUTYMXZ/UzMyA
eJSYi/gYw1GeJUjRLZWCeUdIB0T3PxJZFS0PEqMcNYTLJI3HAEaby0SURfDxv8t0
mj2Ia/4CTn66EffVKucAAAAASUVORK5CYII=";
$_IMAGES["avi"] = $_IMAGES["video"];
$_IMAGES["bz2"] = $_IMAGES["archive"];
/*c语言文件，已替换*/
$_IMAGES["c"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABw0lEQVQ4T52TwUtU
URTGv+/6GCjJoDKn9+7bCSFTCYbt0iCIoHVg24LW0WJ8r4mYoHwzuRBp1cJWCeIf
IAQR1M4gghKKls19b9IWIQSiM3NPvFFkxtFivMt7zvfjO+d+lzjoFCXjHknGaeUc
yTrIGLXMsnl4Km6VcK9eR2uDQG2SlJsAj7fWRVAn8apmVf7ngzO/0lobQJerlyD2
DYFjBzoDIIKK2XQHUeTWLsAtx2d7LD6A6BOBBWTegjNJ6H3KTlX7e9g4T/IOBBMA
pk3oBW0O/Ch+DeJaeingPRO4s/u5cJ8lI8ppfDX3/Y1dgFc2WgkrTbHIWxPqq/8a
oWOJfhTfBjG3U7hVCbyFrgC6FD8m8KjpoOEMm8LA564AfmSegCwcGqCj5C4pLw49
QvMJBd92lvjOhPpKVyOkzX4UvwdxeRuCvAm96f0gOkquC21fHOjFthxkS9WcA7tM
oFfSKABlMvO8MtmfeFPmpFIqJ7B5gjcA2RQ4oybIfmmLsl9KxgSylEL+E+XvW9YZ
WysMrHZ+pqerF6jqL0Fc3AsR4Achs39wdO53cGK94zO1CrbTqXKWGFKQdak7H03t
9AqKtK19fwE2KLERN14EsAAAAABJRU5ErkJggg==";
$_IMAGES["cab"] = $_IMAGES["archive"];
/*C++文件，已替换*/
$_IMAGES["cpp"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABl0lEQVQ4T6WTv0tb
URzFz7kRfToUFLTNywu0S7f+BeKPsdCpLl0FsQoFSyklSaWQLklw6NBBXTN00TqU
0qE42bpYUcGpg0vJyxVDoRYRlZp7yosgGmPF5m6X7zmfy/d7z5do8rBJP84B/Kzt
MJ5GAA0B2KewCXKldOh/QpbHjR47BQRT2wNwbo5AzwWhsHbkWh5UJm/u1NdqgCC/
PUhUP4Nsje4CKpB+ELgH0jsx8U0p7T+/CMjKJD27BeCOoAPIjIYZ/10kvJ2Vd+zZ
1xC/hRl/oWELyYLtB7RUKwpPSpnEdCNhkCtP7Jv24q90128/V+6Ngab00v/KRMGO
GWg2Mh2w9cbPVPdePSDI28eEK4AoSrEPhJsUZBz5iol8OG7Imci019bRufusc/da
gGTO9sHoS2Ry1HA5FRSv1QIkBgX7ncRdQLYK88im/eWzQxTNajkVf39pDmqDlFv8
1zdKeBtmEk8b5qCWhShIVTdPorteJGHjT0vs/s6LW5VLAVHhTJQfAjiksC6YtfAo
/vHKKP/vUjW9jX8BFP2zk1tiUjQAAAAASUVORK5CYII=";
/**/
$_IMAGES["cs"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABnUlEQVQ4T6WTT0tb
QRTFz5nEBsFikkX3+VuI+gVCC5UuXPULuHEhbZLGL6AgXQiluM8LbaGfoogrQcSN
W+1C85SWQsGNL4qpBPLekXmppU+ikWY2l5m59zfce84QIy6OWI8I4LFz8nRMfgVQ
GeSMgEOKXwF8Pqvnfw567C8g7bhvJDVJmNuJAnxIK169uH77LgSknJPngL9NgBIC
UBsUWwJekciHRdIvxWMlr5I7/xdCSEw33QMAJQlt38TmLmrZvZukpOMuUEHBi0+8
n/SvygbsBlDCRu9tdoepxvEzMtixBQGx2K4VvgzqNdlwZ0mtEegKSNgIcZW2d0Af
+4B4pl3LfB8O0FgfYN4x5RxVCTZtUc+Y4kU113owAFyNtCBh2asXPgwFCOOkOrAA
O8SU4+6TmALwu8fYbGSItncELyNDlD9uDDteLb8byphstl5Q2ApltJpDm5D5BqoI
KyUQk/DDw+Q06k8uozL+2aUbrUUBn+4w0jkCM+8t5TYGGunmMLQyessC5iEQ5L61
cveRaXReZ0/vtfL/fqqRf+M1nmK8AYD7MM0AAAAASUVORK5CYII=";
$_IMAGES["css"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABUUlEQVQ4T8XTMUtC
URQH8PN/z6ciRUXIezVVIEVtBUFJQzU2BSE2unSVPkHgUF+goaX3El2CgvaGhqCl
saHJmhpVBJeoXnnfPeFgqOXLauiu957fuRzOH/THg2Z9yXHWiJEg5oc2E4iCeE6B
VkaFeO7s1waA2bXS6cvWRyXbngZpaSKeMEPBDaRSbut9bwBrcV3jG08haw4PJpFI
vDWRngErs5WrOs6sZOxY5dgmdpdlA/keKBSi9Frf/vg2ME7gsxEhznsCOodWtu1V
BsJdAd0wilLKdc3DPev8SEQLkXr4+MlwkwRcQSnLFyDGjJURB43O5cOj/YBCzguo
SRANRIeGTiu12pI/AJiWECfVfL6fpOzzGHvEXpbJGCPy5gEu+gJmKHRdceVixAve
vuj1KUUqFtD4glmLK8YdQZq+QOci/XiI/wt8GaZP6emySL9N9Tt7C+QR6MsB3wAA
AABJRU5ErkJggg==";
$_IMAGES["doc"] = $_IMAGES["textdocument"];
$_IMAGES["docx"] = $_IMAGES["textdocument"];
$_IMAGES["exe"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABSElEQVQ4T2NkYGBg
aJyxfgcDI4M7iI0LKMmInb57+pdVQ4PjH2Q1jGADZq7/j08zSE5fTY6BiYnxxI+X
d2zCwsL+wtSTZIAALxfD528/jvjYGtgxMjKCLSXaAD1VWQZBPm6wxZ++fNvu52Ds
RZIBogK8DFrK0nCfPn/7fm6ku1UK0S4A6fz1+w/D33+I4OrIC2MkyQD0gK5PDxx2
BkiKCDCwsbIwfPj8lYGbk4Ph+ZsPDOLCfAxc7GzgwAPxQQEJAxhhYKSpwPD2wxeG
95+/MgjwcDGoyIozHLlwi8FUW5Hhycv3DM9ev2f4/QeeCBkwDAAl14u3HoEtUJQS
ZZCTFGY4cfkug4aCJFwcOSYwDEB44RsDNycbw7PXHxjEhfgYuDnZCXrhHyxZE8pU
SPL/69MDmcAJqWHm+p2MDAxuJGgGKV1cnx4YBwDKEJgRIMF0ZQAAAABJRU5ErkJg
gg==";
$_IMAGES["gz"] = $_IMAGES["archive"];
$_IMAGES["gif"] = $_IMAGES["image"];
$_IMAGES["h"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABEklEQVQ4T72TMUvE
QBCFZ7JFCgsbr7W3sLGws4+V4o+wumQmBEkh2AhCDgI7EAt/xWGlttY2dtaWYmMj
BDaMrBgJR/aawG25897HzJtdhIkHQ34iukbEo7/6s7X2akwbBDDzEgBOvUlVlyJy
tlnA5BF8u0Q0R0S11t6Gsgpm4A3MbH0E1tp8LaAoip2u6+arIlVNPAARn1Zrxpim
ruvP3w6YeU9VXxHxZihcA7h0zu03TfM2BLyIyNYQEBqBmb+dcwf/ACLaBYA7ETke
AkIhEtEjAJyLyDvmeX6oqoveGMfxSVVVX2NrLMtyu23b+16rqheYZVkSRdFDf2mM
mflwxl5imqYzY8zHAJBMB0weYeJvhh+aU7Q9HL1sZgAAAABJRU5ErkJggg==";
$_IMAGES["htm"] = $_IMAGES["webpage"];
$_IMAGES["html"] = $_IMAGES["webpage"];
$_IMAGES["iso"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACEklEQVQ4T32TPWhT
URTH///7UrWQtr4ncbB00CS1ivgxuHRwEwVdtSB+DA5pk5KpFBRRQSuigxCaNAGn
qovOirhICwU3tYPU91KKH4tEXrQVRJN3j7xXEmK+7njO//zuOfd/D9HmWBmnXys5
TKqDflpELyvNd246vt4sZ2MgnHEiW0JyX8CLBP7LCSAQPKp4mPqVjpdqdXVRX2Ft
JFStvCDUY6GkCQy0606AL1Q46Y7HP/j5AGAWVgfgeYugSpYnYkvb55wLSjDfDrA5
EkoeOLqeihU3ATm7QKHllmJjuEntx6ys/Qrk8U4QAM/cZPws/bl7QvjmzyyQZYqa
cEvRN+bOYoZAqksX+o/eOkQzZ58j+KRRKMACgV2aGBMPVAoPCRxphTFBK2ffAnit
OSkwjgHVGYCeaLmhFBdaNCIzNHPOHQJX2gGI6nWAYYExTXiLrR3IbZpZO0Ey30rH
J4E8UIorojEL3z7IUZDhmlYE59k793Fwm1afSajODyZr5dTwnr7ZrzsM9fsqIZMA
jb89xmBgo5VzngI408UyCNTpcjL6PLA9W5wE9IFyang8APTnV+OGp5dIRDpCBLZb
iu0zI8VTJO6KoUbLiejP+le28s5+0XhJYKiL969BRKtG6MRGYvdK/SvXCoJlMuSe
kJfaLRMh8xVDpjYSe7+3LFPjrbV1hlKHgrjW73/06re4PLLR3N0/8FLOFHtG/IkA
AAAASUVORK5CYII=";
$_IMAGES["java"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABmElEQVQ4T52SPWiT
URSGn/eLAVs6CFELGVqoog6i4B+FWHAtODkUF0uxaT60nZwduri4CFJr80VtkVIK
dXPo2E0EEQpOIgGpCBZxCZKKSb5XrqBYTG3jHc8597nPebliD8dwXvCq3aj2cB/D
uODxfwEMx4CLgicdA4I6cAW4C+SBquDbn6AdVzBcBoaA50CfYKkjA8MLoACsC07v
lNW/DBaBMeA1cE+w0KnBIWAQaAGjgqsdAcKwoQdoAv2Ct7sCSmWfAKaCchKrGi5c
n/XxfRnyTsnvb/CsnuVcJuJSEutO6G/LoFT2QeCM/VM9KFQNHw31Wo71lRF9L1Z8
NkopJLHu/wUIhZsP3NPIcBvYkDgMbDqllmZZjVKOOOXoo5hlJLcFhOL4Q1+obfFm
5Za2pqcdfeqlb+6G3u+aweiMc0+n9KVY8SmlTGBOSny2eSkxl8Sql8rOJrEav2C/
M5hIfA1TiMxay2xu+64ZuqIUW7xrtrBNY35SH9quMDbvA911mrOT+lqsuFdNhhUx
YJMDwssb2RZJ6AfAD+XxjxGzjAR+AAAAAElFTkSuQmCC";
$_IMAGES["jpg"] = $_IMAGES["image"];
$_IMAGES["jpeg"] = $_IMAGES["image"];
$_IMAGES["js"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABAUlEQVQ4T+3TL0tD
YRQG8Oc57w3DTTBs12AwbhPtNtFgXBTToiBaBHHfwGAQRBAMYhE0mf0Cyzav7BPo
RcRwhTG955EVk3qnYvOt5z0/OP+IXz4O87N0Rj9xKvEN/4E/74F0LrBMoiXoMghn
MlVdtkdgonAKpLcgqznUGY+TenbfbFuEnufcBbA4MiBpqzKZzGVp4wDgJkAb7s3o
AHACqVOOk/3+U3PqdYALkvPfAwAI6sF8nR49Arr+DLgLwEoObYTIdvIXXwUwy5Af
ysO2zI9Dzr7Tuh8DwiCYL5eqt93ntLEk2hGhEoG1sVpylT3UF+h2CnK6sISiA3sH
ij5+FX8Di2qWEZUMj0oAAAAASUVORK5CYII=";
/*目前替换到这*/
$_IMAGES["mov"] = $_IMAGES["video"];
$_IMAGES["mp2"] = $_IMAGES["audio"];
$_IMAGES["mp3"] = $_IMAGES["audio"];
$_IMAGES["mp4"] = $_IMAGES["video"];
$_IMAGES["mp4a"] = $_IMAGES["audio"];
$_IMAGES["ogg"] = $_IMAGES["audio"];
$_IMAGES["flac"] = $_IMAGES["audio"];
$_IMAGES["mpeg"] = $_IMAGES["video"];
$_IMAGES["mpg"] = $_IMAGES["video"];
$_IMAGES["odg"] = $_IMAGES["vectorgraphics"];
$_IMAGES["odp"] = $_IMAGES["presentation"];
$_IMAGES["ods"] = $_IMAGES["spreadsheet"];
$_IMAGES["odt"] = $_IMAGES["textdocument"];
$_IMAGES["pdf"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABbElEQVQ4T82TMUub
URSGn/e7pEMItBSXosmWkk7dHNJBqpOLHbs4CC0E50ChpdAGFKe6lVL1F7j4D8T8
AQcXI+KSdHJwKO1gE+9bvo8Uo0lJ3DzTvedcHs77nnMFcFzK1YAGppXeb4esbeQX
gCqd7upgXQMAP2t3t0YB+m+2MAWJGNrdN2W4TPN3A8B3iE/kpB5+d1+VL/g5MaBV
zO0gVW2fS5rD8WOl01ufGDAore9ZJvkeAI6LuYNME2C7+b8p3BjdwHu1Sg+cFZ3F
vIwc9EXm1Pa3gB9fKWwg/yK6no0u0R7oUXa+BnBm/EMwG+zFnrQkmAZViXGFoA+2
96Vk/UY3twBrCeSj/BBrKgNIr2XPWmzIbkQlC4JP/yDDHVzr20wBluaSq7jsoPdj
OnDqxRHS874nu4JmxHlIasjp1h2C3o6WMIn9oz5amjuZCYtOwstK+8+7SThDm2jQ
STH31VIJuzAWIj0Ff05X+S9I/c+s/xlf0AAAAABJRU5ErkJggg==";
$_IMAGES["php"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABiUlEQVQ4T62TO2hU
QRiFvzPZNSGIUTB9ChWNZm+6FFZio5UQsbSyEQKCILgXEWKhGwISSDorwa2CNmks
lBiwsPPuRi0CAV9NtDPVBpc5unfdmJcQTKaa+eecb/4HI/a4tEc/+wiYWLwoOwUn
kg7ZvHaxZzQ0GzcNQ0JZtN+wVnrJuJqdzNsZ3K+fUZffChU3lWSmjS9IOtGJG74Y
Xadcet6K5QBV6k8lLm/th80zxKDg1MY74582I6TD2R9A7RNoRWLEdlNSITeYe8Z3
1s8bKDZzTpNLHcB3Sf1tjz9gfc21crfQuZ0mFdFdDhx5mANCpf44omqQX+xmrDbz
TpPz6z2gkg0IzSKtGuZlUomD/4LFQnGAW4Of/wJauwfZWQXN2rqGfDSgJ7aXrXAD
4jFCWAzRCy1pbPT2MX58dTOgXcokuBClVwHmwNVYHr6aZzJROx3Q+xwgTnI7WdoB
UJuJhClc/CGtrQg9imkylgOmssNqhG+Ij0ZXKJfebQPspoFbNfv4F/7n+d+eX2+a
jYtQtti9AAAAAElFTkSuQmCC";
$_IMAGES["png"] = $_IMAGES["image"];
$_IMAGES["pps"] = $_IMAGES["presentation"];
$_IMAGES["ppsx"] = $_IMAGES["presentation"];
$_IMAGES["ppt"] = $_IMAGES["presentation"];
$_IMAGES["pptx"] = $_IMAGES["presentation"];
$_IMAGES["psd"] = $_IMAGES["graphics"];
$_IMAGES["rar"] = $_IMAGES["archive"];
$_IMAGES["rb"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACFElEQVQ4T42Tz2sT
URzEZ152N2BE0YMHm92LNW30KCgWrCD0JCIFlSJaBBEUPYgHD4IgSL0WBCnRi1Ak
SgmIR9FDEf0LLNlEEUxy8KJdUbBmszuSlYT8ovQd33y/nzfM8IhNTtmzDxE4RsmY
euvROBBWXftaDN4GtOL8Du9z1H55rzUFyzwhcKCrS5cFHCc537mTVBwC+K51F+A9
kKYXzlhXdoZhMUg7TwGcaWuSvncBAozv2g9JXh9yJckwHM/V8KWtlbP2DRCLINQF
+K7zEsTpkZFILybr4VyvVsnah2VQSAB+1rkAg+XRy2gwas7Ici4R2iYhAyAjMkMh
Ytt6xXVqIMaGAfqbauGo5YTljcj+RdLqnZG0yqpnzcQwrweXBTWp+OxkPXqVuPTs
9wCn+gBAib5rXwW5NCB8M4rPTdRb7zr3FddZEHGn7yGpwKprTcc0q0kt0DqB5RT4
eH+tudY77I9ZJ5Ayb/uqFR4kISaJghsTjebHz7uxPcrYPwCsUSoZY0pt2CcgHXn2
T4DpDoTSLVayqdnYmD35WlhIYK4zJ6I4kEmFQknELIB8FwDN0/ecsoA4X2seTMJy
7Wcgz2/2R7qAODpJ33XqILJUPJ2rtz5UvLZ97tgaQEfaLSyCvCnpeQpa6gS6FYBB
cx+/etj1R/aCgIsEVgCcEhgQCkQEBIP/7TCQ4sCAQQyuG0VBrhG9+QdGh+DDCk6h
sQAAAABJRU5ErkJggg==";
$_IMAGES["sln"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABS0lEQVQ4T7WTsS8D
YRjGn+dO74YbtCJiaKKSthL+ALPFZmCoSIyWq//AoDsbqc509AfYEEotYlfRxCpx
lZDU9dwrbe/aONUr4pu+4X1+3/u+z/MRfzwcVB8tVBN0nQ1RUKiZqRtfNxBgZKcS
h4oyiHhTKCJnojBXM1OnoYCmWFSUSEwEuj18yqYyLUA0fzdHyC4o+1Y2ve0XGvnq
uAbnqoe4WdIFxPYqRQKrrfaAI0t/XzbquqHBOSeRbLeNRxAagWHvgQBAZBHkK4Ax
EamSsAFOecXXdTWyoDv2BcnJ3gBg3uXQLKVxQjDhjyFA0Rq115CZsWP52/t/BSwB
eGmNADywfZ/+yQidJUJVVhpvrhZRcflpiUCERPTLDjo2Qg6s9fRWwMaOE9/moF+c
+2Sha2PYfwimUURKrqLkns3kcWiUfbgH2fzVZ+rX4QcHtakRSuAbHwAAAABJRU5E
rkJggg==";
$_IMAGES["sql"] = $_IMAGES["database"];
$_IMAGES["tar"] = $_IMAGES["archive"];
$_IMAGES["tgz"] = $_IMAGES["archive"];
$_IMAGES["txt"] = "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABBElEQVQ4T2NkYGBg
+HmKdQEDA2M8iI0LMPF5HGTV2OSALs8IMYDtPz7NIDkmkRgGRmaevSzyk1yQ1ZJm
AJsCA8PfNyiGkG4AyHokQ4g2gJFdjYFJOAzu+v8/H9azKs9tItoAsM6//xj+/wdr
AQMOq9+MpBmAFtLsZr+GnwFsMgxMPJYM/3/cZGBg4mH4/+UYAyOPNQPD348MjJya
DP++nGBg+PUYHhJYw4BJJJbh35vFDAxsMgwscn0Mfx4VgzXBxZECEr8B7EoMzCIx
DP8+H2b4/2k/8QYwcmox/P9+jYGR25jh/9ezDIzcZgz/v55igIkjxyQ1o5FwdsbM
rf8Xspv9TgAA6EOCEXwDq+8AAAAASUVORK5CYII=";
$_IMAGES["wav"] = $_IMAGES["audio"];
$_IMAGES["wma"] = $_IMAGES["audio"];
$_IMAGES["wmv"] = $_IMAGES["video"];
$_IMAGES["xcf"] = $_IMAGES["graphics"];
$_IMAGES["xls"] = $_IMAGES["spreadsheet"];
$_IMAGES["xlsx"] = $_IMAGES["spreadsheet"];
$_IMAGES["xml"] = $_IMAGES["code"];
$_IMAGES["zip"] = $_IMAGES["archive"];

/***************************************************************************/
/*   HERE COMES THE CODE.                                                  */
/*   DON'T CHANGE UNLESS YOU KNOW WHAT YOU ARE DOING ;)                    */
/***************************************************************************/

//
// The class that displays images (icons and thumbnails)
//
class ImageServer
{
	//
	// Checks if an image is requested and displays one if needed
	//
	public static function showImage()
	{
		global $_IMAGES;
		if(isset($_GET['img']))
		{
			$mtime = gmdate('r', filemtime($_SERVER['SCRIPT_FILENAME']));
			$etag = md5($mtime.$_SERVER['SCRIPT_FILENAME']);

			if ((isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $mtime)
				|| (isset($_SERVER['HTTP_IF_NONE_MATCH']) && str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])) == $etag))
			{
				header('HTTP/1.1 304 Not Modified');
				return true;
			}
			else {
				header('ETag: "'.$etag.'"');
				header('Last-Modified: '.$mtime);
				header('Content-type: image/gif');
				if(strlen($_GET['img']) > 0 && isset($_IMAGES[$_GET['img']]))
					print base64_decode($_IMAGES[$_GET['img']]);
				else
					print base64_decode($_IMAGES["unknown"]);
			}
			return true;
		}
		else if(isset($_GET['thumb']))
		{
			if(strlen($_GET['thumb']) > 0 && EncodeExplorer::getConfig('thumbnails') == true)
			{
				ImageServer::showThumbnail($_GET['thumb']);
			}
			return true;
		}
		return false;
	}

	public static function isEnabledPdf()
	{
		if(class_exists("Imagick"))
			return true;
		return false;
	}

	public static function openPdf($file)
	{
		if(!ImageServer::isEnabledPdf())
			return null;

		$im = new Imagick($file.'[0]');
		$im->setImageFormat( "png" );
		$str = $im->getImageBlob();
		$im2 = imagecreatefromstring($str);
		return $im2;
	}

	//
	// Creates and returns a thumbnail image object from an image file
	//
	public static function createThumbnail($file)
	{
		if(is_int(EncodeExplorer::getConfig('thumbnails_width')))
			$max_width = EncodeExplorer::getConfig('thumbnails_width');
		else
			$max_width = 200;

		if(is_int(EncodeExplorer::getConfig('thumbnails_height')))
			$max_height = EncodeExplorer::getConfig('thumbnails_height');
		else
			$max_height = 200;

		if(File::isPdfFile($file))
			$image = ImageServer::openPdf($file);
		else
			$image = ImageServer::openImage($file);
		if($image == null)
			return;

		imagealphablending($image, true);
		imagesavealpha($image, true);

		$width = imagesx($image);
		$height = imagesy($image);

		$new_width = $max_width;
		$new_height = $max_height;
		if(($width/$height) > ($new_width/$new_height))
			$new_height = $new_width * ($height / $width);
		else
			$new_width = $new_height * ($width / $height);

		if($new_width >= $width && $new_height >= $height)
		{
			$new_width = $width;
			$new_height = $height;
		}

		$new_image = ImageCreateTrueColor($new_width, $new_height);
		imagealphablending($new_image, true);
		imagesavealpha($new_image, true);
		$trans_colour = imagecolorallocatealpha($new_image, 0, 0, 0, 127);
		imagefill($new_image, 0, 0, $trans_colour);

		imagecopyResampled ($new_image, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

		return $new_image;
	}

	//
	// Function for displaying the thumbnail.
	// Includes attempts at cacheing it so that generation is minimised.
	//
	public static function showThumbnail($file)
	{
		if(filemtime($file) < filemtime($_SERVER['SCRIPT_FILENAME']))
			$mtime = gmdate('r', filemtime($_SERVER['SCRIPT_FILENAME']));
		else
			$mtime = gmdate('r', filemtime($file));

		$etag = md5($mtime.$file);

		if ((isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) && $_SERVER['HTTP_IF_MODIFIED_SINCE'] == $mtime)
			|| (isset($_SERVER['HTTP_IF_NONE_MATCH']) && str_replace('"', '', stripslashes($_SERVER['HTTP_IF_NONE_MATCH'])) == $etag))
		{
			header('HTTP/1.1 304 Not Modified');
			return;
		}
		else
		{
			header('ETag: "'.$etag.'"');
			header('Last-Modified: '.$mtime);
			header('Content-Type: image/png');
			$image = ImageServer::createThumbnail($file);
			imagepng($image);
		}
	}

	//
	// A helping function for opening different types of image files
	//
	public static function openImage ($file)
	{
		$size = getimagesize($file);
		switch($size["mime"])
		{
			case "image/jpeg":
				$im = imagecreatefromjpeg($file);
			break;
			case "image/gif":
				$im = imagecreatefromgif($file);
			break;
			case "image/png":
				$im = imagecreatefrompng($file);
			break;
			default:
				$im=null;
			break;
		}
		return $im;
	}
}

//
// The class for logging user activity
//
class Logger
{
	public static function log($message)
	{
		global $encodeExplorer;
		if(strlen(EncodeExplorer::getConfig('log_file')) > 0)
		{
			if(Location::isFileWritable(EncodeExplorer::getConfig('log_file')))
			{
				$message = "[" . date("Y-m-d h:i:s", mktime()) . "] ".$message." (".$_SERVER["HTTP_USER_AGENT"].")\n";
				error_log($message, 3, EncodeExplorer::getConfig('log_file'));
			}
			else
				$encodeExplorer->setErrorString("log_file_permission_error");
		}
	}

	public static function logAccess($path, $isDir)
	{
		$message = $_SERVER['REMOTE_ADDR']." ".GateKeeper::getUserName()." accessed ";
		$message .= $isDir?"dir":"file";
		$message .= " ".$path;
		Logger::log($message);
	}

	public static function logQuery()
	{
		if(isset($_POST['log']) && strlen($_POST['log']) > 0)
		{
			Logger::logAccess($_POST['log'], false);
			return true;
		}
		else
			return false;
	}

	public static function logCreation($path, $isDir)
	{
		$message = $_SERVER['REMOTE_ADDR']." ".GateKeeper::getUserName()." created ";
		$message .= $isDir?"dir":"file";
		$message .= " ".$path;
		Logger::log($message);
	}

	public static function emailNotification($path, $isFile)
	{
		if(strlen(EncodeExplorer::getConfig('upload_email')) > 0)
		{
			$message = "This is a message to let you know that ".GateKeeper::getUserName()." ";
			$message .= ($isFile?"uploaded a new file":"created a new directory")." in Encode Explorer.\n\n";
			$message .= "Path : ".$path."\n";
			$message .= "IP : ".$_SERVER['REMOTE_ADDR']."\n";
			mail(EncodeExplorer::getConfig('upload_email'), "Upload notification", $message);
		}
	}
}

//
// The class controls logging in and authentication
//
class GateKeeper
{
	public static function init()
	{
		global $encodeExplorer;
		if(strlen(EncodeExplorer::getConfig("session_name")) > 0)
				session_name(EncodeExplorer::getConfig("session_name"));

		if(count(EncodeExplorer::getConfig("users")) > 0)
			session_start();
		else
			return;

		if(isset($_GET['logout']))
		{
			$_SESSION['ee_user_name'] = null;
			$_SESSION['ee_user_pass'] = null;
		}

		if(isset($_POST['user_pass']) && strlen($_POST['user_pass']) > 0)
		{
			if(GateKeeper::isUser((isset($_POST['user_name'])?$_POST['user_name']:""), $_POST['user_pass']))
			{
				$_SESSION['ee_user_name'] = isset($_POST['user_name'])?$_POST['user_name']:"";
				$_SESSION['ee_user_pass'] = $_POST['user_pass'];

				$addr  = $_SERVER['PHP_SELF'];
				$param = '';

				if(isset($_GET['m']))
					$param .= (strlen($param) == 0 ? '?m' : '&m');

				if(isset($_GET['s']))
					$param .= (strlen($param) == 0 ? '?s' : '&s');

				if(isset($_GET['dir']) && strlen($_GET['dir']) > 0)
				{
					$param .= (strlen($param) == 0 ? '?dir=' : '&dir=');
					$param .= urlencode($_GET['dir']);
				}
				header( "Location: ".$addr.$param);
			}
			else
				$encodeExplorer->setErrorString("wrong_pass");
		}
	}

	public static function isUser($userName, $userPass)
	{
		foreach(EncodeExplorer::getConfig("users") as $user)
		{
			if($user[1] == $userPass)
			{
				if(strlen($userName) == 0 || $userName == $user[0])
				{
					return true;
				}
			}
		}
		return false;
	}

	public static function isLoginRequired()
	{
		if(EncodeExplorer::getConfig("require_login") == false){
			return false;
		}
		return true;
	}

	public static function isUserLoggedIn()
	{
		if(isset($_SESSION['ee_user_name'], $_SESSION['ee_user_pass']))
		{
			if(GateKeeper::isUser($_SESSION['ee_user_name'], $_SESSION['ee_user_pass']))
				return true;
		}
		return false;
	}

	public static function isAccessAllowed()
	{
		if(!GateKeeper::isLoginRequired() || GateKeeper::isUserLoggedIn())
			return true;
		return false;
	}

	public static function isUploadAllowed(){
		if(EncodeExplorer::getConfig("upload_enable") == true && GateKeeper::isUserLoggedIn() == true && GateKeeper::getUserStatus() == "admin")
			return true;
		return false;
	}

	public static function isNewdirAllowed(){
		if(EncodeExplorer::getConfig("newdir_enable") == true && GateKeeper::isUserLoggedIn() == true && GateKeeper::getUserStatus() == "admin")
			return true;
		return false;
	}

	public static function isDeleteAllowed(){
		if(EncodeExplorer::getConfig("delete_enable") == true && GateKeeper::isUserLoggedIn() == true && GateKeeper::getUserStatus() == "admin")
			return true;
		return false;
	}

	public static function getUserStatus(){
		if(GateKeeper::isUserLoggedIn() == true && EncodeExplorer::getConfig("users") != null && is_array(EncodeExplorer::getConfig("users"))){
			foreach(EncodeExplorer::getConfig("users") as $user){
				if($user[0] != null && $user[0] == $_SESSION['ee_user_name'])
					return $user[2];
			}
		}
		return null;
	}

	public static function getUserName()
	{
		if(GateKeeper::isUserLoggedIn() == true && isset($_SESSION['ee_user_name']) && strlen($_SESSION['ee_user_name']) > 0)
			return $_SESSION['ee_user_name'];
		if(isset($_SERVER["REMOTE_USER"]) && strlen($_SERVER["REMOTE_USER"]) > 0)
			return $_SERVER["REMOTE_USER"];
		if(isset($_SERVER['PHP_AUTH_USER']) && strlen($_SERVER['PHP_AUTH_USER']) > 0)
			return $_SERVER['PHP_AUTH_USER'];
		return "an anonymous user";
	}

	public static function showLoginBox(){
		if(!GateKeeper::isUserLoggedIn() && count(EncodeExplorer::getConfig("users")) > 0)
			return true;
		return false;
	}
}

//
// The class for any kind of file managing (new folder, upload, etc).
//
class FileManager
{
	/* Obsolete code
	function checkPassword($inputPassword)
	{
		global $encodeExplorer;
		if(strlen(EncodeExplorer::getConfig("upload_password")) > 0 && $inputPassword == EncodeExplorer::getConfig("upload_password"))
		{
			return true;
		}
		else
		{
			$encodeExplorer->setErrorString("wrong_password");
			return false;
		}
	}
	*/
	function newFolder($location, $dirname)
	{
		global $encodeExplorer;
		if(strlen($dirname) > 0)
		{
			$forbidden = array(".", "/", "\\");
			for($i = 0; $i < count($forbidden); $i++)
			{
				$dirname = str_replace($forbidden[$i], "", $dirname);
			}

			if(!$location->uploadAllowed())
			{
				// The system configuration does not allow uploading here
				$encodeExplorer->setErrorString("upload_not_allowed");
			}
			else if(!$location->isWritable())
			{
				// The target directory is not writable
				$encodeExplorer->setErrorString("upload_dir_not_writable");
			}
			else if(!mkdir($location->getDir(true, false, false, 0).$dirname, EncodeExplorer::getConfig("new_dir_mode")))
			{
				// Error creating a new directory
				$encodeExplorer->setErrorString("new_dir_failed");
			}
			else if(!chmod($location->getDir(true, false, false, 0).$dirname, EncodeExplorer::getConfig("new_dir_mode")))
			{
				// Error applying chmod
				$encodeExplorer->setErrorString("chmod_dir_failed");
			}
			else
			{
				// Directory successfully created, sending e-mail notification
				Logger::logCreation($location->getDir(true, false, false, 0).$dirname, true);
				Logger::emailNotification($location->getDir(true, false, false, 0).$dirname, false);
			}
		}
	}

	function uploadFile($location, $userfile)
	{
		global $encodeExplorer;
		$name = basename($userfile['name']);
		if(get_magic_quotes_gpc())
			$name = stripslashes($name);

		$upload_dir = $location->getFullPath();
		$upload_file = $upload_dir . $name;

		if(function_exists("finfo_open") && function_exists("finfo_file"))
			$mime_type = File::getFileMime($userfile['tmp_name']);
		else
			$mime_type = $userfile['type'];

		$extension = File::getFileExtension($userfile['name']);

		if(!$location->uploadAllowed())
		{
			$encodeExplorer->setErrorString("upload_not_allowed");
		}
		else if(!$location->isWritable())
		{
			$encodeExplorer->setErrorString("upload_dir_not_writable");
		}
		else if(!is_uploaded_file($userfile['tmp_name']))
		{
			$encodeExplorer->setErrorString("failed_upload");
		}
		else if(is_array(EncodeExplorer::getConfig("upload_allow_type")) && count(EncodeExplorer::getConfig("upload_allow_type")) > 0 && !in_array($mime_type, EncodeExplorer::getConfig("upload_allow_type")))
		{
			$encodeExplorer->setErrorString("upload_type_not_allowed");
		}
		else if(is_array(EncodeExplorer::getConfig("upload_reject_extension")) && count(EncodeExplorer::getConfig("upload_reject_extension")) > 0 && in_array($extension, EncodeExplorer::getConfig("upload_reject_extension")))
		{
			$encodeExplorer->setErrorString("upload_type_not_allowed");
		}
		else if(!@move_uploaded_file($userfile['tmp_name'], $upload_file))
		{
			$encodeExplorer->setErrorString("failed_move");
		}
		else
		{
			chmod($upload_file, EncodeExplorer::getConfig("upload_file_mode"));
			Logger::logCreation($location->getDir(true, false, false, 0).$name, false);
			Logger::emailNotification($location->getDir(true, false, false, 0).$name, true);
		}
	}

	public static function delete_dir($dir) {
		if (is_dir($dir)) {
			$objects = scandir($dir);
			foreach ($objects as $object) {
				if ($object != "." && $object != "..") {
					if (filetype($dir."/".$object) == "dir")
						FileManager::delete_dir($dir."/".$object);
					else
						unlink($dir."/".$object);
				}
			}
			reset($objects);
			rmdir($dir);
		}
	}

	public static function delete_file($file){
		if(is_file($file)){
			unlink($file);
		}
	}

	//
	// The main function, checks if the user wants to perform any supported operations
	//
	function run($location)
	{
		if(isset($_POST['userdir']) && strlen($_POST['userdir']) > 0){
			if($location->uploadAllowed() && GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isNewdirAllowed()){
				$this->newFolder($location, $_POST['userdir']);
			}
		}

		if(isset($_FILES['userfile']['name']) && strlen($_FILES['userfile']['name']) > 0){
			if($location->uploadAllowed() && GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isUploadAllowed()){
				$this->uploadFile($location, $_FILES['userfile']);
			}
		}

		if(isset($_GET['del'])){
			if(GateKeeper::isUserLoggedIn() && GateKeeper::isAccessAllowed() && GateKeeper::isDeleteAllowed()){
				$split_path = Location::splitPath($_GET['del']);
				$path = "";
				for($i = 0; $i < count($split_path); $i++){
					$path .= $split_path[$i];
					if($i + 1 < count($split_path))
						$path .= "/";
				}
				if($path == "" || $path == "/" || $path == "\\" || $path == ".")
					return;

				if(is_dir($path))
					FileManager::delete_dir($path);
				else if(is_file($path))
					FileManager::delete_file($path);
			}
		}
	}
}

//
// Dir class holds the information about one directory in the list
//
class Dir
{
	var $name;
	var $location;

	//
	// Constructor
	//
	function Dir($name, $location)
	{
		$this->name = $name;
		$this->location = $location;
	}

	function getName()
	{
		return $this->name;
	}

	function getNameHtml()
	{
		return htmlspecialchars($this->name);
	}

	function getNameEncoded()
	{
		return rawurlencode($this->name);
	}

	//
	// Debugging output
	//
	function debug()
	{
		print("Dir name (htmlspecialchars): ".$this->getName()."\n");
		print("Dir location: ".$this->location->getDir(true, false, false, 0)."\n");
	}
}

//
// File class holds the information about one file in the list
//
class File
{
	var $name;
	var $location;
	var $size;
	//var $extension;
	var $type;
	var $modTime;

	//
	// Constructor
	//
	function File($name, $location)
	{
		$this->name = $name;
		$this->location = $location;

		$this->type = File::getFileType($this->location->getDir(true, false, false, 0).$this->getName());
		$this->size = File::getFileSize($this->location->getDir(true, false, false, 0).$this->getName());
		$this->modTime = filemtime($this->location->getDir(true, false, false, 0).$this->getName());
	}

	function getName()
	{
		return $this->name;
	}

	function getNameEncoded()
	{
		return rawurlencode($this->name);
	}

	function getNameHtml()
	{
		return htmlspecialchars($this->name);
	}

	function getSize()
	{
		return $this->size;
	}

	function getType()
	{
		return $this->type;
	}

	function getModTime()
	{
		return $this->modTime;
	}

	//
	// Determine the size of a file
	//
	public static function getFileSize($file)
	{
		$sizeInBytes = filesize($file);

		// If filesize() fails (with larger files), try to get the size from unix command line.
		if (EncodeExplorer::getConfig("large_files") == true || !$sizeInBytes || $sizeInBytes < 0) {
			$sizeInBytes=exec("ls -l '$file' | awk '{print $5}'");
		}
		return $sizeInBytes;
	}

	public static function getFileType($filepath)
	{
		/*
		 * This extracts the information from the file contents.
		 * Unfortunately it doesn't properly detect the difference between text-based file types.
		 *
		$mime_type = File::getMimeType($filepath);
		$mime_type_chunks = explode("/", $mime_type, 2);
		$type = $mime_type_chunks[1];
		*/
		return File::getFileExtension($filepath);
	}

	public static function getFileMime($filepath)
	{
		$fhandle = finfo_open(FILEINFO_MIME);
		$mime_type = finfo_file($fhandle, $filepath);
		$mime_type_chunks = preg_split('/\s+/', $mime_type);
		$mime_type = $mime_type_chunks[0];
		$mime_type_chunks = explode(";", $mime_type);
		$mime_type = $mime_type_chunks[0];
		return $mime_type;
	}

	public static function getFileExtension($filepath)
	{
		return strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
	}

	//
	// Debugging output
	//
	function debug()
	{
		print("File name: ".$this->getName()."\n");
		print("File location: ".$this->location->getDir(true, false, false, 0)."\n");
		print("File size: ".$this->size."\n");
		print("File modTime: ".$this->modTime."\n");
	}

	function isImage()
	{
		$type = $this->getType();
		if($type == "png" || $type == "jpg" || $type == "gif" || $type == "jpeg")
			return true;
		return false;
	}

	function isPdf()
	{
		if(strtolower($this->getType()) == "pdf")
			return true;
		return false;
	}

	public static function isPdfFile($file)
	{
		if(File::getFileType($file) == "pdf")
			return true;
		return false;
	}

	function isValidForThumb()
	{
		if($this->isImage() || ($this->isPdf() && ImageServer::isEnabledPdf()))
			return true;
		return false;
	}
}

class Location
{
	var $path;

	//
	// Split a file path into array elements
	//
	public static function splitPath($dir)
	{
		$dir = stripslashes($dir);
		$path1 = preg_split("/[\\\\\/]+/", $dir);
		$path2 = array();
		for($i = 0; $i < count($path1); $i++)
		{
			if($path1[$i] == ".." || $path1[$i] == "." || $path1[$i] == "")
				continue;
			$path2[] = $path1[$i];
		}
		return $path2;
	}

	//
	// Get the current directory.
	// Options: Include the prefix ("./"); URL-encode the string; HTML-encode the string; return directory n-levels up
	//
	function getDir($prefix, $encoded, $html, $up)
	{
		$dir = "";
		if($prefix == true)
			$dir .= "./";
		for($i = 0; $i < ((count($this->path) >= $up && $up > 0)?count($this->path)-$up:count($this->path)); $i++)
		{
			$temp = $this->path[$i];
			if($encoded)
				$temp = rawurlencode($temp);
			if($html)
				$temp = htmlspecialchars($temp);
			$dir .= $temp."/";
		}
		return $dir;
	}

	function getPathLink($i, $html)
	{
		if($html)
			return htmlspecialchars($this->path[$i]);
		else
			return $this->path[$i];
	}

	function getFullPath()
	{
		return (strlen(EncodeExplorer::getConfig('basedir')) > 0?EncodeExplorer::getConfig('basedir'):dirname($_SERVER['SCRIPT_FILENAME']))."/".$this->getDir(true, false, false, 0);
	}

	//
	// Debugging output
	//
	function debug()
	{
		print_r($this->path);
		print("Dir with prefix: ".$this->getDir(true, false, false, 0)."\n");
		print("Dir without prefix: ".$this->getDir(false, false, false, 0)."\n");
		print("Upper dir with prefix: ".$this->getDir(true, false, false, 1)."\n");
		print("Upper dir without prefix: ".$this->getDir(false, false, false, 1)."\n");
	}


	//
	// Set the current directory
	//
	function init()
	{
		if(!isset($_GET['dir']) || strlen($_GET['dir']) == 0)
		{
			$this->path = $this->splitPath(EncodeExplorer::getConfig('starting_dir'));
		}
		else
		{
			$this->path = $this->splitPath($_GET['dir']);
		}
	}

	//
	// Checks if the current directory is below the input path
	//
	function isSubDir($checkPath)
	{
		for($i = 0; $i < count($this->path); $i++)
		{
			if(strcmp($this->getDir(true, false, false, $i), $checkPath) == 0)
				return true;
		}
		return false;
	}

	//
	// Check if uploading is allowed into the current directory, based on the configuration
	//
	function uploadAllowed()
	{
		if(EncodeExplorer::getConfig('upload_enable') != true)
			return false;
		if(EncodeExplorer::getConfig('upload_dirs') == null || count(EncodeExplorer::getConfig('upload_dirs')) == 0)
			return true;

		$upload_dirs = EncodeExplorer::getConfig('upload_dirs');
		for($i = 0; $i < count($upload_dirs); $i++)
		{
			if($this->isSubDir($upload_dirs[$i]))
				return true;
		}
		return false;
	}

	function isWritable()
	{
		return is_writable($this->getDir(true, false, false, 0));
	}

	public static function isDirWritable($dir)
	{
		return is_writable($dir);
	}

	public static function isFileWritable($file)
	{
		if(file_exists($file))
		{
			if(is_writable($file))
				return true;
			else
				return false;
		}
		else if(Location::isDirWritable(dirname($file)))
			return true;
		else
			return false;
	}
}

class EncodeExplorer
{
	var $location;
	var $dirs;
	var $files;
	var $sort_by;
	var $sort_as;
	var $mobile;
	var $logging;
	var $spaceUsed;
	var $lang;

	//
	// Determine sorting, calculate space.
	//
	function init()
	{
		$this->sort_by = "";
		$this->sort_as = "";
		if(isset($_GET["sort_by"], $_GET["sort_as"]))
		{
			if($_GET["sort_by"] == "name" || $_GET["sort_by"] == "size" || $_GET["sort_by"] == "mod")
				if($_GET["sort_as"] == "asc" || $_GET["sort_as"] == "desc")
				{
					$this->sort_by = $_GET["sort_by"];
					$this->sort_as = $_GET["sort_as"];
				}
		}
		if(strlen($this->sort_by) <= 0 || strlen($this->sort_as) <= 0)
		{
			$this->sort_by = "name";
			$this->sort_as = "desc";
		}


		global $_TRANSLATIONS;
		if(isset($_GET['lang'], $_TRANSLATIONS[$_GET['lang']]))
			$this->lang = $_GET['lang'];
		else
			$this->lang = EncodeExplorer::getConfig("lang");

		$this->mobile = false;
		if(EncodeExplorer::getConfig("mobile_enabled") == true)
		{
			if((EncodeExplorer::getConfig("mobile_default") == true || isset($_GET['m'])) && !isset($_GET['s']))
				$this->mobile = true;
		}

		$this->logging = false;
		if(EncodeExplorer::getConfig("log_file") != null && strlen(EncodeExplorer::getConfig("log_file")) > 0)
			$this->logging = true;
	}

	//
	// Read the file list from the directory
	//
	function readDir()
	{
		global $encodeExplorer;
		//
		// Reading the data of files and directories
		//
		if($open_dir = @opendir($this->location->getFullPath()))
		{
			$this->dirs = array();
			$this->files = array();
			while ($object = readdir($open_dir))
			{
				if($object != "." && $object != "..")
				{
					if(is_dir($this->location->getDir(true, false, false, 0)."/".$object))
					{
						if(!in_array($object, EncodeExplorer::getConfig('hidden_dirs')))
							$this->dirs[] = new Dir($object, $this->location);
					}
					else if(!in_array($object, EncodeExplorer::getConfig('hidden_files')))
						$this->files[] = new File($object, $this->location);
				}
			}
			closedir($open_dir);
		}
		else
		{
			$encodeExplorer->setErrorString("unable_to_read_dir");;
		}
	}

	//
	// A recursive function for calculating the total used space
	//
	function sum_dir($start_dir, $ignore_files, $levels = 1)
	{
		if ($dir = opendir($start_dir))
		{
			$total = 0;
			while ((($file = readdir($dir)) !== false))
			{
				if (!in_array($file, $ignore_files))
				{
					if ((is_dir($start_dir . '/' . $file)) && ($levels - 1 >= 0))
					{
						$total += $this->sum_dir($start_dir . '/' . $file, $ignore_files, $levels-1);
					}
					elseif (is_file($start_dir . '/' . $file))
					{
						$total += File::getFileSize($start_dir . '/' . $file) / 1024;
					}
				}
			}

			closedir($dir);
			return $total;
		}
	}

	function calculateSpace()
	{
		if(EncodeExplorer::getConfig('calculate_space_level') <= 0)
			return;
		$ignore_files = array('..', '.');
		$start_dir = getcwd();
		$spaceUsed = $this->sum_dir($start_dir, $ignore_files, EncodeExplorer::getConfig('calculate_space_level'));
		$this->spaceUsed = round($spaceUsed/1024, 3);
	}

	function sort()
	{
		if(is_array($this->files)){
			usort($this->files, "EncodeExplorer::cmp_".$this->sort_by);
			if($this->sort_as == "desc")
				$this->files = array_reverse($this->files);
		}

		if(is_array($this->dirs)){
			usort($this->dirs, "EncodeExplorer::cmp_name");
			if($this->sort_by == "name" && $this->sort_as == "desc")
				$this->dirs = array_reverse($this->dirs);
		}
	}

	function makeArrow($sort_by)
	{
		if($this->sort_by == $sort_by && $this->sort_as == "asc")
		{
			$sort_as = "desc";
			$img = "arrow_up";
		}
		else
		{
			$sort_as = "asc";
			$img = "arrow_down";
		}

		if($sort_by == "name")
			$text = $this->getString("file_name");
		else if($sort_by == "size")
			$text = $this->getString("size");
		else if($sort_by == "mod")
			$text = $this->getString("last_changed");

		return "<a href=\"".$this->makeLink(false, false, $sort_by, $sort_as, null, $this->location->getDir(false, true, false, 0))."\">
			$text <img style=\"border:0;\" alt=\"".$sort_as."\" src=\"?img=".$img."\" /></a>";
	}

	function makeLink($switchVersion, $logout, $sort_by, $sort_as, $delete, $dir)
	{
		$link = "?";
		if($switchVersion == true && EncodeExplorer::getConfig("mobile_enabled") == true)
		{
			if($this->mobile == false)
				$link .= "m&amp;";
			else
				$link .= "s&amp;";
		}
		else if($this->mobile == true && EncodeExplorer::getConfig("mobile_enabled") == true && EncodeExplorer::getConfig("mobile_default") == false)
			$link .= "m&amp;";
		else if($this->mobile == false && EncodeExplorer::getConfig("mobile_enabled") == true && EncodeExplorer::getConfig("mobile_default") == true)
			$link .= "s&amp;";

		if($logout == true)
		{
			$link .= "logout";
			return $link;
		}

		if(isset($this->lang) && $this->lang != EncodeExplorer::getConfig("lang"))
			$link .= "lang=".$this->lang."&amp;";

		if($sort_by != null && strlen($sort_by) > 0)
			$link .= "sort_by=".$sort_by."&amp;";

		if($sort_as != null && strlen($sort_as) > 0)
			$link .= "sort_as=".$sort_as."&amp;";

		$link .= "dir=".$dir;
		if($delete != null)
			$link .= "&amp;del=".$delete;
		return $link;
	}

	function makeIcon($l)
	{
		$l = strtolower($l);
		return "?img=".$l;
	}

	function formatModTime($time)
	{
		$timeformat = "d.m.y H:i:s";
		if(EncodeExplorer::getConfig("time_format") != null && strlen(EncodeExplorer::getConfig("time_format")) > 0)
			$timeformat = EncodeExplorer::getConfig("time_format");
		return date($timeformat, $time);
	}

	function formatSize($size)
	{
		$sizes = Array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
		$y = $sizes[0];
		for ($i = 1; (($i < count($sizes)) && ($size >= 1024)); $i++)
		{
			$size = $size / 1024;
			$y  = $sizes[$i];
		}
		return round($size, 2)." ".$y;
	}

	//
	// Debugging output
	//
	function debug()
	{
		print("Explorer location: ".$this->location->getDir(true, false, false, 0)."\n");
		for($i = 0; $i < count($this->dirs); $i++)
			$this->dirs[$i]->output();
		for($i = 0; $i < count($this->files); $i++)
			$this->files[$i]->output();
	}

	//
	// Comparison functions for sorting.
	//

	public static function cmp_name($b, $a)
	{
		return strcasecmp($a->name, $b->name);
	}

	public static function cmp_size($a, $b)
	{
		return ($a->size - $b->size);
	}

	public static function cmp_mod($b, $a)
	{
		return ($a->modTime - $b->modTime);
	}

	//
	// The function for getting a translated string.
	// Falls back to english if the correct language is missing something.
	//
	public static function getLangString($stringName, $lang)
	{
		global $_TRANSLATIONS;
		if(isset($_TRANSLATIONS[$lang]) && is_array($_TRANSLATIONS[$lang])
			&& isset($_TRANSLATIONS[$lang][$stringName]))
			return $_TRANSLATIONS[$lang][$stringName];
		else if(isset($_TRANSLATIONS["en"]))// && is_array($_TRANSLATIONS["en"])
			//&& isset($_TRANSLATIONS["en"][$stringName]))
			return $_TRANSLATIONS["en"][$stringName];
		else
			return "Translation error";
	}

	function getString($stringName)
	{
		return EncodeExplorer::getLangString($stringName, $this->lang);
	}

	//
	// The function for getting configuration values
	//
	public static function getConfig($name)
	{
		global $_CONFIG;
		if(isset($_CONFIG, $_CONFIG[$name]))
			return $_CONFIG[$name];
		return null;
	}

	public static function setError($message)
	{
		global $_ERROR;
		if(isset($_ERROR) && strlen($_ERROR) > 0)
			;// keep the first error and discard the rest
		else
			$_ERROR = $message;
	}

	function setErrorString($stringName)
	{
		EncodeExplorer::setError($this->getString($stringName));
	}

	//
	// Main function, activating tasks
	//
	function run($location)
	{
		$this->location = $location;
		$this->calculateSpace();
		$this->readDir();
		$this->sort();
		$this->outputHtml();
	}

	public function printLoginBox()
	{
		?>
		<div id="login">
		<form enctype="multipart/form-data" action="<?php print $this->makeLink(false, false, null, null, null, ""); ?>" method="post">
		<?php
		if(GateKeeper::isLoginRequired())
		{
			$require_username = false;
			foreach(EncodeExplorer::getConfig("users") as $user){
				if($user[0] != null && strlen($user[0]) > 0){
					$require_username = true;
					break;
				}
			}
			if($require_username)
			{
			?>
			<div><label for="user_name"><?php print $this->getString("username"); ?>:</label>
			<input type="text" name="user_name" value="" id="user_name" /></div>
			<?php
			}
			?>
			<div><label for="user_pass"><?php print $this->getString("password"); ?>:</label>
			<input type="password" name="user_pass" id="user_pass" /></div>
			<div><input type="submit" value="<?php print $this->getString("log_in"); ?>" class="button" /></div>
		</form>
		</div>
	<?php
		}
	}

	//
	// Printing the actual page
	//
	function outputHtml()
	{
		global $_ERROR;
		global $_START_TIME;
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $this->getConfig('lang'); ?>" lang="<?php print $this->getConfig('lang'); ?>">
<head>
<meta name="viewport" content="width=device-width" />
<meta http-equiv="Content-Type" content="text/html; charset=<?php print $this->getConfig('charset'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon-next.png">
<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32-next.png">
<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16-next.png">
<link rel="mask-icon" href="/images/logo.svg" color="#222">
<?php css(); ?>
<!-- <meta charset="<?php print $this->getConfig('charset'); ?>" /> -->
<?php
if(($this->getConfig('log_file') != null && strlen($this->getConfig('log_file')) > 0)
	|| ($this->getConfig('thumbnails') != null && $this->getConfig('thumbnails') == true && $this->mobile == false)
	|| (GateKeeper::isDeleteAllowed()))
{
?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript">
//<![CDATA[
$(document).ready(function() {
<?php
	if(GateKeeper::isDeleteAllowed()){
?>
	$('td.del a').click(function(){
		var answer = confirm('Are you sure you want to delete : \'' + $(this).attr("data-name") + "\' ?");
		return answer;
	});
<?php
	}
	if($this->logging == true)
	{
?>
		function logFileClick(path)
		{
			 $.ajax({
					async: false,
					type: "POST",
					data: {log: path},
					contentType: "application/x-www-form-urlencoded; charset=UTF-8",
					cache: false
				});
		}

		$("a.file").click(function(){
			logFileClick("<?php print $this->location->getDir(true, true, false, 0);?>" + $(this).html());
			return true;
		});
<?php
	}
	if(EncodeExplorer::getConfig("thumbnails") == true && $this->mobile == false)
	{
?>
		function positionThumbnail(e) {
			xOffset = 30;
			yOffset = 10;
			$("#thumb").css("left",(e.clientX + xOffset) + "px");

			diff = 0;
			if(e.clientY + $("#thumb").height() > $(window).height())
				diff = e.clientY + $("#thumb").height() - $(window).height();

			$("#thumb").css("top",(e.pageY - yOffset - diff) + "px");
		}

		$("a.thumb").hover(function(e){
			$("#thumb").remove();
			$("body").append("<div id=\"thumb\"><img src=\"?thumb="+ $(this).attr("href") +"\" alt=\"Preview\" \/><\/div>");
			positionThumbnail(e);
			$("#thumb").fadeIn("medium");
		},
		function(){
			$("#thumb").remove();
		});

		$("a.thumb").mousemove(function(e){
			positionThumbnail(e);
			});

		$("a.thumb").click(function(e){$("#thumb").remove(); return true;});
<?php
	}
?>
	});
//]]>
</script>
<?php
}
?>
<title><?php if(EncodeExplorer::getConfig('main_title') != null) print EncodeExplorer::getConfig('main_title'); ?></title>
</head>
<body class="<?php print ($this->mobile == true?"mobile":"standard");?>">
<?php
//
// Print the error (if there is something to print)
//
if(isset($_ERROR) && strlen($_ERROR) > 0)
{
	print "<div id=\"error\">".$_ERROR."</div>";
}
?>
<div id="frame">
<?php
if(EncodeExplorer::getConfig('show_top') == true)
{
?>
<div id="top">
	<a href="<?php print $this->makeLink(false, false, null, null, null, ""); ?>"><span><?php if(EncodeExplorer::getConfig('main_title') != null) print EncodeExplorer::getConfig('main_title'); ?></span></a>
<?php
if(EncodeExplorer::getConfig("secondary_titles") != null && is_array(EncodeExplorer::getConfig("secondary_titles")) && count(EncodeExplorer::getConfig("secondary_titles")) > 0 && $this->mobile == false)
{
	$secondary_titles = EncodeExplorer::getConfig("secondary_titles");
	print "<div class=\"subtitle\">".$secondary_titles[array_rand($secondary_titles)]."</div>\n";
}
?>
</div>
<?php
}

// Checking if the user is allowed to access the page, otherwise showing the login box
if(!GateKeeper::isAccessAllowed())
{
	$this->printLoginBox();
}
else
{
if($this->mobile == false && EncodeExplorer::getConfig("show_path") == true)
{
?>
<div class="breadcrumbs">
<a href="?dir="><?php print $this->getString("root"); ?></a>
<?php
	for($i = 0; $i < count($this->location->path); $i++)
	{
		print "&gt; <a href=\"".$this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, count($this->location->path) - $i - 1))."\">";
		print $this->location->getPathLink($i, true);
		print "</a>\n";
	}
?>
</div>
<?php
}
?>

<!-- START: List table -->
<table class="table">
<?php
if($this->mobile == false)
{
?>
<tr class="row one header">
	<td class="icon"> </td>
	<td class="name"><?php print $this->makeArrow("name");?></td>
	<td class="size"><?php print $this->makeArrow("size"); ?></td>
	<td class="changed"><?php print $this->makeArrow("mod"); ?></td>
	<?php if($this->mobile == false && GateKeeper::isDeleteAllowed()){?>
	<td class="del"><?php print EncodeExplorer::getString("del"); ?></td>
	<?php } ?>
</tr>
<?php
}
?>
<tr class="row two">
	<td class="icon"><img alt="dir" src="?img=directory" /></td>
	<td colspan="<?php print (($this->mobile == true?2:(GateKeeper::isDeleteAllowed()?4:3))); ?>" class="long">
		<a class="item" href="<?php print $this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, 1)); ?>">..</a>
	</td>
</tr>
<?php
//
// Ready to display folders and files.
//
$row = 1;

//
// Folders first
//
if($this->dirs)
{
	foreach ($this->dirs as $dir)
	{
		$row_style = ($row ? "one" : "two");
		print "<tr class=\"row ".$row_style."\">\n";
		print "<td class=\"icon\"><img alt=\"dir\" src=\"?img=directory\" /></td>\n";
		print "<td class=\"name\" colspan=\"".($this->mobile == true?2:3)."\">\n";
		print "<a href=\"".$this->makeLink(false, false, null, null, null, $this->location->getDir(false, true, false, 0).$dir->getNameEncoded())."\" class=\"item dir\">";
		print $dir->getNameHtml();
		print "</a>\n";
		print "</td>\n";
		if($this->mobile == false && GateKeeper::isDeleteAllowed()){
			print "<td class=\"del\"><a data-name=\"".htmlentities($dir->getName())."\" href=\"".$this->makeLink(false, false, null, null, $this->location->getDir(false, true, false, 0).$dir->getNameEncoded(), $this->location->getDir(false, true, false, 0))."\"><img src=\"?img=del\" alt=\"Delete\" /></a></td>";
		}
		print "</tr>\n";
		$row =! $row;
	}
}

//
// Now the files
//
if($this->files)
{
	$count = 0;
	foreach ($this->files as $file)
	{
		$row_style = ($row ? "one" : "two");
		print "<tr class=\"row ".$row_style.(++$count == count($this->files)?" last":"")."\">\n";
		print "<td class=\"icon\"><img alt=\"".$file->getType()."\" src=\"".$this->makeIcon($file->getType())."\" /></td>\n";
		print "<td class=\"name\">\n";
		print "\t\t<a href=\"".$this->location->getDir(false, true, false, 0).$file->getNameEncoded()."\"";
		if(EncodeExplorer::getConfig('open_in_new_window') == true)
			print "target=\"_blank\"";
		print " class=\"item file";
		if($file->isValidForThumb())
			print " thumb";
		print "\">";
		print $file->getNameHtml();
		if($this->mobile == true)
		{
			print "<span class =\"size\">".$this->formatSize($file->getSize())."</span>";
		}
		print "</a>\n";
		print "</td>\n";
		if($this->mobile != true)
		{
			print "<td class=\"size\">".$this->formatSize($file->getSize())."</td>\n";
			print "<td class=\"changed\">".$this->formatModTime($file->getModTime())."</td>\n";
		}
		if($this->mobile == false && GateKeeper::isDeleteAllowed()){
			print "<td class=\"del\">
				<a data-name=\"".htmlentities($file->getName())."\" href=\"".$this->makeLink(false, false, null, null, $this->location->getDir(false, true, false, 0).$file->getNameEncoded(), $this->location->getDir(false, true, false, 0))."\">
					<img src=\"?img=del\" alt=\"Delete\" />
				</a>
			</td>";
		}
		print "</tr>\n";
		$row =! $row;
	}
}


//
// The files and folders have been displayed
//
?>

</table>
<!-- END: List table -->
<?php
}
?>
<?php
if(GateKeeper::isAccessAllowed() && GateKeeper::showLoginBox()){
?>
<!-- START: Login area -->
<form enctype="multipart/form-data" method="post">
	<div id="login_bar">
	<?php print $this->getString("username"); ?>:
	<input type="text" name="user_name" value="" id="user_name" />
	<?php print $this->getString("password"); ?>:
	<input type="password" name="user_pass" id="user_pass" />
	<input type="submit" class="submit" value="<?php print $this->getString("log_in"); ?>" />
	<div class="bar"></div>
	</div>
</form>
<!-- END: Login area -->
<?php
}

if(GateKeeper::isAccessAllowed() && $this->location->uploadAllowed() && (GateKeeper::isUploadAllowed() || GateKeeper::isNewdirAllowed()))
{
?>
<!-- START: Upload area -->
<form enctype="multipart/form-data" method="post">
	<div id="upload">
		<?php
		if(GateKeeper::isNewdirAllowed()){
		?>
		<div id="newdir_container">
			<input name="userdir" type="text" class="upload_dirname" />
			<input type="submit" value="<?php print $this->getString("make_directory"); ?>" />
		</div>
		<?php
		}
		if(GateKeeper::isUploadAllowed()){
		?>
		<div id="upload_container">
			<input name="userfile" type="file" class="upload_file" />
			<input type="submit" value="<?php print $this->getString("upload"); ?>" class="upload_sumbit" />
		</div>
		<?php
		}
		?>
		<div class="bar"></div>
	</div>
</form>
<!-- END: Upload area -->
<?php
}

?>
<!-- START: Info area -->
<div id="info">
<?php
if(GateKeeper::isUserLoggedIn())
	print "<a href=\"".$this->makeLink(false, true, null, null, null, "")."\">".$this->getString("log_out")."</a> | ";

if(EncodeExplorer::getConfig("mobile_enabled") == true)
{
	print "<a href=\"".$this->makeLink(true, false, null, null, null, $this->location->getDir(false, true, false, 0))."\">\n";
	print ($this->mobile == true)?$this->getString("standard_version"):$this->getString("mobile_version")."\n";
	print "</a> | \n";
}
if(GateKeeper::isAccessAllowed() && $this->getConfig("calculate_space_level") > 0 && $this->mobile == false)
{
	print $this->getString("total_used_space").": ".$this->spaceUsed." MB | ";
}
if($this->mobile == false && $this->getConfig("show_load_time") == true)
{
	printf($this->getString("page_load_time")." | ", (microtime(TRUE) - $_START_TIME)*1000);
}
?>
<a href="http://blog.cyfan.ga">CYF矫情汉化</a>
</div>
<!-- END: Info area -->



<?php
	}
}

//
// This is where the system is activated.
// We check if the user wants an image and show it. If not, we show the explorer.
//
$encodeExplorer = new EncodeExplorer();
$encodeExplorer->init();

GateKeeper::init();

if(!ImageServer::showImage() && !Logger::logQuery())
{
	$location = new Location();
	$location->init();
	if(GateKeeper::isAccessAllowed())
	{
		Logger::logAccess($location->getDir(true, false, false, 0), true);
		$fileManager = new FileManager();
		$fileManager->run($location);
	}
	$encodeExplorer->run($location);
}
?>


</body>
</html>