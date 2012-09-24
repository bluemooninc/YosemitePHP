<?php
// $Id: xoops_version.php,v 1.2 2005/03/18 12:52:49 onokazu Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
$modversion['name'] = _MI_YOSEMITE_NAME;
$modversion['version'] = 1.00;
$modversion['description'] = _MI_YOSEMITE_DESC;
$modversion['credits'] = "The YosemitePHP Project";
$modversion['author'] = "
    Yoshi Sakai ( http://bluemooninc.jp )
";
$modversion['help'] = "yosemite.html";
$modversion['license'] = "GPL see LICENSE";
$modversion['official'] = "no";
$modversion['image'] = "images/yosemite_logo.png";
$modversion['dirname'] = "yosemite";

// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";

// Tables created by sql file (without prefix!)
$modversion['tables'][0]	= "yosemite_test" ;


// Admin things
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";

// Menu
$modversion['hasMain'] = 1;

// Templates
$modversion['templates'][ 1]=array( 'file' => 'yosemite_index.html', 'description' => '' );
$modversion['templates'][ 2]=array( 'file' => 'yosemite_edit.html' , 'description' => '' );
// Config

$modversion['hasconfig'] = 1;
$modversion['config'][] = array(
		'name'        => 'TIMECHART',
		'title'       => '_MI_YOSEMITE_TIMECHART',
		'description' => '_MI_YOSEMITE_TIMECHART_DESC',
		'formtype'    => 'textbox',
		'valuetype'   => 'text',
		'default'     => '07:00,07:30,08:00,08:30,09:00,10:00,12:00,14:00,16:00,17:00,17:30,18:00,18:30,19:00,19:30,20:00'
);
?>