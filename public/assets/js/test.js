/*
    // .indicator (dropcart, account-menu)
    */
    $(function() {
        $('.indicator--trigger--click .indicator__button').on('click', function(event) {
            event.preventDefault();

            const dropdown = $(this).closest('.indicator');

            if (dropdown.is('.indicator--open')) {
                dropdown.removeClass('indicator--open');
            } else {
                dropdown.addClass('indicator--open');
            }
        });

        $(document).on('click', function (event) {
            $('.indicator')
                .not($(event.target).closest('.indicator'))
                .removeClass('indicator--open');
        });
    });

/*
    // mobile search
    */
    $(function() {
        const mobileSearch = $('.mobile-header__search');

        if (mobileSearch.length) {
            $('.mobile-indicator--search .mobile-indicator__button').on('click', function() {
                if (mobileSearch.is('.mobile-header__search--open')) {
                    mobileSearch.removeClass('mobile-header__search--open');
                } else {
                    mobileSearch.addClass('mobile-header__search--open');
                    mobileSearch.find('.mobile-search__input')[0].focus();
                }
            });

            mobileSearch.find('.mobile-search__button--close').on('click', function() {
                mobileSearch.removeClass('mobile-header__search--open');
            });

            document.addEventListener('click', function(event) {
                if (!$(event.target).closest('.mobile-indicator--search, .mobile-header__search, .modal').length) {
                    mobileSearch.removeClass('mobile-header__search--open');
                }
            }, true);

            $('.mobile-search__vehicle-picker').on('click', function () {
                $('#vehicle-picker-modal').modal('show');
            });
        }
    });

/*
    // mobile search
    */
    $(function() {
        const mobileSearch = $('.mobile-header__search');

        if (mobileSearch.length) {
            $('.mobile-indicator--search .mobile-indicator__button').on('click', function() {
                if (mobileSearch.is('.mobile-header__search--open')) {
                    mobileSearch.removeClass('mobile-header__search--open');
                } else {
                    mobileSearch.addClass('mobile-header__search--open');
                    mobileSearch.find('.mobile-search__input')[0].focus();
                }
            });

            mobileSearch.find('.mobile-search__button--close').on('click', function() {
                mobileSearch.removeClass('mobile-header__search--open');
            });

            document.addEventListener('click', function(event) {
                if (!$(event.target).closest('.mobile-indicator--search, .mobile-header__search, .modal').length) {
                    mobileSearch.removeClass('mobile-header__search--open');
                }
            }, true);

            $('.mobile-search__vehicle-picker').on('click', function () {
                $('#vehicle-picker-modal').modal('show');
            });
        }
    });


    
    $(function() {
        $('.topbar__menu-button').on('click', function() {
            $(this).closest('.topbar__menu').toggleClass('topbar__menu--open');
        });

        $(document).on('click', function (event) {
            $('.topbar__menu')
                .not($(event.target).closest('.topbar__menu'))
                .removeClass('topbar__menu--open');
        });
    });