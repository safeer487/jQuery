$('#divs').click(function(e) {
  console.log('entra')
  var iPosX = e.pageX
  var iPosY = e.pageY
      var $this = $(this);
       
        var $div = $('<div>', {
          'class' : 'cuadro'
        });

        $div.css('top', iPosY + 'px')
        $div.css('left', iPosX + 'px')

        $this.append($div)
        
        
    });
