<?php

declare(strict_types=1);

namespace Modules\SAO\Filament\Resources\OwnershipSuggestions\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Modules\SAO\Contracts\SuggestionPhraser;
use Modules\SAO\Models\OwnershipSuggestion;

final class OwnershipSuggestionInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('summary')
                    ->columnSpanFull()
                    ->state(static fn (OwnershipSuggestion $record): string => app(SuggestionPhraser::class)->phrase($record)),
                TextEntry::make('ticket.key')
                    ->label(__('sao.fields.ticket')),
                TextEntry::make('suggestedUser.name')
                    ->label(__('sao.fields.suggested_owner'))
                    ->placeholder('—'),
                TextEntry::make('rule')
                    ->badge(),
                TextEntry::make('score')
                    ->numeric(),
                TextEntry::make('evidence_paths')
                    ->badge()
                    ->columnSpanFull()
                    ->placeholder('—')
                    ->state(static fn (OwnershipSuggestion $record): array => self::paths($record)),
            ]);
    }

    /**
     * @return list<string>
     */
    private static function paths(OwnershipSuggestion $record): array
    {
        $paths = $record->evidence['paths'] ?? [];

        return is_array($paths) ? array_values(array_map(static fn (mixed $path): string => (string) $path, $paths)) : [];
    }
}
