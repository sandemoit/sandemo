<?php
header('Content-type: application/xml; charset="ISO-8859-1"', true);
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?php echo base_url('/'); ?></loc>
        <priority>1.0</priority>
    </url>

    <!-- MAIN ROUTES -->
    <url>
        <loc><?php echo base_url('tentang-kami'); ?></loc>
        <lastmod>2023-10-13T03:05:08+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?php echo base_url('web-development'); ?></loc>
        <lastmod>2023-10-13T03:05:08+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?php echo base_url('portfolio'); ?></loc>
        <lastmod>2023-10-13T03:05:08+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?php echo base_url('karir'); ?></loc>
        <lastmod>2023-10-13T03:05:08+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?php echo base_url('team'); ?></loc>
        <lastmod>2023-10-13T03:05:08+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?php echo base_url('blog'); ?></loc>
        <lastmod>2023-10-13T03:05:08+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc><?php echo base_url('kontak'); ?></loc>
        <lastmod>2023-10-13T03:05:08+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    <!-- Articles -->
    <?php foreach ($article as $data) { ?>
        <url>
            <loc><?php echo base_url('blog/') . $data->kategori . '/' . $data->slug; ?></loc>
            <lastmod><?php echo date('c', $data->date_created); ?></lastmod>
            <priority>1.0</priority>
        </url>
    <?php } ?>
</urlset>