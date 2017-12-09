                   <div class="w1000 adr">
                      <div class="address white">
					  {cts var=name from=block refid='site_Copyright' sortby='sort' order='d' limit='1,1'}
                         <span class="orange">美国总部:</span>
                         <p>{$name.com_txt}</p>
                         <p>{$name.com_one}</p>
                         <p>{$name.com_two}</p>
                         <p>{$name.com_three}</p>{/cts}
                         <div style="margin-top:20px"></div>
						  {cts var=name from=block refid='site_Copyright' sortby='sort' order='d' limit='3,1'}
                         <span class="orange">青岛分公司:</span>
                         <p>{$name.com_txt}</p>
                         <p>{$name.com_one}</p>
                         <p>{$name.com_two}</p>
                         <p>{$name.com_three}</p>{/cts}
                      </div>
                      <div class="address white">
					  {cts var=name from=block refid='site_Copyright' sortby='sort' order='d' limit='2,1'}
                         <span class="orange">北京分公司:</span>
                         <p>{$name.com_txt}</p>
                         <p>{$name.com_one}</p> 
                         <p>{$name.com_two}</p>
                         <p>{$name.com_three}</p>
                         <!--<p>传真: 86-10-88481223</p>-->
                         <p>{$name.com_four}</p>{/cts}
                      </div>
                  </div> 