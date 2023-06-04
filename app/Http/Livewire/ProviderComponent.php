<?php

namespace App\Http\Livewire;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Livewire\Component;
use App\Models\Proveedor;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ProviderComponent extends DataTableComponent
{
    protected $model = Proveedor::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make('Cuit','cuit_proveedor')
                ->sortable()
                ->searchable(),
            Column::make('Razon Social', 'razonSocial_proveedor')
                ->sortable()
                ->searchable(),
            Column::make('Nombre Fantasia', 'nombreFantasia_proveedor')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Codigo Postal', 'codigoPostal_proveedor')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Direccion', 'direccion_proveedor')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make('Telefono', 'telefono_proveedor')
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            
            
        ];
    }
}
