<?php

declare(strict_types=1);

namespace Modules\SAO\Filament\Resources\Environments\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Modules\Core\Filament\Utils\HasForm;

final class EnvironmentForm
{
    use HasForm;

    public static function configure(Schema $schema): Schema
    {
        return self::configureForm($schema
            ->components([
                Select::make('project_id')
                    ->relationship('project', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('name')
                    ->helperText(__('sao.help.environmentName'))
                    ->required()
                    ->maxLength(255),
                TextInput::make('current_version')
                    ->helperText(__('sao.help.currentVersion'))
                    ->maxLength(255),
                DateTimePicker::make('last_seen_at')
                    ->helperText(__('sao.help.lastSeenAt')),
            ]));
    }
}
