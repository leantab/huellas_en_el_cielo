<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
        http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

    <!-- Homepage -->
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <!-- Cremación de Mascotas Page (High Priority for SEO) -->
    <url>
        <loc>{{ url('/cremacion-mascotas') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.95</priority>
    </url>

    <!-- Landing Page -->
    <url>
        <loc>{{ url('/landing') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    <!-- Dashboard -->
    <url>
        <loc>{{ url('/dashboard') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
    </url>

    <!-- Settings -->
    <url>
        <loc>{{ url('/settings/profile') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('/settings/password') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ url('/settings/appearance') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
    </url>

    <!-- Authentication Pages -->
    <url>
        <loc>{{ url('/login') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc>{{ url('/register') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc>{{ url('/forgot-password') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.4</priority>
    </url>

    <url>
        <loc>{{ url('/confirm-password') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.4</priority>
    </url>

    <url>
        <loc>{{ url('/verify-email') }}</loc>
        <lastmod>{{ now()->format('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.4</priority>
    </url>

</urlset>
