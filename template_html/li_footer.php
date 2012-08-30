<!-- Footer Part Start -->
			<DIV class=footer-bg>
				<DIV class=repeat-bg-3>
					<DIV class=main-wrapper>
						<DIV class="cm-fl bot-left">
							<DIV class="cm-fl feed-part">
								<DIV class=cm-fl>
									<IMG title="I LOVE RSLAB" alt=""
										src="template_html/images/rslab.jpg" width="100" height="38">
								</DIV>
								<DIV class="cm-fl bot-feed">
									<!-- ---------------------Social media ---------------------  -->
								</DIV>
							</DIV>
							<DIV class=s-detail>
								<H2>
									<STRONG>友情链接</STRONG>
								</H2>
								<P>
								<?php 
								if(is_array($flink)){
									foreach($flink as $link_value){
										echo '<A href="'.$link_value['linkUrl'].'">'.$link_value['title'].'</A>&nbsp;';
									}
								}
								
								?>
									
								</P>
							</DIV>
						</DIV>
						<DIV class=bot-right>
							<DIV class=cm-fl>
								<DIV class="cm-fl bot-box1">
									<DIV class="cm-fl bot-img">
										<IMG title=GENT alt="" src="template_html/affix/<?php echo $mes[0]['images'];?>"
											width="142" height="59">
									</DIV>
									<STRONG></STRONG><BR>
									<SPAN></SPAN>
									<DIV class=cm-btn-1>
										<A title="Openingsuren Gent"
											href="<?php echo $mes[0]['linkUrl'];?>"><SPAN><?php echo $mes[0]['title'];?></SPAN></A>
									</DIV>
								</DIV>
								<DIV class=bot-box2>
									<DIV class="cm-fl bot-img">
										<IMG title=DUFFEL alt="" src="template_html/affix/<?php echo $callme[0]['images'];?>"
											width="142" height="59">
									</DIV>
									<STRONG></STRONG><BR>
									<SPAN></SPAN>
									<DIV class=cm-btn-1>
										<A title="<?php echo $callme[0]['title'];?>"
											href="<?php echo $callme[0]['linkUrl'];?>"><SPAN><?php echo $callme[0]['title'];?></SPAN></A>
									</DIV>
								</DIV>
							</DIV>
						</DIV>
						<!--友情链接-->
						<DIV class="cm-fl footer-bar"></DIV>
						<!--友情链接-->
					</DIV>
				</DIV>
			</DIV>
			<!-- Footer Part End -->
		</DIV>
	</DIV>
	<!-- Here is google analtics code -->
</BODY>
</HTML>