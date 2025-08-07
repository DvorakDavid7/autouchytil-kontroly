<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Spatie\Sitemap\SitemapGenerator;


Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('sitemap:generate', function () {
    $this->info('Generating sitemap and robots.txt...');

    $baseUrl = config('app.url');

    SitemapGenerator::create($baseUrl)->writeToFile(public_path('sitemap.xml'));

    $robotsPath = public_path('robots.txt');
    $robotsContent = "User-agent: *\n";
    $robotsContent .= "Disallow:\n\n";
    $robotsContent .= "Sitemap: {$baseUrl}/sitemap.xml\n";
    file_put_contents($robotsPath, $robotsContent);

    $this->info('Sitemap and robots.txt generated at public/ directory');
})->purpose('Generate the sitemap.xml file for the website');
