/**
 * Therapize Slide-Header
 *
 * Handle header slide animation on scroll. Header is also squished thin once below fold. Elements
 * in the header can update to suit by targeting with the inserted css class.
 *
 * @package therapize
 * @author Jefferson Real <jeff@webguyjeff.com>
 * @copyright Copyright 2025 Jefferson Real
 */

const slideHeader = () => {

	const selector = '.jsSlideHeader'

	let header,
		lastScrollY  = 0,
		isThrottled  = false,
		squishBuffer = 50 // Scroll this much before squish.

	const init = () => {
		const target = document.querySelector( selector )
		if ( ! target ) {
			return
		} else {
			header = target.closest( 'header' )
		}
		window.addEventListener( 'scroll', hasScrolledThrottle )
	}

	const hasScrolledThrottle = () => { 
		if ( isThrottled ) return
		isThrottled = true
		hasScrolled()
		const wait = setTimeout( () => {
			clearTimeout( wait )
			isThrottled = false
		}, 10 )
	}

	const hasScrolled = () => {
		const currentScrollY = window.scrollY
		const isScrollingDown = ( currentScrollY > lastScrollY ) ? true : false
		const isBelowFold  = window.scrollY > window.innerHeight
		const shouldSquish = window.scrollY > squishBuffer

		lastScrollY = currentScrollY

		// Squish on scroll down.
		if ( shouldSquish ) {
			header.classList.add( 'is-squished' )
		} else {
			header.classList.remove( 'is-squished' )
		}

		// Hide when scrolling down below page fold.
		if ( ! isBelowFold || ! isScrollingDown ) {
			show()
		} else if ( isBelowFold && isScrollingDown ) {
			hide()
		}
	}

	const show = () => header.classList.remove( 'is-hidden' )
	const hide = () => header.classList.add( 'is-hidden' )

	const docLoaded = setInterval( () => {
		if ( document.readyState === 'complete' ) {
			clearInterval( docLoaded )
			init()
		}
	}, 100 )
}

export { slideHeader }
