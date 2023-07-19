

export function init() {
    const img = $('#img-main');
    const listImgChild = $('.img-child');
    
    listImgChild.on('click', function() {
        const imageUrl = $(this).attr('src');
        img.attr('src', imageUrl);
      });
}