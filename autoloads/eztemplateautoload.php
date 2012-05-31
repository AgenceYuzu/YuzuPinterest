<?php
//
// Yuzupinterest - extension for eZ Publish
// Author: Sylvain Guittard
// Copyright (C) 2012 Agence Yuzu, http://www.agenceyuzu.fr/
//
// This program is free software; you can redistribute it and/or
// modify it under the terms of version 2.0 of the GNU General
// Public License as published by the Free Software Foundation.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with this program; if not, write to the Free Software
// Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
// MA 02110-1301, USA.
//
$eZTemplateOperatorArray = array();

$eZTemplateOperatorArray[] = array(
    'script' => 'extension/yuzupinterest/autoloads/pregmatch.php',
    'class' => 'PregmatchOperator',
    'operator_names' => array('pregmatch')
);

?>