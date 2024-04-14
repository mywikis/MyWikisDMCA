<?php

class MyWikisDMCAHooks {
    public static function onSkinAddFooterLinks( Skin $skin, string $key, array &$footerlinks ) {
        if ( $key === 'places' ) {
            $footerlinks['dmca'] = Html::element( 'a', [ 'href' => $skin->msg( 'mywikisdmcaurl' )->escaped() ],
                $skin->msg( 'mywikisdmcacompliance' )->text() );
        }
    }
}
