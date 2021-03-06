<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProduitRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProduitCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class ProduitCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Produit');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/produit');
        $this->crud->setEntityNameStrings('produit', 'produits');
    }

    protected function setupListOperation()
    {
        // TODO: remove setFromDb() and manually define Columns, maybe Filters
        // pour le nom du produit a la table
        $this->crud->addColumn([
            'name'=>'name',
            'type'=>'text',
            'label'=>'Nom',
            [   // Textarea
                'name'  => 'textarea',
                'label' => 'Textarea',
                'type'  => 'textarea',
                'tab'   => 'Simple',
            ]
            ]);

    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(ProduitRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        // Ajoute le champ de saisie dans le menu lateral de backpack
                $this->crud->addField([
                    'name'=>'name',
                    'type'=>'text',
                    'label'=>'Nom',

                    ]);
                $this->crud->addField([   // Textarea
                    'name'  => 'description',
                    'label' => 'description',
                    'type'  => 'textarea',
                ]);


    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
