<?php

namespace App\Http\Livewire;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Livewire\Component;
use App\Models\User;
use Rappasoft\LaravelLivewireTables\Views\Column;
use Rappasoft\LaravelLivewireTables\Views\Columns\LinkColumn;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;



class UserComponent extends DataTableComponent
{
    protected $model = User::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Name','name')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Password', 'password')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Verified', 'email_verified_at')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Fecha Alta', 'created_at')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Fecha Ultima Modificacion', 'updated_at')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            
            LinkColumn::make('Action')
                ->title(fn($row) => 'Edit')
                ->location(fn($row) => route('users.show', $row)),
        ];

    }
   
}
// $table->id();
//             $table->string('name');
//             $table->string('email')->unique();
//             $table->timestamp('email_verified_at')->nullable();
//             $table->string('password');
//             $table->rememberToken();
//             $table->timestamps();