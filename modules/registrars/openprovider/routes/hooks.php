<?php
/**
 * OpenProvider Registar module
 *
 * @copyright Copyright (c) Openprovider 2018
 */

/**
 * Hooks
 * ----------------
 * 
 * Instead of mapping routes automagically to controllers, we use
 * a whitelist of routes with the controllers mapped.
 * 
 * If the string only contains a-zA-Z0-9_, the namespace will be 
 * guessed and added. 
 */
return [
    [
        'hookPoint' => 'ClientAreaPageDomainDetails',
        'priority' =>  1,
        'controller' => 'DomainController@saveDomainEdit'
    ],
    [
        'hookPoint' => 'DomainEdit',
        'priority' =>  1,
        'controller' => 'DomainController@saveDomainEdit'
    ]
];

