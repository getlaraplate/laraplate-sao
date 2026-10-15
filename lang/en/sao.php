<?php

declare(strict_types=1);

return [
    'actions' => [
        'accept' => 'Accept',
        'close' => 'Close',
        'healthCheck' => 'Health check',
        'replay' => 'Replay',
    ],
    'entities' => [
        'closure_audits' => [
            'plural' => 'Closure audits',
            'singular' => 'Closure audit',
        ],
        'closure_policies' => [
            'plural' => 'Closure policies',
            'singular' => 'Closure policy',
        ],
        'connections' => [
            'plural' => 'Connections',
            'singular' => 'Connection',
        ],
        'environments' => [
            'plural' => 'Environments',
            'singular' => 'Environment',
        ],
        'ingest_events' => [
            'plural' => 'Ingest events',
            'singular' => 'Ingest event',
        ],
        'ownership_suggestions' => [
            'plural' => 'Ownership suggestions',
            'singular' => 'Ownership suggestion',
        ],
        'projects' => [
            'plural' => 'Projects',
            'singular' => 'Project',
        ],
        'releases' => [
            'plural' => 'Releases',
            'singular' => 'Release',
        ],
        'signals' => [
            'plural' => 'Signals',
            'singular' => 'Signal',
        ],
        'source_profiles' => [
            'plural' => 'Source profiles',
            'singular' => 'Source profile',
        ],
        'tickets' => [
            'plural' => 'Tickets',
            'singular' => 'Ticket',
        ],
    ],
    'enums' => [
        'closureAction' => [
            'close' => 'Close',
            'notify_only' => 'Notify only',
            'propose' => 'Propose',
        ],
        'connectionHealth' => [
            'healthy' => 'Healthy',
            'unhealthy' => 'Unhealthy',
            'unknown' => 'Unknown',
        ],
        'ingestStatus' => [
            'discarded' => 'Discarded',
            'failed' => 'Failed',
            'ingested' => 'Ingested',
            'received' => 'Received',
            'uncorrelated' => 'Uncorrelated',
        ],
        'ownershipRule' => [
            'blame_concentration' => 'Blame concentration',
            'codeowners' => 'CODEOWNERS entry',
            'path_owner' => 'Path ownership',
            'recent_touch' => 'Recent commits',
        ],
        'releaseStatus' => [
            'announced' => 'Announced',
            'observed' => 'Observed',
            'shipped' => 'Shipped',
        ],
        'signalState' => [
            'archived' => 'Archived',
            'muted' => 'Muted',
            'open' => 'Open',
            'resolved' => 'Resolved',
        ],
        'ticketPriority' => [
            'high' => 'High',
            'low' => 'Low',
            'normal' => 'Normal',
            'urgent' => 'Urgent',
        ],
    ],
    'fields' => [
        'action' => 'Action',
        'assignee' => 'Assignee',
        'base_url' => 'Base URL',
        'closed_at' => 'Closed at',
        'connection' => 'Connection',
        'current_version' => 'Current version',
        'delivery' => 'Delivery',
        'driver' => 'Driver',
        'due_at' => 'Due date',
        'group_key' => 'Group key',
        'health' => 'Health',
        'key' => 'Key',
        'key_prefix' => 'Key prefix',
        'last_checked_at' => 'Last checked',
        'last_seen_at' => 'Last seen',
        'number' => 'Number',
        'occurrences' => 'Occurrences',
        'outcome' => 'Outcome',
        'premature' => 'Premature',
        'priority' => 'Priority',
        'project' => 'Project',
        'released_at' => 'Released at',
        'reopened_at' => 'Reopened at',
        'reporter' => 'Reporter',
        'rule' => 'Rule',
        'score' => 'Score',
        'source_profile' => 'Source profile',
        'state' => 'State',
        'suggested_owner' => 'Suggested owner',
        'ticket' => 'Ticket',
        'version' => 'Version',
    ],
    'messages' => [
        'acceptConfirm' => 'Assign the ticket to the suggested user?',
        'accepted' => 'Ticket assigned to the suggested user.',
        'closeConfirm' => 'Apply the closure policy to the ticket?',
        'closeNotAllowed' => 'The policy does not allow closing the ticket right now.',
        'closed' => 'Ticket closed according to the selected policy.',
        'connectionHealthy' => 'Connection healthy.',
        'connectionHealthyDetail' => 'Connection healthy: :detail.',
        'connectionUnhealthy' => 'Connection unhealthy: :detail.',
        'connectionUnhealthyUnknown' => 'Connection unhealthy: unknown error.',
        'replayResult' => 'Replay (dry run]: resulting status ":status".',
        'transitionNotAllowed' => 'This transition is not allowed for this ticket.',
    ],
];
