<?php

namespace Moox\ForgeServer\Resources;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Moox\ForgeServer\Models\ForgeProject;
use Moox\ForgeServer\Resources\ForgeProjectResource\Pages\ListPage;
use Moox\ForgeServer\Resources\ForgeProjectResource\Widgets\ForgeProjectWidgets;

class ForgeProjectResource extends Resource
{
    protected static ?string $model = ForgeProject::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('url')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('server_id')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('site_id')
                    ->maxLength(255)
                    ->required(),
                TextInput::make('behind')
                    ->maxLength(255),
                DateTimePicker::make('last_deployment'),
                TextInput::make('last_commit')
                    ->maxLength(255),
                TextInput::make('commit_message')
                    ->maxLength(255),
                TextInput::make('commit_author')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('forge-servers::translations.name'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('server.title')
                    ->label(__('forge-servers::translations.server'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('site_id')
                    ->label(__('forge-servers::translations.site_id'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('behind')
                    ->label(__('forge-servers::translations.behind'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_deployment')
                    ->label(__('forge-servers::translations.last_deployment'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_commit')
                    ->label(__('forge-servers::translations.last_commit'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('commit_message')
                    ->label(__('forge-servers::translations.commit_message'))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('commit_author')
                    ->label(__('forge-servers::translations.commit_author'))
                    ->sortable()
                    ->searchable(),
            ])
            ->defaultSort('title', 'desc')
            ->actions([
                Action::make('Deploy')->url(fn ($record): string => "{$record->url}"),

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
            ForgeProjectWidgets::class,
        ];
    }

    public static function getModelLabel(): string
    {
        return __('forge-servers::translations.project');
    }

    public static function getPluralModelLabel(): string
    {
        return __('forge-servers::translations.projects');
    }

    public static function getNavigationLabel(): string
    {
        return __('forge-servers::translations.projects');
    }

    public static function getBreadcrumb(): string
    {
        return __('forge-servers::translations.projects');
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
