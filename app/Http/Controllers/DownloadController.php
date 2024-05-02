<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class DownloadController extends Controller
{
    public function download($chalani){
        $data = Media::select('id', 'file_name')->where('model_id', $chalani)->first();

        $content = Storage::disk('pubic')->path($data->id.'/'.$data->file_name);

        return response()->download($content);
    }
}
