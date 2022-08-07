<?php
if (isset($pageTitle)) {
    $pageTitle = trim(filter_var(htmlspecialchars($pageTitle)), FILTER_SANITIZE_STRING);
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo $pageTitle ?? null; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="An job application manager which groups all of your resources like resumes and cover letters in one place, no ads, popups,
                                          or other annoying content. Additionally, job ads are fetched from various places on the internet and displayed right
                                          in your grasp, just use one or many keyword(s)."/>
        <meta name="robot" content="noindex, nofollow"/>
        <meta name="author" content="Jacob Graham"/>
        <meta name="copyright" content="Jacob Graham"/>
        <script src="../../../public/javascript/idleTimer.js" defer></script>
<!-- Open Graph meta tags are for ads on social media sites. These tags control how URLs are displayed when shared on a social media platform. When you at first
 share your social media platform on a site like Facebook, it will by default only be a URL sitting there on the page. To 'style' this link, we must
 add Open Graph meta tags. -->
<!-- In descending order: og:title - Displays the title of your URL site when displayed on a social media platform.
    og:url - Use the samme as the canonical URL. This helps consolidate all connected data, such as likes, across all duplicate URLs posted.
    og:image - Arguably the most essential Open Graph tag because images bring in the most traffic.
    og:type - Type of content you are sharing (article, website, etc.).
    og:description - Brief description of your content. This in conjunction with the og:title makes your website more appealing.
    og:locale - Defines the language of your website content -->
        <meta property="og:title" content="All you need to job search successfully"/>
        <meta property="og:url" content=""/>
        <meta property="og:image" content=""/>
        <meta property="og:type" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:locale" content="en_US"/>
    </head>

    <body id="website_body">
        <header id="website_body_header">
            <?php require 'navbar.php'?>
        </header>


</html>
