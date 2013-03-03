<?php
/** footer.php
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0	- 05.02.2012
 */
				if (!function_exists('add_action')) {
				    die('<!-- erro -->');
				}

                tha_footer_before(); ?>
                <footer id="colophon" role="contentinfo" class="span12">
                	<div id="footerx">
                        <div id="facebook-box">
                        	<div class="fb-like-box" data-href="http://www.facebook.com/sao.paulo.elephants" data-width="900" data-show-faces="true" data-stream="false" data-header="false" >
                        	</div> 
                        </div>
                        <br class="clear" />
                        <div class="blocker-sponsor">
	                        <div id="sponsor-box">
	                            <ul>
                                    <li>
                                        <a class="" href="#" title="UOL Host" target="_blank"><img src="<?php echo bloginfo('template_url') ?>/img/sponsor_00.png"/></a></li>
	                                <li><a class="" href="#" title="PHP" target="_blank"><img src="<?php echo bloginfo('template_url') ?>/img/sponsor_01.png" /></a></li>
	                                <li><a class="" href="#" title="MS Windows Server 2008" target="_blank"><img src="<?php echo bloginfo('template_url') ?>/img/sponsor_02.png" /></a></li>
	                                <li><a class="" href="#" title="IIS" target="_blank"><img src="<?php echo bloginfo('template_url') ?>/img/sponsor_03.png" /></a></li>
	                                <li><a class="" href="#" title="iMasters" target="_blank"><img src="<?php echo bloginfo('template_url') ?>/img/sponsor_04.png" /></a></li>
	                            </ul>
	                        </div>
	                    </div>
                        <br class="clear" />
                        <div id="creative-commons">
                          	<a class="img-cc" rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.pt">
                            	<img alt="Licença Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-nd/3.0/88x31.png" />
                            </a>
                            <p class="desc-cc">O trabalho <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">Portal</span> de <a xmlns:cc="http://creativecommons.org/ns#" href="http://phpsp.org.br" property="cc:attributionName" rel="cc:attributionURL">PHP-SP</a> foi licenciado com uma Licença <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/deed.pt">Creative Commons - Atribuição-NãoComercial-SemDerivados 3.0 Não Adaptada</a>.<br />Com base no trabalho disponível em <a xmlns:dct="http://purl.org/dc/terms/" href="https://github.com/PHPSP/phpsp-wp-theme" rel="dct:source">https://github.com/PHPSP/phpsp-wp-theme</a>.</p>
                        </div>
                    </div>
				</footer>
				<?php tha_footer_after(); ?>
			</div>
		</div>
	<!-- <?php printf( __( '%d queries. %s seconds.', 'the-bootstrap' ), get_num_queries(), timer_stop(0, 3) ); ?> -->
	</body>
</html>
<?php


/* End of file footer.php */
/* Location: ./wp-content/themes/the-bootstrap/footer.php */
