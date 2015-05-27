$(document).ready(function(){
    
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
        attachTo: '#firstform #bestand right',
        buttons: [
            {
                text: 'Next',
                action: tour.next
            }
        ]
    });

    tour.addStep('b-step', {
        text: 'You can sort by class with these buttons',
        attachTo: '#firstform .klas right',
        buttons: [
            {
                text: 'End',
                action: tour.next
            }
        ]
    });
    
    tour.addStep('b-step', {
        text: 'You can sort by class with these buttons',
        attachTo: '#firstform .url right',
        buttons: [
            {
                text: 'End',
                action: tour.next
            }
        ]
    });
    
    tour.addStep('b-step', {
        text: 'You can sort by class with these buttons',
        attachTo: '#firstform .button right',
        buttons: [
            {
                text: 'End',
                action: tour.next
            }
        ]
    });

    tour.start();
//-----Shephard-END-------------------------------
    
        $( ".triangle" ).click(function() {
            tour.complete();
          $( ".memberarea" ).slideUp( "slow", function() {
          });
        });
    
});