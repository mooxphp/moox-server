<?php

namespace Moox\ForgeServer\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Moox\ForgeServer\Models\ForgeServer;
use Moox\ForgeServer\Resources\ForgeServerResource\Pages\ListPage;
use Moox\ForgeServer\Resources\ForgeServerResource\Widgets\ForgeServerWidgets;

class ForgeServerResource extends Resource
{
    protected static ?string $model = ForgeServer::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('forge_id')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('ip_address')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('type')
                    ->maxLength(255),
                TextInput::make('provider')
                    ->maxLength(255),
                TextInput::make('region')
                    ->maxLength(255),
                TextInput::make('ubuntu_ver')
                    ->maxLength(255),
                TextInput::make('db_status')
                    ->maxLength(255),
                TextInput::make('redis_status')
                    ->maxLength(255),
                TextInput::make('php_version')
                    ->maxLength(255),
                Toggle::make('is_ready')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('forge-servers::translations.title'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('forge_id')
                    ->label(__('forge-servers::translations.forge_id'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ip_address')
                    ->label(__('forge-servers::translations.ip_address'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('type')
                    ->label(__('forge-servers::translations.type'))
                    ->sortable(),
                TextColumn::make('provider')
                    ->label(__('forge-servers::translations.provider'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('region')
                    ->label(__('forge-servers::translations.region'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('ubuntu_ver')
                    ->label(__('forge-servers::translations.ubuntu_ver'))
                    ->sortable(),
                TextColumn::make('php_version')
                    ->label(__('forge-servers::translations.php_version'))
                    ->sortable(),
            ])
            ->defaultSort('title', 'desc')
            ->actions([
                Action::make('Reboot')->url(fn ($record): string => "https://forge.laravel.com/api/v1/servers/{$record->forge_id}/reboot"),
            ])
            ->bulkActions([
                DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPage::route('/'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            ForgeServerWidgets::class,
        ];
    }

    public static function getModelLabel(): string
    {
        return __('forge-servers::translations.single');
    }

    public static function getPluralModelLabel(): string
    {
        return __('forge-servers::translations.plural');
    }

    public static function getNavigationLabel(): string
    {
        return __('forge-servers::translations.navigation_label');
    }

    public static function getBreadcrumb(): string
    {
        return __('forge-servers::translations.breadcrumb');
    }

    public static function shouldRegisterNavigation(): bool
    {
        return true;
    }

    public static function getNavigationBadge(): ?string
    {
        return number_format(static::getModel()::count());
    }

    public static function getNavigationGroup(): ?string
    {
        return __('forge-servers::translations.navigation_group');
    }

    public static function getNavigationSort(): ?int
    {
        return config('forge-servers.navigation_sort');
    }
}