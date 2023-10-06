<?php
header('Content-type: application/xml; charset="ISO-8859-1"', true);
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url(); ?></loc>
        <priority>1.0</priority>
    </url>
    <!-- MAIN ROUTES -->
    <url>
        <loc>https://sandemoindoteknologi.co.id/about</loc>
        <lastmod>2023-06-02T03:43:40+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://sandemoindoteknologi.co.id/service</loc>
        <lastmod>2023-06-02T03:43:40+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://sandemoindoteknologi.co.id/packetappweb</loc>
        <lastmod>2023-06-02T03:43:40+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://sandemoindoteknologi.co.id/portfolio</loc>
        <lastmod>2023-06-02T03:43:40+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://sandemoindoteknologi.co.id/karir</loc>
        <lastmod>2023-06-02T03:43:40+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://sandemoindoteknologi.co.id/blog</loc>
        <lastmod>2023-06-02T03:43:40+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <!-- Articles -->
    <?php foreach ($article as $data) { ?>
        <url>
            <loc><?php echo base_url('blog/') . $data->kategori . '/' . $data->slug; ?></loc>
            <priority>1.0</priority>
            <lastmod><?php echo date('c', $data->date_created); ?></lastmod>
        </url>
    <?php } ?>
</urlset>