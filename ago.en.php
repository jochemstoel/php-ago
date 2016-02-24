<?php
/* User friendly (seconds,days,months,years) ago.  English
 *
 * @package ago
 * @version 1
 * @author Jochem Stoel
 * @url http://jochemstoel.github.io/
 */

function ago($time)
{
   $periods_single = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
   $periods_multi = array("seconds", "minutes", "hours", "days", "weeks", "months", "years", "decades");

   $lengths = array("60","60","24","7","4.35","12","10");

   $now = time();

       $difference     = $now - $time;
       $tense         = "ago";

   for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
       $difference /= $lengths[$j];
   }

   $difference = round($difference);

   $period = $periods_single[$j];

   if($difference > 1) {
       $period = $periods_multi[$j];
   }

   return "$difference $period ago";
}
?>