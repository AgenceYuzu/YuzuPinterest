<?php
//
// $Id
// $HeadURL: http://svn.projects.ez.no/ezfeedparse/tags/ezfeedparse_0.2/extension/ezfeedparse/modules/feed/function_definition.php $
//
// Created on: <29-Jun-2009 18:04 damien pobel>
//
// SOFTWARE NAME: eZ Feed Parse
// SOFTWARE RELEASE: 0.2
// COPYRIGHT NOTICE: Copyright (C) 2009 Damien POBEL
// SOFTWARE LICENSE: GNU General Public License v2.0
// NOTICE: >
//   This program is free software; you can redistribute it and/or
//   modify it under the terms of version 2.0  of the GNU General
//   Public License as published by the Free Software Foundation.
//
//   This program is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU General Public License for more details.
//
//   You should have received a copy of version 2.0 of the GNU General
//   Public License along with this program; if not, write to the Free
//   Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
//   MA 02110-1301, USA.

$FunctionList = array();
$FunctionList['parse'] = array( 'name' => 'parse',
                                'operation_types' => array( 'read' ),
                                'call_method' => array( 'class' => 'eZFeedFunctionCollection',
                                                        'method' => 'parseFeed' ),
                                'parameter_type' => 'standard',
                                'parameters' => array( array( 'name' => 'rss_url',
                                                              'type' => 'string',
                                                              'required' => true,
                                                              'default' => '' ) ) );

?>
