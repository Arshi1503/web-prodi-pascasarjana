<?php

namespace App\Filament\Resources\KeterampilanKhususCPLResource\Pages;

use App\Filament\Resources\KeterampilanKhususCPLResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKeterampilanKhususCPLS extends ListRecords
{
    protected static string $resource = KeterampilanKhususCPLResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
