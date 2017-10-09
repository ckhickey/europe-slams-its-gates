$(function() {

	var windowEl = $(window);

    var global_headerHeight = 0;

    var global_currentSlide = 'intro-0--intro';

    var global_animationSpeed = 400;

    var global_documentTitle = document.title;
    var global_documentShortTitle = 'Europe Slams Its Gates';

    var global_isContentOnLoad = 'not set';

    window.scrollTo(0, 0);

    $('html').removeClass('no-js').addClass('js');


    /* package initialization functions into one parent function */
	function initializePage(_goToID, _animateToID, _animateMovement, _performToggle) {
		setTimeout(function(){

			/* remove "/" if present for link */
			_goToID = _goToID.replace("/","").replace("#","");
			_animateToID = _animateToID.replace("/","").replace("#","");

    		/* if content area is not yet published, take user to intro */
			if($('#'+_goToID).length < 1) _goToID = _goToID + '--intro';
			if($('#'+_animateToID).length < 1) _animateToID = _goToID;

    		/* set current slide being viewed */
    		global_currentSlide = _goToID;
    		if( global_currentSlide.indexOf('--intro') == -1 )  global_currentSlide = global_currentSlide + '--intro';

    		/* toggle display of prev / next buttons */
    		if(_performToggle) togglePrevNext();

    		/* update dek preview text that appears below prev/next buttons */
    		updateDekPreviews(_goToID);

    		/* scroll window to chosen content area */
    		animateToContentArea(_animateToID, _animateMovement);

    		/* update window history and URL */
    		updateHistoryAndURL(_animateToID);

    		/* move dot in nav */
    		var _setMarkerId = $('#'+_goToID).data('set-marker');
    		var _markerDot = $('.section-nav a[href="#'+_setMarkerId+'"]');
    		moveMarkerDot(_markerDot, global_animationSpeed);
        }, 150);
	}

	$('.share-icon').click(function(){
		if( $('.share-bar').is(':visible') ) {
			$('.share-bar').fadeOut();
		} else {
			setHeaderSocialContent(global_currentSlide, 200, false);
		}
	});

	/* handle internal link clicks */
	$('.internal-link').click(function(){
		var _this = $(this);

		/* get href value */
		var _goToID = _this.attr('href');
		_goToID = _goToID.replace("#","");

		/* if content area is not yet published, take user to intro */
		if($('#'+_goToID).length < 1) _goToID = _goToID + '--intro';

		var _isIntro = true;
		if(_goToID.indexOf('--intro') == -1) _isIntro = false;

		/* toggle display of prev/next buttons and article content area */
		if(_this.hasClass('read-link')) {

			if(!_isIntro) setHeaderSocialContent(_goToID, 200, true);

			$('article .content--main').not('#'+_goToID).fadeOut(global_animationSpeed);

            if(!_isIntro) {
            	$('.nav-arrows').fadeOut();
            } else {
            	$('.nav-arrows').fadeIn();
            }

			$('#'+_goToID).animate({
				scrollTop: 0
			}, 1, 'linear');

			$('#'+_goToID).fadeIn();

		} else {
			// set meta share data to defaults
			var _facebookDefaults = $('.share--options__nav a[data-endpoint="facebook"]');
			var _twitterDefaults = $('.share--options__nav a[data-endpoint="twitter"]');

			$('meta[property="og:title"]').attr('content', _facebookDefaults.data('title'));
			$('meta[property="og:image"]').attr('content', '');
			$('meta[property="og:url"]').attr('content', '');
			$('meta[property="og:description"]').attr('content',  _facebookDefaults.data('text'));

			$('meta[name="twitter:title"]').attr('content', _twitterDefaults.data('title'));
			$('meta[name="twitter:image"]').attr('content', '');
			$('meta[name="twitter:description"]').attr('content', _twitterDefaults.data('text'));
		}

		if(!_isIntro) $('.back-link--parent').css('opacity',1);

		/* user is going back to article intros */
		if(_this.hasClass('back-link')) {

			$('#'+_goToID).fadeIn();

			$('article .content--main').fadeOut(global_animationSpeed);

			$('section header').animate({
				scrollTop: 0
			}, 100, 'linear');

			$('.header--main .back-link--parent').fadeOut( function() {
				$('.header--main h1').fadeIn();
                if(!isMobileScreen()) $('.share--options__nav').fadeIn();
			});

			$('.share-bar').fadeOut( function() {
				if(!isMobileScreen()) {
					$('.section-nav').fadeIn();
				} else {
					$('.share--options__nav').fadeIn(global_animationSpeed);
				}
			});
		}

		initializePage(
			_goToID,
			_goToID,
			true,
			true
		);

		/* move section marker dot */
		if(_this.hasClass('section-marker')) {
			moveMarkerDot(_this, global_animationSpeed);
			updateDekPreviews(_goToID);
		}

     	/* toggle display of prev/next buttons and article content area */
     	if(!_this.hasClass('read-link') && !_this.hasClass('back-to-intro')) {
			$('.nav-arrows').fadeIn();
			$('article .content--main').fadeOut(global_animationSpeed);
		}

		/* prohibit default link functionality from envoking (i.e. do not take the user to a new page) */
		return false;
	});


	/* Prev/Next button clicks */
	$('.nav-arrow').click(function(){
		/* set default for next slide assuming user clicked next */
		var _goToID = '';

		var _next = $('#'+global_currentSlide).data('desktop-next');
		var _prev = $('#'+global_currentSlide).data('desktop-prev');

		if(isMobileScreen()) {
			_next = $('#'+global_currentSlide).data('mobile-next');
			_prev = $('#'+global_currentSlide).data('mobile-prev');
		}


		if($(this).parent().hasClass('prev')) {
			_goToID = _prev;
		} else {
			_goToID = _next;
		}

		if($(this).parent().hasClass('next')) {
			/* Set next slide as the first slide when you reach the end */
			if( $('#'+global_currentSlide).hasClass('last-slide') ) {
				_goToID = 'intro-0--intro';
			}
		}

		initializePage(
			_goToID,
			_goToID,
			true,
			true
		);

		return false;
	});


	/* size elements to window size */
	function resizeContentAreas() {
		global_headerHeight = $('.header--main').outerHeight();

		var _windowHeight = windowEl.outerHeight();
		var _windowWidth = windowEl.outerWidth();

		$('.content-wrapper').css({
			'width': _windowWidth * ($('section').length+1)
		});

		var _sectionHeight = _windowHeight - global_headerHeight + 7;
		if(isMobileScreen()) _sectionHeight = document.documentElement.clientHeight;

		$('section header, section.sidebar header').css({
			'height': _sectionHeight
		});

		return true;
	}
	setTimeout(function(){ resizeContentAreas(); }, 100);


	/* replace site heading with back to top link and show social share content */
	function setHeaderSocialContent(_goToID, _speed, _toggleHeader) {
		var _goToString = _goToID;
		if( _goToString.indexOf('--intro') == -1 )  _goToString = _goToString + '--intro';

		var _goToHeader = _goToString;

		if(_toggleHeader) {
			/* replace site heading... */
			$('.header--main h1').fadeOut( _speed, function() {
				/* ...with back to top link */
				$('.header--main .back-link--parent').fadeIn();

				var _backHeader = _goToHeader;
				/* if the user is on a second sidebar, take them back to the first sidebar so that both sidebars appear on screen */
				if($('#'+_goToHeader).hasClass('sidebar--second') && !isMobileScreen()) _backHeader = $('#'+_goToHeader).attr('data-desktop-prev');

				$('.header--main .back-link').attr('href',_backHeader);
			});
			$('.share--options__nav').fadeOut( _speed );
		}

		$('.section-nav').fadeOut( _speed, function() {
			/* show social share content */
			var _shareHeading = "";
			if(_toggleHeader) {
				if( $('#'+_goToString+' .share--head').length > 0 ) {
					_shareHeading = $('#'+_goToString+' .share--head').html();
				}
			}

			var _facebookShareText = $('.header--main h1').html();
			if(_toggleHeader) {
				if( $('#'+_goToString+' .share--facebook').length > 0 ) {
					_facebookShareText = $('#'+_goToString+' .share--facebook').html();
				} else if( $('#'+global_currentSlide+' .share--facebook').length > 0 ) {
					_facebookShareText = $('#'+global_currentSlide+' .share--facebook').html();
				}
			}

			var _twitterShareText = $('.header--main h1').html();
			if(_toggleHeader) {
				if( $('#'+_goToString+' .share--twitter').length > 0 ) {
					_twitterShareText = $('#'+_goToString+' .share--twitter').html();
				} else if( $('#'+global_currentSlide+' .share--twitter').length > 0 ) {
					_twitterShareText = $('#'+global_currentSlide+' .share--twitter').html();
				}
			}

			var _shareUrl = 'http://europeslamsitsgates.foreignpolicy.com/';
			if(_toggleHeader) {
				_shareUrl = 'http://europeslamsitsgates.foreignpolicy.com/'+_goToID;
			}

			var _shareImage = '';
			if(_toggleHeader) {
				if( $('#'+_goToString+' .share-image').length > 0 ) {
					_shareImage = $('#'+_goToString+' .share-image').attr('src');
				} else if( $('#'+global_currentSlide+' .share-image').length > 0 ) {
					_shareImage = $('#'+global_currentSlide+' .share-image').attr('src');
				}
			}

			$('.share-bar .share--title').html( _shareHeading );

			_shareHeading = stripHtml(_shareHeading);
			_facebookShareText = stripHtml(_facebookShareText);
			_twitterShareText = stripHtml(_twitterShareText);

			$('.share--options a[data-endpoint="facebook"]')
				.data('title', _shareHeading)
				.data('text', _facebookShareText)
				.data('url', _shareUrl);
			$('meta[property="og:title"]').attr('content', _shareHeading);
			$('meta[property="og:image"]').attr('content', _shareImage);
			$('meta[property="og:url"]').attr('content', _shareUrl);
			$('meta[property="og:description"]').attr('content', _facebookShareText);

			$('.share--options a[data-endpoint="twitter"]')
				.data('title', _shareHeading)
				.data('text', _shareHeading)
				.data('url', _shareUrl);
			$('meta[name="twitter:title"]').attr('content', _shareHeading);
			$('meta[name="twitter:image"]').attr('content', _shareImage);
			$('meta[name="twitter:description"]').attr('content', _twitterShareText);

			$('.share-bar').fadeIn();
		});
	}


	/* toggle display of prev / next buttons */
	function togglePrevNext() {
		var _prev = $('.prev');
		var _next = $('.next');

		if( $('#'+global_currentSlide).hasClass('last-slide') ) {
			_prev.show();
			_next.show();
		} else if( $('#'+global_currentSlide).hasClass('first-slide') ) {
			_prev.hide();
			_next.show();
		} else {
			_prev.show();
			_next.show();
		}
	}


	/* move section marker dot */
	function moveMarkerDot(_this, _speed) {
		if(_this.length < 1) return false;

		setTimeout(function(){
			var _width = _this.outerWidth();

			/* leave dot in current position if position of nav element cannot be calculated */
			if(parseInt(_this.outerWidth()) < 1) {
				/* rerun moveMarkerDot() until a value can be calculated */
				setTimeout(function(){
					moveMarkerDot(_this, _speed);
				}, 500);
			} else {
				/* get position relative to parent, not window */
				var _position = _this.position();
				var _positionLeft = _position.left;

				var _widthHalf = _width / 2;
				/* find horizontal middle of clicked element */
				var _left = _widthHalf + _positionLeft;
				/* animate left position of marker */
				$('.section-nav--marker').animate(
					{
						'left': _left
					},
					_speed,
					'linear',
					function() {
						/* show marker if it is hidden */
						$('.section-nav--marker').show();
		  			}
	  			);
	  		}

		}, 100);
	}


	/* update dek preview content in prev/next button areas */
	function updateDekPreviews(_goToID) {
		var _prevDek = $('.dek-prev');
		var _nextDek = $('.dek-next');

		var _currentSlide = $('#'+global_currentSlide);

		var _prevSlide = _currentSlide.data('desktop-prev');
		var _prevSlideString = _prevSlide.replace("--intro", "");

		if(_prevSlideString == 'intro-0') {
			//_prevSlideNumber = 0;
			_prevDek.html($('#intro-0-dek').html());
		} else {
			_prevDek.html($('#'+_prevSlideString+'-dek').html());
		}

		var _nextSlide = _currentSlide.data('desktop-next');
		var _nextSlideString = _nextSlide.replace("--intro", "");

		if(_nextSlideString == 'intro-0') {
			_nextDek.html($('#intro-0-dek').html());
		} else {
			_nextDek.html($('#'+_nextSlideString+'-dek').html());
		}

		return true;
	}


	/* evaluate size of users screen */
	function isMobileScreen() {
		if(windowEl.width() > 700) return false;
		return true;
	}


	/* animate window scroll to content area */
	function animateToContentArea(_goToID, _animate) {
		/* ensure desired content area is visible  */
		$('#'+_goToID).show();

		var _left = $('#'+_goToID).position().left;
		var _top = $('#'+_goToID).position().top - global_headerHeight + 2;

		var _headerWidth = $('header').width();

		var _isContentIntro = _goToID.indexOf('--intro') !== -1;
		var _isIntro = _goToID.indexOf('intro-0') !== -1;

		/* check to see if the user visited a content section on page load */
		if(global_isContentOnLoad == 'not set') {
			if(!_isContentIntro) {
				global_isContentOnLoad = true;
			} else {
				global_isContentOnLoad = false;
			}
		}

		/* set specific values for desktop */
		if (isMobileScreen() === false) {
			_headerWidth = _headerWidth * 0.1;

			if(_isContentIntro && !_isIntro) {
				_left = _left - _headerWidth;
			}
		}

		/* account for height of .share-bar within full article content area */
		var _shareBarHeight = $('.share-bar').outerHeight();
		if(_shareBarHeight < 1) _shareBarHeight = 42;

		if(isMobileScreen() && _isContentIntro && global_isContentOnLoad){
			_top = _top + _shareBarHeight;
		} else if(isMobileScreen() && !_isContentIntro && !global_isContentOnLoad){
			_top = _top - _shareBarHeight;
		} else {
			_top = _top + 5;
		}

		/* set animation speed */
		if(_animate) {
			_speed = global_animationSpeed;
		} else {
			_speed = 1;
		}

		_left = _left * -1;
		_top = _top * -1;

		/* animate scroll */
		$('.content-wrapper').animate({
			marginLeft: _left,
			marginTop: _top
		}, _speed, 'linear');

		return true;
	}


	/* router for page load */
	function processRouting() {
		var _urlArray = window.location.href.toString().split(window.location.host);
		var _fullGoToId = _urlArray[1].replace("/","").replace("#","");

		/* account for URLs with parameters added by social media and other tracking */
		_fullGoToId = _fullGoToId.split('?');
		_fullGoToId = _fullGoToId[0];

		/* default to 'intro-0' if loading the page with no parameters in URL */
		if(_fullGoToId == '') _fullGoToId = global_currentSlide;
		var _goToID = _fullGoToId;

		/* if content area is not yet published, take user to intro */
		if($('#'+_fullGoToId).length < 1) _fullGoToId = _fullGoToId + '--intro';

		if(_goToID == '') _goToID = global_currentSlide;

		if( _goToID.indexOf('--intro') == -1 )  _goToID = _goToID + '--intro';

		initializePage(
 			_goToID,
 			_fullGoToId,
 			false,
 			true
 		);

 		if(_fullGoToId.indexOf('--intro') == -1) {
 			setHeaderSocialContent(_goToID, 1, true);
 			$('.nav-arrows').hide();
 		}
	}
	processRouting();


	/* update window history and URL on internal link click */
	function updateHistoryAndURL(_goToID) {
        /* build and set page title */
		var _goToString = _goToID;
		if( _goToString.indexOf('--intro') == -1 )  _goToString = _goToString + '--intro';

		var _pageTitle = $('#'+_goToString+' header h1').html();

		if(_pageTitle == '' || (typeof _pageTitle == 'undefined')) _pageTitle = $('#'+_goToString+' header h2').html();

     	var _documentTitle = global_documentTitle;
     	if(_pageTitle != '' && (typeof _pageTitle != 'undefined')) {
     		if(_pageTitle !== global_documentShortTitle) {
     			_documentTitle = _pageTitle + ' - ' + global_documentShortTitle;
     		}
     	}

		/* set meta title */
     	if (document.title != _documentTitle) {
		    document.title = _documentTitle;
		}

		/* update window history and URL */
     	history.pushState({"html":$('#'+_goToID).html(),"pageTitle":_documentTitle}, _documentTitle, _goToID);

		return true;
	}


	/* toggle nav display */
	function toggleNavDisplay() {
		var _hamburgerButton = $('.hamburger-button');
		var _sectionNavWrapper = $('.section-nav');
		var _navSectionMarker = $('.section-nav--marker');
		var _navArticleHeader = $('.nav-article-header');
		var _navProjectTitle = $('.nav-project-title');
		var _projectTitle = $('header h1');
		var _sectionNavUlLiA = $('.section-nav ul li a');
		var _sectionMarker = $('.section-nav .section-marker');
		var _shareBar = $('.share-bar');
		var _backLinkParent = $('.back-link--parent');
        var _navArrows = $('.nav-arrows');
        var _credits = $('p.credits');


		_hamburgerButton.on( 'click', function() {
			var _urlArray = window.location.href.toString().split(window.location.host);
			var _fullGoToId = _urlArray[1].replace("/","").replace("#","");

			var _isContentIntro = _fullGoToId.indexOf('--intro') !== -1;

			/* close nav */
			if(_sectionNavWrapper.is('.open')) {
				if(!_isContentIntro) {
					_shareBar.fadeIn();
					_backLinkParent.css('opacity',1);
					_sectionNavWrapper.hide();
				}
				_sectionNavWrapper.removeClass('open');
				_hamburgerButton.removeClass('nav-open');
				_navArticleHeader.hide();
				_navProjectTitle.hide();
                _credits.hide();
				_projectTitle.css({'opacity':1});

				if(isMobileScreen()) {
					_sectionNavWrapper.hide();
					_navSectionMarker.hide();
					_sectionMarker.hide();
				} else {
					_navSectionMarker.show();
				}

				if(_isContentIntro) _navArrows.show();
			/* open nav */
			} else {
				_shareBar.fadeOut(1);
				_backLinkParent.css('opacity',0);
				_hamburgerButton.addClass('nav-open');
				_sectionNavWrapper.addClass('open').show();
				_navArticleHeader.show();
				_navProjectTitle.show();
				_projectTitle.css({'opacity':0});
				_navSectionMarker.hide();
                _credits.show();

				if(isMobileScreen()) {
					_sectionMarker.show();
				}

				_navArrows.hide();
			}
		});

		_sectionNavUlLiA.on('click', function() {
			_sectionNavWrapper.removeClass('open');
			_hamburgerButton.removeClass('nav-open');
			_navArticleHeader.hide();
			_navProjectTitle.hide();
			_projectTitle.css({'opacity':1});
            _credits.hide();

			if(isMobileScreen()) {
				_navSectionMarker.hide();
                _shareBar.hide();
			} else {
				_navSectionMarker.show();
			}
		});

	}
	toggleNavDisplay();


	$(window).resize(function(){
		resizeContentAreas();
		processRouting();

		var _urlArray = window.location.href.toString().split(window.location.host);
		var _fullGoToId = _urlArray[1].replace("/","").replace("#","");

		var _isContentIntro = _fullGoToId.indexOf('--intro') !== -1;

		if(!isMobileScreen() && _isContentIntro) {
			$('.section-nav ul li a').show();
			$('.section-nav').show();
		}
	});

	/* remove html from string */
	function stripHtml(html) {
		var tmp = document.createElement("DIV");
		tmp.innerHTML = html;
		return tmp.textContent || tmp.innerText || "";
	}

});
