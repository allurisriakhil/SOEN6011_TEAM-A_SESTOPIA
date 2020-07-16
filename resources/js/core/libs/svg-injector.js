//
// svg-injector.js
//

// Initialize the injection of SVGs into the DOM from src on img tags

// SVGInjector uses Array.from() which IE does not support.
import 'core-js/features/array/from';
import {
    SVGInjector
} from '@tanem/svg-injector';

// SVGInjector(document.querySelectorAll('[data-inject-svg]'), {
//     afterAll(elementsLoaded) {
//         console.log(`injected ${elementsLoaded} elements`)
//     },
//     afterEach(err, svg) {
//         if (typeof jarallax === 'function') {
//             svg.dispatchEvent(new CustomEvent('injected.mr.SVGInjector', {
//                 bubbles: true
//             }));
//         }

//         // if (err) {
//         //     throw err
//         // }
//         // console.log(`injected ${svg.outerHTML}`)
//     }
// })


SVGInjector(document.getElementsByClassName('inject-me'), {
    afterAll(elementsLoaded) {
        console.log(`injected ${elementsLoaded} elements`)
    },
    afterEach(err, svg) {
        if (typeof jarallax === 'function') {
            svg.dispatchEvent(new CustomEvent('injected.mr.SVGInjector', {
                bubbles: true
            }));
        }

        if (err) {
            throw err
        }
        console.log(`injected ${svg.outerHTML}`)
    },
    beforeEach(svg) {
        svg.setAttribute('stroke', 'red')
    },
    evalScripts: 'once',
    renumerateIRIElements: 'false'
})
