jQuery(document).ready(function($) {
    $('#slug-form').submit(function() {
            
        data = {
            action: 'slug_myaction'
        };
        
        $.post(ajaxurl, data, function(response){
            
        });
        return false;
    });
});
    