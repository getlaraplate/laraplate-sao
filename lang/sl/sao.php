<?php

declare(strict_types=1);

return [
    'actions' => [
        'accept' => 'Sprejmi',
        'close' => 'Zapri',
        'healthCheck' => 'Preverjanje stanja',
        'replay' => 'Ponovi obdelavo',
    ],
    'entities' => [
        'closure_audits' => [
            'plural' => 'Revizije zaprtja',
            'singular' => 'Revizija zaprtja',
        ],
        'closure_policies' => [
            'plural' => 'Pravilniki zaprtja',
            'singular' => 'Pravilnik zaprtja',
        ],
        'connections' => [
            'plural' => 'Povezave',
            'singular' => 'Povezava',
        ],
        'deployments' => [
            'singular' => 'Namestitev',
            'plural' => 'Namestitve',
        ],
        'environments' => [
            'plural' => 'Okolja',
            'singular' => 'Okolje',
        ],
        'ingest_events' => [
            'plural' => 'Dogodki zajema',
            'singular' => 'Dogodek zajema',
        ],
        'ownership_suggestions' => [
            'plural' => 'Predlogi lastništva',
            'singular' => 'Predlog lastništva',
        ],
        'projects' => [
            'plural' => 'Projekti',
            'singular' => 'Projekt',
        ],
        'releases' => [
            'plural' => 'Izdaje',
            'singular' => 'Izdaja',
        ],
        'signals' => [
            'plural' => 'Signali',
            'singular' => 'Signal',
        ],
        'source_profiles' => [
            'plural' => 'Profili virov',
            'singular' => 'Profil virov',
        ],
        'ticket_statuses' => [
            'singular' => 'Stanje zahtevka',
            'plural' => 'Stanja zahtevkov',
        ],
        'ticket_types' => [
            'singular' => 'Vrsta zahtevka',
            'plural' => 'Vrste zahtevkov',
        ],
        'tickets' => [
            'plural' => 'Zahtevki',
            'singular' => 'Zahtevek',
        ],
        'workflow_schemes' => [
            'singular' => 'Shema poteka dela',
            'plural' => 'Sheme poteka dela',
        ],
    ],
    'enums' => [
        'closureAction' => [
            'close' => 'Zapri',
            'notify_only' => 'Samo obvesti',
            'propose' => 'Predlagaj',
        ],
        'connectionHealth' => [
            'healthy' => 'Deluje',
            'unhealthy' => 'Ne deluje',
            'unknown' => 'Neznano',
        ],
        'ingestStatus' => [
            'discarded' => 'Zavrženo',
            'failed' => 'Neuspešno',
            'ingested' => 'Zajeto',
            'received' => 'Prejeto',
            'uncorrelated' => 'Nepovezano',
        ],
        'ownershipRule' => [
            'blame_concentration' => 'Koncentracija blame',
            'codeowners' => 'Vnos CODEOWNERS',
            'path_owner' => 'Lastništvo poti',
            'recent_touch' => 'Nedavni commiti',
        ],
        'releaseStatus' => [
            'announced' => 'Napovedana',
            'observed' => 'Zaznana',
            'shipped' => 'Izdana',
        ],
        'signalState' => [
            'archived' => 'Arhivirano',
            'muted' => 'Utišano',
            'open' => 'Odprto',
            'resolved' => 'Rešeno',
        ],
        'ticketPriority' => [
            'high' => 'Visoka',
            'low' => 'Nizka',
            'normal' => 'Običajna',
            'urgent' => 'Nujna',
        ],
    ],
    'fields' => [
        'action' => 'Dejanje',
        'assignee' => 'Prevzemnik',
        'base_url' => 'Osnovni URL',
        'closed_at' => 'Zaprto',
        'connection' => 'Povezava',
        'current_version' => 'Trenutna različica',
        'delivery' => 'Dostava',
        'driver' => 'Gonilnik',
        'due_at' => 'Rok',
        'group_key' => 'Ključ skupine',
        'health' => 'Stanje',
        'key' => 'Ključ',
        'key_prefix' => 'Predpona ključa',
        'last_checked_at' => 'Zadnje preverjanje',
        'last_seen_at' => 'Nazadnje zaznano',
        'number' => 'Številka',
        'occurrences' => 'Pojavitve',
        'outcome' => 'Izid',
        'premature' => 'Prezgodnje',
        'priority' => 'Prioriteta',
        'project' => 'Projekt',
        'released_at' => 'Izdano',
        'reopened_at' => 'Ponovno odprto',
        'reporter' => 'Prijavitelj',
        'rule' => 'Pravilo',
        'score' => 'Ocena',
        'source_profile' => 'Profil vira',
        'state' => 'Stanje',
        'suggested_owner' => 'Predlagani lastnik',
        'ticket' => 'Zahtevek',
        'version' => 'Različica',
    ],
    'messages' => [
        'acceptConfirm' => 'Dodeliti zahtevek predlaganemu uporabniku?',
        'accepted' => 'Zahtevek dodeljen predlaganemu uporabniku.',
        'closeConfirm' => 'Uporabiti pravilnik zaprtja za zahtevek?',
        'closeNotAllowed' => 'Pravilnik trenutno ne dovoljuje zaprtja zahtevka.',
        'closed' => 'Zahtevek zaprt v skladu z izbranim pravilnikom.',
        'connectionHealthy' => 'Povezava deluje.',
        'connectionHealthyDetail' => 'Povezava deluje: :detail.',
        'connectionUnhealthy' => 'Povezava ne deluje: :detail.',
        'connectionUnhealthyUnknown' => 'Povezava ne deluje: neznana napaka.',
        'replayResult' => 'Ponovna obdelava (preizkus]: končno stanje »:status«.',
        'transitionNotAllowed' => 'Ta prehod za ta zahtevek ni dovoljen.',
    ],
    'navigation' => [
        'delivery' => 'SAO - Dostava',
        'governance' => 'SAO - Upravljanje',
        'signals' => 'SAO - Signali',
        'ticketing' => 'SAO - Zahtevki',
    ],
];
