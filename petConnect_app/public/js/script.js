let currentTestimonial = 0
showTestimonial(currentTestimonial)

function showTestimonial(n) {
    let testimonials = document.getElementsByClassName('testimonial')

    if (n >= testimonials.length) {
        currentTestimonial = testimonials.length - 1
    }

    if (n < testimonials.length) {
        currentTestimonial = n
    }

    if ( n < 0 ){
        currentTestimonial = 0
    }

    for (let i = 0; i < testimonials.length; i++) {
        testimonials[i].style.display = 'none';
    }

    testimonials[currentTestimonial].style.display = 'block';

}



function changeTestimonial(n) {
    showTestimonial(currentTestimonial += n)
}
