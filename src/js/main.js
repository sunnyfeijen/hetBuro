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
        text: 'Upload hier een screenshot van je portfolio.<br><br> Jpeg en Max 1Mb',
        attachTo: '#firstform #bestand right',
        buttons: [
            {
                text: 'Ok',
                action: tour.next
            }
        ]
    });

    tour.addStep('b-step', {
        text: 'Kies hier je klas',
        attachTo: '#firstform .klas right',
        buttons: [
            {
                text: 'Ok',
                action: tour.next
            }
        ]
    });
    
    tour.addStep('b-step', {
        text: 'Typ de url van je portfolio',
        attachTo: '#firstform .url right',
        buttons: [
            {
                text: 'Ok',
                action: tour.next
            }
        ]
    });
    
    tour.addStep('b-step', {
        text: 'Klik op upload en je bent klaar!',
        attachTo: '#firstform .button right',
        buttons: [
            {
                text: 'Ik snap het',
                action: tour.next
            }
        ]
    });

    
    
    $( ".help" ).click(function() {
        tour.start();
    });
//-----Shephard-END-------------------------------
    
        $( ".triangle" ).click(function() {
            tour.complete();
          $( ".memberarea" ).slideUp( "slow", function() {
          });
        });

        
    
});
