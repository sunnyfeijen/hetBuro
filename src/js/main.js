$(document).ready(function(){
    
    $( ".triangle" ).click(function() {
      $( ".memberarea" ).slideUp( "slow", function() {
          
      });
    });
    
//    introJs().start();
//    introJs().setOption("skipLabel", "Exit");
    
//-----Shephard-----------------------------------
    var tour;

    tour = new Shepherd.Tour({
        defaults: {
            classes: 'shepherd-theme-arrows'
        }
    });
    

    tour.addStep('any-name', { 
        text: 'upload your portfolio here.',
        attachTo: '.uploadbutton right',
        buttons: [
            {
                text: 'Next',
                action: tour.next
            }
        ]
    });

    tour.addStep('b-step', {
        text: 'You can sort by class with these buttons',
        attachTo: '.classbutton bottom',
        buttons: [
            {
                text: 'End',
                action: tour.next
            }
        ]
    });

    tour.start();
    
//    document.getElementsByClassName("uploadbutton").focus();
//-----Shephard-END-------------------------------
    
});