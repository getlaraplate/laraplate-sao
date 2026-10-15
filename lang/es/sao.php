<?php

declare(strict_types=1);

return [
    'actions' => [
        'accept' => 'Aceptar',
        'close' => 'Cerrar',
        'healthCheck' => 'Comprobación de estado',
        'replay' => 'Reprocesar',
    ],
    'entities' => [
        'closure_audits' => [
            'plural' => 'Auditorías de cierre',
            'singular' => 'Auditoría de cierre',
        ],
        'closure_policies' => [
            'plural' => 'Políticas de cierre',
            'singular' => 'Política de cierre',
        ],
        'connections' => [
            'plural' => 'Conexiones',
            'singular' => 'Conexión',
        ],
        'environments' => [
            'plural' => 'Entornos',
            'singular' => 'Entorno',
        ],
        'ingest_events' => [
            'plural' => 'Eventos de ingesta',
            'singular' => 'Evento de ingesta',
        ],
        'ownership_suggestions' => [
            'plural' => 'Sugerencias de responsable',
            'singular' => 'Sugerencia de responsable',
        ],
        'projects' => [
            'plural' => 'Proyectos',
            'singular' => 'Proyecto',
        ],
        'releases' => [
            'plural' => 'Versiones',
            'singular' => 'Versión',
        ],
        'signals' => [
            'plural' => 'Señales',
            'singular' => 'Señal',
        ],
        'source_profiles' => [
            'plural' => 'Perfiles de origen',
            'singular' => 'Perfil de origen',
        ],
        'tickets' => [
            'plural' => 'Tickets',
            'singular' => 'Ticket',
        ],
    ],
    'enums' => [
        'closureAction' => [
            'close' => 'Cerrar',
            'notify_only' => 'Solo notificar',
            'propose' => 'Proponer',
        ],
        'connectionHealth' => [
            'healthy' => 'Correcta',
            'unhealthy' => 'Con errores',
            'unknown' => 'Desconocido',
        ],
        'ingestStatus' => [
            'discarded' => 'Descartado',
            'failed' => 'Fallido',
            'ingested' => 'Ingerido',
            'received' => 'Recibido',
            'uncorrelated' => 'Sin correlación',
        ],
        'ownershipRule' => [
            'blame_concentration' => 'Concentración de blame',
            'codeowners' => 'Entrada CODEOWNERS',
            'path_owner' => 'Propiedad de la ruta',
            'recent_touch' => 'Commits recientes',
        ],
        'releaseStatus' => [
            'announced' => 'Anunciada',
            'observed' => 'Observada',
            'shipped' => 'Publicada',
        ],
        'signalState' => [
            'archived' => 'Archivada',
            'muted' => 'Silenciada',
            'open' => 'Abierta',
            'resolved' => 'Resuelta',
        ],
        'ticketPriority' => [
            'high' => 'Alta',
            'low' => 'Baja',
            'normal' => 'Normal',
            'urgent' => 'Urgente',
        ],
    ],
    'fields' => [
        'action' => 'Acción',
        'assignee' => 'Responsable',
        'base_url' => 'URL base',
        'closed_at' => 'Cerrado el',
        'connection' => 'Conexión',
        'current_version' => 'Versión actual',
        'delivery' => 'Entrega',
        'driver' => 'Controlador',
        'due_at' => 'Fecha de vencimiento',
        'group_key' => 'Clave de grupo',
        'health' => 'Estado de salud',
        'key' => 'Clave',
        'key_prefix' => 'Prefijo de clave',
        'last_checked_at' => 'Última comprobación',
        'last_seen_at' => 'Visto por última vez',
        'number' => 'Número',
        'occurrences' => 'Ocurrencias',
        'outcome' => 'Resultado',
        'premature' => 'Prematuro',
        'priority' => 'Prioridad',
        'project' => 'Proyecto',
        'released_at' => 'Publicada el',
        'reopened_at' => 'Reabierto el',
        'reporter' => 'Informador',
        'rule' => 'Regla',
        'score' => 'Puntuación',
        'source_profile' => 'Perfil de origen',
        'state' => 'Estado',
        'suggested_owner' => 'Responsable sugerido',
        'ticket' => 'Ticket',
        'version' => 'Versión',
    ],
    'messages' => [
        'acceptConfirm' => '¿Asignar el ticket al usuario sugerido?',
        'accepted' => 'Ticket asignado al usuario sugerido.',
        'closeConfirm' => '¿Aplicar la política de cierre al ticket?',
        'closeNotAllowed' => 'La política no permite cerrar el ticket en este momento.',
        'closed' => 'Ticket cerrado según la política seleccionada.',
        'connectionHealthy' => 'Conexión correcta.',
        'connectionHealthyDetail' => 'Conexión correcta: :detail.',
        'connectionUnhealthy' => 'Conexión con errores: :detail.',
        'connectionUnhealthyUnknown' => 'Conexión con errores: error desconocido.',
        'replayResult' => 'Reprocesado (simulación]: estado resultante «:status».',
        'transitionNotAllowed' => 'Esta transición no está permitida para este ticket.',
    ],
];
