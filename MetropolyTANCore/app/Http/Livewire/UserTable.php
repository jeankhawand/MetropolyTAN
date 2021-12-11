<?php

namespace App\Http\Livewire;

use Illuminate\Database\QueryException;
use Modules\Role\Entities\RoleVar;
use Modules\User\Entities\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Builder;
use PowerComponents\LivewirePowerGrid\Button;
use PowerComponents\LivewirePowerGrid\Column;
use PowerComponents\LivewirePowerGrid\PowerGrid;
use PowerComponents\LivewirePowerGrid\PowerGridEloquent;
use PowerComponents\LivewirePowerGrid\PowerGridComponent;
use PowerComponents\LivewirePowerGrid\Traits\ActionButton;
use Spatie\Permission\Models\Role;

class UserTable extends PowerGridComponent
{
    use ActionButton;

    /*
    |--------------------------------------------------------------------------
    |  Features Setup
    |--------------------------------------------------------------------------
    | Setup Table's general features
    |
    */
    public function setUp()
    {
        $this->showCheckBox()
            ->showPerPage()
            ->showExportOption('download', ['excel', 'csv'])
            ->showSearchInput();
    }

    /*
    |--------------------------------------------------------------------------
    |  Datasource
    |--------------------------------------------------------------------------
    | Provides data to your Table using a Model or Collection
    |
    */
    public function datasource(): ?Builder
    {
        if (auth()->user()->hasRole(RoleVar::ADMIN)) {
            return User::query()
                ->where('id', '!=', auth()->user()->id)
                ->where('id', '!=', User::role('admin')->get()[0]->id)
                ->with('roles');
        } else {
            return User::query()
                ->where('id', '!=', auth()->user()->id)
                ->where('id', '!=', User::role('admin')->get()[0]->id)

                ;
        }

    }

    /*
    |--------------------------------------------------------------------------
    |  Relationship Search
    |--------------------------------------------------------------------------
    | Configure here relationships to be used by the Search and Table Filters.
    |
    */
    public function relationSearch(): array
    {
        return [
            'roles' => [ // relationship on dishes model
                'name', // column enabled to search
            ],
        ];
    }

    /*
    |--------------------------------------------------------------------------
    |  Add Column
    |--------------------------------------------------------------------------
    | Make Datasource fields available to be used as columns.
    | You can pass a closure to transform/modify the data.
    |
    */
    public function addColumns(): ?PowerGridEloquent
    {
        if (auth()->user()->hasRole(RoleVar::ADMIN)) {
            return PowerGrid::eloquent()
                ->addColumn('name')
                ->addColumn('email')
                ->addColumn('role')
                ->addColumn('email_verified_at_formatted', function (User $model) {
                    return isset($model->email_verified_at) ? 'YES' : 'NO';
                })
                ->addColumn('created_at_formatted', function (User $model) {
                    return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
                });
        } else {
            return PowerGrid::eloquent()
                ->addColumn('name')
                ->addColumn('email')
                ->addColumn('email_verified_at_formatted', function (User $model) {
                    return isset($model->email_verified_at) ? 'YES' : 'NO';
                })
                ->addColumn('created_at_formatted', function (User $model) {
                    return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
                });
        }
    }

    /*
    |--------------------------------------------------------------------------
    |  Include Columns
    |--------------------------------------------------------------------------
    | Include the columns added columns, making them visible on the Table.
    | Each column can be configured with properties, filters, actions...
    |
    */
    public function columns(): array
    {
        if (auth()->user()->hasRole(RoleVar::ADMIN)) {
            return [
                Column::add()
                    ->title(__('Name'))
                    ->field('name')
                    ->searchable()
                    ->editOnClick(auth()->user()->can('users.*') || auth()->user()->can('users.update,create'))
                    ->makeInputText('name')
                    ->sortable(),
                Column::add()
                    ->title(__('Email'))
                    ->field('email')
                    ->searchable()
                    ->editOnClick(auth()->user()->can('users.*') || auth()->user()->can('users.update,create'))
                    ->makeInputText('email')
                    ->sortable(),
//                Column::add()
//                    ->title(__('Role'))
//                    ->field('roles')
//                    ->searchable()
//                    ->editOnClick(auth()->user()->can('users.*') || auth()->user()->can('users.update,create'))
//                    ->makeInputMultiSelect(Role::all(),'roles.name','roles.id')
//                    ->sortable(),
                Column::add()
                    ->title(__('Verified'))
                    ->field('email_verified_at_formatted')
            ];

        } else {
            return [
                Column::add()
                    ->title(__('Name'))
                    ->field('name')
                    ->searchable()
                    ->editOnClick(auth()->user()->can('users.*') || auth()->user()->can('users.update,create'))
                    ->makeInputText('name')
                    ->sortable(),
                Column::add()
                    ->title(__('Email'))
                    ->field('email')
                    ->searchable()
                    ->editOnClick(auth()->user()->can('users.*') || auth()->user()->can('users.update,create'))
                    ->makeInputText('email')
                    ->sortable(),
                Column::add()
                    ->title(__('Verified'))
                    ->field('email_verified_at_formatted')
            ];
        }

    }

    /*
    |--------------------------------------------------------------------------
    | Actions Method
    |--------------------------------------------------------------------------
    | Enable this section only when you have defined routes for these actions.
    |
    */


    public function actions(): array
    {
        if (auth()->user()->can("users.*")) {
            return [
                Button::add('user-details')
                    ->caption(__('Details'))
                    ->class('bg-indigo-500 text-white')
                    ->openModal('user-details', ['user' => 'id']),
                Button::add('user-delete')
                    ->caption(__('Delete'))
                    ->class('bg-red-500 text-white')
                    ->route('user.delete', ['user' => 'id']),

            ];
        } else {
            return [
                Button::add('user-details')
                    ->caption(__('Details'))
                    ->class('bg-indigo-500 text-white')
                    ->openModal('user-details', ['user' => 'id']),
            ];
        }

    }


    /*
    |--------------------------------------------------------------------------
    | Edit Method
    |--------------------------------------------------------------------------
    | Enable this section to use editOnClick() or toggleable() methods.
    | Data must be validated and treated (see "Update Data" in PowerGrid doc).
    |
    */


    public function update(array $data): bool
    {
        try {
            $updated = User::query()->find($data['id'])->update([
                $data['field'] => $data['value']
            ]);
        } catch (QueryException $exception) {
            $updated = false;
        }
        return $updated;
    }

    public function updateMessages(string $status, string $field = '_default_message'): string
    {
        $updateMessages = [
            'success' => [
                '_default_message' => __('Data has been updated successfully!'),
                //'custom_field' => __('Custom Field updated successfully!'),
            ],
            'error' => [
                '_default_message' => __('Error updating the data.'),
                //'custom_field' => __('Error updating custom field.'),
            ]
        ];

        return ($updateMessages[$status][$field] ?? $updateMessages[$status]['_default_message']);
    }


    public function template(): ?string
    {
        return null;
    }
}
