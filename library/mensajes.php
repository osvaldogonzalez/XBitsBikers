<div id="fade" class="fadebox">
  <div id="over" class="overbox"> <a href="javascript:hideLightbox();"><img src="./img/cerrar.png" width="20" height="19" alt=""/></a>
    <div id="content_lighbox">
      <p>
        <?php
		
		if(isset($_SESSION['ERROR_HANDLER']))
		{
			if (!$_SESSION['ERROR_HANDLER']=="")
			{
				?>
				<script language="javascript">showLightbox();</script>
				<?php
				echo ($_SESSION['ERROR_HANDLER']);
			}
		}
		/*Limpio la variable*/
		$_SESSION['ERROR_HANDLER'] = "";
	?>
      </p>
    </div>
  </div>
</div>
