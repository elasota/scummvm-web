<?

/*
 * ScummVM Compatibility Page
 *
 */

// set this for position of this file relative
$file_root = ".";

// load libraries
require($file_root."/include/"."incl.php");

// start of html
html_header("ScummVM :: Compatibility");
sidebar_start();

//display welcome table
echo html_round_frame_start("Compatibility","98%","",20);


?>
	<p>
	  <big><b>Compatibility</b></big><br>
	  <? echo html_line(); ?>
	</p>
<?
if ($details)
{

}
else
{
?>
	<p>
	  This page lists the progress of ScummVM as it relates to individual game compatibility.<br>
	  Click on the game name to view the complete notes of a game.
          <br><br>Please note this list applies to the English versions of games, we attempt to test many versions of games, however there are occasionally problems with other languages.
          <br><br>
	  <small>Last Updated: <? echo date("F d, Y",getlastmod()); ?></small>
	</p>

<?
	// Display the Color Key Table
	echo html_frame_start("Color Key","50%",1,1,"color4");
	$pcts = array(0,5,10,15,20,25,30,35,40,45,50,55,60,65,70,75,80,85,90,95,100);
	while (list($key,$num) = each($pcts))
	{
		$keyTD .= html_frame_td($num,'align=center class="pct'.$num.'"');
	}
	echo html_frame_tr($keyTD);
	echo html_frame_end(),html_br();
}

// This Array Defines the games and thier ratings, etc.
$games = array(
		'Maniac Mansion (c64)'					=> array('1','maniacc64','0'),
		'Zak McKracken and the Alien Mindbenders (C64)'		=> array('1','zakc64','0'),
		'Maniac Mansion'					=> array('2','maniacega','0'),
		'Zak McKracken and the Alien Mindbenders'		=> array('2','zakega','0'),
		'Indiana Jones and the Last Crusade'			=> array('2','indy3ega','0'),
		'Indiana Jones and the Last Crusade (256)'		=> array('3','indy3','80'),
                'Zak McKracken and the Alien Mindbenders (256 - FmTowns)' => array('3','zak256','85'),
		'LOOM'							=> array('3','loom','0'),
		'The Secret of Monkey Island (EGA)'			=> array('4','monkeyega','5'),
                'LOOM (256 color CD version)'                           => array('5','loomcd','90'),
		'The Secret of Monkey Island (VGA Floppy)'		=> array('5','monkeyvga','90'),
		'The Secret of Monkey Island (VGA CD)'			=> array('5','monkey','95'),
		'Monkey Island 2: LeChuck\'s revenge'			=> array('5','monkey2','95'),
		'Indiana Jones 4 and the Fate of Atlantis'		=> array('5','atlantis','95'),
		'Indiana Jones 4 and the Fate of Atlantis (DEMO)'	=> array('5','playfate','95'),
		'Day Of The Tentacle'					=> array('6','tentacle','95'),
		'Day Of The Tentacle (DEMO)'				=> array('6','dottdemo','95'),
                'Sam & Max'                                             => array('6','samnmax','93'),
		'Sam & Max (DEMO)'					=> array('6','samdemo','95'),
		'Full Throttle'						=> array('7','ft','75'),
                'The DIG'                                               => array('7','dig','85'),
		'Curse of Monkey Island'				=> array('8','curse','5'),
		'Simon The Sorcerer 1 Talkie (Win)'       		=> array('n/a','simon1win','85'),
		'Simon The Sorcerer 1 Talkie (Dos)'       		=> array('n/a','simon1talkie','85'),
		'Simon The Sorcerer 1 (Dos)'           			=> array('n/a','simon1dos','50'),
		'Simon The Sorcerer 1 (DEMO)'          			=> array('n/a','simon1demo','60'),
		'Simon The Sorcerer 2 Talkie (Win)'       		=> array('n/a','simon2win','80'),
		'Simon The Sorcerer 2 Talkie (Dos)'       		=> array('n/a','simon2talkie','80'),
		'Simon The Sorcerer 2 (Dos)'           			=> array('n/a','simon2dos','50')
	      );

$notes = array(
"maniacc64" 	=> "Not at all implemented yet - ScummVM doesn't understand the non-blocked LFL format",
"zakc64"	=> "Not at all implemented yet - ScummVM doesn't understand the non-blocked LFL format. Try Zak256 version",
"maniacega"	=> "Not at all implemented yet - ScummVM doesn't understand the non-blocked LFL format",
"zakega"	=> "Not at all implemented yet - ScummVM doesn't understand the non-blocked LFL format. Try Zak256 version",
"indy3ega"	=> "Not at all implemented yet - ScummVM doesn't understand the non-blocked LFL format. Try Indy3-256 version",
"indy3"         => "Game is completable, but some major crashes may occur in the catacombs" .
                   "<br>- Music and Sound effects are usually missing" .
		   "<br>- Various minor graphical glitches" . 
                   "<br>- Indy may occasionally be able to walk outside of walkboxes (Eg, up walls)",
"zak256"        => "Game is completable." .
                   "<br>- No sound effect looping" ,
"loom"		=> "Not at all implemented yet - ScummVM doesn't understand the non-blocked LFL format. Try Loom CD version",
"monkeyega"	=> "Copy protection screen will show, but game crashes shortly afterwards.<BR>Graphics decoders and SCUMM opcodes not implemented yet.",
"loomcd"        => "Game is completable." .
                   "<br>- Various minor graphical glitches",
"monkeyvga"	=> "Game is completable.".
                   "<br>- No sound effects".
                   "<br>- No music looping",
"monkey"	=> "No known problems - should be playable to the end",
"monkey2"	=> "No known problems - should be playable to the end",
"atlantis"	=> "No known problems - should be playable to the end".
		   "<br>- Music loud on some systems, run with -m30 to lower music volume.",
"playfate"	=> "No known problems - should be playable to the end",
"tentacle"	=> "No known problems - should be playable to the end",
"dottdemo"	=> "No known problems - should be playable to the end",
"samnmax"	=> "No major problems - should be playable to the end".
                   "<br>- Highway subgame doesn't behave correctly",
"samdemo"	=> "No known problems - should be playable to the end",
"ft"		=> "Game is completable to the end, but missing action sequences".
                   "<br>- Lack of INSANE subsystem prevents action sequences, which skips a substantial portion of the game".
		   "<br>- Derby scene is only properly controllable using the mouse",
"dig"		=> "Game is fully completable, with some minor sound issues",
"curse"		=> "Not fully implemented yet.<br>ScummVM doesn't understand the various CMI subsystems",
"simon1win" 	=> "Game is completable.".
                   "<br>- Various minor graphical glitches",
"simon1talkie" 	=> "Game is completable.".
                   "<br>- Various minor graphical glitches",
"simon1dos" 	=> "Game is completable to a point, but not playable to the end".
                   "<br>- Freezes when Swampling leaves his house".
                   "<br>  (Use right mouse button click to get past this freeze)".
                   "<br>- Freezes when talking to demons in Sordid's Tower".
                   "<br>- No sound effects".
                   "<br>- Various minor graphical glitches",
"simon1demo" 	=> "Game demo is completable to a point, but not playable to the end".
                   "<br>- Freezes when Swampling leaves his house".
                   "<br>- No music",
"simon2talkie"  => "Game is completable.".
                   "<br>- Will freeze when waking up in Sordid's Tower if Simon isn't moved straight away".
                   "<br>- No music".
                   "<br>- Part of introduction is skipped".
                   "<br>- Various minor graphical glitches",
"simon2win"     => "Game is completable.".
                   "<br>- Will freeze when waking up in Sordid's Tower if Simon isn't moved straight away".
                   "<br>- Some music is missing".
                   "<br>- Part of introduction is skipped".
                   "<br>- Various minor graphical glitches",
"simon2dos"     => "Game is completable to a point, but not playable to the end".
                   "<br>- Will freeze during sequence shown when trying to escape from pirate ship".
                   "<br>  (Use right mouse button click to get past this freeze)".
                   "<br>- Will freeze when waking up in Sordid's Tower if Simon isn't moved straight away".
                   "<br>- No music".
                   "<br>- Part of introduction is skipped".
                   "<br>- Various minor graphical glitches"
);
		
// render the compatibility chart
echo html_frame_start("Scumm Games Compatibility Chart","90%",2,1,"color4");
echo html_frame_tr(
		   html_frame_td("Game Full Name").
		   html_frame_td("Scumm Ver.").
		   html_frame_td("Game Short Name").
		   html_frame_td("% Completed"),
		   "color4"

		  );
$c = 0;
// Ender - Added this
if ($details) {
	while (list($name,$array) = each($games))
	{	

		if ($array[1] == $details) {
			$color = "color0";
			echo html_frame_tr(
				html_frame_td($name).
			  	html_frame_td($array[0]).
			    	html_frame_td($array[1]).
		 	    	html_frame_td($array[2]."%", 'align="center" class="pct'.($array[2] - ($array[2]%5)).'"'),
		  	        $color
	  		);
			echo html_frame_tr(html_frame_td(
							 html_br().
							 html_blockquote($notes{$details}).
							 html_br(),
							 "colspan=4")
							);
		}
	}
} else {
	while (list($name,$array) = each($games))
	{	
		if ($c % 2 == 0) { $color = "color2"; } else { $color = "color0"; }
		echo html_frame_tr(
				    html_frame_td(html_ahref($name, $PHP_SELF."?details=".$array[1])).
     				    html_frame_td($array[0]).
				    html_frame_td($array[1]).
			 	    html_frame_td($array[2]."%", 'align="center" class="pct'.($array[2] - ($array[2]%5)).'"'),
 			  	    $color
		);
		$c++;
	}		  
}

echo html_frame_end("&nbsp;");
  
if ($details)
    echo html_p(),html_back_link(1,$PHP_SELF);

echo html_p();
echo html_round_frame_end("&nbsp;");


// end of html
echo html_p();
sidebar_end();
html_footer();

?>
