<?php
    session_start();

    if(isset($_GET['page'])){
        $page2 = $_GET['page'];
    }
    else{
        $page2 = '';
        header('location: index.php?page=otros/hola.php');
    }
        
?> 
<link rel="stylesheet" href="./public/bootstrap-5.3/css/bootstrap.min.css">
<html data-wf-domain="www.sofiasalud.com" data-wf-page="657ae95ba61c7d8b3035dbcc" data-wf-site="630e3b76fb8990e10c16240e" lang="es" class=" w-mod-js w-mod-ix"><head><style>.wf-force-outline-none[tabindex="-1"]:focus{outline:none;}</style><meta charset="utf-8"><title>AMC | Seguros médicos para empresas, individuos y familias</title><meta content="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ea7f67789b432c4a720c6_hero-image-2x.png" property="og:image"><meta content="Sofía | Seguros médicos para empresas, individuos y familias" property="twitter:title"><meta content="Somos el seguro de salud más completo para tus empleados, tu familia y para ti. Conoce nuestros planes, cotiza 100% en línea y contrata de inmediato." property="twitter:description"><meta content="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ea7f67789b432c4a720c6_hero-image-2x.png" property="twitter:image"><meta property="og:type" content="website"><meta content="summary_large_image" name="twitter:card"><meta content="width=device-width, initial-scale=1" name="viewport"><link href="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/css/sofia-2022.09af8bc2e.min.css" rel="stylesheet" type="text/css"><script type="text/javascript" async="" src="https://widget.intercom.io/widget/h7vztttb"></script>
<script type="text/javascript" src="https://js-eu1.hsforms.net/forms/v2.js" async="" status="loaded"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/gtm/js?id=OPT-T2L4JH4&amp;cid=2047011560.1732556627"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/linkid.js"></script>
<script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/static/identify_45dd5971.js"></script>
<script src="https://connect.facebook.net/signals/config/735142943630294?v=2.9.176&amp;r=stable&amp;domain=www.sofiasalud.com&amp;hme=872f04a0547459b3285cb03b0d7a47bfde40628f4b386809918a621e2688602f&amp;ex_m=70%2C121%2C107%2C111%2C61%2C4%2C100%2C69%2C16%2C97%2C89%2C51%2C54%2C172%2C175%2C187%2C183%2C184%2C186%2C29%2C101%2C53%2C77%2C185%2C167%2C170%2C180%2C181%2C188%2C131%2C41%2C189%2C190%2C34%2C143%2C15%2C50%2C195%2C194%2C133%2C18%2C40%2C1%2C43%2C65%2C66%2C67%2C71%2C93%2C17%2C14%2C96%2C92%2C91%2C108%2C52%2C110%2C39%2C109%2C30%2C94%2C26%2C168%2C171%2C140%2C86%2C56%2C84%2C33%2C73%2C0%2C95%2C32%2C28%2C82%2C83%2C88%2C47%2C46%2C87%2C37%2C11%2C12%2C13%2C6%2C7%2C25%2C22%2C23%2C57%2C62%2C64%2C75%2C102%2C27%2C76%2C9%2C8%2C80%2C48%2C21%2C104%2C103%2C105%2C98%2C10%2C20%2C3%2C38%2C74%2C19%2C5%2C90%2C81%2C44%2C35%2C85%2C2%2C36%2C63%2C42%2C106%2C45%2C79%2C68%2C112%2C60%2C59%2C31%2C99%2C58%2C55%2C49%2C78%2C72%2C24%2C113%2C134%2C163%2C196%2C198%2C122%2C157%2C145%2C158%2C225%2C226%2C224%2C179%2C138%2C151%2C129%2C233%2C116%2C197%2C126%2C127%2C146%2C173%2C159%2C118%2C234%2C165%2C119%2C236%2C166%2C136%2C123%2C154%2C148%2C193%2C114%2C128" async=""></script>
<script type="text/javascript" async="" src="https://connect.facebook.net/en_US/fbevents.js"></script>
<script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
<script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=AW-653723818"></script>
<script type="text/javascript" src="https://cdn.segment.com/next-integrations/integrations/vendor/commons.a61d7bea37d2de5d4b69.js.gz" async="" status="loaded"></script><script type="text/javascript" src="https://www.googletagmanager.com/gtag/js?id=G-5YGYDVLT4C" async="" status="loaded"></script>
<script type="text/javascript" src="https://js-eu1.hs-scripts.com/6161658.js" async="" status="loaded"></script><script type="text/javascript" src="https://cdn.segment.com/next-integrations/integrations/facebook-pixel/2.11.5/facebook-pixel.dynamic.js.gz" async="" status="loaded"></script>
<script type="text/javascript" src="https://cdn.segment.com/next-integrations/integrations/google-analytics/2.18.5/google-analytics.dynamic.js.gz" async="" status="loaded"></script>
<script type="text/javascript" src="https://cdn.segment.com/next-integrations/integrations/google-adwords-new/1.3.0/google-adwords-new.dynamic.js.gz" async="" status="loaded"></script>
<script async="" src="https://www.clarity.ms/s/0.7.56/clarity.js"></script>
<script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/static/main.MWQ3ODVjY2ZhMQ.js" data-id="C9G4RDJC77U9N0P9KSCG"></script>
<script src="https://js.hs-analytics.net/analytics/1732556400000/6161658.js" type="text/javascript" id="hs-analytics"></script><script src="https://js.hsadspixel.net/fb.js" type="text/javascript" id="hs-ads-pixel-6161658" data-ads-portal-id="6161658" data-ads-env="prod" data-loader="hs-scriptloader" data-hsjs-portal="6161658" data-hsjs-env="prod" data-hsjs-hublet="na1"></script><script src="https://js.hubspot.com/web-interactives-embed.js" type="text/javascript" id="hubspot-web-interactives-loader" crossorigin="anonymous" data-loader="hs-scriptloader" data-hsjs-portal="6161658" data-hsjs-env="prod" data-hsjs-hublet="na1"></script><script src="https://js.hs-banner.com/v2/6161658/banner.js" type="text/javascript" id="cookieBanner-6161658" data-cookieconsent="ignore" data-hs-ignore="true" data-loader="hs-scriptloader" data-hsjs-portal="6161658" data-hsjs-env="prod" data-hsjs-hublet="na1"></script><script async="" src="https://www.clarity.ms/tag/uet/343055874"></script><script type="text/javascript" src="https://cdn.segment.com/next-integrations/actions/google-analytics-4-web/51855e573177634029a6.js" async="" status="loaded"></script><script type="text/javascript" src="https://cdn.segment.com/next-integrations/actions/hubspot-web/3b2b80f085bd9477d585.js" async="" status="loaded"></script><script async="" src="https://static.ads-twitter.com/uwt.js"></script><script type="text/javascript" async="" src="https://analytics.tiktok.com/i18n/pixel/events.js?sdkid=C9G4RDJC77U9N0P9KSCG&amp;lib=ttq"></script><script src="https://connect.facebook.net/signals/config/297245637938639?v=2.9.176&amp;r=stable&amp;domain=www.sofiasalud.com&amp;hme=872f04a0547459b3285cb03b0d7a47bfde40628f4b386809918a621e2688602f&amp;ex_m=70%2C121%2C107%2C111%2C61%2C4%2C100%2C69%2C16%2C97%2C89%2C51%2C54%2C172%2C175%2C187%2C183%2C184%2C186%2C29%2C101%2C53%2C77%2C185%2C167%2C170%2C180%2C181%2C188%2C131%2C41%2C189%2C190%2C34%2C143%2C15%2C50%2C195%2C194%2C133%2C18%2C40%2C1%2C43%2C65%2C66%2C67%2C71%2C93%2C17%2C14%2C96%2C92%2C91%2C108%2C52%2C110%2C39%2C109%2C30%2C94%2C26%2C168%2C171%2C140%2C86%2C56%2C84%2C33%2C73%2C0%2C95%2C32%2C28%2C82%2C83%2C88%2C47%2C46%2C87%2C37%2C11%2C12%2C13%2C6%2C7%2C25%2C22%2C23%2C57%2C62%2C64%2C75%2C102%2C27%2C76%2C9%2C8%2C80%2C48%2C21%2C104%2C103%2C105%2C98%2C10%2C20%2C3%2C38%2C74%2C19%2C5%2C90%2C81%2C44%2C35%2C85%2C2%2C36%2C63%2C42%2C106%2C45%2C79%2C68%2C112%2C60%2C59%2C31%2C99%2C58%2C55%2C49%2C78%2C72%2C24%2C113" async=""></script><script async="" src="https://connect.facebook.net/en_US/fbevents.js"></script><script type="text/javascript" async="" src="https://api.retargetly.com/loader?id=1377" id="rely-api-0"></script><script type="text/javascript" async="" src="https://bat.bing.com/bat.js"></script><script type="text/javascript" async="" src="https://s.adroll.com/j/roundtrip.js"></script><script type="text/javascript" async="" src="https://snap.licdn.com/li.lms-analytics/insight.min.js"></script><script type="text/javascript" async="" src="https://static.hotjar.com/c/hotjar-1932915.js?sv=7"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/destination?id=AW-653723818&amp;l=dataLayer&amp;cx=c&amp;gtm=45He4bk0v830399968za200"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-5YGYDVLT4C&amp;l=dataLayer&amp;cx=c&amp;gtm=45He4bk0v830399968za200"></script><script type="text/javascript" async="" src="https://cdn.segment.com/analytics.js/v1/Y8bUbBMcgxlDoq64qgSaZpM7jsah1r1g/analytics.min.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-M63TVV6"></script><script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script><link href="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/6340893a8c1d699be3f244ad_Sabi_32x32.png" rel="shortcut icon" type="image/x-icon"><link href="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/6340894933cc7017c266f81a_Sabi_256x256.png" rel="apple-touch-icon"><!-- anti-flicker snippet (recommended)  -->
<style>.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-M63TVV6':true});</script>
<!-- End anti-flicker snippet (recommended)  -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M63TVV6');</script>
<!-- End Google Tag Manager -->

<!-- Segment -->
<script>
  !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on","addSourceMiddleware","addIntegrationMiddleware","setAnonymousId","addDestinationMiddleware"];analytics.factory=function(e){return function(){var t=Array.prototype.slice.call(arguments);t.unshift(e);analytics.push(t);return analytics}};for(var e=0;e<analytics.methods.length;e++){var key=analytics.methods[e];analytics[key]=analytics.factory(key)}analytics.load=function(key,e){var t=document.createElement("script");t.type="text/javascript";t.async=!0;t.src="https://cdn.segment.com/analytics.js/v1/" + key + "/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(t,n);analytics._loadOptions=e};analytics._writeKey="Y8bUbBMcgxlDoq64qgSaZpM7jsah1r1g";analytics.SNIPPET_VERSION="4.13.2";
  analytics.load("Y8bUbBMcgxlDoq64qgSaZpM7jsah1r1g");
  analytics.page();
  }}();
</script>
<!-- End of Segment --><!-- Renaming -->

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "name": "Sofía",
    "alternateName": ["Sofía"],
    "url": "https://www.sofiasalud.com/"
  }
</script>

<!-- CMS Filter -->
<script async="" src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsfilter@1/cmsfilter.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.2.2/dist/css/splide-core.min.css">
<style>
.splide__track {
  overflow: visible;
}
</style>

<!-- Disable scrolling -->
<script defer="" src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-scrolldisable@1/scrolldisable.js"></script>

<!-- CMS Nest -->
<script async="" src="https://cdn.jsdelivr.net/npm/@finsweet/attributes-cmsnest@1/cmsnest.js"></script>

<style>
::selection {color: #323C61; background: #EDE9F7;}
</style><link rel="stylesheet" href="https://embed.typeform.com/next/css/popup.css"><script fetchpriority="high" src="https://dev.visualwebsiteoptimizer.com/j.php?a=778819&amp;u=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;vn=2" type="text/javascript"></script><script src="https://bat.bing.com/p/action/343055874.js" type="text/javascript" async="" data-ueto="ueto_bc301dbcb1"></script><script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/653723818/?random=1732556627195&amp;cv=11&amp;fst=1732556627195&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4bk0v9115759493z8830399968za201zb830399968&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101925629~102067555~102067808~102077855~102081485&amp;u_w=1600&amp;u_h=900&amp;url=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Sof%C3%ADa%20%7C%20Seguros%20m%C3%A9dicos%20para%20empresas%2C%20individuos%20y%20familias&amp;npa=0&amp;pscdl=noapi&amp;auid=955754039.1732556627&amp;uaa=x86&amp;uab=64&amp;uafvl=Not_A%2520Brand%3B99.0.0.0%7CGoogle%2520Chrome%3B109.0.5414.168%7CChromium%3B109.0.5414.168&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=0.3.0&amp;uaw=0&amp;fdr=QA&amp;rfmt=3&amp;fmt=4"></script><script async="" src="https://script.hotjar.com/modules.86621fa4aeada5bcf025.js" charset="utf-8"></script><meta http-equiv="origin-trial" content="A41wt2Lsq30A9Ox/WehogvJckPI4aY9RoSxhb8FMtVnqaUle1AtI6Yf7Wk+7+Wm0AfDDOkMX+Wn6wnDpBWYgWwYAAAB8eyJvcmlnaW4iOiJodHRwczovL2Fkcm9sbC5jb206NDQzIiwiZmVhdHVyZSI6IkludGVyZXN0Q29ob3J0QVBJIiwiZXhwaXJ5IjoxNjI2MjIwNzk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><script type="text/javascript" src="https://s.adroll.com/j/pre/JYFO3MUOR5HGBMZI4QOERT/SQKFEUOJI5GQZJU4WZ6O7L/fpconsent.js"></script><script type="text/javascript" src="https://s.adroll.com/j/pre/JYFO3MUOR5HGBMZI4QOERT/SQKFEUOJI5GQZJU4WZ6O7L/index.js"></script><script type="text/javascript" src="https://d.adroll.com/consent/check/JYFO3MUOR5HGBMZI4QOERT?pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;_s=4a8927e7ff625c441399b889a549c0a8&amp;_b=2"></script><style id="_goober"> .go2933276541{position:fixed;display:block;width:100%;height:0px;margin:0px;padding:0px;overflow:visible;transform-style:preserve-3d;background:transparent;backface-visibility:hidden;pointer-events:none;left:0px;z-index:9998;}.go2369186930{top:0px;z-index:9999;height:100%;width:100%;}.go1348078617{bottom:0px;}.go2417249464{position:fixed;z-index:9989;}.go3921366393{left:0;bottom:0;}.go3967842156{right:0;bottom:0;}.go613305155{left:0;top:0;}.go471583506{right:0;top:0;}.go3670563033{position:relative;overflow:hidden;display:none;}.go1041095097{display:block;}.go1632949049{position:absolute;pointer-events:none;width:101vw;height:101vh;background:rgba(0,0,0,0.7);opacity:0;z-index:-1;}.go2512015367{z-index:99998;opacity:0.8;visibility:visible;pointer-events:all;cursor:pointer;}.go1432718904{overflow:hidden;}.go812842568{display:block !important;position:static !important;box-sizing:border-box !important;background:transparent !important;border:none;min-height:0px !important;max-height:none !important;margin:0px;padding:0px !important;height:100% !important;width:1px !important;max-width:100% !important;min-width:100% !important;}.go4194603687{z-index:99999;visibility:hidden;position:absolute;inset:50vh auto auto 50%;transform:translate(-50%,-50%);left:50%;top:150%;pointer-events:none;max-height:95%;max-width:95%;}.go4258295619{pointer-events:auto !important;visibility:visible;top:50%;transition:top 0.75s linear(0,0.006,0.023 2.2%,0.096 4.8%,0.532 15.4%,0.72 21%,0.793,0.853 26.7%,0.902,0.941,0.968 36.2%,0.987 39.7%,1 43.7%,1.007 48.3%,1.009 55.3%,1.002 78.2%,1 );}.go456419034{transition:opacity 0.3s ease-in;}.go3128134379{pointer-events:auto !important;visibility:visible !important;max-height:95vh !important;transition:max-height 1s ease-in;}.go494047706{z-index:9999;width:100%;max-height:95%;position:fixed;visibility:hidden;}.go2481764524{z-index:9999;width:100%;max-height:95%;position:fixed;visibility:hidden;bottom:0px;}.go2685733372{visibility:hidden;}.go2985984737{visibility:visible !important;}.go3281949485{pointer-events:auto !important;visibility:visible !important;max-height:95vh !important;transform:none !important;}.go3508454897{z-index:9999;width:100%;max-height:95%;position:fixed;visibility:hidden;transition:transform 1s linear(0,0.006,0.022 2.3%,0.091 5.1%,0.18 7.6%,0.508 16.3%,0.607,0.691,0.762,0.822 28.4%,0.872,0.912 35.1%,0.944 38.9%,0.968 43%,0.985 47.6%,0.996 53.1%,1.001 58.4%,1.003 65.1%,1 );}.go988075951{z-index:9999;position:fixed;left:10px;top:10px;max-height:95vh !important;max-width:95%;visibility:hidden;}.go2699082514{z-index:9999;position:fixed;right:10px;top:10px;max-height:95vh !important;max-width:95%;visibility:hidden;}.go1595992025{z-index:9999;position:fixed;left:10px;bottom:10px;max-height:95vh !important;max-width:95%;visibility:hidden;}.go1222083472{z-index:9999;position:fixed;right:10px;bottom:10px;max-height:95vh !important;max-width:95%;visibility:hidden;}.go722322694{transition:none !important;}.go26732895{cursor:pointer;}.go2083580917{display:flex;justify-content:center;align-items:center;}</style><script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/653723818/?random=1732556627770&amp;cv=11&amp;fst=1732556627770&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4bk0v9115759493za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101925629~102067555~102067808~102077855~102081485&amp;u_w=1600&amp;u_h=900&amp;url=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Sof%C3%ADa%20%7C%20Seguros%20m%C3%A9dicos%20para%20empresas%2C%20individuos%20y%20familias&amp;npa=0&amp;pscdl=noapi&amp;auid=955754039.1732556627&amp;uaa=x86&amp;uab=64&amp;uafvl=Not_A%2520Brand%3B99.0.0.0%7CGoogle%2520Chrome%3B109.0.5414.168%7CChromium%3B109.0.5414.168&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=0.3.0&amp;uaw=0&amp;fdr=QA&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4"></script><script async="true" type="text/javascript" src="https://d.adroll.com/pixel/JYFO3MUOR5HGBMZI4QOERT/SQKFEUOJI5GQZJU4WZ6O7L?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;cookie=&amp;adroll_s_ref=https%3A//www.google.com/&amp;keyw=&amp;p0=1857"></script><div style="width: 1px; height: 1px; display: inline; position: absolute;"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/b/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/experian/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/g/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/index/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/l/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/n/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/o/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/outbrain/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/pubmatic/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/r/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/taboola/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/triplelift/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"><img height="1" width="1" style="border-style:none;" alt="" src="https://d.adroll.com/cm/x/out?adroll_fpc=6197e82588b08d4ee75609c380ce92be-1732556627803&amp;pv=97832105163.60959&amp;arrfrr=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;advertisable=JYFO3MUOR5HGBMZI4QOERT"></div><script type="text/javascript" src="//s.adroll.com/j/sendrolling.js"></script><div style="width: 1px; height: 1px; display: inline; position: absolute;"></div><script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-653723818"></script><script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/653723818/?random=1732556627974&amp;cv=11&amp;fst=1732556627974&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be4bk0v9115759493za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=101925629~102067555~102067808~102077855~102081485&amp;u_w=1600&amp;u_h=900&amp;url=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Sof%C3%ADa%20%7C%20Seguros%20m%C3%A9dicos%20para%20empresas%2C%20individuos%20y%20familias&amp;did=dZTQ1Zm&amp;gdid=dZTQ1Zm&amp;npa=0&amp;pscdl=noapi&amp;auid=955754039.1732556627&amp;uaa=x86&amp;uab=64&amp;uafvl=Not_A%2520Brand%3B99.0.0.0%7CGoogle%2520Chrome%3B109.0.5414.168%7CChromium%3B109.0.5414.168&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=0.3.0&amp;uaw=0&amp;fdr=QA&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4"></script></head>

<body class="body"><div id="hs-web-interactives-top-push-anchor" class="go3670563033"></div>
<div class="page-wrapper">
<div class="new-nav_sticky-wrap">
<div data-animation="default" class="new-nav w-nav" data-easing2="ease" data-easing="ease" data-collapse="medium" data-w-id="5d34d61a-8281-1b2c-9951-7d205267b6e9" role="banner" data-duration="400" data-doc-height="1">
<div class="padding-global">
<div class="container-large">
<div class="new-nav_padding-section">
<div class="new-nav_component"><a href=" ./" aria-current="page" class="new-nav_brand w-nav-brand w--current" aria-label="home"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/637d095157d015b73a5e4271_Sofia_Logo.png" loading="lazy" alt="" class="new-nav_brand-logo"></a>
<div class="new-nav_links-wrap">
<div class="new-nav_dropdown_upper-shadow show-tablet"></div>
<br>
<header>
            <nav style="display: inline;"> <!--begin::Sidebar Menu-->
                    <ul>
                        <li style="display: inline; margin-right: 20px;">Iniciar sesion como</li>
                        <li style="display: inline; margin-right: 20px;"><a href="index.php?page=admin/admin.php">Administrador</a></li>
                        <li style="display: inline; margin-right: 20px;"><a href="index.php?page=doctor/doctor.php">Doctor</a></li>
                        <li style="display: inline; margin-right: 20px;"><a href="index.php?page=paciente/paciente.php">Paciente</a></li>
                    </ul> <!--end::Sidebar Menu-->
                </nav>
</header>


</div></div></div></div>



<br></h1></div></div></div></div>
</div></div></div></div>
<div class="contenedor" style=" display: flex;">
<!-- Inicio -->

<?php 
                    include_once($page2);
                    ?> 

</div><br><br><br><br>
<div class="section_home-social"><div class="text-container-social"><div class="paragraph medium no-mobile">Empresas que ya <br>usan nuestro seguro</div><div class="paragraph medium mobile-centrado no-desktop">Empresas que ya usan nuestro seguro</div></div><div data-w-id="4e124551-fc2c-461a-a875-cf4103ab9239" class="container-home-loop"><div class="text-buen-fin no-space" style="transform: translate3d(-540.666px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d; will-change: transform;"><div class="div-block-37"><div class="container-loop w-container"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce5f4321d770f224823fb_Logo_Fintual%20bn%201%202.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce5f4722f7ce55d12e802_Logo%20Enlight_BN%201%201.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce67a1d03208622b6750a_empresa-1%201.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce6916af7f915b8e0f67a_buk_logo_BN%201%201.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce5f47fcdc98e72373b43_UnDosTres%20BN%201%201.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce5f4b4f9def31a7c1e3f_Mesa%20de%20trabajo%201.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce5f6161daabd6b2ed985_Mesa%20de%20trabajo%201%20copia%202.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce5f44e7b1ba97d326536_Mesa%20de%20trabajo%201%20copia%203.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce5f4f192ba0543f749bd_Mesa%20de%20trabajo%201%20copia.svg" loading="lazy" alt="" class="logo-empresas"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652ce5f4786e6d0317ba834c_Mesa%20de%20trabajo%201%20copia%204.svg" loading="lazy" alt="" class="logo-empresas"></div></div></div></div></div><div class="section_content-coverage"><div class="padding-global-s"><div class="container-large"><div class="text-align-center"><div class="desktop"><h1 class="h3">Todo para cuidar la salud de<br></h1><div class="div-block-339"><h1 class="h3 space-left">tu equipo en un<br></h1><h1 class="h3 text-highlight-highlightscolorsterceary300">mismo seguro</h1></div></div>

<div class="padding-global-s"><div class="container-large"><div class="text-align-center"><h1 class="h3">Somos una aseguradora 100% mexicana</h1><h1 class="sub-1">Instituciones que nos supervisan y regulan:</h1><div class="space-40"></div></div><div class="margin-bottom"><div class="image-align-center"><div class="home-3col_component logos"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652849cba481cc507d61bf83_Logo_CNSF.svg" loading="lazy" alt="" class="lp-business-inst_img"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652849cb6d9b773b7c3941a9_Logo_Secretaria%20Salud.svg" loading="lazy" alt="" class="image-209"><img src="https://cdn.prod.website-files.com/630e3b76fb8990e10c16240e/652849cb4e53e656fb678273_Logo_Condusef.svg" loading="lazy" alt="" class="image-210"></div></div></div></div></div></div><div class="seccion-banner-end"><div class="background-highlight-terceary-300-copy corners-20"><div class="banner-container-end-home">
</script><script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.2.2/dist/js/splide.min.js"></script>
<script>

function slider1() {

let splides = $('.splide--team');
for ( let i = 0, splideLength = splides.length; i < splideLength; i++ ) {
	new Splide( splides[ i ], {
  // Desktop on down
	perPage: 4,
	perMove: 1,
  focus: 'center', // 0 = left and 'center' = center
  type: 'loop', // 'loop' or 'slide'
  gap: '4.6875em', // space between slides
  arrows: 'slider', // 'slider' or false
  pagination: 'false', // 'slider' or false
  speed : 1500, // transition speed in miliseconds
  dragAngleThreshold: 30, // default is 30
  autoWidth: false, // for cards with differing widths
  rewind : false, // go back to beginning when reach end
  rewindSpeed : 400,
  waitForTransition : false,
  updateOnMove : true,
  trimSpace: false, // true removes empty space from end of list
  breakpoints: {
		991: {
    	// Tablet
      perPage: 4,
		},
    767: {
    	// Mobile Landscape
      perPage: 3,
		},
    479: {
    	// Mobile Portrait
      perPage: 2,
		}
	}
} ).mount();
}

}
slider1();

</script>

<script>

function slider1() {

let splides = $('.splide--founders');
for ( let i = 0, splideLength = splides.length; i < splideLength; i++ ) {
	new Splide( splides[ i ], {
  // Desktop on down
	perPage: 1,
	perMove: 1,
  focus: 'center', // 0 = left and 'center' = center
  type: 'loop', // 'loop' or 'slide'
  gap: '4.6875em', // space between slides
  arrows: 'slider', // 'slider' or false
  pagination: 'false', // 'slider' or false
  speed : 1500, // transition speed in miliseconds
  dragAngleThreshold: 30, // default is 30
  autoWidth: false, // for cards with differing widths
  rewind : false, // go back to beginning when reach end
  rewindSpeed : 400,
  waitForTransition : false,
  updateOnMove : true,
  trimSpace: false, // true removes empty space from end of list
  breakpoints: {
		991: {
    	// Tablet
		},
    767: {
    	// Mobile Landscape
		},
    479: {
    	// Mobile Portrait
		}
	}
} ).mount();
}
</script>

<script>
        	const queryString = window.location.search;
          if (queryString !== '') {
          	localStorage.setItem('urlParams', queryString);
          } else {
          	localStorage.setItem('urlParams', '');
          }
          let urlParamsStored = localStorage.getItem("urlParams");
          if (urlParamsStored) {
          	var b2cLink = document.getElementById("b2cLink");
            var b2bLink = document.getElementById("b2bLink");
            var b2cnavBarLink = document.getElementById("b2cnavBarLink");
            var b2bnavBarLink = document.getElementById("b2bnavBarLink");
            b2cLink.href += urlParamsStored;
            b2bLink.href += urlParamsStored;
            b2cnavBarLink.href += urlParamsStored;
            b2bnavBarLink.href += urlParamsStored;
          }
</script>

<script type="text/javascript" id="" charset="">var _rl_cn=_rl_cn||0,_rl_ptc="https:"==window.location.protocol?"https":"http";window._rl_ids=window._rl_ids||[];window._rely=window._rely||[];_rl_ids.push({pid:1377,src:0});_rely.send=_rely.send?_rely.send:function(){};(function(){var a=document.createElement("script");a.type="text/javascript";a.async=!0;a.src=_rl_ptc+"://api.retargetly.com/loader?id\x3d"+_rl_ids[_rl_ids.length-1].pid;a.id="rely-api-"+_rl_cn++;var b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(a,b)})();</script>

<script type="text/javascript" id="" charset="">function getParam(a){return(a=RegExp("[?\x26]"+a+"\x3d([^\x26]*)").exec(window.location.search))&&decodeURIComponent(a[1].replace(/\+/g," "))}function getExpiryRecord(a){var b=7776E6;b=(new Date).getTime()+b;return{value:a,expiryDate:b}}
function addGclid(){var a=getParam("gclid"),b=["gclid_field","foobar"],d=null,e,c=getParam("gclsrc");c=!c||-1!==c.indexOf("aw");b.forEach(function(f){document.getElementById(f)&&(e=document.getElementById(f))});a&&c&&(d=getExpiryRecord(a),localStorage.setItem("gclid",JSON.stringify(d)));b=(a=d||JSON.parse(localStorage.getItem("gclid")))&&(new Date).getTime()<a.expiryDate;e&&b&&(e.value=a.value)}window.addEventListener("load",addGclid);</script>
<script type="text/javascript" id="" charset="">!function(b,e,f,g,a,c,d){b.fbq||(a=b.fbq=function(){a.callMethod?a.callMethod.apply(a,arguments):a.queue.push(arguments)},b._fbq||(b._fbq=a),a.push=a,a.loaded=!0,a.version="2.0",a.queue=[],c=e.createElement(f),c.async=!0,c.src=g,d=e.getElementsByTagName(f)[0],d.parentNode.insertBefore(c,d))}(window,document,"script","https://connect.facebook.net/en_US/fbevents.js");fbq("init",google_tag_manager["rm"]["30399968"](9));fbq("track","PageView");</script>
<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=297245637938639&amp;ev=PageView&amp;noscript=1"></noscript>


<script type="text/javascript" id="gtm-scroll-tracking" charset="">(function(h){function f(a){if(!(this instanceof f))return new f(a);a=a||{};var b=a.context||"body";"string"===typeof b&&(b=m.querySelector(b));if(!b)throw Error("Unable to find context "+b);this._context=b;this.minHeight=a.minHeight||0;this._marks={};this._tracked={};this._config={percentages:{each:{},every:{}},pixels:{each:{},every:{}},elements:{each:{},every:{}}};a=w(this._checkDepth.bind(this),500);b=this._update.bind(this);var c=w(b,500);h.addEventListener("scroll",a,!0);h.addEventListener("resize",
c);this._artifacts={timer:x(b),resize:c,scroll:a}}function u(a){return a.handlers.map(function(b){return b.bind(this,{data:{depth:a.depth,label:a.label}})})}function r(a){var b=Math.floor(a.numerator/a.n),c;for(c=1;c<=b;c++)a.callback(c*a.n)}function x(a){var b=v();return setInterval(function(){v()!==b&&(a(),b=v())},500)}function v(){var a=m.body,b=m.documentElement;return Math.max(a.scrollHeight,a.offsetHeight,b.clientHeight,b.scrollHeight,b.offsetHeight)}function y(a){a=a.getBoundingClientRect().top-
(a.scrollHeight-a.clientHeight)/2;var b=void 0!==h.pageYOffset?h.pageYOffset:(m.documentElement||m.body.parentNode||m.body).scrollTop;return a+b}function z(){}function w(a,b){var c,d,k,g=null,n=0,e=function(){n=new Date;g=null;k=a.apply(c,d)};return function(){var l=new Date;n||(n=l);var p=b-(l-n);c=this;d=arguments;0>=p?(clearTimeout(g),g=null,n=l,k=a.apply(c,d)):g||(g=setTimeout(e,p));return k}}function A(){var a={},b;for(b in f)a[b]=z;h.ScrollTracker=a}if(h.navigator.userAgent.match(/MSIE [678]/gi))return A();
var m=h.document;f.prototype.destroy=function(){clearInterval(this._artifacts._timer);h.removeEventListener("resize",this._artifacts.resize);h.removeEventListener("scroll",this._artifacts.scroll,!0)};f.prototype.on=function(a,b){var c=this._config;["percentages","pixels","elements"].forEach(function(d){a[d]&&["each","every"].forEach(function(k){a[d][k]&&a[d][k].forEach(function(g){c[d][k][g]=c[d][k][g]||[];c[d][k][g].push(b)})})});this._update()};f.prototype._update=function(){this._calculateMarks();
this._checkDepth()};f.prototype._calculateMarks=function(){function a(p,q){return function(t,B){t=t.getBoundingClientRect().top-n._context.getBoundingClientRect().top;g({label:p+"["+B+"]",depth:t,handlers:d.elements.every[p]})}}function b(p){return function(q){var t=Math.floor(q*k/100);g({label:String(q)+"%",depth:t,handlers:d.percentages.every[e]})}}function c(p){return function(q){g({label:String(q)+"px",depth:q,handlers:p})}}delete this._marks;this._fromTop=y(this._context);this._marks={};var d=
this._config,k=this._contextHeight(),g=this._addMark.bind(this),n=this,e;if(!(k<this.minHeight)){for(e in d.percentages.every)r({n:Number(e),numerator:100,callback:b(d.percentages.every[e])});for(e in d.pixels.every)r({n:Number(e),numerator:k,callback:c(d.pixels.every[e])});for(e in d.percentages.each){var l=Math.floor(k*Number(e)/100);g({label:e+"%",depth:l,handlers:d.percentages.each[e]})}for(e in d.pixels.each)l=Number(e),g({label:e+"px",depth:l,handlers:d.pixels.each[e]});for(e in d.elements.every)l=
[].slice.call(this._context.querySelectorAll(e)),l.length&&l.forEach(a(e,d.elements.every[e]));for(e in d.elements.each)if(l=this._context.querySelector(e))l=l.getBoundingClientRect().top-n._context.getBoundingClientRect().top,g({label:e,depth:l,handlers:d.elements.each[e]})}};f.prototype._checkDepth=function(){var a=this._marks,b=this._currentDepth(),c;for(c in a)b>=c&&!this._tracked[c]&&(a[c].forEach(function(d){d()}),this._tracked[c]=!0)};f.prototype.reset=function(){this._tracked={};this._marks=
{};this._update()};f.prototype._contextHeight=function(){return this._context!==m.body?this._context.scrollHeight-5:this._context.clientHeight-5};f.prototype._currentDepth=function(){var a=this._context;var b=a.offsetHeight;var c="CSS1Compat"===m.compatMode?m.documentElement:m.body;c=c.clientHeight;a=a.getBoundingClientRect();b=Math.max(0,0<a.top?Math.min(b,c-a.top):a.bottom<c?a.bottom:c);this._context.scrollTop?a=this._context.scrollTop+b:(this._context.scrollTop=1,this._context.scrollTop?(this._context.scrollTop=
0,a=this._context.scrollTop+b):a=(h.pageYOffset||m.documentElement.scrollTop||m.body.scrollTop||0)-this._fromTop);return b?a+b:a>=this._fromTop?a:-1};f.prototype._addMark=function(a){var b=a.depth;this._marks[b]=(this._marks[b]||[]).concat(u(a))};h.ScrollTracker=f})(this);
(function(h){function f(){var u=h.ScrollTracker();u.on({percentages:{each:[10,90],every:[25]}},function(r){dataLayer.push({event:"scrollTracking",attributes:{pixels:r.data.depth,distance:r.data.label,label:google_tag_manager["rm"]["30399968"](10)}})});delete h.ScrollTracker}"loading"!==document.readyState?f():document.addEventListener("DOMContentLoaded",f)})(window);</script><script type="text/javascript" id="" charset="">!function(d,g,e){d.TiktokAnalyticsObject=e;var a=d[e]=d[e]||[];a.methods="page track identify instances debug on off once ready alias group enableCookie disableCookie".split(" ");a.setAndDefer=function(b,c){b[c]=function(){b.push([c].concat(Array.prototype.slice.call(arguments,0)))}};for(d=0;d<a.methods.length;d++)a.setAndDefer(a,a.methods[d]);a.instance=function(b){b=a._i[b]||[];for(var c=0;c<a.methods.length;c++)a.setAndDefer(b,a.methods[c]);return b};a.load=function(b,c){var f="https://analytics.tiktok.com/i18n/pixel/events.js";
a._i=a._i||{};a._i[b]=[];a._i[b]._u=f;a._t=a._t||{};a._t[b]=+new Date;a._o=a._o||{};a._o[b]=c||{};c=document.createElement("script");c.type="text/javascript";c.async=!0;c.src=f+"?sdkid\x3d"+b+"\x26lib\x3d"+e;b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(c,b)};a.load("C9G4RDJC77U9N0P9KSCG");a.page()}(window,document,"ttq");</script>
<script type="text/javascript" id="" charset="">!function(d,e,f,a,b,c){d.twq||(a=d.twq=function(){a.exe?a.exe.apply(a,arguments):a.queue.push(arguments)},a.version="1.1",a.queue=[],b=e.createElement(f),b.async=!0,b.src="https://static.ads-twitter.com/uwt.js",c=e.getElementsByTagName(f)[0],c.parentNode.insertBefore(b,c))}(window,document,"script");twq("config","od5bm");</script>
<script type="text/javascript" id="" charset="">!function(){var a=window.analytics=window.analytics||[];if(!a.initialize)if(a.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{a.invoked=!0;a.methods="trackSubmit trackClick trackLink trackForm pageview identify reset group track ready alias debug page once off on addSourceMiddleware addIntegrationMiddleware setAnonymousId addDestinationMiddleware".split(" ");a.factory=function(b){return function(){var c=Array.prototype.slice.call(arguments);c.unshift(b);
a.push(c);return a}};for(var e=0;e<a.methods.length;e++){var f=a.methods[e];a[f]=a.factory(f)}a.load=function(b,c){var d=document.createElement("script");d.type="text/javascript";d.async=!0;d.src="https://cdn.segment.com/analytics.js/v1/"+b+"/analytics.min.js";b=document.getElementsByTagName("script")[0];b.parentNode.insertBefore(d,b);a._loadOptions=c};a._writeKey="Y8bUbBMcgxlDoq64qgSaZpM7jsah1r1g";a.SNIPPET_VERSION="4.15.3";a.load("Y8bUbBMcgxlDoq64qgSaZpM7jsah1r1g");a.page()}}();</script>
<script id="hs-script-loader" text="" charset="" type="text/javascript" src="//js.hs-scripts.com/6161658.js"></script>
<link rel="preconnect" href="https://dev.visualwebsiteoptimizer.com">
<script type="text/javascript" id="vwoCode" charset="">window._vwo_code||function(){var k=778819,n=2,q=2E3,r="body",t="opacity:0 !important;filter:alpha(opacity\x3d0) !important;background:none !important",l=!1,f=window,c=document,p=c.querySelector("#vwoCode"),g="_vwo_"+k+"_settings",e={};try{var m=JSON.parse(localStorage.getItem("_vwo_"+k+"_config"));e=m&&"object"===typeof m?m:{}}catch(a){}var h="session"===e.stT?f.sessionStorage:f.localStorage;code={use_existing_jquery:function(){return"undefined"!==typeof use_existing_jquery?use_existing_jquery:void 0},
library_tolerance:function(){return"undefined"!==typeof library_tolerance?library_tolerance:void 0},settings_tolerance:function(){return e.sT||q},hide_element_style:function(){return"{"+(e.hES||t)+"}"},hide_element:function(){return"string"===typeof e.hE?e.hE:r},getVersion:function(){return n},finish:function(){if(!l){l=!0;var a=c.getElementById("_vis_opt_path_hides");a&&a.parentNode.removeChild(a)}},finished:function(){return l},load:function(a){var d=this.getSettings(),b=c.createElement("script"),
u=this;if(d){if(b.textContent=d,c.getElementsByTagName("head")[0].appendChild(b),!f.VWO||VWO.caE)h.removeItem(g),u.load(a)}else b.fetchPriority="high",b.src=a,b.type="text/javascript",b.onerror=function(){_vwo_code.finish()},c.getElementsByTagName("head")[0].appendChild(b)},getSettings:function(){try{var a=h.getItem(g);if(a)if(a=JSON.parse(a),Date.now()>a.e)h.removeItem(g);else return a.s}catch(d){}},init:function(){if(!(-1<c.URL.indexOf("__vwo_disable__"))){var a=this.settings_tolerance();f._vwo_settings_timer=
setTimeout(function(){_vwo_code.finish();h.removeItem(g)},a);var d=c.currentScript;a=c.createElement("style");var b=this.hide_element();d=d&&!d.async&&b?b+this.hide_element_style():"";b=c.getElementsByTagName("head")[0];a.setAttribute("id","_vis_opt_path_hides");p&&a.setAttribute("nonce",p.nonce);a.setAttribute("type","text/css");a.styleSheet?a.styleSheet.cssText=d:a.appendChild(c.createTextNode(d));b.appendChild(a);this.load("https://dev.visualwebsiteoptimizer.com/j.php?a\x3d"+k+"\x26u\x3d"+encodeURIComponent(c.URL)+
"\x26vn\x3d"+n)}}};f._vwo_code=code;code.init()}();</script>
<iframe height="0" width="0" style="display: none; visibility: hidden;"></iframe><script type="text/javascript" id="" charset="">function updateDataTfHiddenForAll(e,f){e=document.querySelectorAll(e);e.forEach(function(g){var b=g.getAttribute("data-tf-hidden");b=b&&b.includes("utm_source\x3d")?b.replace(/utm_source=[^,]*/,"utm_source\x3d"+f):(b?b+",":"")+"utm_source\x3d"+f;g.setAttribute("data-tf-hidden",b);console.log("Updated data-tf-hidden for an element:",b)})}
(function(){function e(){var a=new URLSearchParams(window.location.search);return a.has("utm_source")||a.has("utm_medium")||a.has("utm_campaign")||a.has("utm_term")||a.has("utm_content")}function f(a,h,c){c=new Date;c.setHours(23,59,59,999);c="expires\x3d"+c.toUTCString();document.cookie=a+"\x3d"+h+";"+c+";path\x3d/"}function g(a){a+="\x3d";for(var h=document.cookie.split(";"),c=0;c<h.length;c++){for(var d=h[c];" "==d.charAt(0);)d=d.substring(1);if(0==d.indexOf(a))return d.substring(a.length,d.length)}return null}
if(e())return console.log("Hay par\u00e1metros UTM");var b=g("m8lSource"),l=document.referrer,k="direct";if(l){var m="google bing yahoo baidu duckduckgo yandex ask.com".split(" ");(m=m.some(function(a){return l.includes(a)}))&&(k="organic_search")}b||(f("m8lSource",k,1),b=k);updateDataTfHiddenForAll("[data-tf-hidden]",b)})();</script><div id="batBeacon641050747888" style="width: 0px; height: 0px; display: none; visibility: hidden;"><img id="batBeacon625519040128" width="0" height="0" alt="" src="https://bat.bing.com/action/0?ti=343055874&amp;tm=gtm002&amp;Ver=2&amp;mid=05deedec-7fd6-4819-9ffb-ec0833f255ad&amp;bo=1&amp;sid=d28f8110ab5411efbf0263ae351fe1dc&amp;vid=d28f9d70ab5411ef8f09330c52d0c032&amp;vids=1&amp;msclkid=N&amp;gtm_tag_source=1&amp;uach=pv%3D0.3.0&amp;pi=918639831&amp;lg=es-ES&amp;sw=1600&amp;sh=900&amp;sc=24&amp;tl=Sof%C3%ADa%20%7C%20Seguros%20m%C3%A9dicos%20para%20empresas,%20individuos%20y%20familias&amp;p=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;r=https%3A%2F%2Fwww.google.com%2F&amp;lt=1064&amp;evt=pageLoad&amp;sv=1&amp;cdb=ARoR&amp;rn=660489" style="width: 0px; height: 0px; display: none; visibility: hidden;"></div><iframe id="rely-iframe-1" src="https://api.retargetly.com/api?id=1377&amp;src=0&amp;il=0&amp;url=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;n=Sof%C3%ADa+%7C+Seguros+m%C3%A9dicos+para+empresas%2C+individuos+y+familias&amp;md=Somos+el+seguro+de+salud+m%C3%A1s+completo+para+tus+empleados%2C+tu+familia+y+para+ti.+Conoce+nuestros+planes%2C+cotiza+100%25+en+l%C3%ADnea+y+contrata+de+inmediato.&amp;mk=&amp;utmz=&amp;limit_drop=&amp;userid=eb918002-d311-4832-8c46-17262254030f&amp;fp=e3e3840a-8989-40e3-a56a-069b1c022912&amp;platform=Windows&amp;fullVersionList=Not_A+Brand%2F99.0.0.0%2C+Google+Chrome%2F109.0.5414.168%2C+Chromium%2F109.0.5414.168" referrerpolicy="no-referrer-when-downgrade" style="display: none;"></iframe><img src="https://t.co/1/i/adsct?bci=4&amp;dv=America%2FLos_Angeles%26es-ES%2Ces%26Google%20Inc.%26Win32%26255%261600%26900%264%2624%261600%26860%260%26na&amp;eci=3&amp;event=%7B%7D&amp;event_id=1cd83c41-6ba5-443f-96d8-b83c07ad297f&amp;integration=advertiser&amp;p_id=Twitter&amp;p_user_id=0&amp;pl_id=01cb2349-72d4-4cee-a6c1-aea246a2f030&amp;tw_document_href=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;tw_iframe_status=0&amp;txn_id=od5bm&amp;type=javascript&amp;version=2.3.31" height="1" width="1" style="display: none;"><img src="https://analytics.twitter.com/1/i/adsct?bci=4&amp;dv=America%2FLos_Angeles%26es-ES%2Ces%26Google%20Inc.%26Win32%26255%261600%26900%264%2624%261600%26860%260%26na&amp;eci=3&amp;event=%7B%7D&amp;event_id=1cd83c41-6ba5-443f-96d8-b83c07ad297f&amp;integration=advertiser&amp;p_id=Twitter&amp;p_user_id=0&amp;pl_id=01cb2349-72d4-4cee-a6c1-aea246a2f030&amp;tw_document_href=https%3A%2F%2Fwww.sofiasalud.com%2F&amp;tw_iframe_status=0&amp;txn_id=od5bm&amp;type=javascript&amp;version=2.3.31" height="1" width="1" style="display: none;">
<iframe id="_hjSafeContext_5670518" title="_hjSafeContext" tabindex="-1" aria-hidden="true" src="about:blank" style="display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;"></iframe>
<div class="go2933276541 go2369186930" id="hs-web-interactives-top-anchor"><div id="hs-interactives-modal-overlay" class="go1632949049"></div></div>
<div class="go2933276541 go1348078617" id="hs-web-interactives-bottom-anchor"></div>
<div id="hs-web-interactives-floating-container">
  <div id="hs-web-interactives-floating-top-left-anchor" class="go2417249464 go613305155">
  </div>
  <div id="hs-web-interactives-floating-top-right-anchor" class="go2417249464 go471583506">
  </div>
  <div id="hs-web-interactives-floating-bottom-left-anchor" class="go2417249464 go3921366393">
  </div>
  <div id="hs-web-interactives-floating-bottom-right-anchor" class="go2417249464 go3967842156">
  </div>
</div>
<iframe id="intercom-frame" style="position: absolute !important; opacity: 0 !important; width: 1px !important; height: 1px !important; top: 0 !important; left: 0 !important; border: none !important; display: block !important; z-index: -1 !important; pointer-events: none;" aria-hidden="true" tabindex="-1" title="Intercom"></iframe><div id="intercom-container" class="intercom-namespace"><style>html.intercom-mobile-messenger-active,html.intercom-mobile-messenger-active>body,html.intercom-modal-open,#intercom-container-body{overflow:hidden!important;}html.intercom-mobile-messenger-active,html.intercom-mobile-messenger-active>body{position:static!important;transform:none!important;}html.intercom-mobile-messenger-active>body{height:0!important;margin:0!important;}iframe#intercom-frame{position:absolute!important;opacity:0!important;width:1px!important;height:1px!important;top:0!important;left:0!important;border:none!important;display:block!important;z-index:-1!important;;};;</style><div class="intercom-app" aria-live="polite"><div class="intercom-messenger-frame intercom-with-namespace-1ljcfip ed8ycz90"></div><div id="intercom-modal-container"></div></div></div><div id="intercom-css-container"><style data-emotion="intercom-with-namespace-global" data-s=""></style><style data-emotion="intercom-with-namespace" data-s=""></style></div></body></html>