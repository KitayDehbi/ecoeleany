<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ReservationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ReservationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ReservationCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Reservation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/reservation');
        CRUD::setEntityNameStrings('reservation', 'reservations');
        $this->crud->addField([
            'label' => 'service',
            'type' => 'select2',
            'name' => 'service_id',
            'entity' => 'service',
            'attribute' => 'nom',
            'model' => 'App\Models\Service'
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
            'label' => "Service",
            'type' => 'text',
            'name' => 'Service.nom',
        ];
        $field2 = [
            'label' => "Client",
            'type' => 'text',
            'name' => 'nom'
        ];
        $field3 = [
            'label' => "date",
            'type' => 'text',
            'name' => 'date'
        ];
        $field4 = [
            'label' => "Adresse",
            'type' => 'text',
            'name' => 'adresse'
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

        $this->crud->addColumns([$field1, $field2, $field5, $field6, $field4, $field3]);
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
        CRUD::setValidation(ReservationRequest::class);

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
    protected function setupShowOperation()
    {
        $field1 = [
            'label' => "Service",
            'type' => 'text',
            'name' => 'Service.nom',
        ];
        $field2 = [
            'label' => "Client",
            'type' => 'text',
            'name' => 'nom'
        ];
        $field3 = [
            'label' => "date",
            'type' => 'text',
            'name' => 'date'
        ];
        $field4 = [
            'label' => "Adresse",
            'type' => 'text',
            'name' => 'adresse'
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

        $this->crud->addColumns([$field1, $field2, $field5, $field6, $field4, $field3]);
   
    }
}
