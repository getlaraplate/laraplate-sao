<?php

declare(strict_types=1);

return [
    'actions' => [
        'accept' => 'Accetta',
        'close' => 'Chiudi',
        'healthCheck' => 'Verifica stato',
        'replay' => 'Riesegui',
    ],
    'entities' => [
        'closure_audits' => [
            'plural' => 'Audit di chiusura',
            'singular' => 'Audit di chiusura',
        ],
        'closure_policies' => [
            'plural' => 'Policy di chiusura',
            'singular' => 'Policy di chiusura',
        ],
        'connections' => [
            'plural' => 'Connessioni',
            'singular' => 'Connessione',
        ],
        'deployments' => [
            'singular' => 'Deployment',
            'plural' => 'Deployment',
        ],
        'environments' => [
            'plural' => 'Ambienti',
            'singular' => 'Ambiente',
        ],
        'ingest_events' => [
            'plural' => 'Eventi di ingestione',
            'singular' => 'Evento di ingestione',
        ],
        'ownership_suggestions' => [
            'plural' => 'Suggerimenti di assegnazione',
            'singular' => 'Suggerimento di assegnazione',
        ],
        'projects' => [
            'plural' => 'Progetti',
            'singular' => 'Progetto',
        ],
        'releases' => [
            'plural' => 'Release',
            'singular' => 'Release',
        ],
        'signals' => [
            'plural' => 'Segnali',
            'singular' => 'Segnale',
        ],
        'source_profiles' => [
            'plural' => 'Profili sorgente',
            'singular' => 'Profilo sorgente',
        ],
        'ticket_statuses' => [
            'singular' => 'Stato ticket',
            'plural' => 'Stati ticket',
        ],
        'ticket_types' => [
            'singular' => 'Tipo ticket',
            'plural' => 'Tipi ticket',
        ],
        'tickets' => [
            'plural' => 'Ticket',
            'singular' => 'Ticket',
        ],
        'workflow_schemes' => [
            'singular' => 'Schema di workflow',
            'plural' => 'Schemi di workflow',
        ],
    ],
    'enums' => [
        'closureAction' => [
            'close' => 'Chiudi',
            'notify_only' => 'Solo notifica',
            'propose' => 'Proponi',
        ],
        'connectionHealth' => [
            'healthy' => 'Funzionante',
            'unhealthy' => 'Non funzionante',
            'unknown' => 'Sconosciuto',
        ],
        'ingestStatus' => [
            'discarded' => 'Scartato',
            'failed' => 'Fallito',
            'ingested' => 'Acquisito',
            'received' => 'Ricevuto',
            'uncorrelated' => 'Non correlato',
        ],
        'ownershipRule' => [
            'blame_concentration' => 'Concentrazione blame',
            'codeowners' => 'Voce CODEOWNERS',
            'path_owner' => 'Proprietà del percorso',
            'recent_touch' => 'Commit recenti',
        ],
        'releaseStatus' => [
            'announced' => 'Annunciata',
            'observed' => 'Rilevata',
            'shipped' => 'Rilasciata',
        ],
        'signalState' => [
            'archived' => 'Archiviato',
            'muted' => 'Silenziato',
            'open' => 'Aperto',
            'resolved' => 'Risolto',
        ],
        'ticketPriority' => [
            'high' => 'Alta',
            'low' => 'Bassa',
            'normal' => 'Normale',
            'urgent' => 'Urgente',
        ],
    ],
    'fields' => [
        'action' => 'Azione',
        'assignee' => 'Assegnatario',
        'base_url' => 'URL di base',
        'closed_at' => 'Chiuso il',
        'connection' => 'Connessione',
        'current_version' => 'Versione corrente',
        'delivery' => 'Consegna',
        'driver' => 'Driver',
        'due_at' => 'Scadenza',
        'group_key' => 'Chiave di raggruppamento',
        'health' => 'Stato di salute',
        'key' => 'Chiave',
        'key_prefix' => 'Prefisso chiave',
        'last_checked_at' => 'Ultimo controllo',
        'last_seen_at' => 'Ultima rilevazione',
        'number' => 'Numero',
        'occurrences' => 'Occorrenze',
        'outcome' => 'Esito',
        'premature' => 'Prematura',
        'priority' => 'Priorità',
        'project' => 'Progetto',
        'released_at' => 'Rilasciata il',
        'reopened_at' => 'Riaperto il',
        'reporter' => 'Segnalatore',
        'rule' => 'Regola',
        'score' => 'Punteggio',
        'source_profile' => 'Profilo sorgente',
        'state' => 'Stato',
        'suggested_owner' => 'Assegnatario suggerito',
        'ticket' => 'Ticket',
        'version' => 'Versione',
    ],
    'messages' => [
        'acceptConfirm' => 'Assegnare il ticket all\'utente suggerito?',
        'accepted' => 'Ticket assegnato all\'utente suggerito.',
        'closeConfirm' => 'Applicare la policy di chiusura al ticket?',
        'closeNotAllowed' => 'La policy non consente la chiusura del ticket in questo momento.',
        'closed' => 'Ticket chiuso secondo la policy selezionata.',
        'connectionHealthy' => 'Connessione funzionante.',
        'connectionHealthyDetail' => 'Connessione funzionante: :detail.',
        'connectionUnhealthy' => 'Connessione non funzionante: :detail.',
        'connectionUnhealthyUnknown' => 'Connessione non funzionante: errore sconosciuto.',
        'replayResult' => 'Riesecuzione (prova]: stato risultante ":status".',
        'transitionNotAllowed' => 'Transizione non consentita per questo ticket.',
    ],
    'navigation' => [
        'delivery' => 'SAO - Rilasci',
        'governance' => 'SAO - Governance',
        'signals' => 'SAO - Segnali',
        'ticketing' => 'SAO - Ticket',
    ],
];
