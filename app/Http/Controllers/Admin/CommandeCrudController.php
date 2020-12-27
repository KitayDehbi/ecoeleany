<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CommandeRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudField;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Crypt;

/**
 * Class CommandeCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CommandeCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Commande::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/commande');
        CRUD::setEntityNameStrings('commande', 'commandes');
        $this->crud->addField([
            'label' => 'produit',
            'type' => 'select2',
            'name' => 'produit_id',
            'entity' => 'produit',
            'attribute' => 'nom',
            'model' => 'App\Models\Produit'
        ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $field1 = [
            'label' => "Produit",
            'type' => 'text',
            'name' => 'Produit.nom',
        ];
        $field2 = [
            'label' => "Client",
            'type' => 'text',
            'name' => 'nom'
        ];
        $field3 = [
            'label' => "prix total",
            'type' => 'number',
            'name' => 'prix'
        ];
        $field4 = [
            'label' => "Quantite",
            'type' => 'number',
            'name' => 'quantite'
        ];
        $field5 = [
            'label' => "Email",
            'type' => 'text',
            'name' => 'email'
        ];
        $field6 = [
            'label' => "Tel",
            'type' => 'text',
            'name' => 'tel'
        ];
        $field7 = [
            'label' => "date ",
            'type' => 'text',
            'name' => 'created_at'
        ];

        $this->crud->addColumns([$field1, $field4, $field2, $field3, $field6, $field5,$field7]);
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(CommandeRequest::class);

        CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    protected function setupShowOperation(){
        $this -> setupListOperation();
    }
}
