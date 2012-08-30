<!------------------------------------------------------------------------------------------------------------->
<!-- Banner Wrapper Start -->
<DIV style="BACKGROUND: none transparent scroll repeat 0% 0%"
	class=main_slider>
	<UL id=slider1>
	<?php
	foreach($focus as $focus_value){
		echo '<LI>
			<DIV style="POSITION: relative" class="cm-fl">
				<DIV class="image-box-1">
					<DIV>
						<A href="'.$focus_value['linkUrl'].'"> <IMG border=0 src="template_html/affix/'.$focus_value['images'].'" width="1052" height="514"></A>
					</DIV>
				</DIV>
			</DIV>
		</LI>';
	}
	?>
	</UL>
</DIV>
<!-- Banner Wrapper End -->
<!-- Middle Wrapper Start -->
<DIV class=repeat-bg-1>
	<DIV style="Z-INDEX: 9999; POSITION: relative" class=main-wrapper>
		<DIV class="cm-fl cm-div">
			<DIV class="cm-fl box-1">
				<H4 class=lab>
					<A href="http://rslab.be/nl/rslab-footscan-analyse">运动服务实验室 RSLab</A>
				</H4>
				<DIV class="cm-fl d-box1 img-1" style="height: 330px;">
					<embed src="http://player.youku.com/player.php/Type/Folder/Fid/16972133/Ob/1/sid/XMzQxNjMzOTcy/v.swf" quality="high" width="310" height="330" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>
				</DIV>
			</DIV>
			<?php
			echo '<DIV class="cm-fl box-1">
				<H4 class=shop>
					<A title=SHOP href="http://rslab.be/nl/shop">冠军体验服务 Champion Service</A>
				</H4>
				<DIV class="cm-fl d-box1 img-1">
					<A href="'.$winner[0]['linkUrl'].'"> <IMG title=Kwaliteit border=0 alt="" width="313" height="183" src="template_html/affix/'.$winner[0]['images'].'"></A> 
					<SPAN style="COLOR: #00b0f5" class=title>'.$winner[0]['title'].'</SPAN><BR> 
					<SPAN>'.$winner[0]['cn_describe'].'
						<hr>'.$winner[0]['en_describe'].'
					</SPAN>
				</DIV>
			</DIV>';
			?>
			
			<DIV class="cm-fl box-2">
				<H4 class=pro>
					<A title="RSLAB PRO" href="http://rslab.be/nl/rslab-pro">专家咨询
						Expert Advic</A>
				</H4>
				<DIV class="cm-fl d-box1 img-1">
					<A href="http://rslab.be/nl/rslab-pro"><IMG title=Professioneel
						border=0 alt="" width="313" height="183"
						src="template_html/images/img-3.jpg"></A> <SPAN
						style="COLOR: #c00032" class=title>安鹏</SPAN><BR> <SPAN>在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右；
						<hr>中午休息时间想看个几分钟的视频，必须提前20分钟缓冲，否则，等到大家都在使用网络的时候，想看视频基本没辙！
					</SPAN>
				</DIV>
			</DIV>

		</DIV>
	</DIV>
</DIV>
<DIV class=border-1></DIV>
<!--图片滚动-->
<div id=demo
	style="overflow: hidden; width: 1050px; margin: auto; background: url(template_html/images/repeat-bg-2.png) center">
	<table align=center cellpadding=0 cellspacing=0 cellspace=0
		style="border: 0px; width: 1050px;">
		<tr>
			<td valign=top id=marquePic1>
				<table width='100%' cellpadding=3 cellspacing=3 border="0">
					<tr>
					<?php
						foreach($roll as $roll_value){
							echo '<td align=center width="190" class="gundong">
								<a href="'.$roll_value['linkUrl'].'"><img src="template_html/affix/'.$roll_value['images'].'" width=180 height=120 border=0></a><br> 
								<br>'.$roll_value['title'].'
								</td>';
							}
					?>
					</tr>
				</table>
			</td>
			<td id=marquePic2 valign=top></td>
		</tr>
	</table>
</div>
<script type="text/javascript"> 
var speed=50 
demo = document.getElementById("demo")
marquePic2 = document.getElementById("marquePic2")
marquePic1 = document.getElementById("marquePic1")
marquePic2.innerHTML=marquePic1.innerHTML 
function Marquee(){ 
if(demo.scrollLeft>=marquePic1.scrollWidth){ 
demo.scrollLeft=0 
}else{ 
demo.scrollLeft++ 
} 
} 
var MyMar=setInterval(Marquee,speed) 
demo.onmouseover=function() {clearInterval(MyMar)} 
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
</script>
</script>
<!--图片滚动-->
<DIV class=repeat-bg-2>
	<DIV class=main-wrapper>
		<DIV class="cm-fl left-part">
			<H4>装备测评 Gear evulation</H4>
			<DIV class="cm-fl d-box1 img-4 left-attribut" style="height: 330px;">
				<!--<embed src="http://player.youku.com/player.php/Type/Folder/Fid/16972133/Ob/1/sid/XMzQxNjMzOTcy/v.swf" quality="high" width="310" height="330" align="middle" allowScriptAccess="always" allowFullScreen="true" mode="transparent" type="application/x-shockwave-flash"></embed>-->
			</DIV>
		</DIV>
		<DIV class="cm-fl box-1">
			<H4 class=shop>
				<A title=SHOP href="http://rslab.be/nl/shop">装备指导 Guidance</A>
			</H4>
			<DIV class="cm-fl d-box1 img-1">
				<A href="http://rslab.be/nl/shop"><IMG title=Kwaliteit border=0
					alt="" src="template_html/images/img-2.jpg" height="183"
					width="313"></A> <SPAN style="COLOR: #00b0f5" class=title>安鹏</SPAN><BR>
				<SPAN>在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右；
					<hr>中午休息时间想看个几分钟的视频，必须提前20分钟缓冲，否则，等到大家都在使用网络的时候，想看视频基本没辙！
				</SPAN>
			</DIV>
		</DIV>
		<DIV class="cm-fl box-2">
			<H4 class=pro>
				<A title="RSLAB PRO" href="http://rslab.be/nl/rslab-pro">足部保护
					Protect</A>
			</H4>
			<DIV class="cm-fl d-box1 img-1">
				<A href="http://rslab.be/nl/rslab-pro"><IMG title=Professioneel
					border=0 alt="" src="template_html/images/img-3.jpg" width="313"
					height="183"></A> <SPAN style="COLOR: #c00032" class=title>安鹏</SPAN><BR>
				<SPAN>在公司的网络中，经常会有人抱怨网速太慢。笔者就是一个鲜活的例子——公司的带宽明明已经够大了，但平时连打开网页都要花费半分钟左右；
					<hr>中午休息时间想看个几分钟的视频，必须提前20分钟缓冲，否则，等到大家都在使用网络的时候，想看视频基本没辙！
				</SPAN><BR>
			</DIV>
		</DIV>
	</DIV>
</DIV>
<!-- Middle Wrapper End -->
