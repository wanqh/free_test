<?php
function Has2Base64(){
	// 信号处理
		pcntl_signal( SIGTERM, array( __CLASS__,"signalHandler" ), false );
		pcntl_signal( SIGINT, array( __CLASS__,"signalHandler" ), false );
		pcntl_signal( SIGQUIT, array( __CLASS__,"signalHandler" ), false );
		pcntl_signal( SIGHUP, array( __CLASS__, "signalHandler" ), false );
		pcntl_signal( SIGTSTP, array( __CLASS__, "signalHandler" ), false );
}
