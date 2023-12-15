function updateCardVisibility() {
    var selectedGenders = [];
    var selectedPrices = [];
  
   
    $(".menu > ul > li:nth-child(1) input[type='checkbox']:checked").each(function () {
      selectedGenders.push($(this).next().text().trim().toLowerCase());
    });
  
   
    $(".menu > ul > li:nth-child(2) input[type='checkbox']:checked").each(function () {
      selectedPrices.push(parseFloat($(this).next().text().replace(/[^0-9.]/g, '')));
    });
  
   
    $(".card").each(function () {
      var cardGender = $(this).data("gender").toLowerCase();
      var cardPrice = parseFloat($(this).data("price").replace(/[^0-9.]/g, ''));
  
      var genderMatch = selectedGenders.length === 0 || selectedGenders.includes(cardGender);
      var priceMatch = selectedPrices.length === 0 || selectedPrices.includes(cardPrice);
  
    
      $(this).toggle(genderMatch && priceMatch);
    });
  }
  
  
  
    $(".menu > ul > li input[type='checkbox']").change(function (e) {
      e.stopPropagation(); 
      updateCardVisibility();
    });

    $(".menu > ul > li").click(function (e) {
      if ($(e.target).is("input[type='checkbox']")) {
        e.stopPropagation(); 
      } else {
        e.preventDefault();
        e.stopPropagation(); 
        $(this).toggleClass("active");
        $(this).find("ul").slideToggle();
        $(this).siblings().find("ul").slideUp().parent().removeClass("active");
      }

     
      updateCardVisibility();
    });

  
    $(".menu-btn").click(function () {
      $(".sidebar").toggleClass("active");
    });

    $(document).ready(function () {
      $('.details-button').click(function () {
          var item = $(this).closest('.product-card').data('item');
          window.location.href = '/itempage/' + item;
      });
  });

   
    updateCardVisibility();
