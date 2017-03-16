<?php // footer file ..?>

 <footer>
        <div class="ui container">
            <div class="ui grid padded">
                <div class="ui row centered grid" >
                   <a href="index.php">
                        <img src="client/images/logo.png"  class="ui small image "  alt="sample logo">
                    </a>
                </div>

                <div class="ui row centered grid" >
                        <button class="ui circular facebook icon button ">
                            <i class="facebook icon animate-social"></i>
                        </button>
                        <button class="ui circular twitter icon button ">
                            <i class="twitter icon animate-social"></i>
                        </button>
                        <button class="ui circular linkedin icon button ">
                            <i class="linkedin icon animate-social"></i>
                        </button>
                        <button class="ui circular google plus icon button ">
                            <i class="google plus icon animate-social"></i>
                        </button>
                </div>
                <p class="ui row centered grid" >
                        © 2017 All Rights Reserved Terms of Use and Privacy Policy
                </p>
                
            </div>        
        </div>
    </footer>
<script>
  $(document)
    .ready(function() {

      // fix menu when passed
      $('.large-screen')
        .visibility({
          once: false,
          onBottomPassed: function() {
            $('.mobile-screen').transition('fade in');
          },
          onBottomPassedReverse: function() {
            $('.mobile-screen').transition('fade out');
          }
        })
      ;

      // create sidebar and attach to menu open
      $('.ui.sidebar')
        .sidebar('attach events', '.toc.item')
      ;

    })
  ;
  </script>

