<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Apply;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

class ApplicationTable extends DataTableComponent
{
    protected $model = Apply::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Programme", "programme")
                ->sortable(),
            Column::make("Major", "major")
                ->sortable(),
            // Column::make("Cellphone", "cellphone")
            //     ->sortable(),
            Column::make("Application type", "application_type")
                ->sortable(),
            Column::make("Doa", "doa")
                ->sortable(),
            Column::make("Doc", "doc")
                ->sortable(),
            Column::make("Status", "payment.status")
                ->sortable(),
            Column::make('Actions')->label(
                fn ($row, Column $column) => view('livewire.appointment.actions')->withRow($row)
            ),
        ];
    }


    public function builder(): Builder
    {

        return Apply::query()->where('user_id', Auth::user()->id);
    }
}