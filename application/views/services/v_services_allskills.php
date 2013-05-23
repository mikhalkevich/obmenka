<div class="mytable_account">
    <?foreach($all_skills as $skill):?>
        <?= HTML::anchor('#', $skill->skills->skill);?>

        <?if(isset($skill->users->usermore->pic)):?>
            <?$picture = 'media/uploads/users/small_'.$skill->users->usermore->pic?>
        <?else:?>
            <?$picture = 'media/img/user.png'?>
        <?endif;?>
     <?=HTML::image($picture, array(
                 'width'=>'50px',
                 'align'=>'left'));?>
    <hr style="clear:both"/>
    <?endforeach;?>
    <?=$pagination?>
</div>
