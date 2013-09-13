<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>:: Giovanni Bojanini ::</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/general.js"></script>
        <script type="text/javascript" src="js/fonts/type.js"></script>
        <script type="text/javascript" src="js/fonts/futuramd.js"></script>
        <script type="text/javascript" src="js/fonts/liberation.js"></script><!--LiberationSerif-Regular-->
        <script type="text/javascript" src="js/fonts/libo.js"></script><!--Liberation Serif-->
        <script type="text/javascript" src="js/fonts/futura_mdcn_bt_medium.typeface.js"></script><!--futura mdcn bt-->
        <script type="text/javascript" src="js/fonts/libeital.js"></script><!--liberation italic no funca-->
        <script type="text/javascript" src="js/fonts/liberation_serif_italic.typeface.js"></script><!--liberation serif italic-->
        <style>
        .conCurForm {
            width:400px;
        }
    </style>
        <script type="text/javascript">
        var fb_param = {};
        fb_param.pixel_id = '6008207297012';
        fb_param.value = '0.00';
        (function(){
            var fpw = document.createElement('script');
            fpw.async = true;
            fpw.src = '//connect.facebook.net/en_US/fp.js';
            var ref = document.getElementsByTagName('script')[0];
            ref.parentNode.insertBefore(fpw, ref);
        })();
    </script>
        <noscript>
            <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6008207297012&amp;value=0" />
        </noscript>
        <script language="javascript" type="text/javascript">
            
            function habilita() { 
                
                document.enviaDatines.lugar_sede.disabled   = false;
            }
            function comprobarRadio( radio ) {
                
                for ( i = 0; i < radio.length; i++ ) {
                    
                    if( radio[i].checked ) {
                        
                        return true;
                    }
                }
                return false; 
            }
            function ValidaCampos( form ) {
                 
                if ( document.enviaDatines.nombre.value == "" ) {
                    
                    alert( "Indicanos tu Nombre" );
                    document.enviaDatines.nombre.focus();
                    return false;
                }
                if ( document.enviaDatines.apellido.value   == "" ) {
                    
                    alert( "Indicanos tu Apellido" );
                    document.enviaDatines.apellido.focus();
                    return false;
                }
                if ( document.enviaDatines.email.value  == "") {
                    
                    alert( "Indicanos tu Correo" );
                    document.enviaDatines.email.focus();
                    return false;
                }
                if ( document.enviaDatines.telefono.value  == "") {
                    
                    alert( "Indicanos tu Teléfono" );
                    document.enviaDatines.telefono.focus();
                    return false;
                }
                if( !comprobarRadio( form.sede ) ) {
                    
                    alert("Indiquenos si es paciente o no.");
                }
                if ( document.enviaDatines.lugar_sede.value == "" ) {
                    
                    alert( "E Indicanos en que sede" );
                    document.enviaDatines.lugar_sede.focus();
                    return false;
                }
                if ( document.enviaDatines.contacto.value   == "" ) {
                    
                    alert( "Indicanos como podemos contactarte." );
                    document.enviaDatines.contacto.focus();
                    return false;
                }
                if (document.enviaDatines.tema.value    =="" ) {
                    
                    alert( "Indicanos como podemos ayudarte." );
                    document.enviaDatines.tema.focus();
                    return false;
                }
            }
        </script>
    </head>
    
    <body>
    
    <?php include("privacidad.html");?>
        <div id="conContenedor">
            <!--linea gris poner fuera del contenedor para que funque-->
            <div class="conLineSom floatLeft">
                <div class="lineSom"></div>
            </div>
            <!--linea gris poner fuera del contenedor para que funque-->
            <div class="contenedor">
                <div class="banner floatLeft">
                    <a href="index.php" class="floatLeft">
                        <div class="conLogo floatLeft">
                            <img src="template/logo.png" class="floatLeft" style="border:none;" />
                        </div>
                    </a>
                    <div class="floatLet conMenu floatRight">
                    <!--menu-->
                        <div class="floatLeft w100 floatRight" id="menuOf">
                            <div class="floatLeft" id="conHome">
                                <a href="index.php" class="floatLeft">
                                    <div class="floatLeft home futMD  typeface-js">Home</div><!--index-->
                                </a>
                            </div>
                            <div class="floatLeft" id="conQuienesSomos">
                                <a href="quienes_somos.php" class="floatLeft">
                                    <div class="floatLeft quienes_somos futMD typeface-js">Qui&eacute;nes somos</div><!--quienes somos-->
                                </a>
                            </div>
                            <div class="floatLeft" id="conTratamiento">
                                <a href="tratamiento.php" class="floatLeft">
                                    <div class="floatLeft tratamiento futMD typeface-js">Tratamiento</div><!--tratamiento-->
                                </a>
                            </div>
                            <div class="floatLeft" id="conTestimonios">
                                <a href="testimonios.php" class="floatLeft">
                                    <div class="floatLeft testimonios futMD typeface-js">Testimonios</div><!--testimonios-->
                                </a>
                            </div>
                            <div class="floatLeft" id="conSucursaleNA" style="width:105px;">
                                <a href="sucursales_nuevas_apertutas.php" class="floatLeft">
                                    <div class="floatLeft sucursaNuevasAperturas futMD typeface-js">Sucursales</div><!--testimonios-->
                                </a>
                            </div>
                            <div class="floatLeft" id="conSucursaleNA" style="width:105px;">
                                <a href="galeria_video.php" class="floatLeft">
                                    <div class="floatLeft sucursaNuevasAperturas futMD typeface-js">Multimedia</div><!--testimonios-->
                                </a>
                            </div>
                            <div class="floatLeft" id="conContacto">
                                <a href="contacto.php" class="floatLeft">
                                    <div class="floatLeft contacto futMD colorMen typeface-js">Contacto</div><!--contacto-->
                                </a>
                            </div>
                            <div class="floatLeft" id="ingles">
                                <a href="../eng/index.php" class="floatLeft"> <img src='usa.gif' class="floatLeft bndingles" height=15 width=25 />
                                    <div class="floatLeft ingles futMD typeface-js">English</div>
                                </a>
                            </div><!--version ingles-->
                        </div>
                    <!--menu-->
                    </div>
                </div>
                <!--banner-->
                <div id="cuerpo" class="floatLeft">
                    <div id="cuerpoContacto" class="floatLeft w100">
                        <div class="floatLeft conCuerpoContacto w100">
                            <div class="floatLeft conCurForm">
                                <div class="floatLeft conTexForm">
                                    <span class="floatLeft texForm libeSerItal cursiva typeface-js">Formulario de Contacto</span>
                                </div>
                                <form name="enviaDatines" onSubmit="return ValidaCampos(this)">
                                    <div class="floatLeft conForm">
                                        <div class="floatLeft conFormNombre w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js">Nombre</span>
                                            <div class="floatLeft FormNombre">
                                                <input class="input" type="text" name="nombre" value="" />
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormNombre w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js">Apellido</span>
                                            <div class="floatLeft FormNombre">
                                                <input class="input"  type="text" name="apellido" value="" />
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormNombre w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js">E-mail</span>
                                            <div class="floatLeft FormNombre">
                                                <input  class="input" type="email" name="email" value="" />
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormNombre w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js">Tel&eacute;fono</span>
                                            <div class="floatLeft FormNombre">
                                                <input  class="input" type="text" name="telefono" value="" />
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormNombre w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js">Pa&iacute;s</span>
                                            <div class="floatLeft FormNombre">
                                                <input  class="input" type="text" name="pais" value="" />
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormNombre w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js">Ciudad</span>
                                            <div class="floatLeft FormNombre">
                                                <input  class="input" type="text" name="ciudad" value="" />
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormMensaje w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js" style="font-weight:bold; font-family:Arial; font-size:13px;">¿ERES PACIENTE?</span>
                                            <div class="floatLeft FormNombre">
                                               <ul style="list-style:none;"> 
                                                   <li style="float: left; margin: 0px 10px 0px 0px; font-family: Arial, sans-serif; font-size:13px; font-weight:bold;">
                                                       Si&nbsp;<input name="sede" type="radio" value="si" onclick="habilita()">
                                                   </li>
                                                   <li style="margin:0px 10px 0px 0px; float:left; font-weight:bold; font-family:Arial; font-size:13px;">
                                                       No&nbsp;<input name="sede" type="radio" value="no">
                                                   </li>
                                                   <li style="margin:10px 45px 0px 0px; float:left; font-size:14px; color:rgb(146, 145, 145);">
                                                       Sede:&nbsp;
                                                   </li>
                                                   <li style="margin:-19px 0px 9px 35px; float:left;">
                                                       <input  class="input" type="text" name="lugar_sede" value="" style="margin:6px 0px 0px 0px; width:200px;" disabled/>
                                                   </li>
                                               </ul>
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormNombre w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js">¿En que te podemos ayudar?</span>
                                            <div class="floatLeft FormNombre">
                                                <ul style="list-style:none;">
                                                    <li style="margin:0px 10px 0px 0px; font-family: Arial, sans-serif;">
                                                        <select name="tema" class="areas" style="font-size:13px;">
                                                            <option value="">Seleccione</option>
                                                            <option value="Dudas e Información del Tratamiento">Dudas e Información del Tratamiento</option>
                                                            <option value="Felicitaciones, Quejas y Sugerencias">Felicitaciones, Quejas y Sugerencias</option>
                                                            <option value="Agendar o Cambiar una Cita">Agendar o Cambiar una Cita</option>
                                                        </select>
                                                    </li>
                                                    <li style="margin:20px 10px 0px 0px; float:left; font-size:14px; color:rgb(146, 145, 145);">
                                                        Otro:&nbsp;
                                                    </li>
                                                    <li style="margin:-13px 0px 19px 41px; float:left;">
                                                        <input  class="input" type="text" name="otro" value="" style="width:200px;"/>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormNombre w100">
                                            <span class="floatLeft conFormTNombre lire typeface-js">Medio de contacto</span>
                                            <div class="floatLeft FormNombre" style="width:250px;">
                                                <select name="contacto" class="areas" style="font-size:13px;">
                                                    <option value="telefono">Tel&eacute;fono</option>
                                                    <option value="correo">Correo</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormMensaje w100" style="height:100px;">
                                            <span class="floatLeft conFormTNombre lire typeface-js">Mensaje</span>
                                            <div class="floatLeft FormNombre">
                                                <textarea name="mensaje" rows="7" class="areas"  type="text"></textarea>
                                            </div>
                                        </div>
                                        <div class="floatLeft conFormMensaje w100">
                                            <span class="floatLeft conEnviar">* Todos los campos requeridos.</span>
                                            <div class="floatLeft FormEnviar">
                                                <input class="envio cursorPointer" type="submit" value=" OK "/>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="floatLeft lineContacto"></div>
                            <div class="floatLeft ConSucuS">
                                <div class="floatLeft conTexForm sasCon w100">
                                    <span class="floatLeft texScurs  libeSerItal cursiva typeface-js">Otras formas de contacto:</span>
                                     <!--<span class="floatLeft texScurs1 w100 libeSerItal cursiva typeface-js">Selecciona un pa&iacute;s</span>-->
                                </div>
                                <div class="floatLeft w100 ConConBandCont">
                                    <div class="floatLeft ContaMDsolu">
                                        <a href="http://www.youtube.com/user/giovannibojaninimx" class="floatLEft" target="_blank">
                                            <img src="template/contacto/youtube.png" class="floatLeft" />
                                        </a>
                                        <div class="floatLeft conTexConYou" >
                                            <div class="floatLeft futMD texConnn typeface-js">/user/giovannibojaninimx</div>
                                        </div>
                                    </div>
                                    <div class="floatLeft linnnns"></div>
                                    <div class="floatLeft ContaMDsolu">
                                        <a href="https://www.facebook.com/giovannibojanini" class="floatLEft" target="_blank">
                                            <img src="template/contacto/facebook.png" class="floatLeft" />
                                        </a>
                                        <div class="floatLeft conTexConYou" >
                                            <div class="floatLeft futMD texConnn typeface-js">/giovannibojanini</div>
                                        </div>
                                    </div>
                                    <div class="floatLeft linnnns"></div>
                                    <div class="floatLeft ContaMDsolu">
                                        <a href="http://twitter.com/#!/gbojanini" class="floatLEft" target="_blank">
                                            <img src="template/contacto/twitter.png" class="floatLeft" />
                                        </a>
                                        <div class="floatLeft conTexConYou" >
                                            <div class="floatLeft futMD texConnn typeface-js">/gbojanini</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="call">
                    <ul style="top: 24px;">
                        <li><img src="img/colombia.png"></li>
                        <li>Call center<br/>01800 377 3567</li>
                    </ul>
                </div>
                <div id="fotterHome" class="floatLeft" style="margin: 40px 0px 0px 0px;">
                    <div class="floatLeft conFotterTex">
                        <p class="floatLeft conFotterTexCent">Centro Dermatol&oacute;gico Giovanni Bojanini &copy; 2011 </p>
                    </div>
                    <div class="floatLeft conFotterTexTwitt" style="margin-top:7px;width:126px;position:relative;">
                        <div class="floatLeft cursorPointer" id="PoliticaPrivacidad">
                            <p class="floatLeft conFotterTexCent" style="color:#412d20;">Politicas de privacidad</p>
                        </div>
                    </div>
                    <div class="floatRight conFotterTexTwitt">
                        <a href="http://twitter.com/#!/gbojanini" TARGET="_blank" class="floatLeft">
                            <img src="template/iconos/twitter.png" class="floatLeft" />
                            <p class="floatLeft FotterTexTwitt futMD typeface-js"  style="color:#412d20;">Twitter</p>
                        </a>
                    </div>
                    <div class="floatRight conFotterTexface">
                        <a href="https://www.facebook.com/giovannibojanini" TARGET="_blank" class="floatLeft">
                            <img src="template/iconos/facebook.png" class="floatLeft"/>
                            <p class="floatLeft FotterTexface futMD typeface-js"  style="color:#412d20;">Facebook</p>
                        </a>
                    </div>
                    <div class="floatRight conFotterTexface">
                        <a href="http://www.youtube.com/user/giovannibojaninimx" TARGET="_blank" class="floatLeft">
                            <img src="template/iconos/youtube.png" class="floatLeft" />
                            <p class="floatLeft FotterTexface futMD typeface-js"  style="color:#412d20;">Youtube</p>
                        </a>
                    </div>
                </div>
                <!--imagen de fondo-->
                <div class="floatLeft" id="banderaFontoHome" style="margin-top:-101px;">
                    <div class="" id="banderaFontoHomeInte">
                    <div class="banderaHome floatRight"></div>
                </div>
                </div>
            </div>
        </div>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-43188642-1', 'giovannibojanini.com');
            ga('send', 'pageview');
        </script>
    </body>
</html>
