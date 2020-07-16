<?php
/**
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; under version 2
 * of the License (non-upgradable).
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 *
 * Copyright (c) 2015 (original work) Open Assessment Technologies;
 *
 *
 */
use oat\cbaIbPci\scripts\install\RegisterCbaIbPci;

return array(
    'name' => 'cbaIbPci',
	'label' => 'Itembuilder integration',
	'description' => '',
    'license' => 'GPL-2.0',
    'version' => '0.1.0',
	'author' => 'Open Assessment Technologies',
	'requires' => array(
	    'qtiItemPci' => '>=1.1.0',
	    'taoQtiItem' => '>=8.5.0'
    ),
	'managementRole' => 'http://www.tao.lu/Ontologies/generis.rdf#cbaIbPciManager',
    'acl' => array(
        array('grant', 'http://www.tao.lu/Ontologies/generis.rdf#cbaIbPciManager', array('ext'=>'cbaIbPci')),
    ),
    'install' => array(
        'php'	=> array(
			RegisterCbaIbPci::class
		)
    ),
    'update' => 'oat\\cbaIbPci\\scripts\\update\\Updater',
    'uninstall' => array(
    ),
    'autoload' => array (
        'psr-4' => array(
            'oat\\cbaIbPci\\' => dirname(__FILE__).DIRECTORY_SEPARATOR
        )
    ),
    'routes' => array(
        '/cbaIbPci' => 'oat\\cbaIbPci\\controller'
    ),
	'constants' => array(
	    # views directory
	    "DIR_VIEWS" => dirname(__FILE__).DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR,

		#BASE URL (usually the domain root)
		'BASE_URL' => ROOT_URL.'cbaIbPci/',
	)
);
