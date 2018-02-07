$(document).ready(function(){
     $('.carousel').carousel({
           dist:0,
           shift:0,
           padding:20,

     }),
     $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      }),
    $('.carousel.carousel-slider').carousel({fullWidth: true}),
    $('.user').click(function(){
    Materialize.toast(' Hello User', 500)
  }),
  $('.employee').click(function(){
  Materialize.toast(' Hello Employee', 500)
})


   });
