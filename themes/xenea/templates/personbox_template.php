<?php
// Template for drawing person boxes
// This template expects that the following variables will be set
// $pid, $boxID, $icons, $GEDCOM, $style,
// $name, $classfacts, $genderImage, $BirthDeath, $isF, $outBoxAdd,
// $addname, $showid, $float
//
// webtrees: Web based Family History software
// Copyright (C) 2011 webtrees development team.
//
// Derived from PhpGedView
// Copyright (C) 2002 to 2009  PGV Development Team.  All rights reserved.
//
// This program is free software; you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation; either version 2 of the License, or
// (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
//
// $Id$

if (!defined('WT_WEBTREES')) {
	header('HTTP/1.0 403 Forbidden');
	exit;
}
?>
<div id="out-<?php echo $boxID; ?>" <?php echo $outBoxAdd; ?>>
<!--  table helps to maintain spacing -->
<table width="100%" cellspacing="0" cellpadding="0" border="0"><tr><td valign="top">
<?php	
	if ($show_full) { 
			echo '<div class="noprint" id="icons-',$boxID,'"';
			echo 'style="',$iconsStyleAdd,' width: 25px; height: 50px">';
			echo $icons;
			echo '</div>';
	}	
		echo $thumbnail; ?>
		<a onclick="event.cancelBubble = true;" href="individual.php?pid=<?php echo $pid; ?>&amp;ged=<?php echo rawurlencode($GEDCOM); ?>">
		<span id="namedef-<?php echo $boxID; ?>" class="name<?php echo $style; ?> <?php echo $classfacts; ?>">
			<?php echo $name.$addname; ?>
		</span>
		<span class="name<?php echo $style; ?>"> <?php echo $genderImage; ?></span>
		<?php echo $showid; ?> </a>
		<div id="fontdef-<?php echo $boxID; ?>" class="details<?php echo $style; ?>">
			<div id="inout2-<?php echo $boxID; ?>" style="display: block; max-height: <?php echo $bheight*.9; ?>px;"><?php echo $BirthDeath; ?></div>
		</div>
		<div id="inout-<?php echo $boxID; ?>" style="display: none;">
			<div id="LOADING-inout-<?php echo $boxID; ?>"><?php echo WT_I18N::translate('Loading...'); ?></div>
		</div>
</td></tr></table>
</div>
