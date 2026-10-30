<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    /**
     * Faz upload de um arquivo.
     *
     * @requestMediaType multipart/form-data
     */
    public function upload(UploadRequest $request)
    {
        $path = $request->file('file')->store('files', 'public');
        $url = Storage::disk('public')->url($path);

        return [
            'path' => $path,
            'url' => $url,
        ];
    }
}