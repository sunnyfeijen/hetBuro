$(document).ready(function(){
    
    
//-----Shephard-----------------------------------


    //  if first form is shown -->
    var tour;

    tour = new Shepherd.Tour({
        defaults: {
            classes: 'shepherd-theme-arrows'
        }
    });
    

    tour.addStep('any-name', { 
        text: 'upload your screenshot here.',
        attachTo: '#firstform #bestand right',
        buttons: [
            {
                text: 'Next',
                action: tour.next
            }
        ]
    });

    tour.addStep('b-step', {
        text: 'Select you class over here',
        attachTo: '#firstform .klas right',
        buttons: [
            {
                text: 'Next',
                action: tour.next
            }
        ]
    });
    
    tour.addStep('b-step', {
        text: 'Type your portfolios url',
        attachTo: '#firstform .url right',
        buttons: [
            {
                text: 'Next',
                action: tour.next
            }
        ]
    });
    
    tour.addStep('b-step', {
        text: 'Press upload and youre done!',
        attachTo: '#firstform .upload right',
        buttons: [
            {
                text: 'Got it!',
                action: tour.next
            }
        ]
    });

    tour.start();
    
//-----Shephard-END-------------------------------
    
    $( ".triangle" ).click(function() {
        // quit Shepherd
        tour.complete();
      $( ".memberarea" ).slideUp( "slow", function() {
      });
    });
    
});