<?php

declare(strict_types=1);

namespace Modules\SAO\Filament\Resources\Connections\Tables;

use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Modules\Core\Filament\Utils\HasTable;
use Modules\SAO\Models\Connection;
use Modules\SAO\Services\ConnectionHealthService;

final class ConnectionsTable
{
    use HasTable;

    public static function configure(Table $table): Table
    {
        return self::configureTable(
            table: $table,
            columns: static function (Collection $default_columns): void {
                $default_columns->unshift(
                    TextColumn::make('name')
                        ->searchable(),
                    TextColumn::make('driver_key')
                        ->badge()
                        ->searchable(),
                    TextColumn::make('capabilities')
                        ->badge(),
                    TextColumn::make('health_state')
                        ->badge(),
                    TextColumn::make('base_url')
                        ->placeholder('—')
                        ->toggleable(),
                    TextColumn::make('last_checked_at')
                        ->dateTime()
                        ->placeholder(__('sao.help.never'))
                        ->toggleable(),
                );
            },
            actions: static function (Collection $default_actions): void {
                $default_actions->unshift(
                    Action::make('testConnection')
                        ->label(__('sao.actions.testConnection'))
                        ->icon(Heroicon::OutlinedSignal)
                        ->action(static function (Connection $record): void {
                            $result = app(ConnectionHealthService::class)->check($record);

                            $notification = Notification::make()
                                ->title($result->healthy ? 'Connection healthy' : 'Connection unhealthy');

                            if ($result->detail !== null && $result->detail !== '') {
                                $notification->body($result->detail);
                            }

                            $result->healthy ? $notification->success() : $notification->danger();
                            $notification->send();
                        }),
                );
            },
        );
    }
}
