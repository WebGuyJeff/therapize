/*
 * svgPathDraw
 *
 * This function is universal to animate as many SVGs as required.
 *
 * Simply add the svgSelector class to the <svg> element, and the svgPathSelector
 * class to as many <path> elements within those SVGs to animate them.
 */

const svgPathDraw = () => {
	const svgSelector     = '.svgWithDrawPath',
		  svgPathSelector = '.svgDrawPath'
	
	const getDistanceFromDocTop = ( el ) => {
		const rect      = el.getBoundingClientRect(),
		      scrollTop = window.pageYOffset || document.documentElement.scrollTop
		return rect.top + scrollTop
	}
	
	const drawPaths = ( svg, paths ) => {
		const viewportHeight = window.innerHeight,
		      rect           = svg.getBoundingClientRect(),
		      svgFromViewTop = rect.top

		if ( svgFromViewTop > viewportHeight ) {
			// SVG not in view, so do nothing.
			return
		}

		const svgFromDocTop      = getDistanceFromDocTop( svg )
		const svgIsAbovePagefold = viewportHeight > svgFromDocTop ? true : false
		
		// Offset SVG path dash the same amount as percentage of SVG top within viewport.
		paths.forEach( ( path ) => {
			const pathLength  = path.getTotalLength()
			let scrollPercent = 0

			if ( svgIsAbovePagefold ) {
				scrollPercent = svgFromViewTop / svgFromDocTop
			} else {
				scrollPercent = svgFromViewTop / viewportHeight
			}

			const offsetPercent = 1 - Math.max( scrollPercent, 0 ),
				  draw          = pathLength * offsetPercent
			path.style.strokeDashoffset = pathLength - draw
		} )
	}
	
	const initialise = () => {
		const svgs = document.querySelectorAll( svgSelector )
		svgs.forEach( ( svg ) => {
			const paths = svg.querySelectorAll( svgPathSelector )

			// Hide the paths by offsetting dash and make them visible (hidden on pageload).
			paths.forEach( ( path ) => {
				const pathLength = path.getTotalLength()
				path.style.strokeDasharray = pathLength
				path.style.strokeDashoffset = pathLength
				path.style.visibility = 'visible'
			} )

			window.addEventListener( 'scroll', () => {
				drawPaths( svg, paths )
			} )
		} )
	}
	
	const docReady = setInterval( () => {
		if ( document.readyState === 'complete' ) {
			clearInterval( docReady )
			initialise()
		}
	}, 50 )
}

export { svgPathDraw }
