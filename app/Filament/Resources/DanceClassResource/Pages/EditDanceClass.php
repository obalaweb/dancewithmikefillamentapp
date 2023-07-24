<?php

namespace App\Filament\Resources\DanceClassResource\Pages;

use App\Filament\Resources\DanceClassResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDanceClass extends EditRecord
{
    protected static string $resource = DanceClassResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
