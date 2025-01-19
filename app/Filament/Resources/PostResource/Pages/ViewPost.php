<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Contracts\Support\Htmlable;
class ViewPost extends ViewRecord
{
    protected static string $resource = PostResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\EditAction::make(),
    //     ];
    // }

    public function getTitle(): string | Htmlable
    {
        /** @var Post */
        $record = $this->getRecord();

        return $record->title;
    }

    protected function getActions(): array
    {
        return [];
    }
}
