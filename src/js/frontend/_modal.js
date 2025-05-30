/**
 * Therapize Modal Javascript
 *
 * Handle modal animation and mechanics.
 *
 * @package therapize
 * @author Jefferson Real <jeff@webguyjeff.com>
 * @copyright Copyright 2025 Jefferson Real
 */

import { animate } from './_css-animator'

const modal = () => {
	function init() {
		document
			.querySelectorAll( '.modal_control-open' )
			.forEach( ( buttonOpen ) => {
				buttonOpen.addEventListener( 'click', modalLaunch )
			} )
	}

	let animating = false // true when animation is in progress.
	let active = false // true when modal is displayed.
	let mobile = true // true when screen width is less than 768px (48em).

	// Plugin-wide vars.
	let overlay
	let dialog
	let buttonClose

	/**
	 * Open the model popup.
	 *
	 * @param event
	 */
	async function modalLaunch( event ) {
		// Get the modal elements
		const modalClass = event.currentTarget.id
		overlay = document.querySelector( '.' + modalClass )

		dialog = overlay.querySelector( '.modal_dialog' )
		buttonClose = overlay.querySelector( '.modal_control-close' )

		buttonClose.onclick = () => {
			closeModal()
		}

		// If a click event is not on dialog
		window.onclick = function ( event ) {
			if (
				dialog !== ! event.target &&
				! dialog.contains( event.target )
			) {
				closeModal()
			}
		}

		await Promise.all( [ setDeviceSize(), getScrollbarWidth() ] )
		openModal()
	}

	async function setDeviceSize() {
		const pageWidth = parseInt(
			document.querySelector( 'html' ).getBoundingClientRect().width,
			10
		)

		if ( pageWidth <= 768 ) {
			mobile = true
		} else {
			mobile = false
		}

		if ( mobile && active && ! animating ) {
			dialog.style.left = '0'
			dialog.style.transform = 'scale(1)'
			dialog.style.opacity = '1'
			overlay.style.display = 'contents'
			overlay.style.opacity = '1'
		} else if ( mobile && ! active && ! animating ) {
			dialog.style.left = '-768px'
			dialog.style.transform = 'scale(1)'
			dialog.style.opacity = '1'
			overlay.style.display = 'contents'
			overlay.style.opacity = '1'
		} else if ( ! mobile && active && ! animating ) {
			dialog.style.left = '0'
			dialog.style.transform = 'scale(1)'
			dialog.style.opacity = '1'
			overlay.style.display = 'flex'
			overlay.style.opacity = '1'
		} else if ( ! mobile && ! active && ! animating ) {
			dialog.style.left = '0'
			dialog.style.transform = 'scale(0)'
			dialog.style.opacity = '0'
			overlay.style.display = 'none'
			overlay.style.opacity = '0'
		}
	}

	/**
	 * Restyle the modal on window resize.
	 *
	 * This prepares the modal by switching between different device
	 * layouts as required. Without this check, there is an inconsistancy in
	 * transitions if for example, the modal is launched as 'desktop' then
	 * closed as 'mobile'.
	 *
	 */
	function setResizeListener() {
		let resizeTimer
		const resizeListener = ( event ) => {
			if ( resizeTimer !== null ) window.clearTimeout( resizeTimer )
			resizeTimer = window.setTimeout( function () {
				if ( ! active ) {
					window.removeEventListener( 'resize', resizeListener )
					return
				}
				setDeviceSize()
			}, 20 )
		}
		window.addEventListener( 'resize', resizeListener )
	}

	// Open the modal
	async function openModal() {
		if ( ! active && ! animating ) {
			active = true
			animating = true
			disableScroll()
			setResizeListener()

			if ( mobile ) {
				dialog.style.left = '-768px'
				dialog.style.transform = 'scale(1)'
				dialog.style.opacity = '1'
				overlay.style.display = 'contents'
				overlay.style.opacity = '1'
				await animate( dialog, 'left', 'easeInOutCirc', -768, 0, 800 )
				animating = false
			} else {
				dialog.style.left = '0'
				dialog.style.transform = 'scale(0)'
				dialog.style.opacity = '0'
				overlay.style.display = 'flex'
				overlay.style.opacity = '0'
				fadeIn( overlay )
				await animate( dialog, 'scale', 'easeInOutCirc', 0, 1, 800 )
				animating = false
			}
		}
	}

	// Close the modal
	async function closeModal() {
		if ( active && ! animating ) {
			active = false
			animating = true
			enableScroll()

			if ( mobile ) {
				dialog.style.left = '0'
				dialog.style.transform = 'scale(1)'
				dialog.style.opacity = '1'
				overlay.style.display = 'contents'
				overlay.style.opacity = '1'
				await animate( dialog, 'left', 'easeInOutCirc', 0, -768, 800 )
				animating = false
			} else {
				dialog.style.left = '0'
				dialog.style.transform = 'scale(1)'
				dialog.style.opacity = '1'
				overlay.style.display = 'flex'
				overlay.style.opacity = '1'
				fadeOut( overlay )
				await animate( dialog, 'scale', 'easeInOutCirc', 1, 0, 800 )
				overlay.style.display = 'none'
				animating = false
			}
		}
	}

	// Moody overlay - fadeout
	function fadeOut( overlay ) {
		let p = 100 // 0.5 x 100 to escape floating point problem
		const animateFilterOut = setInterval( function () {
			if ( p <= 0 ) {
				clearInterval( animateFilterOut )
			}
			overlay.style.opacity = p / 100
			p -= 2 // 1 represents 0.01 in css output
		}, 16 ) // 10ms x 25 for 0.25sec animation
	}

	// Moody overlay - fadein
	function fadeIn( overlay ) {
		let p = 4 // 0.01 x 100 to escape floating point problem
		const animateFilterIn = setInterval( function () {
			if ( p >= 100 ) {
				// 100 (/100) represents 0.5 in css output
				clearInterval( animateFilterIn )
			}
			overlay.style.opacity = p / 100
			p += 2 // 1 represents 0.01 in css output
		}, 16 ) // 10ms x 25 for 0.25sec animation
	}

	let scrollbarWidth
	async function getScrollbarWidth() {
		// Get window width inc scrollbar
		const widthWithScrollBar = window.innerWidth
		// Get window width exc scrollbar
		const widthWithoutScrollBar = document
			.querySelector( 'html' )
			.getBoundingClientRect().width
		// Calc the scrollbar width
		scrollbarWidth =
			parseInt( widthWithScrollBar - widthWithoutScrollBar, 10 ) + 'px'
		return scrollbarWidth
	}

	function disableScroll() {
		// Cover the missing scrollbar gap with a black div
		const elemExists = document.getElementById( 'js_psuedoScrollBar' )

		if ( elemExists !== null ) {
			document.getElementById( 'js_psuedoScrollBar' ).style.display =
				'block'
		} else {
			const psuedoScrollBar = document.createElement( 'div' )
			psuedoScrollBar.setAttribute( 'id', 'js_psuedoScrollBar' )
			psuedoScrollBar.style.position = 'fixed'
			psuedoScrollBar.style.right = '0'
			psuedoScrollBar.style.top = '0'
			psuedoScrollBar.style.width = scrollbarWidth
			psuedoScrollBar.style.height = '100vh'
			psuedoScrollBar.style.background = '#333'
			psuedoScrollBar.style.zIndex = '9'
			document.body.appendChild( psuedoScrollBar )
		}
		document.querySelector( 'body' ).style.overflow = 'hidden'
		document.querySelector( 'html' ).style.paddingRight = scrollbarWidth
	}

	function enableScroll() {
		const elemExists = document.getElementById( 'js_psuedoScrollBar' )
		if ( elemExists !== null ) {
			document.getElementById( 'js_psuedoScrollBar' ).style.display =
				'none'
			document.querySelector( 'body' ).style.overflow = 'visible'
			document.querySelector( 'html' ).style.paddingRight = '0'
		}
	}

	// Poll for doc ready state
	const docLoaded = setInterval( function () {
		if ( document.readyState === 'complete' ) {
			clearInterval( docLoaded )
			init()
		}
	}, 100 )
}

export { modal }
