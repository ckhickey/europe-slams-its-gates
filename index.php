<?php
/* set default timezone */
date_default_timezone_set( 'America/New_York' );

/* set publish dates for each post */
$publish_dates = array(
	'part-1-the-paradox' => '2017-10-03 09:00:00',
	'mali-migrant-crackdown' => '2017-10-03 09:00:00',
	'the-deported' => '2017-10-03 09:00:00',
	'part-2-highway-through-hell' => '2017-10-03 09:00:00',
	'my-smuggler-my-savior' => '2017-10-03 09:00:00',
	'part-3-nearly-there' => '2017-10-05 09:50:00',
	'the-saviors-dilemma' => '2017-10-05 09:50:00',
	'part-4-all-for-nothing' => '2017-10-05 09:50:00',
	'part-5-the-dam-will-hold' => '2017-10-06 09:50:00',
);

/* set publish status for each post */
$publish_post = array();
foreach( $publish_dates as $id => $value ):
	$publish_post[$id] = false;
	if( date('Y-m-d H:i:s') >= $publish_dates[$id] ) $publish_post[$id] = true;
endforeach;

/* get URI string */
$url = str_replace('/', '', $_SERVER['REQUEST_URI']);

/* set key for use in social sharing per URL */
$sharing_meta = array(
	'intro-0--intro' => 'default',
	'part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro' => 'default',
	'part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration' => 'part-1-the-paradox',
	'mali-migrant-crackdown-africa-europe-EU-migration-smuggling--intro' => 'default',
	'mali-migrant-crackdown-africa-europe-EU-migration-smuggling' => 'mali-migrant-crackdown',
	'the-deported-mali-africa-europe-EU-deportation-migration-unrest--intro' => 'the-deported',
	'the-deported-mali-africa-europe-EU-deportation-migration-unrest' => 'the-deported',
	'part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro' => 'default',
	'part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration' => 'part-2-highway-through-hell',
	'my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration--intro' => 'default',
	'my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration' => 'my-smuggler-my-savior',
	'part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration--intro' => 'default',
	'part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration' => 'part-3-nearly-there',
	'the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro' => 'default',
	'the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU' => 'the-saviors-dilemma',
	'part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported--intro' => 'default',
	'part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported' => 'part-4-all-for-nothing',
	'part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration--intro' => 'default',
	'part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration' => 'part-5-the-dam-will-hold'
);

/* set social sharing data that is pulled into meta data on page load and populates page content */
$social_sharing = array(
	'default' => array(
		'head' => 'Europe Slams Its Gates: Imperiling Africa — And Its Own Soul',
		'facebook' => 'An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent respond without destroying its values and wreaking havoc in Africa?',
		'twitter' => 'An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent respond without destroying its values and wreaking havoc in Africa?',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/010_project1.jpg',
	),
	'intro' => array(
		'head' => 'Europe Slams Its Gates: Imperiling Africa — And Its Own Soul',
		'facebook' => 'An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent respond without destroying its values and wreaking havoc in Africa?',
		'twitter' => 'An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent respond without destroying its values and wreaking havoc in Africa?',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/010_project1.jpg',
	),
	'story-1' => array(
		'head' => 'Europe Slams Its Gates: Imperiling Africa — And Its Own Soul',
		'facebook' => 'An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent respond without destroying its values and wreaking havoc in Africa?',
		'twitter' => 'An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent respond without destroying its values and wreaking havoc in Africa?',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/010_project1.jpg" alt="" />',
	),
	'part-1-the-paradox' => array(
		'head' => 'The Paradox of Prosperity',
		'facebook' => 'Europe is spending billions of dollars to jump-start Africa’s poorest economies. But that may just accelerate the exodus.',
		'twitter' => 'Europe is spending billions of dollars to jump-start Africa’s poorest economies. But that may just accelerate the exodus.',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature3.jpg',
	),
	'mali-migrant-crackdown' => array(
		'head' => 'Mali’s Migrant Crackdown',
		'facebook' => 'Europe has been helping fight the country’s jihadis for years. Now it’s turning its sights on human smugglers.',
		'twitter' => 'Europe has been helping fight the country’s jihadis for years. Now it’s turning its sights on human smugglers.',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/002_mali_sidebar.jpg',
	),
	'the-deported' => array(
		'head' => 'The Deported',
		'facebook' => 'Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.',
		'twitter' => 'Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/003_mali_sidebar1.jpg',
	),
	'part-2-highway-through-hell' => array(
		'head' => 'Highway Through Hell',
		'facebook' => 'The human-smuggling route across the Sahara may have been the deadliest on Earth. Then the EU paid off Niger’s army to shut it down — and made it even more treacherous.',
		'twitter' => 'The human-smuggling route across the Sahara may have been the deadliest on Earth. Then the EU paid off Niger’s army to shut it down — and made it even more treacherous.',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature2.jpg',
	),
	'my-smuggler-my-savior' => array(
		'head' => 'My Smuggler, My Savior',
		'facebook' => 'They’re migrants’ only chance of making it safely across the Sahara. They’re also outlaws engaged in a deadly game of cat and mouse with Niger’s military.',
		'twitter' => 'They’re migrants’ only chance of making it safely across the Sahara. They’re also outlaws engaged in a deadly game of cat and mouse with Niger’s military.',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/005_niger_slideshow2.jpg',
	),
	'part-3-nearly-there' => array(
		'head' => 'Nearly There, But<span class="show-mobile">&hellip;</span><span class="hide-mobile"> Never Further Away</span>',
		'facebook' => 'In an effort to stop the flood of migrants crossing the Mediterranean, Europe has turned Africans marooned in Libya into commodities to be sold and traded like slaves.',
		'twitter' => 'In an effort to stop the flood of migrants crossing the Mediterranean, Europe has turned Africans marooned in Libya into commodities to be sold and traded like slaves.',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature4.jpg',
	),
	'the-saviors-dilemma' => array(
		'head' => 'The Savior’s Dilemma',
		'facebook' => 'Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?',
		'twitter' => 'Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/007_libya_sidebar.jpg',
	),
	'part-4-all-for-nothing' => array(
		'head' => 'All for Nothing',
		'facebook' => 'Mohammad Ndoye risked everything for a better life in Europe. Coming up short means facing a future of humiliation, isolation, and impoverishment at home.',
		'twitter' => 'Mohammad Ndoye risked everything for a better life in Europe. Coming up short means facing a future of humiliation, isolation, and impoverishment at home.',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal2.jpg',
	),
	'part-5-the-dam-will-hold' => array(
		'head' => 'The Dam Will<span class="show-mobile">&hellip;</span><span class="hide-mobile"> Hold. Until It Doesn’t.</span>',
		'facebook' => 'Europe has managed to slow the flow of migrants, at least for now — but is undermining its most cherished values in the process.',
		'twitter' => 'The Dam Will Hold. Until It Doesn’t.',
		'image' => 'https://foreignpolicymag.files.wordpress.com/2017/09/009_germany2.jpg',
	),
);

/* set meta data for URI */
if( isset($sharing_meta[$url]) ):
	$meta_data = $sharing_meta[$url];
else:
	$meta_data = $sharing_meta['intro-0--intro'];
endif;

?>
<!DOCTYPE HTML>

<html class="no-js">

<head>
	<script type='text/javascript'>var _sf_startpt=(new Date()).getTime()</script>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Europe Slams Its Gates: Imperiling Africa — And Its Own Soul</title>
	<link rel="stylesheet" href="css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />

	<link rel="shortcut icon" href="https://s0.wp.com/wp-content/themes/vip/foreign-policy/static/images/favicon.ico">

	<!-- Facebook Tags -->
	<meta property="og:title" content="<?php echo str_replace( '&hellip;', '', strip_tags( $social_sharing[$meta_data]['head'] ) ); ?>">
	<meta property="og:image" content="<?php echo strip_tags( $social_sharing[$meta_data]['image'] ); ?>">
	<meta property="og:url" content="<?php echo 'http://europeslamsitsgates.foreignpolicy.com/' . $url; ?>">
	<meta property="og:description" content="<?php echo strip_tags( $social_sharing[$meta_data]['facebook'] ); ?>">
	<meta property="og:site_name" content="Foreign Policy - Europe Slams Its Gates: Imperiling Africa — And Its Own Soul">
	<meta property="fb:app_id" content="107151292643652" />
	<meta property="og:type" content="article" />

	<!-- Twitter Tags -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ForeignPolicy">
	<meta name="twitter:title" content="<?php echo str_replace( '&hellip;', '', strip_tags( $social_sharing[$meta_data]['head'] ); ?>">
	<meta name="twitter:description" content="<?php echo strip_tags( strip_tags( $social_sharing[$meta_data]['twitter'] ) ); ?>">
	<meta name="twitter:image" content="<?php echo strip_tags( $social_sharing[$meta_data]['image'] ); ?>">
	<meta property="twitter:domain" value="http://europeslamsitsgates.foreignpolicy.com"/>

	<!-- CANONICAL -->
	<link rel="canonical" href="http://europeslamsitsgates.foreignpolicy.com">
</head>


<body>

	<header class="header--main">

		<a href="http://www.foreignpolicy.com">
			<svg class="logo" width="75" height="47.5" viewBox="0 0 75 47.5">
			<path fill="#ffffff" d="M39.4,8.7H40V0.5H0v0.8c4.5,0.2,7.4,0.8,7.4,4.9v36c0,4.2-2.9,4.8-7.4,4.9V48h26.2v-0.8c-5.2-0.3-9-0.8-9-4.9
		V25.2h8.7c3,0,4.2,2.2,4.9,6.2h0.5V18h-0.5c-0.7,4-1.9,6.2-4.9,6.2h-8.7V1.3h13.3C35.9,1.3,37.7,2.8,39.4,8.7 M52.9,25.2h6.2
		c11.1,0,15.9-5.8,15.9-13.1c0-6.4-4.5-11.7-17.3-11.7H40.9l0,41.8c0,4.2-2.9,4.8-7.4,4.9V48h27.3v-0.8c-5.2-0.3-9-0.8-9-4.9V1.5
		h3.4c6.1,0,9.5,5.5,9.5,12c0,7.5-3.5,10.8-9.6,10.8h-2.4V25.2z"></path>
			</svg>
		</a>

		<a style="color: #fff; text-decoration:none;" href="http://europeslamsitsgates.foreignpolicy.com/"><h1>Europe Slams Its Gates</h1></a>

		<p class="back-link--parent"><a href="#" class="internal-link back-link">&#9650;&nbsp;&nbsp;Return to Series</a></p>
		<p class="share-bar">
			<span class="share--title"></span>
			<span class="share--options">
				Share:
				<a data-endpoint="facebook" data-title="" data-text="" data-url="" onclick="socialshares.share(this);">
					<img src="assets/icons/facebook_black.svg" alt="Share on Facebook" />
				</a>
				<a data-endpoint="twitter" data-title="" data-text="" data-url="" onclick="socialshares.share(this);">
					<img src="assets/icons/twitter_black.svg" alt="Share on Twitter" />
				</a>
			</span>
		</p>

		<nav>

			<div class="share--options__nav">
				<span class="hide-desktop">
					<img src="assets/icons/share_white.svg" alt="Share" class="share-icon" />
				</span>
				<span class="hide-mobile">
					<a data-endpoint="facebook" data-title="Europe Slams Its Gates: Imperiling Africa — And Its Own Soul" data-text="An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent stem the human tide without destroying its values and wreaking havoc in Africa? FP’s special investigation examines Europe’s desperate campaign to barricade itself — and the policies’ unintended consequences." data-url="http://europeslamsitsgates.foreignpolicy.com/" data-img="https://foreignpolicymag.files.wordpress.com/2017/09/010_project1.jpg" onclick="socialshares.share(this);">
						<img src="assets/icons/facebook_white.svg" alt="Share on Facebook" />
					</a>
					<a data-endpoint="twitter" data-title="Twitter share title" data-text="Europe Slams Its Gates: Imperiling Africa — And Its Own Soul" data-url="http://europeslamsitsgates.foreignpolicy.com/" data-img="https://foreignpolicymag.files.wordpress.com/2017/09/010_project1.jpg" onclick="socialshares.share(this);">
						<img src="assets/icons/twitter_white.svg" alt="Share on Twitter" />
					</a>
				</span>
			</div>

			<button class="hamburger-button">
				<span class="line"></span>
			</button>

			<div class="section-nav">
				<span class="section-nav--marker">&#8226;</span>
				<p class="nav-project-title">Europe Slams Its Gates</h1>
                <p class="credits" style="text-align:center; margin: 0;">A FOREIGN POLICY SPECIAL INVESTIGATION</p>
				<div class="section-nav-content">
					<ul>
						<li>
							<a href="#intro-0--intro" class="internal-link section-marker back-to-intro"><strong>Introduction</strong></a>
							<div class="nav-article-header">
								<!--<img src="https://foreignpolicymag.files.wordpress.com/2017/08/ns_fp_adadez28.jpg" /> -->
								<p class="nav-article-header__heading">Introduction</p>
								<p class="nav-article-header__dek">An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent respond without destroying its values and wreaking havoc in Africa? <span class="fp-red">FP</span>’s special investigation examines Europe’s desperate campaign to barricade itself — and the policies’ unintended consequences.</p>
							</div>
						</li>
						<li><a href="#part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro" class="internal-link section-marker"><strong>Part I:</strong> Mali</a>
							<div class="nav-article-header">
								<a href="#part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature3.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature3.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature3.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature3.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature3.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature3.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image-nav" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature3.jpg" class="main-image-nav" alt="" />
								</noscript></a>
								<a href="#part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration" class="internal-link read-link"><p class="nav-article-header__heading">The Paradox of Prosperity</p></a>
								<a href="#part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration" class="internal-link read-link"><p class="nav-article-header__heading_mobile">Part I: Mali</p></a>
								<p class="nav-article-header__dek">Europe is spending billions of dollars to jump-start Africa’s poorest economies. But that may just accelerate the exodus. </p>
								<a href="#mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="internal-link read-link"><p class="nav-sidebar-header__heading">Mali’s Migrant Crackdown</p></a>
								<p class="nav-article-header__dek">Europe has been helping fight the country’s jihadis for years. Now it’s turning its sights on human smugglers.</p>
								<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link"><p class="nav-sidebar-header__heading">The Deported</p></a>
								<p class="nav-article-header__dek">Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.</p>
							</div>
						</li>
						<li><a href="#part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro" class="internal-link section-marker"><strong>Part II:</strong> Niger</a>
							<div class="nav-article-header">
								<a href="#part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature2.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature2.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature2.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature2.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature2.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature2.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image-nav" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature2.jpg" class="main-image-nav" alt="" />
								</noscript></a>
								<a href="#part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="nav-article-header__heading">Highway Through Hell</p></a>
								<a href="#part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="nav-article-header__heading_mobile">Part II: Niger</p></a>
								<p class="nav-article-header__dek">The human-smuggling route across the Sahara may have been the deadliest on Earth. Then the EU paid Niger’s army to shut it down — and made it even more treacherous.</p>
								<a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="nav-sidebar-header__heading">My Smuggler, My Savior</p></a>
								<p class="nav-article-header__dek">They’re migrants’ only chance of making it safely across the Sahara. They’re also outlaws engaged in a deadly game of cat and mouse with Niger’s military.</p>
							</div>
						</li>
						<li><a href="#part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration--intro" class="internal-link section-marker"><strong>Part III:</strong> Libya</a>
							<div class="nav-article-header">
								<a href="#part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature4.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature4.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature4.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature4.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature4.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature4.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image-nav" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature4.jpg" class="main-image-nav" alt="" />
								</noscript></img>
								<a href="#part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration" class="internal-link read-link"><p class="nav-article-header__heading">Nearly There, but Never Further Away</p></a>
								<a href="#part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration" class="internal-link read-link"><p class="nav-article-header__heading_mobile">Part III: Libya</p></a>
								<p class="nav-article-header__dek">Europe has outsourced the dirty work of border control to Libyan militias. In doing so, it has turned African migrants into commodities to be captured, sold, and traded like slaves.</p>
								<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link"><p class="nav-sidebar-header__heading">The Savior’s Dilemma</p></a>
								<p class="nav-article-header__dek">Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?</p>
							</div>
						</li>
						<li><a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro" class="internal-link section-marker"><strong>Part IV:</strong> Senegal</a>
							<div class="nav-article-header">
								<a href="#part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal2.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal2.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal2.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal2.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal2.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal2.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image-nav" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal2.jpg"  class="main-image-nav" alt="" />
								</noscript></a>
								<a href="#part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="internal-link read-link"><p class="nav-article-header__heading">All for Nothing</p></a>
								<a href="#part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="internal-link read-link"><p class="nav-article-header__heading_mobile">Part IV: Senegal</p></a>
								<p class="nav-article-header__dek">Migrants who fail to reach Europe face humiliation, isolation, and impoverishment at home.</p>
							</div>
						</li>
						<li><a href="#part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration--intro" class="internal-link section-marker"><strong>Part V:</strong> Germany</a>
							<div class="nav-article-header">
								<a href="#part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/009_germany2.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/009_germany2.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany2.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany2.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany2.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany2.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image-nav" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/009_germany2.jpg" class="main-image-nav" alt="" />
								</noscript></a>
								<a href="#part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration" class="internal-link read-link"><p class="nav-article-header__heading">The Dam Will Hold. Until It Doesn’t.</p></a>
								<a href="#part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration" class="internal-link read-link"><p class="nav-article-header__heading_mobile">Part V: Germany</p></a>
								<p class="nav-article-header__dek">Europe has managed to slow the flow of migrants, at least for now — but is undermining its most cherished values in the process.</p>
							</div>
						</li>
					</ul>
					<p class="credits"><strong>CREDITS:</strong><br>Reporting by Ty McCormick, Nichole Sobecki, Peter Tinti, Jill Filipovic, and Cameron Abadi. Photography by Nichole Sobecki, Anthony Fouchard, Sébastien Rieussec, Peter Tinti, Jill Filipovic, and Getty Images. Editing by Ty McCormick, Ben Pauker, Cameron Abadi, Rebecca Frankel, and Jonathan Tepperman. Copy-editing by Shannon Schweitzer. Design by Adam Griffiths. Development by C.K. Hickey and Andrew Baughman. Audio features recorded by <a class="credits-link fp-red" href="https://goo.gl/bvuWDe" target="_blank">AUDM</a>. Reporting for this series was made possible in part by a grant from the <a class="credits-link" href="http://www.pulitzercenter.org" target="_blank">Pulitzer Center on Crisis Reporting</a>.</p>
					<p class="credits"><strong>THE MAGAZINE:</strong><br>For more stories on migration to Europe, check out <a class="credits-link fp-red" href="http://foreignpolicy.com/the-magazine/?issue=septemberoctober-2017/" target="_blank"><span class="fp-red">FP</span>’s September/October 2017 issue</a> with reporting from Sune Engel Rasmussen and Andrew Quilty from Afghanistan’s dangerous border with Iran about what’s driving disenchanted Afghans to seek opportunities abroad, an essay from Suketu Mehta challenging the West’s corrosive fear of migrants, and a profile of a woman in Spain coordinating migrant rescues from her couch.</p>
				</div>
			</div>
		</nav>

	</header>

	<main>

		<div class="nav-arrows">
			<div class="prev">
				<img class="nav-arrow" src="./assets/icons/left.svg" />
				<div class="dek-preview dek-prev"></div>
			</div>
			<div class="next">
				<img class="nav-arrow" src="./assets/icons/right.svg" />
				<div class="dek-preview dek-next"></div>
			</div>
		</div>

		<div class="content-wrapper--parent">
		<div class="content-wrapper">

			<section class="first-slide" id="intro-0--intro" data-set-marker="intro-0--intro" data-desktop-next="story-1--intro" data-desktop-prev="intro-0--intro" data-mobile-next="story-1--intro" data-mobile-prev="intro-0--intro">

				<div class="content--main content-0">
					<header id="intro-0-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/10/000_intro.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/10/000_intro.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/10/000_intro.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/10/000_intro.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/10/000_intro.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="wide_copy no-horizontal-padding" style="max-width:none; padding-bottom:0;">
							<p style="font-size: 0.8em; display:none;" class="labels" id="intro-0-dek">Introduction</p>
							<h1 class="intro-hed">Europe Slams Its Gates</h1>
							<h3 class="intro-hed-smaller">Imperiling Africa — And Its Own Soul</h3>
                            <p style="text-align:center;"><span class="readmore_0">A Foreign Policy Special Investigation</span></p>
						</div>
						<span class="share-text share--head"><?php echo $social_sharing['intro']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['intro']['facebook'] ?></span>
						<span class="share-text share--twitter"><?php echo $social_sharing['intro']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['intro']['image'] ?>" alt="" />
					</header>
				</div>

			</section>

			<section id="story-1--intro" class="story" data-set-marker="intro-0--intro" data-desktop-next="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro" data-desktop-prev="intro-0--intro" data-mobile-next="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro" data-mobile-prev="intro-0--intro">

				<div class="content--main content-0">
					<div id="widecopy1" class="wide_copy">
						<p style="font-size: 0.8em; display:none;" class="labels" id="story-1-dek">Introduction</p>

                        <h2 class="post-dek" style="font-weight:600;"><br>An unprecedented wave of African migration is warping Europe’s politics and threatening its stability. Can the Continent respond without destroying its values and wreaking havoc in Africa? FP’s special investigation examines Europe’s desperate campaign to barricade itself — and the policies’ unintended consequences.</h2>
                        <p class="post-date" style="border-bottom: 1px solid #000; padding-bottom:1em;">Oct. 4, 2017</p>

						<p class="post_intro_lead">In 2015, a record 1.3 million people applied for asylum in Europe — nearly double the previous high, set in 1992 (the year after the Soviet Union collapsed). The arrivals predominantly hailed from the war zones of Syria, Iraq, and Afghanistan. Most came through Turkey, rode dinghies across the Aegean Sea to Greece, and then traveled, in vast human caravans, through the Balkans into Hungary, Austria, and Germany. They carried little more than a suitcase or two, some clothes, a bit of cash, and the hope for refuge and a better life.</p>

						<div class="media-contain quote-right about">
							<p class="refer"><span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
							</noscript>
						</div>

						<p>Some European countries welcomed the arrivals with open arms; others closed their borders and left them to languish. But even the most generous hosts — Germany admitted 1.1 million refugees and migrants in 2015 — soon hit their limits: As social welfare networks were stretched thin and nativist fears of terrorism and Islamization grew, anti-immigrant political parties began to gain sway. The populist surge led many centrist leaders to reconsider their erstwhile openness, lest the rising right-wing backlash threaten the entire European project.</p>
						<p>And so, in early 2016, the European Union reached a deal with Turkey, offering up to $6.6 billion (and the promise of visa-free travel to the EU for Turkish citizens) in exchange for Ankara’s help in blocking the departures. The plan worked. From 2015 to 2016, the number of people crossing the Aegean to Greece <a href="http://frontex.europa.eu/news/fewer-migrants-at-eu-borders-in-2016-HWnC1J" target="_blank">dropped</a> by nearly 80 percent.</p>

                        <img data-src="https://foreignpolicymag.files.wordpress.com/2017/10/gettyimages-696316870.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/10/gettyimages-696316870.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/10/gettyimages-696316870.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/10/gettyimages-696316870.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/10/gettyimages-696316870.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/10/gettyimages-696316870.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
                        <noscript>
                            <img src="https://foreignpolicymag.files.wordpress.com/2017/10/gettyimages-696316870.jpg" alt="" />
                        </noscript>
                        <p class="post-article-width-image-caption" style="margin-bottom: 2.5em;"><strong>Above:</strong> Refugees wait to get on board an NGO-operated vessel after being rescued from a wooden boat sailing on the Mediterranean Sea near Libya on June 15. (Marcus Drinkwater/Anadolu Agency/Getty Images); <strong>Previous:</strong> Detainees from West Africa peer out of their over-crowded cell in the al-Nasr detention center in Zawiya, Libya, where migrants intercepted by the Coast Guard in Zawiya are warehoused indefinitely. (Photo by Peter Tinti)</p>

						<p>But Europe’s migration crisis wasn’t over.</p>

						<p>With one sea route closed, another — from North Africa across the Mediterranean Sea to Italy — quickly expanded, with a record 181,000 people taking it last year. And that number is sure to keep growing: Sub-Saharan Africa currently has one of the highest birthrates in the world, and, according to one <a href="https://www.aeaweb.org/articles?id=10.1257/jep.30.4.57" target="_blank">recent study</a>, almost 800 million working-age people there — more than the current population of Europe — will enter the labor force between now and 2050. Few of them will find decent jobs; many won’t find work at all.</p>
						<p>Alarmed by such numbers, Europe’s leaders are scrambling to respond. So far, their new policies have focused not just on securing the Continent’s borders but on tackling the problem at its source. Along with tough new immigration policies, Europe has launched a slew of development and state-building efforts in countries including Senegal and Somalia.</p>

						<p>But lofty ideals are being betrayed by flawed implementation. At least one ill-conceived European-backed development project has already gone bust, while efforts to train and equip local security forces and militias have empowered gunmen known to torture, enslave, and kill civilians. Intentionally or not, European taxpayers are now funding a massive deterrence and interdiction effort that is largely invisible in Europe but profoundly damaging to Africa. It’s also futile: Despite the billions of dollars being spent, the current efforts won’t resolve the causes of Africa’s exodus or stop its flow. </p>

						<p>Part I of our series begins in Mali, where failed efforts to kick-start the economy are having the opposite of their intended effect, sending even more people streaming north. Part II takes readers along Niger’s lawless smuggling routes, where the military’s efforts to block departures have elevated the body count. In Part III, our reporter tours Libya’s new detention-industrial complex, where would-be migrants are enslaved and ransomed by European-backed militias. Part IV tells the story of one man who fled Senegal for Italy, only to be caught and — like so many others — sent back home to a life of humiliation and poverty. And Part V explores how European leaders are navigating the moral and political consequences of their own decisions.</p>

						<p>Those leaders may not know it yet, but Africans won’t be the only ones to suffer. The increasingly desperate measures to barricade its borders may also end up costing Europe its soul. <span class="red-box-end"></span></p>

					</div>

					<span class="share-text share--head"><?php echo $social_sharing['story-1']['head'] ?></span>
					<span class="share-text share--facebook"><?php echo $social_sharing['story-1']['facebook'] ?></span>
					<span class="share-text share--twitter"><?php echo $social_sharing['story-1']['twitter'] ?></span>
					<img class="share-image" src="<?php echo $social_sharing['intro']['story-1'] ?>" alt="" />
				</div>

			</section>


			<section id="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro" class="story" data-set-marker="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro" data-desktop-next="mali-migrant-crackdown-africa-europe-EU-migration-smuggling--intro" data-desktop-prev="story-1--intro" data-mobile-next="mali-migrant-crackdown-africa-europe-EU-migration-smuggling--intro" data-mobile-prev="story-1--intro">

				<article>
					<header id="story-2-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature1a.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature1a.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature1a.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature1a.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_mali_feature1a.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p id="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration-dek" style="display:none;">Part I: Mali</p>
							<p class="labels">Part I</p>
							<h1>The Paradox of Prosperity</h1>
							<p class="dek">Europe is spending billions of dollars to jump-start Africa’s poorest economies. But that may just accelerate the exodus. </p>
							<?php if( $publish_post['part-1-the-paradox'] ): ?>
								<p><a href="#part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Tuesday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['part-1-the-paradox']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['part-1-the-paradox']['facebook'] ?></span>
						<span class="share-text share--twitter"><?php echo $social_sharing['part-1-the-paradox']['head'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['part-1-the-paradox']['image'] ?>" alt="" />
					</header>
					<?php if( $publish_post['part-1-the-paradox'] ): ?>
					<div id="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration" class="content--main">
						<div class="post-header">
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg" class="main-image" alt="" />
							</noscript>
							<div id="header1" class="post-header-text">
								<p class="post-header-captions-mobile">Abdoulaye Traoré stands in the doorway of his uncle’s house in Bamako. Traoré wasn’t sure he could afford to attend law school in the capital, but his uncle agreed to pay the $2.90 in monthly rent for a single room Traoré now shares with two other young men.</p>
								<p class="mobile-post-marker"><span style="font-weight:900;">Europe Slams Its Gates</span><br>Part I</p>
								<h1 class="post-hed">The Paradox of Prosperity</h1>
								<h2 class="post-dek">Europe is spending billions of dollars to jump-start Africa’s poorest economies. But that may just accelerate the exodus.</h2>
							</div>
							<p class="post-header-captions">Abdoulaye Traoré stands in the doorway of his uncle’s house in Bamako. Traoré wasn’t sure he could afford to attend law school in the capital, but his uncle agreed to pay the $2.90 in monthly rent for a single room Traoré now shares with two other young men.</p>
						</div>
						<div class="post_copy mobile-copy">
							<p class="post-author" style="margin-bottom: 0.83em;">By Ty McCormick&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Photography by Nichole Sobecki</p>
                            <p class="post-date">Oct. 4, 2017</p>
							<p class="post_intro_lead">KOLONDIÉBA, Mali — It had been 10 days since Abdoulaye Traoré did anything at work. The cashew processing plant where he and roughly 200 other Malian laborers made a living by stripping the fleshy husks off crescent-shaped nuts had been sitting idle since early February. It had run out of raw cashews.</p>

							<p>Each day for the past week, fewer employees had reported for work. No one had been paid since the beige, barn-like facility, perched on the edge of a vast plantation of spindly cashew trees, had suddenly ceased operating. No one had been told how long the interruption would last — or if the plant was closing its doors for good.</p>

							<div class="media-contain quote-right about">
								<p class="about_lead refer"><strong>ABOUT THIS SERIES</strong></p>
								<p class="refer">Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights.<br /><br />
								<span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
								</noscript>
							</div>

							<p>Traoré, who at 26 had the wide shoulders and confident bearing of a college athlete, was beginning to wonder if he should look for another job. He had never intended to work at the plant forever, but shelling cashews paid better than most jobs in impoverished southern Mali, where almost everyone who lives comfortably has a family member sending money home from abroad. If not quite a ticket to a better future, the job was a chance to save up for one. “I think this is a good job, but now we are just waiting,” he told me in February. “Me, I am leaving for Ivory Coast on Monday or Tuesday. I heard there is work.”</p>

							<p>That a small business in Mali would be hobbled by inefficiency is hardly surprising. More adults here are illiterate than can read, and the World Bank ranks the country as one of the most challenging in which to do business. But the cashew processing plant in Kolondiéba isn’t just any small enterprise. It’s one of Mali’s flagship development projects and the blueprint for future multimillion-dollar job creation initiatives aimed at curbing migration to Europe. It’s a preview of Europe’s answer to the migration crisis — or a big part of it anyway.</p>

							<p>With tens of millions of migrants and refugees projected to arrive in Europe in the coming decades, on top of the million-plus who have claimed asylum in each of the last two years, the European Union is pouring billions of dollars into fighting migration at its source — much of it in impoverished and war-torn countries in Africa. The aim is to transform nations like Mali into more hospitable places. If it succeeds, Brussels is betting that it can convince some would-be migrants to stay home and African governments to stop others from leaving.</p>

                            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/343613799%3Fsecret_token%3Ds-nkrGK&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Listen to this story from <span class="fp-red">Foreign Policy</span>'s series, "Europe Slams Its Gates," and other FP content, as well as features from a range of top publications: Download the <a href="https://goo.gl/6QLxwu" target="_blank">AUDM</a> app for your iPhone.</p>


							<p>Ángel Losada Fernandez, the EU’s special representative for the Sahel, an arid region south of the Sahara through which hundreds of thousands of Europe-bound migrants transit each year, calls it the “EU strategy of security and development.” The aim is to create “the proper jobs on the ground” so that young men no longer feel compelled to leave, he says, while also helping governments “control all this territory.” Call it paying migrants to stay — or paying their governments to keep them at home.</p>

							<p>In just under two years — lightning speed for the European Union — the 28-nation bloc has <a href="http://europa.eu/rapid/press-release_IP-17-402_en.htm" target="_blank">approved</a> nearly $2 billion in spending on 116 projects aimed at countering the “root causes” of migration in 26 African countries. That’s on top of tens of billions of dollars more in existing development and security assistance from the EU and from member states, some of which has already been reallocated to better address concerns over migration.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_mal_fp_migration67.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_mal_fp_migration67.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_mal_fp_migration67.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_mal_fp_migration67.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_mal_fp_migration67.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_mal_fp_migration67.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_mal_fp_migration67.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Traoré watches television with a group of young men in his uncle’s living room in Bamako.</p>

							<p>Much of the money has been funneled into ambitious development projects: roughly <a href="http://europa.eu/rapid/press-release_IP-16-3503_en.htm" target="_blank">$114 million</a> for sustainable agriculture and food security in Senegal; <a href="https://ec.europa.eu/europeaid/sites/devco/files/factsheet_ec_format_eu_emergency_trust_fund_for_africa_2017.pdf" target="_blank">$32 million</a> for job creation in migration transit zones in Niger; <a href="https://ec.europa.eu/europeaid/projects/gambia-youth-empowerment-scheme_en" target="_blank">$12 million</a> for vocational training and youth empowerment in Gambia. All of it is administered through a multibillion-dollar EU Emergency Trust Fund for Africa, launched at a joint African and European summit on migration in 2015.</p>

							<div class="media-contain quote-right pullquote">
								<p>The idea that development can dry up migration is an appealing one for policymakers desperate for a humane response to the unprecedented surge of refugees and migrants.</p>
							</div>

							<p>The idea that development can dry up migration is an appealing one for policymakers desperate for a humane response to the unprecedented surge of refugees and migrants. This year, more than <a href="https://reliefweb.int/sites/reliefweb.int/files/resources/Less than 5%2C000 Mediterranean Arrivals in Past Week _ International Organization for Migration.pdf" target="_blank">2,500 people</a> have died attempting to cross the Mediterranean Sea to European shores. The crisis has already prompted an aggressive, securitized response from the EU and member states, including funding for detention centers and equipping security services in key transit countries so that they crack down on illegal migration. Development seems to offer a more palatable method of relieving migratory pressures, one that isn’t glaringly inconsistent with Europe’s professed values on human rights.</p>

							<p>But the story of the Malian cashew factory — which was still sitting idle in July, five months after it first ran out of raw materials — highlights the immense challenges that await European policymakers seeking to remake the poorest countries on Earth into attractive places to live. It also exposes a false but largely ignored assumption upon which the EU’s entire plan to use development to fight migration is premised: Better jobs and more income, at least in the short and medium term, don’t typically relieve migratory pressures in desperately poor countries; they increase them, a fact that is well-documented by economists.</p>

							<p>Like most of his friends, Traoré had long dreamed of migrating to Europe. Also like them, he lacked the resources to make it there. He wasn’t even sure he could afford to move to Bamako, the Malian capital, where he had been accepted to study for a law degree. “School is free, but you have to pay for housing, transport, books,” he said.</p>

							<p>He had been saving money working at the cashew plant. But now that it was closed, the best option seemed to be to go in search of seasonal labor next door in Ivory Coast, the world’s largest producer of cocoa. The notion that someday there might be a well-paying job for him right here in Mali — the kind of job envisioned by EU policymakers — struck him as unlikely. If one suddenly appeared, though, Traoré knew exactly what he would do: “I would save money and go to Europe.”</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_mal_fp_migration28.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_mal_fp_migration28.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_mal_fp_migration28.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_mal_fp_migration28.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_mal_fp_migration28.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_mal_fp_migration28.jpg?w=1500 1500w" data-sizes="auto" alt="" style="max-height: none; margin-bottom: 0;" class="post-module lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_mal_fp_migration28.jpg" alt="" style="max-height: none; margin-bottom: 0;" class="post-module" />
							</noscript>
						<p class="post-image-caption">Cows graze at dusk in Kolondiéba, a sleepy farming community in southern Mali two hours from the nearest paved road.</p>

						<div class="post_copy">
							<p class="post_intro_lead">A landlocked, hourglass-shaped nation bisected by the Sahel, Mali is both a significant source of Europe-bound migrants and a key transit country for migrants from other African nations, including Senegal, Ivory Coast, and Gambia. In 2012, jihadis briefly overran the northern part of the country before being repulsed by an intervening French military. Today, the backbone of the economy in this vast and lawless expanse in the north is smuggling. Narcotics and weapons, stolen and counterfeit items — billions of dollars’ worth of illicit goods move along ancient caravan routes that crisscross the Sahara each year. So, too, do tens of thousands of West African migrants, who cross the desert to Algeria in the backs of pickup trucks.</p>

							<p>Hundreds of miles away in Mali’s semiarid south, remittances, rather than smuggling, are the main source of income. This is where the majority of Malian migrants hail from. Nearly a quarter of the country’s roughly 18 million nationals are thought to live abroad, elsewhere in Africa and in Europe. Experts estimate that the money they send back accounts for roughly <a href="http://www.ecfr.eu/article/commentary_the_eus_migration_policy_in_africa_five_ways_forward" target="_blank">7 percent</a> of GDP. In parts of the south, Western Union is widely seen as more important than development aid. One finds whole villages here with no working-age men. Musicians sing about the heroes of the sea and the sky, and elders whisper about jobless teenage boys who haven’t yet bid their goodbyes. A distant tomb, it is often said, is better than poverty at home.</p>

							<p>One such place is Kolondiéba, a sleepy farming community surrounded by towering mango trees, two hours from the nearest paved road, where Spain’s development agency, known as AECID, opened the cashew processing plant last year. The lush, oppressively hot region near Mali’s border with Ivory Coast once had a thriving cashew export industry. But decades of government neglect left the sector a shambles. Now instead of drawing their sustenance from the land, residents depend on remittances from abroad.</p>

							<div class="media-contain quote-right about">
								<a href="#mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="internal-link read-link">
									<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg"/>
									<noscript>
										<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg" alt="" class="referImg"/>
									</noscript>
								</a>
								<a href="#mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="internal-link read-link"><p class="about_lead refer"><strong>Mali’s Migrant Crackdown</strong></p></a>
								<p class="refer referBody">Europe has been helping fight the country’s jihadis for years. Now it’s turning its sights on human smugglers.</p>
							</div>

							<p>Rehabilitating the cashew nut sector, development experts at AECID reasoned, could revitalize one of the poorest regions of one of the poorest nations on Earth. “For one U.S. dollar, you can plant one hectare’s worth of trees,” said Francisco Álvaro, an AECID official in Bamako who helped design the project. “You will employ one or two people on that hectare and one or two more on every hectare thereafter. We see potentially 5 million hectares of production in Mali. We are at 100,000 now, so that’s about 2 percent of our potential.”</p>

							<p>Álvaro, who is short and excitable with salt-and-pepper hair, talks about cashews with the enthusiasm of an agronomist who has spent years immersed in his subject. The tree is well-suited to the inhospitable climate of the Sahel, he explains, and begins to produce nuts in as few as three years. Once it is mature, it can survive and produce even in a drought, since its roots tunnel as deep as 30 feet in search of ground water. In addition to the nuts, which command ever-higher prices in Europe and the United States, it produces a fruit that can be eaten or turned into juice or wine. Spoiled nuts can be made into soap.</p>

							<p>But farmers in Mali have reaped few of the cashew trees’ theoretical benefits. Before Álvaro and his team arrived, most of the fruit was left to rot, and commercial wine- and soap-making were unheard of in places like Kolondiéba. The cashews were exported raw, meaning that middlemen in India and China profited from the shelling and roasting of the nuts.</p>

							<p>So at a cost of roughly $7 million, Álvaro and his colleagues at AECID designed a pilot project that would serve as a model for a much larger cashew sector project funded through the EU Trust Fund. They built 10 small packing and storage facilities and one processing plant in Kolondiéba, where an association of women’s collectives operated manual shelling machines and baked the nuts in an industrial-size kiln. AECID also offered the women business training, including instruction on how to find markets for their produce.</p>

							<p>Álvaro and his team had run the math: Revenue from the sale of processed cashews should have been enough to pay for the purchase of new raw cashews with a modest profit margin. AECID donated the first 15 tons of unprocessed nuts; after that, the operation was supposed to be self-sustaining. But by early February — before the plant had even processed and sold a single shipment of nuts — the pilot project had stalled.</p>
						</div>

						<div class="post-module two-images">
							<div class="post-image-left">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_mal_fp_migration11.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_mal_fp_migration11.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_mal_fp_migration11.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_mal_fp_migration11.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_mal_fp_migration11.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_mal_fp_migration11.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_mal_fp_migration11.jpg" alt="" />
								</noscript>
								<p class="post-image-caption">Awa Touré (left), the president of the women’s collective that manages the Kolondiéba cashew plant, and Astan Koné (right), an accountant for the collective, inspect rotten cashews they say can’t even be used to feed their animals.</p>
							</div>
							<div class="post-image-right">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_mal_fp_migration01.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_mal_fp_migration01.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_mal_fp_migration01.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_mal_fp_migration01.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_mal_fp_migration01.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_mal_fp_migration01.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_mal_fp_migration01.jpg" alt="" />
								</noscript>
								<p class="post-image-caption">Touré and Koné outside the Kolondiéba cashew plant, where machinery gathers dust and the only cashews left are those that were rotten before they could be processed.</p>
							</div>
						</div>

						<div class="post_copy">
							<p>Employees at the plant had different explanations for what went wrong. Some blamed fluctuations in the price of cashews, which made it difficult to budget for new raw nuts. Others said the problem was the decision to pay workers monthly wages based on the weight of the cashews they processed, a system that resulted in payouts that exceeded the money coming in from sales. The quality of the raw cashews delivered by AECID, a third of which were rotten by the time they could be processed, apparently also played a role. Whatever the proximate cause, it was clear that the women’s collectives — comprising mostly illiterate women but also a few men, like Traoré, who faced tremendous social pressures to migrate — had been left on their own to manage an industrial-scale operation with millions of dollars in assets.</p>

							<p>“We can’t self-fund. This [operation] will stop for sure without more assistance,” Awa Touré, the president of the cooperative that manages the plant, told me. “Right now, we are not doing anything because we have no cashews left to process.”</p>

							<p>None of the workers had been in contact with AECID since an on-site trainer from the development agency had departed several months previously. Some planned to hold out until more cashews arrived; others were already planning to leave town. “We will wait and see,” said Sangare Konaté, a slender 32-year-old whose colleagues playfully referred to her as <em>la vieille</em>, or “old” one. She has family members all over the world: an aunt in Angola, a brother who migrated to Italy, and another brother in the United States.</p>

							<div class="media-contain quote-right pullquote">
								<p>“The problem here is a cultural one. If you have money, you spend it all — it’s the same everywhere in Africa. People here don’t prepare for the future. There is an incapacity to save.”</p>
							</div>

							<p>Back at the Spanish Embassy in Bamako, Álvaro seemed only vaguely aware of the troubles in Kolondiéba. “I don’t have all the details, but I think they have preferred to share the money. They should have saved it,” he said of the workers there. “The problem here is a cultural one. If you have money, you spend it all — it’s the same everywhere in Africa. People here don’t prepare for the future. There is an incapacity to save.”</p>

							<p>When I asked whether the European Commission had requested to see the results of AECID’s pilot project before awarding the development agency roughly $15 million to scale it up, Alvaro said no. “Their first concern was the speed of the execution,” he said. “They didn’t ask anything about the quality of the implementation.”</p>

							<p>Carlos Martin Ruiz de Gordejuela, a spokesman for the European Commission, said in an email that the results of a 2015 evaluation of the AECID pilot — carried out before the Kolondiéba plant was operational — had been considered as part of the decision to fund the agency’s new cashew project. He added that “knowledge acquired during the [pilot] project, the experience of the EU and other stakeholders, and the very high number of meetings and exchanges since the start of the [project] identification process” had also been considered. Price fluctuations in the international market for cashews, he allowed, had played a role in the “temporary inactivity” of the Kolondiéba plant.</p>
						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_mal_fp_migration52.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_mal_fp_migration52.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_mal_fp_migration52.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_mal_fp_migration52.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_mal_fp_migration52.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_mal_fp_migration52.jpg?w=1500 1500w" data-sizes="auto" alt="" style="max-height: none; margin-bottom: 0;" class="post-module lazyload" />
						<noscript>
							<img src="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_mal_fp_migration52.jpg" alt="" />
						</noscript>
						<p class="post-image-caption">Traoré’s mother, Farima Ouatiara, prays in the bedroom of her home in Kolondiéba.</p>

						<div class="post_copy">
							<p class="post_intro_lead">To secure funding through the EU Trust Fund, development agencies like AECID must submit detailed project proposals that are evaluated in Brussels and by the EU delegation in the country where the project will be implemented. The screening process is rigorous, EU officials say, even though they acknowledge that there is tremendous pressure to get programs off the ground that might help ease the migration crisis.</p>

							<p>“I can tell you that if the EU is spending money, even if we have to do it quick, fast, and sensible, we have always a control on what we are doing. It’s money of the taxpayers, so we have an evaluation and control,” said Losada, the EU’s special representative for the Sahel. Still, Losada acknowledged that the need to have an immediate impact has made it impossible to tailor each project to specific community needs. “We cannot do urgency, [act] immediately, and then to go case by case, problem by problem. We have to try to have a big impact, an immediate impact. That’s the philosophy of the Trust Fund,” he said.</p>

							<p>The result is that virtually all of the grants have gone to European development agencies like AECID instead of to the Malian government or to Malian organizations. To support entrepreneurs in the south of the country, the EU has turned to France’s development agency. To aid impoverished communities in the north, it has contracted the Dutch development agency. In addition to revitalizing the cashew sector, Spain’s development agency has received funding to help reintegrate migrants who have returned to Mali.</p>

							<p>“Out of 200 million euros from the Trust Fund, not one penny is being managed by the Malian government or by Malian nongovernmental organizations,” said Boulaye Keita, a technical counselor to the minister for Malians abroad, who was the main government point person for projects financed through the Trust Fund. “Some of these projects are drafted by people in Paris who have never been to the regions we are talking about. They have no idea what is happening there.”</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_mal_fp_migration13.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_mal_fp_migration13.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_mal_fp_migration13.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_mal_fp_migration13.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_mal_fp_migration13.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_mal_fp_migration13.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_mal_fp_migration13.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Rotten nuts at the cashew processing plant in Kolondiéba.</p>

							<p>European organizations have in some cases partnered with local organizations, and the EU-funded projects are often coordinated with the Malian government. But the overwhelming dominance of European agencies has contributed to a sense that Malians themselves are not benefiting from these programs.</p>

							<p>“This is European aid for Europeans,” said Ousmane Diarra, the president of the Malian Association for Deportees, a Bamako-based organization that supports Malians who have been deported from abroad. Diarra told me that his organization has repeatedly sought EU funding for an agricultural development project. “If I come partnered with a European, then maybe they will finance me. But if I come alone as an African, no,” he said.</p>

							<p>European diplomats say they are forced to partner with big development agencies because Malians lack the capacity to implement projects on the scale of those being approved through the EU Trust Fund. They also point to rampant corruption within the Malian government, which ranks in the <a href="https://www.transparency.org/news/feature/corruption_perceptions_index_2016#table" target="_blank">bottom half</a> of Transparency International’s Corruption Perceptions Index, as a reason to channel money toward European development agencies.</p>

							<p>“Very often [with] local NGOs, to be honest, to have them as a contract partner for a big contract, you run into issues of fiduciary risks of lack of management capacity. So our taxpayers also want us to be sure that we know where the money is spent and we can justify every bit of it,” Jolke Oppewal, the Dutch ambassador in Mali, told me. “But I think with the [EU Trust Fund] we could do better in the sense of having more Malian engagement.”</p>

						</div>

						<div class="post-module two-images">
							<div class="post-image-left">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_mal_fp_migration14.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_mal_fp_migration14.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_mal_fp_migration14.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_mal_fp_migration14.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_mal_fp_migration14.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_mal_fp_migration14.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_mal_fp_migration14.jpg" alt="" />
								</noscript>

								<p class="post-image-caption">The shuttered cashew processing plant in Kolondiéba as seen by an <span class="fp-red">FP</span> photographer in July.</p>
							</div>
							<div class="post-image-right">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_mal_fp_migration17.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_mal_fp_migration17.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_mal_fp_migration17.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_mal_fp_migration17.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_mal_fp_migration17.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_mal_fp_migration17.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_mal_fp_migration17.jpg" alt="" />
								</noscript>

								<p class="post-image-caption">Cashew trees grow outside the processing plant in Kolondiéba.</p>
							</div>
						</div>

						<div class="post_copy" style="padding-bottom: 6em;">
							<p class="post_intro_lead">Four months after work ceased at the Kolondiéba plant, AECID made its first trip there to assess what had gone wrong. The agency was planning a second visit, “more oriented to make a support plan to improve their operation,” Álvaro told me in an email dated June 3. When a photographer for <span class="fp-red">Foreign Policy</span> returned to the plant in July, the facility was still shuttered; a lone security guard watched over the deserted grounds. Unused equipment, some of it damaged, was stacked against the wall. Traoré had gone to Bamako to study law after an uncle offered to pay the $2.90 in monthly rent for a single room he now shares with two other young men in a slum on the outskirts of the city.</p>

							<p>Undaunted, AECID was moving ahead with its new <a href="https://ec.europa.eu/europeaid/trust-fund-projects/job-creation-improving-cashew-nut-sector-alleviate-causes-emigration_en" target="_blank">$15 million</a> project, funded through the EU Trust Fund, that aims to build new cashew processing centers across southern Mali and train hundreds of local residents to work at them. Together with Mali’s Ministry of Agriculture, AECID plans to plant thousands of hectares of cashew trees.</p>

							<div class="media-contain quote-right pullquote">
								<p>“If the success of your policy is dependent on being able to defeat both market forces and human nature, your chances of success aren’t good.”</p>
							</div>

							<p>Properly managed, it could revitalize a key sector of the economy and have positive, trickle-down effects on as many as 200,000 people. Whether that happens will depend at least in part on AECID’s ability to learn from the failure of its pilot project. Álvaro told me in February that he was already applying some of these lessons to the new project: Salaries won’t be paid out until operating costs are covered, he said, and he is considering hiring Spanish or Chinese businessmen to manage the new plants. Depending on whom one asks, that will either improve the quality of management or reinforce the notion that foreigners are the main beneficiaries.</p>

							<p>Either way, experts are doubtful that this or any other development project aimed at creating jobs can reverse, or even slow, the tide of emigration. “If the success of your policy is dependent on being able to defeat both market forces and human nature, your chances of success aren’t good,” said Kathleen Newland, a senior fellow and co-founder of the Migration Policy Institute.</p>

							<p>Michael Clemens, an economist at the Center for Global Development in Washington, has studied the interplay between development and migration for years. He has found that development gains, far from keeping young people at home, are associated with increased migration — until a country attains a per capita income of roughly $7,500 (or three times that of Mali). “There’s this idea that development and migration substitute for each other that underlies all of this. That if we can just make a sufficiently successful industrial park in Ethiopia, that people will go work there and migration will end,” Clemens said. “That ignores the many, many ways in which migration and development complement each other.”</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_mal_fp_migration12.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_mal_fp_migration12.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_mal_fp_migration12.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_mal_fp_migration12.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_mal_fp_migration12.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_mal_fp_migration12.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_mal_fp_migration12.jpg" alt="" />
							</noscript>

							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Siaka Koné, the lone security guard at the Kolondiéba plant, makes his rounds of the deserted buildings in July.</p>

							<p>Not only does more income mean people can do more expensive things, like pay a smuggler thousands of dollars to take them to Europe; it typically means more education and bigger aspirations. That’s why Clemens says on average as countries transition from poor to middle-income, they experience a “dramatic rise” in migration. Over the very long term, it is true that development would depress migration as a country transitions to developed status. “But Mali is not going to be a developed country in our lifetime or in the lifetime of our children,” he said. “The reality is that the development of nations is measured in generations.”</p>

							<div class="media-contain quote-right about">
								<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link">
									<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
									<noscript>
										<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" alt="" />
									</noscript>
								</a>
								<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link"><p class="about_lead refer"><strong>The Deported</strong></p></a>
								<p class="refer referBody">Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.</p>
							</div>

							<p>Young people are not given to waiting for improvements measured in generations. In the next three decades, Mali’s population will more than double to roughly 45 million. Across sub-Saharan Africa, according to Gordon Hanson and Craig McIntosh of the University of California-San Diego, some 800 million working-age people will enter the labor force — more than the current population of Europe. This massive demographic bulge is itself proof of development success; infant mortality rates have plummeted across the continent while birth rates have dipped only slightly. But it is also proof that more development aid won’t slow migration, at least not for many years.</p>

							<p>The EU and member states already spend roughly <a href="https://www.nytimes.com/2017/08/28/world/europe/africa-migrants-europe.html" target="_blank">$24 billion</a> on development and other aid in Africa each year, but the exodus of young men continues. Much of the funding disbursed through the EU Trust Fund is “more of the same, but it’s now more explicitly linked to the goal of reducing migration,” said Bram Frouws, the policy and research coordinator at the Danish Refugee Council’s Global Mixed Migration Secretariat. “Our expectations in terms of reducing migration have to be very modest,” he said, especially if corruption and poor governance remain problems in these countries. Frouws pointed to West Africa, where most countries are “relatively stable and growing economically.” Yet, he added, “more and more West Africans seem to be trying to migrate to Europe.”</p>

							<p>From his new home in a corner of Bamako where ambition tends to outpace opportunity, Traoré still thinks about traveling to Europe, though it feels farther away than ever. He and his roommates, a chauffeur and an electrician, share a single mattress on the floor of their one-room flat. Sweaters and trousers hang from pegs on the walls. A coral pink blanket is the only color in the otherwise drab, windowless room. The university is nearly an hour away, across a stagnant stream that doubles as a sewer and along wide, dusty streets crowded with honking scooters and yellow Mercedes-Benz taxis from the 1970s. He can’t always afford the trip, so he misses a lot of classes. If suddenly he found himself with money to spare, though, he knows he wouldn’t waste it on getting to school. <span class="red-box-end"></span></p>

							<p><em>Nichole Sobecki contributed reporting to this story.</em></p>

							<p class="author-bio"><strong>Ty McCormick</strong> (<a href="https://twitter.com/TyMcCormick" target="_blank">@TyMcCormick</a>) is <span class="fp-red" style="font-style: italic;">Foreign Policy</span>’s Africa editor. <strong>Nichole Sobecki</strong> (<a href="https://twitter.com/nicholesobecki" target="_blank">@nicholesobecki</a>) is a photographer based in Nairobi.</p>
							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg"/>
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg" alt="" class="referImg"/>
											</noscript>
										</a>
										<a href="#mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="internal-link read-link"><p class="about_lead refer"><strong>Mali’s Migrant Crackdown</strong></p></a>
										<p class="refer referBody">Europe has been helping fight the country’s jihadis for years. Now it’s turning its sights on human smugglers.</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" alt="" />
											</noscript>
										</a>
										<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link"><p class="about_lead refer"><strong>The Deported</strong></p></a>
										<p class="refer referBody">Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.</p>
									</div>
								</div>
						</div>
					</div>
					<?php endif; ?>
				</article>

			</section>

			<section id="mali-migrant-crackdown-africa-europe-EU-migration-smuggling--intro" class="story sidebar" data-set-marker="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro" data-desktop-next="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro" data-desktop-prev="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro" data-mobile-next="the-deported-mali-africa-europe-EU-deportation-migration-unrest--intro" data-mobile-prev="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro">

				<article>
					<header id="story-3-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/002_mali_sidebar1-2.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_mali_sidebar1-2.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_mali_sidebar1-2.jpg?w=1200 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_mali_sidebar1-2.jpg?w=1500 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_mali_sidebar1-2.jpg?w=1800 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p id="mali-migrant-crackdown-africa-europe-EU-migration-smuggling-dek" style="display:none;">Part I Continues</p>
							<h2>Mali’s Migrant Crackdown</h2>
							<p class="dek">Europe has been helping fight the country’s jihadis for years. Now it’s turning its sights on human smugglers.</p>
							<?php if( $publish_post['mali-migrant-crackdown'] ): ?>
								<p><a href="#mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Tuesday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['mali-migrant-crackdown']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['mali-migrant-crackdown']['facebook'] ?>.</span>
						<span class="share-text share--twitter"><?php echo $social_sharing['mali-migrant-crackdown']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['mali-migrant-crackdown']['image'] ?>" alt="" />
					</header>
					<?php if( $publish_post['mali-migrant-crackdown'] ): ?>
					<div id="mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="content--main">
						<div class="post-header">
							<div id="headerSidebar" class="sidebar-text">
								<h1 class="post-hed">Mali’s Migrant Crackdown</h1>
								<h2 class="post-dek">Europe has been helping fight the country’s jihadis for years. Now it’s turning its sights on human smugglers.</h2>
								<p class="post-author">By Ty McCormick&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Photography by Anthony Fouchard</p>
                                <p class="post-date">Oct. 4, 2017</p>
							</div>
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg" alt="" class="main-image" />
							</noscript>
							<p class="post-header-captions">Buses idle at the main bus station in Bamako, Mali. Thousands of migrants each year board buses like these bound for Gao, from where they will cross the Sahara to Algeria.</p>
							<p class="post-header-captions-mobile-sidebar">Buses idle at the main bus station in Bamako, Mali. Thousands of migrants each year board buses like these bound for Gao, from where they will cross the Sahara to Algeria.</p>
						</div>
						<div class="post_copy mobile-copy" style="padding-bottom: 6em;">
							<p class="post_intro_lead">GAO, Mali — The migrants arrive by coach. Diadie picks them out from the other travelers by their swollen backpacks and their apprehensive looks. Up until this point, most of their journeys’ have been legal. They come from Gambia and Senegal, Guinea and parts of southern Mali, and, as such, they hold passports that permit them visa-free travel within the 15-country regional bloc of the Economic Community of West African States (ECOWAS). The moment they make a deal with Diadie, however, they become illicit human cargo on one of the most dangerous smuggling routes on Earth.</p>

							<div class="media-contain quote-right about">
								<p class="about_lead refer"><strong>ABOUT THIS SERIES</strong></p>
								<p class="refer">Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights.<br /><br />
								<span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
								</noscript>
							</div>

							<p>Diadie, who asked to be identified by only his first name, organizes transport for dozens of Europe-bound migrants each week. Wearing a black leather jacket and a maroon scarf wrapped around his head so that only his eyes and the bridge of his nose are visible, the 30-year-old <em>coxeur</em> — a middleman, or agent, who links migrants and smugglers — says Arab and Tuareg drivers crossing the Sahara to Algeria tell him how many empty seats they have in their Toyota pickup trucks. “If they say, ‘I have 15 places in my truck,’ then I go find 15 migrants to fill the seats.”</p>

							<p>Diadie used to work as a tour guide before jihadis overran northern Mali in 2012 and briefly made Gao their capital. He would take visitors to see the Tomb of Askia, a massive pyramidal structure made of mud and timber where Askia Mohamed, the emperor of medieval Songhai, was interred. Askia built the tomb in 1495 upon his return from a religious pilgrimage to Mecca that took him through Egypt and past the pyramids of Giza. “A migrant of his era,” was how Gaoussou Diawara, a professor of literature and civilization at the University of Bamako, described the emperor.</p>

							<p>A French military intervention dislodged the jihadis from Gao in early 2013, but they continue to carry out regular bombings and assassinations. Neither law and order nor the tourists who once frequented the tomb and other remnants of the Songhai Empire have returned. The only Westerners now in Gao travel in armored vehicles, flitting between blast-proof compounds topped with razor wire.</p>

							<div class="media-contain quote-right pullquote">
								<p>The only Westerners now in Gao travel in armored vehicles, flitting between blast-proof compounds topped with razor wire.</p>
							</div>

							<p>The Malian state has essentially vacated an area the size of Texas, leaving French counterterrorism forces and U.N. peacekeepers, who deployed to Mali in 2013, as the only authorities in the northern part of the country. On the nearly 3,000-mile frontier with Niger, Algeria, and Mauritania, all but a handful of official border posts are abandoned. “It is known that the borders are porous,” said Moussoudou Arby, the director of Mali’s border police, adding that in the north especially, “Everybody knows there is no security.”</p>

							<p>Where the legal economy has collapsed, the smuggling business has flourished. Weapons, narcotics, and migrants — tens of thousands of them each year from impoverished West African nations — pass through Gao on their way across the Sahara. The end of the ECOWAS zone is the Algerian frontier, which marks the beginning of illicit human-smuggling routes that run through the desert oasis of Tamanrasset to Algiers and to the Libyan city of Sebha.</p>

							<p>The International Organization for Migration, which monitors migrant flows, only began gathering data on those transiting through Mali in June 2016, but it estimated that between 30,000 and 40,000 migrants stopped in Gao on their way to Algeria that year. Thousands more passed through Bamako, the Malian capital, en route to Burkina Faso and Niger, which counted more than 400,000 Algeria- and Libya-bound migrants in 2016. A record 181,000 people crossed the Mediterranean Sea to Italy that year. More than 4,500 died trying.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/002_img_2193.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/002_img_2193.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_img_2193.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_img_2193.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_img_2193.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_img_2193.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/002_img_2193.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Diadie (left) with another coxeur he works with in Gao, Mali.</p>

							<p>Europe’s response to the migration crisis has centered on fighting migration at its source, particularly in impoverished and war-torn countries like Mali. In addition to development initiatives aimed at creating jobs, the European Union and member states have rolled out a range of state-building, governance, and security policies designed to keep would-be migrants at home. In neighboring Niger, the EU gave the government hundreds of millions of dollars in direct budget support, as well as vehicles, training, and equipment, as part of a deal to shut down human-smuggling routes. The country passed an anti-trafficking law in 2015 that criminalized the transport of migrants across the Sahara — a law that critics say violates ECOWAS’s freedom of movement protocol — and the army started arresting smugglers and impounding their trucks.</p>

							<p>Mali is too unstable and its security services too weak for such an arrangement to work right now. European military trainers, who began work in 2013, are “retraining a Malian army that just lost a war,” said Brig. Gen. Peter Devogelaere, then the commander of the EU training mission in Mali, said in February. “So they were starting from a very low level.”</p>

							<p>But in private European officials acknowledge that something like the Niger deal is the ultimate goal in Mali, where ambitious EU-funded police and military training efforts are seen as essential to fight terrorism and, increasingly, migration. Once the northern half of the country is stabilized, the hope is that Malian authorities will begin clamping down on smugglers. In the meantime, France is pushing for the creation of a 5,000-strong West African armed force — launched in July but not yet fully funded — that will fight terrorists as well as traffickers.</p>

							<p>Albrecht Conze, a veteran of the U.N. mission in Kosovo who until recently headed the EU police-training mission in Mali, said Europe’s heightened interest in Mali and the broader Sahel region reminded him of the massive international buildup in the Balkans during the wars of the 1990s. “For decades, this part of Africa was left to the French. No one else cared,” he said. But a migration-inspired “pivot to Africa” has turned it into “one of the most extensively covered post-crisis, post-conflict theaters in Africa with an enormous international presence.”</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/003_img_1869.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/003_img_1869.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/003_img_1869.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/003_img_1869.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/003_img_1869.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/003_img_1869.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/003_img_1869.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">An EU military trainer drills with a Malian soldier at the European Union’s military training facility in Mali.</p>

							<p>Malian smugglers know that a crackdown is coming. “We are watching what is happening in Niger with a lot of attention,” Diadie said. Already, his business has changed in important ways because of what’s happening over the border. Fewer migrants are taking the route through Burkina Faso to Niger because they have heard the route is “closed,” he said. Instead, more and more of them choose to travel through Gao directly to Algeria, a shift confirmed by researchers and NGO workers focused on migration.</p>

							<p>For now, Gao’s authorities are leaving smugglers alone. The police make occasional patrols, often alongside U.N. peacekeepers, but their goal is to project normalcy in a town threatened by jihadis, not to deter crime. Lamissa Berthé, the director of prisons in Gao, said no smugglers were behind bars. “Most are common criminals, small fish,” he said of the incarcerated population. Diadie would qualify as a small fish in the smuggling world, but he doesn’t worry about the law. “You can always bribe the police,” he said. “Five hundred CFA [about $0.85] and there is no problem.” <span class="red-box-end"></span></p>

							<p class="author-bio"><strong>Ty McCormick</strong> (<a href="https://twitter.com/tymccormick" target="_blank">@TyMcCormick</a>) is <span class="fp-red" style="font-style: italic;">Foreign Policy</span>’s Africa editor. <strong>Anthony Fouchard</strong> (<a href="https://twitter.com/anthonyfouchard" target="_blank">@AnthonyFouchard</a>) is a journalist and photographer based in Mali.</p>

							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_mal_fp_migration69.jpg" class="main-image" alt="" />
										</noscript></a>
										<a href="#part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration" class="internal-link read-link"><p class="about_lead refer"><strong>The Paradox of Prosperity</strong></p></a>
										<p class="refer referBody">Europe is spending billions of dollars to jump-start Africa’s poorest economies. But that may just accelerate the exodus.</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" alt="" />
										</noscript></a>
										<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link"><p class="about_lead refer"><strong>The Deported</strong></p></a>
										<p class="refer referBody">Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.</p>
									</div>
								</div>
						</div>
					</div>
					<?php endif; ?>
				</article>

			</section>

			<section id="the-deported-mali-africa-europe-EU-deportation-migration-unrest--intro" class="sidebar sidebar--second" data-set-marker="part-1-the-paradox-of-prosperity-mali-africa-europe-EU-migration--intro" data-desktop-next="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro" data-desktop-prev="mali-migrant-crackdown-africa-europe-EU-migration-smuggling--intro" data-mobile-next="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro" data-mobile-prev="mali-migrant-crackdown-africa-europe-EU-migration-smuggling--intro">

				<article>
					<header id="story-4-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/003_mali_sidebar2a_v2.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/003_mali_sidebar2a_v2.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/003_mali_sidebar2a_v2.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/003_mali_sidebar2a_v2.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/003_mali_sidebar2a_v2.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p id="the-deported-mali-africa-europe-EU-deportation-migration-unrest-dek" style="display:none;">The Deported</p>
							<h2>The Deported</h2>
							<p class="dek">Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.</p>
							<?php if( $publish_post['the-deported'] ): ?>
								<p><a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Tuesday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['the-deported']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['the-deported']['facebook'] ?>.</span>
						<span class="share-text share--twitter"><?php echo $social_sharing['the-deported']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['the-deported']['image'] ?>" alt="" />
					</header>
					<?php if( $publish_post['the-deported'] ): ?>
					<div id="the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="content--main">
						<div class="post-header">
							<div id="headerSidebar" class="sidebar-text">
								<h1 class="post-hed">The Deported</h1>
								<h2 class="post-dek">Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.</h2>
								<p class="post-author">By Ty McCormick&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Photograph by Sébastien Rieussec</p>
                                <p class="post-date">Oct. 4, 2017</p>
							</div>
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" alt="" />
							</noscript>
							<p class="post-header-captions">Amadou Coulibaly outside his office at the Malian Association for Deportees in Bamako, Mali.</p>
							<p class="post-header-captions-mobile-sidebar">Amadou Coulibaly outside his office at the Malian Association for Deportees in Bamako, Mali.</p>
						</div>
						<div class="post_copy mobile-copy" style="padding-bottom: 6em;">
							<p class="post_intro_lead">BAMAKO, Mali — It was in Paris, but it wasn’t glamorous work.</p>

							<p>Amadou Coulibaly spent his nights swabbing a mop over acres of dimly lit office space as France’s corporate workforce slept. Each dawn, he bedded down with a dozen other Malian immigrants, who rested in shifts in a barren, one-room flat they shared in Paris’s 15th arrondissement. But Coulibaly slept soundly in the surety of his purpose.</p>

							<p>Born to a poor family in Bamako, Mali’s congested riverside capital, he dropped out of university in order to support his aging parents. He watched as his wealthier, politically connected classmates graduated into plush government posts. They drove cars and worked in air-conditioned offices while he scratched out a living hawking kola nuts by the side of the road. By the time he had children of his own, all paths to prosperity seemed to have closed but one: the one that led abroad.</p>

							<div class="media-contain quote-right about">
								<p class="about_lead refer"><strong>ABOUT THIS SERIES</strong></p>
								<p class="refer">Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights.<br /><br />
								<span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
								</noscript>
							</div>

							<p>Almost a quarter of Mali’s roughly 18 million nationals are thought to live outside the country, mainly in Europe and other African countries. An estimated 120,000 live in France, sending back remittances that exceed France’s development aid to its former colonial possession, according to a favored talking point among Malian officials.</p>

							<p>In France, Coulibaly earned about $600 a month, sending half of it home to his wife and children. It put food on the table and paid for school fees. “I didn’t want my children to have to stop their education like I did. That’s the reason I left,” said Coulibaly, whose unwrinkled complexion belies his 59 years. His children now have desks in air-conditioned offices of their own. One daughter is an accountant, and one is a doctor; he has three younger children still in school.</p>

							<p>Coulibaly counts himself lucky to have made it to France but resents the manner in which he left it. One day in 2007, he was on his way to the train station when a police officer asked for his papers. Having applied and been rejected for a resident card, he was whisked away to detention. Thirty-two days later, he was put on a flight to Bamako, one of 5,947 Malians whose expulsion from Europe between 2002 and 2013 offered a preview of the coming immigration crackdown.</p>

							<p>As Europe grapples with a refugee crisis that saw the number of asylum-seekers jump 122 percent in 2015 to 1.3 million (the previous high was 700,000 in 1992, the year after the Soviet Union collapsed), it has sought to accelerate the deportation of failed asylum-seekers and migrants who arrive without proper documentation.</p>

							<p>The European Commission, the EU’s executive body, has <a href="https://ec.europa.eu/anti-trafficking/sites/antitrafficking/files/communication_on_the_european_agenda_on_migration_en.pdf" target="_blank">recommended</a> using “all leverage and incentives” at the EU’s disposal to “ensure that third countries fulfil their international obligation to take back their own nationals residing irregularly in Europe.” Less than 40 percent of failed asylum-seekers were actually deported in 2013, the commission noted in its 2015 “<a href="https://ec.europa.eu/home-affairs/what-we-do/policies/european-agenda-migration_en" target="_blank">European Agenda on Migration</a>.”</p>

							<p>As part of a broader makeover of its immigration policies, which includes spending nearly $2 billion on development and stabilization programs in Africa aimed at countering the “root causes” of migration, the EU is leaning hard on countries to take their citizens back. In 2016, the bloc <a href="https://www.yahoo.com/news/eu-border-agency-expects-same-number-migrants-via-125352794.html" target="_blank">deported</a> more than 175,000 people, according to the EU border agency Frontex. But in places like Mali, where only a tiny percentage of young people can expect to find work in the formal sector, and where migration is often seen as a rite of passage, the pushback has been fierce. “You will have revolution and destruction if you start sending people back,” said Coulibaly, who is now living in Bamako with his family.</p>

							<div class="media-contain quote-right pullquote">
								<p>“You will have revolution and destruction if you start sending people back.”</p>
							</div>

							<p>That is nearly what the Malian government got in December, when it signed a <a href="https://www.reuters.com/article/us-europe-migrants-eu-mali-idUSKBN141158" target="_blank">joint communiqué</a> pledging to work with the EU to expedite the return of migrants living there illegally. Protests rocked the capital, and the government was forced to deny that it had ever agreed to help European countries identify and deport Malian nationals. (Baréma Bocoum, a special assistant to Mali’s minister of foreign affairs, declined to comment on the status of that agreement, citing “controversy” and the “sensitivity” of the subject.)</p>

							<p>“The fact that the government has denied the EU deal shows how important migration is to the economy,” said Sabane Touré, an analyst at the Bamako-based Coalition for African Debt and Development Alternatives. “If you take the money from migration out of the economy, it will be nothing.”</p>

							<p>European officials maintain that Mali is already obligated under international law to take back migrants and failed asylum-seekers. The December communiqué was just aimed at speeding up the process, they say. The Malian government has been reluctant to help European governments identify its nationals — a requirement for their legal return — and often dragged its feet on issuing them travel documents. And when European countries have tried to work around this problem by issuing their own travel documents, diplomatic spates have ensued. In January, the Malian government returned two African migrants deported from France, claiming that it could not verify they were Malians.</p>

							<p>Advocates of so-called “take-back” agreements have <a href="http://www.esiweb.org/pdf/ESI%20-%20Rome%20Plan%20for%20Mediterranean%20-%20Berlin%2019%20June.pdf" target="_blank">argued</a> that they could be sweetened with promises of expanded channels for legal migration. But European governments have shown little willingness to take in additional African workers at a time when populist and nativist sentiments are already on the rise. And there is no guarantee that giving African governments a set number of European work visas to distribute will be enough to offset the overwhelming public opposition to deportation agreements.</p>

							<p>In Mali, migration is as much a cultural issue as an economic one. The country has a proud tradition of venturing abroad that dates back to the Middle Ages, when caravan traders carrying gold and salt turned cities like Gao and Timbuktu into storied commercial hubs. Those same caravan routes are now used by smugglers; remittances are the new gold. Venturing abroad in many Malian communities, particularly in the south, is seen as an honor verging on an obligation.</p>

							<p>Even the criminal syndicates, some of them with links to al Qaeda, that ferry migrants north are viewed as a necessary evil. “The <em>passeur</em> who helped me, was he a bad guy?” said Coulibaly, using the preferred term for smuggler in Mali. “I was able to send my children to school because of him. My daughter went to medical school.”</p>

							<p>Coulibaly is now the vice president of an association that supports Malian migrants who have been expelled from Europe. He helps recent deportees get back on their feet and advocates for migrants’ rights. He also lobbies the Malian government not to cooperate with European governments seeking to expel migrant workers like him. In his view, no amount of legal migration or development aid from Europe could ever make up for the remittances that come in from Malians abroad, many of whom migrated through informal channels.</p>

							<p>“One migrant can support more than 20 people at home,” he said. “They are the ones paying for homes, for schools, for hospitals. Aid from Europe can’t pay for all this. Without migration, there will be no development.” <span class="red-box-end"></span></p>

							<p class="author-bio"><strong>Ty McCormick</strong> (<a href="https://twitter.com/tymccormick" target="_blank">@TyMcCormick</a>) is <span class="fp-red">Foreign Policy</span>’s Africa editor. <strong>Sébastien Rieussec</strong> (<a href="https://twitter.com/srieussec" target="_blank">@srieussec</a>) is a videojournalist and photographer who’s been based in Bamako for 10 years.</p>

							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg"/>
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_img_1757.jpg" alt="" class="referImg"/>
											</noscript>
										</a>
										<a href="#mali-migrant-crackdown-africa-europe-EU-migration-smuggling" class="internal-link read-link"><p class="about_lead refer"><strong>Mali’s Migrant Crackdown</strong></p></a>
										<p class="refer referBody">Human smuggling has flourished in the wake of a brief jihadi takeover of northern Mali in 2012. Europe is helping restore law and order &mdash; in hopes that the government will one day turn back migrants.</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg" alt="" />
										</noscript></a>
										<a href="/part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="about_lead refer"><strong>Highway Through Hell</strong></p></a>
										<p class="refer referBody">The human-smuggling route across the Sahara may have been the deadliest on Earth. Then the EU paid Niger’s army to shut it down — and made it even more treacherous. (COMING WEDNESDAY)</p>
									</div>
								</div>
						</div>
					</div>
					<?php endif; ?>
				</article>

			</section>

			<section id="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro" class="story" data-set-marker="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro" data-desktop-next="my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration--intro" data-desktop-prev="mali-migrant-crackdown-africa-europe-EU-migration-smuggling--intro" data-mobile-next="my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration--intro" data-mobile-prev="the-deported-mali-africa-europe-EU-deportation-migration-unrest--intro">

				<article>
					<header id="story-5-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature1a.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature1a.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature1a.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature1a.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_niger_feature1a.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p id="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration-dek" style="display:none;">Part II: Niger</p>
							<p class="labels">Part II</p>
							<h1>Highway Through Hell</h1>
							<p class="dek">The human-smuggling route across the Sahara may have been the deadliest on Earth. Then the EU paid Niger’s army to shut it down — and made it even more treacherous.</p>
							<?php if( $publish_post['part-2-highway-through-hell'] ): ?>
								<p><a href="#part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Wednesday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['part-2-highway-through-hell']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['part-2-highway-through-hell']['facebook'] ?>.</span>
						<span class="share-text share--twitter"><?php echo $social_sharing['part-2-highway-through-hell']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['part-2-highway-through-hell']['image'] ?>" alt="" />
					</header>

					<div id="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="content--main">
						<div class="post-header">
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg" alt="" class="main-image" />
							</noscript>
							<div id="header4" class="post-header-text">
								<p class="post-header-captions-mobile">Migrants pile onto the back of a pickup truck bound for Libya on the outskirts of Agadez, Niger. The trip across the Sahara, where temperatures can soar above 120 degrees Fahrenheit, typically takes around three days.</p>
								<p class="mobile-post-marker"><span style="font-weight:900;">Europe Slams Its Gates</span><br>Part II</p>
								<h1 class="post-hed">Highway Through Hell</h1>
								<h2 class="post-dek">The human-smuggling route across the Sahara may have been the deadliest on Earth. Then the EU paid Niger’s army to shut it down — and made it even more treacherous.</h2>
							</div>
							<p class="post-header-captions">Migrants pile onto the back of a pickup truck bound for Libya on the outskirts of Agadez, Niger. The trip across the Sahara, where temperatures can soar above 120 degrees Fahrenheit, typically takes around three days.</p>
						</div>
						<div class="post_copy mobile-copy">
							<p class="post-author" style="margin-bottom: 0.83em;">By Ty McCormick&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Photography by Nichole Sobecki</p>
                            <p class="post-date">Oct. 4, 2017</p>
							<p class="post_intro_lead">AGADEZ, Niger — Ali leaned into the accelerator and squinted into the darkness. It was 3 a.m. on the southern edge of the Sahara, still another three days’ drive through dizzying heat and shifting sand dunes to get to the border with Libya. He was doing 60 miles per hour with the headlights off, maneuvering the black Toyota Hilux around steep ravines and past rocky outcroppings by starlight in order to avoid detection. In the back, 25 Europe-bound migrants, all of them from Nigeria, clung to each other and to a handful of wooden poles that were wedged into the open bed of the truck.</p>

							<div class="media-contain quote-right about">
								<p class="about_lead refer"><strong>ABOUT THIS SERIES</strong></p>
								<p class="refer">Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights.<br /><br />
								<span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
								</noscript>
							</div>

							<p>A solemn 33-year-old with stained teeth and heavy bags under his eyes, Ali had made the perilous trip to Libya more than 100 times before — but never by this route. A few months prior, after Niger’s government struck a deal with the European Union to shut down one of the world’s most heavily trafficked human-smuggling routes, the army had begun intercepting convoys of migrants. The soldiers arrested the drivers and impounded their trucks. Sometimes, Ali and other drivers said, they opened fire on vehicles that tried to flee, aiming for tires but hitting people as well. So the drivers stopped using the main road across the desert, a well-worn national route that runs more than 600 miles to the Libyan border, and forged their own paths across the vast and uninhabited Sahara.</p>

							<p>Each time he crested a dune, Ali imagined the army lying in wait. He had long dreaded desert bandits, notorious for carjacking travelers along the old national route and then leaving them to die of thirst or exposure. Now he imagined new ways to suffer at the hands of a military that had once profited from human smuggling by levying an unofficial tax on each vehicle but which had recently begun to hunt drivers like Ali with the same urgency that it pursued al Qaeda militants.</p>

                            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/344654022%3Fsecret_token%3Ds-p1EaP&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Listen to this story from <span class="fp-red">Foreign Policy</span>'s series, "Europe Slams Its Gates," and other FP content, as well as features from a range of top publications: Download the <a href="https://goo.gl/LcAf1c" target="_blank">AUDM</a> app for your iPhone.</p>

							<p>Ali’s mind was running wild with terrifying possibilities of what he might encounter in the dark when he felt the ground fall away and the vehicle pitch to the side. For a moment, he was airborne. Then the truck hit the ground with crushing force, careening to a halt on its side at the bottom of a gully he had missed in the darkness. He heard the groans before he wriggled himself free from the wreckage. Then he saw the trail of people thrown from the truck at odd intervals behind him. Two of them lay prostrate under a 50-gallon fuel tank. Their bodies were still.</p>

							<p>Shaken but unhurt, Ali pulled out his Thuraya satellite phone and called a friend in Agadez, the age-old caravan city in Niger that has become inextricably linked with the modern migrant trade. He gave the friend his coordinates so that a search party could find them and then fished a trowel out of the truck. As the injured migrants looked on, he buried the two dead Nigerians in a shallow grave in the sand. “I don’t remember their names,” Ali said. “There are too many who come and go. I can’t keep them in my head.”</p>
						</div>

						<div class="post-module two-images">
							<div class="post-image-left">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_adadez25.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_adadez25.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_adadez25.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_adadez25.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_adadez25.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_adadez25.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_adadez25.jpg" alt="" />
								</noscript>
								<p class="post-image-caption">Trucks carrying migrants leave Agadez headed for the open desert.</p>
							</div>
							<div class="post-image-right">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_adadez17.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_adadez17.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_adadez17.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_adadez17.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_adadez17.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_adadez17.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_adadez17.jpg" alt="" />
								</noscript>
								<p class="post-image-caption">Men pray before they start the treacherous journey across the desert from Agadez to Libya.</p>
							</div>
						</div>

						<div class="post_copy" style="position:relative;">
							<p class="post_intro_lead">Until a little more than a year ago, Agadez was the epicenter of massive waves of migration from Africa that began in 2011, when the fall of Libya’s dictatorship opened a clear path through weak and failing states to Europe’s southern border. In 2016, a record 181,000 people arrived on Italy’s Mediterranean coast. Most of them were sub-Saharan Africans fleeing poverty, war, and oppression. More than half of them likely traveled through Agadez on their way.</p>

							<p>Comprising a dense warren of mud-brick compounds that bear the same shade of cocoa brown as the surrounding Sahara, Agadez has been a place of exchange for more than 600 years. Like Timbuktu in neighboring Mali, it was a center of Islamic learning in the Middle Ages and an important transit point for caravan traders. But whereas the cargo of old was gold, salt, and slaves, now it is weapons, narcotics, and migrants. The trade touches almost everyone in the city, whether they are directly involved or living off the service industries that have developed around it. Grocers, hoteliers, the police — all of them are to some extent dependent on this illicit flow of people and goods. Before the crackdown began, the Nigerien army openly escorted the smugglers’ convoys into the desert in exchange for a share of the profits. Sometimes hundreds of Toyota Hiluxes loaded down with young men made the crossing in a single day.</p>

							<p>In its heyday as a smugglers’ paradise, from 2013 to 2016, Agadez was crawling with profiteers who had money to burn. They would flock to the bars and nightclubs, Tuaregs and Toubous in flowing traditional <em>jalabias</em> mixing with Nigeriens of other ethnicities in high-tops and skinny jeans, dancing and draining $4 cans of Heineken until the call to prayer echoed through the city at dawn. But when I visited in May, the city no longer felt like a freewheeling frontier boomtown. Market stalls sat empty in the 110-degree heat while drivers lounged all day in their yellow three-wheeled taxis without scoring a fare. The nightclub at the Hotel de la Paix, a garish modern fortress rumored to have been financed by Muammar al-Qaddafi, still opened each night around midnight, the purr of a diesel generator audible over the rollicking pulse of Tuareg music. But every time I went in, the place was mostly empty.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_adadez65.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_adadez65.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_adadez65.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_adadez65.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_adadez65.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_adadez65.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_adadez65.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">The city of Agadez, located at the gateway to the Sahara in northern Niger, has been a place of exchange since the Middle Ages. Now it is at the heart of the human-smuggling trade.</p>

							<p>The collapse of Agadez’s economy was just one of the unintended consequences of Europe’s bid to halt the flood of unwanted migrants and refugees toward its shores. In 2015, as the European Union was struggling to cope with what would amount to a record 1.3 million asylum-seekers that year — a 122 percent increase from 2014 — EU officials held a series of emergency talks with African leaders. In November of that year, they announced a $1.9 billion EU Emergency Trust Fund for Africa designed to combat the root causes of migration, including poverty and conflict. The EU also struck bilateral agreements with several African countries that migrants depart from and travel through on their way to Europe, aiming to strengthen border controls and disrupt smuggling networks. It designated Niger a priority country as part of a partnership framework agreement it made with the government in 2016, paving the way for a pledge of $633 million in exchange for stopping the flow of migrants through its borders.</p>

							<div class="media-contain quote-right pullquote">
								<p>The migration crisis has presented Niger with a similar opportunity to line its coffers, and it has happily adopted Europe’s view of human smugglers as a threat to regional stability.</p>
							</div>

							<p>In addition to funding development projects designed to wean the economy off trafficking, the EU, along with some of its member states, delivered training and equipment to Niger’s security forces to help them clamp down on smugglers. Soon the same army that once escorted smugglers to Libya was putting them behind bars to be sentenced under a new anti-trafficking law passed with the encouragement of European governments.</p>

							<p>From behind a broad wooden desk stacked with files, Yahaya Godi, then the secretary-general for the governorate of Agadez, explained his government’s abrupt change of heart. “We must fight against migration and human trafficking because it has many consequences,” he told me. “For instance, there is insecurity. It may also be connected to terrorism or the traffic in weapons.”</p>

							<p>Surrounded on all sides by conflict and instability — the country shares borders with Nigeria, Mali, and Libya, all of which harbor significant terrorist threats — Niger has positioned itself as a key counterterrorism partner for Western nations, including the United States and France, both of which have military bases in the country. As a result, it has received hundreds of millions of dollars in military assistance from those nations. The migration crisis has presented Niger with a similar opportunity to line its coffers, and it has happily adopted Europe’s view of human smugglers as a threat to regional stability.</p>

						</div>

						<div class="post-module two-images">
							<div class="post-image-left">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_adadez78.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_adadez78.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_adadez78.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_adadez78.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_adadez78.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_adadez78.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_adadez78.jpg" alt="" />
								</noscript>
								<p class="post-image-caption">A police truck passes through a busy intersection in Agadez at dusk.</p>
							</div>
							<div class="post-image-right">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_adadez84.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_adadez84.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_adadez84.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_adadez84.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_adadez84.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_adadez84.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_adadez84.jpg" alt="" />
								</noscript>
								<p class="post-image-caption">Men and women dance late into the night at a club in Agadez playing live Hausa music. Niger’s EU-funded crackdown on migration has hit the economy of Agadez hard, slowing the city’s famously fast-paced nightlife down considerably.</p>
							</div>
						</div>

						<div class="post_copy">
							<p>“It’s very impressive how they fight for security,” said Ambassador Raul Mateus Paula, the head of the EU delegation in Niger, when I went to see him in Niamey, the capital. “This is very, very important because they are in the middle of problems: Libya, Mali, and Nigeria. So they have to increase dramatically their security expenditures. That’s one of the reasons why the European Union is making a huge effort of budget support.”</p>

							<p>Paula seemed pleased with the government’s efforts to halt migration so far. He pointed to the dramatic drop in migrants recorded transiting through Niger en route to Libya and Algeria, key jumping-off points to Europe, as evidence that the partnership is working. Between February and May 2016, the International Organization for Migration (IOM), which has received funding from the EU to open transit centers where migrants are encouraged to return home, recorded 116,347 “outgoing” migrants in Niger. During the same period this year, it recorded less than a quarter of that number. In press releases, the EU has touted the number of smugglers arrested and trucks impounded by authorities. “I think that they made very, very important reforms,” Paula said. “And I think we have to keep working with them, support them, to fight terrorism [and] traffickers.”</p>

							<p>The actual impact of Europe’s intervention in Niger is less clear. Since the crackdown began, smugglers have mostly stopped passing through established outposts and way stations, including those where IOM monitors the flow of migrants. This raises the possibility that the organization is underestimating the number of migrants still passing through Niger, perhaps by a significant margin. That possibility seems even more likely in light of the data on migrants who actually make it across the Mediterranean Sea to Italy. As of Sept. 5, IOM reported that nearly 100,000 migrants had arrived in Italy this year from North Africa, more than half of them originally from West Africa, meaning that it’s likely they passed through Niger on their way. An estimated 400,000 additional migrants are currently stranded in Libya, caged in squalid detention facilities and prevented from making the dangerous sea voyage by militias in the pay of European nations.</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_adadez01.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_adadez01.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_adadez01.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_adadez01.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_adadez01.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_adadez01.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload post-module" style="max-height: none; margin-bottom: 0;" />
						<noscript>
							<img src="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_adadez01.jpg" alt="" class="post-module" style="max-height: none; margin-bottom: 0;" />
						</noscript>
						<p class="post-image-caption">Migrant laborers crowd onto the back of an old Mercedes-Benz truck bound for gold mines in Niger’s far north.</p>

						<div class="post_copy">
							<p class="post_intro_lead">What is clear is that Niger’s EU-funded crackdown has heightened the risks for smugglers, as well as for migrants. One of those who paid a price for defying the authorities was Garba Hamani, a <em>coxeur</em>, or connection man, who was arrested last year as he loaded 49 migrants into trucks. They were eventually released and taken to the IOM transit center, but Hamani spent nine months and 20 days behind bars. He said the jail in Agadez was filled with people connected to the migrant trade — smugglers, drivers, and coxeurs like him. But the smuggling business hasn’t stopped; it’s just been driven deeper underground. “You cannot stop this thing. If the government stops people here, they will just go another way,” he said.</p>

							<div class="media-contain quote-right about">
								<a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg" alt="" />
								</noscript></a>
								<a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="about_lead refer"><strong>Slideshow: My Smuggler, My Savior</strong></p></a>
								<p class="refer referBody">They’re migrants’ only chance of making it safely across the Sahara. They’re also outlaws engaged in a deadly game of cat and mouse with Niger’s military.</p>
							</div>

							<p>The new routes are both longer and more dangerous, according to nearly a dozen drivers I interviewed in Agadez. Some pass through mountainous regions outside the city before crossing vast stretches of desert. Some hug the border with Chad. One area where many of the new routes converge is in a desolate region some 20 miles outside of Dao Timmi, an old military installation in the far north of the country. Here, the trucks slow to a crawl and pass single file through a minefield that dates back to an uprising by ethnic Toubous in the 1990s. Used for years by weapons and drug smugglers because authorities stayed away, the route is now commonly taken by migrants. “They made it a crime, so now it follows the criminal routes,” Hamani said.</p>

							<p>Ali, who like most of the smugglers I spoke with asked to be identified by only his first name, started taking the road through the minefield soon after the crackdown started last year, a few months before his deadly nighttime crash. So did Laminou, a muscle-bound 25-year-old with short dreadlocks. Laminou deals in cars, specifically stolen cars from Libya that he smuggles in without papers. One day, he came upon a nightmarish scene: the obliterated remains of a pickup truck surrounded by the dead bodies of multiple migrants. “We couldn’t tell them apart. It’s one man’s leg, one man’s arm — all black,” he said. He and another driver did their best to bury the remains. Then they prayed together and set off again in their trucks.</p>

							<p>No one knows how many migrants have died in the desert. Trucks get lost, break down, or are attacked by bandits all the time. Often, nobody finds out until another driver happens upon the human remains. “We know that many people are dying in the Mediterranean. But many are dying in the desert as well, and we have not many statistics,” Paula said.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_adadez42.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_adadez42.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_adadez42.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_adadez42.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_adadez42.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_adadez42.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_adadez42.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption">Sheriff Sonko sits inside the migrant ghetto in Agadez where he has been stranded for the last eight months. He left Gambia without telling his parents so they couldn’t try to talk him out of making the dangerous journey to Europe, but he ran out of money in Niger and is waiting for a family member to send more so that he can continue on to Libya.</p>

							<p>In addition to being more dangerous, the new routes are also more expensive. Where it once cost around $300 to travel to the next staging post in Libya from Agadez, it now costs more than double that amount. As a result, many more migrants are finding themselves stuck in the squalid compounds known as “ghettos” that smugglers have set up in secret locations throughout the city. This was the predicament Sheriff Sonko had been facing for the past nine months. A baby-faced 21-year-old, he left Gambia without telling his parents so they couldn’t try to talk him out of making the journey. But he hadn’t counted on the price of crossing the Sahara to skyrocket overnight. “If my parents don’t pay, I won’t leave here,” he told me.</p>

							<div class="media-contain quote-right pullquote">
								<p>“We know that many people are dying in the Mediterranean. But many are dying in the desert as well, and we have not many statistics.”</p>
							</div>

							<p>Increasingly raided by the authorities, who arrest the smugglers and turn the migrants over to IOM, the ghettos are getting smaller, and they are constantly being moved so they won’t be discovered. Gaining access to the one where Sonko was living took days of negotiation because the smugglers feared I would be followed or would otherwise inadvertently reveal its location. The day I visited the half-finished compound in a largely abandoned neighborhood on the farthest margins of the city, just four other migrants besides Sonko were there — two from Cameroon and two from Guinea. A group of 29 West Africans had departed for Libya the night before. The structure itself was crumbling and covered with a thick dusting of sand. The dirt floors were bare except for a few empty water bottles, plastic bags, and a broken sandal — the detritus of an unknown number of previous inhabitants. On the walls, migrants had scribbled phone numbers, presumably of family members, drivers, and coxeurs. In one corner, someone had left a message in block letters: “The road of success never smooth.”</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_fp_adadez09.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_fp_adadez09.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_fp_adadez09.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_fp_adadez09.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_fp_adadez09.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_fp_adadez09.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload post-module" style="max-height: none; margin-bottom: 0;" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/009_ns_fp_adadez09.jpg" alt="" class="post-module" style="max-height: none; margin-bottom: 0;" />
							</noscript>
						<p class="post-image-caption">Migrant laborers on board a truck bound for the gold mines in Niger’s far north.</p>

						<div class="post_copy">
							<p class="post_intro_lead">New routes pose new risks for those who attempt to ply them. But just as dangerous is the climate of fear that has settled over the Sahara in the wake of the crackdown. Ali blames himself for the deaths of the two migrants killed in the crash. But he also feels resentment toward the EU for having forced him to drive with his headlights off. “When they arrest you, that’s not a law coming from here,” Ali said. “That’s a law coming from Europe.”</p>

							<p>When faced with the choice between ensuring their own freedom and saving their human cargo, many drivers choose freedom. Sometimes that means leaving migrants behind in the middle of the desert and speeding off to avoid a military patrol. According to Azaoua Mahaman, an IOM official based in Agadez, more and more migrants are being abandoned in this way. Since the beginning of the year, he said in May, IOM had worked with Nigerien authorities to facilitate nearly a dozen rescue operations. “The main reason we see abandoned migrants is because of the patrols,” he told me. “[The smugglers] are afraid of going to prison, so they drop the migrants and flee.”</p>

							<p>This is hardly an irrational response. Unverified reports that the military has opened fire on migrant vehicles have circulated widely. Three different drivers told me that they knew of such incidents, though none had been present when they occurred.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_fp_adadez12.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_fp_adadez12.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_fp_adadez12.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_fp_adadez12.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_fp_adadez12.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_fp_adadez12.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/010_ns_fp_adadez12.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption">Migrants prepare to make the dangerous three-day journey from Agadez to Libya in the bed of a Toyota pickup truck.</p>

							<p>One migrant was there when soldiers lit up a vehicle carrying two dozen passengers: In April, a slender 21-year-old Nigerian named Yinka was traveling through the desert in the back of a Hilux when suddenly gunshots rang out. Bullets shredded the tires beneath her and punched through the side of the vehicle. One hit her friend in the stomach, and she doubled over. Auntie Biola, as the six other women traveling together from Nigeria’s Oyo state called her, bled to death as Nigerien soldiers looked on.</p>

							<p>The driver fled the scene, and the migrants were all taken into custody. But first, the soldiers, who Yinka said were wearing uniforms, beat them all and raped the six surviving women. She said they were beaten and raped again when they arrived at the police station in Madama, one of the last settlements before the Libyan frontier. Because the other survivors of this ordeal had all been repatriated to Nigeria by the time I met Yinka in the IOM transit center in Agadez, I was unable to verify her claims. But her account was consistent with testimony from other migrants at the center and with reports by rights groups on abuses, including rapes, committed by the Nigerien military as recently as 2007. Niger’s military and its ministries of defense and interior did not respond to written requests for comment; Paula, the EU ambassador, told me that he was not aware of any reports of abuse. “The traffickers,” he said, “are the real criminals.”</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/011_ns_fp_adadez08.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/011_ns_fp_adadez08.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/011_ns_fp_adadez08.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/011_ns_fp_adadez08.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/011_ns_fp_adadez08.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/011_ns_fp_adadez08.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload post-module" style="max-height: none; margin-bottom: 0;" />
						<noscript>
							<img src="https://foreignpolicymag.files.wordpress.com/2017/09/011_ns_fp_adadez08.jpg" alt="" class="post-module" style="max-height: none; margin-bottom: 0;" />
						</noscript>
						<p class="post-image-caption">Migrant laborers climb onto the back of a truck bound for gold mines in the far north of the country.</p>

						<div class="post_copy" style="padding-bottom: 6em;">
							<p class="post_intro_lead">Most Nigeriens would disagree. Smugglers — known as <em>passeurs</em>, or “ferrymen” — are widely regarded as providing a vital service. (Migrants who send home remittances are seen as heroes in this part of the world.) Still, passeurs are often involved in other forms of criminal activity — weapons and drugs, for instance — and now many of them are out of work. The crackdown hasn’t stopped the flow of migrants, but it has diverted much of the human traffic away from Agadez and pushed most of the profits toward smugglers with the highest appetite for risk. For those who are still making the trip, the EU has laid out a feast. For everyone else, it’s famine.</p>

							<div class="media-contain quote-right pullquote">
								<p>“We are very angry with the EU because they promised to help us. We even declared that we stopped the job.”</p>
							</div>

							<p>“Today, [illegal migration] generates more money than before,” Rhissa Feltou, the mayor of Agadez, told me. But the profits go to “small mafia groups” instead of to a broad cross-section of society as they did before. The new policy, while necessary in his view, means that Agadez will suffer because its residents have historically been dependent on smuggling.</p>

							<p>The EU has pledged to fund job trainings and other development projects to help former smugglers transition to new careers. But the crackdown commenced more than a year ago, and former drivers, coxeurs, and ghetto owners all said in May that they had yet to receive any assistance. (The EU said the programs were on track and that the job trainings would begin soon.)</p>

							<p>“We are very angry with the EU because they promised to help us. We even declared that we stopped the job,” said Mohamed, a lean, weather-beaten man in his early 40s who used to run a lucrative migrant ghetto out of his home. “But the promises have not been met. They have destroyed the life of Agadez.”</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/012_ns_fp_adadez55.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/012_ns_fp_adadez55.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/012_ns_fp_adadez55.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/012_ns_fp_adadez55.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/012_ns_fp_adadez55.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/012_ns_fp_adadez55.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/012_ns_fp_adadez55.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption">Mohamed stands in the ruins of his old house, out of which he used to run a lucrative migrant ghetto.</p>

							<p>Eighteen months ago, Mohamed was moving more than 300 migrants a week through his ghetto, for a weekly profit of around $10,000 to $13,000. Business was so good that he decided to knock his house down and build a bigger one so that he could fit more migrants in his courtyard. But before the new house was finished, the crackdown was underway, and he was forced to take his business underground.</p>

							<p>Today, he lives with his wife and children in a single room in the courtyard of his younger brother’s house in Agadez’s old town, not far from the ancient mosque whose conical minaret towers over the rest of the low-slung city. Mohamed comes from noble Tuareg lineage, and his older brother was once a famous musician in Agadez. (Posters of the brother in traditional Tuareg dress hung from the walls of the compound, alongside a framed photograph of Qaddafi in aviators and a flowing headdress.) But the family appeared to have fallen on hard times; goats pranced through the living space, and pigeons clucked from inside a coop made of mud and straw.</p>

							<p>“The way I live now and the way I lived one year ago is very different,” Mohamed said, leading me out of the compound and across a narrow alleyway between crumbling mud walls to a larger, half-finished complex made of rectangular brown bricks. A stray dog roused itself from a sandy depression to snarl at us and then slunk off into a corner. This was once his home, he explained, and where he had made a small fortune housing migrants before they were smuggled to Libya.</p>

							<p>He told me that he would wait to see if anything comes of the promised job training programs, but he doubts that kind of legitimate work would ever pay as much as he earned running a migrant ghetto. Many of the smugglers he knows have already gotten back into the game, including his third brother, who was arrested in a sting operation by authorities in May. “Some people will try and get caught. Others will take the dangerous routes and die,” Mohamed said. “This migration business, anyone who has experienced it can never leave it.” <span class="red-box-end"></span></p>

							<p class="author-bio"><strong>Ty McCormick</strong> (<a href="https://twitter.com/tymccormick" target="_blank">@TyMcCormick</a>) is <span class="fp-red">Foreign Policy</span>’s Africa editor. <strong>Nichole Sobecki</strong> (<a href="https://twitter.com/nicholesobecki" target="_blank">@nicholesobecki</a>) is a photographer based in Nairobi. A version of this article originally appeared in the September/October 2017 issue of <span class="fp-red">FP</span> magazine.</p>

							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_amadou_coulibaly.jpg" alt="" />
										</noscript></a>
										<a href="#the-deported-mali-africa-europe-EU-deportation-migration-unrest" class="internal-link read-link"><p class="about_lead refer"><strong>The Deported</strong></p></a>
										<p class="refer referBody">Europe is expelling thousands of Africans. To one Malian deportee, that looks like a recipe for revolution.</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg" alt="" />
										</noscript></a>
										<a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="about_lead refer"><strong>Slideshow: My Smuggler, My Savior</strong></p></a>
										<p class="refer referBody">They’re migrants’ only chance of making it safely across the Sahara. They’re also outlaws engaged in a deadly game of cat and mouse with Niger’s military.</p>
									</div>
								</div>
						</div>
					</div>

				</article>

			</section>

			<section id="my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration--intro" class="story" data-set-marker="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro" data-desktop-next="part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration--intro" data-desktop-prev="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro" data-mobile-next="part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration--intro" data-mobile-prev="part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration--intro">

				<article>
					<header id="story-6-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/005_niger_slideshow1a.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/005_niger_slideshow1a.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/005_niger_slideshow1a.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/005_niger_slideshow1a.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/005_niger_slideshow1a.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p id="my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration-dek" style="display:none;">Part II Continues</p>
							<h1>My Smuggler, My Savior</h1>
							<p class="dek">They’re migrants’ only chance of making it safely across the Sahara. They’re also outlaws engaged in a deadly game of cat and mouse with Niger’s military.</p>
							<?php if( $publish_post['my-smuggler-my-savior'] ): ?>
								<p><a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Wednesday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['my-smuggler-my-savior']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['my-smuggler-my-savior']['facebook'] ?>.</span>
						<span class="share-text share--twitter"><?php echo $social_sharing['my-smuggler-my-savior']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['my-smuggler-my-savior']['image'] ?>" alt="" />
					</header>
					<?php if( $publish_post['my-smuggler-my-savior'] ): ?>
					<div id="my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="content--main" style="background-color:#000; color:#fff;">
						<div class="post-header">
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_agadez_portrait08.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_agadez_portrait08.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_agadez_portrait08.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_agadez_portrait08.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_agadez_portrait08.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_agadez_portrait08.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image" style="margin-bottom: 1.5em;"/>
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_agadez_portrait08.jpg" alt="" class="main-image" />
							</noscript>
							<div id="header5" class="post-header-text">
								<h1 class="post-hed">My Smuggler, My Savior</h1>
								<h2 class="post-dek">They’re migrants’ only chance of making it safely across the Sahara. They’re also outlaws engaged in a deadly game of cat and mouse with Niger’s military.</h2>
							</div>
							<div class="gallery-author">
								<p>Text and Photography by Nichole Sobecki</p>
								<p class="post-date">Oct. 4, 2017</p>
							</div>
						</div>
						<div class="post_copy">
							<p>It was already among the most dangerous commutes on Earth. To make the 600-mile journey from Agadez, an ancient Nigerien caravan city that has grown into Africa’s most notorious human-smuggling hub, across the Sahara to Libya was to risk death at the hands of bandits, terrorists, and the elements. Unknown thousands of migrants — and the smugglers who shuttle them — have perished of thirst or exposure in the desert after their trucks broke down or got lost. Then in 2015 the journey became even more perilous. “The army started hunting us,” says Adji, who at 32 had been ferrying migrants to Libya for nearly 15 years. “They are even shooting at our trucks.”</p>

							<p>The EU-funded crackdown on Niger’s smuggling industry didn’t stop the flow of Libya-bound migrants. But it did force drivers like Adji to take new and more dangerous routes across the Sahara. “The distance is now twice what it was before and so are the risks,” says Adji, whose truck was hijacked by bandits as he traveled along a new route in 2016. He barely survived, walking for miles in the desert before stumbling across another migrant caravan. For the sake of his wife and children, Adji says he has left the trade, but those who are still willing to make the trip can expect profits even bigger than before. The cost of crossing to Libya has skyrocketed, he says, and for the right price there will always be someone willing to go.</p>

							<div class="about-gallery">
								<p><strong>ABOUT THIS SERIES:</strong> Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights. <strong>Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</strong></p>
							</div>

						</div>

						<div class="post-module two-images">
							<div class="post-image-left" style="max-height:none;">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_agadez_portrait151.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_agadez_portrait151.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_agadez_portrait151.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_agadez_portrait151.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_agadez_portrait151.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_agadez_portrait151.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/002_ns_fp_agadez_portrait151.jpg" alt="" />
								</noscript>
							</div>
							<div class="post-image-right" style="max-height:none;">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_agadez_portrait091.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_agadez_portrait091.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_agadez_portrait091.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_agadez_portrait091.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_agadez_portrait091.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_agadez_portrait091.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/003_ns_fp_agadez_portrait091.jpg" alt="" />
								</noscript>
							</div>
						</div>

						<div class="post_copy">
							<p>Ali, left, had made the perilous trip to Libya more than 100 times. But after Niger’s government struck a deal with the European Union to crack down on human smuggling, he began taking longer and more dangerous routes across the desert. A few months later, he crashed into a gully at night, upending the vehicle and killing two of the 25 Nigerian migrants on board. Adji, right and at the top of this page, used to make his living driving migrants across the Sahara to Libya before the EU-funded crackdown on human smuggling made it too risky.</p>
						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload post-module" style="max-height: none;" />
						<noscript>
							<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg" alt="" class="post-module" style="max-height: none;" />
						</noscript>

						<div class="post_copy">
							<p>Nine months ago, Kader was driving a truck full of migrants to Libya when he came across a military checkpoint. He fled into the desert to avoid arrest, leaving the migrants and his vehicle.</p>
						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_agadez_portrait11.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_agadez_portrait11.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_agadez_portrait11.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_agadez_portrait11.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_agadez_portrait11.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_agadez_portrait11.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload post-module" style="max-height: none;" />
						<noscript>
							<img src="https://foreignpolicymag.files.wordpress.com/2017/09/005_ns_fp_agadez_portrait11.jpg" alt="" class="post-module" style="max-height: none;" />
						</noscript>

						<div class="post_copy">
							<p>Eighteen months ago, Mohamed was moving more than 300 migrants a week through his ghetto for a profit of about $10,000 to $13,000. But then the crackdown happened, and he was forced to take his business underground.</p>
						</div>

						<div class="post-module two-images">
							<div class="post-image-left" style="max-height:none;">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_agadez_portrait141.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_agadez_portrait141.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_agadez_portrait141.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_agadez_portrait141.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_agadez_portrait141.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_agadez_portrait141.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/006_ns_fp_agadez_portrait141.jpg" alt="" />
								</noscript>
							</div>
							<div class="post-image-right" style="max-height:none;">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_agadez_portrait021.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_agadez_portrait021.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_agadez_portrait021.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_agadez_portrait021.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_agadez_portrait021.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_agadez_portrait021.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/007_ns_fp_agadez_portrait021.jpg" alt="" />
								</noscript>
							</div>
						</div>

						<div class="post_copy">
							<p>A former <em>coxeur</em>, Garba, left, was arrested last year as he loaded 49 migrants into trucks. He spent more than nine months in prison. Omar, right, used to drive migrants from Agadez to Libya at least twice a month but says fewer migrants are coming now and it takes longer and longer to fill a car with enough people to warrant making the increasingly dangerous journey.</p>
						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_agadez_portrait05.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_agadez_portrait05.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_agadez_portrait05.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_agadez_portrait05.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_agadez_portrait05.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_agadez_portrait05.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload post-module" style="max-height: none;" />
						<noscript>
							<img src="https://foreignpolicymag.files.wordpress.com/2017/09/008_ns_fp_agadez_portrait05.jpg" alt="" class="post-module" style="max-height: none;" />
						</noscript>

						<div class="post_copy" style="padding-bottom: 6em;">
							<p>Moussa was a driver for migrants traveling to Libya. After Nigerien authorities began cracking down on smugglers, he applied to an EU-funded program designed to help former smugglers transition to new careers but says he has yet to receive any financial support.</p>

							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_ns_fp_adadez24.jpg" alt="" />
										</noscript></a>
										<a href="#part-2-highway-through-hell-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="about_lead refer"><strong>Highway Through Hell</strong></p></a>
										<p class="refer referBody" style="color:#000;">The human-smuggling route across the Sahara may have been the deadliest on Earth. Then the EU paid Niger’s army to shut it down — and made it even more treacherous.</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg" alt="" />
										</noscript></a>
										<a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="about_lead refer"><strong>Nearly There, but Never Further Away</strong></p></a>
										<p class="refer referBody" style="color: #000;">Europe has outsourced the dirty work of border control to Libyan militias. In doing so, it has turned African migrants into commodities to be captured, sold, and traded like slaves. (COMING THURSDAY)</p>
									</div>
								</div>
						</div>
					</div>
					<?php endif; ?>
				</article>

			</section>

			<section id="part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration--intro" class="story" data-set-marker="part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration--intro" data-desktop-next="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro" data-desktop-prev="my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration--intro" data-mobile-next="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro" data-mobile-prev="my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration--intro">

				<article>
					<header id="story-7-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature2.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature2.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature2.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature2.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/006_libya_feature2.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p id="part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration-dek" style="display:none;">Part III: Libya</p>
							<p class="labels">Part III</p>
							<h1>Nearly There, but Never Further Away</h1>
							<p class="dek">Europe has outsourced the dirty work of border control to Libyan militias. In doing so, it has turned African migrants into commodities to be captured, sold, and traded like slaves.</p>
							<?php if( $publish_post['part-3-nearly-there'] ): ?>
								<p><a href="#part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Thursday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['part-3-nearly-there']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['part-3-nearly-there']['facebook'] ?>.</span>
						<span class="share-text share--twitter"><?php echo $social_sharing['part-3-nearly-there']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['part-3-nearly-there']['image'] ?>" alt="" />
					</header>
					<?php if( $publish_post['part-3-nearly-there'] ): ?>
					<div id="part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration" class="content--main">
						<div class="post-header">
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image dark-image" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg" class="main-image" alt="" />
							</noscript>
							<div id="header1" class="post-header-text">
								<p class="post-header-captions-mobile">Migrants, mostly from West Africa, wait to receive daily food rations at the Triq al-Sikka detention center in Tripoli.</p>
								<p class="mobile-post-marker"><span style="font-weight:900;">Europe Slams Its Gates</span><br>Part III</p>
								<h1 class="post-hed">Nearly There, but Never Further Away</h1>
								<h2 class="post-dek">Europe has outsourced the dirty work of border control to Libyan militias. In doing so, it has turned African migrants into commodities to be captured, sold, and traded like slaves.</h2>
							</div>
							<p class="post-header-captions">Migrants, mostly from West Africa, wait to receive daily food rations at the Triq al-Sikka detention center in Tripoli, Libya.</p>
						</div>
						<div class="post_copy mobile-copy">
							<p class="post-author">Story and Photography by Peter Tinti</p>
                            <p class="post-date">Oct. 5, 2017</p>
							<p class="post_intro_lead">TRIPOLI, Libya — The guard forced the migrants to kneel and began barking orders in Arabic, a language that few of the once-hopeful souls who had traveled to Libya from sub-Saharan Africa spoke. A gaunt, elderly man in ripped jeans and a tattered T-shirt failed to comply. The guard, wearing a crisp new uniform emblazoned with the insignia of Libya’s anti-illegal immigration police division, raised his wooden club and brought it down hard on the man’s back, driving him face down into the ground with the first blow.</p>

							<p>It was early May, three weeks after the staff at the Triq al-Sikka migrant detention center in the Libyan capital of Tripoli had received human rights training from the International Organization for Migration (IOM). The guard struck the elderly man again on the back and clubbed the back of his legs. Then he moved methodically down the line of kneeling migrants, beating each man as if he were responsible for his fellow prisoner’s infraction. Cries of pain echoed through the barren, warehouse-like facility, where more than 100 half-starved migrants were locked away in crowded cells. Some had been there for months, enduring regular beatings and surviving on a few handfuls of macaroni and a single packet of juice each day. Others had recently been rounded up off the streets in raids targeting black African migrants.</p>

							<div class="media-contain quote-right about">
								<p class="about_lead refer"><strong>ABOUT THIS SERIES</strong></p>
								<p class="refer">Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights.<br /><br />
								<span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
								</noscript>
							</div>

							<p>Soon after the beatings began, other guards at the facility noticed my presence and quickly ushered me into a waiting area outside the well-appointed office of Col. Mohamed Beshr, the urbane head of Libya’s anti-illegal immigration police. Beshr is a key player in recent joint EU-Libyan efforts to halt migration to Europe, including intercepting migrants at sea and detaining them on land. He has welcomed high-level European diplomats and U.N. representatives to the Triq al-Sikka facility, and his office is filled with certificates from workshops run by IOM, the European Union, and Britain’s development agency.</p>

							<p>Yet Beshr seemed frustrated by my questions about the abuses openly taking place at the detention center he oversaw. To hear him tell it, his European partners cared about only one thing, even if they wouldn’t say it: preventing migrants from showing up on Italy’s shores. “Are they looking for a real solution to this humanitarian crisis?” Beshr asked, smirking and raising his eyebrows. “Or do they just want us to be the place where migrants are stopped?”</p>

							<p>Eighteen months after the EU unveiled its controversial plan to curb illegal migration through Libya — now the primary point of departure for sub-Saharan Africans crossing the Mediterranean Sea to Europe — migrants have become a commodity to be captured, sold, traded, and leveraged. Regardless of their immigration status, they are hunted down by militias loyal to Libya’s U.N.-backed government, caged in overcrowded prisons, and sold on open markets that human rights advocates have likened to slave auctions. They have been tortured, raped, and killed — abuses that are sometimes broadcast online by the abusers themselves as they attempt to extract ransoms from migrants’ families.</p>

                            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/344654102%3Fsecret_token%3Ds-ZnWId&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Listen to this story from <span class="fp-red">Foreign Policy</span>'s series, "Europe Slams Its Gates," and other FP content, as well as features from a range of top publications: Download the <a href="https://goo.gl/KYmMp2" target="_blank">AUDM</a> app for your iPhone.</p>

							<p>The detention-industrial complex that has taken hold in war-torn Libya is not purely the result of a breakdown in order or the work of militias run amok in a state of anarchy. Visits to five different detention centers and interviews with dozens of Libyan militia leaders, government officials, migrants, and local NGO officials indicate that it is the consequence of hundreds of millions of dollars in pledged and anticipated support from European nations as they try to stem the flow of unwanted migrants toward their shores.</p>

							<p>The European Union has so far <a href="https://eeas.europa.eu/headquarters/headquarters-homepage_en/19163/EU-Libya%20relations,%20factsheet" target="_blank">pledged</a> roughly $160 million for new detention facilities to warehouse migrants before they can be deported back to their home countries and to train and equip the Libyan coast guard so that it can intercept migrant boats at sea. Individual EU member states have earmarked tens of millions of dollars more as they consider a recent request, <a href="http://www.reuters.com/article/us-europe-migrants-italy-libya-idUSKBN16R1WP" target="_blank">reportedly</a> in the range of $900 million, by Libya’s U.N.-backed government in Tripoli for a list of equipment needed to combat migrant smuggling.</p>

							<p>EU efforts in Libya are part of a broader plan to stem migration from Africa to Europe, which includes a multibillion-dollar EU Emergency Trust Fund for Africa that aims to address the “root causes” of migration and displacement. In the so-called “source” countries that large numbers of migrants are leaving, the EU is rolling out new development projects designed to persuade would-be migrants not to leave home in the first place. But in transit countries like Libya and its neighbors to the south, Niger and Sudan, the EU has focused on forcibly preventing migrants from reaching the Mediterranean by providing money for anti-smuggling operations, border patrols, and detention facilities.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/002_19waiting_for_shoes_tripoli.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/002_19waiting_for_shoes_tripoli.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_19waiting_for_shoes_tripoli.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_19waiting_for_shoes_tripoli.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_19waiting_for_shoes_tripoli.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_19waiting_for_shoes_tripoli.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/002_19waiting_for_shoes_tripoli.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Migrants whose boat was intercepted by the Libyan navy wait to be given shoes before they can be moved to a detention center in Tripoli.</p>

							<p>In Libya, these policies have empowered militias and criminal syndicates that have allied themselves with the U.N.-backed government and lined up for European largesse. Some have rebranded themselves as official coast guard units in the expectation that they will receive training and equipment. Others are running detention centers where migrants are systematically mistreated but where the European Union and member states still offer support — including IOM funding to provide health care, psychosocial counseling, and essential items like hygiene kits to migrants. IOM, which is the main implementing partner for EU-funded projects related to migration in Libya, has also helped renovate detention facilities and trained guards to staff them.</p>

							<p>IOM claims that it has no choice but to work with whoever runs the facilities. “We are not the body that determines what is a detention center and what is not,” Ashraf Hassan, IOM’s operations officer for Libya, who is based out of neighboring Tunisia for security reasons, said in an email. “We focus on supporting vulnerable migrants in need of our assistance.”</p>

							<p>For their part, EU officials deny any responsibility for rights abuses that occur in centers that have received EU funding or at the hands of coast guard and navy units that the EU has trained and equipped. “Respect of human rights and protection of the migrants is the priority of the European Union,” Catherine Ray, a spokeswoman for the EU, said in an email. “We are working to support and protect migrants in Libya with our international partners, such as UNHCR and IOM.”</p>

							<p>Such claims are at odds with the troubling reality on the ground, where evidence abounds that European funds are fueling a brutal system of arbitrary imprisonment that denies migrants even their most basic human rights. But as pressure mounts on European leaders to slow the surge of migrants from Africa, they are doubling down on the fledgling partnership with Libya and holding it up as a model for future efforts to curb migration. Referring to Italy’s partnership with the Libyan coast guard, French President Emmanuel Macron <a href="https://www.nytimes.com/2017/08/28/world/europe/africa-migrants-europe.html?mcubz=1" target="_blank">said</a> in August, “What has been done by Italy and Libya is a perfect example of what we are aiming for.”</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/003_unloaded_tripoli.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/003_unloaded_tripoli.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/003_unloaded_tripoli.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/003_unloaded_tripoli.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/003_unloaded_tripoli.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/003_unloaded_tripoli.jpg?w=1500 1500w" data-sizes="auto" alt="" style="max-height: none; margin-bottom: 0;" class="post-module lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/003_unloaded_tripoli.jpg" alt="" style="max-height: none; margin-bottom: 0;" class="post-module" />
							</noscript>
						<p class="post-image-caption">Migrants from Bangladesh and Morocco disembark a warship operated by the Libyan navy after their boat was intercepted at sea.</p>

						<div class="post_copy">
							<p class="post_intro_lead">Europe once had a reliable partner in combating illegal migration from Libya in Muammar al-Qaddafi, who ruled from 1969 to 2011. The North African country had long been a gateway to Europe for migrants and asylum-seekers, its shores just 200 miles across the Mediterranean from the Italian island of Lampedusa. Ever the extortionist, Qaddafi — who once <a href="http://www.telegraph.co.uk/news/worldnews/africaandindianocean/libya/7973649/Gaddafi-Europe-will-turn-black-unless-EU-pays-Libya-4bn-a-year.html" target="_blank">warned</a> that he was the only thing preventing Europe from becoming “black” — struck a deal with Italy in 2008 to stem the flow of migrants as part of a $5 billion reparations package meant to atone for three decades of brutal colonial occupation that ended in 1943.</p>

							<p>Then the Arab Spring swept across North Africa. The chaos that followed Qaddafi’s demise proved an inviting climate for smugglers, and within a few years Libya had become an unsupervised highway for migrants and asylum-seekers headed to Europe. More than 500,000 migrants have reached Italy via what experts call the “Central Mediterranean route” from North Africa since 2014, the vast majority of whom embarked from Libya. Despite a mysterious lull in migrants taking this route since mid-July, <a href="https://www.reuters.com/article/us-europe-migrants-libya-italy-exclusive-idUSKCN1B11XC" target="_blank">reportedly</a> because a new Libyan militia has begun stopping migrant boats west of Tripoli, nearly 100,000 people have <a href="https://www.iom.int/news/mediterranean-migrant-arrivals-reach-120975-2017" target="_blank">crossed</a> via the Central Mediterranean route in the first nine months of this year. Since 2014, almost 13,000 migrants have perished at sea along this route.</p>

							<p>Nearly six years after Qaddafi’s death, Libya has two main rival governments — one in Tripoli and the other in the eastern city of Tobruk — and thousands of square miles of territory controlled by a mosaic of tribal factions, militias, armed groups, and the Islamic State. Even in the capital, where the U.N.-backed Government of National Accord is based, masked men in military fatigues, part of an ever-shifting array of alliances, guard checkpoints by day and exchange gunfire by night. Street-by-street gun battles and tit-for-tat kidnappings are the norm, often serving as proxy battles for larger power struggles that reverberate all the way back to tribal enclaves hundreds of miles away.</p>

							<div class="media-contain photo-right">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_bija.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_bija.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_bija.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_bija.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_bija.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_bija.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg"/>
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_bija.jpg" alt="" class="referImg"/>
								</noscript>
								<p class="post-image-caption">Abd al-Rahman Milad, more commonly known as “Bija,” discusses his improbable rise to Libyan coast guard commander at a cafe in the coastal city of Zawiya.</p>
							</div>

							<p>Unable to rely on a strongman like Qaddafi to keep migrants from departing Libyan shores, Europe has gone in search of new partners, including the ethnic and tribal militias that are now the de facto authorities in most of the country. Many of these militias are nominally allied with the U.N.-backed government led by Prime Minister Fayez al-Sarraj, whose control barely extends beyond the parking lot of its headquarters in central Tripoli. Technically, these armed groups fall under the authority of the Interior Ministry, but in practice they answer to no one.</p>

							<p>Some of these militias used to profit from the migrant trade, either by offering protection to smugglers or by smuggling migrants themselves. Now as they position themselves as potential partners to Europe in the fight against illegal migration, they have begun intercepting migrant boats at sea, raiding migrant safe houses, carrying out mass roundups in immigrant neighborhoods, and opening detention centers throughout the country. Many are still involved in other illegal activities such as fuel smuggling and trafficking arms, narcotics, and stolen goods, but EU-funded agencies continue to train their foot soldiers and offer them material assistance in the hope of building a professional coast guard that can clamp down on smugglers at sea.</p>

							<p>One such character is Abd al-Rahman Milad, more commonly known as “Bija,” a powerful militia leader-turned-coast guard commander in the coastal town of Zawiya who has allegedly continued to profit from multiple smuggling operations even as he sells himself as a viable EU partner by intercepting migrants at sea. Over cups of coffee and Marlboro Reds at a local cafe in Zawiya, he told the story of his meteoric rise from a newly minted coast guard academy graduate in 2011, just before the revolution that overthrew Qaddafi, to the man who controls the seas outside the city’s strategic port and oil refinery. He had the right combination of tribal alliances and seafaring skills, he said. But Bija’s ascent also involved something common to many of Libya’s post-Qaddafi success stories: a willingness to simply seize what he wanted. “I took control of this port in Zawiya because at the time there was no one doing the job,” he said.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/005_18processing_tripolirescued.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/005_18processing_tripolirescued.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/005_18processing_tripolirescued.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/005_18processing_tripolirescued.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/005_18processing_tripolirescued.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/005_18processing_tripolirescued.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/005_18processing_tripolirescued.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Libyan security forces prepare to process migrants who were intercepted by the Libyan navy.</p>

							<p>Now that his militia has been recognized as a coast guard unit, Bija is an official agent of the U.N.-backed government in Tripoli. But a recent <a href="http://www.un.org/ga/search/view_doc.asp?symbol=S/2017/466" target="_blank">report</a> by the U.N. Panel of Experts on Libya accuses Bija of working with migrant smugglers in the key smuggling hubs of Sabratha and Zuwara — intercepting only the smugglers backed by rival militias. The human cargo his men corral is then delivered to the Nasr detention center in Zawiya, which is run by a militia he is allied with. The report also criticizes his tactics, which allegedly include “the sinking of migrant boats using firearms.”</p>

							<p>Bija denies these allegations and claims they were invented by his rivals, including powerful officials in Tripoli, who fed the U.N. false information in an effort to discredit him. He tells the story of an incident in 2014, when he intercepted a Russian vessel smuggling fuel inside Libyan waters. According to Bija, navy officials in Tripoli ordered him to release the ship and its crew. He refused initially but relented after the officials implied they might back Bija’s local rivals in an effort to oust him. “I have had problems with them [the navy] since that day,” he told me. “But I have never stopped my work, and I am doing what I consider is correct and right.”</p>

							<p>The fact that Bija is a controversial figure, however, has not stopped European countries from developing a relationship with him. In May, Bija traveled to Rome to participate in an EU-funded workshop hosted by IOM at the four-star Hotel Clodio, where he met with Italian officials as part of an effort to enhance cooperation on migration. More recently, he said, the Italian government provided him with a new boat to intercept migrants at sea, a picture of which he posted on Facebook with him aboard, smiling for the camera. According to Bija, the Italians have told him more boats are on the way.</p>

							<p>Ray, the EU spokeswoman, said she was unaware of any evidence linking EU-trained coast guards to ongoing smuggling operations. “We take your allegations seriously,” she said in an email, adding that the “EU is providing the training because everything that happens within Libyan territorial waters is a Libyan responsibility, not a European one, but this does not mean that we turn a blind eye on it.”</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/006_8naija_migrants_airport_road.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/006_8naija_migrants_airport_road.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/006_8naija_migrants_airport_road.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/006_8naija_migrants_airport_road.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/006_8naija_migrants_airport_road.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/006_8naija_migrants_airport_road.jpg?w=1500 1500w" data-sizes="auto" alt="" style="max-height: none; margin-bottom: 0;" class="post-module lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/006_8naija_migrants_airport_road.jpg" alt="" style="max-height: none; margin-bottom: 0;" class="post-module" />
							</noscript>
						<p class="post-image-caption">Nigerian migrants inside a locked hangar at the Airport Road detention center in Tripoli, where they had been held for more than a month.</p>

						<div class="post_copy">
							<p class="post_intro_lead">Traveling to Bija’s fiefdom in Zawiya, along the 30-mile stretch of coastal road that connects the city with Tripoli, requires passing through a half-dozen checkpoints, many of which are controlled by militias whose loyalties and ideologies are as opaque as their motives. The road is often closed, and on days that it is open, one hopes not to attract the attention of bored young men with guns, many of whom are prone to kidnapping Libyans as well as foreigners.</p>

							<p>The main road in Zawiya, like most urban centers along the Libyan coast, bears the scars of war. Control of this slice of western Libya — where fortunes are made smuggling fuel, weapons, narcotics, and people — can be extraordinarily lucrative, which explains why rival groups have reportedly put a bounty on Bija’s head. One group that has been a steadfast ally of Bija is the Nasr Brigade, which has spent much of the last year fighting alongside Bija’s coast guard to maintain control over Zawiya and its territorial waters. Led by Mohammad Koshlaf, the Nasr Brigade also controls the Nasr detention center, which is filled with the men, women, and children Bija’s men have intercepted at sea.</p>

							<p>Set among pockmarked facades and structures hollowed out by heavy artillery in Zawiya’s industrial zone, the detention center is a sprawling concrete-and-sheet-metal monument to inhumanity. The main hanger is reserved for male inmates, who are packed inside windowless cells for all but a few minutes each day. The only view to the outside is through a single square-foot slot that guards slam shut at their whim. As I passed by, detained migrants reached their hands out and pleaded with me to contact their embassies and take down the numbers of loved ones back home.</p>

							<p>The center’s padlocked doors were decorated with stickers from IOM, the European Union, the U.N. refugee agency (UNHCR), and the International Medical Corps, a nonprofit that specializes in humanitarian relief. Representatives from all of these organizations have visited the center and, in the case of IOM and the International Medical Corps, provided hygiene kits and basic medical services with funding from European countries. The militiamen who run the center point to these decals not only as evidence of the quality of their work but of their burgeoning partnership with the EU and the broader international community.</p>

						</div>
						<div class="post-module two-images">
							<div class="post-image-left">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/007_2locked_door_iom_eu_sticker_el-nasr.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/007_2locked_door_iom_eu_sticker_el-nasr.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/007_2locked_door_iom_eu_sticker_el-nasr.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/007_2locked_door_iom_eu_sticker_el-nasr.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/007_2locked_door_iom_eu_sticker_el-nasr.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/007_2locked_door_iom_eu_sticker_el-nasr.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/007_2locked_door_iom_eu_sticker_el-nasr.jpg" alt="" />
								</noscript>

								<p class="post-image-caption">A guard at the Nasr detention center in Zawiya opens a prison door that boasts a sticker from the European Union and IOM.</p>
							</div>
							<div class="post-image-right">
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/008_3locked_in_elnasr.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/008_3locked_in_elnasr.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/008_3locked_in_elnasr.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/008_3locked_in_elnasr.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/008_3locked_in_elnasr.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/008_3locked_in_elnasr.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/008_3locked_in_elnasr.jpg" alt="" />
								</noscript>

								<p class="post-image-caption">Detainees from West Africa peer out of their overcrowded cell in the Nasr detention center in Zawiya, where migrants intercepted by the coast guard are warehoused indefinitely.</p>
							</div>
						</div>

						<div class="post_copy">
							<p>Migrants who find themselves stuck in places like the Nasr detention center often languish there for months. One way out is through “assisted voluntary return and reintegration,” or AVRR, which European policymakers are eager to promote. Funded by the European Union and member states, and overseen by IOM, the program helps migrants return to their home countries on chartered flights. But to be eligible a migrant’s home country must confirm his or her identity, a complicated process made even more difficult by insecurity in Libya. As of the beginning of August, an overwhelmed IOM had repatriated just <a href="http://reliefweb.int/sites/reliefweb.int/files/resources/IOM%27s%20Voluntary%20Humanitarian%20Return%20Assistance%20and%20Reintegration%20Support%20to%20Stranded%20Migrants%20in%20Libya%2020%20July%20-%201%20August.pdf" target="_blank">4,346 migrants</a> from detention centers in 2017, a fraction of the estimated 400,000 migrants currently stranded in Libya. (The real number could be much higher, since new centers are sprouting up all the time and in parts of the country that are often impossible for aid workers to access.)</p>

							<div class="media-contain quote-right about">
								<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link">
									<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
									<noscript>
										<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" alt="" />
									</noscript>
								</a>
								<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link"><p class="about_lead refer"><strong>The Savior’s Dilemma</strong></p></a>
								<p class="refer referBody">Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?</p>
							</div>

							<p>On its website, IOM <a href="https://www.iom.int/assisted-voluntary-return-and-reintegration" target="_blank">describes</a> AVRR as the “orderly and humane return and reintegration of migrants who are unable or unwilling to remain in host or transit countries and wish to return voluntarily to their countries of origin.” And while many of the detained migrants I spoke with in Libya expressed a desire to go home after months of suffering in decrepit facilities, it’s unclear whether their return could ever be considered voluntary. Treat anyone bad enough and they will beg to make it stop.</p>

							<p>Wajdi Almontaser, the director of the Airport Road detention center in Tripoli, was frank about the poor choices facing migrants in centers like his. “They usually want to go home because they had a bad experience in Libya or because the detention is indefinite, so they use the IOM process to get repatriated and then try again to reach Europe,” he told me.</p>

							<p>Mistreatment in these detention facilities doesn’t only take the form of beatings and harassment. The militias also buy and sell their detainees or rent them out as day laborers, to the highest bidder, in a process rights groups have likened to the slave trade. Bambo Jaiteh, a 22-year-old from Gambia who was detained in the Il Khalah detention center outside Tripoli, told me that he had previously been detained in a “prison camp,” where they were loaned out to business people and forced to do manual labor such as heavy debris removal, digging at construction sites, and cleaning. “They took you out to work, and we were only sometimes given food,” he said.</p>

							<p>Militias also profit by selling arrested African migrants to smugglers, who expect to collect fees from family members before placing them on boats to Italy. But the real prize is access to the hundreds of millions of dollars promised to underwrite the counter-migration machine.</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/009_9senegal_thru_fence_abu_salim.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/009_9senegal_thru_fence_abu_salim.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/009_9senegal_thru_fence_abu_salim.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/009_9senegal_thru_fence_abu_salim.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/009_9senegal_thru_fence_abu_salim.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/009_9senegal_thru_fence_abu_salim.jpg?w=1500 1500w" data-sizes="auto" alt="" style="max-height: none; margin-bottom: 0;" class="post-module lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/009_9senegal_thru_fence_abu_salim.jpg" alt="" style="max-height: none; margin-bottom: 0;" class="post-module" />
							</noscript>
						<p class="post-image-caption">Migrants from West Africa in their crowded living quarters in the Abu Salim detention center in Tripoli.</p>

						<div class="post_copy" style="padding-bottom: 6em;">
							<p class="post_intro_lead">As soon as European leaders recalibrated their entire foreign policy toward Libya — and much of Africa — around the goal of stemming migration, many of the same militias once directly involved in migrant smuggling and human trafficking began to see migrant detention as a promising growth industry. Over the course of dozens of interviews in Libya, militia leaders, government officials, and representatives from local NGOs all used the word “business” — in English, rather than Arabic — to explain why so many militias are adding the arrest and detention of migrants to their portfolio of services.</p>

							<p>Militias are now racing to outdo each other in the eyes of their European benefactors. Many of the men, women, and children caught up in the dragnet of Libya’s migration crackdown had no intention of going to Europe in the first place. Some of them were even in the country legally. At the Abu Salim detention center in Tripoli, several migrants from Mali and Niger who were detained after a raid in a predominantly “black African” neighborhood told me that they had valid papers and had come to Libya for work. They may never have intended to go to Europe, but they are now caught up in the detention-and-deportation machine designed to keep others from getting there.</p>

							<p>According to Frederic Wehrey, a senior fellow at the Carnegie Endowment for International Peace who specializes in post-conflict transitions, the process unfolding around migration in Libya in many ways mirrors U.S. and European engagement with various Libyan actors to combat the Islamic State, also known as ISIS. “In the fight against ISIS, whatever militia was in proximity to an ISIS stronghold would come forward and present themselves as the best option for tackling ISIS,” he said. “These groups catch on very quickly that this is the way the game works,” he continued. “And they use this to outmaneuver their rivals and build up power.”</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/010_migrants_abu_salim.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/010_migrants_abu_salim.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/010_migrants_abu_salim.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/010_migrants_abu_salim.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/010_migrants_abu_salim.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/010_migrants_abu_salim.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/010_migrants_abu_salim.jpg" alt="" />
							</noscript>

							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">West African migrants rest in the Abu Salim detention center.</p>

							<p>Foreign governments, along with aid and humanitarian organizations, can all claim they are partnering with groups and individuals who are technically registered as part of the government, but these arrangements are a “thin disguise,” according to Wehrey. “Just because someone is under the Ministry of Interior does not mean they are not acting autonomously and running their own show.”</p>

							<p>The European Union’s willingness to partner with militias, however thinly disguised as government agents, has created a market for the detention, sale, and abuse of migrants. It also risks accelerating the fragmentation of the state, officials and outside experts warn. “There is one argument that you start local and build up, that maybe this local engagement is how you build things from the bottom up,” Wehrey said. “But my sense is that if you are creating warlords through this type of engagement, that is not a good thing.”</p>

							<p>Authorities in Tripoli agree, arguing that a misalignment in priorities between Libya and the European Union risks undermining the larger goal of putting the Libyan state back together. “We have priorities, and they [the EU] have priorities, and each one is looking out for themselves,” said Anwar Sherif, who heads the special operation unit of the Libyan navy, which, like the coast guard, only has a few functioning boats. “They [the EU] say Libya is unstable and then also say Libya refuses to stop illegal migration. This is stupid. The priority should be stability in Libya.”</p>

							<p>One afternoon in the port of Tripoli, Sherif and I watched as Libyan authorities, with help from the UNHCR and IOM, processed 400 migrants they had recently intercepted at sea. As the dejected migrants prepared to board buses destined for detention centers, Sherif pointed across the dock to two merchant vessels moored off in the distance, one of them Ukrainian and the other Turkish. The Libyan navy had caught them both the week before, he said, carrying 132 million gallons of stolen fuel between them. It was a rare win for the navy, which had managed to outgun the two ships over the course of a two-hour firefight. Most of the time, Sherif and his colleagues told me, they are unable able to act on the dozens of reports they receive each day about smuggling ships that are thought to be siphoning off the country’s economic lifeline on an industrial scale.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/011_11migrants_looking_courtyard_abu_salim.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/011_11migrants_looking_courtyard_abu_salim.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/011_11migrants_looking_courtyard_abu_salim.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/011_11migrants_looking_courtyard_abu_salim.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/011_11migrants_looking_courtyard_abu_salim.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/011_11migrants_looking_courtyard_abu_salim.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/011_11migrants_looking_courtyard_abu_salim.jpg" alt="" />
							</noscript>

							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Migrants from Senegal look out into the prison courtyard from their overcrowded jail cell in the Abu Salim detention center.</p>

							<p>Given that oil revenues are considered crucial to stabilizing Libya, one would think that preventing fuel theft would be a mutual priority shared by Libya and the international community. Yet, according to Sherif, the only conversations his European counterparts are willing to have with him when it comes to training, funding, and equipment are about migrant smuggling. “We are open to improving ourselves, upgrading our knowledge, and bringing our skills up to international standards, but our job is to protect our nation’s sovereignty, not just focus on migrants in the sea.”</p>

							<p>There is another problem as well: Many of the most prominent fuel smugglers along the Libyan coast are officially registered under the Interior Ministry, according to Sherif, and are the same coast guard units with which the EU is now partnering to combat migrant smuggling. Sherif won’t name anyone specifically — but he mentions a certain coast guard official who operates out of the port of Zawiya and was recently in Rome meeting with European officials.</p>

							<p>Yet according to navy officials like Sherif and his colleague, spokesman Abyoub Qassem, European powers are unwilling to look too closely at what unsavory partners like Bija are up to so long as they fight migration. “Europe wants to use Libya as its Berlin Wall to divide Africa from Europe,” said Qassem, adding that he objects to high-minded criticism from Europeans about human rights. “Europe wants to keep its human rights trademark and keep its own reputation clean.” <span class="red-box-end"></span></p>

							<p class="author-bio"><strong>Peter Tinti</strong> (<a href="https://twitter.com/petertinti" target="_blank">@petertinti</a>) is an independent journalist focusing on conflict, security, human rights, and organized crime. He is the author, with Tuesday Reitano, of <em>Migrant, Refugee, Smuggler, Savior</em>.</p>
							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_ns_fp_agadez_portrait07.jpg" alt="" />
										</noscript></a>
										<a href="#my-smuggler-my-savior-portraits-niger-africa-europe-EU-smuggling-migration" class="internal-link read-link"><p class="about_lead refer"><strong>Slideshow: My Smuggler, My Savior</strong></p></a>
										<p class="refer referBody">They’re migrants’ only chance of making it safely across the Sahara. They’re also outlaws engaged in a deadly game of cat and mouse with Niger’s military.</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" alt="" />
											</noscript>
										</a>
										<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link"><p class="about_lead refer"><strong>The Savior’s Dilemma</strong></p></a>
										<p class="refer referBody">Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?</p>
									</div>
								</div>
						</div>
					</div>
					<?php endif; ?>
				</article>

			</section>

			<section id="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro" class="story sidebar" data-set-marker="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro" data-desktop-next="part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration--intro" data-desktop-prev="part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration--intro" data-mobile-next="part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported--intro" data-mobile-prev="part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration--intro">

				<article>
					<header id="story-8-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/007_libya_sidebar1a.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/007_libya_sidebar1a.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/007_libya_sidebar1a.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/007_libya_sidebar1a.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/007_libya_sidebar1a.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p id="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU-dek" style="display:none;">Part III Continues/Part IV</p>
							<h1>The Savior’s Dilemma</h1>
							<p class="dek">Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?</p>
							<?php if( $publish_post['the-saviors-dilemma'] ): ?>
								<p><a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Thursday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['the-saviors-dilemma']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['the-saviors-dilemma']['facebook'] ?>.</span>
						<span class="share-text share--twitter"><?php echo $social_sharing['the-saviors-dilemma']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['the-saviors-dilemma']['image'] ?>" alt="" />
					</header>
					<?php if( $publish_post['the-saviors-dilemma'] ): ?>
					<div id="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="content--main">
						<div class="post-header">
							<div id="headerSidebar" class="sidebar-text">
								<h1 class="post-hed">The Savior’s Dilemma</h1>
								<h2 class="post-dek">Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?</h2>
								<p class="post-author">By Peter Tinti</p>
                                <p class="post-date">Oct. 5, 2017</p>
							</div>
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" alt="" class="main-image" />
							</noscript>
							<p class="post-header-captions">A man is helped off a small rubber boat by crew members from the NGO Sea-Eye in international waters off the coast of Libya on May 19.  (Christian Marquardt/NurPhoto via Getty Images)</p>
							<p class="post-header-captions-mobile-sidebar">A man is helped off a small rubber boat by crew members from NGO Sea-Eye on May 19 in international waters off the coast of Libya.  (Christian Marquardt/NurPhoto via Getty Images)</p>
						</div>
						<div class="post_copy mobile-copy" style="padding-bottom: 6em;">
							<p class="post_intro_lead">TRIPOLI, Libya — At 7:42 a.m. on May 10, Sea-Watch, a German aid organization that conducts search-and-rescue operations in the Mediterranean just outside Libya’s territorial waters, got word of a migrant boat in distress. The crew aboard the 100-foot rescue vessel sprang into action, dispatching speedboats to bring life jackets to the more than 350 migrants who were packed into a rickety wooden boat. But just as aid workers were preparing to begin the rescue operation, a battleship commanded by the Libyan navy cut their vessel off, <a href="https://sea-watch.org/en/pm-sea-watch-demands-independent-investigation-of-the-illegal-return-of-an-overcrowded-wooden-boat/" target="_blank">narrowly avoiding</a> a high-speed collision.</p>

							<div class="media-contain quote-right about">
								<p class="about_lead refer"><strong>ABOUT THIS SERIES</strong></p>
								<p class="refer">Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights.<br /><br />
								<span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
								</noscript>
							</div>

							<p>Upon reaching the migrant boat, the commander of the Libyan battleship, Abujella Abdul-Bari, cocked his pistol and pointed it at the migrants in a scene that was <a href="http://www.spiegel.tv/videos/207832-sea-watch-gegen-libysche-kuestenwache" target="_blank">captured</a> by a German film crew on board. Rescuers from Sea-Watch disengaged immediately, afraid that the confusion could lead to migrant deaths, as had happened in a <a href="https://www.theguardian.com/world/2016/oct/21/men-on-libyan-coastguard-boat-reportedly-attack-dinghy-of-refugees-and-migrants" target="_blank">similar incident</a> between Sea-Watch and the Libyan coast guard in October 2016. Had things played out only slightly differently that morning, the roughly 400 migrants on board the distressed boat would have been on their way to Europe; instead, they were headed back to the country they had risked everything to flee.</p>

							<p>The confrontation on May 10 was one in a string of troubling incidents in which Libyan authorities have clashed with nongovernmental organizations attempting to rescue migrants at sea, highlighting in the realest terms the heated political and moral debate over whether search-and-rescue operations encourage reckless departures from Libya or simply prevent unnecessary deaths. That debate began after a series of deadly migrant shipwrecks in 2013, when Italy launched a $156 million search-and-rescue effort called Operation Mare Nostrum. But it has boiled over in recent months, with critics accusing organizations like Sea-Watch of actively colluding with smugglers — and <a href="https://www.newsdeeply.com/refugees/executive-summaries/2017/08/14" target="_blank">at least three NGOs</a>, including the medical charity Médecins Sans Frontières, suspending their search-and-rescue operations because of threats from the Libyan navy.</p>

							<p>The first indications that saving migrants at sea might have unintended consequences came almost as soon as the effort began. In a little over a year of search-and-rescue operations, the Italian navy had rescued more than 150,000 migrants. European policymakers soon began to fret that Mare Nostrum constituted a “pull factor,” encouraging migrants to make the risky voyage across the Mediterranean. Migrants would be less likely to board boats departing from Libya if there were fewer ships waiting offshore to bring them to Europe, or so the theory went. And so in 2014 Mare Nostrum was replaced by Operation Triton, a slimmed-down mission run by Frontex, the European Union’s border agency, that carried out fewer rescue operations.</p>

							<p>Yet the number of migrant departures from Libya continued to rise, and documented deaths along what experts call the “Central Mediterranean route” skyrocketed from only a few hundred in 2013 to more than 3,000 in 2014. Amid public outcry in Europe — over migrant deaths in left-wing circles and continued arrivals in more conservative circles — the EU launched Operation Sophia in 2015, which aimed to disrupt smuggling and trafficking networks in addition to saving migrants at sea. At the same time, NGOs like Sea-Watch and Médecins Sans Frontières launched their own search-and-rescue operations.</p>

							<div class="media-contain quote-right pullquote">
								<p>“When the NGOs save one boat, the smugglers send more boats knowing they will be saved.”</p>
							</div>

							<p>While Operation Sophia has succeeded in saving lives, according to a recent <a href="https://publications.parliament.uk/pa/ld201719/ldselect/ldeucom/5/502.htm" target="_blank">report</a> by Britain’s EU external affairs subcommittee, its efforts to break the business model of smuggling through arrests and the destruction of migrant boats have failed. Part of the problem is that smugglers in Libya have simply adapted their business models in response to European rescue operations, placing migrants on cheaper, less seaworthy vessels, knowing that they no longer need to travel 160 nautical miles to reach Italian waters but a mere 12 nautical miles to where search-and-rescue ships sit waiting just outside Libya’s territorial waters. “Operation Sophia has become like a taxi,” said Ashraf al-Badri, a Libyan coast guard official who blames Western NGOs for incentivizing migrant departures.</p>

							<p>Some critics have gone further, accusing NGOs of actively collaborating with smugglers in Libya. In March, Italian prosecutors launched a task force to look into who was financing search-and-rescue NGOs, although they later <a href="http://www.reuters.com/article/us-europe-migrants-italy-ngo-idUSKBN17Z260" target="_blank">conceded</a> that there was no proof that they were linked to smugglers. Still, NGOs like Sea-Watch are regularly accused by critics on both sides of the Mediterranean of colluding with smugglers. “I don’t have proof of communication between the two, but I have my theories,” Badri said. “When the NGOs save one boat, the smugglers send more boats knowing they will be saved.”</p>

							<p>But experts who study the issue say it’s unfair to blame the search-and-rescue operations of NGOs for encouraging migrants to attempt the voyage. They point out that NGOs are responsible for only a fraction of the total number of rescues that take place at sea, with Operation Sophia and rescues by merchant vessels carrying out the vast majority of maritime interdictions. The deadly Mediterranean crossing, moreover, may not even be the most dangerous part of many migrants’ journeys.</p>

							<p>“The Mediterranean crossing is only the last leg of a very long journey for most of them and probably not the riskiest: Crossing the Sahara and surviving even just a few weeks in Libya are by far more dangerous,” said Mattia Toaldo, a senior policy fellow at the European Council on Foreign Relations. “If dying in the Mediterranean was a deterrent for crossings, the number of departures from Libya should have gone down after 2016, which was the deadliest year on record. Instead, flows in the first semester of 2017 were 18.7 percent higher than last year.”</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-620803938.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-620803938.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-620803938.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-620803938.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-620803938.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-620803938.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-620803938.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Migrants panic as they fall in the Mediterranean Sea during a rescue operation off the Libyan coast by the <em>Topaz Responder</em> rescue ship on Nov. 3, 2016. (Andreas Solaro/AFP/Getty Images)</p>

							<p>A recent <a href="https://sea-watch.org/en/pm-sea-watch-demands-independent-investigation-of-the-illegal-return-of-an-overcrowded-wooden-boat/" target="_blank">report</a> by the Forensic Oceanography project at Goldsmiths, University of London, titled “Blaming the Rescuers,” reached the same conclusion, arguing that accusations that NGOs are “colluding with smugglers” and constitute a pull factor do not withstand empirical scrutiny.</p>

							<p>As for the events on May 10, both sides maintain that the other was acting illegally. “The Libyan navy went to rescue people, but Sea-Watch was interfering,” Omar Balaman, the commander of the Libyan coast guard, told reporters gathered at the port in Tripoli. “We told them they were intruding in our job and that they risked jeopardizing the rescue mission,” he continued. “They have a lot to answer for.”</p>

							<p>Sea-Watch offered a completely different version of events. “It is ridiculous,” said Theresa Leisgang, a communications officer for the organization who was on board the boat that morning, when asked about accusations that Sea-Watch tried to interfere with the Libyan navy’s operations. “A collision is the last thing we want.”</p>

							<p>Sea-Watch has also provided <a href="https://sea-watch.org/en/pm-sea-watch-demands-independent-investigation-of-the-illegal-return-of-an-overcrowded-wooden-boat/" target="_blank">videos and still photos</a> to demonstrate that it was the first to arrive and that the migrant boat was 20 nautical miles from the Libyan coast and therefore well outside the territorial waters in which Libya has sovereign rights. Returning migrants to Libya, a country where migrants are systematically mistreated and abused, Sea-Watch argues, violates the principle of nonrefoulement, enshrined in international law, which bars countries from forcing asylum-seekers to return to countries where they would face persecution.</p>

							<p>When the migrants finally arrived at the port of Tripoli after the altercation on May 10, they were hungry and thirsty, but, more than anything, they were devastated. Many had drained family savings and endured months of hardship, including torture and abuse, for a spot on the boat they boarded that morning. Technically, they had been rescued at sea, but the looks on their faces suggested otherwise. As they disembarked from the Libyan battleship, a harsh reality washed over them: They were back in Libya, a country they had risked everything to flee.</p>

							<p>“We saw the Europeans and thought they would take us,” said Sidi Dembélé, a visibly shaken young man from Mali, referring to the ship operated by Sea-Watch. He had hoped to find agricultural work in Europe but was now steeling himself for what he knew would be a harsh period of detention. “We know Libya is very dangerous and that those who are captured suffer.” <span class="red-box-end"></span></p>

							<p class="author-bio"><strong>Peter Tinti</strong> (<a href="https://twitter.com/petertinti" target="_blank">@petertinti</a>) is an independent journalist focusing on conflict, security, human rights, and organized crime. He is the author, with Tuesday Reitano, of <em>Migrant, Refugee, Smuggler, Savior</em>.</p>
							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration" class="internal-link read-link"><img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
										<noscript>
											<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_15waiting_triq_sikka.jpg" alt="" />
										</noscript></a>
										<a href="#part-3-nearly-there-but-never-further-away-libya-africa-europe-EU-militias-migration" class="internal-link read-link"><p class="about_lead refer"><strong>Nearly There, but Never Further Away</strong></p></a>
										<p class="refer referBody">Europe has outsourced the dirty work of border control to Libyan militias. In doing so, it has turned African migrants into commodities to be captured, sold, and traded like slaves.</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg" alt="" />
											</noscript>
										</a>
										<a href="#part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="internal-link read-link"><p class="about_lead refer"><strong>All for Nothing</strong></p></a>
										<p class="refer referBody">Migrants who fail to reach Europe face humiliation, isolation, and impoverishment at home.</p>
									</div>
								</div>
						</div>
					</div>
					<?php endif; ?>
				</article>

			</section>

			<section id="part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported--intro" class="sidebar sidebar--second" data-set-marker="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro" data-desktop-next="part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration--intro" data-desktop-prev="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro" data-mobile-next="part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration--intro" data-mobile-prev="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro">

				<article>
					<header id="story-9-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal1a.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal1a.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal1a.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal1a.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/008_senegal1a.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p class="labels">Part IV</p>
							<h1>All for Nothing</h1>
							<p class="dek">Migrants who fail to reach Europe face humiliation, isolation, and impoverishment at home.</p>
							<?php if( $publish_post['part-4-all-for-nothing'] ): ?>
								<p><a href="#part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Thursday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['part-4-all-for-nothing']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['part-4-all-for-nothing']['facebook'] ?>.</span>
						<span class="share-text share--twitter"><?php echo $social_sharing['part-4-all-for-nothing']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['part-4-all-for-nothing']['image'] ?>" alt="" />
					</header>
					<?php if( $publish_post['part-4-all-for-nothing'] ): ?>
					<div id="part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="content--main">
						<div class="post-header">
							<div id="headerSidebar" class="sidebar-text">
								<p class="mobile-post-marker"><span style="font-weight:900;">Europe Slams Its Gates</span><br>Part IV</p>
								<h1 class="post-hed">All for Nothing</h1>
								<h2 class="post-dek">Migrants who fail to reach Europe face humiliation, isolation, and impoverishment at home.</h2>
								<p class="post-author" style="margin-bottom: 0.83em;">Story and Photography by Jill Filipovic</p>
                                <p class="post-date">Oct. 5, 2017</p>
							</div>
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg" alt="" class="main-image" />
							</noscript>
							<p class="post-header-captions">Mohammad Moustafa Ndoye sells fish from his stall in the covered market in Dahra, Senegal.</p>
							<p class="post-header-captions-mobile-sidebar">Mohammad Moustafa Ndoye sells fish from his stall in the covered market in Dahra, Senegal.</p>
						</div>
						<div class="post_copy mobile-copy" style="padding-bottom: 6em;">
							<p class="post_intro_lead">DAHRA, Senegal — In his stall in the middle of a bustling covered market, a low ceiling blocking out the unforgiving sun, Mohammad Moustafa Ndoye plucks damp fish after damp fish out of a plastic bucket and plunks them onto a concrete slab. With an old knife, he sloughs off their silver scales, some of them sticking, glittering, to his hands and forearms. He turns his heavy-lidded eyes to the left and to the right, but, so far, there are no buyers, which means no money to bring home for his wife and their two children, nothing to replace the savings he wiped out last April — 2 million CFA, or about $3,600 — all of it for nothing.</p>

							<p>Mohammad Moustafa Ndoye is not supposed to be here.</p>

							<div class="media-contain quote-right about">
								<p class="about_lead refer"><strong>ABOUT THIS SERIES</strong></p>
								<p class="refer">Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights.<br /><br />
								<span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
								</noscript>
							</div>

							<p>If you had asked him last year where he would be now — before the long bus trip and the smugglers and the desert and the Mediterranean, before prison and his first ride in an airplane, before the humiliation of coming back here to Dahra, a Senegalese city about 150 miles inland from Dakar, the capital — he would have said: in Italy. Making plenty of money, at least relative to his income in Senegal. Finding opportunity, even without an official work permit or legal residency, just like the tens of thousands of other men from Senegal who migrate to Europe every year. They send back the money that pays for the concrete houses that stand out in villages of thatched huts. They have a future.</p>

							<p>But not Ndoye. Here in the fish market, where his hopes have been replaced by humiliation, the future looks like more of the same: scaling, selling, and, too often, not selling. On a good day, Ndoye now makes 4,000 CFA, or about $7. He would make more if he could buy a refrigerated truck to transport fresh fish directly from the coast, but that would cost roughly $9,000, an amount that would take him a decade or more to save in Senegal. Just a few years in Europe, though, and he would earn easily that much.</p>

							<p>Which is why, in April, Ndoye used the money he saved up to buy a bus ticket to Mali and another to Burkina Faso and finally one to Agadez, a notorious smuggling hub in Niger located at the gateway to the Sahara. There he paid a smuggler about $270 for a seat in a pickup truck packed with 24 other men, one in a convoy of a dozen similar trucks overflowing with travelers bound for Libya. They were packed so tightly that when the trucks occasionally jolted over rocks or dunes, men would sometimes fall off into the desert; the convoy wouldn’t stop. “You don’t sleep,” Ndoye recalled. “When you sleep, you fall and you die.”</p>

							<p>Once he reached Libya’s Mediterranean coast, smugglers herded Ndoye onto a flimsy rubber dingy with more than 100 other migrants. They didn’t make it far before the engine failed. Libyan authorities eventually hauled them ashore and threw them all in prison, promising to release them if they paid a hefty ransom. Ndoye’s family sent money for his release, but the guards at the prison didn’t hold up their end of the bargain. For 13 days, he and the other rescued migrants stayed locked in a 40-square-foot room, given so little food that “we got thinner and thinner,” he said.</p>

							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/002_senegal2.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/002_senegal2.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_senegal2.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_senegal2.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_senegal2.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_senegal2.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/002_senegal2.jpg" alt="" />
							</noscript>
							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">The wind whips up dust in Koyli Alfa, a village in central Senegal where rapid desertification has hurt local farmers and contributed to the exodus of young men to Europe.</p>

							<p>Eventually, one of the prison guards appeared to take pity on him. He invited Ndoye over to his house, fed him, and shook him down for more money, which his sister wired from Senegal. When he was finally set free, he went straight to the Senegalese Embassy in Tripoli, where he paid another $400 for a plane ticket to Niger. Then he took the bus trip in reverse — first to Mali, then back to Dakar, and then back here, back to selling fish.</p>

							<p>Last year, more than 10,000 Senegalese migrants made it to Italian shores via the Mediterranean Sea. They were among 181,000 mostly sub-Saharan African migrants who took what experts call the “Central Mediterranean route” to Europe from North Africa. An estimated 400,000 migrants are currently stranded in Libya, many of them in detention facilities supported by the International Organization for Migration. The men in these detention centers are routinely beaten, extorted for money, and sometimes sold into forced labor; women are often sold for sex.</p>

							<p>“At IOM, we promote migration,” said Jo-Lind Roberts, IOM’s head of office in Senegal. “But in the issue with the Mediterranean migration route, we can’t keep going like this.” </p>

							<div class="media-contain quote-right pullquote">
								<p>Migrants who fail to reach Europe often return home reluctantly, embarrassed to see their plans thwarted and money lost or their role as a family breadwinner diminished.</p>
							</div>

							<p>Migrants who fail to reach Europe often return home reluctantly, embarrassed to see their plans thwarted and money lost or their role as a family breadwinner diminished. Even worse is admitting they were jailed, as if they were criminals — an experience that carries a heavy stigma in some villages. Many returnees are traumatized by the deaths they witnessed and the abuses they saw around them, but few receive psychological care. According to Roberts, IOM encourages them to talk to their families and neighbors about the hardships of the journey, both for catharsis and to discourage others from taking the perilous trip. Firsthand stories, she said, challenge a widespread “vision of Europe or the trip, which doesn’t correspond with reality.”</p>

							<p>Malik Diop was one of those with an unrealistic view of the journey. He had heard it was dangerous, but he didn’t know how bad it was until it was too late. The slight 24-year-old spent the same hot days crammed in the same overfilled trucks as Ndoye, first taking the route from Dakar to Agadez and then paying a smuggler to ferry him to Sabha in Libya. There, his journey became a series of imprisonments. At one point, he was sold to a slave trader and released only when his family in Senegal paid a ransom. Later, he was held for three months in a facility with so many other migrants that there wasn’t room to lie down. At each stop, prisoners were beaten, sometimes so severely that they died of their injuries.</p>

							<p>Eventually, Diop made it onto an IOM flight back to Senegal, arriving in Dakar with 170 other returned migrants in early June. But Diop has struggled to readjust to life back home. He gave up his job as a merchant when he left, so he is mostly unemployed and aimless. Sleeping is difficult. “I think about it all the time,” Diop said about his time in Libyan prisons. “It was so hard. It changed me.”</p>

							<p>Some returned migrants, like Diop, remain in loose contact with IOM and NGOs that try to help them reintegrate into their communities and find jobs in a country with soaring rates of unemployment. Many migrants, though, come back to a life put on pause, returning home broke, traumatized, out of a job, and with disappointed family members wondering what they will do to support them.</p>

							<p>The harrowing journey across the desert and into the sea put Ndoye, toiling in the Dahra fish market, off the Libya route. But it hasn’t stopped him from planning another try at making it to Italy, he hopes legally. “I’m selling fish until I find something better,” he said. When he finds a different, safer way to get to Italy, “I will go.” <span class="red-box-end"></span></p>

							<p class="author-bio"><strong>Jill Filipovic</strong> (<a href="https://twitter.com/jillfilipovic" target="_blank">@JillFilipovic</a>) is the author of <em>The H-Spot: The Feminist Pursuit of Happiness</em>.</p>
							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" alt="" />
											</noscript>
										</a>
										<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link"><p class="about_lead refer"><strong>The Savior’s Dilemma</strong></p></a>
										<p class="refer referBody">Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Next</h4>
									<div class="teaser-contain">
										<a href="#part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg" alt="" />
											</noscript>
										</a>
										<a href="#part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration" class="internal-link read-link"><p class="about_lead refer"><strong>The Dam Will Hold. Until It Doesn’t.</strong></p></a>
										<p class="refer referBody">Europe has managed to slow the flow of migrants, at least for now — but is undermining its most cherished values in the process. (COMING FRIDAY)</p>
									</div>
								</div>
						</div>
					</div>
					<?php endif; ?>
				</article>

			</section>

			<section id="part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration--intro" class="story last-slide" data-set-marker="part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration--intro" data-desktop-next="intro-0--intro" data-desktop-prev="the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU--intro" data-mobile-next="intro-0--intro" data-mobile-prev="part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported--intro">

				<article>
					<header id="story-10-header" data-bgset="https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/009_germany1a.jpg?w=1500 1500w" data-sizes="auto" class="lazyload">
						<div class="header-copy">
							<p id="part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration-dek" style="display:none;">Part V: Germany</p>
							<p class="labels">Part V</p>
							<h1>The Dam Will Hold. Until It Doesn’t.</h1>
							<p class="dek">Europe has managed to slow the flow of migrants, at least for now — but is undermining its most cherished values in the process.</p>
							<?php if( $publish_post['part-5-the-dam-will-hold'] ): ?>
								<p><a href="#part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration" class="internal-link read-link readmore_slider">Read Story</a></p>
							<?php else: ?>
								<p><span class="readmore_slider">Coming Friday</span></p>
							<?php endif; ?>
						</div>

						<span class="share-text share--head"><?php echo $social_sharing['part-5-the-dam-will-hold']['head'] ?></span>
						<span class="share-text share--facebook"><?php echo $social_sharing['part-5-the-dam-will-hold']['facebook'] ?>.</span>
						<span class="share-text share--twitter"><?php echo $social_sharing['part-5-the-dam-will-hold']['twitter'] ?></span>
						<img class="share-image" src="<?php echo $social_sharing['part-5-the-dam-will-hold']['image'] ?>" alt="" />
					</header>
					<?php if( $publish_post['part-5-the-dam-will-hold'] ): ?>
					<div id="part-5-the-dam-will-hold-until-it-doesnt-germany-europe-merkel-EU-africa-migration" class="content--main">
						<div class="post-header">
							<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-848204432-2.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-848204432-2.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-848204432-2.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-848204432-2.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-848204432-2.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-848204432-2.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload main-image dark-image" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-848204432-2.jpg" class="main-image" alt="" />
							</noscript>
							<div id="header1" class="post-header-text">
								<p class="post-header-captions-mobile">A vandalized billboard promoting German Chancellor Angela Merkel in Stralsund, Germany, one week before she was elected to a historic fourth term. (Sean Gallup/Getty Images)</p>
								<p class="mobile-post-marker"><span style="font-weight:900;">Europe Slams Its Gates</span><br>Part V</p>
								<h1 class="post-hed">The Dam Will Hold. Until It Doesn’t.</h1>
								<h2 class="post-dek">Europe has managed to slow the flow of migrants, at least for now — but is undermining its most cherished values in the process.</h2>
							</div>
							<p class="post-header-captions">A vandalized billboard promoting German Chancellor Angela Merkel in Stralsund, Germany, one week before she was elected to a historic fourth term. (Sean Gallup/Getty Images)</p>
						</div>
						<div class="post_copy mobile-copy">
							<p class="post-author" style="margin-bottom:0.83em;">By Cameron Abadi</p>
                            <p class="post-date">Oct. 6, 2017</p>
							<p class="post_intro_lead">Two weeks after her decision in early September 2015 to open Germany’s borders to any Syrian in search of asylum, Angela Merkel felt compelled to respond to her critics. “I have to honestly say,” she declared at a press conference in Berlin, “if we’re going to start having to apologize for showing a friendly face at a time of crisis, then this isn’t my country anymore.” It was an argument that Germany’s identity — and, by implication, Europe’s — was inseparable from its values and its actions in service of them.</p>

							<div class="media-contain quote-right about">
								<p class="about_lead refer"><strong>ABOUT THIS SERIES</strong></p>
								<p class="refer">Europe’s migration crisis isn’t over — it’s just beginning. With net immigration expected to exceed 1 million per year for the next five decades and xenophobia surging, European leaders are grasping for new ways to slow the influx. So far, their efforts have included tighter rules and enforcement at home, as well as multibillion-dollar development projects and support for local militaries and governments in Africa. <span class="fp-red">Foreign Policy</span>’s special investigation looks at the impact of all this on the aspiring migrants, their homelands — and on Europe itself, where the desperate drive to preserve stability and fend off populism risks undermining long-cherished values like openness, tolerance, and respect for basic rights.<br /><br />
								<span style="font-weight:900;">Reporting for this series was made possible in part by a grant from the Pulitzer Center on Crisis Reporting.</span></p>
								<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" class="lazyload logoImg" />
								<noscript>
									<img src="https://foreignpolicymag.files.wordpress.com/2017/09/pulitzer-center.png" alt="Pulitzer Center" />
								</noscript>
							</div>

							<p>It’s also an argument that, in the two years since Europe began integrating millions of people fleeing the Middle East, has lost much of its force. Merkel’s words, like those of her European peers, are typically still warm to migrants, and she has never ceased defending her commitment to create a “welcoming culture.” But, rhetoric aside, Europe — including Germany — has become much less friendly toward outsiders in the last two years. Which once again raises the question Merkel posed in 2015: Is Europe, as defined by its commitment to core liberal values, still recognizable to her or anyone else?</p>

							<p>This year, Italy is on pace to receive more than 150,000 migrants from Africa, joining the 500,000 who arrived in the previous three years; thousands more died at sea along the way. Like the Syrian migration crisis, this current wave of new arrivals represents many things: a potential humanitarian disaster, an object lesson in the human consequences of impoverishment, and a natural experiment in prevailing theories of development aid and international relations. But European leaders, including Merkel, have treated this latest crisis mostly as a problem of political algebra, one defined by the imbalance between the number of Africans who wish to live in Europe and the number that can be accommodated without sparking revolt, or serious discontent, from European citizens.</p>

                            <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/344654170%3Fsecret_token%3Ds-A35M6&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>

							<p class="post-article-width-image-caption" style="margin-bottom: 2.5em;">Listen to this story from <span class="fp-red">Foreign Policy</span>'s series, "Europe Slams Its Gates," and other FP content, as well as features from a range of top publications: Download the <a href="https://goo.gl/4RxdZG" target="_blank">AUDM</a> app for your iPhone.</p>

							<p>Different parts of the continent are inclined to solve for the equilibrium in different ways. In Rome, politicians have been pressing European states for assistance, demanding that they accept a share of the migrants arriving on Italy’s shores — and threatening, absent such assistance, to issue those migrants visas that would permit them to travel anywhere in the EU. Most other countries in Europe, citing EU law, claim that they have no obligation to help and that the burden is on front-line countries like Italy to better protect Europe’s southern borders from migrants, more efficiently process the asylum claims of those who manage to circumvent those defenses — and return to Africa anyone whose claim is rejected. In Eastern Europe especially, official government policy is increasingly indistinguishable from reactionary populism. Poland, Hungary, Slovakia, and the Czech Republic have all refused to participate in an existing EU plan that obliges them to accept Middle Eastern refugees currently stranded in Greece. Hungarian Prime Minister Viktor Orban has not only ignored the EU Commission’s appeals by building two fences along his country’s border with Serbia, but defiantly asked the rest of Europe to foot the bill.</p>

							<p>Meanwhile, European NGOs operating in the Mediterranean are claiming the humanitarian emergency posed by migrants facing danger and death en route should override other political concerns — even as establishment parties across the continent are warning that humanitarianism is outweighed by the political emergency posed by rising populism at home.</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-630175432.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-630175432.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-630175432.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-630175432.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-630175432.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-630175432.jpg?w=1500 1500w" data-sizes="auto" alt="" style="max-height: none; margin-bottom: 0;" class="post-module lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/002_gettyimages-630175432.jpg" alt="" style="max-height: none; margin-bottom: 0;" class="post-module" />
							</noscript>
						<p class="post-image-caption">Migrants and volunteers for humanitarian organizations protest in support of refugees seeking asylum in Europe after the closure of the Baobab migrant camp in Rome on Dec. 17, 2016. (Giuseppe Ciccia/Pacific Press/LightRocket via Getty Images)</p>

						<div class="post_copy">
							<p class="post_intro_lead">European conflicts of this sort tend not to get collectively addressed unless Germany, whose thriving economy makes it first among equals in the horse-trading that accompanies all European Union negotiations, insists on it. So Europe’s approach is obliged to exist in the space carved out by two recent statements by Angela Merkel. This July, in her annual “summer interview” with German national broadcasters, the chancellor was emphatic in referring to her government’s commitment to accepting refugees: “When it comes to placing a ceiling on the number of migrants, my position is clear: I will never accept that.” But several months earlier, Merkel gave a public speech in which she expressed regret over her decision in 2015 to open Germany’s borders to approximately 1 million Syrian refugees: “Nobody wants a repeat of that situation, including myself.”</p>

							<p>Such is Merkel’s stated dual mandate: no compromise on ethical principles, but no compromise on a commitment to Europe’s socio-cultural status quo and political order. The result is the present set of compromises that comprise European policy toward the recent surge in African migration: a rhetorical commitment to accepting anyone with a legitimate claim to refugee status paired with a host of measures — including development and security assistance to African dictatorships and fragile states — designed to prevent as many people as possible from making that claim by persuading, or compelling, them to not leave Africa in the first place.</p>

							<p>Migration researchers look at Merkel’s criteria and see a moral muddle — an unworkable contradiction — with the near-record number of migrants from Africa this year, and regular mass drownings in the Mediterranean Sea, serving as the inevitable result. For Germans, by contrast, the muddle is the point. What looks like denial feels to them like reassurance. It is no accident that they have just elected Merkel to a historic fourth term as chancellor.</p>

							<div class="media-contain quote-right pullquote">
								<p>Migration researchers look at Merkel’s criteria and see a moral muddle. For Germans, by contrast, the muddle is the point.</p>
							</div>

							<p>It’s not yet clear whether, or how long, other Europeans in places like Italy that are closer to the front lines of the crisis will be persuaded of the virtues of this German approach — or rather whether the steady pressure of new arrivals from Africa will lead them to adopt new measures aimed at keeping Europe European. Left- and right-wing populist politicians in Italy have begun proposing that the country — in violation of its commitments under international law — find new ways to keep additional migrants from reaching it so that Rome can avoid the obligation to consider their asylum applications. Such proposals may horrify human rights advocates but are being embraced by many voters: The populists’ poll numbers continue to rise.</p>

							<p>For now, Europeans appear to have little choice but to continue following Merkel’s lead. Her Social Democratic challenger in the Sept. 24 election, Martin Schulz, previously served as president of the European Parliament for five years and had a more expansive vision of European cooperation and German leadership to address common continental problems. But his efforts to use the German election campaign to initiate more open discussion about how to compel cooperation in resettling African migrants across Europe failed. At campaign stops across the country, Schulz talked himself hoarse attacking Merkel for obfuscating that Europe is in the middle of a new migration crisis and for refusing to risk asking Germans and other Europeans to formally agree to accept a share of any Africans who reach European territory. He arranged a trip to Italy, with German media in tow, to meet with the Italian prime minister and discuss the burdens his government has faced in dealing with the issue — at once a rebuke to Merkel, who has yet to make such a visit, and a wake-up call to the German public.</p>

							<p>But Germans showed little inclination to oblige Schulz, whose party received only 20 percent of votes in the election. In hindsight, this lack of enthusiasm for Schulz and his calls to solve the crisis should be no surprise. In Germany, like most of Europe, there’s little evidence that there’s a crisis at all. A visitor right now to Berlin or Vienna, Budapest or Lyon, won’t witness scenes anything like the bureaucratic and social improvisations triggered by 2015’s waves of Syrian arrivals. Even at the nerve center of Germany’s Interior Ministry, tasked by the chancellery with managing migration policy, senior officials convey calm and control, not anxiety. Today’s crisis is still concentrated in the Mediterranean Sea and the countries that border it.</p>

							<p>But the problem isn’t just that Europeans don’t yet sense there is a crisis that needs addressing. Even if they did, many would still not want to deal with it. A recent poll showed that 54 percent of Germans didn’t want migration to be politicized in the national election campaign — that is to say, they would prefer it to be a crisis that’s handled quietly by political professionals, rather than one that burdens public debate.</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/003_gettyimages-630175432.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/003_gettyimages-630175432.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/003_gettyimages-630175432.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/003_gettyimages-630175432.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/003_gettyimages-630175432.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/003_gettyimages-630175432.jpg?w=1500 1500w" data-sizes="auto" alt="" style="max-height: none; margin-bottom: 0;" class="post-module lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/003_gettyimages-630175432.jpg" alt="" style="max-height: none; margin-bottom: 0;" class="post-module" />
							</noscript>
						<p class="post-image-caption">Merkel takes a selfie with a young man who said he came alone as a refugee to Germany from Eritrea during an open house at the Chancellery in Berlin on Aug. 27. (Sean Gallup/Getty Images)</p>

						<div class="post_copy">
							<p class="post_intro_lead">Germany has no shortage of political professionals dedicated to migration, and they all seem to agree on one thing: Europe’s current migration policies, including those championed by Germany, don’t add up. “What we’re doing doesn’t yet add up to a solution,” says Günter Nooke, Germany’s special envoy for Africa.</p>

							<p>Consider the focus on development: Angela Merkel’s government has been touting the billions of dollars it spends on foreign aid as a way to combat mass migration, even heralding it as a major outcome of the G-20 summit it hosted this summer in Hamburg. The idea is that by injecting money into Africa — building factories, creating jobs, and staffing training programs — it will reduce the likelihood that poor young men will risk the dangerous Mediterranean crossing. “But we have been doing this development aid for decades,” says one official at the German development ministry, who requested anonymity to freely criticize his own department’s policies. “And now we slap a new label on it, call it a Marshall Plan, and imagine it will solve migration policy. It wasn’t working before! It’s supposed to work now at something completely different?”</p>

							<div class="media-contain quote-right pullquote">
								<p>The question is what it would mean for a European migration policy to “work” at all.</p>
							</div>

							<p>The question, of course, is what it would mean for a European migration policy to “work” at all. Marginal increases in foreign aid will do little to address underlying demographic forces. The population of sub-Saharan Africa is expected to expand dramatically in the coming decades, with 800 million working-age people entering the labor force between 2010 and 2050 and some unknown fraction of that number inevitably trying to reach Europe.</p>

							<p>It’s against this background that Nooke, the Africa envoy, admits that his vision for a worthy solution to the migration crisis doesn’t follow the model of Merkel’s quiet incrementalism. Instead, he suggests adopting World Bank chief economist Paul Romer’s controversial proposal, originally made in an entirely different context, for “charter cities” — special economic zones that would be administered by Europe on African territory with the goal of attracting intra-African migration. “Europe could help create this,” Nooke tells me. “This is possible. And this is the sort of creative thinking that we need to end this crisis.” It’s also the sort of thinking that inevitably inspires cynicism about its resemblance to European colonialism. Amid the search for similarly permanent solutions, some migration researchers offer their more radical ideas: Europe subsidizing contraception as a way to manage Africa’s soaring population growth or helping facilitate migration from Africa to emerging markets in Asia that are in greater need of labor. These ideas have remained on the fringes until now — but the same was once said of nativist parties that now regularly vie for political power across Europe.</p>

							<p>Gerald Knaus has been busy pitching an entirely different path toward resolving the present crisis. Knaus is the founder of a small think tank in Berlin called the European Stability Initiative, best-known for helping design the framework for the 2016 deal between Europe and Turkey that helped stem the flow of Syrian refugees to the continent by tasking Istanbul with ensuring, through means mostly left unspecified, that they would cease reaching Greek shores. Knaus’s new “Rome Plan” aims to address the present crisis by persuading African countries to agree to accept the return of a greater number of their citizens who have reached Europe’s shores (something those countries are presently reluctant to do, in part because their economies depend on remittances), in exchange for Europe’s agreement to accept a predetermined number of migrants through official channels every year.</p>

							<p>It’s a coherent framework and seems all the more so when described with Knaus’s irrepressible conviction. But until now Knaus has had trouble getting European leaders to sign on — perhaps because, in formalizing legal channels for migration, the Rome Plan would require that they publicly explain to their citizens that they will have to be prepared to accept at least tens of thousands of African migrants per year, essentially in perpetuity.</p>

							<p>Whatever form a sustainable permanent solution to African mass migration were to take, it would require dramatic efforts by Europe’s political establishment — to persuade Europeans to integrate a significantly greater number of Africans over a significantly greater duration of time (as in Knaus’s proposal), to open their pocketbooks sufficiently widely to help create viable African economies that can support Africa’s youth bulge (as in Nooke’s), or to throw international law out the door and build a deeper moat between the continents. The former two options are monumental, perhaps impossible, challenges; the latter morally untenable — simply put, it would change what modern Europe has come to stand for.</p>

						</div>

						<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/004_gettyimages-840253290.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/004_gettyimages-840253290.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/004_gettyimages-840253290.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/004_gettyimages-840253290.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/004_gettyimages-840253290.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/004_gettyimages-840253290.jpg?w=1500 1500w" data-sizes="auto" alt="" style="max-height: none; margin-bottom: 0;" class="post-module lazyload" />
							<noscript>
								<img src="https://foreignpolicymag.files.wordpress.com/2017/09/004_gettyimages-840253290.jpg" alt="" style="max-height: none; margin-bottom: 0;" class="post-module" />
							</noscript>
						<p class="post-image-caption">From left, Federica Mogherini, the EU’s foreign-policy chief; Nigerien President Mahamadou Issoufou; Chadian President Idriss Déby; French President Emmanuel Macron; Merkel; and Spanish Prime Minister Mariano Rajoy speak at a meeting on easing Europe’s migrant crisis in Paris on Aug. 28. (Ludovic Marin/AFP/Getty Images)</p>

						<div class="post_copy" style="padding-bottom: 6em;">
							<p class="post_intro_lead">And so, at the heart of Europe, Merkel’s team has been weighing how best to design trade-offs that balance this tension. The German government, for instance, wants to avoid doing anything that encourages more Africans to head for Europe, but at the same time German law promises certain welfare-state benefits to any migrant residing in Germany, whether permanently or temporarily. In 2012, Germany’s Constitutional Court declared that any resident of the country was entitled to the minimal resources necessary to live a dignified life. The German government has nonetheless tried to find ways to pass laws that would counteract the attraction that might pose to future migrants. In March 2016, the government passed a law putting a moratorium on visas for the family members of newly arrived refugees; that same year, it also passed measures making it easier for Germany to deport any migrant whose asylum application had been rejected. Merkel’s ongoing refusal to grant legal residency to any African migrants who arrive in Europe through Italy — while blocking similar EU proposals that would mandate such integration — is an attempt to deter further migration.</p>

							<div class="media-contain quote-right pullquote">
								<p>Europe’s overall strategy amounts to two separate, but interlocking, deferments of responsibility.</p>
							</div>

							<p>Another trade-off concerns foreign policy: how to reconcile Europe’s commitment to the spread of democracy and human rights with the fact that controlling migration requires working with unsavory dictatorships in Africa that hardly claim to respect either. “Of course we shouldn’t be cooperating with dictatorships,” says Nooke, the Africa envoy. “We should be pushing for democratization. But we have to try everything.… And the German public needs to understand that.” To that end, Merkel’s government has openly, if quietly, acknowledged the human rights shortcomings of Europe’s new African security partners — as reflected in the German Foreign Ministry’s <a href="http://www.dw.com/en/libyan-trafficking-camps-are-hell-for-refugees-diplomats-say/a-37318459" target="_blank">leaked internal cable</a> that the jails administered by the Libyan government approach “concentration camp-like” conditions — while maintaining its commitment to the partnerships nonetheless.</p>

							<p>Europe’s overall strategy amounts to two separate, but interlocking, deferments of responsibility. The first deferment is chronological; it aims to buy time, to put off the moment that European citizens feel obliged to make a decisive reckoning between political order and political values. The second deferment is geographic; it asks others, outside of Europe, to do the dirty work required to buy this time. The key to synchronizing these separate gears is Europe’s ability to communicate different things to different audiences at the same time. Would-be migrants must be made to understand that if they risk undertaking a journey to Europe, the protection of their basic rights will not be anyone’s foremost concern. Africa’s dictatorships and fragile states must be persuaded that Europe is serious about — and willing to pay for — the enforcement of security measures to keep Africans in Africa. And European citizens must somehow be reassured that none of this marks, or promises to in the near future, any significant shift in either Europe’s way of life or sense of itself as a moral, just, and generous place.</p>

							<p>At the least, it would be accurate to call this approach hypocritical. No other word seems better suited to describe Merkel’s continued self-praise for her response to 2015’s “humanitarian” crisis, with her acceptance of the systemic human rights violations overseen by Europe’s partners in Africa. There are those who think such hypocrisy is unsustainable, given the ubiquity of reporting about the mistreatment of migrants in Africa by journalists and NGOs and by migrants themselves via social media. For now, however, Europe is content to wager that this hypocrisy can be sustained long enough — that is, until any given national election.</p>

							<div class="media-contain quote-right pullquote">
								<p>Senior German officials responsible for overseeing the policy response to African migration believe Europe’s current set of policies is already working.</p>
							</div>

							<p>But it would be a mistake to expect any major shifts in European migration policy now that Merkel’s has won re-election. Senior German officials responsible for overseeing the policy response to African migration believe Europe’s current set of policies is already working. Summer traditionally sees a spike in arrivals, but the number of migrants who crossed the Mediterranean in July and August this year declined by half from previous months. Merkel’s government believes that if the policies continue to be carried out — with some as yet unspecified accommodation for improved human rights oversight in Libya, Niger, and elsewhere in Africa — then the migration problem can be indefinitely brought under control, if not permanently solved. And, in that case, the term “crisis” would no longer apply to the phenomenon of African migration.</p>

							<p>Other European countries seem to agree. At a mini-summit organized by Merkel in late August involving European and African leaders with the explicit goal of reducing the number of African migrants arriving in Europe, French President Emmanuel Macron praised Italy’s cooperation with Libya’s coast guard, despite the many reports of lawlessness and impunity. “What has been done by Italy and Libya is a perfect example of what we are aiming for,” Macron said.</p>

							<p>But experts are doubtful. Even if there is a temporary lull, they argue that the structural causes of migration — above all, the massive inequality in economic opportunity and population growth — guarantee that the phenomenon will worsen in the years and decades to come. Meanwhile, the moral compromises involved in setting up security partnerships with African autocracies have not yet been put to any significant political test. There has yet to be a scandal in Africa, or death in the Mediterranean, that has concentrated the mind of a European electorate on the moral calamities paid for with their tax money and performed in their names.</p>

							<p>European officials do not deny that their present policies are a compromise; indeed, like policymakers everywhere, they embrace that term for its suggestions of pragmatism. The measure of pragmatism, however, has always been results, and, in the present case, this is a standard that may prove unforgiving. In the face of African migration, Europeans have been content thus far to loosen their grip on some of their most deeply held convictions, from the universality of human rights to the sanctity of the cultural and ethnic makeup of their societies. But nobody can know in advance how far the grip on such convictions can be loosened before the public will feel something inviolable is beginning to slip.</p>

							<p>What seems clear is that this tipping point will continue to be tested by African migrants motivated by their own convictions about the sanctity and dignity of their lives. And if the compromises cease working, and a more fundamental moment of reckoning arrives, Europe may be shocked to discover just how much, politically and culturally, its pragmatism has placed at risk. “If you sell your soul, and it still doesn’t work?” Knaus says. “You don’t want to find yourself in that position.” <span class="red-box-end"></span></p>


							<p class="author-bio"><strong>Cameron Abadi</strong> (<a href="https://twitter.com/cameronabadi" target="_blank">@CameronAbadi</a>) is deputy editor, online, at <span class="fp-red">Foreign Policy</span>.</p>
							<div class="teasers">

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_senegal1.jpg" alt="" />
											</noscript>
										</a>
										<a href="#part-4-all-for-nothing-senegal-africa-europe-EU-migration-deported" class="internal-link read-link"><p class="about_lead refer"><strong>All for Nothing</strong></p></a>
										<p class="refer referBody">Migrants who fail to reach Europe face humiliation, isolation, and impoverishment at home.</p>
									</div>
								</div>

								<div class="teaser">
									<h4 class="teaser-label">Previous</h4>
									<div class="teaser-contain">
										<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link">
											<img data-src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" data-srcset="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=400 400w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=600 600w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=900 900w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1200 1200w, https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg?w=1500 1500w" data-sizes="auto" alt="" class="lazyload referImg" />
											<noscript>
												<img src="https://foreignpolicymag.files.wordpress.com/2017/09/001_gettyimages-800012838.jpg" alt="" />
											</noscript>
										</a>
										<a href="#the-saviors-dilemma-migrants-rescue-NGOs-africa-europe-EU" class="internal-link read-link"><p class="about_lead refer"><strong>The Savior’s Dilemma</strong></p></a>
										<p class="refer referBody">Are naval search-and-rescue operations saving migrants’ lives — or just encouraging them to take greater risks?</p>
									</div>
								</div>
						</div>
					</div>
					<?php endif; ?>
				</article>

			</section>

		</div><!-- content-wrapper -->
		</div><!-- content-wrapper--parent -->

	</main>

	<footer>

	</footer>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script>
	    function loadJS(u){var r=document.getElementsByTagName("script")[0],s=document.createElement("script");s.src=u;r.parentNode.insertBefore(s,r);}

	    if(!window.HTMLPictureElement || !('sizes' in document.createElement('img'))){
	        loadJS("js/lazysizes-respimg.js");
	    }
	</script>
	<script src="js/lazysizes-parentfit.js"></script>
	<script src="js/lazysizes-bgset.js"></script>
	<script src="js/lazysizes-unveilhooks.js"></script>
	<script src="js/lazysizes.js"></script>

	<script src="js/script.js?v1.1"></script>
	<script src="js/socialshares.js"></script>

	<script>
		// GA
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-6874192-47', 'auto');
		ga('send', 'pageview');
		// CB
	    var _sf_async_config={};
	    /** CONFIGURATION START **/
	    _sf_async_config.uid = 62828;
	    _sf_async_config.domain = 'europeslamsitsgates.foreignpolicy.com';
	    _sf_async_config.useCanonical = true;
	    _sf_async_config.mobileApp = true;
	    _sf_async_config.sections = 'Migration Series microsite';
	    _sf_async_config.authors = '';
	    /** CONFIGURATION END **/
	    (function(){
	      function loadChartbeat() {
	        window._sf_endpt=(new Date()).getTime();
	        var e = document.createElement('script');
	        e.setAttribute('language', 'javascript');
	        e.setAttribute('type', 'text/javascript');
	        e.setAttribute('src', '//static.chartbeat.com/js/chartbeat.js');
	        document.body.appendChild(e);
	      }
	      var oldonload = window.onload;
	      window.onload = (typeof window.onload != 'function') ?
	         loadChartbeat : function() { oldonload(); loadChartbeat(); };
	    })();

	    $(function() {
			$('.internal-link').click(function(){
				var _this = $(this);
				setTimeout(function(){
					var _title = document.title;
					if(_this.hasClass('back-link')) var _title = 'Europe Slams Its Gates: Imperiling Africa — And Its Own Soul';
					var _urlArray = window.location.href.toString().split(window.location.host);
					var _fullGoToId = _urlArray[1].replace("/","").replace("#","");
					_sf_async_config.sections = 'Migration Series microsite';
					_sf_async_config.authors = '';
					pSUPERFLY.virtualPage("/"+_fullGoToId, _title.replace(" - Europe Slams Its Gates", ""));
				}, 1000);
			});
		});
	</script>
	<script src="https://s0.wp.com/wp-content/themes/vip/foreign-policy/static/js/fp_s_code.js"></script>
	<script type="text/javascript" language="JavaScript"><!--
		$(function() {
			$('.internal-link, .nav-arrow').click(function(){
				setOmnitureData();
			});
		});

		function setOmnitureData() {
			setTimeout(function(){
				s.pageName=document.title;
				s.channel="Migration Series";
				s.hier1="";
				s.hier2="";
				s.prop2="Migration Series";
				s.prop3="post";
				s.prop6="";
				s.prop12="";
				s.prop13=document.title;
				s.prop14="";
				s.prop15="";
				s.prop23="";
				s.prop25="";
				s.prop32="gt-base-https";
				s.prop34="Web";
				s.prop35="";
				/************* DO NOT ALTER ANYTHING BELOW THIS LINE ! **************/
				var s_code=s.t();if(s_code)document.write(s_code)
			}, 1000);
		}
		setOmnitureData();
	//-->
	</script>
	<script language="JavaScript" type="text/javascript"><!--
		if(navigator.appVersion.indexOf('MSIE')>=0)document.write(unescape('%3C')+'\!-'+'-')
		//-->
	</script>
	<noscript>
		<img src="https://wpni.112.2o7.net/b/ss/wpniforeignpolicyprod/1/H.24--NS/0" height="1" width="1" border="0" alt="">
	</noscript>

</body>
</html>
