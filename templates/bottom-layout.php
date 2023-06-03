
	<footer>
		<p class=klmfooter><br><br><?php
			printf("Generiert %s GMT durch <a href=\"%s\">Simplified Saaze</a>%s<br><br>\n",
				date('d-M-y H:i'), 'https://eklausmeier.goip.de/blog/2021/10-31-simplified-saaze',
				getenv('NON_HIAWATHA') ? '' : ', <a href="https://hiawatha-webserver.org">Hiawatha</a> Webserver');
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
