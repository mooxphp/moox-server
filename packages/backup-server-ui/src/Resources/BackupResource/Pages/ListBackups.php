<?php

namespace Moox\BackupServerUi\Resources\BackupResource\Pages;

use Filament\Actions\Action;
use Filament\Resources\Pages\ListRecords;
use Moox\BackupServerUi\Resources\BackupResource;

class ListBackups extends ListRecords
{
    protected static string $resource = BackupResource::class;

    protected function getHeaderActions(): array
    {
        return [Action::make()->name('backup')->label(__('Manual Backup'))];
    }
}
