
<footer class="footer">
    <div class="button-fixed">
        <span ><img src="<?php echo get_template_directory_uri() . '/img/icons/phone-solid.svg'?>" alt="">
            <div class="text-call">
                <a class="callback-phone" href="tel:+38-098-765-09-79">+38-098-765-09-79</a>
                <a class="callback-phone" href="tel:+38-050-934-90-85">+38-050-934-90-85</a>
            </div>
        </span>
    </div>
    <div class="container">
        <span class="footer-rights">"ЖК Андріївський" 2020 Всі права захищено.</span>

    </div>
</footer>


<div class="hidden">
		<div id="callback" class="white-popup mfp-hide">
			<?php echo do_shortcode ('[contact-form-7 id="82" title="Popup"]') ?>
		</div>
</div> <!--hidden-->

<?php wp_footer(); ?>
</body>

</html>
