  <!-- Footer -->
  <footer class="clearfix">
                        <div class="pull-right">
                           Developed by <a href="http://www.zealaraxtechnologies.com" target="_blank">Zealarax Technologies</a>
                        </div>
                        <div class="pull-left">
                            <span id="">2020</span> &copy; <a href="http://www.zealaraxtechnologies.com" target="_blank">Zealarax Technologies</a>
                        </div>
                        
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
     
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>
        <script src="js/image-picker.js"></script>
        <script src="js/pages/formsGeneral.js"></script>
        <script src="js/editor.js"></script>
        <!-- Load and execute javascript code used only in this page -->
        <!-- <script src="js/pages/readyFiles.js"></script> -->
        <!-- <script>$(function(){ ReadyFiles.init(); });</script> -->
        <script src="js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
        <script>$(function(){ FormsGeneral.init(); });</script>
      
        <script>
            $(function(){
	var container = $('.containerr'), inputFile = $('#file'), img, btn, txt = 'Set featured image', txtAfter = 'Browse another pic';
			
	if(!container.find('#upload').length){
		container.find('.input').append('<input type="button" value="'+txt+'" id="upload">');
		btn = $('#upload');
		container.prepend('<img src="" class="hidden img" alt="Uploaded file" id="uploadImg" >');
		img = $('#uploadImg');
	}
			
	btn.on('click', function(){
		img.animate({opacity: 0}, 300);
		inputFile.click();
	});

	inputFile.on('change', function(e){
		container.find('label').html( inputFile.val() );
		
		var i = 0;
		for(i; i < e.originalEvent.srcElement.files.length; i++) {
			var file = e.originalEvent.srcElement.files[i], 
				reader = new FileReader();

			reader.onloadend = function(){
				img.attr('src', reader.result).animate({opacity: 1}, 700);
			}
			reader.readAsDataURL(file);
			img.removeClass('hidden');
		}
		
		btn.val( txtAfter );
	});
});
        </script>
		<script>
			$(document).ready(function() {
                $("#txtEditor").Editor();
               
                $('#mymodalbtn').click(function() {
                    $('#exampleModalLong').modal('toggle');
                });
            });
            
        </script>
        <script>
          $(document).ready(function() {
	$('.expand-collapse h3').each(function() {
		var tis = $(this), state = false, answer = tis.next('div').slideUp();
		tis.click(function() {
			state = !state;
			answer.slideToggle(state);
			tis.toggleClass('active',state);
		});
    });
});
        </script>
