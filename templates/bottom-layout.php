
	<footer>
		<p class=klmfooter><br><br><?php
			printf("Generiert %s CET (Berlin) durch <a href=\"%s\">Simplified Saaze</a>%s%s<br><br>\n",
				date('d-M-y H:i'), $rbase . '/blog/2021/10-31-simplified-saaze',
				getenv('NON_NGINX') ? '' : ', Web-Server <a href="https://nginx.org">NGINX</a>',
				isset($_SERVER['REQUEST_TIME_FLOAT']) ? sprintf(", berechnet in %.2f ms",1000 * (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])) : ''
			);
			?>
		</p>
	</footer>

<?php if (!isset($pagination)) { ?>
<?php if (isset($entry['MathJax'])) { ?>
	<script>window.MathJax = { tex: { inlineMath: [['$', '$'], ['\\(', '\\)']] } };</script>
	<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
	<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<?php } ?>
<?php } ?>

</body>
</html>
