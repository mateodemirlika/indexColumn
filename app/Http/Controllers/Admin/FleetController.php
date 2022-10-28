<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController as BaseModuleController;

class FleetController extends BaseModuleController
{
    protected $moduleName = 'fleets';


    protected $indexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => true,
        'bulkPublish' => true,
        'restore' => true,
        'bulkRestore' => true,
        'forceDelete' => true,
        'bulkForceDelete' => true,
        'delete' => true,
        'duplicate' => true,
        'bulkDelete' => true,
        'permalink' => true,
        'bulkEdit' => true,
        'export' => true,
    ];

    protected $indexColumns = [
        'cover' => [
            'thumb' => true, // image column
            'variant' => [
                'role' => 'cover',
                'crop' => 'desktop ',
            ],
        ],
        'title' => [
            'title' => 'Title',
            'field' => 'title',
        ],
        'description' => [
            'title' => 'Description',
            'field' => 'description',
            'sort' => true, // column is sortable
            'visible' => true, // will be available from the columns settings dropdown
        ],

    ];
}
