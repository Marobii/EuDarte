<!DOCTYPE html>
<html lang="en">

<head>
    <title>EU D'ARTE - Associação para a Integração de Jovens</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/dee30bf8aa.js" crossorigin="anonymous"></script>

    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">

    <!-- Logo da página -->
    <link rel="shortcut icon" type="image/x-icon" href="logo/perfilFacebook.png"/>

</head>

<body>
    <!-- Menu -->
@include('inc.menu')
<!-- Menu -->

<!-- Google Maps -->
<div id="map-container" class="z-depth-1-half map-container" style="height: 500px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3005.2774457916225!2d-8.61650978427864!3d41.128468919968306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464d78dd4461d%3A0xb2791f1a6f750ab4!2sTv.%20Conselheiro%20Veloso%20da%20Cruz%2C%20Vila%20Nova%20de%20Gaia!5e0!3m2!1spt-PT!2spt!4v1593081086223!5m2!1spt-PT!2spt" frameborder="0"
      style="border:0" allowfullscreen></iframe>
  </div>
<!-- Google Maps -->


 <!-- Form -->
 @include('inc.form')
 <!-- Form -->


<script>
    $(document).ready(function() {
	// Test for placeholder support
    $.support.placeholder = (function(){
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('.form-label').each(function(){
            $(this).addClass('js-hide-label');
        });

        // Code for adding/removing classes here
        $('.form-group').find('input, textarea').on('keyup blur focus', function(e){

            // Cache our selectors
            var $this = $(this),
                $label = $this.parent().find("label");

						switch(e.type) {
							case 'keyup': {
								 $label.toggleClass('js-hide-label', $this.val() == '');
							} break;
							case 'blur': {
								if( $this.val() == '' ) {
                    $label.addClass('js-hide-label');
                } else {
                    $label.removeClass('js-hide-label').addClass('js-unhighlight-label');
                }
							} break;
							case 'focus': {
								if( $this.val() !== '' ) {
                    $label.removeClass('js-unhighlight-label');
                }
							} break;
							default: break;
						}
						// previous implementation with ifs
            /*if (e.type == 'keyup') {
                if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label');
                } else {
                    $parent.removeClass('js-hide-label');
                }
            }
            else if (e.type == 'blur') {
                if( $this.val() == '' ) {
                    $parent.addClass('js-hide-label');
                }
                else {
                    $parent.removeClass('js-hide-label').addClass('js-unhighlight-label');
                }
            }
            else if (e.type == 'focus') {
                if( $this.val() !== '' ) {
                    $parent.removeClass('js-unhighlight-label');
                }
            }*/
        });
    }
});
</script>


<!-- Footer -->
@include('inc.footer')
<!-- Footer -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>
