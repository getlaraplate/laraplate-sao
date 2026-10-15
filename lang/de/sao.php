<?php

declare(strict_types=1);

return [
    'actions' => [
        'accept' => 'Annehmen',
        'close' => 'Schließen',
        'healthCheck' => 'Zustandsprüfung',
        'replay' => 'Erneut verarbeiten',
    ],
    'entities' => [
        'closure_audits' => [
            'plural' => 'Abschlussprüfungen',
            'singular' => 'Abschlussprüfung',
        ],
        'closure_policies' => [
            'plural' => 'Abschlussrichtlinien',
            'singular' => 'Abschlussrichtlinie',
        ],
        'connections' => [
            'plural' => 'Verbindungen',
            'singular' => 'Verbindung',
        ],
        'deployments' => [
            'singular' => 'Deployment',
            'plural' => 'Deployments',
        ],
        'environments' => [
            'plural' => 'Umgebungen',
            'singular' => 'Umgebung',
        ],
        'ingest_events' => [
            'plural' => 'Ingest-Ereignisse',
            'singular' => 'Ingest-Ereignis',
        ],
        'ownership_suggestions' => [
            'plural' => 'Zuständigkeitsvorschläge',
            'singular' => 'Zuständigkeitsvorschlag',
        ],
        'projects' => [
            'plural' => 'Projekte',
            'singular' => 'Projekt',
        ],
        'releases' => [
            'plural' => 'Releases',
            'singular' => 'Release',
        ],
        'signals' => [
            'plural' => 'Signale',
            'singular' => 'Signal',
        ],
        'source_profiles' => [
            'plural' => 'Quellprofile',
            'singular' => 'Quellprofil',
        ],
        'ticket_statuses' => [
            'singular' => 'Ticketstatus',
            'plural' => 'Ticketstatus',
        ],
        'ticket_types' => [
            'singular' => 'Tickettyp',
            'plural' => 'Tickettypen',
        ],
        'tickets' => [
            'plural' => 'Tickets',
            'singular' => 'Ticket',
        ],
        'workflow_schemes' => [
            'singular' => 'Workflow-Schema',
            'plural' => 'Workflow-Schemas',
        ],
    ],
    'enums' => [
        'closureAction' => [
            'close' => 'Schließen',
            'notify_only' => 'Nur benachrichtigen',
            'propose' => 'Vorschlagen',
        ],
        'connectionHealth' => [
            'healthy' => 'Fehlerfrei',
            'unhealthy' => 'Fehlerhaft',
            'unknown' => 'Unbekannt',
        ],
        'ingestStatus' => [
            'discarded' => 'Verworfen',
            'failed' => 'Fehlgeschlagen',
            'ingested' => 'Übernommen',
            'received' => 'Empfangen',
            'uncorrelated' => 'Nicht zugeordnet',
        ],
        'ownershipRule' => [
            'blame_concentration' => 'Blame-Konzentration',
            'codeowners' => 'CODEOWNERS-Eintrag',
            'path_owner' => 'Pfad-Zuständigkeit',
            'recent_touch' => 'Letzte Commits',
        ],
        'releaseStatus' => [
            'announced' => 'Angekündigt',
            'observed' => 'Beobachtet',
            'shipped' => 'Ausgeliefert',
        ],
        'signalState' => [
            'archived' => 'Archiviert',
            'muted' => 'Stummgeschaltet',
            'open' => 'Offen',
            'resolved' => 'Gelöst',
        ],
        'ticketPriority' => [
            'high' => 'Hoch',
            'low' => 'Niedrig',
            'normal' => 'Normal',
            'urgent' => 'Dringend',
        ],
    ],
    'fields' => [
        'action' => 'Aktion',
        'assignee' => 'Bearbeiter',
        'base_url' => 'Basis-URL',
        'closed_at' => 'Geschlossen am',
        'connection' => 'Verbindung',
        'current_version' => 'Aktuelle Version',
        'delivery' => 'Zustellung',
        'driver' => 'Treiber',
        'due_at' => 'Fälligkeitsdatum',
        'group_key' => 'Gruppenschlüssel',
        'health' => 'Zustand',
        'key' => 'Schlüssel',
        'key_prefix' => 'Schlüsselpräfix',
        'last_checked_at' => 'Zuletzt geprüft',
        'last_seen_at' => 'Zuletzt gesehen',
        'number' => 'Nummer',
        'occurrences' => 'Vorkommen',
        'outcome' => 'Ergebnis',
        'premature' => 'Verfrüht',
        'priority' => 'Priorität',
        'project' => 'Projekt',
        'released_at' => 'Veröffentlicht am',
        'reopened_at' => 'Wiedereröffnet am',
        'reporter' => 'Melder',
        'rule' => 'Regel',
        'score' => 'Punktzahl',
        'source_profile' => 'Quellprofil',
        'state' => 'Zustand',
        'suggested_owner' => 'Vorgeschlagener Zuständiger',
        'ticket' => 'Ticket',
        'version' => 'Version',
    ],
    'messages' => [
        'acceptConfirm' => 'Ticket dem vorgeschlagenen Benutzer zuweisen?',
        'accepted' => 'Ticket dem vorgeschlagenen Benutzer zugewiesen.',
        'closeConfirm' => 'Abschlussrichtlinie auf das Ticket anwenden?',
        'closeNotAllowed' => 'Die Richtlinie erlaubt das Schließen des Tickets derzeit nicht.',
        'closed' => 'Ticket gemäß der ausgewählten Richtlinie geschlossen.',
        'connectionHealthy' => 'Verbindung fehlerfrei.',
        'connectionHealthyDetail' => 'Verbindung fehlerfrei: :detail.',
        'connectionUnhealthy' => 'Verbindung fehlerhaft: :detail.',
        'connectionUnhealthyUnknown' => 'Verbindung fehlerhaft: unbekannter Fehler.',
        'replayResult' => 'Erneute Verarbeitung (Probelauf]: resultierender Status „:status“.',
        'transitionNotAllowed' => 'Dieser Übergang ist für dieses Ticket nicht erlaubt.',
    ],
    'navigation' => [
        'delivery' => 'SAO - Auslieferung',
        'governance' => 'SAO - Governance',
        'signals' => 'SAO - Signale',
        'ticketing' => 'SAO - Tickets',
    ],
];
