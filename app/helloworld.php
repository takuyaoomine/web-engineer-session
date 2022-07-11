<?php
// 計測時間初期化
$getTime = array();

$loopCount = range( 1, 5000 );

$getTime[ 'time' ][ 0 ] = microtime( true );
$count = count( $loopCount );
for ( $i = 0; $i < $count; ++$i ) {}
$getTime[ 'time' ][ 1 ] = microtime( true );

// result
echo '### ループ処理のパフォーマンス ###<br>';
echo sprintf ( ' > loop count : %d', end($loopCount)) . '<br>';
echo sprintf( ' > time :  %.6f', $getTime[ 'time' ][ 1 ] - $getTime[ 'time' ][ 0 ] ) . ' sec <br>';
?>
