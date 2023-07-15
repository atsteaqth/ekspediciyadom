$(function () {


    const $formReply = $('#sendReply')
    const $sendResult = $('#sendResult')
    const $starsItem = $('.stars__item')

    $( window ).scroll(function(e) {
        const scrollY = e.currentTarget.scrollY
        if (scrollY > 30) {
            $('.nav-sec').addClass('top-nav-collapse')
        } else {
            $('.nav-sec').removeClass('top-nav-collapse')

        }
    });

    $('.navbar-toggle').on('click', function () {
        $('.navbar-collapse').toggleClass('in')
    })

    $('.fancybox').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : true,
        arrows    : true,
        nextClick : true,

        helpers : {
            thumbs : {
                width  : 50,
                height : 50
            }
        }
    });

    $starsItem.on('click',  function () {
        const targetName = $(this).attr('data-name')
        const value = $(this).attr('data-value')
        $starsItem.each(function () {
            const v = $(this).attr('data-value')
            const name = $(this).attr('data-name')
            if (name === targetName) {
                if  (v <= value) {
                    $(this).addClass('fill')
                } else {
                    $(this).removeClass('fill')
                }
            }
        })

        const input = $(`input[name=${targetName}]`)
        input.val(value)

    })

    $formReply.on('submit', async function (e) {
        e.preventDefault()
        const _self = $(this)[0]


        const formData = new FormData($(this)[0])

        fetch('/ajax/sendReply.php', {
            method: 'post',
            body: formData,
        }).then(response => {
                return response.json();
            })
            .then((data) => {
                if (data.result === 'Y') {
                    $sendResult.text('Спасибо, после модерации ваш отзыв будет опубликован')
                    setTimeout(() => {
                        _self.reset()
                        $sendResult.text('')
                        $starsItem.each(function () {
                            $(this).removeClass('fill')
                        })
                    },4000)
                }

            })
            .catch(error => {
                console.warn(error)
            })

    })





})