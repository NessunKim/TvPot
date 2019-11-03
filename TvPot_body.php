<?php
class TvPot {

    /**
	 * Bind the wfTvPotRender function to the <tvpot> tag
	 * @param Parser $parser
	 * @return bool true
     */
    public static function wfTvPotParserInit( Parser $parser ) {
        $parser->setHook( 'tvpot', array( 'TvPot', 'wfTvPotRender' ) );
        return true;
    }
    /**
     * @param string $input The text inside the tvpot tag
     * @param array $args
     * @param Parser $parser
     * @param PPFrame $frame
     * @return string
     */
    public static function wfTvPotRender( $input, array $args, Parser $parser, PPFrame $frame ) {
        $input = htmlspecialchars($input);
        if(empty($args['width'])) $args['width']='640px';
        if(empty($args['height'])) $args['height']='360px';
        $args['width'] = htmlspecialchars($args['width']);
        $args['height'] = htmlspecialchars($args['height']);
        return Html::rawElement('iframe', array('src'=>"//tv.kakao.com/embed/player/cliplink/$input",'width'=>$args['width'],'height'=>$args['height'],'frameborder'=>'0','scrolling'=>'no') , '');
    }
}
