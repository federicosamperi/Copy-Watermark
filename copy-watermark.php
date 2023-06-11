<?php
/*
Plugin Name: Copy Watermark
Description: Aggiunge il link alla pagina originale quando si copia un testo da editings.eu
Version: 1.1
Author: Federico Samperi
*/

function add_link_on_copy() {
    if (is_single()) { // Applica solo agli articoli
        ?>
        <script type="text/javascript">
        document.addEventListener('copy', function(e) {
            var text = window.getSelection().toString();
            var url = window.location.href;
            var message = '\n\nContinua su: ' + url;
            var fullMessage = text + message;
            e.clipboardData.setData('text/plain', fullMessage);
            e.preventDefault();
        });
        </script>
        <?php
    }
}

add_action('wp_footer', 'add_link_on_copy');


function add_copy_link_amp() { ?>

  <script type="text/javascript">
    function addCopyLinkAMP() {
      if (AMP) {
        const pageUrl = document.querySelector('link[rel="canonical"]').href;
        const copyText = document.getSelection().toString();
        const copyLink = `${copyText} (Copiato da ${pageUrl})`;
        navigator.clipboard.writeText(copyLink);
      }
    }

    document.addEventListener('copy', addCopyLinkAMP);
  </script>

<?php }

add_action( 'amp_post_template_footer', 'add_copy_link_amp' );

?>
