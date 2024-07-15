<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Boost Union Child - Version file
 *
 * @package    theme_mintsh
 * @copyright  2024 Jon Haase <jon.haase@student.fh-kiel.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'mintSH Theme';
$string['choosereadme'] = 'Dieses Plugin ist das Theme von dem mintSH Projekt und ein Child-Theme von Boost Union';
$string['configtitle'] = 'mintSH';
$string['settingsoverview_buc_desc'] = 'Durch das mintSH Theme werden komplexe anpassungen an dem Boost Union Theme vorgenommen';
// Settings: General settings tab.
// ... Section: Inheritance.
$string['inheritanceheading'] = 'Vererbung';
$string['inheritanceinherit'] = 'Vererben';
$string['inheritanceduplicate'] = 'Duplizieren';
$string['inheritanceoptionsexplanation'] = 'Meistens wird Vererbung völlig ausreichen. Es kann jedoch vorkommen, dass fehlerhafter Code in Boost Union integriert ist, der eine einfache SCSS-Vererbung für bestimmte Boost Union-Funktionen verhindert. Wenn Sie Probleme mit Boost Union-Funktionen feststellen, die auch in mintSH nicht funktionieren, versuchen Sie, diese Einstellung auf "Duplizieren" zu ändern und melden Sie das Problem auf Github (siehe README.md-Datei für Details zur Fehlerberichterstattung).';
// ... ... Setting: Pre SCSS inheritance setting.
$string['prescssinheritancesetting'] = 'Pre SCSS Vererbung';
$string['prescssinheritancesetting_desc'] = 'Mit dieser Einstellung steuern Sie, ob der Pre-SCSS-Code von Boost Union vererbt oder dupliziert werden soll.';
// ... ... Setting: Extra SCSS inheritance setting.
$string['extrascssinheritancesetting'] = 'Extra SCSS Vererbung';
$string['extrascssinheritancesetting_desc'] = 'Mit dieser Einstellung steuern Sie, ob der zusätzliche SCSS-Code von Boost Union vererbt oder dupliziert werden soll.';

/**************************************************************
 * EXTENSION POINT:
 * Add your language strings for your settings here.
 *************************************************************/

// Privacy API.
$string['privacy'] = 'Das mintSH-Theme speichert keine persönlichen Daten über Benutzer.';