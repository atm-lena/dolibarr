<?php
/*
 * Copyright (C) 2024 Anthony Damhet <a.damhet@progiseize.fr>
 * Copyright (C) 2024       Frédéric France         <frederic.france@free.fr>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

// Load Dolibarr environment
require '../../../../main.inc.php';

/**
 * @var DoliDB $db
 * @var HookManager $hookmanager
 * @var Translate $langs
 * @var User $user
 */

// Protection if external user
if ($user->socid > 0) {
	accessforbidden();
}

// Includes
require_once DOL_DOCUMENT_ROOT . '/admin/tools/ui/class/documentation.class.php';

// Load documentation translations
$langs->loadLangs(array('uxdocumentation','boxes'));

//
$documentation = new Documentation($db);

$morejs = [
	'/includes/ace/src/ace.js',
	'/includes/ace/src/ext-statusbar.js',
	'/includes/ace/src/ext-language_tools.js',
];
// Output html head + body - Param is Title
$documentation->docHeader('Boxes', $morejs);

// Set view for menu and breadcrumb
// Menu must be set in constructor of documentation class
$documentation->view = array('Components','Boxes');

// Output sidebar
$documentation->showSidebar(); ?>

<div class="doc-wrapper">

	<?php $documentation->showBreadCrumb(); ?>

	<div class="doc-content-wrapper">

		<h1 class="documentation-title"><?php echo $langs->trans('DocBoxeTitle'); ?></h1>
		<p class="documentation-text"><?php echo $langs->trans(''); ?></p>

		<!-- Summary -->
		<?php $documentation->showSummary(); ?>

		<!-- Basic usage -->
		<div class="documentation-section" id="boxesection-htmlusage">
			<h2 class="documentation-title"><?php echo $langs->trans('DocHTMLUsage'); ?></h2>
			<p class="documentation-text"><?php echo $langs->trans('DocBoxeHtmlUsageDescription'); ?></p>
			<div class="info-box  info-box-weather info-box-weather-level2">
				<span class="info-box-icon"><i class="fa fa-weather-level2"></i>       </span>
				<div class="info-box-content">
					<div class="info-box-title">Vue globale</div>
					<span class="info-box-number">11 en retard</span>
					<span class="progress-description">100,00% en retard</span>
				</div><!-- /.info-box-content -->
			</div><!-- /.info-box -->

			<?php
			$lines = array(
				'<div class="info-box  info-box-weather info-box-weather-level2">',
				'<span class="info-box-icon"><i class="fa fa-weather-level2"></i></span>',
				'<div class="info-box-content">',
					'<div class="info-box-title">Vue globale</div>',
					'<span class="info-box-number">11 en retard</span>',
					'<span class="progress-description">100,00% en retard</span>',
				'</div>',
				'</div>'
			);
			echo $documentation->showCode($lines); ?>

			<div class="info-box ">
				<span class="info-box-icon bg-infobox-commande">
				<i class="fa fa-dol-commande"></i>
				</span>
					<div class="info-box-content">
						<div class="info-box-title" title="Commandes">Commandes</div>
						<div class="info-box-lines">
							<div class="info-box-line spanoverflow nowrap"><a href="/client/dolibarr/dolibarrdevelop/dolibarr/htdocs/commande/list.php?search_status=-2&mainmenu=commercial&leftmenu=orders" class="info-box-text info-box-text-a"><div class="marginrightonly inline-block valignmiddle info-box-line-text" title="Commandes clients à traiter">Ouvert</div><div class="inline-block nowraponall"><span class="classfortooltip badge badge-info" title="Commandes clients à traiter (1) - 150,00 €">1</span></div></a> <div class="inline-block"><a href="/client/dolibarr/dolibarrdevelop/dolibarr/htdocs/commande/list.php?search_option=late&mainmenu=commercial&leftmenu=orders" class="info-box-text info-box-text-a paddingleft"><span title="1 en retard (Retard = Date de reference > Date du jour +2 jours)" class="classfortooltip badge badge-warning"><i class="fa fa-exclamation-triangle hideonsmartphone"></i> 1</span></a>
							</div></div>
							<div class="info-box-line spanoverflow nowrap"><a href="/client/dolibarr/dolibarrdevelop/dolibarr/htdocs/commande/list.php?search_status=3&search_billed=0&mainmenu=commercial&leftmenu=orders" class="info-box-text info-box-text-a"><div class="marginrightonly inline-block valignmiddle info-box-line-text" title="Commandes clients &agrave; d&eacute;livrer">Livr&eacute;e et &Agrave; facturer</div><div class="inline-block nowraponall"><span class="classfortooltip opacitymedium" title="Commandes clients &agrave; d&eacute;livrer (0)">0</span></a>
						</div></div>
					</div><!-- /.info-box-lines -->
				</div><!-- /.info-box-content -->
			</div><!-- /.info-box -->

			<?php
			$lines = array(
				'<div class="info-box">',
				'<span class="info-box-icon bg-infobox-commande"><i class="fa fa-dol-commande"></i></span>',
				'<div class="info-box-content">',
				'<div class="info-box-title" title="Commandes">Commandes</div>',
				'<div class="info-box-lines">',
				'<div class="info-box-line spanoverflow nowrap"><a href="/client/dolibarr/dolibarrdevelop/dolibarr/htdocs/commande/list.php?search_status=-2&mainmenu=commercial&leftmenu=orders" class="info-box-text info-box-text-a"><div class="marginrightonly inline-block valignmiddle info-box-line-text" title="Commandes clients à traiter">Ouvert</div><div class="inline-block nowraponall"><span class="classfortooltip badge badge-info" title="Commandes clients à traiter (1) - 150,00 €">1</span></div></a> <div class="inline-block"><a href="/client/dolibarr/dolibarrdevelop/dolibarr/htdocs/commande/list.php?search_option=late&mainmenu=commercial&leftmenu=orders" class="info-box-text info-box-text-a paddingleft"><span title="1 en retard (Retard = Date de reference > Date du jour +2 jours)" class="classfortooltip badge badge-warning"><i class="fa fa-exclamation-triangle hideonsmartphone"></i> 1</span></a>',
				'</div></div>',
				'<div class="info-box-line spanoverflow nowrap"><a href="/client/dolibarr/dolibarrdevelop/dolibarr/htdocs/commande/list.php?search_status=3&search_billed=0&mainmenu=commercial&leftmenu=orders" class="info-box-text info-box-text-a"><div class="marginrightonly inline-block valignmiddle info-box-line-text" title="Commandes clients &agrave; d&eacute;livrer">Livr&eacute;e et &Agrave; facturer</div><div class="inline-block nowraponall"><span class="classfortooltip opacitymedium" title="Commandes clients &agrave; d&eacute;livrer (0)">0</span></a>',
				'</div></div>',
				'</div><!-- /.info-box-lines -->',
				'</div><!-- /.info-box-content -->',
				'</div><!-- /.info-box -->'
			);
			echo $documentation->showCode($lines); ?>
		</div>

		<div class="documentation-section" id="boxesection-phpusage">
			<h2 class="documentation-title"><?php echo $langs->trans('DocPHPUsage'); ?></h2>
			<p class="documentation-text"><?php echo $langs->trans('DocBoxePhpUsageDescription'); ?></p>

			<?php
			require_once DOL_DOCUMENT_ROOT.'/core/boxes/box_lastlogin.php';
			global $db;
			$box_lastlogin = new box_lastlogin($db, '');
			$box_lastlogin->loadBox();
			$box = $box_lastlogin->showBox(null, null, 1);
			print $box;
			?>

			<?php
			$lines = array(
				'<?php',
				'require_once DOL_DOCUMENT_ROOT.\'/core/boxes/box_lastlogin.php\';',
				'global $db;',
				'$box_lastlogin = new box_lastlogin($db, \'\');',
				'$box_lastlogin->loadBox();',
				'$box = $box_lastlogin->showBox(null, null, 1);',
			);
			echo $documentation->showCode($lines, 'php'); ?>
		</div>
	</div>

</div>

<?php
// Output close body + html
$documentation->docFooter();
?>
