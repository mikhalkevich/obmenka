 <?if($userspismo[0]):?>
 <div class="top_message">
  <?foreach($userspismo as $msg):?>
   <div class="inner_msg"><?=HTML::anchor('msg/'.$msg->id_from, $msg->msg);?></div>
  <?endforeach;?>
  </div>
 <?endif;?>