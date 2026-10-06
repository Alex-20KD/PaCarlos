<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class NotificationController extends Controller
{
    /**
     * Return the most recent notifications sent to the mobile application.
     */
    public function getRecentAlerts(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Alertas recientes obtenidas correctamente.',
            'data' => [
                [
                    'id' => 501,
                    'title' => '¡Estamos en vivo!',
                    'body' => 'Conéctate ahora para seguir la cobertura especial.',
                    'type' => 'live_start',
                    'sent_at' => '2026-09-21T14:00:00Z',
                ],
                [
                    'id' => 500,
                    'title' => 'Última hora',
                    'body' => 'Revisa la actualización más reciente de nuestra redacción.',
                    'type' => 'breaking_news',
                    'sent_at' => '2026-09-21T13:42:00Z',
                ],
            ],
        ]);
    }

    /**
     * Return the communication topics and channels configuration.
     */
    public function getChannelsConfig(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Configuración de canales obtenida correctamente.',
            'data' => [
                'websockets' => [
                    'enabled' => true,
                    'driver' => 'reverb',
                    'channels' => [
                        'transmissions.live',
                        'news.breaking',
                    ],
                ],
                'push_fcm' => [
                    'enabled' => true,
                    'topics' => [
                        'live_alerts',
                        'breaking_news',
                    ],
                ],
            ],
        ]);
    }
}
