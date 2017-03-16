
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


 
