<?php
/**
*
* @package MoT Sudoku v0.13.0
* @copyright (c) 2023 - 2026 Mike-on-Tour
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

/**
* DO NOT CHANGE
*/
if ( !defined('IN_PHPBB') )
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'MOT_SUDOKU_TITLE'				=> 'Sudoku',

	// Tabs
	'MOT_SUDOKU_TAB_LOAD'			=> 'Spiel laden',
	'MOT_SUDOKU_TAB_CLASSIC'		=> 'Klassik-Sudoku',
	'MOT_SUDOKU_TAB_SAMURAI'		=> 'Samurai-Sudoku',
	'MOT_SUDOKU_TAB_NINJA'			=> 'Ninja-Sudoku',
	'MOT_SUDOKU_TAB_RANK'			=> 'Rangliste',
	'MOT_SUDOKU_TAB_FAME'			=> 'Ruhmeshalle',

	// General terms
	'MOT_SUDOKU_EASY'				=> 'leicht',
	'MOT_SUDOKU_MEDIUM'				=> 'mittel',
	'MOT_SUDOKU_HARD'				=> 'schwer',
	'MOT_SUDOKU_GAME_INFO'			=> 'Spielepaket:&nbsp;<strong>%1$s</strong>&nbsp;||&nbsp;Spiel:&nbsp;<strong>%2$s</strong>&nbsp;||&nbsp;Schwierigkeitsgrad:&nbsp;<strong>%3$s</strong>',
	'MOT_SUDOKU_CONGRATULATIONS'	=> 'Gratulation',
	'MOT_SUDOKU_PUZZLE_SOLVED'		=> '<strong>Du hast das Rätsel korrekt gelöst!</strong><br>
										Deine erreichte Punktzahl in diesem Spiel beträgt: ',
	'MOT_SUDOKU_UP_POINTS'			=> '<br><br>Deine erreichten UP-Punkte betragen: ',
	'MOT_SUDOKU_BACK_TO_START'		=> '<br><br>Du wirst gleich zu einem neuen Spiel weitergeleitet.',
	'MOT_SUDOKU_INCORRECT_END'		=> 'Deine Lösung war leider nicht ganz korrekt. Die falsch eingetragenen Ziffern wurden entfernt und die Minuspunkte dafür von deiner Punktzahl
										abgezogen.<br>
										Du hast jetzt Gelegenheit, die korrekten Ziffern einzutragen.',

	// Load game
	'MOT_SUDOKU_LOAD_TAB_EXPL'		=> 'In der nachstehenden Tabelle werden alle von dir gespeicherten Spiele angezeigt. Durch das Anklicken der beiden Icons in der Spalte
										`Optionen` kannst du das jeweilige Spiel entweder zum Weiterspielen laden oder aus der Liste deiner gespeicherten Spiele löschen.<br>
										<strong>ACHTUNG:</strong> Wenn du ein Spiel lädst und im jeweiligen Sudoku-Typ bereits ein aktives Spiel hast, wird dieses abgebrochen.
										Werden für das Abbrechen eines Spieles Strafpunkte angerechnet, werden deinem Punktekonto bei dieser Aktion die entsprechenden Punkte
										abgezogen! Gleiches gilt für ein gelöschtes Spiel, dies wird beim Löschen als abgebrochen betrachtet und dein Punktekonto mit den
										entsprechenden Strafpunkten belastet!',
	'MOT_SUDOKU_ABORT_PENALTY'		=> [
		1	=> 'Für das Abbrechen eines Spieles wird aktuell <strong>%1$d Punkt</strong> von deinem Punktekonto abgezogen!',
		2	=> 'Für das Abbrechen eines Spieles werden aktuell <strong>%1$d Punkte</strong> von deinem Punktekonto abgezogen!',
	],
	'MOT_SUDOKU_PUZZLE_NAME'		=> 'Spiele-Name',
	'MOT_SUDOKU_PUZZLE_TYPE'		=> 'Sudoku-Typ',
	'MOT_SUDOKU_POINTS'				=> 'Punkte',
	'MOT_SUDOKU_PUZZLE_LOAD'		=> 'Spiel laden',
	'MOT_SUDOKU_PUZZLE_DELETE'		=> 'Spiel löschen',
	'MOT_SUDOKU_DELETE_CONFIRM'		=> 'Willst du das Rätsel mit dem Namen <strong>%1$s</strong> wirklich aus deinen gespeicherten Spielen löschen?',
	'MOT_SUDOKU_DELETED_GAME'		=> 'Das Rätsel mit dem Namen <strong>%1$s</strong> wurde aus deinen gespeicherten Spielen gelöscht.',
	'MOT_SUDOKU_DELETED_POINTS'		=> '<br>Dafür wurden dir <strong>%1$d Punkte</strong> von deinem Punktekonto abgezogen.',
	'MOT_SUDOKU_DELETED_UPPOINTS'	=> '<br>Außerdem wurden dir <strong>%1$s Punkte</strong> von deinem UP-Konto abgezogen.',
	'MOT_SUDOKU_LOAD_CONFIRM'		=> 'Willst du das Rätel mit dem Namen <strong>%1$s</strong> wirklich zum Weiterspielen laden?',
	'MOT_SUDOKU_LOAD_ACTIVE_CONF'	=> '<br>Beachte bitte, dass du ein aktives Spiel hast und dieses durch diese Aktion abgebrochen wird!',
	'MOT_SUDOKU_LOAD_PENALTY'		=> '<br>Außerdem werden dir dafür <strong>%1$d Punkte</strong> von deinem Punktekonto abgezogen. Wenn aktiviert, wird auch dein UP-Konto mit Strafpunkten belastet.',

	// Classic Sudoku
	'MOT_SUDOKU_NO_CLASSIC_PUZZLES'	=> 'Es existieren derzeit keine Klassik-Sudoku-Rätsel, der Administrator muss erst ein Spielepaket importieren!',
	'MOT_SUDOKU_HISTORY_TITLE'		=> 'Geschichte des Spiels',
	'MOT_SUDOKU_HISTORY'			=> 'Die frühesten Vorläufer des Sudoku waren die lateinischen Quadrate des Schweizer Mathematikers Leonhard Euler, der solche bereits im 18.
										Jahrhundert verfasste.<br><br>Anders als die modernen Sudoku-Rätsel waren diese noch nicht in Blöcke (Unterquadrate) unterteilt. Der
										Neuseeländer Wayne Gould lernte Sudoku auf einer Japanreise kennen und brauchte sechs Jahre, um eine Software zu entwickeln, die neue
										Sudokus per Knopfdruck entwickeln konnte. Anschließend bot er seine Rätsel der Times in London an. Die Tageszeitung druckte die ersten
										Sudoku-Rätsel und trat auf diese Weise in der westlichen Welt eine Sudoku-Lawine los.',
	'MOT_SUDOKU_INSTRUCTIONS_TITLE'	=> 'Spielanleitung',
	'MOT_SUDOKU_INSTRUCTIONS'		=> 'Platziere eine Ziffer von 1-9 in jede leere Zelle so dass:<br><br>
										1. Jede Ziffer genau einmal pro Zeile auftaucht<br>
										2. Jede Ziffer genau einmal pro Spalte auftaucht<br>
										3. Jede Ziffer genau einmal in dem 3x3 Unterquadrat auftaucht.<br><br>
										Einige Startziffern wurden bereits gesetzt, um dir beim Einstieg zu helfen, sie werden <strong>fett</strong> angezeigt. Klicke einfach
										in eine leere Zelle, um eine Ziffer einzufügen. Wenn Du einen Fehler gemacht hast, einfach nochmal auf das Feld klicken, um eine neue
										Ziffer einzufügen.',

	// Samurai Sudoku
	'MOT_SUDOKU_NO_SAMURAI_PUZZLES'	=> 'Es existieren derzeit keine Samurai-Sudoku-Rätsel, der Administrator muss erst ein Spielepaket importieren!',
	'MOT_SUDOKU_SAMURAI_TEXT'		=> 'Wem die klassischen Sudoku-Rätsel zu einfach sind, kann sich an dem deutlich komplexeren Samurai-Sudoku versuchen. Hier überschneiden sich
										5 klassische Rätsel jeweils an den Ecken. Du denkst, das ist das Gleiche wie 5 klassische Rätsel? Dann versuche es und zeige, dass du ein
										wahrer Samurai bist!',

	// Ninja Sudoku
	'MOT_SUDOKU_NO_NINJA_PUZZLES'	=> 'Es existieren derzeit keine Ninja-Sudoku-Rätsel, der Administrator muss erst ein Spielepaket importieren!',
	'MOT_SUDOKU_NINJA_TEXT'			=> 'Ninja-Sudoku sind eine echte Herausforderung, weil sie aus insgesamt 9 klassischen Rätseln bestehen, die sich natürlich öfter überschneiden,
										nämlich zwischen zwei- bis viermal. Sie sind damit äußerst schwierig, aber für einen echten Ninja sicher ein Klacks!',

	// Options box
	'MOT_SUDOKU_OPTIONS_TITLE'		=> 'Optionen',
	'MOT_SUDOKU_GAME_RESET'			=> 'Spiel zurücksetzen',
	'MOT_SUDOKU_GAME_RESET_TITLE'	=> 'Das Zurücksetzen des Spiels kostet %1$d Minuspunkte',
	'MOT_SUDOKU_BUY_NUMBER'			=> 'Ziffer kaufen',
	'MOT_SUDOKU_BUY_NUMBER_TITLE'	=> 'Der Kauf einer Ziffer kostet %1$d Minuspunkte',
	'MOT_SUDOKU_ENABLE_HELPER'		=> 'Helfer aktivieren',
	'MOT_SUDOKU_HELPER_TITLE'		=> 'Die Aktivierung des Helfers kostet einmalig %1$d Minuspunkte',
	'MOT_SUDOKU_HELPER_UPDATE'		=> 'Helfer aktualisieren',
	'MOT_SUDOKU_MASK_HELPER'		=> 'Helfer ausblenden',
	'MOT_SUDOKU_MASK_TITLE'			=> 'Blendet die Hilfe in den Zellen aus',
	'MOT_SUDOKU_HELPER_NOTE'		=> 'Die Helfer-Anzeige gilt nur für den aktuellen Spielstand, nach Veränderungen (z.B. Eingabe einer Ziffer) muss der Helfer aktualisiert werden.',
	'MOT_SUDOKU_GAME_QUIT'			=> 'Spiel aufgeben',
	'MOT_SUDOKU_GAME_QUIT_TITLE'	=> 'Wenn du nicht weiterkommst, kannst du hier aufgeben. Das Rätsel wird dann aus deinen gespeicherten Spielen gelöscht und du kannst ein neues Spiel beginnen.',
	'MOT_SUDOKU_QUIT_PENALTY_TITLE'	=> 'Die Aufgabe des Spieles kostet einmalig %1$d Minuspunkte.',
	'MOT_SUDOKU_STORE_GAME'			=> 'Spiel speichern',
	'MOT_SUDOKU_STORE_GAME_TITLE'	=> 'Wenn du nicht weiterkommst, kannst du dieses Spiel für eine spätere Wiederaufnahme speichern und ein neues Spiel beginnen.',
	'MOT_SUDOKU_MODAL_ABOVE'		=> 'Zifferneingabe oberhalb Spielfeld',
	'MOT_SUDOKU_MODAL_OVER'			=> 'Zifferneingabe über Mauszeiger',

	// Notes box
	'MOT_SUDOKU_NOTES_TITLE'		=> 'Hinweise',
	'MOT_SUDOKU_NOTE_TEXT'			=> 'Für jede neu gesetzte Ziffer erhältst du %1$d Punkte. Aber Vorsicht! Jedes Mal, wenn du eine Ziffer löschst oder änderst, werden dir direkt
										%2$d Punkte abgezogen!<br><br>
										Du kannst auch eine Ziffer für %3$d Punkte kaufen, wenn du absolut nicht weiter weißt; sie wird in eine zufällig gewählte freie Zelle gesetzt.<br>
										Wenn du das Spiel zurück setzt (neu beginnst), kostet dich das %4$d Punkte. Bereits gekaufte Ziffern bleiben dir erhalten.<br>
										Das Aktivieren des Helfers kostet dich für jedes Spiel %5$d Punkte, die Aktivierung gilt für die gesamte Dauer dieses Spieles.<br>
										Du kannst den Level für dieses Spiel vor dem ersten Eintragen einer Ziffer ändern, es werden dir dann je nach gewähltem Level zusätzliche
										Ziffern angezeigt. Allerdings verringert sich die mögliche Maximalpunktzahl für dieses Spiel dann um %6$d Punkte für jede Ziffer.',

	// Levels box
	'MOT_SUDOKU_LEVEL_TITLE'		=> 'Spiele-Level',
	'MOT_SUDOKU_SELECT_LEVEL'		=> 'Wähle deinen Level',
	'MOT_SUDOKU_LEVEL_NAME'			=> 'Level',
	'MOT_SUDOKU_LEVEL_DIGITS'		=> 'Zusätzliche Ziffern',
	'MOT_SUDOKU_LEVEL_DEDUCT'		=> 'Punktabzug',
	'MOT_SUDOKU_LEVEL_0'			=> 'Einstein',
	'MOT_SUDOKU_LEVEL_1'			=> 'Lasker',
	'MOT_SUDOKU_LEVEL_2'			=> 'Lomonosov',
	'MOT_SUDOKU_LEVEL_3'			=> 'Sun Tzu',
	'MOT_SUDOKU_LEVEL_4'			=> 'Napoleon',
	'MOT_SUDOKU_LEVEL_5'			=> 'Pythagoras',
	'MOT_SUDOKU_LEVEL_6'			=> 'Spartacus',

	// Results box
	'MOT_SUDOKU_YOUR_RESULT'		=> 'Deine Ergebnisse',
	'MOT_SUDOKU_TOTAL_GAMES'		=> 'Insgesamt gespielte Spiele',
	'MOT_SUDOKU_TOTAL_POINTS'		=> 'Insgesamt erzielte Punkte',
	'MOT_SUDOKU_MEAN_POINTS'		=> 'Durchschnittliche Punktzahl',
	'MOT_SUDOKU_GAINABLE_POINTS'	=> 'Erreichbare Punkte im aktuellen Spiel',
	'MOT_SUDOKU_CURRENT_POINTS'		=> 'Punkte im aktuellen Spiel',
	'MOT_SUDOKU_NEGATIVE_POINTS'	=> 'Aktuelle Minuspunkte',

	// Highscore Tab
	'MOT_SUDOKU_SELECT_TYPE'		=> 'Sudoku-Typ wählen',
	'MOT_SUDOKU_NO_ENTRIES'			=> 'Keine Einträge',

	// Hall of Fame tab
	'MOT_SUDOKU_CURRENT_MONTH'		=> 'Laufender Monat',
	'MOT_SUDOKU_CURRENT_YEAR'		=> 'Laufendes Jahr',
	'MOT_SUDOKU_LAST_MONTHS'		=> [
		1	=> 'Letzter Monat',
		2	=> 'Letzte %1$d Monate',
	],
	'MOT_SUDOKU_LAST_YEARS'			=> [
		1	=> 'Letztes Jahr',
		2	=> 'Letzte %1$d Jahre',
	],
	'JANUARY'						=> 'Januar',
	'FEBRUARY'						=> 'Februar',
	'MARCH'							=> 'März',
	'APRIL'							=> 'April',
	'MAY'							=> 'Mai',
	'JUNE'							=> 'Juni',
	'JULY'							=> 'Juli',
	'AUGUST'						=> 'August',
	'SEPTEMBER'						=> 'September',
	'OCTOBER'						=> 'Oktober',
	'NOVEMBER'						=> 'November',
	'DECEMBER'						=> 'Dezember',

	// Online list
	'MOT_SUDOKU_TOTAL_PLAYERS'		=> [
		0	=> 'Es gibt derzeit keine aktiven Sudoku-Spieler',
		1	=> 'Es gibt derzeit %1$d aktiven Sudoku-Spieler: ',
		2	=> 'Es gibt derzeit %1$d aktive Sudoku-Spieler: ',
	],

	// Abort messages
	'MOT_SUDOKU_NOTE_TITLE'			=> 'Hinweis',
	'MOT_SUDOKU_NOTES_QUIT'			=> 'Das aufgegebene Spiel wurde aus der Tabelle der aktiven Spiele gelöscht, du wirst gleich zu einem neuen Spiel weitergeleitet.',
	'MOT_SUDOKU_NOTES_SAVE'			=> 'Das Spiel wurde in der Datenbank gespeichert und aus der Tabelle der aktiven Spiele gelöscht, du wirst gleich zu einem neuen Spiel weitergeleitet.',
	'MOT_SUDOKU_QUIT_MSG_TITlE'		=> 'Bestätigen',
	'MOT_SUDOKU_QUIT_MSG_TEXT'		=> 'Willst du dieses Spiel wirklich aufgeben?',
	'MOT_SUDOKU_QUIT_PENALTY'		=> 'Dein Punktekonto wurde mit %1$d Minuspunkten belastet!',
	'MOT_SUDOKU_SAVE_MSG_TEXT'		=> 'Willst du dieses Spiel wirklich speichern?',

	// Errors
	'MOT_SUDOKU_ERROR_TITLE'		=> 'Fehler!',
	'MOT_SUDOKU_ERROR_RESET'		=> 'Du willst nicht wirklich ein Spiel zurücksetzen, in dem du noch keine Eintragung gemacht hast, oder?',
	'MOT_SUDOKU_ERROR_BUY_NOW'		=> 'Willst du wirklich schon eine Ziffer kaufen, bevor du es selbst versucht hast?',
	'MOT_SUDOKU_BUY_LAST_DIGIT'		=> 'Du willst nicht wirklich die letzte fehlende Ziffer kaufen, oder?',
	'MOT_SUDOKU_ERROR_HELPER'		=> 'Willst du wirklich schon den Helfer benutzen, bevor du es selbst versucht hast?',
	'MOT_SUDOKU_ERROR_QUIT'			=> 'Willst du wirklich schon aufgeben, bevor du die erste Ziffer eingegeben hast?',
	'MOT_SUDOKU_ERROR_SAVE'			=> 'Willst du das Spiel wirklich schon speichern, bevor du die erste Ziffer eingegeben hast?',
	'MOT_SUDOKU_ERROR_LEVEL'		=> 'Du musst erst einen neuen Level auswählen!',

	// PM texts
	'MOT_SUDOKU_WINNER_SUBJECT'		=> 'Bonuspunkte für den besten Spieler im %1$s!',
	'MOT_SUDOKU_WINNER_MESSAGE_0'	=> 'Hallo %1$s,
du bist der beste %2$s-Spieler des gestrigen Tages mit %3$d Punkten!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_WINNER_MESSAGE_1'	=> 'Hallo %1$s,
du bist der beste %2$s-Spieler der vergangenen Woche mit %3$d Punkten!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_WINNER_MESSAGE_2'	=> 'Hallo %1$s,
du bist der beste %2$s-Spieler des vergangenen Monats mit %3$d Punkten!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_WINNER_MESSAGE_3'	=> 'Hallo %1$s,
du bist der beste %2$s-Spieler des vergangenen Jahres mit %3$d Punkten!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',

	'MOT_SUDOKU_GAMES_SUBJECT'		=> 'Bonuspunkte für die meisten Spiele im %1$s!',
	'MOT_SUDOKU_GAMES_MESSAGE_0'	=> 'Hallo %1$s,
du hast gestern die meisten %2$s-Spiele (%3$d) gelöst!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_GAMES_MESSAGE_1'	=> 'Hallo %1$s,
du hast in der vergangenen Woche die meisten %2$s-Spiele (%3$d) gelöst!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_GAMES_MESSAGE_2'	=> 'Hallo %1$s,
du hast im vergangenen Monat die meisten %2$s-Spiele (%3$d) gelöst!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_GAMES_MESSAGE_3'	=> 'Hallo %1$s,
du hast im vergangenen Jahr die meisten %2$s-Spiele (%3$d) gelöst!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',

	'MOT_SUDOKU_AVERAGE_SUBJECT'	=> 'Bonuspunkte für die höchsten Durchschnitt im %1$s!',
	'MOT_SUDOKU_AVERAGE_MESSAGE_0'	=> 'Hallo %1$s,
du hast gestern den höchsten Punkte-Durchschnitt (%3$d) im %2$s geschafft!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_AVERAGE_MESSAGE_1'	=> 'Hallo %1$s,
du hast in der vergangenen Woche den höchsten Punkte-Durchschnitt (%3$d) im %2$s geschafft!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_AVERAGE_MESSAGE_2'	=> 'Hallo %1$s,
du hast im vergangenen Monat den höchsten Punkte-Durchschnitt (%3$d) im %2$s geschafft!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',
	'MOT_SUDOKU_AVERAGE_MESSAGE_3'	=> 'Hallo %1$s,
du hast im vergangenen Jahr den höchsten Punkte-Durchschnitt (%3$d) im %2$s geschafft!
Deinem UP-Konto wurden dafür %4$s Punkte gutgeschrieben.

Herzlichen Glückwunsch
%5$s',

	'MOT_SUDOKU_ADMIN_SUBJECT_0'	=> 'Benachrichtigung über tägliche Bonusberechnung für Sudoku',
	'MOT_SUDOKU_ADMIN_SUBJECT_1'	=> 'Benachrichtigung über wöchentliche Bonusberechnung für Sudoku',
	'MOT_SUDOKU_ADMIN_SUBJECT_2'	=> 'Benachrichtigung über monatliche Bonusberechnung für Sudoku',
	'MOT_SUDOKU_ADMIN_SUBJECT_3'	=> 'Benachrichtigung über jährliche Bonusberechnung für Sudoku',
	'MOT_SUDOKU_ADMIN_MESSAGE'		=> 'Beim %1$s erhielt den Bonus für
- den besten Spieler: %2$s mit %3$d Punkten (%4$s UP-Punkte)
- die meisten Spiele: %5$s mit %6$d Spielen (%7$s UP-Punkte)
- den höchsten Punkte-Durchschnitt: %8$s mit %9$d Punkten (%10$s UP-Punkte)

',

]);
