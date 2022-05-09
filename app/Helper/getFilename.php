<?php

namespace App\Helper;

use Illuminate\Support\Str;

class getFilename
{
    public function __construct()
    {
        return new getFilename();
    }

    public static function getFilename($request)
    {
        $name = Str::random(40);
        $format = $request->fileupload->extension();
        $file = [
            'filename' => $name . '.' . $format,
            'type' => $format === 'mp4' ? 'video' : 'img'
        ];
        return $file;
    }
}
