jQuery(document).ready(function($){
    $('.testimonial-widget ul').cycle({
        fx:'scrollLeft',
        
        timeout:8000,
        speed:300, 
        pager:'.p-testimonial',
        fit: 1,
        width: '100%'
    });
});