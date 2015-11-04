<? renderable( $p ) ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <? if( isset( $p['contents']['epub']['css'] ) && count( $p['contents']['epub']['css'] ) > 0 ) { ?>
            <? foreach( $p['contents']['epub']['css'] as $css ) { ?>

                <link rel="stylesheet" href="<?= he( path_to_filename( $css ) ) ?>" type="text/css" />

            <? } ?>
        <? } ?>

        <title><?= he( funcify( $p['contents']['epub']['title'], $p['contents']['epub']['epub_file'] ) ) ?></title>
    </head>
    <body class="giterary epub <?= implode( " ", explode( '/', undirify( $p['contents']['file']['file'] ) ) ) ?>">
        <h2>
            <?= he( funcify( $p['contents']['file']['title'], $p['contents']['epub']['epub_file'] ) ) ?>

        </h2>
        <?= $p['contents']['content'] ?>

    </body>
</html>
