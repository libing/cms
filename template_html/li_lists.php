<!------------------------------------------------------------------------------------------------------------->
<!-- Banner Wrapper Start -->
<DIV class="banner-part-lab-1" style="background:url(template_html/affix/<?php echo $focus[0]['images'];?>) center top no-repeat;"></DIV>
<!-- Banner Wrapper End -->
<!-- Middle Wrapper Start -->

<DIV class=repeat-bg-1>
	<DIV style="Z-INDEX: 9999; POSITION: relative" class=main-wrapper>
		<DIV class="cm-fl cm-div">
		<?php 
		foreach($lists as $lists_value){
			echo '<DIV class="cm-fl box-1">
				<DIV class="cm-fl d-box1 img-1">
					<A href="?views_fid_'.$_GLOBALS['variable']['id'].'_foid_'.$focus[0]['id'].'_id_'.$lists_value['id'].'.html"><IMG title=Kwaliteit border=0
						alt="" width="313" height="183" src="template_html/affix/'.$lists_value['images'].'"> <SPAN
						style="COLOR: #00b0f5" class=title>'.$lists_value['title'].'</SPAN></A><BR> <SPAN>'.$lists_value['cn_describe'].'
						<hr>U'.$lists_value['en_describe'].'
					</SPAN><BR> <BR> <BR> <BR> <BR>
				</DIV>
			</DIV>';
		}
		
		?>

		</DIV>
		
		
		<DIV class=clear-both></DIV>
		
		<?php 
		if($_GLOBALS['variable']['id']=="8"){
		?>
		
		<!------------------------留言板开始---------------------------------->
		<DIV class="cm-fl left-part-4">
			<H3>您的咨询</H3>
			<BR>
			<DIV>
				<TABLE border=0 cellSpacing=0 cellPadding=0 align=left></TABLE>
				<DIV class=clear-both></DIV>
			</DIV>
			<DIV style="WIDTH: 325px" class="cm-fl form-bg">
				<FORM method=post name="contact_form">
					<INPUT onblur="if(this.value=='') this.value='姓名'" id=txtName
						onfocus="if(this.value =='姓名') this.value=''" value="姓名"
						type=text name=txtName> 
						<INPUT
						onBlur="if(this.value=='') this.value='电话'" id=txtTel
						onFocus="if(this.value == '电话') this.value=''"
						value="电话" type=text name=txtTel> 
						<INPUT
						onblur="if(this.value=='') this.value='邮箱'" id=txtEmail
						onfocus="if(this.value == '邮箱') this.value=''" value="邮箱"
						type=text name=txtEmail>
						<INPUT
						onblur="if(this.value=='') this.value='QQ'" id=txtEmail
						onfocus="if(this.value == 'QQ') this.value=''" value="QQ"
						type=text name=txtQq>
			
			</DIV>
			<DIV class="cm-fl form-bg">
				<INPUT
						onblur="if(this.value=='') this.value='标题'" id=txtEmail
						onfocus="if(this.value == '标题') this.value=''" value="标题"
						type=text name=txttitle>
				<TEXTAREA rows=5 onBlur="if(this.value=='') this.value='咨询内容'"
					onFocus="if(this.value =='咨询内容' ) this.value=''" name=txtAreaVraag>咨询内容</TEXTAREA>
				<!-- <IMG
					style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; BORDER-TOP: medium none; BORDER-RIGHT: medium none"
					id=captcha border=0 align=left src="template_html/images/captchac_code.jpg"
					width=71 height=30><A
					style="BORDER-BOTTOM: medium none; BORDER-LEFT: medium none; OUTLINE-STYLE: none; OUTLINE-COLOR: invert; OUTLINE-WIDTH: medium; BORDER-TOP: medium none; BORDER-RIGHT: medium none"
					id=captcha></A><IMG style="CURSOR: pointer"
					onclick=" document.getElementById('captcha').src = document.getElementById('captcha').src + '?' + (new Date()).getMilliseconds()"
					border=0 alt="" align=left src="template_html/images/refresh.png"> 
					 -->
				<DIV class=cm-fr>
					<DIV class=cm-btn-6>
						<SPAN><INPUT value="提交" type=submit name=submit></SPAN>
					</DIV>
				</DIV>
				</FORM>
			</DIV>
		</DIV>
		<!------------------------留言板结束---------------------------------->
		<?php 
		}
		?>
		
		
	</DIV>
	
</DIV>


<!-- Middle Wrapper End -->
