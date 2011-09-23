<?php
//german
if (!isset($_SESSION['settings']['cpassman_url'])) {
$cpassman_url = '';
}else{
$cpassman_url = $_SESSION['settings']['cpassman_url'];
}

$txt['account_is_locked'] = "Dieses Konto wurde gesperrt";
$txt['activity'] = "Activity";
$txt['add_button'] = "Hinzufügen";
$txt['add_new_group'] = "Neuen Ordner hinzufügen";
$txt['add_role_tip'] = "Neue Rolle hinzufügen";
$txt['admin'] = "Administration";
$txt['admin_action'] = "Bitte bestätigen Sie Ihre Aktion";
$txt['admin_actions_title'] = "Spezielle Aktionen";
$txt['admin_action_check_pf'] = "Persönliche Ordner für alle Benutzer aktualisieren (Ordner werden erstellt, wenn sie nicht existieren)";
$txt['admin_action_db_backup'] = "Backup der Datenbank erstellen";
$txt['admin_action_db_backup_key_tip'] = "Bitte geben Sie das Verschlüsselungspasswort ein. Sichern Sie es irgendwo, es wird zur Wiederherstellung benötigt. (leer lassen, um nicht zu verschlüsseln)";
$txt['admin_action_db_backup_start_tip'] = "Start";
$txt['admin_action_db_backup_tip'] = "Es gehört zur guten Praxis, regelmäßig Backups Ihrer Datenbank zu erstellen. Mit Hilfe der Backups können Sie Ihre Daten bei Bedarf wiederherstellen.";
$txt['admin_action_db_clean_items'] = "Verwaiste Elemente aus der Datenbank entfernen";
$txt['admin_action_db_clean_items_result'] = "Elemente wurden entfernt.";
$txt['admin_action_db_clean_items_tip'] = "Dadurch werden nur Elemente und Protokolle aus der Datenbank gelöscht, die nicht entfernt wurden, nachdem der zugehörige Ordner gelöscht wurde. Es ist empfehlenswert vorher ein Backup zu erstellen.";
$txt['admin_action_db_optimize'] = "Datenbank optimieren";
$txt['admin_action_db_restore'] = "Datenbank wiederherstellen";
$txt['admin_action_db_restore_key'] = "Bitte geben Sie das Verschlüsselungspasswort ein.";
$txt['admin_action_db_restore_tip'] = "Muss mit einer SQL Backupdatei durchgeführt werden, die mit der Backupfunktion erstellt wurde.";
$txt['admin_action_purge_old_files'] = "Alte Dateien bereinigen";
$txt['admin_action_purge_old_files_result'] = "Dateien wurden entfernt.";
$txt['admin_action_purge_old_files_tip'] = "Dadurch werden alle temporären Dateien gelöscht, die älter als 7 Tage sind.";
$txt['admin_action_reload_cache_table'] = "Tabellencache einlesen";
$txt['admin_action_reload_cache_table_tip'] = "Hiermit kann man den Tabellencache wieder einlesen. In manchen Situationen kann dies nützlich sein.";
$txt['admin_backups'] = "Datensicherungen";
$txt['admin_error_no_complexity'] = "(<a href='index.php?page=manage_groups'>Definieren?</a>)";
$txt['admin_error_no_visibility'] = "Niemand kann dieses Element sehen. (<a href='index.php?page=manage_roles'>Rollen anpassen</a>)";
$txt['admin_functions'] = "Rollenverwaltung";
$txt['admin_groups'] = "Ordnerverwaltung";
$txt['admin_help'] = "Hilfe";
$txt['admin_info'] = "Ein paar Informationen über das Programm";
$txt['admin_info_loading'] = "Daten werden geladen ... bitte warten";
$txt['admin_ldap_configuration'] = "LDAP Konfiguration";
$txt['admin_ldap_menu'] = "LDAP Optionen";
$txt['admin_main'] = "Informationen";
$txt['admin_misc_cpassman_dir'] = "Vollständiger Pfad zu cPassMan";
$txt['admin_misc_cpassman_url'] = "Vollständige URL zu cPassMan";
$txt['admin_misc_custom_login_text'] = "Eigener Anmeldetext";
$txt['admin_misc_custom_logo'] = "Vollständiger URL-Pfad zum eigenen Anmeldelogo";
$txt['admin_misc_favicon'] = "Vollständiger Pfad zur favicon-Datei";
$txt['admin_misc_title'] = "Weitere Einstellungen";
$txt['admin_one_shot_backup'] = "Einmaliges sichern und wiederherstellen";
$txt['admin_script_backups'] = "Einstellungen für das Datensicherungsskript";
$txt['admin_script_backups_tip'] = "Für mehr Sicherheit ist es notwendig eine regelmäßige Sicherung der Datenbank zu konfigurieren. <br />Benutzen Sie Ihren Server um einen täglichen cronjob zu erstellen indem sie die Datei 'script.backup.php' in dem Verzeichnis 'backups' aufrufen.<br />Sie müssen zuerst die 2 ersten Parameter konfigurieren und diese SPEICHERN.";
$txt['admin_script_backup_decrypt'] = "Dateiname der zu entschlüsselnden Datei";
$txt['admin_script_backup_decrypt_tip'] = "Um eine Datensicherung zu entschlüsseln müssen Sie nur den Namen der Datei angeben (ohne Erweiterung und Pfad).<br />Die Datei wird in dem gleichen Verzeichnis entschlüsselt indem sich auch die Datensicherungen befinden.";
$txt['admin_script_backup_encryption'] = "Encryption key (optional)";
$txt['admin_script_backup_encryption_tip'] = "Wenn gesetzt, wird der key verwendet um die Datei zu verschlüsseln";
$txt['admin_script_backup_filename'] = "Dateiname der Datensicherung";
$txt['admin_script_backup_filename_tip'] = "Dateiname der für die Datensicherungen verwendet werden soll";
$txt['admin_script_backup_path'] = "Pfad unter welchem die Datensicherungen gespeichert werden sollen";
$txt['admin_script_backup_path_tip'] = "In welchem Verzeichnis sollen die Datensicherungen gespeichert werden";
$txt['admin_settings'] = "Einstellungen";
$txt['admin_settings_title'] = "cPassMan Einstellungen";
$txt['admin_setting_activate_expiration'] = "Ablauf von Passwörtern aktivieren";
$txt['admin_setting_activate_expiration_tip'] = "Wenn aktiviert, werden abgelaufene Passwörtern den Benutzern nicht mehr angezeigt.";
$txt['admin_users'] = "Benutzerverwaltung";
$txt['admin_views'] = "Protokolle";
$txt['alert_message_done'] = "Fertig!";
$txt['alert_message_personal_sk_missing'] = "Sie müssen Ihren persönlichen SALT-Schlüssel eingeben!";
$txt['all'] = "Alle";
$txt['anyone_can_modify'] = "Bearbeitung des Elements durch jeden Benutzer mit Zugriff auf dieses Element zulassen";
$txt['associated_role'] = "Welche Rolle soll diesem Ordner zugeordnet werden:";
$txt['associate_kb_to_items'] = "Wählen Sie die Elemente, die diesem KB zugeordnet werden sollen";
$txt['assoc_authorized_groups'] = "Sichtbare zugeteilte Ordner";
$txt['assoc_forbidden_groups'] = "Unsichtbare zugeteilte Ordner";
$txt['at'] = " um ";
$txt['at_add_file'] = "Datei hinzugefügt";
$txt['at_category'] = "Ordner";
$txt['at_copy'] = "Copy created";
$txt['at_copy'] = "Copy done";
$txt['at_creation'] = "hinzugefügt";
$txt['at_delete'] = "gelöscht";
$txt['at_del_file'] = "Datei gelöscht";
$txt['at_description'] = "Beschreibung.";
$txt['at_file'] = "Datei";
$txt['at_import'] = "importiert";
$txt['at_label'] = "Bezeichnung";
$txt['at_login'] = "Benutzerkonto";
$txt['at_modification'] = "geändert";
$txt['at_personnel'] = "Beteiligte";
$txt['at_pw'] = "Passwort geändert.";
$txt['at_restored'] = "wiederhergestellt";
$txt['at_shown'] = "Accessed";
$txt['at_url'] = "URL";
$txt['auteur'] = "Autor";
$txt['author'] = "Autor";
$txt['authorized_groups'] = "Sichtbare Ordner";
$txt['auth_creation_without_complexity'] = "Erstellung von Passwörtern ungeachtet der eingestellten Passwortkomplexität zulassen";
$txt['auth_modification_without_complexity'] = "Bearbeitung von Elemente ungeachtet der eingestellten Passwortskomplexität zulassen";
$txt['auto_create_folder_role'] = "Ordner und Rolle erstellen für";
$txt['block_last_created'] = "Zuletzt erstellt";
$txt['bugs_page'] = "Falls Sie in cPassman einen Fehler entdecken, können Sie ihn direkt posten unter <a href='https://sourceforge.net/tracker/?group_id=280505&amp;atid=1190333' target='_blank'><u>Bugs Forum</u></a>.";
$txt['by'] = "von";
$txt['cancel'] = "Abbrechen";
$txt['cancel_button'] = "Abbrechen";
$txt['can_create_root_folder'] = "Kann Ordner in der root-Ebene erstellen";
$txt['changelog'] = "Versionsänderungen";
$txt['change_authorized_groups'] = "sichtbare Ordner ändern";
$txt['change_forbidden_groups'] = "unsichtbare Ordner ändern";
$txt['change_function'] = "Rollen ändern";
$txt['change_group_autgroups_info'] = "Wählen Sie die Ordner, die diese Rolle sehen und benutzen darf";
$txt['change_group_autgroups_title'] = "Sichtbare Ordner anpassen";
$txt['change_group_forgroups_info'] = "Wählen Sie die Ordner, die diese Rolle weder sehen noch benutzen darf";
$txt['change_group_forgroups_title'] = "Unsichtbare Ordner anpassen";
$txt['change_user_autgroups_info'] = "Wählen Sie die Ordner, die dieses Konto sehen und benutzen darf";
$txt['change_user_autgroups_title'] = "Sichtbare Ordner anpassen";
$txt['change_user_forgroups_info'] = "Wählen Sie die Ordner, die dieses Konto weder sehen noch benutzen darf";
$txt['change_user_forgroups_title'] = "Unsichtbare Ordner anpassen";
$txt['change_user_functions_info'] = "Wählen Sie die diesem Konto zuzuordnenden Funktionen";
$txt['change_user_functions_title'] = "Zugeordnete Funktionen anpassen";
$txt['check_all_text'] = "Alle auswählen";
$txt['close'] = "Schließen";
$txt['complexity'] = "Passwortkomplexität";
$txt['complex_asked'] = "min. Komplexität";
$txt['complex_asked'] = "min. Komplexität";
$txt['complex_level0'] = "sehr schwach";
$txt['complex_level1'] = "schwach";
$txt['complex_level2'] = "gut";
$txt['complex_level3'] = "besser";
$txt['complex_level4'] = "sehr gut";
$txt['complex_level5'] = "ausgezeichnet";
$txt['complex_level6'] = "p3rf3kt!";
$txt['confirm'] = "Bestätigen";
$txt['confirm_delete_group'] = "Sie möchten diesen Ordner und alle darin enthaltenen Elemente löschen ... sind Sie sicher?";
$txt['confirm_deletion'] = "Sind Sie sicher?";
$txt['confirm_del_account'] = "Sie möchten diess Konto löschen. Sind Sie sicher?";
$txt['confirm_del_from_fav'] = "Bitte bestätigen Sie die Löschung des Favoriten";
$txt['confirm_del_role'] = "Bitte bestätigen Sie die Löschung der folgenden Rolle:";
$txt['confirm_edit_role'] = "Bitte geben Sie den neuen Namen für folgende Rolle ein:";
$txt['confirm_lock_account'] = "You have decided to LOCK this Account. Are you sure?";
$txt['connection'] = "Verbindungsaufbau";
$txt['connections'] = "Verbindungen";
$txt['copy'] = "Kopieren";
$txt['copy_to_clipboard_small_icons'] = "Kleine Symbole bei Kopieren in Zwischenspeicher aktivieren";
$txt['copy_to_clipboard_small_icons_tip'] = "<span style='font-size:11px;max-width:300px;'>Dies kann die Speicheranforderungen für Benutzer älterer Computer reduzieren.<br /> Die Elementinformationen werden nicht in den Zwischenspeicher geladen. Schnelles Kopieren von Benutzernamen und Passwörtern ist jedoch nicht möglich.</span> ";
$txt['creation_date'] = "Erstellungsdatum";
$txt['csv_import_button_text'] = "CSV-Datei suchen";
$txt['date'] = "Datum";
$txt['date'] = "Datum";
$txt['date_format'] = "Datumsformat";
$txt['days'] = "Tage(n)";
$txt['definition'] = "Definition";
$txt['delete'] = "Löschen";
$txt['deletion'] = "Gelöschte Elemente";
$txt['deletion_title'] = "Liste gelöschter Elemente";
$txt['del_button'] = "Löschen";
$txt['del_function'] = "Rollen löschen";
$txt['del_group'] = "Ordner löschen";
$txt['description'] = "Beschreibung";
$txt['description'] = "Beschreibung";
$txt['disconnect'] = "Abmelden";
$txt['disconnection'] = "Verbindungsabbruch";
$txt['div_dialog_message_title'] = "Informationen";
$txt['done'] = "Fertig";
$txt['drag_drop_helper'] = "Element ziehen und ablegen";
$txt['duplicate_folder'] = "Mehrere Ordner mit dem selben Namen erlauben.";
$txt['duplicate_item'] = "Mehrere Elemente mit dem selben Namen erlauben.";
$txt['email'] = "Email";
$txt['email_altbody_1'] = "Element";
$txt['email_altbody_2'] = "wurde erstellt.";
$txt['email_announce'] = "Dieses Element per Email bekannt geben";
$txt['email_body1'] = "Hallo,<br><br>Der cPassMan-Eintrag '";
$txt['email_body2'] = "wurde erstellt.<br /><br />Sie können ihn unter folgendem Link einsehen <a href='";
$txt['email_body3'] = "'>HIER</a><br /><br />Viele Grüße.";
$txt['email_change'] = "Die Email-Adresse des Benutzerkontos ändern";
$txt['email_changed'] = "Email-Adresse wurde geändert!";
$txt['email_select'] = "Wählen Sie die zu informierenden Personen aus";
$txt['email_subject'] = "Ein neues Element wird in der Passwortverwaltung erstellt";
$txt['email_subject_new_user'] = "[cPassMan] Erstellung Ihres Benutzerkontos";
$txt['email_text_new_user'] = "Hallo,<br /><br />Ihr Benutzerkonto in cPassMan wurde erstellt.<br />Sie können sich in $cpassman_url mit folgenden Logindaten anmelden:<br />";
$txt['enable_favourites'] = "Benutzern erlauben Favoriten anzulegen";
$txt['enable_personal_folder'] = "Persönlichen Ordner aktivieren";
$txt['enable_personal_folder_feature'] = "Aktiviere die Funktion Persönliche Ordner";
$txt['enable_user_can_create_folders'] = "Benutzer dürfen in erlaubten übergeordneten Verzeichnissen Unterverzeichnisse verwalten";
$txt['encrypt_key'] = "Verschlüsselungspasswort";
$txt['errors'] = "Fehler";
$txt['error_complex_not_enought'] = "Das Passwort ist nicht ausreichend komplex!";
$txt['error_confirm'] = "Die Passwortbestätigung ist nicht korrekt!";
$txt['error_cpassman_dir'] = "Es wurde kein Pfad für cPassMan definiert. Bitte wählen Sie die Registrierkarte 'cPassMan Eigenschaften' auf der Administrations-Seite.";
$txt['error_cpassman_url'] = "Es wurde keine URL für cPAssMan definiert. Bitte wählen Sie die Registrierkarte 'cPassMan Eigenschaften' auf der Administrations-Seite.";
$txt['error_fields_2'] = "Diese 2 Felder sind erforderlich!";
$txt['error_group'] = "Ein Ordner ist erforderlich!";
$txt['error_group_complex'] = "Dem Ordner muss eine Passwortkomplexitätsstufe zugeordnet sein!";
$txt['error_group_exist'] = "Dieser Ordner existiert bereits!";
$txt['error_group_label'] = "Der Ordner muss benannt werden!";
$txt['error_html_codes'] = "Ein Teil des Textes enthält HTML Code! Dies ist nicht erlaubt.";
$txt['error_item_exists'] = "Dieses Element existiert bereits!";
$txt['error_label'] = "Eine Bezeichnung ist erforderlich!";
$txt['error_must_enter_all_fields'] = "Alle Felder müssen angegeben werden!";
$txt['error_mysql'] = "MySQL-Fehler!";
$txt['error_not_authorized'] = "Sie sind nicht berechtigt, diese Seite zu sehen.";
$txt['error_not_exists'] = "Diese Seite existiert nicht.";
$txt['error_no_folders'] = "Sie sollten mit dem Erstellen von Ordnern beginnen.";
$txt['error_no_password'] = "Sie müssen Ihr Passwort eingeben!";
$txt['error_no_roles'] = "Sie sollten außerdem einige Rollen erstellen und sie Ordnern zuweisen.";
$txt['error_password_confirmation'] = "Passwörter sollten identisch sein";
$txt['error_pw'] = "Ein Passwort ist erforderlich!";
$txt['error_renawal_period_not_integer'] = "Der Erneuerungsintervall sollte in Monaten angegeben werden!";
$txt['error_salt'] = "<b>Der SALT Schlüssel ist zu lang! Bitte benutzen Sie das Werkzeug nicht, bis ein Administrator den SALT Schlüssel geändert hat.</b> Der SALT Schlüssel in der Datei 'settings.php' sollte nicht mehr als 32 Zeichen beinhalten.";
$txt['error_tags'] = "Keine Interpunktionszeichen (außer Leerzeichen) in TAGS erlaubt!";
$txt['error_user_exists'] = "Benutzer existiert bereits";
$txt['expiration_date'] = "Ablaufdatum";
$txt['expir_one_month'] = "1 Monat";
$txt['expir_one_year'] = "1 Jahr";
$txt['expir_six_months'] = "6 Monaten";
$txt['expir_today'] = "heute";
$txt['files_&_images'] = "Dateien und Bilder";
$txt['find'] = "Suche";
$txt['find_text'] = "Ihr Suchtext";
$txt['folders'] = "Ordner";
$txt['forbidden_groups'] = "Unsichtbare Ordner";
$txt['forgot_my_pw'] = "Haben Sie Ihr Passwort vergessen?";
$txt['forgot_my_pw_email_sent'] = "Email wurde verschickt";
$txt['forgot_my_pw_error_email_not_exist'] = "Diese Email-Mail-Adresse existiert nicht!";
$txt['forgot_my_pw_text'] = "Ihr Passwort wird per Email an die Ihrem Konto zugeordnete Adresse zugeschickt.";
$txt['forgot_pw_email_altbody_1'] = "Hallo, Ihre Anmeldedaten für cPassMan lauten:";
$txt['forgot_pw_email_body'] = "Hallo,<br><br>Ihr neues Passwort für cPassMan lautet:";
$txt['forgot_pw_email_body'] = "Hallo,<br><br>Ihr neues Passwort für cPassMan lautet:";
$txt['forgot_pw_email_body_1'] = "Hallo, <br /><br />Ihre Anmeldedaten für cPassMan lauten:<br /><br />";
$txt['forgot_pw_email_subject'] = "cPassMan - Ihr Passwort";
$txt['forgot_pw_email_subject_confirm'] = "[cPassMan] - Ihr Passwort, Schritt Nr. 2";
$txt['functions'] = "Rollen";
$txt['function_alarm_no_group'] = "Diese Rolle wurde keinem Ordner zugeordnet!";
$txt['generate_pdf'] = "PDF-Datei erstellen";
$txt['generation_options'] = "Erstellungsoptionen";
$txt['gestionnaire'] = "Manager";
$txt['give_function_tip'] = "Eine neue Rolle hinzufügen";
$txt['give_function_title'] = "Eine neue Rolle hinzufügen";
$txt['give_new_email'] = "Bitte geben Sie eine neue Email-Adresse ein für";
$txt['give_new_login'] = "Bitte wählen Sie das Konto aus";
$txt['give_new_pw'] = "Bitte vergeben Sie ein neues Passwort für";
$txt['god'] = "GOTT (allmächtig)";
$txt['group'] = "Ordner";
$txt['group_parent'] = "Unterordner von";
$txt['group_pw_duration'] = "Erneuerungsintervall";
$txt['group_pw_duration_tip'] = "in Monaten (0 = deaktiviert)";
$txt['group_select'] = "Ordner auswählen";
$txt['group_title'] = "Bezeichnung";
$txt['history'] = "Verlauf";
$txt['home'] = "Startseite";
$txt['home_personal_menu'] = "Persönliche Aktionen";
$txt['home_personal_saltkey'] = "Ihr persönlicher SALT Schlüssel";
$txt['home_personal_saltkey_button'] = "Speichern!";
$txt['home_personal_saltkey_info'] = "Sie sollten einen persönlichen SALT Schlüssel eingeben, falls Sie persönliche Elemente anlegen möchten.";
$txt['home_personal_saltkey_label'] = "Geben Sie Ihren persönlichen SALT Schlüssel ein";
$txt['importing_details'] = "Detailliste";
$txt['importing_folders'] = "Ordner werden importiert";
$txt['importing_items'] = "Elemente werden importiert";
$txt['import_button'] = "Importieren";
$txt['import_csv_anyone_can_modify_in_role_txt'] = "Benutzerrecht \"Änderbar durch alle derselben Rolle\" für alle importierten Elemente setzen";
$txt['import_csv_anyone_can_modify_txt'] = "Benutzerrecht \"Änderbar durch alle\" für alle importierten Elemente setzen";
$txt['import_csv_dialog_info'] = "Hinweis: der Importvorgang muss aus einer CSV-Datei durchgeführt werden. Aus KeePass exportierte Dateien haben normalerweise die erforderliche Struktur.<br>Wenn Sie eine von einem anderen Programm erstellte Datei nutzen, überprüfen Sie die Struktur der CSV Datei: `Bezeichnung`,`Benutzername`,`Passwort`,`Webseite`,`Kommentare`.";
$txt['import_csv_menu_title'] = "Elemente importieren aus Datei (CSV/KeePass XML)";
$txt['import_error_no_file'] = "Sie müssen eine Datei auswählen!";
$txt['import_error_no_read_possible'] = "Die Datei kann nicht gelesen werden!";
$txt['import_error_no_read_possible_kp'] = "Die Datei kann nicht gelesen werden. Es muss eine KeePass-Datei sein.";
$txt['import_keepass_dialog_info'] = "Bitte benutzen Sie diese Funktion, um eine direkt aus KeePass exportierte XML-Datei auszuwählen. Funktioniert nur mit KeePass Dateien! Beachten Sie, dass vom Skript keine Ordner oder Elemente importiert werden, die bereits auf der gleichen Ebene der Struktur existieren.";
$txt['import_keepass_to_folder'] = "Wählen Sie den Zieordner";
$txt['import_kp_finished'] = "Der Import der KeePass-Daten ist nun abgeschlossen!<br />Standardmäßig wird die erforderliche Passwortkomplexität für neue Ordner auf `Mittel´ eingestellt. Bei Bedarf bitte ändern.";
$txt['import_to_folder'] = "Wählen Sie die zu importierenden Elemente aus:";
$txt['index_add_one_hour'] = "Sitzung um 1 Stunde verlängern";
$txt['index_alarm'] = "ALARM!!!";
$txt['index_bas_pw'] = "Falsches Passwort für dieses Konto!";
$txt['index_change_pw'] = "Ihr Passwort muss geändert werden!";
$txt['index_change_pw'] = "Ändern Sie Ihr Passwort";
$txt['index_change_pw_button'] = "Ändern";
$txt['index_change_pw_confirmation'] = "Passwort wiederholen";
$txt['index_expiration_in'] = "Ihre Sitzung läuft ab in";
$txt['index_get_identified'] = "Bitte identifizieren Sie sich";
$txt['index_identify_button'] = "Login";
$txt['index_identify_you'] = "Bitte melden Sie sich an";
$txt['index_last_pw_change'] = "Ihr Passwort wurde zuletzt geändert am";
$txt['index_last_seen'] = "Sie waren zuletzt angemeldet am";
$txt['index_login'] = "Benutzername";
$txt['index_maintenance_mode'] = "Der Wartungsmodus wurde aktiviert. Nur Administratoren können sich einloggen.";
$txt['index_maintenance_mode_admin'] = "Der Wartungsmodus wurde aktiviert. Benutzer können z.Zt. nicht auf cPassMan zugreifen.";
$txt['index_new_pw'] = "Neues Passwort";
$txt['index_password'] = "Passwort";
$txt['index_pw_error_identical'] = "Die Passwörter müssen identisch sein";
$txt['index_pw_expiration'] = "Das aktuelle Passwort läuft ab in";
$txt['index_pw_level_txt'] = "Passwortkomplexität";
$txt['index_refresh_page'] = "Seite aktualisieren";
$txt['index_session_duration'] = "Sitzungsdauer";
$txt['index_session_ending'] = "Ihre Sitzung wird in weniger als einer Minute beendet.";
$txt['index_session_expired'] = "Ihre Sitzung ist abgelaufen oder Sie haben sich nicht richtig angemeldet!";
$txt['index_welcome'] = "Willkommen";
$txt['info'] = "Informationen";
$txt['info_click_to_edit'] = "Klicken Sie auf ein Feld, um den Wert zu bearbeiten";
$txt['is_admin'] = "Administrator";
$txt['is_manager'] = "Manager";
$txt['items_browser_title'] = "Ordner";
$txt['item_copy_to_folder'] = "Bitte wählen Sie das Verzeichnis in welches das Element kopiert werden soll.";
$txt['item_menu_add_elem'] = "Element hinzufügen";
$txt['item_menu_add_rep'] = "Ordner hinzufügen";
$txt['item_menu_add_to_fav'] = "Zu Favoriten hinzufügen";
$txt['item_menu_collab_disable'] = "Bearbeitung nicht erlaubt";
$txt['item_menu_collab_enable'] = "Bearbeitung erlaubt";
$txt['item_menu_copy_elem'] = "Element kopieren";
$txt['item_menu_copy_login'] = "Benutzernamen kopieren";
$txt['item_menu_copy_pw'] = "Passwort kopieren";
$txt['item_menu_del_elem'] = "Element löschen";
$txt['item_menu_del_from_fav'] = "Aus den Favoriten entfernen";
$txt['item_menu_del_rep'] = "Ordner löschen";
$txt['item_menu_edi_elem'] = "Element bearbeiten";
$txt['item_menu_edi_rep'] = "Ordner bearbeiten";
$txt['item_menu_find'] = "Suchen";
$txt['item_menu_mask_pw'] = "Passwort verbergen";
$txt['item_menu_refresh'] = "Seite aktualisieren";
$txt['kbs'] = "KBs";
$txt['kb_menu'] = "Wissensdatenbank";
$txt['keepass_import_button_text'] = "XML-Datei suchen";
$txt['label'] = "Bezeichnung";
$txt['last_items_icon_title'] = "Zuletzt betrachtete Elemente verbergen/anzeigen";
$txt['last_items_title'] = "Zuletzt betrachtete Elemente";
$txt['ldap_extension_not_loaded'] = "Die LDAP-Erweiterung ist auf dem Server nicht aktiviert";
$txt['level'] = "Stufe";
$txt['link_copy'] = "Link zu diesem Element erstellen";
$txt['link_is_copied'] = "Der Link zu diesem Element wurde in den Zwischenspeicher kopiert.";
$txt['login'] = "Benutzername";
$txt['login_attempts_on'] = "Anmeldeversuche als";
$txt['login_copied_clipboard'] = "Benutzername in den Zwischenspeicher kopiert";
$txt['login_copy'] = "Benutzername in die Zwischenablage kopieren";
$txt['logs'] = "Verbindungsprotokoll";
$txt['logs_1'] = "Protokoll erstellen für Passworterneuerungen vom";
$txt['logs_passwords'] = "Passwortprotokoll";
$txt['maj'] = "Großbuchstaben";
$txt['mask_pw'] = "Passwort einblenden/ausblenden";
$txt['max_last_items'] = "Maximale Anzahl zuletzt betrachteter Elemente für Benutzer (Standard ist 10)";
$txt['minutes'] = "Minuten";
$txt['modify_button'] = "Bearbeiten";
$txt['my_favourites'] = "Meine Favoriten";
$txt['name'] = "Name";
$txt['nb_false_login_attempts'] = "Anzahl missglückter Anmeldeversuche bevor ein Benutzerkonto gesperrt wird (0 = deaktiviert)";
$txt['nb_folders'] = "Anzahl Ordner";
$txt['nb_items'] = "Anzahl Elemente";
$txt['nb_items_by_page'] = "Number of items by page";
$txt['new_label'] = "Neue Bezeichnung";
$txt['new_role_title'] = "Neuer Rollenname:";
$txt['new_user_title'] = "Einen neuen Benutzer hinzufügen";
$txt['no'] = "Nein";
$txt['nom'] = "Name";
$txt['none'] = "Nichts";
$txt['none_selected_text'] = "Nichts ausgewählt";
$txt['not_allowed_to_see_pw'] = "Sie dürfen dieses Element nicht betrachten!";
$txt['not_allowed_to_see_pw_is_expired'] = "Dieses Element ist abgelaufen!";
$txt['not_defined'] = "Nicht definiert";
$txt['no_last_items'] = "Es wurden bisher noch keine Elemente betrachtet";
$txt['no_restriction'] = "Keine Einschränkung";
$txt['numbers'] = "Zahlen";
$txt['number_of_used_pw'] = "Anzahl erforderlicher Passwortänderungen vor Wiederbenutzung eines alten Passworts";
$txt['ok'] = "OK";
$txt['pages'] = "Seiten";
$txt['pdf_del_date'] = "PDF wurde erstellt am";
$txt['pdf_del_title'] = "Protokoll der Passworterneuerungen";
$txt['pdf_download'] = "Datei herunterladen";
$txt['personal_folder'] = "Persönlicher Ordner";
$txt['personal_salt_key'] = "Ihr persönlicher SALT Schlüssel";
$txt['personal_salt_key_empty'] = "Der persönliche SALT Schlüssel wurde nicht eingegeben!";
$txt['personal_salt_key_info'] = "Dieser SALT Schlüssel wird genutzt, um Ihre Passwörter zu ver- und entschlüsseln.<br>Er wird nicht in der Datenbank gespeichert, Sie sind die einzige Person die ihn kennt.<br>Also vergessen Sie ihn nicht!";
$txt['please_update'] = "Bitte aktualisieren Sie cPassMan!";
$txt['print'] = "Schreiben";
$txt['print_out_menu_title'] = "Liste von Elementen in lesbare Datei schreiben";
$txt['print_out_pdf_title'] = "cPassMan - Liste exportierter Elemente";
$txt['print_out_warning'] = "Ihre ausgewählten Elemente und Passwörter werden unverschlüsselt (lesbar) in eine Datei geschrieben. Sie übernehmen hiermit die volle Verantwortung für den Schutz dieser vertraulichen Daten!";
$txt['pw'] = "Passwort";
$txt['pw_change'] = "Passwort des Benutzerkontos ändern";
$txt['pw_changed'] = "Passwort geändert!";
$txt['pw_copied_clipboard'] = "Passwort wurde in die Zwischenablage kopiert";
$txt['pw_copy_clipboard'] = "Passwort in die Zwischenablage kopieren";
$txt['pw_generate'] = "Generieren";
$txt['pw_is_expired_-_update_it'] = "Dieses Element ist abgelaufen! Sie müssen das Passwort des Elements ändern.";
$txt['pw_life_duration'] = "Gültigkeitsdauer von Benutzerpasswörtern in Tagen (0 = deaktiviert)";
$txt['pw_recovery_asked'] = "Sie haben ein Rettungspasswort angefordert";
$txt['pw_recovery_button'] = "Senden Sie mir mein neues Passwort zu";
$txt['pw_recovery_info'] = "Nach Anklicken der nebenstehenden Taste erhalten Sie eine Email mit einem neuen Passwort zu Ihrem Benutzerkonto ";
$txt['pw_used'] = "Dieses Passwort wurde schon verwendet!";
$txt['readme_open'] = "Gesamte Liesmich-Datei öffnen";
$txt['refresh_matrix'] = "Matrix aktualisieren";
$txt['renewal_menu'] = "Liste erneuerter Elemente";
$txt['renewal_needed_pdf_title'] = "Liste zu erneuernder Elemente";
$txt['renewal_selection_text'] = "Liste aller Elemente, die ablaufen in:";
$txt['restore'] = "Wiederherstellen";
$txt['restore'] = "Wiederherstellen";
$txt['restricted_to'] = "Sichtbar für";
$txt['restricted_to_roles'] = "Einschränkung von Elementen auf Benutzer und Rollen erlauben";
$txt['rights_matrix'] = "Matrix der Benutzerrechte";
$txt['roles'] = "Rollen";
$txt['role_cannot_modify_all_seen_items'] = "Dieser Rolle das Ändern aller erreichbaren Elemente verbieten (normale Einstellung)";
$txt['role_can_modify_all_seen_items'] = "Dieser Rolle das Ändern aller erreichbaren Elemente erlauben (unsichere Einstellung)";
$txt['root'] = "Root";
$txt['save_button'] = "Speichern";
$txt['secure'] = "Sicher";
$txt['see_logs'] = "See Logs";
$txt['select'] = "auswählen";
$txt['select_folders'] = "Ordner auswählen";
$txt['select_language'] = "Wählen Sie Ihre Sprache";
$txt['send'] = "Senden";
$txt['settings_anyone_can_modify'] = "Bearbeitung jedes Elements durch alle Benutzer als Option aktivieren";
$txt['settings_anyone_can_modify_tip'] = "<span style=\"font-size: 11px; max-width: 300px;\">Durch Aktivierung dieser Option wird dem Elementenformular ein Auswahlfeld hinzugefügt, das dem Ersteller erlaubt, jedem anderen Benutzer die Bearbeitung des Elements zu erlauben.</span>";
$txt['settings_kb'] = "Wissensdatenbank aktivieren (beta)";
$txt['settings_kb_tip'] = "Durch Aktivierung dieser Option wird eine zusätzliche Seite hinzugefügt, auf der Sie Ihre Wissensdatenbank aufbauen können.";
$txt['settings_ldap_domain'] = "LDAP Suffix Ihrer Domäne";
$txt['settings_ldap_domain_controler'] = "LDAP Serverliste";
$txt['settings_ldap_domain_controler_tip'] = "<span style='font-size:11px;max-width:300px;'>Geben Sie mehrere Server an, falls Sie die Verteilung der LDAP-Anfragen auf mehrere Server wünschen.<br />Sie müssen die Domänennamen durch Kommazeichen trennen ( , )!<br />Bsp.: domain_1,domain_2,domain_3</span>";
$txt['settings_ldap_domain_dn'] = "LDAP Base DN Ihrer Domäne";
$txt['settings_ldap_mode'] = "Benutzerauthentifizierung über LDAP server erlauben";
$txt['settings_ldap_mode_tip'] = "Erlauben Sie dies nur, wenn Sie über einen LDAP-Server verfügen und diesen für die Authentifizierung von cPassMan-Benutzern verwenden möchten.<br /><span style='font-size:10px;max-width:300px;'>Die Konfiguration von LDAP erfolgt manuell. Sie müssen die Datei <b>adLDAP.php</b> unter <i>/includes/libraries/adLDAP</i> editieren. Passen Sie alle geschützten Einträge zwischen Zeile 68 bis 128 entsprechend Ihrer LDAP-Konfiguration an.</span>";
$txt['settings_ldap_ssl'] = "LDAP über SSL aktivieren (LDAPS)";
$txt['settings_ldap_tls'] = "LDAP über TLS aktivieren";
$txt['settings_log_accessed'] = "Enable loggin who accessed the items";
$txt['settings_log_connections'] = "Protokollieren aller Benutzerverbindungen in der Datenbank aktivieren.";
$txt['settings_maintenance_mode'] = "cPassMan in den Wartungsmodus versetzen";
$txt['settings_maintenance_mode_tip'] = "In diesem Modus werden alle Benutzerverbindungen außer Administratoren abgelehnt.";
$txt['settings_manager_edit'] = "Manager können die für sie sichtbaren Elemente bearbeiten und löschen";
$txt['settings_printing'] = "Export der Elemente in PDF-Datei erlauben";
$txt['settings_printing_tip'] = "Wenn diese Option aktiviert ist, können Benutzer Elemente in eine PDF-Datei exportieren. Bitte beachten Sie, dass die Passwörter in dieser Datei unverschlüsselt sind.";
$txt['settings_richtext'] = "Richtext in der Elementbeschreibung erlauben";
$txt['settings_richtext_tip'] = "<span style='font-size:11px;max-width:300px;'>Dies wird Richtext mit BBCodes in der Elementbeschreibung aktivieren.</span>";
$txt['settings_send_stats'] = "Monatliche Statistik über die Nutzung von cPassMan an den Autor senden";
$txt['settings_send_stats_tip'] = "Diese Statistiken sind komplett anonym!<br /><span style='font-size:10px;max-width:300px;'>Ihre IP wird nicht versendet, lediglich die folgenden Angaben: Anzahl Elemente, Ordner und Benutzer, cPassman Version, Aktivierung Persönlicher Ordner, Aktivierung LDAP.<br />Herzlichen Dank, dass Sie diese Statistiken zulassen – Sie helfen dem Autor bei der Weiterentwicklung von cPassMan.</span>";
$txt['show'] = "Zeigen";
$txt['show_help'] = "Hilfe anzeigen";
$txt['show_last_items'] = "Zuletzt betrachtete Elemente auf der Startseite anzeigen";
$txt['size'] = "Länge";
$txt['start_upload'] = "Beginne die Dateien hochzuladen";
$txt['sub_group_of'] = "Abhängig von";
$txt['support_page'] = "Falls Sie Unterstützung benötigen, benutzen Sie bitte <a href='https://sourceforge.net/projects/communitypasswo/forums' target='_blank'><u>Forum</u></a>.";
$txt['symbols'] = "Symbole";
$txt['tags'] = "Tags";
$txt['thku'] = "Danke, dass Sie cPassMan verwenden!";
$txt['timezone_selection'] = "Auswahl der Zeitzone";
$txt['time_format'] = "Zeitformat";
$txt['uncheck_all_text'] = "Auswahl aufheben";
$txt['unlock_user'] = "Benutzer gesperrt. Wollen Sie den Benutzer entsperren?";
$txt['update_needed_mode_admin'] = "Es wird empfohlen, Ihre Installation von cPassMan zu aktualisieren. Bitte klicken Sie <a href=\"install/upgrade.php\">HIER</a>";
$txt['uploaded_files'] = "Bereits existierende Dateien";
$txt['upload_button_text'] = "Durchsuchen";
$txt['upload_files'] = "Neue Dateien hochladen";
$txt['url'] = "URL";
$txt['url_copied'] = "Die URL wurde kopiert!";
$txt['used_pw'] = "Benutztes Passwort";
$txt['user'] = "Benutzer";
$txt['users'] = "Benutzer";
$txt['user_action'] = "Action on a user";
$txt['user_alarm_no_function'] = "Diesem Benutzer wurde keine Rolle zugeordnet!";
$txt['user_del'] = "Konto löschen";
$txt['user_lock'] = "Lock user";
$txt['version'] = "Aktuelle Version";
$txt['views_confirm_items_deletion'] = "Wollen Sie wirklich die ausgewählten Elemente aus der Datenbank löschen?";
$txt['views_confirm_restoration'] = "Bitte bestätigen Sie die Wiederherstellung dieses Elements";
$txt['visibility'] = "Sichtbarkeit";
$txt['yes'] = "Ja";
$txt['your_version'] = "Ihre Version";
?>