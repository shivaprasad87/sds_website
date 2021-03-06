<!DOCTYPE html>
<html lang=en-US>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset=UTF-8>
<meta itemprop="name" content="<?=$blog->meta_title;?>">
<meta itemprop="description" content="<?=$blog->meta_desc;?>">
<meta itemprop="image" content="<?=base_url();?>assets/img/og_tag_twitter.png">
<meta name=viewport content="width=device-width, initial-scale=1">
<title><?=$blog->meta_title;?></title>
<meta name="keywords" content="<?=$blog->meta_keywords;?>">
<meta name="description" content="<?=$blog->meta_desc;?>">

<!----------OG Tags Start-------------------->
<meta property="og:title" content="<?=$blog->meta_title;?>">
<meta property="og:url" content="<?=current_url();?>">
<meta property="og:description" content="<?=$blog->meta_desc;?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?= base_url('uploads/blog_images/'.$blog->image)?>">
<meta property="og:image:width" content="100%" /> 
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@SDS_Tweets">
<meta name="twitter:title" content="<?=$blog->meta_title;?>">
<meta name="twitter:description" content="<?=$blog->meta_desc;?>">  
    
<!-------------Og Tags End --------------------->
<meta property=og:site_name content="Seconds Digital Solutions Pvt Ltd">
<link rel=icon href=<?=base_url();?>assets/wp-content/uploads/2019/06/favicon.png sizes=32x32>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link type=text/css media=all href=<?=base_url()?>assets/wp-content/cache/autoptimize/css/font.css rel=stylesheet >
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/wp-content/cache/autoptimize/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/wp-content/cache/autoptimize/css/slick-theme.css">
<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-grid.min.css">
<link type=text/css media=all href=<?=base_url()?>assets/wp-content/cache/autoptimize/css/header.css rel=stylesheet>
<link type=text/css media=all href=<?=base_url()?>assets/wp-content/cache/autoptimize/css/common.css rel=stylesheet>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  -->
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?=base_url()?>assets/wp-content/cache/autoptimize/js/slick.js" type="text/javascript" charset="utf-8"></script> 
<script src="<?=base_url()?>assets/wp-content/cache/autoptimize/js/slick.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="<?=base_url()?>assets/jssor/jssor.js" type="text/javascript"></script>
<script src='<?=base_url();?>assets/wp-includes/js/jquery/common.js'></script> 
<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:500,d:1000,x:0,e:{x:6}}],
              [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,rX:20,rY:90},{b:0,d:4000,rX:0,e:{rX:1}}],
              [{b:-1,d:1,rY:-20},{b:0,d:4000,rY:-90,e:{rY:7}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:3000,sX:1,sY:1,e:{sX:1,sY:1}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:5000,sX:1,sY:1,e:{sX:3,sY:3}}],
              [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:3500,d:3500,tZ:0,e:{tZ:1}}],
              [{b:-1,d:1,x:20,p:{x:{o:33,r:0.5}}},{b:0,d:1000,x:0,o:0.5,e:{x:3,o:1},p:{x:{dl:0.05,o:33},o:{dl:0.02,o:68,rd:2}}},{b:1000,d:1000,o:1,e:{o:1},p:{o:{dl:0.05,o:68,rd:2}}}],
              [{b:-1,d:1,da:[0,700]},{b:0,d:600,da:[700,700],e:{da:1}}],
              [{b:600,d:1000,o:0.4}],
              [{b:-1,d:1,da:[0,400]},{b:200,d:600,da:[400,400],e:{da:1}}],
              [{b:800,d:1000,o:0.4}],
              [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
              [{b:0,d:1000,o:1,p:{o:{o:4}}}],
              [{b:1000,d:1000,o:1,p:{o:{o:4}}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 16,
                $SpacingY: 16
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 2000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
<script defer src="<?=base_url()?>assets/wp-content/cache/autoptimize/js/analyst.js"></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Seconds Digital Solutions - Digital Marketing and IT Services In Bangalore",
  "image": "<?=base_url();?>assets/img/og_tag_twitter.png",
  "url": "<?=current_url();?>",
  "telephone": "7483907745",
  "priceRange": "Call Us @ 7483907745",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "First Floor, Sigma Trident Building, Hayes Road, Off, Richmond Rd",
    "addressLocality": "Bangalore",
    "postalCode": "560025",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 12.965799,
    "longitude": 77.601564
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday" ,
      "Saturday"
    ],
    "opens": "10:00",
    "closes": "18:30"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "WebSite",
  "name": "Seconds Digital Solutions - Digital Marketing and IT Services In Bangalore",
  "url": "<?=current_url();?>",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "{search_term_string}",
    "query-input": "required name=search_term_string"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Seconds Digital Solutions - Digital Marketing and IT Services In Bangalore",
  "url": "<?=current_url();?>",
  "logo": "<?=base_url();?>assets/img/og_tag_twitter.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "7483907745",
    "contactType": "customer service",
    "contactOption": "TollFree",
    "areaServed": "IN",
    "availableLanguage": ["en","Hindi"]
  },
  "sameAs": [
    "https://www.facebook.com/SecondsDigitalSolutions",
    "https://twitter.com/SDS_Tweets",
    "https://www.instagram.com/secondsdigitalsolutions/",
    "https://www.youtube.com/channel/UCORxFvtnX8RIIYcPtyGhuEw?view_as=subscriber",
    "https://www.linkedin.com/company/secondsdigitalsolutions/",
    "https://in.pinterest.com/secondsdigitalsolutions/",
    "<?=base_url();?>"
  ]
}
</script>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NewsArticle",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "<?=current_url();?>"
      },
      "headline": "<p><strong><?=$blog->meta_title;?></strong></p>",
      "image": "<?= base_url('uploads/blog_images/'.$blog->image)?>",
      "datePublished": "<?=$blog->date_added?>",
      "dateModified": "<?=$blog->date_added?>",
      "author": {
        "@type": "Person",
        "name": "<?=$blog->author?>"
      },
       "publisher": {
        "@type": "Organization",
        "name": "Seconds Digital Solutions",
        "logo": {
          "@type": "ImageObject",
          "url": "<?=base_url();?>assets/img/og_tag_twitter.png"
        }
      }
    }
    </script>
</head>
