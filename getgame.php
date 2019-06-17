                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel"><?php echo $_POST['gamename']; ?> </h4>
                                        </div>
                                        <div class="modal-body">
										<center>
                                        	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="550" height="400">
  <param name="movie" value="games/hoverbotarena2.swf" />
  <param name="quality" value="high" />
  <embed src="games/<?php echo $_POST['gamename']; ?>.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="550" height="400"></embed>
										</center>
										</div>
                                        
                                    </div>
                                    <!-- /.modal-content -->