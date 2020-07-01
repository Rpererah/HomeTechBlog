<?php
/*
  Plugin name: Vlibras Widget
  Plugin url: https://www.vlibras.gov.br/
  Description: O VLibras é um conjunto de ferramentas computacionais de código aberto, que traduz conteúdos digitais para Língua Brasileira de Sinais - LIBRAS, tornando computadores, celulares e plataformas Web acessíveis para pessoas surdas.
  Version: 1.0
  Author: LAVID - UFPB
  Author url: http://www.lavid.ufpb.br/
  License: GPLv2 or later
  */

  add_action('wp_footer', 'vlibras_widget');
  add_action( 'wp_enqueue_scripts', 'vlibras_enqueue' );
  
  function vlibras_widget(){ ?>
    <div vw class="enabled">
      <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
  <?php
  }

  function vlibras_enqueue() {
    wp_enqueue_script( 'vlibrasjs', 'https://vlibras.gov.br/app/vlibras-plugin.js', array(), '1.0' );
    wp_add_inline_script( 'vlibrasjs', 'try{vlibrasjs.load({ async: true });}catch(e){}' );
 }
 
?>