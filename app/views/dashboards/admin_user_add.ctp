<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<?php echo $html->script(array('dropdowntabs', 'cloning')); ?>
<div id="topinvibox2">
			<div class="indent">
				<p style="font-size:20px; color:#458ed2; text-align:center; padding-top: 40px; "><em>Google Analytics Study Buddy</em></p>
			</div>
			<div style=" font-size:15px;">
				<br><br><br>
				<div id="slidemenu" class="slidetabsmenu">
					<ul>
						<li><a href="home" title="Home"><span>Home</span></a></li>
						<li><a href="#" title="Add" rel="dropmenu1_c"><span>Add</span></a></li>
						<li><a href="#" title="Review" rel="dropmenu2_c"><span>View</span></a></li>	
					</ul>
				</div>
				<br style="clear: left;" />
				<br class="IEonlybr" />
				<!--1st drop down menu -->                                                   
				<div id="dropmenu1_c" class="dropmenudiv_c">
					<?php 
						echo $html->link('Question', array('action'=>'admin_add'));  
						echo $html->link('Topic', array('action'=>'admin_add_topic'));
						echo $html->link('User', array('controller' => 'users', 'action'=>'admin_add'));
					?>
				</div>
				<!--2nd drop down menu -->                                                
				<div id="dropmenu2_c" class="dropmenudiv_c">
					<?php 
						echo $html->link('Questions', array('action'=>'admin_view_all'));
						echo $html->link('Topics', array('action'=>'admin_view_all_topics'));
					?>
				</div>
				<script type="text/javascript">
					//SYNTAX: tabdropdown.init("menu_id", [integer OR "auto"])
					tabdropdown.init("slidemenu")
				</script>
				<br><br>
				<?php
					echo $form->create('User',array('action'=>'admin_add'));
					echo $form->input('username');
					echo $form->input('password');
					echo $form->input('password_confirmation', array('type' => 'password'));
				?>
				<div align="center" style="/*margin-top:40px;*/ float: right;">
					<?php echo $form->end('../css/images/submit-button.png', '', array('style' => 'height: 35px;'));?>
				</div>
			</div>
			<div style="padding-top: 55px;"></div>
			<div id="boxes"></div>
		</div>
<div style="text-align:left;">
	<?php echo $this->Html->image('../css/images/poweredtext.png', array('alt' => ''));?>
</div>