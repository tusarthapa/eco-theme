<?php
/**
 * Title: front-page
 * Slug: eco-theme/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:cover {"url":"http://localhost/EcoExplorer/EcoExplorer/wp-content/uploads/2024/11/Trolltunga-norway.png","dimRatio":10,"customOverlayColor":"#8da3ac","isUserOverlayColor":false,"focalPoint":{"x":1,"y":0.6999999999999999555910790149937383830547332763671875},"minHeight":90,"minHeightUnit":"vh","contentPosition":"center center","isDark":false,"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
<div class="wp-block-cover is-light" style="min-height:90vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-10 has-background-dim" style="background-color:#8da3ac"></span><img class="wp-block-cover__image-background" alt="" src="http://localhost/EcoExplorer/EcoExplorer/wp-content/uploads/2024/11/Trolltunga-norway.png" style="object-position:100% 70%" data-object-fit="cover" data-object-position="100% 70%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-text-color has-link-color"><!-- wp:site-title {"textAlign":"center","style":{"typography":{"fontSize":"5em"}}} /-->

<!-- wp:site-tagline {"textAlign":"center","style":{"typography":{"fontSize":"1.5em"}}} /--></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":5,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e('Must Visit Places:', 'eco-theme');?></h2>
<!-- /wp:heading -->

<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"small","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:post-featured-image /-->

<!-- wp:post-title /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->