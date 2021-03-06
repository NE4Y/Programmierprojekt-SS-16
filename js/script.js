(function (window) {

    'use strict';

    /**
     * Extend Object helper function.
     */
    function extend(a, b) {
        for (var key in b) {
            if (b.hasOwnProperty(key)) {
                a[key] = b[key];
            }
        }
        return a;
    }

    /**
     * Each helper function.
     */
    function each(collection, callback) {
        for (var i = 0; i < collection.length; i++) {
            var item = collection[i];
            callback(item);
        }
    }

    /**
     * Menu Constructor.
     */
    function Menu(options) {
        this.options = extend({}, this.options);
        extend(this.options, options);
        this._init();
    }

    /**
     * Menu Options.
     */
    Menu.prototype.options = {
        wrapper: '#o-wrapper',          // The content wrapper
        type: 'slide-left',             // The menu type
        menuOpenerClass: '.c-button',   // The menu opener class names (i.e. the buttons)
        maskId: '#c-mask'               // The ID of the mask
    };

    /**
     * Initialise Menu.
     */
    Menu.prototype._init = function () {
        this.body = document.body;
        this.wrapper = document.querySelector(this.options.wrapper);
        this.mask = document.querySelector(this.options.maskId);
        this.menu = document.querySelector('#c-menu-' + this.options.type);
        this.closeBtn = this.menu.querySelector('.c-menu_close');
        this.menuOpeners = document.querySelectorAll(this.options.menuOpenerClass);
        this._initEvents();
    };

    /**
     * Initialise Menu Events.
     */
    Menu.prototype._initEvents = function () {
        // Event for clicks on the close button inside the menu.
        this.closeBtn.addEventListener('click', function (e) {
            e.preventDefault();
            this.close();
        }.bind(this));

        // Event for clicks on the mask.
        this.mask.addEventListener('click', function (e) {
            e.preventDefault();
            this.close();
        }.bind(this));
    };

    /**
     * Open Menu.
     */
    Menu.prototype.open = function () {
        this.body.classList.add('has-active-menu');
        this.wrapper.classList.add('has-' + this.options.type);
        this.menu.classList.add('is-active');
        this.mask.classList.add('is-active');
        this.disableMenuOpeners();
    };

    /**
     * Close Menu.
     */
    Menu.prototype.close = function () {
        this.body.classList.remove('has-active-menu');
        this.wrapper.classList.remove('has-' + this.options.type);
        this.menu.classList.remove('is-active');
        this.mask.classList.remove('is-active');
        this.enableMenuOpeners();
    };

    /**
     * Disable Menu Openers.
     */
    Menu.prototype.disableMenuOpeners = function () {
        each(this.menuOpeners, function (item) {
            item.disabled = true;
        });
    };

    /**
     * Enable Menu Openers.
     */
    Menu.prototype.enableMenuOpeners = function () {
        each(this.menuOpeners, function (item) {
            item.disabled = false;
        });
    };

    /**
     * Add to global namespace.
     */
    window.Menu = Menu;

})(window);

var slideLeft = new Menu({
    wrapper: '#o-wrapper',
    type: 'slide-left',
    menuOpenerClass: '.c-button',
    maskId: '#c-mask'
});

/* Login Page */

$(document).ready(function () {

    $('#login').click(function () {
        if (!$('#c-mask-login')[0].classList.contains('is-active')) {
            $('#c-mask-login')[0].classList.add('is-active');
            $('#login_button_close').show();
        }
        $('section#loginpage').slideToggle(function () {

        });
    });

    $('#login_button_close').click(function () {
        $('section#loginpage').slideToggle(function () {
            $('#c-mask-login')[0].classList.remove('is-active');
        });
        $(this).hide();
        if ($('section#registry')[0].classList.contains('activeMenu')) {
            $('section#registry').slideToggle(function () {

            })
            $('section#registry')[0].classList.remove('activeMenu');
        }

    });

    $('#c-mask-login').click(function () {
        $('section#loginpage').slideToggle(function () {
            $('#c-mask-login')[0].classList.remove('is-active');
        });
        $('#login_button_close').hide();
        if ($('section#registry')[0].classList.contains('activeMenu')) {
            $('section#registry').slideToggle(function () {

            })
            $('section#registry')[0].classList.remove('activeMenu');
        }
    })
    /*
     Wir müssen aus allen Playbuttons links mit den richtigen IDs machen.
     $('.play').click(function () {
     window.location.href = 'video?id=93';
     })*/
    $('#register_text').click(function (e) {
        e.preventDefault();
        $('section#registry').slideToggle(function () {
            this.classList.add('activeMenu');
        });
    })
    $('#back_to_login').click(function () {
        $('section#registry').slideToggle(function () {
            this.classList.remove('activeMenu');
        });
    });
});

/* Playlist Buttons */

$(document).ready(function () {

    /*Delete PL*/
    $('#remove').click(function () {
        if (!$('#c-mask-playlist')[0].classList.contains('is-active')) {
            $('#c-mask-playlist')[0].classList.add('is-active');
            $('#plchanges_button_close').show();
        }
        $('section#deletePlayForm').slideToggle(function () {
        });
        $('#addPlayForm').hide();
        $('#changePlayForm').hide();
    });

    /*Add Pl*/
    $('#add').click(function () {
        console.log("add clicked");
        if (!$('#c-mask-playlist')[0].classList.contains('is-active')) {
            $('#c-mask-playlist')[0].classList.add('is-active');
            $('#plchanges_button_close').show();
        }
        $('section#addPlayForm').slideToggle(function () {

        });
    });


    /*Change PL*/
    $('#change').click(function () {
        if (!$('#c-mask-playlist')[0].classList.contains('is-active')) {
            $('#c-mask-playlist')[0].classList.add('is-active');
            $('#plchanges_button_close').show();
        }
        $('section#changePlayForm').slideToggle(function () {

        });
    });

    /*Close Mask*/

    $('#plchanges_button_close').click(function () {
        $('section#deletePlayForm').slideToggle(function () {
            $('#c-mask-playlist')[0].classList.remove('is-active');
        });
        $('section#addPlayForm').slideToggle(function () {
            $('#c-mask-playlist')[0].classList.remove('is-active');
        });
        $('section#changePlayForm').slideToggle(function () {
            $('#c-mask-playlist')[0].classList.remove('is-active');
        });
        $('#addPlayForm').hide();
        $('#deletePlayForm').hide();
        $('#changePlayForm').hide();
        $(this).hide();
    });

    $('#c-mask-playlist').click(function () {
        $('section#deletePlayForm').slideToggle(function () {
            $('#c-mask-playlist')[0].classList.remove('is-active');
        });
        $('section#addPlayForm').slideToggle(function () {
            $('#c-mask-playlist')[0].classList.remove('is-active');
        });
        $('section#changePlayForm').slideToggle(function () {
            $('#c-mask-playlist')[0].classList.remove('is-active');
        });
        $('#addPlayForm').hide();
        $('#deletePlayForm').hide();
        $('#changePlayForm').hide();
        $('#plchanges_button_close').hide();
    });
    $('.selectpicker').selectpicker({
        size: 4,
        width: "115px"
    });
    $('.selectplaylists').selectpicker({
        width: "100%"
    });
    $('.dropdown-toggle').css({
        "border-top-right-radius": 0,
        "border-bottom-right-radius": 0
    });

});


/* Video.tpl -> Add & Delete Video to Playlist Buttons */

$(document).ready(function () {

    /*Add Pl*/
    $('#pladd').click(function () {
        if (!$('#c-mask-playlist')[0].classList.contains('is-active')) {
            $('#c-mask-playlist')[0].classList.add('is-active');
            $('#plchanges_button_close').show();
        }
        $('section#addVideoToPlaylistForm').slideToggle(function () {

        });
    });

    /*Close Mask*/

    $('#plchanges_button_close').click(function () {
        $('section#addVideoToPlaylistForm').slideToggle(function () {
            $('#c-mask-playlist')[0].classList.remove('is-active');
        });
        $('#addVideoToPlaylistForm').hide();
        $(this).hide();
    });

    $('#c-mask-playlist').click(function () {
        $('section#addVideoToPlaylistForm').slideToggle(function () {
            $('#c-mask-playlist')[0].classList.remove('is-active');
        });
        $('#addVideoToPlaylistForm').hide();
        $('#plchanges_button_close').hide();
    });


    /* Add & Delete Video from Category*/

    $('#catadd').click(function () {
        if (!$('#c-mask-categorie')[0].classList.contains('is-active')) {
            $('#c-mask-categorie')[0].classList.add('is-active');
            $('#plchanges_button_close').show();
        }
        $('section#addVideoToCategorieForm').slideToggle(function () {

        });
    });

    /*Close Mask*/

    $('#plchanges_button_close').click(function () {
        $('section#addVideoToCategorieForm').slideToggle(function () {
            $('#c-mask-categorie')[0].classList.remove('is-active');
        });
        $('#addVideoToCategorieForm').hide();
        $(this).hide();
    });

    $('#c-mask-categorie').click(function () {
        $('section#addVideoToCategorieForm').slideToggle(function () {
            $('#c-mask-categorie')[0].classList.remove('is-active');
        });
        $('#addVideoToCategorieForm').hide();
        $('#plchanges_button_close').hide();
    });
    
    

});

var slideLeftBtn = document.querySelector('#c-button-slide-left');

slideLeftBtn.addEventListener('click', function (e) {
    e.preventDefault;
    slideLeft.open();
});
/**
 * Created by ospoe on 18.05.2016.
 */

function search() {
    var value = $('.selectpicker')[0].value;
    var title = $('#search-title')[0].value;
    window.location.href = './search?q=' + title + '&type=' + value;
}

function datesearchresult(id) {
    var dateall = document.getElementById(id).innerHTML.split(" ");
    var d = dateall[0].split("-");
    var datesearch = new Date(d[2], d[1], d[0]);
    $('#' + id)[0].innerHTML = "hochgeladen am " + d[2] + "." + d[1] + "." + d[0];
}

function datelabel(id) {
    var dateall = document.getElementById(id).innerHTML.split(" ");
    var d = dateall[0].split("-");
    var datesearch = new Date(d[2], d[1], d[0]);
    $('#' + id)[0].innerHTML = d[2] + "." + d[1] + "." + d[0];
}


// Search function when enter is pressed

$('header').keypress(function (e) {
    if (e.which == 13) {
        search();
    }
});

// Scroll up Button

//plugin
jQuery.fn.topLink = function(settings) {
    return this.each(function() {
        //listen for scroll
        var el = $(this);
        el.hide(); //in case the user forgot
        $(window).scroll(function() {
            if($(window).scrollTop() >= settings.min)
            {
                el.fadeIn(settings.fadeSpeed);
            }
            else
            {
                el.fadeOut(settings.fadeSpeed);
            }
        });
    });
};

//usage w/ smoothscroll
$(document).ready(function() {
    //set the link
    $('#top-link').topLink({
        min: 1,
        fadeSpeed: 200
    });
    //smoothscroll
    $('#top-link').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 1300);
    });
});




