<?php
/**
 * 
 * Advanced Polls [French]
 * 
 * @copyright (c) 2015 Wolfsblvt ( www.pinkes-forum.de )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Clemens Husung (Wolfsblvt)
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ADVANCEDPOLLS_EXT_NAME'				=> 'Advanced Polls',

	'AP_VOTES_HIDDEN'						=> 'Votes cachés',
	'AP_POLL_RUN_TILL_APPEND'				=> ', jusqu\'à ce moment tous les votes seront cachés.',
	'AP_VOTERS'								=> 'Votants',
	'AP_NONE'								=> 'Aucun',

	'AP_POLL_CANT_VOTE'						=> 'Vous ne pouvez pas voter à ce sondage. Raison',
	'AP_POLL_REASON_NOT_POSTED'				=> 'Vous n\'avez pas participé à ce sujet.',
	'AP_POLL_VOTES_ARE_VISIBLE'				=> 'Veuillez noter que si vous votez votre vote sera visible.',

	'AP_POLL_VOTES_HIDE'					=> 'Cacher les votes jusqu\'à la fin du sondage',
	'AP_POLL_VOTES_HIDE_EXPLAIN'			=> 'Si activé les votes seront cachés jusqu\'à ce que le sondage se termine. Cette option ne fonctionne que si le sondage a une durée maximume spécifiée.',
	'AP_POLL_VOTERS_SHOW'					=> 'Afficher le nom des votants',
	'AP_POLL_VOTERS_SHOW_EXPLAIN'			=> 'Si activé le nom des votants sera visible aux utilisateurs ayant accès au sondage. Le nom des votants ne sera pas affiché si l\'option de cacher les votes est activée.',
	'AP_POLL_VOTERS_LIMIT'					=> 'Restreindre les votes aux utilisateurs actifs',
	'AP_POLL_VOTERS_LIMIT_EXPLAIN'			=> 'Si activé les utilisateurs n\'ayant pas participé à ce sujet ne pourront pas voter.',
));
