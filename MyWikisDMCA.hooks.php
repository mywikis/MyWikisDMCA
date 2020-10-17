<?php

class MyWikisDMCAHooks {

    public static function onSkinTemplateOutputPageBeforeExec(&$skin, &$template) {
        $dmcaLink = Html::element( 'a', [ 'href' => $skin->msg( 'mywikisdmcaurl' )->escaped() ],
           $skin->msg( 'mywikisdmcacompliance' )->text() );
        $template->set('mywikisdmca', $dmcaLink);
        $template->data['footerlinks']['places'][] = 'mywikisdmca';
        return true;
    }

}
