<?php

declare(strict_types=1);

namespace Modules\SAO\Filament\Resources\IngestEvents\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Modules\SAO\Models\IngestEvent;

final class IngestEventInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('delivery_id'),
                TextEntry::make('status')
                    ->badge(),
                TextEntry::make('outcome')
                    ->placeholder('—'),
                TextEntry::make('connection.name')
                    ->label(__('sao.fields.connection'))
                    ->placeholder('—'),
                TextEntry::make('sourceProfile.name')
                    ->label(__('sao.fields.source_profile'))
                    ->placeholder('—'),
                TextEntry::make('project.name')
                    ->label(__('sao.fields.project'))
                    ->placeholder('—'),
                TextEntry::make('winning_rule')
                    ->placeholder('—'),
                TextEntry::make('signal.group_key')
                    ->label(__('sao.fields.signal'))
                    ->placeholder('—'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('payload')
                    ->columnSpanFull()
                    ->state(static fn (IngestEvent $record): string => (string) json_encode($record->payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)),
            ]);
    }
}
