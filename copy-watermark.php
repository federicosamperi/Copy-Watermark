<?php
/*
Plugin Name: Copy Watermark
Description: Aggiunge il link alla pagina originale quando si copia un testo da editings.eu
Version: 1.2
Author: Federico Samperi
*/

function add_link_on_copy() {
    if (is_single()) { // Applica solo agli articoli
        ?>
        <script type="text/javascript">
        document.addEventListener('copy', function(e) {
            var text = window.getSelection().toString();
            var url = window.location.href;
            var message = '\nContinua su: ' + url;
            var fullMessage = text + message;
            e.clipboardData.setData('text/plain', fullMessage);
            e.preventDefault();
        });
        </script>
        <?php
    }
}

add_action('wp_footer', 'add_link_on_copy');

?>
