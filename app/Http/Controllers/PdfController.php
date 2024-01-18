<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;

class PdfController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        Pdf::view('pdf')->save('new.pdf');
        return true;
    }
}
