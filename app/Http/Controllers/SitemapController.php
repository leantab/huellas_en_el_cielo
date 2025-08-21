<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $content = view('sitemap.index')->render();
        
        return response($content, 200)
            ->header('Content-Type', 'application/xml');
    }
}
