<div class="formmsg">

	<?=Form::open('msg/'.$user_id)?>
        
        <?php if ($errors): ?>
    
        <div class="alert alert-error">
        <button type="button" class="close" data-dismiss="alert">×</button>
        
        <strong>Были обнаружены некоторые ошибки, пожалуйста, проверьте информацию, которую Вы ввели.</strong> 
        <ul>
        <?php foreach ($errors as $message): ?>
            <li><?php echo $message ?></li>
        <?php endforeach ?>
        </div>
        <?php endif ?>
            
	<?=Form::textarea('msg','',array('class' => 'ckeditor','id' => 'editor1','name' => 'editor1',))?>
	<p align="right"><?=Form::submit('add', 'Отправить', array('class'=>'btn'))?></p>
	<?=Form::close()?>
        <div align="center">
                    <div class="pusto" align="center"></div>
	<?if(isset($dialog)):?>
                <?$last=0?>
		<?foreach ($dialog as $msgs):?>
			<div class="msgs">
			<?if($msgs->id_from == $sender):?>
				<?$user = $user1?>
			<?else:?>
				<?$user = $user2?>
			<?endif?>
					<?foreach($user as $users):?>
						<?=$users->username?>						
					<?endforeach?>
				<?=$msgs->msg?><br>
				<?=$msgs->putdate?>
			</div>
        <?if($msgs->id > $last):?>
        <? $last=$msgs->id?>
        <?endif;?>
		<?endforeach?>
          <div align="center"><?=$pagination?></div>
	<?endif?>
        </div>
</div>
<script>
    var sourse;
 window.onload = function(){
       start_listener(<?=$last?>);
    }
    
    function start_listener(message_id){
        console.log('start');
        sourse = new EventSource('<?=Kohana::$base_url;?>libs/chat/<?=$user_id;?>/' + message_id);
        sourse.onmessage = function(e){
            $('<div>').addClass('msgs').html(e.data).prependTo('.pusto');
            document.getElementById('audio_play').play();
        }
    }
</script>
<audio id="audio_play">
  <source src="/media/upload/zvuk.ogg" />
  <source src="/media/upload/zvuk.mp3" />
</audio>