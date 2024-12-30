<?php
header('Content-type: application/xml; charset="ISO-8859-1"', true);
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?= base_url('/'); ?></loc>
    </url>

    <!-- MAIN ROUTES -->
    <url>
        <loc><?= base_url('tentang-kami'); ?></loc>
    </url>
    <url>
        <loc><?= base_url('web-development'); ?></loc>
    </url>
    <url>
        <loc><?= base_url('portfolio'); ?></loc>
    </url>
    <url>
        <loc><?= base_url('karir'); ?></loc>
    </url>
    <url>
        <loc><?= base_url('team'); ?></loc>
    </url>
    <url>
        <loc><?= base_url('blog'); ?></loc>
    </url>
    <url>
        <loc><?= base_url('kontak'); ?></loc>
    </url>

    <!-- Articles -->
    <?php foreach ($article as $data) { ?>
        <url>
            <loc><?= base_url('blog/') . $data->kategori . '/' . $data->slug; ?></loc>
        </url>
    <?php } ?>
</urlset>