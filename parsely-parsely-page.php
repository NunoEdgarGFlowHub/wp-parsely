<!-- BEGIN wp-parsely Plugin Version <?php echo esc_html(Parsely::VERSION); ?> -->
<meta name='wp-parsely_version' id='wp-parsely_version' content='<?php echo esc_html(Parsely::VERSION); ?>' />
<?php if (!empty($parselyPage) && isset($parselyPage["headline"])) : ?>
   <script type="application/ld+json">
   <?php echo json_encode($parselyPage); ?>
   </script>
   <meta name='parsely-post-id' content='here is post id' />
<?php else: ?>
    <!-- parsleyPage is not defined / has no attributes.  What kind of page are you loading? -->
<?php endif; ?>
<!-- END wp-parsely Plugin Version <?php echo esc_html(Parsely::VERSION); ?> -->
<?php
