<div class="mytable_account">
	<div class="foruser_account">
  	   <div class="foruser_account_btn">Моя переписка</div>     
	</div>
<?if($user_msg):?>
  <?foreach($user_msg as $msg_one):?>
   <div class="breadcrumb"> <?=$msg_one->msg?> 
    <div class="block_user" align="right">
     <?if($msg_one->user->usermore->pic):?>
             <? $picture_tovar = $msg_one->user->usermore->pic;?>
             <?=HTML::image('media/uploads/users/small_'.$picture_tovar, array(
                 'width'=>'30px',
                 'class'=>'small_pic_user'));?>
            <?endif;?>
      <?=$msg_one->putdate?><br />
      <?if($msg_one->user->first_name):?>
        <?=HTML::anchor("msg/".$msg_one->id_from, $msg_one->user->first_name);?>
      <?endif;?>
      <br style="clear:both">
      </div>
   </div>
  <?endforeach;?>
    <?=$pagination?>
<?endif;?>
</div>