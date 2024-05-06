<?php

namespace Moox\ForgeServer\Resources\ForgeServerResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Moox\ForgeServer\Models\ForgeServer;
use Moox\ForgeServer\Resources\ForgeServerResource;
use Moox\ForgeServer\Resources\ForgeServerResource\Widgets\ForgeServerWidgets;

class ListPage extends ListRecords
{
    public static string $resource = ForgeServerResource::class;

    public function getActions(): array
    {
        return [];
    }

    public function getHeaderWidgets(): array
    {
        return [
            ForgeServerWidgets::class,
        ];
    }

    public function getTitle(): string
    {
        return __('forge-servers::translations.title');
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->using(function (array $data, string $model): ForgeServer {
                    return $model::create($data);
                }),
        ];
    }
}
