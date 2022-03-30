(function($) {
    "use strict";
    let title = null;
    let color = null;
    let origin = null;
    let price_dollar = null;
    let fees_type = null;
    $('#item-name').on('keyup', function(e) {
        title = e.target.value;
        $('#file-saved').text('Writing...');
        document.getElementById('service-title').innerHTML = title;
    });

    $('#price').on('keyup', function(e) {
        price_dollar = e.target.value;
        $('#file-saved').text('Writing...');
        document.getElementById('price-dollar-service').innerHTML = new Intl.NumberFormat().format(price_dollar);
    });

    $('#fees_type').on('change', function(e) {
        fees_type = e.target.value;
        if(fees_type == 1) {
            $('#fees_text').html('(Fixed)');
            $('#fees').prop('disabled', false);
        }
        else if(fees_type == 2) {
            $('#fees_text').html('(Percentage)');
            $('#fees').prop('disabled', false);
        }
        else {
            $('#fees_text').html('');
            $('#fees').prop('disabled', true);
        }
    });

    $('#type1').on('click', function(e) {
        $('#max_bid_d').addClass('d-none');
        $('#min_bid_d').addClass('d-none');
        $('#price-d').removeClass('d-none');
        $('#av-d').removeClass('d-none');
    });

    $('#type2').on('click', function(e) {
        $('#max_bid_d').removeClass('d-none');
        $('#min_bid_d').removeClass('d-none');
        $('#price-d').addClass('d-none');
        $('#price').val(0);
        $('#av-d').addClass('d-none');
        $('#available_item').val(1);
    });

    $('#color').on('change', function (e) {
        color = e.target.value;
        $('#file-saved').text('Writing...');
        document.getElementById('product-color').innerHTML = color;
    });

    $('#origin').on('change', function (e) {
        origin = e.target.value;
        $('#file-saved').text('Writing...');
        document.getElementById('product-origin').innerHTML = origin;
    });

    $('.putImage1').on('change', function () {
        var src = this;
        var target = document.getElementById('target1');
        target.style.maxWidth = '300px';
        target.style.maxHeight = '300px';
        var reader = new FileReader();

        var target2 = document.getElementById('target2');
        target2.style.maxWidth = '300px';
        target2.style.maxHeight = '300px';

        reader.onload = function (e) {
            var extension = src.files[0].type.split('/')[0];
            
            switch(extension) {
                case 'video':
                    // alert('vdo'+ extension);
                    $('#target1, #target2').hide();
                    $('#target1_video, #target2_video').show();
                    
                    const videoSource1 = document.createElement('source');
                    const video = document.getElementById('target1_video');
                    videoSource1.setAttribute('src', e.target.result);
                    video.appendChild(videoSource1);
                    video.load();
                    video.play();

                    const videoSource2 = document.createElement('source');
                    const video2 = document.getElementById('target2_video');
                    videoSource2.setAttribute('src', e.target.result);
                    video2.appendChild(videoSource2);
                    video2.load();
                    video2.play();
                    // $('#target1_'+extension).attr('src', e.target.result);
                    // $('#target2_'+extension).attr('src', e.target.result);
                    break;
                    default:
                        $('#target1_video, #target2_video').hide();
                        $('#target1').show().attr('src', e.target.result);
                        $('#target2').show().attr('src', e.target.result);
                        video.pause();
                        video2.pause();
                        // alert('no vdo'+ extension);
                
            }
            
            

            
        }
        // reader.onprogress = function (e) {
        //     console.log('progress: ', Math.round((e.loaded * 100) / e.total));
        //   };
        reader.readAsDataURL(src.files[0]);

       
    });
    $('#show-prev').on('click', function () {
        $('#file-saved').text('File Saved !');
    });
})(jQuery)
