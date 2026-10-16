<?php

declare(strict_types=1);

namespace Modules\SAO\Filament\Resources\ClosurePolicies\Schemas;

use Filament\Forms\Components\KeyValue;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Modules\Core\Filament\Utils\HasForm;
use Modules\SAO\Enums\ClosureAction;

final class ClosurePolicyForm
{
    use HasForm;

    /**
     * The closure condition keys an operator can compose, mirroring
     * {@see \Modules\SAO\Closure\ClosureConditionRegistry}. Duration-based ones
     * (`no_recurrence_for`, `resolved_for`) take a `days` entry in their config.
     *
     * Each is labelled by its `sao.conditions.*` key.
     *
     * @var list<string>
     */
    private const array CONDITION_KEYS = [
        'pull_request_merged',
        'no_recurrence_for',
        'fix_released',
        'fix_deployed_there',
        'resolved_for',
        'internal_tickets_only',
    ];

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
                    ->required()
                    ->maxLength(255),
                Select::make('action')
                    ->options(ClosureAction::class)
                    ->default(ClosureAction::Propose->value)
                    ->required()
                    ->helperText(__('sao.help.policyAction')),
                Toggle::make('is_active')
                    ->default(true),
                Repeater::make('conditions')
                    ->helperText(__('sao.help.conditions'))
                    ->schema([
                        Select::make('key')
                            ->options(static fn (): array => array_combine(self::CONDITION_KEYS, array_map(static fn (string $key): string => (string) __('sao.conditions.' . $key), self::CONDITION_KEYS)))
                            ->required(),
                        KeyValue::make('config')
                            ->keyLabel('Setting')
                            ->valueLabel('Value')
                            ->helperText(__('sao.help.conditionConfig')),
                    ])
                    ->addActionLabel('Add condition')
                    ->columns(1),
            ]));
    }
}
