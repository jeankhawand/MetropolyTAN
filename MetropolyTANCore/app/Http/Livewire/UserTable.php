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
            ->showToggleColumns()
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
            return User::query()->where('id', '!=', auth()->user()->id)->where('id', '!=', User::role('admin')->get()[0]->id)->with('roles');
        } else {
            return User::query()->where('id', '!=', auth()->user()->id)->where('id', '!=', User::role('admin')->get()[0]->id);
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
        return [];
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
        return PowerGrid::eloquent()
            ->addColumn('id')
            ->addColumn('name')
            ->addColumn('created_at')
            ->addColumn('address')
            ->addColumn('email_verified_at_formatted', function (User $model) {
                return isset($model->email_verified_at) ? 'yes' : 'no';
            })
            ->addColumn('created_at_formatted', function (User $model) {
                return Carbon::parse($model->created_at)->format('d/m/Y H:i:s');
            });
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
        return [
            Column::add()
                ->title(__('ID'))
                ->field('id')
                ->searchable()
                ->sortable(),

            Column::add()
                ->title(__('Name'))
                ->field('name')
                ->searchable()
                ->editOnClick(auth()->user()->hasAnyPermission(['users.*','users.update']))
                ->makeInputText('name')
                ->sortable(),
            Column::add()
                ->title(__('Address'))
                ->field('address')
                ->searchable()
                ->editOnClick(auth()->user()->hasAnyPermission(['users.*','users.update']))
                ->makeInputText('address')
                ->sortable(),
            Column::add()
                ->title(__('Created at'))
                ->field('created_at')
                ->hidden(),
            Column::add()
                ->title(__('Created at'))
                ->field('created_at_formatted')
                ->makeInputDatePicker('created_at')
                ->searchable(),
            Column::add()
                ->title(__('Verified'))
                ->field('email_verified_at_formatted')
        ];
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
        if (auth()->user()->hasPermissionTo("users.*")) {
            return [
                Button::add('user-details')
                    ->caption(__('Details'))
                    ->class('bg-indigo-500 text-white')
                    ->openModal('user-details', []),
                Button::add('user-delete')
                    ->caption(__('Details'))
                    ->class('bg-indigo-500 text-white')
                    ->route('user.delete', ['id'=>'id']),

            ];
        } else {
            return [
                Button::add('user-details')
                    ->caption(__('Details'))
                    ->class('bg-indigo-500 text-white')
                    ->openModal('user-details', []),
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
