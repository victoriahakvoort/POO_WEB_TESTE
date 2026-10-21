<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;

class UploadController extends Controller
{
    /**
    * Faz upload de um arquivo.
    *
    * @requestMediaType multipart/form-data
    */
    public function upload(UploadRequest $request)
    {
        $path = $request->file('file')->store('uploads');

        return ['path' => $path];
    }
}
