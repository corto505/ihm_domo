<?php $this->load->view('include/entete'); ?>

<div class="container">
    <!--   2 partie de la page : menu  -->
    <div id="tabMeto">
	<div class="row hidden-xs">
		<iframe seamless width="888" height="336" frameborder="0" src="http://www.infoclimat.fr/public-api/mixed/iframeSLIDE?_ll=48.85341,2.3488&_inc=WyJQYXJpcyIsIjQyIiwiMjk4ODUwNyIsIkZSIl0=&_auth=CBIAF1UrV3VXegcwUyUELQBoBDEKfAEmBXkGZQtuUC1UPwdmAmJQNgdpVCkBLgo8ByoGZQswAjIAa1cvXC5UNQhiAGxVPlcwVzgHYlN8BC8ALgRlCioBJgVhBmkLeFAxVDQHYwJ%2FUDMHaVQxAS8KPAc0BmILKwIlAGJXM1w4VDAIbwBkVTNXM1c%2BB2BTfAQvADYEZwoxAWgFNAZmCzNQMlQ3BzECZlA3BztUNAEvCjoHNQZiCzQCMwBrVzhcNVQoCHQAHVVFVyhXeAcnUzYEdgAuBDEKawFt&_c=0db088f78e6bdb0b612da9203d19db3c"></iframe>
	</div>
	
        <a href="#" id="meteo">test meteo </a>
        <div id="contenu"></div>
        
        <div class="row">
            <button type="button" class="bnt btn-info" id='btnMenu'>MENU</button>
        </div>
    </div>
    
        <!--   2 partie de la page : menu  -->
        <div id="tabMenu">
            <div class="row">
                    <div id="ladate">
                            <div id="bartop"><span id="mois">ssss</span></div>
                            <div id="jour">sss</div> 
                    </div>
            </div>
            <div class="btn-menu-dg col-xs-12 col-sm-12 col-md-3" >
                    <a href="#">
                            <div class="pull-left">
                                    <img class="img-responsive pull-left" src="<?php echo img_url('icone.jpg') ?>">			
                            </div>
                            <div class="pull-left">
                                    <p></p>
                                    <H3>App. On/Off</H3>
                                    <p>detail</p>
                            </div>
                    </a>
            </div>
            
            <div class="btn-menu-dg col-xs-12 col-sm-12 col-md-3" >
                    <a href="#">
                            <div class="pull-left">
                                    <img class="img-responsive pull-left" src="<?php echo img_url('lampe.jpg') ?>">			
                            </div>
                            <div class="pull-left">
                                    <p></p>
                                    <H3>Lampes</H3>
                                    <p>detail</p>
                            </div>
                    </a>
            </div>
            
            <div class="btn-menu-dg col-xs-12 col-sm-12 col-md-3" >
                    <a href="#">
                            <div class="pull-left">
                                    <img class="img-responsive pull-left" src="<?php echo img_url('scene.jpg') ?>">			
                            </div>
                            <div class="pull-left">
                                    <p></p>
                                    <H3>Sc&eacute;nario</H3>
                                    <p>detail</p>
                            </div>
                    </a>
            </div>
            
            <div class="btn-menu-dg col-xs-12 col-sm-12 col-md-3" >
                    <a href="#">
                            <div class="pull-left">
                                    <img class="img-responsive pull-left" src="<?php echo img_url('dmtcz.jpg') ?>">			
                            </div>
                            <div class="pull-left">
                                    <p></p>
                                    <H3>Domoticz</H3>
                                    <p>detail</p>
                            </div>
                    </a>
            </div>
            
            <div class="btn-menu-dg col-xs-12 col-sm-12 col-md-3" >
                    <a href="#">
                            <div class="pull-left">
                                    <img class="img-responsive pull-left" src="<?php echo img_url('monit.jpg') ?>">			
                            </div>
                            <div class="pull-left">
                                    <p></p>
                                    <H3>Monitoring</H3>
                                    <p>detail</p>
                            </div>
                    </a>
            </div>
             <div class="row">
            <button type="button" class="bnt btn-info" id='btnMeteo'>Meteo</button>
        </div>
        </div>
	
</div>


 <?php $this->load->view('include/footer'); ?>