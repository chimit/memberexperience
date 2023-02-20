//<?php

class hook1 extends _HOOK_CLASS_
{

/* !Hook Data - DO NOT REMOVE */
public static function hookData() {
 return array_merge_recursive( array (
  'postContainer' => 
  array (
    0 => 
    array (
      'selector' => 'article > aside.ipsComment_author.cAuthorPane.ipsColumn.ipsColumn_medium.ipsResponsive_hidePhone > ul.cAuthorPane_info.ipsList_reset > li[data-role=\'stats\'].ipsMargin_top',
      'type' => 'add_inside_start',
      'content' => '{{$joinDate = $comment->author()->get_joined(); $currentDate = new \DateTime(); $interval = $joinDate->diff($currentDate); $experience = \IPS\DateTime::formatInterval($interval, 2);}}
<li class="ipsType_light">{lang="memberexperience_experience"}: {$experience}</li>',
    ),
  ),
), parent::hookData() );
}
/* End Hook Data */




}