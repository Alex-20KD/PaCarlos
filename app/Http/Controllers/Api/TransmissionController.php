<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class TransmissionController extends Controller
{
    /**
     * Return the currently active live stream.
     */
    public function getActiveStream(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Transmisión activa obtenida correctamente.',
            'data' => [
                'title' => 'Cobertura en vivo: noticias de última hora',
                'stream_url' => 'https://stream.noticias-locales.test/live/central.m3u8',
                'viewers' => 1284,
                'is_live' => true,
            ],
        ]);
    }

    /**
     * Return a simulated list of recent transmissions and VOD recordings.
     */
    public function getRecentTransmissions(): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Transmisiones recientes obtenidas correctamente.',
            'data' => [
                [
                    'id' => 101,
                    'title' => 'Informe especial: elecciones locales',
                    'recording_url' => 'https://cdn.noticias-locales.test/vod/101.m3u8',
                    'duration_seconds' => 3720,
                    'recorded_at' => '2026-09-20T19:30:00Z',
                ],
                [
                    'id' => 100,
                    'title' => 'Resumen informativo de la mañana',
                    'recording_url' => 'https://cdn.noticias-locales.test/vod/100.m3u8',
                    'duration_seconds' => 2460,
                    'recorded_at' => '2026-09-20T13:00:00Z',
                ],
                [
                    'id' => 99,
                    'title' => 'Reporte meteorológico de la región',
                    'recording_url' => 'https://cdn.noticias-locales.test/vod/99.m3u8',
                    'duration_seconds' => 900,
                    'recorded_at' => '2026-09-19T15:45:00Z',
                ],
            ],
        ]);
    }
}
