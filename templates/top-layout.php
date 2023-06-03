<?php require SAAZE_PATH . "/templates/head.php"; ?>
	<title><?= $title ?? "Saaze" ?></title>

<style>
:root { --h1Color:DarkBlue; --thColor:LightBlue; --nthChild:LightGray; }
body {
	background-color: #fffff8;
	margin: auto;
	max-width: 50rem;
	font-family:ui-serif,Georgia,Cambria,"Times New Roman",Times,serif;
}
article, aside { background-color:white; }

a { color:inherit }
a:hover { background-color:sandybrown }

img[alt=Photo] { width:46rem }

img { border-radius:8px }
blockquote { font-style:italic; margin-left:7rem; padding-left:0.7rem; border-left:2px solid DarkBlue }
td { border: 1px solid Black; border-collapse:collapse; padding:0.3rem 0.5rem 0.3rem 0.5rem }
th { border: 1px solid Black; background-color:var(--thColor); padding:0.3rem 0.5rem 0.3rem 0.5rem }
tr:nth-child(even) { background-color:var(--nthChild); }
.klmfooter { font-size:1rem }


@media screen and (min-width:50rem) {
	h1 { font-size:3em; color:var(--h1Color) }
	h2 { font-size:2.7em; color:var(--h1Color) }
	h3 { font-size:2em; color:var(--h1Color) }
	p { line-height:1.7; font-size:1.3rem }
	blockquote { line-height:1.5; font-size:1.3rem }
	ul, ol { line-height:1.5; font-size:1.3rem }
	li { margin-bottom:0.6rem }
	pre { color:#e2e8f0; background-color:#2d3748; border-radius:0.4rem; overflow-x:auto; padding:1.4rem }
	pre code { color:#e2e8f0; line-height:1.8; font-size:1.1rem; font-weight:400; }
	code[class*="language-"], pre[class*="language-"] { line-height:1.5; font-size:1.15rem }
}
@media screen and (max-width:50rem) {
	article, aside { margin-left:0.3rem }
	h1 { font-size:2.2em; color:var(--h1Color) }
	h2 { font-size:1.7em; color:var(--h1Color) }
	h3 { font-size:1.2em; color:var(--h1Color) }
	p { line-height:1.5; font-size:1.0rem }
	ul, ol { line-height:1.4; font-size:1.0rem }
	li { margin-bottom:0.4rem }
	pre { color:#e2e8f0; background-color:#2d3748; border-radius:0.4rem; overflow-x:auto }
	pre code { color:#e2e8f0; line-height:1.3; font-size:1em }
}

.dimmedColor { color:Gray }
footer { font-family:sans-serif; color:Gray }

/* Copied from TailwindCSS 2.0 typography.min.css */
code { color:inherit; font-weight:600; font-size:inherit }
code::before { content:"`" }
code::after { content:"`" }
pre code::before { content:"" }
pre code::after{ content:"" }

nav { font-size:2rem }
</style>

</head>

<body class="line-numbers">
<?php $rbase ??= ''; ?>
<header>
	<nav>
		<img src="data:image/png;base64,/9j/4AAQSkZJRgABAQAAAAAAAAD/2wBDAAMCAgICAgMCAgIDAwMDBAYEBAQEBAgGBgUGCQgKCgkICQkKDA8MCgsOCwkJDRENDg8QEBEQCgwSExIQEw8QEBD/2wBDAQMDAwQDBAgEBAgQCwkLEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBD/wAARCAAgACADAREAAhEBAxEB/8QAGQAAAgMBAAAAAAAAAAAAAAAABAUCAwYJ/8QALhAAAgICAQMBBQgDAAAAAAAAAQIDBAURBgASIRQTFjFBURUjMlJUYYGSkaLh/8QAGQEAAwEBAQAAAAAAAAAAAAAABAUGAgMH/8QANxEAAQMCAwMIBwkAAAAAAAAAAQIDEQAEBRIhBjFRBxMiQWJxgaEVFiQyU2HBM0JScpGS0+Hw/9oADAMBAAIRAxEAPwDpDZajj8LZzmStmGvV/EFTuZiSAqqB5LMxCgD4kgdeb7PbLO7QgBpcEmN3ASSTOgA1PACnNzeC2METVXH5ftmxPjb9O1iMnXRZnpWhGzmFiQsitGzKykgg6OwRo68be3nJ6bZIdbuQ42dMwSYkbwQYIPeNRqKGTiebQpg99PPds/q/9P8AvQHqYfjeX91v0j2fOg8ji/QRo/tu/vOvw66TYzgRwltK8+aTG6PrRFvc8+SIiKynIpM5fzXGePYejj7UYuS5izHZvNAXWsqiNdCN9gSyxNv6oB+/VdsTiDmHWLygj7SW0qJgBSgCU7jqUJVG6RPXWXmbN5z2pxSSNYSkKkeKkxrHGpc9vc8xMdLnR43hY34+7PYKZeRjLSkAWePXpxsABZPruIaB+BsMNuXildk6EhLg0JVACxqkzl709yjXB9vBWU86u4WAOstp/lpt77cvm8Y7i+JyJ+XpMpNIv9/Tdg/k9TRxYqMMoznsyfPLl86AOJbPr0t33XD2GQR+7nMvnQ9Tl2bzWRuYHkHHIcXcx8cFkiC96lSkpkVQW7F033THQ34156nNo3ri7sUXDreRIcUgdIGSlIKt3DMAfnI3g0xslMqMtZhI1CgkEa6e6tY176Px/EosjljyL7VuV5Vqmh7OHsA7C4ckEqSCSF3r8o6M2fbXiGDKsFrKW+czGIkqAABkgkZeqIMnfS3GLVx99KkOqQI1CY114kEjwim/u3h07hexnryylTLYJsMQfjvvJI/jx0S22cMcBumVOxucAKz4pMqB/KCO7dS5vBLHNnKcyuKyVHwKp+lLOATWadCbhdqUmzx9xWV3J73pnZrPo/MxgKT+aNuqTFri5xZxN1ZtKaad1KlDKQr76UJ3gzqCoCARANHtpS0MpMkf4UmwCrfbO8qQD2WVyzw1W+taqggUj9i6TOPqH38+k3KDbt4dYWWGtCA0nUdpfTM/OCkHrka0bhhK3FrPXWhoZaShEYlhVwW7tk9ROFY+5hTJZQgGTOtHP2ofVmJon3jm/TJ/Y9M/XJ/4Q/U1x9Hp/FSLkFSHPWYr6WLuMuxRmA2qE4jkkgJ20TdysCu/I8bU7KkEnphZ8od1aJLZYQtJMwqSAeIgjXyO4g1hWGIVrmIosSVYMbUxFCjHVq0kWKGOPelRRoD/AB1O45tE/jxzXCelJJPEmibe1Tb+6a//2Q==" height=32 width=32 alt=Sine>
		<i><a href=<?=$rbase?>/>Blog</a> &nbsp; &nbsp; &nbsp; <a href=<?=$rbase?>/auxil/ueber-mich>Über</a></i>
	</nav>
</header>


